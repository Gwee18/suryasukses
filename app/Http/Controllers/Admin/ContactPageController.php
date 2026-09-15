<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactPage;
use App\Models\ContactPic;
use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactPageController extends Controller
{
    public function edit()
    {
        $contactPage = ContactPage::first() ?? new ContactPage();
        $offices = Office::with('phones', 'addressLines')->orderBy('order')->get();
        $pics = ContactPic::orderBy('order')->get();

        return view('admin.contact.edit', compact('contactPage', 'offices', 'pics'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_eyebrow' => 'nullable|string|max:255',
            'hero_title' => 'nullable|string|max:255',
            'intro_title' => 'nullable|string|max:255',
            'intro_text' => 'nullable|string',
            'intro_note' => 'nullable|string|max:255',
            'support_title' => 'nullable|string|max:255',
            'support_email' => 'nullable|email|max:255',
            'whatsapp_label' => 'nullable|string|max:255',
            'whatsapp_display' => 'nullable|string|max:255',
            'whatsapp_link' => 'nullable|url|max:255',

            'offices' => 'nullable|array',
            'offices.*.name' => 'required|string|max:255',
            'offices.*.map_url' => 'nullable|url|max:255',
            'offices.*.phones' => 'nullable|array',
            'offices.*.phones.*' => 'nullable|string|max:255',
            'offices.*.address_lines' => 'nullable|array',
            'offices.*.address_lines.*' => 'nullable|string|max:255',

            'pics' => 'nullable|array',
            'pics.*' => 'nullable|string|max:255',
        ]);

        DB::transaction(function () use ($validated) {
            // 1. Simpan data tunggal (hero, intro, dukungan)
            $contactPageData = collect($validated)->only([
                'hero_eyebrow', 'hero_title', 'intro_title', 'intro_text', 'intro_note',
                'support_title', 'support_email', 'whatsapp_label', 'whatsapp_display', 'whatsapp_link',
            ])->toArray();

            $contactPage = ContactPage::first();
            if ($contactPage) {
                $contactPage->update($contactPageData);
            } else {
                ContactPage::create($contactPageData);
            }

            // 2. Hapus semua kantor lama, buat ulang sesuai urutan form
            // (paling sederhana & aman untuk repeater yang bisa tambah/hapus baris secara bebas)
            Office::query()->delete(); // phones & addressLines ikut terhapus otomatis (cascadeOnDelete)

            $officesInput = $validated['offices'] ?? [];
            foreach (array_values($officesInput) as $index => $officeData) {
                if (empty(trim($officeData['name'] ?? ''))) {
                    continue;
                }

                $office = Office::create([
                    'name' => $officeData['name'],
                    'map_url' => $officeData['map_url'] ?? null,
                    'order' => $index,
                ]);

                $phones = array_filter($officeData['phones'] ?? [], fn ($p) => trim($p) !== '');
                foreach (array_values($phones) as $pIndex => $phone) {
                    $office->phones()->create(['phone' => $phone, 'order' => $pIndex]);
                }

                $addressLines = array_filter($officeData['address_lines'] ?? [], fn ($l) => trim($l) !== '');
                foreach (array_values($addressLines) as $lIndex => $line) {
                    $office->addressLines()->create(['line' => $line, 'order' => $lIndex]);
                }
            }

            // 3. Hapus semua PIC lama, buat ulang
            ContactPic::query()->delete();
            $picsInput = array_filter($validated['pics'] ?? [], fn ($p) => trim($p) !== '');
            foreach (array_values($picsInput) as $index => $pic) {
                ContactPic::create(['name_phone' => $pic, 'order' => $index]);
            }
        });

        return redirect()->route('admin.contact.edit')->with('success', 'Halaman Contact Us berhasil diperbarui.');
    }
}