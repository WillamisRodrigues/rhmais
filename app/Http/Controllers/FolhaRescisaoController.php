<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Estagiario;
use App\FolhaRescisao;
use DB;
use Illuminate\Http\Request;

class FolhaRescisaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referencia = request("referencia");
        $unidades = request('unidade_id');

        if (request('unidade_id') !== null && request('referencia') !== null) {

            $folhaRescisao = DB::table('folha_pagamento')
                ->join('empresa', 'empresa.id', '=', 'folha_pagamento.empresa_id')
                ->where("empresa_id", $unidades)
                ->where("referencia", $referencia)
                ->get();
            $periodos = DB::table("folha_pagamento")->select(DB::raw('count(*) as periodo, referencia'))
                ->where('referencia', '<>', 1)
                ->groupBy('referencia')
                ->get();

            return view('folha_rescisao.index', [
                'unidades' => $empresas = Empresa::where('id', request('unidades_id'))->get(),
                'folhas' => $folhaRescisao,
                'estagiarios' => $estagiarios = Estagiario::all(),
                'empresas' => $empresas,
                'periodos' => $periodos,
                'referencia' => $referencia,
            ]);

        } else {
            $unidades = DB::table('cau')
                ->join('empresa', 'empresa.id', '=', 'cau.empresa_id')
                ->select('empresa.id as empresa_id', 'empresa.nome_fantasia', 'cau.data_inicio', 'cau.data_fim', 'cau.situacao', 'cau.id AS id')
                ->get();

            $estagiarios = DB::table('estagiario')->get();
            $contratos = DB::table("tce_contrato")->get();

            $data = date("Y/m");
            $folhas = DB::table("folha_pagamento")->where('referencia', '=', $data)->get();
            $periodos = DB::table("folha_pagamento")->select(DB::raw('count(*) as periodo, referencia'))
                ->where('referencia', '<>', 1)
                ->groupBy('referencia')
                ->get();
            $empresas = DB::table('empresa')->get();
        }
        return view('folha_rescisao.index', [
            'unidades' => $unidades,
            'folhas' => $folhas,
            'estagiarios' => $estagiarios,
            'empresas' => $empresas,
            'periodos' => $periodos]);
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
        //     'estagiario_id' => 'required',
        //     'empresa_id' => 'required',
        // ]);

        $rescisao = new FolhaRescisao();
        $rescisao->estagiario_id = $request->get('estagiario_id');
        $rescisao->empresa_id = $request->get('empresa_id');
        $rescisao->valor_bolsa = $request->get('valor_bolsa');

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
    public function edit($id)
    {
        $folha = DB::table('folha_pagamento')->where('id', $id)->get()->first();
        $empresa = DB::table('empresa')->where('id', $folha->empresa_id)->get()->first();
        $estagiario = DB::table('estagiario')->where('id', $folha->estagiario_id)->get()->first();
        $contrato = DB::table('tce_contrato')->where('estagiario_id', $folha->estagiario_id)->get()->first();
        $beneficios = DB::table('beneficio')->get();

        $mesAtual = date("m");
        $users = DB::table('beneficio_estagiario')->where('estagiario_id', $folha->estagiario_id)->whereMonth('created_at', '=', date('m'))->get();
// dd($users);
        $mes = date("m");
        if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
            $dias_considerados = 31;
        } else if ($mes == 2) {
            $dias_considerados = 28;
        } else {
            $dias_considerados = 30;
        }

        // dd($users);
        return view('folha_rescisao.edit', ['folha' => $folha, 'empresa' => $empresa, 'estagiario' => $estagiario, 'contrato' => $contrato, 'dias_considerados' => $dias_considerados, 'beneficios' => $beneficios, 'users' => $users]);

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
}
