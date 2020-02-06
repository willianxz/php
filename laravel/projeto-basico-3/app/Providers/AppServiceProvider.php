<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
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
    //Esse método serve para trocar o nome das Rotas automaticas geradas por:
    //php artisan make:controller Form\\TestController --resource --model=User
    public function boot()
    {
        Route::resourceVerbs([
            'create' => 'novo',
            'edit' => 'editar'
        ]);
    }
}
