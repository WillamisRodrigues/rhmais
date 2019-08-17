<?php

namespace App\Http\Controllers;

use App\Cce;
use App\Instituicao;
use App\Seguradora;
use DB;
use Illuminate\Http\Request;

class CceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituicoes = DB::table('instituicao')
            ->join('cce', 'instituicao.id', '=', 'cce.instituicao_id')
            ->join('cidade', 'instituicao.city', '=', 'cidade.id')
            ->select(
            'instituicao.id',
            'instituicao.nome_instituicao',
            'cce.data_inicio',
            'cce.data_fim',
            'cce.situacao'
            )
            ->get();
        return view('cce_convenio.index',  compact('instituicoes', $instituicoes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituicoes = Instituicao::all();
        $seguro = Seguradora::all();
        return view('cce_convenio.create', compact('instituicoes', 'seguro'));
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
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function show(Cce $cce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function edit(Cce $cce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cce $cce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cce $cce)
    {
        //
    }
}
