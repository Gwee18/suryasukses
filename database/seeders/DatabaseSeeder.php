<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PageSeeder::class);
        $this->call(ProductSeeder::class);
        // Seed Users
        $usersJson = file_get_contents(database_path('seeders/data/users.json'));
        $users = json_decode($usersJson, true);
        foreach ($users as $userData) {
            // Check if user already exists
            if (!User::where('email', $userData['email'])->exists()) {
                User::create($userData);
            }
        }

        // Seed Posts
        $postsJson = file_get_contents(database_path('seeders/data/posts.json'));
        $posts = json_decode($postsJson, true);
        foreach ($posts as $postData) {
            if (!\App\Models\Post::where('slug', $postData['slug'])->exists()) {
                \App\Models\Post::create($postData);
            }
        }
    }
}
