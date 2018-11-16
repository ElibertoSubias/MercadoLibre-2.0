<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Carrito;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $carrito = Carrito::where(['idUser'=>Auth::id()])->get();
            $view->with('cant_carrito',count($carrito));

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
