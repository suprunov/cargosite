<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homeIndex'])->name('homeIndex');
Route::get('/about', [PageController::class, 'aboutIndex'])->name('aboutIndex');
Route::get('/contacts', [PageController::class, 'contactsIndex'])->name('contactsIndex');
Route::get('/documentation', [PageController::class, 'documentationIndex'])->name('documentationIndex');

Route::prefix('fuel')->group(function () {
    Route::get('/', [PageController::class, 'fuelIndex'])->name('fuelIndex');
    Route::get('/about', [PageController::class, 'fuelAbout'])->name('fuelAbout');
    Route::get('/adblue', [PageController::class, 'fuelAdblue'])->name('fuelAdblue');
    Route::get('/cards', [PageController::class, 'fuelCards'])->name('fuelCards');
    Route::get('/relatedProducts', [PageController::class, 'fuelRelatedProducts'])->name('fuelRelatedProducts');
    Route::get('/relatedServices', [PageController::class, 'fuelRelatedServices'])->name('fuelRelatedServices');
    Route::get('/services', [PageController::class, 'fuelServices'])->name('fuelServices');
});

Route::get('/news', [PageController::class, 'newsIndex'])->name('newsIndex');
Route::get('/policy', [PageController::class, 'policyIndex'])->name('policyIndex');
Route::get('/suppliers', [PageController::class, 'suppliersIndex'])->name('suppliersIndex');


Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacanciesIndex');
Route::get('/vacancies/{slug}', [VacancyController::class, 'show'])->name('vacanciesVacancy');


Route::get('/leasing', [VacancyController::class, 'index'])->name('leasing');
Route::get('/leasing-semitrailers', [VacancyController::class, 'index'])->name('leasingSemitrailers');
Route::get('/leasingOperatingLease', [VacancyController::class, 'index'])->name('leasingOperatingLease');
Route::get('/leasingTires', [VacancyController::class, 'index'])->name('leasingTires');
Route::get('/fuel', [VacancyController::class, 'index'])->name('fuel');
Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies');
Route::get('/vacancyItem', [VacancyController::class, 'index'])->name('vacancyItem');
Route::get('/about', [VacancyController::class, 'index'])->name('about');
Route::get('/contacts', [VacancyController::class, 'index'])->name('contacts');
Route::get('/documents', [VacancyController::class, 'index'])->name('documents');
Route::get('/suppliers', [VacancyController::class, 'index'])->name('suppliers');

