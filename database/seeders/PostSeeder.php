<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $postsJson = @file_get_contents(database_path('seeders/data/posts.json'));
        if ($postsJson) {
            $posts = json_decode($postsJson, true);
            if ($posts) {
                foreach ($posts as $postData) {
                    if (!Post::where('slug', $postData['slug'])->exists()) {
                        Post::create($postData);
                    }
                }
            }
        }
    }
}