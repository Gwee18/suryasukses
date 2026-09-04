<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuryasuksesStudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudioController extends Controller
{
    /**
     * Show the form for editing the studio settings.
     */
    public function edit()
    {
        // Get the first record, or create an empty one if not exists
        $studio = SuryasuksesStudio::first();
        
        if (!$studio) {
            $studio = new SuryasuksesStudio();
        }

        return view('admin.studio.form', compact('studio'));
    }

    /**
     * Update the studio settings in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'main_text' => 'required|string',
            'whatsapp' => 'required|string|max:50',
            'whatsapp_link' => 'required|url|max:255',
            'hero_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $studio = SuryasuksesStudio::first();
        if (!$studio) {
            $studio = new SuryasuksesStudio();
        }

        $studio->main_text = $validated['main_text'];
        $studio->whatsapp = $validated['whatsapp'];
        $studio->whatsapp_link = $validated['whatsapp_link'];

        if ($request->hasFile('hero_image_file')) {
            // Delete old file if exists
            if ($studio->hero_image && file_exists(public_path('assets/images/' . $studio->hero_image))) {
                @unlink(public_path('assets/images/' . $studio->hero_image));
            }

            $file = $request->file('hero_image_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/solutions/'), $filename);
            $studio->hero_image = 'solutions/' . $filename;
        }

        $studio->save();

        return redirect()->route('admin.studio.edit')->with('success', 'Pengaturan Suryasukses Studio berhasil diperbarui.');
    }
}
