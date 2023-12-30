<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopHotel>
 */
class TopHotelFactory extends Factory
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
            'rate' =>  $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'discount' => $this->faker->optional(0.2)->randomFloat(2, 1, 50), // 20% chance of having a discount
            'amenities' => $this->faker->paragraph,
        ];
    }
}
