<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Beneficio;
use App\Empresa;
use App\Estagiario;
use App\Horario;
use App\Instituicao;
use App\Orientador;
use App\Seguradora;
use App\Setor;
use App\Supervisor;
use App\TceAditivo;
use App\TceContrato;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class TceAditivoController extends Controller
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
        $tcesad = DB::table('tce_contrato')
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
                'tce_contrato.id',
                'tce_contrato.aditivo'
            )
            ->get();
        return view('tce_aditivo.index', compact('tcesad', $tcesad));
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
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function show(TceAditivo $tceAditivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function edit(TceAditivo $tceAditivo)
    {
        $estagiarios = Estagiario::all();
        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();
        $beneficios = Beneficio::all();
        $supervisor = Supervisor::all();
        $orientador = Orientador::all();
        $setores = Setor::all();
        $atividades = Atividade::all();
        $horarios = Horario::all();
        $apolices = Seguradora::all();

        // dd($beneficios);
        return view('tce_aditivo.edit', compact([
            'tceAditivo',
            'estagiarios',
            'instituicoes',
            'empresas',
            'beneficios',
            'supervisor',
            'orientador',
            'setores',
            'atividades',
            'horarios',
            'apolices',
            $tceAditivo]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'estagiario_id' => 'required',
            'empresa_id' => 'required',
            'instituicao_id' => 'required',
        ]);

        $date_doc = $request->get('data_doc');
        $date_inicio = $request->get('data_inicio');
        $date_fim = $request->get('data_fim');

        $contrato = TceContrato::find($id);
        $contrato->estagiario_id = $request->get('estagiario_id');
        $contrato->empresa_id = $request->get('empresa_id');
        $contrato->instituicao_id = $request->get('instituicao_id');
        $contrato->data_doc = Carbon::createFromFormat('d/m/Y', $date_doc)->format('Y-m-d');
        $contrato->data_inicio = Carbon::createFromFormat('d/m/Y', $date_inicio)->format('Y-m-d');
        $contrato->data_fim = Carbon::createFromFormat('d/m/Y', $date_fim)->format('Y-m-d');
        $contrato->beneficio_id = $request->get('beneficio_id');
        $contrato->apolice_id = $request->get('apolice_id');
        $contrato->horario_id = $request->get('horario_id');
        $contrato->setor_id = $request->get('setor_id');
        $contrato->atividade_id = $request->get('atividade_id');
        $contrato->orientador_id = $request->get('orientador_id');
        $contrato->supervisor_id = $request->get('supervisor_id');
        $contrato->bolsa = $request->get('bolsa');
        $contrato->obrigatorio = $request->get('obrigatorio');
        $contrato->obs = $request->get('obs');
        $contrato->aditivo = 1;
        // $contrato->curso = $request->get('curso');
        // dd($contrato);
        $contrato->save();

        return redirect()->route('tce_aditivo.index')
            ->with('success', 'Cadastro realizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TceAditivo  $tceAditivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TceAditivo $tceAditivo)
    {
        //
    }
}
