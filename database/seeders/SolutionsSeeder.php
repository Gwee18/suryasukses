<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Page;

class SolutionsSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
              'title' => 'Capabilities',
              'slug' => 'capabilities',
              'content' => 
              [
                'cap_img_1' => 'solutions/ff445c40b3injection (1).jpg',
                'cap_title_1' => 'Injection Molding',
                'cap_desc_1' => 'We have over 1000 products variations and over 30 years of experience and expertise necessary to provide the highest quality results for large and small scale manufacturing.
            
            Applications: Packaging, preform, bottle caps, storage containers, household products',
                'cap_img_2' => 'solutions/b399409e51blow (1).jpg',
                'cap_title_2' => 'Blow Molding',
                'cap_desc_2' => 'As a long-standing name in the blow molding space, we serve a multitude of markets ranging from beverages to automotive.We currently manufacture a range of sizes from some of the smallest to largest bottles.
            
            Applications: Bottles,',
                'cap_img_3' => 'solutions/49cf55322dCCJ_9900.jpg',
                'cap_title_3' => 'Thermoforming',
                'cap_desc_3' => 'As a pioneer for thermoformed drink cups, we lead the way for innovation. We are continuously expanding our expertise to include new thermoformed products.
            
            Applications: disposable cups, containers, lids, trays',
                'cap_img_4' => 'solutions/3012f54c58CCJ_0062.jpg',
                'cap_title_4' => 'Offset Printing',
                'cap_desc_4' => 'The Dry Offset Printing process provides the most efficient method for high speed, large volume printing of multi-colored line copy, half-tones and full process art on preformed plastic parts. This option is widely used and can be completed at very high speeds.
            
            Applications: Round containers, drink cups, jars',
                'cap_img_5' => 'solutions/b6311f963910(1).jpg',
                'cap_title_5' => 'Spunbond Machine',
                'cap_desc_5' => 'A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product that can support various industries. It is commonly used for shopping/goodies bags, clothes & shoes cover, masks, medical cap/gown, fruit covers and many other things.',
                'cap_img_6' => 'solutions/41d2c2df9fextrusion.jpg',
                'cap_title_6' => 'Spunmelt Machine',
                'cap_desc_6' => 'The extremely fine fibers differ from other extrusions,particularly spun bond, in that they have low intrinsic strength but much smaller size offering key properties. Often melt blown is added to spun bond to form SM or SMS webs, which are strong and offer the intrinsic benefits of fine fibers such as fine filtration, low pressure drop as used in face masks or filters and physical benefits such as acoustic insulation as used in dishwashers. One of the largest users of SM and SMS materials is the disposable diaper and feminine care.',
                'cap_img_7' => 'solutions/f4aa4e78c7spunmelt2.jpg',
                'cap_title_7' => 'Extrusion Machine',
                'cap_desc_7' => 'Extrusion of roofing sheets, manufactured from UPVC, are designed to suit a diverse range of applications in various markets: DIY, factories, construction, architectural projects, agricultural, manufacturing and fabrication.',
                'whatsapp' => '+62 857 7730 3030',
                'whatsapp_link' => 'http://wa.me/6285777303030',
              ],
              'cover_image' => NULL,
            ],
            [
              'title' => 'Suryasukses Studio',
              'slug' => 'solutions',
              'content' => 
              [
                'image_1' => 'solutions/aa68c28011sbl-sap (1) (1).jpg',
                'main_text' => 'Whether you’re looking for a specific cap or or designing a revolutionary bottle/cup shape, our teams will work together to develop a product your consumers are sure to enjoy, guaranteed by our many years of experience and well-established networks around the world.
            
            Our decoration options includes:
            - Custom design products
            - Offset printing on Cup
            - Emboss cap
            - Emboss bottle
            - Print logo on Houseware products
            
            Contact us and discuss your project with us now.',
                'whatsapp' => '+62 857 7730 3030',
                'whatsapp_link' => 'http://wa.me/6285777303030',
              ],
              'cover_image' => NULL,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Page::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
