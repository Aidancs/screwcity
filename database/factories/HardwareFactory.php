<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class HardwareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl($width = 200, $height = 200),
            'name' => $this->faker->unique()->word(),
            'description' => $this->faker->unique()->word(),
            'quantity' => random_int(1, 100),
            'price' => random_int(1, 9999),
            'cost' => random_int(1, 9999),
            'tag_id' => random_int(1, 10),
        ];
    }
}
