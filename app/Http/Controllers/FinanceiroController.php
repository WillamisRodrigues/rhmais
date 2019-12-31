<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $unidades = DB::table('cau')->join('empresa', 'empresa.id', '=', 'cau.empresa_id')->select('empresa.id', 'empresa.nome_fantasia', 'cau.data_inicio', 'cau.data_fim', 'cau.situacao', 'cau.id AS id')->get();
        $empresas = DB::table('empresa')->get();
        $contratos = DB::table("cobranca")->get();

        foreach ($empresas as $empresa) {
            if (!DB::table('cobranca')->where([['empresa_id', '=', $empresa->id], ['referencia', '=', date("Y/m")]])->get()->first()) {
                $contrato_da_empresa = DB::table('cau')->where('empresa_id', $empresa->id)->get()->first();
                if ($contrato_da_empresa) {
                    DB::insert('insert into cobranca (referencia, dia_pg_estagio, dia_fechamento, custo_unitario, data_boleto, empresa_id, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?)', [date("Y/m"), $empresa->data_estagiario, $empresa->data_fechamento, $empresa->custo_unitario, $empresa->data_boleto, $contrato_da_empresa->empresa_id, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")]);
                }
            }
        }

        $periodos = DB::table("cobranca")->select(DB::raw('count(*) as periodo, referencia'))
            ->where('referencia', '<>', 1)
            ->groupBy('referencia')
            ->get();

        return view('financeiro.index', ['empresas' => $empresas, 'contratos'=>$contratos, 'periodos'=>$periodos]);
    }

    public function infos($id)
    {
        return view('financeiro.infos');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
