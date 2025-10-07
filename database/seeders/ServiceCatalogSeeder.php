<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCatalog;
use App\Models\Sector;

class ServiceCatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get sectors by name
        $riceSector = Sector::where('sector_name', 'Rice')->first();
        $cornSector = Sector::where('sector_name', 'Corn')->first();
        $hvcSector = Sector::where('sector_name', 'HVC')->first(); // High Value Crops
        $fisheriesSector = Sector::where('sector_name', 'Fisheries')->first();
        $livestocksSector = Sector::where('sector_name', 'Livestocks')->first();

        $services = [
            // RICE SECTOR SERVICES
            [
                'name' => 'Rice Seed Distribution',
                'unit' => 'kg',
                'description' => 'Distribution of certified rice seeds (hybrid and inbred varieties)',
                'sector_id' => $riceSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Rice Fertilizer Distribution',
                'unit' => 'bag',
                'description' => 'Distribution of fertilizers for rice production (14-14-14, Urea, etc.)',
                'sector_id' => $riceSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Rice Field Soil Testing',
                'unit' => 'sample',
                'description' => 'Laboratory analysis of rice field soil nutrients and pH levels',
                'sector_id' => $riceSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Rice Production Training',
                'unit' => 'session',
                'description' => 'Training on modern rice production techniques and technologies',
                'sector_id' => $riceSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Rice Pest Management',
                'unit' => 'hectare',
                'description' => 'Integrated pest management services for rice fields',
                'sector_id' => $riceSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Rice Harvesting Equipment',
                'unit' => 'unit',
                'description' => 'Distribution/lending of rice harvesting equipment and tools',
                'sector_id' => $riceSector?->id,
                'is_active' => true
            ],

            // CORN SECTOR SERVICES
            [
                'name' => 'Corn Seed Distribution',
                'unit' => 'kg',
                'description' => 'Distribution of certified corn seeds (hybrid and open-pollinated)',
                'sector_id' => $cornSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Corn Fertilizer Distribution',
                'unit' => 'bag',
                'description' => 'Distribution of fertilizers for corn production',
                'sector_id' => $cornSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Corn Field Soil Testing',
                'unit' => 'sample',
                'description' => 'Soil analysis for optimal corn production',
                'sector_id' => $cornSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Corn Production Training',
                'unit' => 'session',
                'description' => 'Training on corn production best practices',
                'sector_id' => $cornSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Corn Pest Control',
                'unit' => 'hectare',
                'description' => 'Pest and disease management for corn crops',
                'sector_id' => $cornSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Corn Drying Equipment',
                'unit' => 'unit',
                'description' => 'Distribution/lending of corn drying equipment',
                'sector_id' => $cornSector?->id,
                'is_active' => true
            ],

            // HVC (HIGH VALUE CROPS) SECTOR SERVICES
            [
                'name' => 'Vegetable Seed Distribution',
                'unit' => 'packet',
                'description' => 'Distribution of high-quality vegetable seeds (tomato, eggplant, pepper, etc.)',
                'sector_id' => $hvcSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Fruit Tree Seedling Distribution',
                'unit' => 'piece',
                'description' => 'Distribution of fruit tree seedlings (mango, citrus, rambutan, etc.)',
                'sector_id' => $hvcSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Organic Fertilizer Distribution',
                'unit' => 'bag',
                'description' => 'Distribution of organic fertilizers for high value crops',
                'sector_id' => $hvcSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Greenhouse Construction',
                'unit' => 'unit',
                'description' => 'Construction of greenhouses for protected cultivation',
                'sector_id' => $hvcSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Irrigation System Installation',
                'unit' => 'unit',
                'description' => 'Installation of drip irrigation and sprinkler systems',
                'sector_id' => $hvcSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Post-Harvest Training',
                'unit' => 'session',
                'description' => 'Training on proper harvesting, handling, and storage of HVC',
                'sector_id' => $hvcSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Organic Certification Support',
                'unit' => 'farm',
                'description' => 'Support for organic certification process',
                'sector_id' => $hvcSector?->id,
                'is_active' => true
            ],

            // FISHERIES SECTOR SERVICES
            [
                'name' => 'Tilapia Fingerling Distribution',
                'unit' => 'piece',
                'description' => 'Distribution of tilapia fingerlings for aquaculture',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Bangus Fingerling Distribution',
                'unit' => 'piece',
                'description' => 'Distribution of bangus (milkfish) fingerlings',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Fish Feed Distribution',
                'unit' => 'bag',
                'description' => 'Distribution of commercial fish feeds and supplements',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Fish Pond Construction',
                'unit' => 'unit',
                'description' => 'Construction and rehabilitation of fish ponds',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Fish Cage Distribution',
                'unit' => 'unit',
                'description' => 'Distribution of fish cages for lake and river aquaculture',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Aquaculture Training',
                'unit' => 'session',
                'description' => 'Training on fish farming techniques and management',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Fishing Equipment Distribution',
                'unit' => 'set',
                'description' => 'Distribution of fishing nets, hooks, and other equipment',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Seaweed Farming Support',
                'unit' => 'unit',
                'description' => 'Support for seaweed cultivation including seedlings and equipment',
                'sector_id' => $fisheriesSector?->id,
                'is_active' => true
            ],

            // LIVESTOCKS SECTOR SERVICES
            [
                'name' => 'Cattle Vaccination',
                'unit' => 'head',
                'description' => 'Vaccination against FMD, Hemorrhagic Septicemia, and other cattle diseases',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Swine Vaccination',
                'unit' => 'head',
                'description' => 'Vaccination against Classical Swine Fever, PRRS, and other swine diseases',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Poultry Vaccination',
                'unit' => 'head',
                'description' => 'Vaccination against Newcastle Disease, Avian Influenza, and other poultry diseases',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Goat Vaccination',
                'unit' => 'head',
                'description' => 'Vaccination and health services for goats',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Livestock Deworming',
                'unit' => 'head',
                'description' => 'Internal parasite treatment for all livestock species',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Artificial Insemination',
                'unit' => 'session',
                'description' => 'AI services for cattle, carabao, and swine breeding',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Livestock Castration',
                'unit' => 'head',
                'description' => 'Surgical castration services for male livestock',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Animal Feed Distribution',
                'unit' => 'bag',
                'description' => 'Distribution of commercial feeds and feed supplements',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Livestock Housing Construction',
                'unit' => 'unit',
                'description' => 'Construction of animal housing and facilities',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Breeding Stock Distribution',
                'unit' => 'head',
                'description' => 'Distribution of quality breeding animals (cattle, swine, goats)',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Veterinary Consultation',
                'unit' => 'session',
                'description' => 'Veterinary consultation and health check services',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ],
            [
                'name' => 'Livestock Training',
                'unit' => 'session',
                'description' => 'Training on livestock management, feeding, and breeding',
                'sector_id' => $livestocksSector?->id,
                'is_active' => true
            ]
        ];

        // Create service catalogs
        foreach ($services as $service) {
            if ($service['sector_id']) { // Only create if sector exists
                ServiceCatalog::create($service);
            }
        }

        $this->command->info('Service catalogs seeded successfully!');
        $this->command->info('Total services created: ' . count(array_filter($services, fn($s) => $s['sector_id'])));
    }
}