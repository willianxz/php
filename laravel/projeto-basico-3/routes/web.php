<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Use o comando abaixo para listar as URLS:
//php artisan route:list

//Essas Rotas foram geradas pelo comando:
//php artisan make:controller Form\\TestController --resource --model=User

Route::get('/', function () {
    return view('welcome');
});

//Rota completa de CRUD usuarios.
//Para alterar a URL, entre la em Providers/AppServiceProvider.php
Route::resource('usuarios', 'Form\\TestController')->names('user')->parameters(['usuarios' => 'user']);
