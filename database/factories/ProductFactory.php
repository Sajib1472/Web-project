<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'ship_name' => $this->faker->word(),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(5),
            'price' => $this->faker->numberBetween(10000, 10000000),
        ];
    }
}
