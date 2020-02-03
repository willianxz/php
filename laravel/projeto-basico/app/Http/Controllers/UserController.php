<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){


        //echo "<h1>Listagem de Usuário</h1>";
        $usuario = "willian";
        $usuarioemail = "willian_xzz@hotmail.com";
        $usuariosenha = Hash::make('123');


        return view('listuser',
            [
               'username' => $usuario,
               'useremail' => $usuarioemail,
               'userpassword' => $usuariosenha
             ]
         );
    }
}
