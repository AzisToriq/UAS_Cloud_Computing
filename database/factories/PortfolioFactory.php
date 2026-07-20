<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'title' => $this->faker->sentence(3),
        'slug' => $this->faker->unique()->slug(),
        'description' => $this->faker->paragraph(),
        'tech_stack' => 'Laravel, Tailwind, Docker',
        'link' => 'https://github.com/username/project',
        'is_published' => true,
    ];
}
}
