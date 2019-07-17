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
Route::get('/home/grafico', 'HomeController@grafico');

Route::resource('empresa', 'EmpresaController');
Route::resource('estagiario', 'EstagiarioController');
Route::resource('instituicao', 'InstituicaoController');
Route::resource('user_sistema', 'UserController');
Route::resource('curso', 'CursoController');

 Route::get('/cidade-estado',array('as'=>'myform','uses'=>'EstagiarioController@myform'));
 Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'EstagiarioController@myformAjax'));

Route::get('/termo_recesso', function () {
    return view('termo/index');
});


/* rotas tce */
Route::resource('tce_contrato', 'TceContratoController');

Route::get('/tce_aditivo', function () {
    return view('tce_aditivo/index');
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
/* rotas recesso / ferias */
Route::get('/lista_recesso', function () {
    return view('recesso/index');
});
/* fim recesso de ferias */

/*rotas folhas de pagamento , recisao, rendimentos , previa_recisao*/
Route::get('/folha_pagamento', function () {
    return view('folha_pagamento/index');
});
Route::get('/folha_rescisao', function () {
    return view('folha_rescisao/index');
});
Route::get('/rendimentos', function () {
    return view('rendimentos/index');
});
Route::get('/previsao_rescisao', function () {
    return view('previsao_rescisao/index');
});

Route::get('/motivos_rescisao', function () {
    return view('motivos/index');
});

Route::get('/setores', function () {
    return view('setores/index');
});

Route::get('/atividades', function () {
    return view('atividades/index');
});

Route::get('/beneficios', function () {
    return view('beneficios/index');
});


Route::get('/horarios', function () {
    return view('horarios/index');
});

Route::get('/orientador', function () {
    return view('orientador/index');
});
Route::get('/seguro', function () {
    return view('seguro/index');
});

Route::get('/supervisor', function () {
    return view('supervisor/index');
});

Route::get('/editar_conta', function () {
    return view('editar_conta/edit');
});

/* fim folha de pagamento */

/* pdf tce  */
Route::get('/tce', function () {
    //  return view('invoice');
    $pdf = PDF::loadView('pdf/tce/index');
    return $pdf->stream('pdf/tce/index.pdf');
});
Route::get('/recisaotce', function () {
    //  return view('invoice');
    $pdf = PDF::loadView('pdf/recisao/index');
    return $pdf->stream('pdf/recisao/index.pdf');
});