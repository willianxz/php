<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Para criar esse arquivo e os demais de autenticação e login foi usado o seguite comando:
//php artisan ui bootstrap --auth
//e depois usado o comando:
//npm install && npm run dev

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
