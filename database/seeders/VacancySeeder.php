<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Vacancy;
use App\Models\VacancyDirection;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = Skill::all();
        $directions = VacancyDirection::all();
        foreach ($directions as $direction) {
            $vacancies = Vacancy::factory(rand(5, 25))->create([
                'vacancy_direction_id' => $direction->id,
            ]);

            foreach ($vacancies as $vacancy) {
                $vacancy->skills()->attach($skills->random(rand(2, 5))->pluck('id'));
            }
        }
    }
}
