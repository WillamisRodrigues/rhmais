<?php

namespace App\Http\Controllers;

use App\PlanoEstagio;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class PlanoEstagioController extends Controller
{
    public function __contruct()
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
        $planos = DB::table('tce_contrato')
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
                'tce_contrato.plano_estagio',
                'tce_contrato.aditivo',
                'tce_contrato.id As tceId'
            )
            ->get();
        return view('plano_estagio.index', compact('planos', $planos));
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
        $request->validate([
            'estagiario_id' => 'required|unique:plano_estagio',
            'empresa_id' => 'required',
            'instituicao_id' => 'required',
        ]);

        $date_doc = $request->get('data_doc');
        $date_inicio = $request->get('data_inicio');
        $date_fim = $request->get('data_fim');

        $plano = new PlanoEstagio();
        $plano->estagiario_id = $request->get('estagiario_id');
        $plano->empresa_id = $request->get('empresa_id');
        $plano->data_inicio = Carbon::createFromFormat('d/m/Y', $date_inicio)->format('Y-m-d');
        $plano->data_fim = Carbon::createFromFormat('d/m/Y', $date_fim)->format('Y-m-d');
        $plano->data_doc = Carbon::createFromFormat('d/m/Y', $date_doc)->format('Y-m-d');
        $plano->supervisor_id = $request->get('supervisor_id');
        $plano->orientador_id = $request->get('orientador_id');
        $plano->instituicao_id = $request->get('instituicao_id');
        $plano->curso = $request->get('curso');
        $plano->atividade = $request->get('atividade');
        $plano->obs = $request->get('obs');
        $plano->save();

        DB::update('update tce_contrato set plano_estagio = ?  where estagiario_id = ?', [1, $request->get('estagiario_id')]);

        return redirect()->route('plano_estagio.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function show(PlanoEstagio $planoEstagio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanoEstagio $id)
    {
        $planoEstagio = DB::table('plano_estagio')
            ->where('plano_estagio.id', '=', $id)
            ->get();
        return view('plano_estagio.edit', compact('planoEstagio', $planoEstagio));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanoEstagio $planoEstagio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanoEstagio  $planoEstagio
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanoEstagio $planoEstagio)
    {
        //
    }
}
