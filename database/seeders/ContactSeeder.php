<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Page;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title' => 'Contact Us',
                'slug' => 'contact',
                'content' => [
                    'hero_eyebrow' => 'Contact Us',
                    'hero_title' => "We're at your service",
                    'intro_title' => "We're here to help you",
                    'intro_text' => 'We provide a variety of resources to assist our customers and partners in configuring, designing, enhancing and upgrading products. Customers will receive support services and product consultancy support, technical assistance and product sampling.',
                    'intro_note' => 'Please contact our help-line at these numbers',
                    'offices' => [
                        [
                            'name' => 'Suryasukses Group Surabaya',
                            'phones' => ['031 5030450 / 99603700'],
                            'address_lines' => ['Jl. Kertajaya 109 Surabaya 60286 - Indonesia', 'Jl. Raya Sedati 97 Sidoarjo - Indonesia'],
                            'map' => 'https://goo.gl/maps/RmAtJontTNyMtMuZ6',
                        ],
                        [
                            'name' => 'Suryasukses Group Jakarta',
                            'phones' => ['021 386 1333'],
                            'address_lines' => ['Jakarta', 'Jl. Cideng Timur No. 70E dan F', 'Jakarta Pusat - Indonesia'],
                            'map' => 'https://maps.app.goo.gl/zoNV8ckCL8zGQuDf6',
                        ],
                        [
                            'name' => 'Suryasukses Group Bekasi',
                            'phones' => ['+62 821-6488-8806'],
                            'address_lines' => ['Kawasan Industri MM2100', 'Jl. Selayar Blk. B3 No.1, Mekarwangi Kec. Cikarang Bar, Bekasi, Jawa Barat 17530'],
                            'map' => 'https://goo.gl/maps/K9uRD4tDpK2Wyphd7',
                        ],
                    ],
                    'support_title' => 'PIC Kantor Surabaya',
                    'pics' => ['Phyllia (081 651 1229)', 'Livia & Ayu (0882 2616 3037)'],
                    'support_email' => 'cs@suryasukses.com',
                    'whatsapp_label' => 'Whatsapp',
                    'whatsapp_display' => '+62 81 651 1229',
                    'whatsapp_link' => 'https://wa.me/62816511229',
                ],
                'cover_image' => null,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Page::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}