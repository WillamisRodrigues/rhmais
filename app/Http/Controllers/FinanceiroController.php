<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empresa;
class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = DB::table('empresa')->get();
        $data = date("Y/m");
        $contratos = DB::table("cobranca")->where('referencia', '=', $data)->get();

        foreach ($empresas as $empresa) {
            if (!DB::table('cobranca')->where([['empresa_id', '=', $empresa->id], ['referencia', '=', date("Y/m")]])->get()->first()) {
                $contrato_da_empresa = DB::table('cau')->where('empresa_id', $empresa->id)->get()->first();
                if ($contrato_da_empresa) {
                     $custo = Empresa::where('id', $empresa->id)->pluck('custo_unitario');
                     $contagem = DB::table('tce_contrato')->where('empresa_id', $empresa->id)->count();
                     $soma_custo = $custo[0] * $contagem;
                    DB::insert('insert into cobranca (referencia, dia_pg_estagio, dia_fechamento, total_custo, data_boleto, empresa_id, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?)', [date("Y/m"), $empresa->data_estagiario, $empresa->data_fechamento, $soma_custo, $empresa->data_boleto, $contrato_da_empresa->empresa_id, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")]);
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

        $data = date("Y/m");
        $contratos = DB::table('empresa')
        ->join('cobranca', 'empresa.id', '=', 'cobranca.empresa_id')
        ->join('cau', 'empresa.id', '=', 'cau.empresa_id')
        ->where('cobranca.id', '=', $id)->where('referencia', '=', $data)->get();

        return view('financeiro.infos', ['contratos'=>$contratos]);
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

    public function assinado($id)
    {
        DB::update('update cobranca set situacao = 1 where id = ?', [$id]);
        return redirect('financeiro');
    }
}
