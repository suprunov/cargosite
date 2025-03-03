<?php

namespace Database\Seeders;

use App\Models\VacancyDirection;
use Faker\Factory as FakerFactory;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class VacancyDirectionSeeder extends Seeder
{
    private static int $sortCounter = 1;
    private Generator $faker;

    public function __construct()
    {
        // Создаем экземпляр Faker с русской локалью
        $this->faker = FakerFactory::create('ru_RU');
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
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
    }
}
