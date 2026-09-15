<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Capability;
use Illuminate\Support\Str;

class CapabilitiesDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $page = Page::where('slug', 'capabilities')->first();
        
        if (!$page) {
            $this->command->info('Page with slug capabilities not found.');
            return;
        }

        $content = $page->content;
        
        if (!is_array($content)) {
            $this->command->info('Capabilities content is not an array.');
            return;
        }

        $count = 0;
        for ($i = 1; $i <= 10; $i++) {
            if (isset($content['cap_title_'.$i]) && !empty($content['cap_title_'.$i])) {
                // Check if it already exists to avoid duplicates
                $exists = Capability::where('title', $content['cap_title_'.$i])->exists();
                
                if (!$exists) {
                    $imagePath = isset($content['cap_img_'.$i]) ? $content['cap_img_'.$i] : null;
                    
                    // The old images were prefixed with solutions/ in DB
                    // No need to change prefix if they are in public/assets/images/solutions/
                    
                    Capability::create([
                        'title' => $content['cap_title_'.$i],
                        'description' => $content['cap_desc_'.$i] ?? '',
                        'image' => $imagePath,
                        'sort_order' => $i
                    ]);
                    $count++;
                }
            }
        }
        
        $this->command->info("Successfully migrated $count capabilities to new table.");
    }
}
