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

/* rotas tce */

Route::get('/tce_contratos', function () {
    return view('tce_contratos/index');
});
Route::get('/tce_aditivos', function () {
    return view('tce_aditivos/index');
});

Route::get('/tce_recisao', function () {
    return view('tce_recisao/index');
});

Route::get('/tce_rescindindo', function () {
    return view('tce_rescindindo/index');
});

Route::get('/cau_convenio', function () {
    return view('cau_convenio/index');
});

Route::get('/cce_convenio', function () {
    return view('cce_convenio/index');
});

Route::get('/plano_estagio', function () {
    return view('plano_estagio/index');
});

/* fim rotas tce */
Route::get('/invoice', function () {
    //  return view('invoice');
    $pdf = PDF::loadView('invoice');
    return $pdf->stream('invoice.pdf');
});