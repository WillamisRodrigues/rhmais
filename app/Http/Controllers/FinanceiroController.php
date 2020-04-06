<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroController extends Controller
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

            $folhaRescisao = DB::table('cobranca')->join('empresa', 'empresa.id', '=', 'cobranca.empresa_id')
                ->where("empresa_id", $unidades)
                ->where("referencia", $referencia)
                ->get();

            $estagiarios = DB::table('estagiario')->get();

            $empresas = DB::table('empresa')
                ->get();

            $periodos = DB::table("cobranca")->select(DB::raw('count(*) as periodo, referencia'))
                ->where('referencia', '<>', 1)
                ->groupBy('referencia')
                ->get();

            $contratos = DB::table("cobranca")
                ->join('empresa', 'empresa.id', '=', 'cobranca.empresa_id')->where('empresa.id', '=', $unidades)
                ->where('referencia', '=', $referencia)
                ->get();
            $qRescisao = DB::table('tce_rescisao')->join('empresa', 'empresa.id', '=', 'tce_rescisao.empresa_id')
                ->select(DB::raw('count(*) AS qtd, empresa.id'))
                ->groupBy('empresa.id')
                ->get();

            $qAtivos = DB::table('tce_contrato')->join('empresa', 'empresa.id', '=', 'tce_contrato.empresa_id')
                ->select(DB::raw('count(*) AS qtd, empresa.id', 'ativo'))
                ->groupBy('empresa.id')
                ->where('tce_contrato.ativo', 1)
                ->get();

            // dd($unidades);
            return view('financeiro.index', [
                // 'unidade' => $unidade,
                'unidades' => $unidades,
                'estagiarios' => $estagiarios,
                'empresas' => $empresas,
                'periodos' => $periodos,
                'contratos' => $contratos,
                'qRescisao' => $qRescisao,
                'qAtivos' => $qAtivos,
            ]);

        } else {
            $empresas = DB::table('empresa')->get();
            $data = date("Y/m");
            $contratos = DB::table("cobranca")->where('referencia', '=', $data)->get();

            foreach ($empresas as $empresa) {
                if (!DB::table('cobranca')->where([['empresa_id', '=', $empresa->id], ['referencia', '=', date("Y/m")]])->get()->first()) {
                    $contrato_da_empresa = DB::table('cau')->where('empresa_id', $empresa->id)->get()->first();
                    if ($contrato_da_empresa) {
                        $custo = Empresa::where('id', $empresa->id)->pluck('custo_unitario');
                        $contagem = DB::table('tce_contrato')->where('empresa_id', $empresa->id)->where('ativo', 1)->count();
                        $soma_custo = $custo[0] * $contagem;
                        DB::insert('insert into cobranca (referencia, dia_pg_estagio, dia_fechamento, total_custo, data_boleto, empresa_id, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?)', [date("Y/m"), $empresa->data_estagiario, $empresa->data_fechamento, $soma_custo, $empresa->data_boleto, $contrato_da_empresa->empresa_id, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")]);
                    }
                }
            }

            $periodos = DB::table("cobranca")->select(DB::raw('count(*) as periodo, referencia'))
                ->where('referencia', '<>', 1)
                ->groupBy('referencia')
                ->get();

            $qAtivos = DB::table('tce_contrato')->join('empresa', 'empresa.id', '=', 'tce_contrato.empresa_id')
                ->select(DB::raw('count(*) AS qtd, empresa.id', 'ativo'))
                ->groupBy('empresa.id')
                ->where('tce_contrato.ativo', 1)
                ->get();

            $qRescisao = DB::table('tce_rescisao')->join('empresa', 'empresa.id', '=', 'tce_rescisao.empresa_id')
                ->select(DB::raw('count(*) AS qtd, empresa.id'))
                ->groupBy('empresa.id')
                ->get();
            // dd($qAtivos);
            return view('financeiro.index', [
                'empresas' => $empresas,
                'contratos' => $contratos,
                'periodos' => $periodos,
                'qAtivos' => $qAtivos,
                'qRescisao' => $qRescisao,
            ]);
        }
    }

    public function infos($id)
    {

        $data = date("Y/m");
        $contratos = DB::table('empresa')
            ->join('cobranca', 'empresa.id', '=', 'cobranca.empresa_id')
            ->join('cau', 'empresa.id', '=', 'cau.empresa_id')
            ->where('cobranca.id', '=', $id)->where('referencia', '=', $data)->get();

        return view('financeiro.infos', ['contratos' => $contratos]);
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
