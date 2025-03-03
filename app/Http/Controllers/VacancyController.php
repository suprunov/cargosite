<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;
use App\Models\VacancyDirection;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $perPage = 10;

        $vacancyDirections = VacancyDirection::with([
            'vacancies' => function ($query) {
                $query->with('skills')
                    ->where('published', true)
                    ->where('active_from', '<=', now())
                    ->where('active_to', '>=', now())
                    ->orderBy('sort')
                    ->limit(10);
            }
        ])->orderBy('sort')->paginate($perPage);

        if ($request->ajax()) {
            $vacancyDirections = VacancyDirection::with([
                'vacancies' => function ($query) {
                    $query->with('skills')
                        ->where('published', true)
                        ->where('active_from', '<=', now())
                        ->where('active_to', '>=', now())
                        ->orderBy('sort')
                        ->limit(10);
                }
            ])->orderBy('sort')->get();

            return view('pages.vacancies.list-item', compact('vacancyDirections'))->render();
        }

        return view('pages.vacancies.index', compact('vacancyDirections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVacancyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        return view('pages.vacancies.vacancy', ['slug' => $slug]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
