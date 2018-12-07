<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Carrito;
use App\Direcciones;
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
                $direccion = Direcciones::where(['idUser'=>Auth::id(),'envio'=>1])->get();  
                    $view->with(['cant_carrito'=>count($carrito),'direccion'=>$direccion]);  
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
