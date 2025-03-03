<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Vacancy;
use App\Models\VacancyDirection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $directions = collect([
            'Автоматизация и IT',
            'Продажи и маркетинг',
            'Финансы и бухгалтерия',
            'PR',
        ])->map(function ($title) {
            return VacancyDirection::create([
                'title' => $title,
                'slug' => Str::slug($title),
            ]);
        });

        $skills = Skill::factory(10)->create();

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
