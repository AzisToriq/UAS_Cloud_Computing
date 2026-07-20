<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => $this->faker->words(2, true),
        'description' => $this->faker->sentence(),
        'icon' => 'code-bracket',
        'starting_price' => $this->faker->randomElement([1500000, 3000000, 5000000]),
    ];
}
}
