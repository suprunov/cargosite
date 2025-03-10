<?php

namespace App\View\Components\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Top extends Component
{
    public $data;

    /**
     * Create a new component instance.
     */
    public function __construct( $data = '[]')
    {
        $arData = json_decode($data, true);
            $this->data = empty($arData) ? [
                [
                    'title' => "Грузоперевозчикам",
                    'groups' => [
                        [
                            'title' => "полуприцеп.рф",
                            'subtitle' => 'полуприцепы с выгодой',
                            'route' => 'leasing',
                            'icon' => 'ppricep.svg',
                            'items' => [
                                ['title' => "Лизинг тягачей и полуприцепов", 'route' => 'leasingSemitrailers',],
                                ['title' => "Сопутствующие товары", 'route' => 'leasingOperatingLease',],
                                ['title' => "Шины в рассрочку", 'route' => 'leasingTires',],
                                ['title' => "Трейд-ИН",],
                            ],
                        ],
                        [
                            'title' => "Cargo.Fuel",
                            'subtitle' => 'скидка на топливо',
                            'route' => 'fuel',
                            'icon' => 'fuel.svg',
                            'items' => [

                                ['title' => "Топливо", 'route' => 'fuelAbout',],
                                ['title' => "Топливные карты", 'route' => 'fuelCards',],
                                ['title' => "Сервисы общая", 'route' => 'fuelServices',],
                                ['title' => "Детальная сервиса", 'route' => 'fuelAdblue',],
                                ['title' => "Сопутствующие сервисы", 'route' => 'fuelRelatedServices',],
                                ['title' => "Сопутствующие товары", 'route' => 'fuelRelatedProducts',],
                            ],
                        ],
                    ]
                ],
                [
                    'title' => "Сотрудникам",
                    'groups' => [
                        [
                            'title' => "Карьера",
                            'subtitle' => 'Работайте с нами',
                            'route' => 'vacancies',
                            'icon' => 'career.svg',
                            'items' => [
                                ['title' => "Вакансия", 'route' => 'vacancyItem',],
                            ],
                        ],
                    ]
                ],
                ['title' => "О компании", "route" => "about",],
                ['title' => "Контакты", "route" => "contacts",],
                ['title' => "Документация", "route" => "documents",],
                ['title' => "Поставщикам", "route" => "suppliers",],
            ] : $arData;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.top')->with('data', $this->data);
    }
}
