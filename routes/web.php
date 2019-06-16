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

Auth::routes();
 Route::get('/', 'HomeController@index')->name('home');
 Route::get('/home', 'HomeController@index')->name('home');
 Route::post('/home', 'HomeController@index')->name('home');

//  Route::get('/', function () {
//      return view('auth/login');
//  });

/*users routes*/
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user-edit/{id}', 'UserController@edit')->name('user-edit');
Route::get('/user-delete/{id}', 'UserController@delete')->name('user-delete');
Route::get('/user-add', 'UserController@add')->name('user-add');
Route::post('/user-post', 'UserController@store')->name('user-post');

 /*Empresas */
 Route::get('/empresas', 'EmpresaController@empresas')->name('empresas');
Route::post('/Empresa/pesquisar', 'EmpresaController@pesquisar');
Route::get('add-empresa', 'EmpresaController@add')->name('add-empresa');
 Route::post('/cadastro/add-empresa', 'EmpresaController@add')->name('add-empresa');
Route::get('/Empresa/alterar/{id}', 'EmpresaController@mostrar_alterar');
Route::post('/Empresa/alterar', 'EmpresaController@alterar');
Route::get('/Empresa/excluir/{id}', 'EmpresaController@excluir');



Route::get('/cadastro_instituicao', function () {
    return view('cadastro/instituicao');
});

Route::get('/cadastro_usuario', function () {
    return view('cadastro/usuario');
});

Route::get('/termo_recesso', function () {
    return view('termo/lista-recesso');
});
