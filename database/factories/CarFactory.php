<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Maker;
use App\Models\Model;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\User;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'maker_id' => Maker::factory(),
            'model_id' => Model::factory(),
            'car_type_id' => CarType::factory(),
            'fuel_type_id' => FuelType::factory(),
            'user_id' => User::factory(),
            'city_id' => City::factory(),
            'year' => $this->faker->year(),
            'mileage' => $this->faker->numberBetween(1000, 200000),
            'price' => $this->faker->numberBetween(5000, 100000),
            'vin' => $this->faker->regexify('[A-HJ-NPR-Z0-9]{17}'), // VIN: 17 characters (alphanumeric)
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'discription' => $this->faker->paragraph,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'deleted_at' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
