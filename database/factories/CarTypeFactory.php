<?php

namespace Database\Factories;

use App\Models\CarType;  // Import the CarType model
use Illuminate\Database\Eloquent\Factories\Factory;

class CarTypeFactory extends Factory
{
    protected $model = CarType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,  // Generates a random car type name
        ];
    }
}
