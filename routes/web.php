<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/additional-products', [PageController::class, 'additionalProducts'])->name('additionalProducts');
Route::get('/additional-services', [PageController::class, 'additionalServices'])->name('additionalServices');
Route::get('/career', [PageController::class, 'career'])->name('career');
Route::get('/career/{slug}', [PageController::class, 'vacancy'])->name('vacancy');
Route::get('/cargo-fuel', [PageController::class, 'cargoFuel'])->name('cargoFuel');
Route::get('/fuel', [PageController::class, 'fuel'])->name('fuel');
Route::get('/fuel-cards', [PageController::class, 'fuelCards'])->name('fuelCards');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::get('/docs', [PageController::class, 'docs'])->name('docs');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{slug}', [PageController::class, 'newsDetail'])->name('newsDetail');
Route::get('/services', [PageController::class, 'repairCenters'])->name('repairCenters');
Route::get('/services/{slug}', [PageController::class, 'repairCenterDetail'])->name('repairCenterDetail');
Route::get('/suppliers', [PageController::class, 'suppliers'])->name('suppliers');
