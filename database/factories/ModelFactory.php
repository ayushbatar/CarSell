<?php

namespace Database\Factories;

use App\Models\Model;  // Import the Model
use App\Models\Maker;  // Import the Maker model
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    protected $model = Model::class;

    public function definition()
    {
        return [
            'maker_id' => Maker::factory(),  // Associates the model with a random maker
            'name' => $this->faker->word,    // Generates a random model name
        ];
    }
}
