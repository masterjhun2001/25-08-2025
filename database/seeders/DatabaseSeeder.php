<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // Add ServiceCatalogSeeder to your existing seeders
            ServiceCatalogSeeder::class,
            
            // Your existing seeders can go here:
            // UserSeeder::class,
            // SectorSeeder::class, // (if you have one)
            // etc...
        ]);
    }
}