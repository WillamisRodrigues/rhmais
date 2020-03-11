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
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class TceContratoController extends Controller
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
        $tces = DB::table('tce_contrato')
            ->join('estagiario', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            ->join('empresa', 'empresa.id', '=', 'tce_contrato.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'tce_contrato.instituicao_id')
            ->select(
                'estagiario.nome',
                'estagiario.id',
                'estagiario.ativo',
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
        $orienta = Orientador::all();
        $super = Supervisor::all();

        return view('tce_contrato.create', compact('empresas', 'instituicoes', 'estagiarios', 'beneficios', 'seguros', 'setores', 'atividades', 'orienta', 'super'));
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
            'estagiario_id' => 'required|unique:tce_contrato',
            'empresa_id' => 'required',
            'instituicao_id' => 'required',
        ]);

        $date_doc = $request->get('data_doc');
        $date_inicio = $request->get('data_inicio');
        $date_fim = $request->get('data_fim');

        $contrato = new TceContrato();
        $contrato->agente_integracao = $request->get('agente_integracao');
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
        // dd($contrato);
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
        $orientador = Orientador::all();
        $supervisor = Supervisor::all();
        $atividades = Atividade::all();

        $tceContrato = DB::table('tce_contrato')
            ->join('estagiario', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            ->join('empresa', 'empresa.id', '=', 'tce_contrato.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'tce_contrato.instituicao_id')
            ->select(
                'estagiario.nome',
                'estagiario.id',
                'estagiario.curso',
                'empresa.nome_fantasia',
                'empresa.id AS empresa_id',
                'instituicao.nome_instituicao',
                'instituicao.id As instituicao_id',
                'tce_contrato.bolsa',
                'tce_contrato.data_inicio',
                'tce_contrato.data_fim',
                'tce_contrato.contrato',
                'tce_contrato.assinado',
                'tce_contrato.data_doc',
                'tce_contrato.horario_id',
                'tce_contrato.apolice_id',
                'tce_contrato.obrigatorio',
                'tce_contrato.supervisor_id',
                'tce_contrato.orientador_id',
                'tce_contrato.atividade_id',
                'tce_contrato.id As tceId'
            )
            ->where('tce_contrato.id', '=', $id)
            ->get();

        return view('tce_contrato.show', compact('tceContrato', 'orientador', 'supervisor', 'atividades', $tceContrato));
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
        // ->select(
        //     'estagiario.nome',
        //     'estagiario.id',
        //     'empresa.nome_fantasia',
        //     'instituicao.nome_instituicao',
        //     'tce_contrato.bolsa',
        //     'tce_contrato.estagiario_id',
        //     'tce_contrato.instituicao_id',
        //     'tce_contrato.empresa_id',
        //     'tce_contrato.data_inicio',
        //     'tce_contrato.data_fim',
        //     'tce_contrato.contrato',
        //     'tce_contrato.assinado',
        //     'tce_contrato.horario_id',
        //     'tce_contrato.apolice_id',
        //     'tce_contrato.beneficio_id',
        //     'tce_contrato.data_doc',
        //     'tce_contrato.setor_id',
        //     'tce_contrato.obrigatorio',
        //     'tce_contrato.supervisor_id',
        //     'tce_contrato.id As tceId'
        // )
            ->where('tce_contrato.id', '=', $id)
            ->get();

        $motivos = Motivo::all();
        $supervisor = Supervisor::all();
        $horarios = Horario::all();
        $apolices = Seguradora::all();
        $beneficios = Beneficio::all();
        $setores = Setor::all();

        return view('tce_contrato.edit', compact('tceContrato', 'motivos', 'supervisor', 'horarios', 'apolices', 'beneficios', 'setores', $tceContrato));
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
            ->select("nome_fantasia", "nome_instituicao", "empresa_id", "instituicao_id")
            ->get();
        return json_encode($contrato);
    }

    public function horarios()
    {

        $empresas = Empresa::all();
        return view('home.teste', compact('empresas', $empresas));

    }
    public function horarioAjax($id)
    {
        $horarios = DB::table('horario')
            ->join('empresa', 'empresa.id', '=', 'horario.empresa_id')
            ->where("empresa.id", $id)
            ->select("descricao", "horario.id")
            ->get();
        return json_encode($horarios);

    }
    public function atividadeAjax($id)
    {
        $atividades = DB::table('atividade')
            ->join('empresa', 'empresa.id', '=', 'atividade.empresa_id')
            ->where("empresa.id", $id)
            ->select("nome", "atividade.id")
            ->get();
        return json_encode($atividades);

    }
}
