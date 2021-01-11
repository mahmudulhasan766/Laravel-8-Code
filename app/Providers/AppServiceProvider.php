<?php

namespace App\Providers;

use App\View\Components\MyCard;
use App\View\Components\OurCompt;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('xyz',OurCompt::class);
        Blade::component('card',MyCard::class);
    }
}
