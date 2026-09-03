<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\SuryasuksesStudio;

class StudioDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $page = Page::where('slug', 'solutions')->first();
        
        if (!$page) {
            $this->command->info('Page with slug solutions not found.');
            return;
        }

        $content = $page->content;
        
        if (!is_array($content)) {
            $this->command->info('Solutions content is not an array.');
            return;
        }

        $studio = SuryasuksesStudio::first();
        if (!$studio) {
            SuryasuksesStudio::create([
                'hero_image' => $content['image_1'] ?? 'solutions/aa68c28011sbl-sap (1) (1).jpg',
                'main_text' => $content['main_text'] ?? "Whether you’re looking for a specific cap or or designing a revolutionary bottle/cup shape, our teams will work together to develop a product your consumers are sure to enjoy, guaranteed by our many years of experience and well-established networks around the world.\n\nOur decoration options includes:\n- Custom design products\n- Offset printing on Cup\n- Emboss cap\n- Emboss bottle\n- Print logo on Houseware products\n\nContact us and discuss your project with us now.",
                'whatsapp' => $content['whatsapp'] ?? '+62 857 7730 3030',
                'whatsapp_link' => $content['whatsapp_link'] ?? 'http://wa.me/6285777303030'
            ]);
            $this->command->info("Successfully migrated Suryasukses Studio data to new table.");
        } else {
            $this->command->info("Studio data already exists, skipping.");
        }
    }
}
