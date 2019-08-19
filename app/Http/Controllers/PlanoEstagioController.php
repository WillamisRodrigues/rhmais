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
                'tce_contrato.obrigatorio'
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
        //
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
        //
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
