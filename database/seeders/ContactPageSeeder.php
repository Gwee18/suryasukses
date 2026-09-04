<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactPage;
use App\Models\Office;
use App\Models\ContactPic;

class ContactPageSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data tunggal (hero, intro, info dukungan)
        $contactPage = ContactPage::first();
        $contactPageData = [
            'hero_eyebrow' => 'Contact Us',
            'hero_title' => "We're at your service",
            'intro_title' => "We're here to help you",
            'intro_text' => 'We provide a variety of resources to assist our customers and partners in configuring, designing, enhancing and upgrading products. Customers will receive support services and product consultancy support, technical assistance and product sampling.',
            'intro_note' => 'Please contact our help-line at these numbers',
            'support_title' => 'PIC Kantor Surabaya',
            'support_email' => 'cs@suryasukses.com',
            'whatsapp_label' => 'Whatsapp',
            'whatsapp_display' => '+62 81 651 1229',
            'whatsapp_link' => 'https://wa.me/62816511229',
        ];

        if ($contactPage) {
            $contactPage->update($contactPageData);
        } else {
            ContactPage::create($contactPageData);
        }

        // 2. Daftar Kantor beserta nomor telepon & alamatnya
        $offices = [
            [
                'name' => 'Suryasukses Group Surabaya',
                'map_url' => 'https://goo.gl/maps/RmAtJontTNyMtMuZ6',
                'phones' => ['031 5030450 / 99603700'],
                'address_lines' => [
                    'Jl. Kertajaya 109 Surabaya 60286 - Indonesia',
                    'Jl. Raya Sedati 97 Sidoarjo - Indonesia',
                ],
            ],
            [
                'name' => 'Suryasukses Group Jakarta',
                'map_url' => 'https://maps.app.goo.gl/zoNV8ckCL8zGQuDf6',
                'phones' => ['021 386 1333'],
                'address_lines' => [
                    'Jakarta',
                    'Jl. Cideng Timur No. 70E dan F',
                    'Jakarta Pusat - Indonesia',
                ],
            ],
            [
                'name' => 'Suryasukses Group Bekasi',
                'map_url' => 'https://goo.gl/maps/K9uRD4tDpK2Wyphd7',
                'phones' => ['+62 821-6488-8806'],
                'address_lines' => [
                    'Kawasan Industri MM2100',
                    'Jl. Selayar Blk. B3 No.1, Mekarwangi Kec. Cikarang Bar, Bekasi, Jawa Barat 17530',
                ],
            ],
        ];

        foreach ($offices as $index => $officeData) {
            $office = Office::updateOrCreate(
                ['name' => $officeData['name']],
                ['map_url' => $officeData['map_url'], 'order' => $index]
            );

            // Hapus dulu nomor & alamat lama, lalu isi ulang (biar tidak dobel kalau seeder dijalankan berkali-kali)
            $office->phones()->delete();
            foreach ($officeData['phones'] as $pIndex => $phone) {
                $office->phones()->create(['phone' => $phone, 'order' => $pIndex]);
            }

            $office->addressLines()->delete();
            foreach ($officeData['address_lines'] as $lIndex => $line) {
                $office->addressLines()->create(['line' => $line, 'order' => $lIndex]);
            }
        }

        // 3. Daftar PIC
        ContactPic::query()->delete();
        $pics = ['Phyllia (081 651 1229)', 'Livia & Ayu (0882 2616 3037)'];
        foreach ($pics as $index => $pic) {
            ContactPic::create(['name_phone' => $pic, 'order' => $index]);
        }
    }
}