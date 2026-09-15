<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\HomeCard;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::truncate();
        HomeCard::truncate();

        $home = Home::create([
            'hero_text' => 'A reputation in the premium plastic related products.',
            'video_title' => 'SAP Corporate Profile Video',
            'video_subtitle' => 'Sharing our passion, realizing your ideas and visions.',
            'video_url' => 'https://www.youtube.com/embed/Aj2C4Xp-GMM',
            'news_title' => 'News and Articles'
        ]);

        $cards = [
            ['title' => 'Get to Know SAP', 'desc' => 'Established in 1990, we are uniquely positioned to provide customers with the best, on-trend products.', 'img' => 'home/d1f20f2452homesec-1.jpg', 'link' => '/about'],
            ['title' => 'Our Markets', 'desc' => 'Combining three-decade experience and a fully dedicated team, we are ready to serve a wide range of industries.', 'img' => 'home/f49e0c021bhomesec-2.jpg', 'link' => '/markets/beverage'],
            ['title' => 'SAP Solutions', 'desc' => 'Transform your idea into realization with our design team. Discover value-added, customized solutions.', 'img' => 'home/9fadce803chomesec-3.jpg', 'link' => '/solutions'],
            ['title' => 'SAP Career', 'desc' => 'Join us. Grow together. Get in touch now to explore exciting opportunities.', 'img' => 'home/2008b6a72chomesec-4.jpg', 'link' => '/about/career']
        ];

        foreach ($cards as $index => $card) {
            HomeCard::create([
                'title' => $card['title'],
                'description' => $card['desc'],
                'image' => $card['img'],
                'link' => $card['link'],
                'order' => $index + 1
            ]);
        }
    }
}
