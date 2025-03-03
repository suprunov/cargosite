<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use MoonShine\Laravel\Models\MoonshineUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MoonshineUser::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'name' => 'Administrator',
            'avatar' => 'default.png',
            'moonshine_user_role_id' => 1,
        ]);
    }
}
