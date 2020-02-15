<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Beneficio;
use App\Empresa;
use App\Estagiario;
use App\Horario;
use App\Instituicao;
use App\Motivo;
use App\Orientador;
use App\Seguradora;
use App\Setor;
use App\Supervisor;
use App\TceContrato;
use DB;
use Illuminate\Http\Request;

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
        // dd($tces);
        return view('tce_contrato.index', compact('tces', $tces));
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
        $contrato->orientador_id = $request->get('orientador_id');
        $contrato->supervisor_id = $request->get('supervisor_id');
        $contrato->bolsa = str_replace(',', '.', $request->get('bolsa'));
        $contrato->obrigatorio = $request->get('obrigatorio');
        $contrato->obs = $request->get('observacao');
        $contrato->curso = $request->get('curso');
        $contrato->save();
// dd($contrato);

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
        $orientador = Orientador::all();
        $supervisor = Supervisor::all();

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
                'tce_contrato.curso',
                'tce_contrato.data_inicio',
                'tce_contrato.data_fim',
                'tce_contrato.contrato',
                'tce_contrato.assinado',
                'tce_contrato.data_doc',
                'tce_contrato.horario',
                'tce_contrato.apolice',
                'tce_contrato.obrigatorio',
                'tce_contrato.supervisor_id',
                'tce_contrato.orientador_id',
                'tce_contrato.id As tceId'
            )
            ->where('tce_contrato.id', '=', $id)
            ->get();

        return view('tce_contrato.show', compact('tceContrato', 'orientador', 'supervisor', $tceContrato));
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
                'tce_contrato.estagiario_id',
                'tce_contrato.instituicao_id',
                'tce_contrato.empresa_id',
                'tce_contrato.data_inicio',
                'tce_contrato.data_fim',
                'tce_contrato.contrato',
                'tce_contrato.assinado',
                'tce_contrato.horario',
                'tce_contrato.apolice',
                'tce_contrato.obrigatorio',
                'tce_contrato.supervisor_id',
                'tce_contrato.id As tceId'
            )
            ->where('tce_contrato.id', '=', $id)
            ->get();

        $motivos = Motivo::all();
        $supervisor = Supervisor::all();

        return view('tce_contrato.edit', compact('tceContrato', 'motivos', 'supervisor', $tceContrato));
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
    public function tceAjax($id)
    {
        $contrato = DB::table('estagiario')
            ->join('empresa', 'empresa.id', '=', 'estagiario.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'estagiario.instituicao_id')
            ->where("estagiario.id", $id)
        // ->pluck("nome_fantasia", "nome_instituicao", "empresa_id");
            ->select("nome_fantasia", "nome_instituicao", "empresa_id", "instituicao_id")
            ->get();
        return json_encode($contrato);
    }

    // public function myform()
    // {
    //     $estagiarios = DB::table("estagiario")->pluck("id");
    //     return view('tce_contrato.create', compact('estagiarios'));
    // }
}
