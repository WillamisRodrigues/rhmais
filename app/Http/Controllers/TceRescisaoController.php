<?php

namespace App\Http\Controllers;

use App\TceRescisao;
use DB;
use Illuminate\Http\Request;

class TceRescisaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estagiarios = DB::table('estagiario')
            ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
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
        return view('tce_recisao.index', compact('estagiarios', $estagiarios));
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
     * @param  \App\TceRescisao  $tceRescisao
     * @return \Illuminate\Http\Response
     */
    public function show(TceRescisao $tceRescisao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TceRescisao  $tceRescisao
     * @return \Illuminate\Http\Response
     */
    public function edit(TceRescisao $tceRescisao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TceRescisao  $tceRescisao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TceRescisao $tceRescisao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TceRescisao  $tceRescisao
     * @return \Illuminate\Http\Response
     */
    public function destroy(TceRescisao $tceRescisao)
    {
        //
    }
}
