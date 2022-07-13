<?php

namespace Database\Factories;

use App\Models\Hardware;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => now(),
            'subtotal' => $this->faker->numberBetween(1, 9999),
            'tax' => $this->faker->numberBetween(1, 99),
            'total' => 0,
            'hardware_id' => Hardware::factory(),
            'user_id' => User::factory()
        ];
    }
}
