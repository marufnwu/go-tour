<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;
use App\Models\DestinationCategory;

class DestinationSeeder extends Seeder
{
    public function run()
    {
        // Find category dynamically
        $religiousCategory = DestinationCategory::all();

    }
}
