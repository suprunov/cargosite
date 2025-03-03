<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\VacancyDirection;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<VacancyDirection>
 */
class VacancyDirectionResource extends ModelResource
{
    protected string $model = VacancyDirection::class;

    protected string $title = 'Направление вакансии';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Направление', 'title'),
//            Text::make('Описание', 'description'),
//            Number::make('Сортировка', 'sort'),

        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Направление', 'title'),
                Text::make('Описание', 'description'),
                Number::make('Сортировка', 'sort'),

            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Направление', 'title'),
            Text::make('Описание', 'description'),
        ];
    }

    /**
     * @param VacancyDirection $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
