<?php



namespace App\Http\Controllers;

use App\Http\Requests;


use App\Http\Controllers\Controller;


class UsuariosController extends Controller
{
   
    
    public function index(){
       return view('usuarios',['variavelQualquer' => 'Esse texto esta dentro da variavelQualquer!']);
       //Retorna a view usuarios e envia a nossa variavel contendo algum valor para a nossa view.
    }
    
    
    
}
