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
Route::get('infos/{id}', ['uses' => 'FinanceiroController@infos', 'as' => 'financeiro.infos']);
Route::get('cau_assinado/{id}', ['uses' => 'CauController@assinado', 'as' => 'cau_convenio.assinar']);
Route::get('cce_assinado/{id}', ['uses' => 'CceController@assinado', 'as' => 'cce_convenio.assinar']);
Route::get('financeiro_fechado/{id}', ['uses' => 'FinanceiroController@assinado', 'as' => 'financeiro.fechar']);
Route::post('editar_folha_pagamento', ['uses' => 'FolhaPagamentoController@editar', 'as' => 'folha_pagamento.editar']);
Route::get('editar_folha_rescisao', ['uses' => 'FolhaRescisaoController@editar', 'as' => 'folha_recisao.editar']);
Route::post('processar', 'FolhaPagamentoController@processarFolha');
Route::post('processarRescisao', 'FolhaRescisaoController@processarRescisao');
Route::resource('ajax-crud', 'AjaxController');
Route::get('beneficio_estagiario/{id}', ['uses' => 'AjaxController@beneficio_estagiario', 'as' => 'ajax-crud.beneficio_estagiario'] );

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
Route::resource('motivo', 'MotivoController');
Route::resource('orientador', 'OrientadorController');
Route::resource('supervisor', 'SupervisorController');
Route::resource('termo_recesso', 'RecessoController');
Route::resource('financeiro', 'FinanceiroController');
Route::resource('avaliacao_supervisor', 'AvaliacaoSuperController');
Route::resource('folha_pagamento', 'FolhaPagamentoController');
Route::resource('folha_rescisao', 'FolhaRescisaoController');


// Route::post('adicionarRecesso',['as' => 'adicionarRecesso', 'uses' => 'RecessoController@store']);

Route::get('/cidade-estado', array('as' => 'myform', 'uses' => 'EstagiarioController@myform'));
Route::get('myform/ajax/{id}', array('as' => 'myform.ajax', 'uses' => 'EstagiarioController@myformAjax'));

/*Gerar PDF*/
Route::get('valores_rescisao', 'PdfController@generateValoresRescisao');
Route::get('recisaotce', 'PdfController@generateRecisao');
Route::get('cau', 'PdfController@generateCau');
Route::get('cce', 'PdfController@generateCce');
Route::get('estagio', 'PdfController@generateEstagio');
Route::get('tce-pdf', 'PdfController@generatePDF');
Route::get('avaliacao-pdf', 'PdfController@generateAvaliacao');
Route::get('fechamento-pdf', 'PdfController@generateFechamento');
Route::get('/tce-pdf/{id}', 'EstagiarioController@gerarRelatorio');
Route::get('rescisao/{id}', 'PdfController@generateRescisao');
Route::get('holerite/{id}', 'PdfController@generateHolerite');
Route::get('grelacao/{id}', 'PdfController@generateFolha');



/* rotas tce */
Route::resource('tce_contrato', 'TceContratoController');
Route::resource('tce_rescisao', 'TceRescisaoController');
Route::resource('cau_convenio', 'CauController');
Route::resource('cce_convenio', 'CceController');
Route::resource('tce_aditivo', 'TceAditivoController');
Route::resource('plano_estagio', 'PlanoEstagioController');
Route::get('plano_edit', 'TceContrato@plano_edit');

/* fim rotas tce */
/* rotas recesso / ferias */
Route::get('/lista_recesso', function () {
    return view('recesso/index');
});

Route::get('/editar_conta', function () {
    return view('editar_conta/edit');
});

Route::get('lista_auto_avaliacao', ['uses' => 'AvaliacaoController@lista_avaliacao', 'as' => 'lista_auto_avaliacao']);

Route::get('deletar_avaliacao_estagiario/{id}', [
    'uses' => 'AvaliacaoController@deletar_avaliacao_estagiario',
    'as' => 'deletar.avaliacao.estagiario'
]);

Route::get('assinar_avaliacao_estagiario/{id}', ['uses' => 'AvaliacaoController@assinar_avaliacao_estagiario', 'as' => 'assinar.avaliacao.estagiario']);

Route::get('deletar_avaliacao_supervisor/{id}', [
    'uses' => 'AvaliacaoController@deletar_avaliacao_supervisor',
    'as' => 'deletar.avaliacao.supervisor'
]);

Route::get('assinar_avaliacao_supervisor/{id}', ['uses' => 'AvaliacaoController@assinar_avaliacao_supervisor', 'as' => 'assinar.avaliacao.supervisor']);

Route::get('lista_avaliacao_supervisor', ['uses' => 'AvaliacaoController@lista_avaliacao', 'as' => 'lista_avaliacao_supervisor']);
