<?php

namespace App\Http\Controllers;

use App\TceAditivo;
use App\Estagiario;
use App\TceContrato;
use DB;
use Illuminate\Http\Request;

class TceAditivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tcesad = DB::table('tce_contrato')
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
            'tce_contrato.id'
            )
            ->get();
        return view('tce_aditivo.index',  compact('tcesad', $tcesad));
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
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function show(TceAditivo $tceAditivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function edit(TceAditivo  $tceAditivo)
    {
        // $tcesad = TceContrato::where('id', '=', $id)->get();

        return view('tce_aditivo.edit', compact('tceAditivo', $tceAditivo));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TceAditivo $tceAditivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TceAditivo $tceAditivo)
    {
        //
    }
}
