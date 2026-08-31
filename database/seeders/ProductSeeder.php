<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'packaging' => [
                'id' => 2,
                'title' => 'Packaging',
                'images' => ['7a1e5-cover-bottle.jpg', '7a1e5-cover-closures.jpg', '7a1e5-cover-drinking-cups.jpg', '7a1e5-cover-containers.jpg', '7a1e5-cover-lids.jpg'],
                'intro' => null,
                'catalog_text' => 'Click here to download our full catalog',
                'catalog_href' => 'http://suryasukses.com/images/brosur_baru.pdf',
            ],
            'specialty-nonwoven' => [
                'id' => 3,
                'title' => 'Specialty Nonwoven',
                'images' => ['e7176-cover-specialty.jpg'],
                'intro' => 'Our nonwoven fabric solutions are produced on unique and world-leading technology. Through partnership and innovation we deliver value and differentiation for our customers.',
                'catalog_text' => 'Visit our website',
                'catalog_href' => 'https://amarinonwoven.com/',
            ],
            'housewares' => [
                'id' => 4,
                'title' => 'Housewares',
                'images' => ['a6ef0-cover-bathroom.jpg', 'a6ef0-cover-cleaningware.jpg', 'a6ef0-cover-garden.jpg', 'a6ef0-cover-kitchenware.jpg', 'a6ef0-cover-racks.jpg'],
                'intro' => 'Surya Sukses Group started its industrial group from a plastic shop for households. Until now, our household plastic business continues to run and develops into a more serious and national scale.',
                'catalog_text' => 'Click here to download our full catalog',
                'catalog_href' => 'https://drive.google.com/open?id=1B_IKaDCw8XR_H61tv5OFOOepdSOKKHEn',
            ],
            'roofing' => [
                'id' => 5,
                'title' => 'Roofing',
                'images' => ['f4cfc-cover-roofing-suryasukses.jpg'],
                'intro' => null,
                'catalog_text' => null,
                'catalog_href' => null,
            ],
        ];

        $ranges = [
            1 => [
                'slug' => 'preform',
                'title' => 'Preform',
                'parent_id' => 2,
                'images' => ['59f66-preform001.jpg', '59f66-preform002.jpg'],
                'paragraphs' => [['text' => 'Our PET preform infrastructure and machineries are one of the broadest in the industry and our large manufacturing footprint allows us to provide excellent service to our customers.']],
                'card_text' => 'Our PET preform infrastructure and machineries are one of the broadest in the in...',
            ],
            2 => [
                'slug' => 'bottles',
                'title' => 'Bottles',
                'parent_id' => 2,
                'images' => ['4610a-bottle001.jpg', '4610a-bottle002.jpg'],
                'paragraphs' => [['text' => 'Surya Sukses Group offers high quality bottles made from Injection Blow molding to our customers. Our wide range of bottles are in HDPE, PET and PP to meet the modern needs of the markets. We also offer a design, development and customization of your bottle design following your brand identity. Our design studio will help bring your imagination to reality.'], ['link_text' => 'www.botolplastik.id', 'link_href' => 'http://www.botolplastik.id/']],
                'card_text' => 'Surya Sukses Group offers high quality bottles made from Injection Blow molding ...',
            ],
            3 => [
                'slug' => 'closures',
                'title' => 'Closures',
                'parent_id' => 2,
                'images' => ['7775c-closures001.jpg'],
                'paragraphs' => [['text' => 'Surya Sukses Group produce approximately 25% of all bottle closures distributed in Indonesia. We are serious when it comes to bottle closure products for healthcare, food and beverage, automotive, household chemical, and personal care markets.'], ['link_text' => 'www.botolplastik.id', 'link_href' => 'http://www.botolplastik.id/']],
                'card_text' => 'Surya Sukses Group produce approximately 25% of all bottle closures distributed ...',
            ],
            4 => [
                'slug' => 'drinking-cups',
                'title' => 'Drinking Cups',
                'parent_id' => 2,
                'images' => ['009cb-drinking-cups001.jpg', '009cb-drinking-cups002.jpg'],
                'paragraphs' => [['text' => 'At Surya Sukses Group, we produce any kind and variety of cups, they are souvenir cups, disposable cups, and other food related cups, along with printing process to suit your needs.'], ['link_text' => 'www.botolplastik.id', 'link_href' => 'http://www.botolplastik.id/']],
                'card_text' => 'At Surya Sukses Group, we produce any kind and variety of cups, they are souveni...',
            ],
            5 => [
                'slug' => 'lids',
                'title' => 'Lids',
                'parent_id' => 2,
                'images' => ['64a99-lids001.jpg'],
                'paragraphs' => [['text' => 'To match the wide range of drinking cups, Surya Sukses Group produce even wider lids variety, they are all available for recessed, double seal and tamper resistant applications. Further customization are possible upon your request.'], ['link_text' => 'www.botolplastik.id', 'link_href' => 'http://www.botolplastik.id/']],
                'card_text' => 'To match the wide range of drinking cups, Surya Sukses Group produce even wider ...',
            ],
            6 => [
                'slug' => 'containers',
                'title' => 'Containers',
                'parent_id' => 2,
                'images' => ['cb27c-containers001.jpg', 'cb27c-containers002.jpg'],
                'paragraphs' => [['text' => 'Surya Sukses Group has the A to Z of open top containers from 4 oz. to 5.5 gallon sizes. All of our containers are made from high density polyethylene and polypropylene materials by injection molding and thermoforming.'], ['link_text' => 'www.botolplastik.id', 'link_href' => 'http://www.botolplastik.id/']],
                'card_text' => 'Surya Sukses Group has the A to Z of open top containers from 4 oz. to 5.5 gallo...',
            ],
            7 => [
                'slug' => 'spunbond-polypropylene',
                'title' => 'Spunbond Polypropylene',
                'parent_id' => 3,
                'images' => ['72bd6-spubond-polypropylene.jpg'],
                'paragraphs' => [['text' => 'Surya Sukses Group is catering the needs of economic yet durable on performance spunbond fabric – made from polypropylene. Unlike the usual nonwoven fabric, Surya Sukses Group’s nonwoven material quality is felt instantly when you touch it, we will exceed your expectations.'], ['link_text' => 'Learn More', 'link_href' => 'https://amarinonwoven.com/']],
                'card_text' => 'Surya Sukses Group is catering the needs of economic yet durable on performance ...',
            ],
            8 => [
                'slug' => 'meltblown',
                'title' => 'Meltblown',
                'parent_id' => 3,
                'images' => ['7780e-meltblown-001.jpg', '7780e-meltblown-002.jpg'],
                'paragraphs' => [['text' => 'Our meltblown nonwoven products are formed from micro fibers that are smaller than those found in other nonwovens or textiles made by other manufacturer. The smooth silky surface texture and the elegant round cross-section provide a high surface area for excellent insulation, softness, and filtration characteristics. Custom-laminated meltblown composites can also be manufactured upon request.'], ['link_text' => 'Learn More', 'link_href' => 'http://amarinonwoven.com']],
                'card_text' => 'Our meltblown nonwoven products are formed from micro fibers that are smaller th...',
            ],
            9 => [
                'slug' => 'storage',
                'title' => 'Storage',
                'parent_id' => 4,
                'images' => ['f7a5b-3.jpg'],
                'paragraphs' => [['text' => 'We present a variety of plastic products for smart and ergonomic storage with good construction for durability.']],
                'card_text' => 'We present a variety of plastic products for smart and ergonomic storage with go...',
            ],
            10 => [
                'slug' => 'sealware',
                'title' => 'Sealware',
                'parent_id' => 4,
                'images' => ['8bace-sealware001.jpg', '8bace-sealware002.jpg'],
                'paragraphs' => [['text' => 'With Surya Sukses Group`s sophisticated and modern production capabilities, we are able to manufacture Sealware products that have good sealing quality, even in a very competitive selling price range.']],
                'card_text' => 'With Surya Sukses Group`s sophisticated and modern production capabilities, we a...',
            ],
            11 => [
                'slug' => 'kitchen',
                'title' => 'Kitchen',
                'parent_id' => 4,
                'images' => ['e7d1a-10.jpg'],
                'paragraphs' => [['text' => 'A variety of kitchen utensils and tableware are presented by Surya Sukses Group for customers in Indonesia. Surya Sukses Group`s plastic products are strong and durable, this has become a brand characteristic.']],
                'card_text' => 'A variety of kitchen utensils and tableware are presented by Surya Sukses Group ...',
            ],
            13 => [
                'slug' => 'containers',
                'title' => 'Containers',
                'parent_id' => 4,
                'images' => ['d92f5-containers001.jpg', 'd92f5-containers002.jpg'],
                'paragraphs' => [['text' => 'We manufacture varieties of plastic containers for the usage of both food and non-food purpose. Cleanliness and health are our top priority.']],
                'card_text' => 'We manufacture varieties of plastic containers for the usage of both food and no...',
            ],
            14 => [
                'slug' => 'racks',
                'title' => 'Racks',
                'parent_id' => 4,
                'images' => ['57e92-racks001.jpg'],
                'paragraphs' => [['text' => 'Surya Sukses Group continues to adapt to the never ending improvement of space saving trends by presenting varieties of smart rack solutions that are ergonomic and able to make better space for living.']],
                'card_text' => 'Surya Sukses Group continues to adapt to the never ending improvement of space s...',
            ],
            15 => [
                'slug' => 'bathroom',
                'title' => 'Bathroom',
                'parent_id' => 4,
                'images' => ['c81a6-bathroom001.jpg'],
                'paragraphs' => [['text' => 'From soap boxes, buckets, to water scoops, all kinds of bathroom plastic products are produced by Surya Sukses Group with the same standards as food grade products.']],
                'card_text' => 'From soap boxes, buckets, to water scoops, all kinds of bathroom plastic product...',
            ],
            16 => [
                'slug' => 'cleaning-ware',
                'title' => 'Cleaning Ware',
                'parent_id' => 4,
                'images' => ['c8698-cleaningware-001.jpg', 'c8698-cleaningware-002.jpg'],
                'paragraphs' => [['text' => 'Surya Sukses Group has a complete collection of various plastic products for cleaning. With good construction and the best raw materials, cleaningware products that are often damaged will have better durability and last longer.']],
                'card_text' => 'Surya Sukses Group has a complete collection of various plastic products for cle...',
            ],
            17 => [
                'slug' => 'garden',
                'title' => 'Garden',
                'parent_id' => 4,
                'images' => ['ce790-garden001.jpg'],
                'paragraphs' => [['text' => 'Your garden and plants will become more attractive with a complete collection of garden plastic products from Surya Sukses Group.']],
                'card_text' => 'Your garden and plants will become more attractive with a complete collection of...',
            ],
            18 => [
                'slug' => 'upvc',
                'title' => 'UPVC',
                'parent_id' => 5,
                'images' => ['78fdd-twin-wall-001.jpg', '78fdd-twin-wall-003.jpg', '78fdd-twin-wall-002.jpg'],
                'paragraphs' => [['text' => 'Amari UPVC roofing system is offered as part of the company`s commitment on green consciousness. The roofing sheets, manufactured from UPVC, are designed to suit a diverse range of applications in various markets: factories, warehouse, stadiums, canopies, and many other architectural projects.'], ['link_text' => 'Learn More', 'link_href' => 'http://amariupvc.com/']],
                'card_text' => 'Amari UPVC roofing system is offered as part of the company`s commitment on gree...',
            ],
        ];

        foreach ($categories as $slug => $data) {
            $cat = ProductCategory::create([
                'id' => $data['id'],
                'title' => $data['title'],
                'slug' => $slug,
                'images' => $data['images'],
                'intro' => $data['intro'],
                'catalog_text' => $data['catalog_text'],
                'catalog_href' => $data['catalog_href'],
            ]);
        }

        foreach ($ranges as $data) {
            $contentHtml = '';
            foreach ($data['paragraphs'] as $para) {
                if (isset($para['text'])) {
                    $contentHtml .= '<p>' . $para['text'] . '</p>';
                } elseif (isset($para['link_text'])) {
                    if ($para['link_text'] === 'www.botolplastik.id') {
                        $contentHtml .= '<p>To view more detailed product information, please visit:<br><a href="' . $para['link_href'] . '" target="_blank">' . $para['link_text'] . '</a></p>';
                    } else {
                        $contentHtml .= '<p><a href="' . $para['link_href'] . '" target="_blank">' . $para['link_text'] . '</a></p>';
                    }
                }
            }

            Product::create([
                'product_category_id' => $data['parent_id'],
                'title' => $data['title'],
                'slug' => $data['slug'],
                'images' => $data['images'],
                'content' => $contentHtml,
                'card_text' => $data['card_text'],
            ]);
        }
    }
}
