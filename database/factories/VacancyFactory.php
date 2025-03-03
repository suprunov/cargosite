<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


/**
 * @extends Factory<Vacancy>
 */
class VacancyFactory extends Factory
{
    private static int $sortCounter = 1;

    // Глобальная переменная для уникальности sort
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Vacancy::class;

    public function definition(): array
    {
        $title = $this->faker->jobTitle();

        return [
            'vacancy_direction_id' => 1,
            'title' => $title,
            'slug' => $this->faker->slug(),
            'location' => $this->faker->city(),
            'place' => $this->faker->randomElement(['офис', 'удаленка', 'гибрид']),
            'salary' => $this->faker->randomNumber(1) * 15000 + 50000,
            'experience' => $this->faker->randomElement(['от 1 года', 'от 3 лет', 'можно без опыта']),
            'description' => $this->generateRandomHtmlDescription(),
            'sort' => (self::$sortCounter++) * 100,
            'created_by' => 1,
            'updated_by' => 1,
            'active_from' => Carbon::now(),
            'active_to' => Carbon::now()->addDays(30),
            'published' => $this->faker->boolean(),
        ];
    }

    private function generateRandomHtmlDescription(): string
    {
        return <<<HTML
<p>{$this->faker->realText(300, 2)}</p>

<div class="vacancy-item__copy">
    <h2>Что нужно делать</h2>
    <ul>
        {$this->generateRandomListItems(4)}
    </ul>

    <h2>Кого мы ищем</h2>
    <ul>
        {$this->generateRandomListItems(4)}
    </ul>

    <h2>Что предлагаем</h2>
    <ul>
        {$this->generateRandomListItems(5)}
    </ul>
</div>
HTML;
    }

    private function generateRandomListItems(int $count): string
    {
        $items = [];
        for ($i = 0; $i < $count; $i++) {
            $items[] = '<li>' . $this->faker->realText(80, 2) . '</li>';
        }
        return implode("\n", $items);
    }

    public function configure(): self
    {
        return $this->afterCreating(function (Vacancy $vacancy) {
            // Генерация slug с добавлением ID после создания
            $slug = Str::slug($vacancy->title) . '-' . $vacancy->id;

            // Обновляем запись с новым slug
            $vacancy->update(['slug' => $slug]);
        });
    }

}
