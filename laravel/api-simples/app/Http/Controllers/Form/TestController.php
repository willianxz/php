<?php

namespace App\Http\Controllers\Form;

//Note que o Laravel precisa saber onde está o model do usuario!
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listAllUsers(){
        $users = User::all();
        dd($users);
        //echo "Hello World!!!";
    }
}
