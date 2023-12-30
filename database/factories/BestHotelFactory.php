<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BestHotel>
 */
class BestHotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'fare' =>  $this->faker->randomFloat(2, 1, 100),
            'rate' =>  $this->faker->numberBetween(1, 5),
            'Amenities' =>  $this->faker->paragraph,
        ];
    }
}
