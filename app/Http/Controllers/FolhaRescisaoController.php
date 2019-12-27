<?php

namespace App\Http\Controllers;

use App\FolhaRescisao;
use Illuminate\Http\Request;
use DB;

class FolhaRescisaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = DB::table('cau')->join('empresa', 'empresa.id', '=', 'cau.empresa_id')->select('empresa.id','empresa.nome_fantasia','cau.data_inicio','cau.data_fim','cau.situacao','cau.id AS id')->get();

        $estagiarios = DB::table('estagiario')->get();
        $contratos = DB::table("tce_contrato")->get();

        $data = date("Y/m");
        $folhas = DB::table("folha_pagamento")->where('referencia', '=', $data)->get();
        $periodos = DB::table("folha_pagamento")->select(DB::raw('count(*) as periodo, referencia'))
            ->where('referencia', '<>', 1)
            ->groupBy('referencia')
            ->get();
        $empresas = DB::table('empresa')->get();

        // dd($folhas);

        return view('folha_rescisao.index',  ['unidades' => $unidades, 'folhas' => $folhas, 'estagiarios' => $estagiarios, 'empresas' => $empresas, 'periodos' => $periodos]);

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
     * @param  \App\FolhaRescisao  $folhaRescisao
     * @return \Illuminate\Http\Response
     */
    public function show(FolhaRescisao $folhaRescisao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FolhaRescisao  $folhaRescisao
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('folha_rescisao.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FolhaRescisao  $folhaRescisao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FolhaRescisao $folhaRescisao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FolhaRescisao  $folhaRescisao
     * @return \Illuminate\Http\Response
     */
    public function destroy(FolhaRescisao $folhaRescisao)
    {
        //
    }

    public function processarFolha(Request $request)
    {
        if (empty($request->unidade) || empty($request->referencia)) {
            return redirect('folha_pagamento');
        } else {
            $processarFolha = $request->input('unidade');
            $referencia = $request->input('referencia');
            $unidade = DB::table('folha_pagamento')->join('empresa', 'empresa.id', '=', 'folha_pagamento.empresa_id')
                ->where([
                    ['nome_fantasia', 'LIKE', '%' . $processarFolha . '%'],
                    ['referencia', 'LIKE', '%' . $referencia . '%']
                ]);
            $unidades = DB::table('cau')->join('empresa', 'empresa.id', '=', 'cau.empresa_id')->select('empresa.id', 'empresa.nome_fantasia', 'cau.data_inicio', 'cau.data_fim', 'cau.situacao', 'cau.id AS id')->where('nome_fantasia', '=', $processarFolha)->get();

            $folhas = DB::table("folha_pagamento")
                ->join('empresa', 'empresa.id', '=', 'folha_pagamento.empresa_id')->where('nome_fantasia', '=', $processarFolha)
                ->where('referencia', '=', $request->referencia)
                ->get();

            $estagiarios = DB::table('estagiario')->get();

            $periodos = DB::table("folha_pagamento")->select(DB::raw('count(*) as periodo, referencia'))
                ->where('referencia', '<>', 1)
                ->groupBy('referencia')
                ->get();
            $empresas = DB::table('empresa')
                ->get();

            return view('folha_rescisao.index',  ['unidade' => $unidade, 'unidades' => $unidades, 'folhas' => $folhas, 'estagiarios' => $estagiarios, 'empresas' => $empresas, 'periodos' => $periodos]);
        }
    }
}
