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
        $unidades = DB::table('cau')->join('empresa', 'empresa.id', '=', 'cau.empresa_id')->select('empresa.id', 'empresa.nome_fantasia', 'cau.data_inicio', 'cau.data_fim', 'cau.situacao', 'cau.id AS id')->get();

        $estagiarios = DB::table('estagiario')->get();
        $contratos = DB::table("tce_contrato")->get();

        foreach ($estagiarios as $estagiario) {
            if (!DB::table('folha_pagamento')->where([['estagiario_id', '=', $estagiario->id], ['referencia', '=', date("Y/m")]])->get()->first()) {
                $contrato_do_estagiario = DB::table('tce_contrato')->where('estagiario_id', $estagiario->id)->get()->first();
                if ($contrato_do_estagiario) {
                    DB::insert('insert into folha_pagamento (referencia, estagiario_id, empresa_id, valor_bolsa, faltas, valor_liquido, status, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [date("Y/m"), $estagiario->id, $estagiario->empresa_id, $contrato_do_estagiario->bolsa, 0, $contrato_do_estagiario->bolsa, 0, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")]);
                }
            }
        }

        $folhas = DB::table("folha_pagamento")->get();
        $empresas = DB::table('empresa')->get();

        return view('folha_pagamento.index',  ['unidades' => $unidades, 'folhas' => $folhas, 'estagiarios' => $estagiarios, 'empresas' => $empresas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $folha = DB::table('folha_pagamento')->where('id', $id)->get()->first();
        $empresa = DB::table('empresa')->where('id', $folha->empresa_id)->get()->first();
        $estagiario = DB::table('estagiario')->where('id', $folha->estagiario_id)->get()->first();
        $contrato = DB::table('tce_contrato')->where('estagiario_id', $folha->estagiario_id)->get()->first();
        $beneficios = DB::table('beneficio')->where('empresa_id', $folha->empresa_id)->get();

        $mes = date("m");
        if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
            $dias_considerados = 31;
        } else if ($mes == 2) {
            $dias_considerados = 28;
        } else {
            $dias_considerados = 30;
        }

        return view('folha_pagamento.edit', ['folha' => $folha, 'empresa' => $empresa, 'estagiario' => $estagiario, 'contrato' => $contrato, 'dias_considerados' => $dias_considerados, 'beneficios' => $beneficios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FolhaPagamento  $folhaPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

    public function editar(Request $request)
    {
        $folha = DB::table('folha_pagamento')->where('id', $request->folha_id)->get()->first();
        $beneficios = DB::table('beneficio')->where('empresa_id', $folha->empresa_id)->get();

        $beneficio_ = "beneficio_";

        $update = DB::update('update folha_pagamento set faltas = ? where id = ?', [$request->dias_falta, $request->folha_id]);

        if($beneficios){
            foreach ($beneficios as $beneficio) {
                $folha = DB::table('folha_pagamento')->where('id', $request->folha_id)->get()->first();
                $n_beneficio = $$beneficio_.$beneficio->id;
                $valor = $folha->valor_liquido + $request->$n_beneficio;
                DB::update('update folha_pagamento set valor_liquido = ? where id = ?', [$valor, $folha->id]);
            }
        }
    }
}
