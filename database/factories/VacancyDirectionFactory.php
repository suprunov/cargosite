<?php

namespace Database\Factories;

use App\Models\VacancyDirection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VacancyDirection>
 */
class VacancyDirectionFactory extends Factory
{
    private static int $sortCounter = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'sort' => (self::$sortCounter++) * 100,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
