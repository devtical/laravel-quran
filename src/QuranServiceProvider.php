<?php

namespace Devtical\Quran;

use Illuminate\Support\ServiceProvider;

class QuranServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/quran.php', 'quran');
    }
}
