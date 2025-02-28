<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::macro('image', fn(string $asset) => Vite::asset("resources/img/{$asset}"));
        Vite::macro('video', fn(string $asset) => Vite::asset("resources/video/{$asset}"));
        Vite::macro('font', fn(string $asset) => Vite::asset("resources/fonts/{$asset}"));
        Vite::macro('css', fn(string $asset) => Vite::content("resources/css/{$asset}"));
        Vite::macro('js', fn(string $asset) => Vite::content("resources/js/{$asset}"));
    }
}
