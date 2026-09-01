<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Page;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
              'title' => 'Who We Are',
              'slug' => 'about',
              'content' => 
              [
                'image_1' => 'about/bca40e3401new.jpg',
                'image_2' => 'about/248abe37b4banners_whowe.jpg',
                'main_text' => '<p>At Suryasukses, we take pride in our heritage and the company we\'ve become today. Throughout our history, it has been the dedication of our team members that has allowed us to grow into a leading plastic manufacturing company.</p><p>Our history is rich in product innovation, customer focus, and strategic growth. With roots as a small, hometown company based in Surabaya, Indonesia, Suryasukses Group has come a long way since it was established in 1985 under the name Multindo Plastics. Starting with few injection machines, and now we have over 10,000 international and local customers</p><p>From houseware manufacturer we diversify our business to rigid plastic packaging, starting from thermoforming cups to printing, then preform, bottles, and closures, serving home industries to well established food and beverage companies. We further expand our market with nonwoven products to cater hygiene, agriculture, and industrial markets. Lastly, with deep knowledge of breakthrough materials and backed with professionals with decades of experience, Amari Upvc Roofing will surely satisfies the market with strong, consistent, unique and competitive products.</p><p>We take great pride in the company we have developed and the products and services we offer. Our ability to support our customers at every stage of the product development process-including expertise in consumer insights, ideation and design, manufacturing and research and development-is what has allowed us to become a leader in the industry</p>',
              ],
              'cover_image' => NULL,
            ],
            [
              'title' => 'Our Values',
              'slug' => 'about-values',
              'content' => 
              [
                'image_1' => 'about/3b5fb3dfb6_OPS6411.jpg',
                'title_partnerships' => 'Partnerships',
                'partnerships' => 'We recognize the importance of strong, sustainable partnerships throughout all aspects of our business - we view our employees, customers, suppliers, and communities as our partners.',
                'title_excellence' => 'Excellence',
                'excellence' => 'We pursue excellence in all that we do by optimizing our processes, enhancing our sustainability initiatives, and by providing the highest quality products and services to our customers. We believe in continuous training and development for our employees so that we can deliver excellence to our customers.',
                'title_growth' => 'Growth',
                'growth' => 'Strategic growth is imperative for our business. Growth comes in many forms - financial growth, customer growth, employee growth and development, product growth and innovation, and the global growth of our Company.',
                'title_safety' => 'Safety',
                'safety' => 'Our number one value. We relentlessly pursue safety in all we do. We maintain high standards to ensure our facilities are safe and environmentally conscious.',
              ],
              'cover_image' => NULL,
            ],
            [
              'title' => 'Quality Statement',
              'slug' => 'about-quality',
              'content' => 
              [
                'image_1' => 'about/b1b1e898fbLayer-43.jpg',
                'image_2' => 'about/ea8e93cbf2Layer-44.jpg',
                'image_3' => 'about/f8f77a1e23Layer-42.png',
                'quality_1' => '<p>Quality products and on time delivery are the things that made us different. With hairline precision production and exceptional discipline in time management, Suryasukses Group has managed to be on top when it comes to quality.</p><p>The Suryasukses Group puts strong emphasis on quality. The best manufacturing practice in Suryasukses Group is centrally coordinated and implemented at each plant to ensure superior quality. The best manufacturing practice is continuously pushed up to lift the quality level further. All Suryasukses Group plants are ISO 9000 certified and following the intense and strict interntional safety standard regulation.<br></p>',
                'quality_2' => '<p>The quality control team at Suryasukses group continually assessed for precision without tolerance. Our test lab are fully equipped with the highest technology available to ensure quality checking. This attention to detail is reflected in the end product that our customer receive.</p>',
                'quality_3' => '<p>It is our quality standard that high-end production result still need to be final checked in batches, it is the harmony between high tech and skilled human resource with eye for detail. Blending the human capability with precision machinery will bring consistency to the whole process and finished products.</p>',
              ],
              'cover_image' => NULL,
            ],
            [
              'title' => 'Come Grow With Us',
              'slug' => 'about-career',
              'content' => 
              [
                'image_1' => 'about/3b5fb3dfb6_OPS6411.jpg',
                'career_text' => '<p>We attribute our success on hiring and maintaining a positive and productive workforce.</p><p>SuryaSukses Group has established a reputation in the industry for being trustworthy and reliable, Our corporate culture is dynamic, creative, and innovative. Learn more about our career and opportunities.</p>',
                'career_btn_text' => 'Join Our Team',
                'career_link' => 'https://id.jobstreet.com/companies/suryasukses-group-168535852924657',
                'career_btn_color' => '#0056b3',
              ],
              'cover_image' => NULL,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Page::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
