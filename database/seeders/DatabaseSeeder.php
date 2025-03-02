<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Vacancy;
use App\Models\VacancyDirection;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $directions = VacancyDirection::factory(5)->create();

        $skills = Skill::factory(10)->create();

        foreach ($directions as $direction) {
            $vacancies = Vacancy::factory(10)->create([
                'vacancy_direction_id' => $direction->id,
            ]);

            foreach ($vacancies as $vacancy) {
                $vacancy->skills()->attach($skills->random(rand(2, 5))->pluck('id'));
            }
        }
    }
}
