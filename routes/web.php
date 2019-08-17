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
Route::resource('cidade', 'CidadeController');
Route::resource('beneficio', 'BeneficioController');
Route::resource('seguro', 'SeguradoraController');
Route::resource('setor', 'SetorController');
Route::resource('atividade', 'AtividadeController');
Route::resource('horario', 'HorarioController');
Route::resource('auto_avaliacao', 'AvaliacaoController');
Route::resource('avaliacao_super', 'AvaliacaoSuperController');
Route::resource('motivo', 'MotivoController');
Route::resource('orientador', 'OrientadorController');
Route::resource('supervisor', 'SupervisorController');


 Route::get('/cidade-estado',array('as'=>'myform','uses'=>'EstagiarioController@myform'));
 Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'EstagiarioController@myformAjax'));

Route::get('/termo_recesso', function () {
    return view('termo/index');
});

Route::get('/adicionar_cau', function () {
    return view('cau_convenio/create');
});

Route::get('/adicionar_cce', function () {
    return view('cce_convenio/create');
});


/*Gerar PDF*/
Route::get('recisaotce', 'PdfController@generateRecisao');
Route::get('cau', 'PdfController@generateCau');
Route::get('cce', 'PdfController@generateCce');
Route::get('estagio', 'PdfController@generateEstagio');
Route::get('tce-pdf', 'PdfController@generatePDF');
Route::get('/tce-pdf/{id}', 'EstagiarioController@gerarRelatorio');
Route::get('/recisaotce/{id}', 'PdfController@generateRecisao');


/* rotas tce */
Route::resource('tce_contrato', 'TceContratoController');
Route::resource('tce_rescisao', 'TceRescisaoController');
Route::resource('cau_convenio', 'CauController');
Route::resource('cce_convenio', 'CceController');
Route::resource('tce_aditivo', 'TceAditivoController');

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

Route::get('/editar_conta', function () {
    return view('editar_conta/edit');
});

Route::get('/auto_avaliacao', function () {
    return view('auto_avaliacao/index');
});

Route::get('/lista_auto_avaliacao', function () {
    return view('lista_auto_avaliacao/index');
});

Route::get('/avaliacao_supervisor', function () {
    return view('avaliacao_supervisor/index');
});

Route::get('/lista_avaliacao_supervisor', function () {
    return view('lista_avaliacao_supervisor/index');
});

Route::get('/financeiro', function () {
    return view('financeiro/index');
});