<?php

use App\Http\Controllers\PageController;
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
Route::get('/vacancies', [PageController::class, 'vacanciesIndex'])->name('vacanciesIndex');
Route::get('/vacancies/{slug}', [PageController::class, 'vacanciesVacancy'])->name('vacanciesVacancy');
