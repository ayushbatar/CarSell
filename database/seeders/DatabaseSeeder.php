<?php

namespace Database\Seeders;

use App\Models\CarFeature;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
use App\Models\Car;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->count(10)->create();
        // State::factory()->count(10)->create();
        // City::factory()->count(10)->create();
        // Car::factory()->count(50)->create();
        // Model::factory()->count(50)->create();
        // CarType::factory()->count(50)->create();
        // FuelType::factory()->count(50)->create();
        // CarType::factory()->count(50)->create();
        CarFeature::factory()
            ->count(50) // Create 50 car features
            ->create();


    }
}

