<?php

namespace Database\Seeders;

use Faker\Factory as FakerFactory;
use Faker\Generator;
use Illuminate\Database\Seeder;

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
        $this->call([
            UserRolesSeeder::class,
            UserSeeder::class,
            SkillSeeder::class,
            VacancyDirectionSeeder::class,
            VacancySeeder::class,
        ]);
    }
}
