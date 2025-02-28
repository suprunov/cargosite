<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('pages.about');
    }

    public function career(): View
    {
        return view('pages.career');
    }

    public function cargoFuel(): View
    {
        return view('pages.cargoFuel');
    }

    public function contacts(): View
    {
        return view('pages.contacts');
    }

    public function docs(): View
    {
        return view('pages.docs');
    }

    public function fuel(): View
    {
        return view('pages.fuel');
    }

    public function fuelCards(): View
    {
        return view('pages.fuelCards');
    }

    public function home(): View
    {
        return view('pages.home');
    }

    public function news(): View
    {
        return view('pages.news');
    }

    public function newsDetail($slug): View
    {
//        $news = News::where('slug', $slug)->firstOrFail();
        $news = "Текст новости";
        $breadcrumbs = [
            ['title' => 'Главная', 'url' => route('home')],
            ['title' => 'Новости', 'url' => route('news')],
//            ['title' => $news->title, 'url' => ''],
            ['title' => "Заголовок детальной новости", 'url' => ''],
        ];

        return view('pages.newsDetail', compact('news', 'breadcrumbs'));
    }

    public function products(): View
    {
        return view('pages.products');
    }

    public function repairCenterDetail($slug): View
    {
        return view('pages.repairCenterDetail', ['slug' => $slug]);
    }

    public function repairCenters(): View
    {
        return view('pages.repairCenters');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function suppliers(): View
    {
        return view('pages.suppliers');
    }

    public function vacancy($slug): View
    {
        return view('pages.vacancy', ['slug' => $slug]);
    }
}
