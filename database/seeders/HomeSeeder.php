<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Page;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
              'title' => 'Suryasukses Group,',
              'slug' => 'home',
              'content' => 
              [
                'hero_text' => 'A reputation in the premium plastic related products.',
              ],
              'cover_image' => NULL,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Page::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
