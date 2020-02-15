<?php

namespace App\Http\Controllers;

use App\Beneficio;
use App\Empresa;
use App\Estagiario;
use App\Instituicao;
use App\Supervisor;
use App\Orientador;
use App\TceAditivo;
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
        $estagiarios = Estagiario::all();
        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();
        $beneficios = Beneficio::all();
        $supervisor = Supervisor::all();
        $orientador = Orientador::all();
        return view('tce_aditivo.edit', compact([
            'tceAditivo',
            'estagiarios',
            'instituicoes',
            'empresas',
            'beneficios',
            'supervisor',
            'orientador',
            $tceAditivo]));
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
        return view('tce_aditivo.index');
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
