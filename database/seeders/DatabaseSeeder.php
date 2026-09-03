<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            PostSeeder::class,
            HomeSeeder::class,
            AboutSeeder::class,
            SolutionsSeeder::class,
            StudioDataSeeder::class,
            CapabilitiesDataSeeder::class,
            ContactSeeder::class,
            MarketSeeder::class,
        ]);
    }
}