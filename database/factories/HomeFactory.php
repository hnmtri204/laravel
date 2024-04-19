<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'img' => $this->faker->url(),
            'description' => $this->faker->realText(),
            'price' => $this->faker->randomDigit(),
            'quantity' => $this->faker->randomDigit(),
            'category_id'=>1,
        ];
    }
}
