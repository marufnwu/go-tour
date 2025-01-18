<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;
use App\Models\Destination;
use App\Models\City;
use App\Models\DestinationCategory;

class TourSeeder extends Seeder
{
    public function run()
    {
        // Create 5 destination categories
        $categories = [
            ['name' => 'Beach Destinations', 'slug' => 'beach-destinations', 'is_active' => true],
            ['name' => 'Mountain Adventures', 'slug' => 'mountain-adventures', 'is_active' => true],
            ['name' => 'City Tours', 'slug' => 'city-tours', 'is_active' => true],
            ['name' => 'Historical Sites', 'slug' => 'historical-sites', 'is_active' => false],
            ['name' => 'Luxury Escapes', 'slug' => 'luxury-escapes', 'is_active' => true],
        ];

        foreach ($categories as $categoryData) {
            $category = DestinationCategory::create($categoryData);

            // Add 5 destinations for each category
            for ($i = 1; $i <= 5; $i++) {
                Destination::create([
                    'destination_category_id' => $category->id,
                    'name' => $category->name . " Destination " . $i,
                    'description' => 'Explore the best of ' . $category->name . ' at Destination ' . $i,
                    'slug' => $category->slug . '-destination-' . $i,
                    'is_active' => true,
                ]);
            }
        }
    }
}
