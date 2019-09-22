<?php

namespace App\Http\Controllers;

use App\FolhaPagamento;
use Illuminate\Http\Request;
use DB;

class FolhaPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = DB::table('cau')
            ->join('empresa', 'empresa.id', '=', 'cau.empresa_id')
            ->select(
                'empresa.id',
                'empresa.nome_fantasia',
                'cau.data_inicio',
                'cau.data_fim',
                'cau.situacao',
                'cau.id AS id'
            )
            ->get();

        return view('folha_pagamento.index',  compact('unidades', $unidades));

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
     * @param  \App\FolhaPagamento  $folhaPagamento
     * @return \Illuminate\Http\Response
     */
    public function show(FolhaPagamento $folhaPagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FolhaPagamento  $folhaPagamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('folha_pagamento.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FolhaPagamento  $folhaPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FolhaPagamento $folhaPagamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FolhaPagamento  $folhaPagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(FolhaPagamento $folhaPagamento)
    {
        //
    }
}
