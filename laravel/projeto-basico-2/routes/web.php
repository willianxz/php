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

//rota padrão: Route::verb('url', 'controller@metodo')->name('nome-da-rota');

Route::get('/', function () {
    return view('welcome');
});

//Quando acessar a URL, irá acessar o controlador, depois o seu método.
//Route::get('listagem-usuario', 'UserController@listUser');

//Isso serve para eu poder retirar a necessidade de ficar chamando Form\\ nas rotas.
//Ex: Route::get('usuarios', 'Form\\TestController@listAllUsers')->name('users.listAll');
Route::group(['namespace' => 'Form'], function(){
    //VERBO GET para selecionar dados no banco
    //ATENÇÃO todas as rotas que são dinamicas devem ficar abaixo e as fixas logo acima.
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');

    //VERBO POST para inserir dados no banco
    //Rota para o Action do formulario de cadastro
    Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');

    //VERBO PUT/PATH para editar dados no banco
    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    //VERBO DELETE para excluir dados no banco
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('users.destroy');

});


