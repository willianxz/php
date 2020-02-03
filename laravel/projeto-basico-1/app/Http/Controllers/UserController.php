<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function listUser(){
          //Isso aqui para cadastrar um novo usuário:
//         $user = new User();
//         $user->name = "Willian Web";
//         $user->email = "willian@hotmail.com";
//         $user->password = Hash::make('123');
//         $user->save();
//
//         echo "";

         $texto = 'Esse texto é de uma variavel';
         $user = User::where('id','=', 1)->first();

         return view('listUser',[
             'userList' => $user,
              'text' => $texto
             ]);
     }
}
