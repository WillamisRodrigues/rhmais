<?php

namespace App\Http\Controllers;

use App\TceRescisao;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class TceRescisaoController extends Controller
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
        $rescisao = DB::table('tce_rescisao')
            ->join('estagiario', 'estagiario.id', '=', 'tce_rescisao.estagiario_id')
            ->join('empresa', 'empresa.id', '=', 'tce_rescisao.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'tce_rescisao.instituicao_id')
            ->select(
                'estagiario.nome',
                'empresa.nome_fantasia',
                'instituicao.nome_instituicao',
                'tce_rescisao.id',
                'tce_rescisao.bolsa',
                'tce_rescisao.data_inicio',
                'tce_rescisao.data_fim'
            )
            ->get();

        // dd($rescisao);
        return view('tce_rescisao.index', compact('rescisao', $rescisao));
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
            'estagiario_id' => 'required|unique:tce_rescisao',
            'empresa_id' => 'required',
            'instituicao_id' => 'required',
        ]);

        $date_inicio = $request->get('data_inicio');
        $date_fim = $request->get('data_fim');
        $date_contrato = $request->get('data_contrato');
        $ultimo_dia = $request->get('ultimo_dia');
        $data_documento = $request->get('data_documento');

        $tce = new TceRescisao();
        $tce->estagiario_id = $request->get('estagiario_id');
        $tce->empresa_id = $request->get('empresa_id');
        $tce->instituicao_id = $request->get('instituicao_id');
        $tce->data_inicio = Carbon::createFromFormat('d/m/Y', $date_inicio)->format('Y-m-d');
        $tce->data_fim = Carbon::createFromFormat('d/m/Y', $date_fim)->format('Y-m-d');
        $tce->data_contrato = Carbon::createFromFormat('d/m/Y', $date_contrato)->format('Y-m-d');
        $tce->ultimo_dia = Carbon::createFromFormat('d/m/Y', $ultimo_dia)->format('Y-m-d');
        $tce->data_documento = Carbon::createFromFormat('d/m/Y', $data_documento)->format('Y-m-d');
        $tce->horario_id = $request->get('horario_id');
        $tce->apolice_id = $request->get('apolice_id');
        $tce->beneficio_id = $request->get('beneficio_id');
        $tce->setor_id = $request->get('setor_id');
        $tce->supervisor_id = $request->get('supervisor_id');
        $tce->bolsa = $request->get('bolsa');
        $tce->motivo_id = $request->get('motivo_id');
        $tce->obs = $request->get('obs');
        $tce->ativo = 1;

        if ($tce->ativo = 1) {
            DB::update('update tce_contrato set ativo = 2 where estagiario_id = ?', [$request->get('estagiario_id')]);
            DB::update('update recesso set ativo = 2 where estagiario_id = ?', [$request->get('estagiario_id')]);
            DB::update('update plano_estagio set ativo = 2 where estagiario_id = ?', [$request->get('estagiario_id')]);
            DB::update('update estagiario set ativo = 2 where id = ?', [$request->get('estagiario_id')]);
        }
        // dd($tce);
        $tce->save();

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
