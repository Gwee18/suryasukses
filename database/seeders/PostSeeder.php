<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = \Illuminate\Support\Facades\File::files(resource_path('views/news/detail'));
        
        foreach ($files as $file) {
            if ($file->getFilename() === 'detail.blade.php') continue;
            
            $content = file_get_contents($file->getPathname());
            
            // Extract Title
            preg_match('/<h3 class="detail-title">(.*?)<\/h3>/s', $content, $titleMatch);
            if (!$titleMatch) continue; // Skip if no title
            $title = trim(strip_tags($titleMatch[1]));
            
            // Extract Date
            preg_match('/<i class="fa fa-calendar"><\/i>\s*(.*?)<\/small>/s', $content, $dateMatch);
            $publishedAt = null;
            if ($dateMatch) {
                try {
                    $publishedAt = \Carbon\Carbon::parse(trim($dateMatch[1]));
                } catch (\Exception $e) {}
            }
            
            // Extract Image
            preg_match('/src="\{\{\s*asset\(\'assets\/images\/news\/(.*?)\'\)\s*\}\}"/s', $content, $imageMatch);
            $coverImage = $imageMatch ? trim($imageMatch[1]) : null;
            
            // Extract Content HTML
            preg_match('/<div class="contents_det_blog">(.*?)<div class="py-3"><\/div>/s', $content, $contentMatch);
            $bodyContent = $contentMatch ? trim($contentMatch[1]) : '';
            
            \App\Models\Post::firstOrCreate(
                ['title' => $title],
                [
                    'cover_image' => $coverImage,
                    'content' => $bodyContent,
                    'published_at' => $publishedAt ?? now(),
                ]
            );
        }
    }
}
