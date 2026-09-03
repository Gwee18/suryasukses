<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\HomeSlider::truncate();
        \App\Models\HomeSliderImage::truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $defaultProducts = [
            1 => [
                'icon' => 'home/bawah-slide1.png',
                'title' => 'Bottles and Caps',
                'description' => 'Recyclable bottles that deliver pristine quality to fulfill customers` needs.',
                'link' => '/product',
                'images' => ['home/bottle001-new.png', 'home/bottle002.jpg'],
            ],
            2 => [
                'icon' => 'home/bawah-slide-5.png',
                'title' => 'Drinking Cups & Lids',
                'description' => 'Our disposable cups are light-weight and cost efficient. We also offer multiple decoration options.',
                'link' => '/product',
                'images' => ['home/drinking-cups001-new.png', 'home/drinking-cups002.jpg'],
            ],
            3 => [
                'icon' => 'home/bawah-slide2.png',
                'title' => 'Specialty Nonwoven',
                'description' => 'A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product.',
                'link' => '/product',
                'images' => ['home/cover-specialty.jpg'],
            ],
            4 => [
                'icon' => 'home/bawah-slide3.png',
                'title' => 'Housewares',
                'description' => 'We provide customers with qualified household products, innovative design, and prompt delivery at a very competitive price. Each products are designed to comfort and ease your life.',
                'link' => '/product',
                'images' => ['home/cover-garden.jpg', 'home/cover-cleaningware.jpg', 'home/cover-racks.jpg', 'home/cover-kitchenware.jpg', 'home/cover-sealware.jpg', 'home/cover-bathroom.jpg'],
            ],
            5 => [
                'icon' => 'home/bawah-slide4.png',
                'title' => 'Roofing System',
                'description' => 'Roofing sheets manufactured from UPVC, designed to suit a diverse range of applications in various markets.',
                'link' => '/product',
                'images' => ['home/cover-roofing-suryasukses.jpg'],
            ],
        ];

        foreach ($defaultProducts as $order => $product) {
            $slider = \App\Models\HomeSlider::create([
                'order' => $order,
                'icon' => $product['icon'],
                'title' => $product['title'],
                'description' => $product['description'],
                'link' => $product['link'],
            ]);

            foreach ($product['images'] as $imgOrder => $image) {
                \App\Models\HomeSliderImage::create([
                    'home_slider_id' => $slider->id,
                    'image' => $image,
                    'order' => $imgOrder + 1,
                ]);
            }
        }
    }
}
