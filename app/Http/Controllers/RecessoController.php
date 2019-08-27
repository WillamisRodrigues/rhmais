<?php

namespace App\Http\Controllers;

use App\Recesso;
use DB;
use Illuminate\Http\Request;

class RecessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recessos = DB::table('tce_contrato')
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
                'tce_contrato.id As tceId'
            )
            ->get();
        return view('termo.index',  compact('recessos', $recessos));
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
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function show(Recesso $recesso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function edit(Recesso $recesso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recesso $recesso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recesso $recesso)
    {
        //
    }
}
