<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;
use App\Models\Destination;
use App\Models\City;

class TourSeeder extends Seeder
{
    public function run()
    {
        // Find related models dynamically
        $destination = Destination::where('name', 'Mecca')->first();
        $arrivalCity = City::where('name', 'Jeddah')->first();
        $departureCity = City::where('name', 'Riyadh')->first();

        if ($destination && $arrivalCity && $departureCity) {
            Tour::firstOrCreate(
                ['name' => 'Hajj Package 2025'],
                [
                    'destination_id' => $destination->id,
                    'number' => 101,
                    'duration' => 10,
                    'arrival_city' => $arrivalCity->id,
                    'departure_city' => $departureCity->id,
                    'min_price' => 2000.00,
                    'max_price' => 5000.00,
                    'banner_image' => 'banner.jpg',
                    'slug' => 'hajj-package-2025',
                    'travel_strat_at' => now()->addDays(30),
                    'travel_end_at' => now()->addDays(40),
                    'booking_start_at' => now(),
                    'booking_end_at' => now()->addDays(20),
                    'is_active' => true,
                ]
            );
        }
    }
}
