<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sobre', function () {
    return view('sobre');
});


Route::get('/quemSomos', function () {
    return view('quemSomos');
});

Route::get('/faleConosco', function () {
    return view('faleConosco');
});

Route::get('/listarUsuario/{usuario}', function ($usuario) {
   echo $usuario; //http://localhost/php/laravel/projeto1/public//listarUsuario/1 pode passar o parametro.
});


Route::get('/usuarios', 'UsuariosController@index');