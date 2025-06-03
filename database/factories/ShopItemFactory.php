<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopItem>
 */
class ShopItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            //'img',
            'description' => fake()->paragraph(5),
            'price' => fake()->numberBetween(500, 4000),
            'quantity' => fake()->numberBetween(0, 100),
        ];
    }
}
