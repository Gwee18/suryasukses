<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Market;

class MarketSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
              'title' => 'Beverage',
              'slug' => 'beverage',
              'subtitle' => 'Our Markets',
              'description' => '',
              'banner_image' => 'category/e9419-ill-beverage.jpg',
              'whatsapp_text' => '+62 857 7730 3030',
              'whatsapp_link' => 'http://wa.me/6285777303030',
              'cards' => 
              [
                0 => 
                [
                  'image' => 'brand/85484-water.jpg',
                  'title' => 'Water',
                  'subtitle' => 'A cornerstone of the beverage market, we’ll work with you to create lightweight and sustainable packaging solutions to keep shipping costs low and consumer satisfaction high.',
                ],
                1 => 
                [
                  'image' => 'brand/bb939-carbonated.jpg',
                  'title' => 'Carbonates & Juices',
                  'subtitle' => 'Our design and manufacturing expertise allows us to constantly create new, innovative, and eye-catching packaging solutions that will set your product apart from the competition.',
                ],
                2 => 
                [
                  'image' => 'brand/33616-CCJ_0068.jpg',
                  'title' => 'Coffee & Tea',
                  'subtitle' => 'We have a variety of packaging capabilities in RTD tea and coffee, from traditional bottle to 120 ml single wall cup. SAP Group also offer oxium additive options to make our product eco-friendly and biodegradable.',
                ],
              ],
            ],
            [
              'title' => 'Healthcare',
              'slug' => 'healthcare',
              'subtitle' => 'Our Markets',
              'description' => '',
              'banner_image' => 'category/3cedf-ill-healthcare.jpg',
              'whatsapp_text' => '+62 857 7730 3030',
              'whatsapp_link' => 'http://wa.me/6285777303030',
              'cards' => 
              [
                0 => 
                [
                  'image' => 'brand/95ad6-pharmaceutical.jpg',
                  'title' => 'Pharmaceutical',
                  'subtitle' => 'We are proud to be a global leader in packaging. Our pharmaceutical packaging expertise spans the full range of drug delivery routes. From child-resistant and senior-friendly closures to user-independent droppers, we can also develop custom packaging solutions to fit your specific needs.',
                ],
                1 => 
                [
                  'image' => 'brand/fd9ac-surgical.jpg',
                  'title' => 'Surgical Needs',
                  'subtitle' => 'AMARI Nonwoven (PP Spunbond & Meltblown] has a vital role in the medical sector. These include surgical gowns, masks, curtains, pillowcases, pampers, and bed sheets The advantage of AMARI Nonwoven in the medical area is its disposable nature to ensure 100% sterile, practical and does not require cleaning costs for reuse. Along with the development of the latest medical technology, doctors and hospitals are now using nonwoven fabrics as Hygiene Standards, which are not only economical and environmentally friendly but also safe, disposable and practical to use.',
                ],
                2 => 
                [
                  'image' => 'brand/ae960-disinfecting-wipes.jpg',
                  'title' => 'Disinfecting Wipes',
                  'subtitle' => 'The increasing rate of hospital acquired infections is a worry to us all. We are fighting back with a wipes product range that supports disinfectants and their required contact times with supporting materials that medical professionals can trust.',
                ],
              ],
            ],
            [
              'title' => 'Household',
              'slug' => 'household',
              'subtitle' => 'Our Markets',
              'description' => '',
              'banner_image' => 'category/52426-ill-households.jpg',
              'whatsapp_text' => '+62 857 7730 3030',
              'whatsapp_link' => 'http://wa.me/6285777303030',
              'cards' => 
              [
                0 => 
                [
                  'image' => 'brand/7d524-laundry.jpg',
                  'title' => 'Laundry',
                  'subtitle' => '',
                ],
                1 => 
                [
                  'image' => 'brand/c3305-cleaning-products.jpg',
                  'title' => 'Cleaning Products',
                  'subtitle' => '',
                ],
                2 => 
                [
                  'image' => 'brand/d7743-gardening.jpg',
                  'title' => 'Gardening',
                  'subtitle' => '',
                ],
              ],
            ],
            [
              'title' => 'Agriculture',
              'slug' => 'agriculture',
              'subtitle' => 'Our Markets',
              'description' => '',
              'banner_image' => 'category/266aa-ill-agriculture.jpg',
              'whatsapp_text' => '+62 857 7730 3030',
              'whatsapp_link' => 'http://wa.me/6285777303030',
              'cards' => 
              [
                0 => 
                [
                  'image' => 'brand/90e27-greenhouse.jpg',
                  'title' => 'Greenhouse Film',
                  'subtitle' => 'AMARI Nonwoven is used effectively to optimize the productivity of food crops, gardens and greenhouses. With AMARI Nonwoven protection, the need for pesticides and manual labor can be reduced.',
                ],
                1 => 
                [
                  'image' => 'brand/ae21b-munch-film.jpg',
                  'title' => 'Mulch Film',
                  'subtitle' => 'Agriculture technology are now vast and way more advanced as time goes by. A field with plastic mulch film coverage will help plants grow protected and healthy.',
                ],
                2 => 
                [
                  'image' => 'brand/cf2da-fruit-protect.jpg',
                  'title' => 'Fruit Protection',
                  'subtitle' => 'AMARI nonwoven can be used to Protect fruit without using agro chemicals; ideal for organic or bio-rational plants. It generates microclimate that encourages fruit growth and quality. In Banana Trees, it managed to speed up the harvest for up to 2 weeks',
                ],
              ],
            ],
            [
              'title' => 'Industrial',
              'slug' => 'industrial',
              'subtitle' => 'Our Markets',
              'description' => '',
              'banner_image' => 'category/d6c99-ill-industrial.jpg',
              'whatsapp_text' => '+62 857 7730 3030',
              'whatsapp_link' => 'http://wa.me/6285777303030',
              'cards' => 
              [
                0 => 
                [
                  'image' => 'brand/8d00c-industrial-wipes.jpg',
                  'title' => 'Industrial Wipes',
                  'subtitle' => 'Our spunbond product solutions support general purpose industrial cleaning needs and specialized tasks in every stage of the automotive and other technical manufacturing process.',
                ],
                1 => 
                [
                  'image' => 'brand/bd03c-industrial-protector-covers.jpg',
                  'title' => 'Industrial Protectors & Cover',
                  'subtitle' => 'Our spunbond polypropylene fabrics can be applied in many automotive and other machinery manufacturing components, such as product covers or packaging / bag,mattress layer, shoe layer, secondary carpet backing, headliners, acoustic scrims, and adhesive layers.',
                ],
              ],
            ],
            [
              'title' => 'Filtration',
              'slug' => 'filtration',
              'subtitle' => 'Our Markets',
              'description' => '',
              'banner_image' => 'category/36daa-ill-filtration.jpg',
              'whatsapp_text' => '+62 857 7730 3030',
              'whatsapp_link' => 'http://wa.me/6285777303030',
              'cards' => 
              [
                0 => 
                [
                  'image' => 'brand/8560a-air-filtration.jpg',
                  'title' => 'Air Filtration',
                  'subtitle' => 'Surya Sukses Group’s meltblown materials serve a wide variety of air applications from room air purifier to facemasks to cabin air filtration.',
                ],
                1 => 
                [
                  'image' => 'brand/b51b4-liquid-filtration.jpg',
                  'title' => 'Liquid Filtration',
                  'subtitle' => 'Surya Sukses Group’s spunbond materials are suitable for filter manufacturers factory for their high strength, uniformity, and cleanliness in pleated filter cartridges. The polypropylene materials allows for a wide range of temperature and chemical compatibility.',
                ],
              ],
            ],
            [
              'title' => 'Building Construction',
              'slug' => 'building-construction',
              'subtitle' => 'Our Markets',
              'description' => NULL,
              'banner_image' => 'category/51342-ill-building.jpg',
              'whatsapp_text' => '+62 857 7730 3030',
              'whatsapp_link' => 'http://wa.me/6285777303030',
              'cards' => 
              [
                0 => 
                [
                  'title' => 'Building Wraps And Roofing Under Layer',
                  'subtitle' => 'Surya Sukses Group’s spunbond materials can be used as an insulation for energy efficient building, and it can serve as roofing underlay too. Our product is resistant to climate and weather, and it does not stretch or warp',
                  'image' => 'brand/150ad-building-wraps.jpg',
                ],
                1 => 
                [
                  'title' => 'UPVC Roofing System',
                  'subtitle' => 'Amari UPVC roof can be used within a larger temperature range than the usual UPVC product in the markets. They preserve all their physical qualities even in the extreme conditions. Other qualities includes heat and noise insualtions and categorized as B1 incombustibility class',
                  'image' => 'brand/49425-roof-system.jpg',
                ],
              ],
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Market::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
