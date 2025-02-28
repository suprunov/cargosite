<?php
namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public array $breadcrumbs;

    /**
     * Создание нового компонента.
     */
    public function __construct(array $breadcrumbs = [])
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Получение представления компонента.
     */
    public function render()
    {
        return view('components.breadcrumbs');
    }
}
