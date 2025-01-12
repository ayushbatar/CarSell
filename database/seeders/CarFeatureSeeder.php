<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarFeature;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarFeature::factory()
            ->count(50) // Create 50 car features
            ->create();
    }
}
