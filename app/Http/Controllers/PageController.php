<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function homeIndex(): View
    {
        return view('pages.home.index');
    }

    public function aboutIndex(): View
    {
        return view('pages.about.index');
    }

    public function contactsIndex(): View
    {
        return view('pages.contacts.index');
    }

    public function documentationIndex(): View
    {
        return view('pages.documentation.index');
    }

    public function fuelIndex(): View
    {
        return view('pages.fuel.index');
    }

    public function fuelAbout(): View
    {
        return view('pages.fuel.about');
    }

    public function fuelAdblue(): View
    {
        return view('pages.fuel.adblue');
    }

    public function fuelCards(): View
    {
        return view('pages.fuel.cards');
    }

    public function fuelRelatedProducts(): View
    {
        return view('pages.fuel.relatedProducts');
    }

    public function fuelRelatedServices(): View
    {
        return view('pages.fuel.relatedServices');
    }

    public function fuelServices(): View
    {
        return view('pages.fuel.services');
    }

    public function newsIndex(): View
    {
        return view('pages.news.index');
    }

    public function policyIndex(): View
    {
        return view('pages.policy.index');
    }

    public function suppliersIndex(): View
    {
        return view('pages.suppliers.index');
    }


    public function vacanciesVacancy(string $slug): View
    {
        return view('pages.vacancies.vacancy', ['slug' => $slug]);
    }
}
