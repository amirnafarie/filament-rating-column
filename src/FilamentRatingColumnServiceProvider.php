<?php

namespace AmirNafarie\FilamentRatingColumn;

use Illuminate\Support\ServiceProvider;

class FilamentRatingColumnServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-rating-column');
    }

    public function register(): void
    {
        //
    }
}
