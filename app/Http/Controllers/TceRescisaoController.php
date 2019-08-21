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
        $rescisao = DB::table('tce_rescisao')
            ->join('estagiario', 'estagiario.id', '=', 'tce_rescisao.estagiario_id')
            ->join('empresa', 'empresa.id', '=', 'tce_rescisao.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'tce_rescisao.instituicao_id')
            ->select(
                'estagiario.nome',
                'estagiario.id',
                'empresa.nome_fantasia',
                'instituicao.nome_instituicao',
                'tce_rescisao.bolsa',
                'tce_rescisao.data_inicio',
                'tce_rescisao.data_fim',
                'tce_rescisao.contrato'
            )
            ->get();
        return view('tce_rescisao.index',  compact('rescisao', $rescisao));
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
        TceRescisao::create($request->all());
        return redirect()->route('tce_rescisao.index')
            ->with('success', 'Cadastrado com sucesso.');
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
