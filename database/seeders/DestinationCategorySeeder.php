<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DestinationCategory;

class DestinationCategorySeeder extends Seeder
{
    public function run()
    {
        DestinationCategory::create(['name' => 'Asia', 'slug' => 'asia-tour', 'is_active' => true]);
        DestinationCategory::create(['name' => 'Europe', 'slug' => 'europe-tour', 'is_active' => true]);
    }
}
