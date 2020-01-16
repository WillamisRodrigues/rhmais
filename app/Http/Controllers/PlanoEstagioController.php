<?php

namespace App\Http\Controllers;

use App\PlanoEstagio;
use DB;
use Illuminate\Http\Request;

class PlanoEstagioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planos = DB::table('tce_contrato')
            ->join('estagiario', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            ->join('empresa', 'empresa.id', '=', 'tce_contrato.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'tce_contrato.instituicao_id')
            ->select(
                'estagiario.nome',
                'estagiario.id',
                'empresa.nome_fantasia',
                'instituicao.nome_instituicao',
                'tce_contrato.bolsa',
                'tce_contrato.data_inicio',
                'tce_contrato.data_fim',
                'tce_contrato.contrato',
                'tce_contrato.assinado',
                'tce_contrato.obrigatorio',
                'tce_contrato.plano_estagio',
                'tce_contrato.id As tceId'
            )
            ->get();
        return view('plano_estagio.index',  compact('planos', $planos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nome' => 'required',
        //     'empresa' => 'required',
        //     'instituicao' => 'required',
        // ]);
        $plano = new PlanoEstagio();
        $plano->estagiario = $request->get('estagiario');
        $plano->empresa = $request->get('empresa');
        $plano->data_inicio = $request->get('data_inicio');
        $plano->data_fim = $request->get('data_fim');
        $plano->data_doc = $request->get('data_doc');
        $plano->contrato = $request->get('contrato');
        $plano->assinado = $request->get('assinado');
        $plano->supervisor = $request->get('supervisor');
        $plano->orientador = $request->get('orientador');
        $plano->plano = $request->get('plano');
        $plano->instituicao = $request->get('instituicao');
        $plano->obs = $request->get('obs');
        $plano->curso = $request->get('curso');
        $plano->save();

        return redirect()->route('plano_estagio.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function show(PlanoEstagio $planoEstagio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanoEstagio $planoEstagio)
    {
        return view('plano_estagio.edit', compact('planoEstagio', $planoEstagio));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanoEstagio $planoEstagio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanoEstagio $planoEstagio)
    {
        //
    }
}
