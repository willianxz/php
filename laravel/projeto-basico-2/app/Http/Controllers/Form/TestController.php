<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function listAllUsers(){
       $users = User::all();

       return view('listAllUsers',[
           'users' => $users
       ]);
    }

    public function listUser(User $user){
        return view('listUser',[
            'user'=> $user
            ]);
    }

    public function formAddUser(){
        return view('addUser');
    }

    public function storeUser(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //return redirect('/');//retorna para a home.
        return redirect()->route('users.listAll'); //retorna para uma rota que possui nome.
    }

    public function formEditUser(User $user){
        return view('editUser',[
            'user' => $user
        ]);
    }

    public function edit(User $user, Request $request){
        $emailFiltrado = filter_var($request->email, FILTER_VALIDATE_EMAIL);
        $senhaNaoEVazia = !empty($request->password);

        $user->name = $request->name;
        if($emailFiltrado){
          $user->email = $request->email;
        }
        if($senhaNaoEVazia){
          $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('users.listAll');
     }

     public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.listAll');
     }
}
