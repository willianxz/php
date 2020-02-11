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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AuthController@dashboard')->name('admin');
Route::get('/admin/login','AuthController@showloginform')->name('admin.login');
Route::get('/admin/logout','AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do','AuthController@login')->name('admin.login.do');

