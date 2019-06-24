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
 Route::get('/', 'HomeController@index')->name('index');
 Route::get('/home', 'HomeController@index')->name('index');
 Route::post('/home', 'HomeController@index')->name('index');

 Route::resource('empresa', 'EmpresaController');
 Route::resource('estagiario', 'EstagiarioController');
 Route::resource('instituicao', 'InstituicaoController');
Route::resource('user_sistema', 'UserController');
// Route::get('/estagiario/pdf/', [ 'as' => 'estagiario.pdf', 'uses' => 'EstagiarioController@pdf']);
Route::get('/estagiario/print-pdf', [ 'as' => 'estagiario.printpdf', 'uses' => 'EstagiarioController@printPDF']);


Route::get('/termo_recesso', function () {
    return view('termo/lista-recesso');
});
