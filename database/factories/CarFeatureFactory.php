<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CarFeature;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarFeature>
 */
class CarFeatureFactory extends Factory
{
    protected $model = CarFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'car_id' => \App\Models\Car::factory(), // Assuming CarFactory exists
            'sunroof' => $this->faker->boolean(50), // 50% chance of being true
            'bluetooth' => $this->faker->boolean(70),
            'backup_camera' => $this->faker->boolean(80),
            'navigation_system' => $this->faker->boolean(60),
            'heated_seats' => $this->faker->boolean(40),
            'automatic_emergency_braking' => $this->faker->boolean(30),
            'lane_departure_warning' => $this->faker->boolean(50),
            'adaptive_cruise_control' => $this->faker->boolean(50),
            'keyless_entry' => $this->faker->boolean(90),
            'led_headlights' => $this->faker->boolean(70),
        ];
    }
}
