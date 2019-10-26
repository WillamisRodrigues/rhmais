<?php

namespace App\Http\Controllers;

use App\TceContrato;
use App\Empresa;
use App\Instituicao;
use App\Estagiario;
use Illuminate\Http\Request;
use App\Beneficio;
use App\Seguradora;
use App\Setor;
use App\Horario;
use App\Atividade;
use App\Motivo;
use App\Orientador;
use App\Supervisor;
use DB;

class TceContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tces = Estagiario::with('empresas')->with('instituicoes')->with('tce_contrato')->get();
        $tces = DB::table('tce_contrato')
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
                'tce_contrato.id As tceId'
            )
            ->get();
        return view('tce_contrato.index',  compact('tces', $tces));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        $estagiarios = Estagiario::all();
        $instituicoes = Instituicao::all();
        $beneficios = Beneficio::all();
        $seguros = Seguradora::all();
        $setores = Setor::all();
        $horarios = Horario::all();
        $atividades = Atividade::all();
        $orienta = Orientador::all();
        $super = Supervisor::all();

        return view('tce_contrato.create', compact('empresas', 'instituicoes', 'estagiarios', 'beneficios', 'seguros', 'setores', 'horarios', 'atividades', 'orienta', 'super'));
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
        $contrato = new TceContrato();
        $contrato->agente_integracao = $request->get('agente_integracao');
        $contrato->estagiario_id = $request->get('estagiario_id');
        $contrato->empresa_id = $request->get('empresa_id');
        $contrato->instituicao_id = $request->get('instituicao_id');
        $contrato->data_doc = $request->get('data_doc');
        $contrato->data_inicio = $request->get('data_inicio');
        $contrato->data_fim = $request->get('data_fim');
        $contrato->beneficio = $request->get('beneficio');
        $contrato->apolice = $request->get('apolice');
        $contrato->horario = $request->get('descricao');
        $contrato->setor = $request->get('setor');
        $contrato->atividade = $request->get('atividade');
        $contrato->orientador = $request->get('orientador');
        $contrato->supervisor = $request->get('supervisor');
        $contrato->bolsa = $request->get('bolsa');
        $contrato->obrigatorio = $request->get('obrigatorio');
        $contrato->obs = $request->get('observacao');
        $contrato->save();


        return redirect()->route('tce_contrato.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tceContrato = DB::table('tce_contrato')
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
                'tce_contrato.data_doc',
                'tce_contrato.horario',
                'tce_contrato.apolice',
                'tce_contrato.obrigatorio',
                'tce_contrato.supervisor',
                'tce_contrato.id As tceId'
            )
            ->where('tce_contrato.id', '=', $id)
            ->get();

        return view('tce_contrato.show', compact('tceContrato', $tceContrato));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $tceContrato = Estagiario::with('empresas')->with('instituicoes')->where('id', '=', $id)->get();

        $tceContrato = DB::table('tce_contrato')
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
                'tce_contrato.horario',
                'tce_contrato.apolice',
                'tce_contrato.obrigatorio',
                'tce_contrato.supervisor',
                'tce_contrato.id As tceId'
            )
            ->where('tce_contrato.id', '=', $id)
            ->get();

            $motivos = Motivo::all();
        // dd($tceContrato);
        return view('tce_contrato.edit', compact('tceContrato', 'motivos', $tceContrato));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TceContrato $tceContrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(TceContrato $tceContrato)
    {
        //
    }
}
