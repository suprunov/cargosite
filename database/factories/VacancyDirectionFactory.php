<?php

namespace Database\Factories;

use App\Models\VacancyDirection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VacancyDirection>
 */
class VacancyDirectionFactory extends Factory
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
            'sort' => $this->faker->numberBetween(100, 1000),
            'created_by' => 1,
        ];
    }
}
