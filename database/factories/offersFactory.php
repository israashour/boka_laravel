<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\offers>
 */
class offersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(30),
            'image' => $this->faker->imageUrl(640,480),
            'description' => $this->faker->text(50),
            'price' => $this->faker->randomNumber(),
            'sale' => $this->faker->randomNumber(),

            
        ];
    }
}
