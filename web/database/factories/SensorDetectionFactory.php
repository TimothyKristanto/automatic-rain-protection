<?php

namespace Database\Factories;

use App\Models\SensorDetection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SensorDetection>
 */
class SensorDetectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "IsCloudy" => $this->faker->numberBetween(0, 1),
            "RainDrops" => $this->faker->numberBetween(0, 1)
        ];
    }
}
