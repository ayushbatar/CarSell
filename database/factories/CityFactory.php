<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\State;  // Import the State model
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    protected $model = City::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city,  // Generates a random city name
            'state_id' => State::factory(), // Associates the city with a random state
        ];
    }
}
