<?php

namespace App\Http\Controllers;

use App\Avaliacao;
use App\Empresa;
use App\Estagiario;
use App\Instituicao;
use App\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  $avaliacoes = Avaliacao::all();

        $estagiarios = DB::table('avaliacao')
            ->join('estagiario', 'avaliacao.estagiario_id', '=', 'estagiario.id')
            ->select(
                'estagiario.nome'
            )
            ->get();

        $instituicoes = DB::table('avaliacao')
            ->join('empresa', 'avaliacao.empresa_id', '=', 'empresa.id')
            ->select(
                'empresa.nome_fantasia'
            )
            ->get();
        $empresas = DB::table('empresa')
            ->join('cidade', 'empresa.city', '=', 'cidade.id')
            ->select(
                'empresa.razao_social',
                'empresa.nome_fantasia',
                'empresa.cnpj',
                'empresa.insc_estadual',
                'empresa.telefone',
                'empresa.id',
                'cidade.nome AS nome_cidade'
            )
            ->get();
        $tceContrato = DB::table('tce_contrato')
            ->select(
            'tce_contrato.data_inicio',
            'tce_contrato.data_fim'
            )
            ->get();
        $supervisores = DB::table('supervisor')->get();
// dd($tceContrato);
        return view('auto_avaliacao.index', [
            'estagiarios' => $estagiarios,
            'instituicoes' => $instituicoes,
            'empresas' => $empresas,
            'supervisores' => $supervisores,
            'tceContrato' => $tceContrato
        ]);
        // return view('auto_avaliacao.index', compact('avaliacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estagiarios = DB::table('estagiario')
            ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
            ->join('cidade', 'estagiario.city', '=', 'cidade.id')
            ->select(
                'estagiario.nome',
                'empresa.nome_fantasia',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.data_nascimento',
                'estagiario.id',
                'estagiario.status',
                'estagiario.escolaridade',
                'cidade.nome AS nome_cidade'
            )
            ->get();
        $instituicoes = DB::table('instituicao')
            ->join('cidade', 'instituicao.city', '=', 'cidade.id')
            ->select(
                'instituicao.razao_social',
                'instituicao.nome_instituicao',
                'instituicao.cnpj',
                'instituicao.rua',
                'instituicao.id',
                'cidade.nome AS nome_cidade'
            )
            ->get();
        $empresas = DB::table('empresa')
            ->join('cidade', 'empresa.city', '=', 'cidade.id')
            ->select(
                'empresa.razao_social',
                'empresa.nome_fantasia',
                'empresa.cnpj',
                'empresa.insc_estadual',
                'empresa.telefone',
                'empresa.id',
                'cidade.nome AS nome_cidade'
            )
            ->get();
        $supervisores = DB::table('supervisor')->get();

        return view('auto_avaliacao.create', [
            'estagiarios' => $estagiarios,
            'instituicoes' => $instituicoes,
            'empresas' => $empresas,
            'supervisores' => $supervisores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'estagiario_id' => 'required',
            'empresa_id' => 'required',
        ]);

        $avaliacao = new Avaliacao();
        $avaliacao->estagiario_id = $request->get('estagiario_id');
        $avaliacao->empresa_id = $request->get('empresa_id');
        $avaliacao->instituicao_id = $request->get('instituicao_id');
        $avaliacao->supervisor = $request->get('supervisor');
        $avaliacao->periodo_avaliativo = $request->get('periodo_avaliativo');
        $avaliacao->data_doc = $request->get('data_doc');
        $avaliacao->obs = $request->get('obs');
        $avaliacao->compromisso = $request->get('compromisso');
        $avaliacao->plano_de_estagio = $request->get('plano_de_estagio');
        $avaliacao->aprendizagem = $request->get('aprendizagem');
        $avaliacao->identificacao = $request->get('identificacao');
        $avaliacao->experiencia = $request->get('experiencia');

        $avaliacao->save();

        return redirect()->route('auto_avaliacao.index')
            ->with('success', 'Realizada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function show(Avaliacao $avaliacao)
    {
        $empresas = Empresa::all();
        $estagiarios = Estagiario::all();
        $instituicoes = Instituicao::all();
        $supervisores = Supervisor::all();

        return view('auto_avaliacao.show', compact('empresas', 'estagiarios', 'instituicoes', 'supervisores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Avaliacao $avaliacao)
    {
        $estagiarios = DB::table('estagiario')
            ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
            ->join('cidade', 'estagiario.city', '=', 'cidade.id')
            ->select(
                'estagiario.nome',
                'empresa.nome_fantasia',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.data_nascimento',
                'estagiario.id',
                'estagiario.status',
                'estagiario.escolaridade',
                'cidade.nome AS nome_cidade'
            )
            ->get();
        $instituicoes = DB::table('instituicao')
            ->join('cidade', 'instituicao.city', '=', 'cidade.id')
            ->select(
                'instituicao.razao_social',
                'instituicao.nome_instituicao',
                'instituicao.cnpj',
                'instituicao.rua',
                'instituicao.id',
                'cidade.nome AS nome_cidade'
            )
            ->get();
        $empresas = DB::table('empresa')
            ->join('cidade', 'empresa.city', '=', 'cidade.id')
            ->select(
                'empresa.razao_social',
                'empresa.nome_fantasia',
                'empresa.cnpj',
                'empresa.insc_estadual',
                'empresa.telefone',
                'empresa.id',
                'cidade.nome AS nome_cidade'
            )
            ->get();
        $supervisores = DB::table('supervisor')->get();

        return view('lista_auto_avaliacao.edit', [
            'estagiarios' => $estagiarios,
            'instituicoes' => $instituicoes,
            'empresas' => $empresas,
            'supervisores' => $supervisores
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avaliacao $avaliacao)
    {
        //
    }
}
