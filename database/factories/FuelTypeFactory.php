<?php

namespace Database\Factories;

use App\Models\FuelType;  // Import the FuelType model
use Illuminate\Database\Eloquent\Factories\Factory;

class FuelTypeFactory extends Factory
{
    protected $model = FuelType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,  // Generates a random fuel type name
        ];
    }
}
