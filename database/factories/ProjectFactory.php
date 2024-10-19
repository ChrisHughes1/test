<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->word,
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
        ];
    }
}