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

Route::get('/termo_recesso', function () {
    return view('termo/lista-recesso');
});

Route::get('/invoice', function () {
    //  return view('invoice');
    $pdf = PDF::loadView('invoice');
    return $pdf->stream('invoice.pdf');
});