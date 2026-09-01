<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $usersJson = @file_get_contents(database_path('seeders/data/users.json'));
        if ($usersJson) {
            $users = json_decode($usersJson, true);
            if ($users) {
                foreach ($users as $userData) {
                    if (!User::where('email', $userData['email'])->exists()) {
                        User::create($userData);
                    }
                }
            }
        }
    }
}