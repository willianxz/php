<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        $estalogado = Auth::check();
        if($estalogado){
            return view('admin.dashboard', [
                'user' => Auth::user()
            ]); //Acessa a pasta admin e depois o arquivo dashboard.blade.php
        }
        return redirect()->route('admin.login'); //Como ele não está logado, então redirecione
    }

    public function showloginform(){
        return view('admin.formLogin');
    }

    public function login(Request $request){
        $emailVaLido = filter_var($request->email, FILTER_VALIDATE_EMAIL);

        if(!$emailVaLido){
            return redirect()->back()->withInput()->withErrors(['O email informado não é válido.']);
        }

        $credentials = [
          'email' => $request->email,
           'password' => $request->password
        ];

        $efetuoulogin = Auth::attempt($credentials);  // Vai tentar fazer uma tentativa de Login com essas credenciais.
        if($efetuoulogin){
            return redirect()->route('admin');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem.']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin');
    }
}
