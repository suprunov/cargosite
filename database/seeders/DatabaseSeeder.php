<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Vacancy;
use App\Models\VacancyDirection;
use Faker\Factory as FakerFactory;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    private static int $sortCounter = 1;
    private Generator $faker;

    public function __construct()
    {
        // Создаем экземпляр Faker с русской локалью
        $this->faker = FakerFactory::create('ru_RU');
    }

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
                'description' => $this->faker->realText(300, 2),
                'sort' => (self::$sortCounter++) * 100,
                'created_by' => 1,
                'updated_by' => 1,
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
