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

 Route::get('/', function () {
     return view('auth/login');
 });

/*users routes*/
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user-edit/{id}', 'UserController@edit')->name('user-edit');
Route::get('/user-delete/{id}', 'UserController@delete')->name('user-delete');
Route::get('/user-add', 'UserController@add')->name('user-add');
Route::post('/user-post', 'UserController@store')->name('user-post');

 /*Produtos */
 Route::get('/produto/pesquisar', 'ProdutoController@pesquisar');
Route::post('/produto/pesquisar', 'ProdutoController@pesquisar');
Route::get('/produto/inserir', 'ProdutoController@mostrar_inserir');
Route::post('/produto/inserir', 'ProdutoController@inserir');
Route::get('/produto/alterar/{id}', 'ProdutoController@mostrar_alterar');
Route::post('/produto/alterar', 'ProdutoController@alterar');
Route::get('/produto/excluir/{id}', 'ProdutoController@excluir');


Route::get('/cadastro_instituicao', function () {
    return view('cadastro/instituicao');
});

Route::get('/cadastro_empresas', function () {
    return view('cadastro/empresas');
});
