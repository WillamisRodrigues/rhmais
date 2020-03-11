<?php

namespace App\Http\Controllers;

use App\AvaliacaoSuper;
use App\Empresa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvaliacaoSuperController extends Controller
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
        $empresas = Empresa::all();

        // $supervisores = DB::table('empresa')
        //     ->join('estagiario', 'empresa.id', '=', 'estagiario.empresa_id')
        //     ->join('supervisor', 'empresa.id', '=', 'supervisor.empresa_id')
        //     ->leftjoin('tce_contrato', 'empresa.id', '=', 'tce_contrato.empresa_id')
        //     ->select('supervisor.nome', 'empresa.nome_fantasia', 'estagiario.nome As estagiario', 'tce_contrato.data_inicio', 'tce_contrato.data_fim')
        //     ->get();

        // dd($supervisores);
        return view('avaliacao_supervisor.index', ['empresas' => $empresas]);
    }

    public function buscarAvaliacaoSupervisor(Request $request)
    {
        $idSupervisor = [];
        $i = 0;
        $supervisores = DB::table('estagiario')->where([['nome', 'like', '%' . $request->nome . '%']])->get();
        foreach ($supervisores as $supervisor) {
            $idSupervisor[$i] = $supervisor->id;
            $i++;
        }
        $avaliacoes = DB::table('avaliacao')->where([['supervisor_id', '=', $idSupervisor]])->get();
        $empresas = DB::table('empresa')->get();

        return view('lista_auto_avaliacao.index', [
            'avaliacoes' => $avaliacoes,
            'empresas' => $empresas,
        ]);
    }

    public function lista_avaliacao()
    {
        $avaliacoes = DB::table('avaliacao_super')->get();
        $empresas = DB::table('empresa')->get();
        $instituicoes = DB::table('instituicao')->get();
        $estagiarios = DB::table('estagiario')->get();
        $orientadores = DB::table('orientador')->get();
        return view('lista_avaliacao_supervisor.index', [
            'avaliacoes' => $avaliacoes,
            'empresas' => $empresas,
            'instituicoes' => $instituicoes,
            'estagiarios' => $estagiarios,
            'orientadores' => $orientadores,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estagiarios = DB::table('estagiario')
            ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
            ->select(
                'estagiario.nome',
                'empresa.nome_fantasia',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.data_nascimento',
                'estagiario.id',
                'estagiario.ativo',
                'estagiario.curso',
                'estagiario.cidade',
                'estagiario.estado'
            )
            ->get();
        $instituicoes = DB::table('instituicao')
            ->select(
                'instituicao.razao_social',
                'instituicao.nome_instituicao',
                'instituicao.cnpj',
                'instituicao.rua',
                'instituicao.id',
                'instituicao.cidade',
                'instituicao.estado'
            )
            ->get();
        $empresas = DB::table('empresa')
            ->select(
                'empresa.razao_social',
                'empresa.nome_fantasia',
                'empresa.cnpj',
                'empresa.insc_estadual',
                'empresa.telefone',
                'empresa.id',
                'empresa.cidade',
                'empresa.estado'
            )
            ->get();
        $supervisores = DB::table('supervisor')->get();

        return view('avaliacao_supervisor.create', [
            'estagiarios' => $estagiarios,
            'instituicoes' => $instituicoes,
            'empresas' => $empresas,
            'supervisores' => $supervisores,
        ]);
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
            'estagiario_id' => 'required',
            'empresa_id' => 'required',
        ]);

        $data_doc = $request->get('data_doc');

        $avaliacao = new AvaliacaoSuper();
        $avaliacao->estagiario_id = $request->get('estagiario_id');
        $avaliacao->empresa_id = $request->get('empresa_id');
        $avaliacao->instituicao_id = $request->get('instituicao_id');
        $avaliacao->supervisor = $request->get('supervisor');
        $avaliacao->periodo_avaliativo = $request->get('periodo_avaliativo');
        $avaliacao->data_doc = Carbon::createFromFormat('d/m/Y', $date_doc)->format('Y-m-d');
        $avaliacao->obs = $request->get('obs');
        $avaliacao->assiduidade = $request->get('assiduidade');
        $avaliacao->disciplina = $request->get('disciplina');
        $avaliacao->sociabilidade = $request->get('sociabilidade');
        $avaliacao->rendimento = $request->get('rendimento');
        $avaliacao->conhecimento = $request->get('conhecimento');
        $avaliacao->organizacao = $request->get('organizacao');
        $avaliacao->iniciativa = $request->get('iniciativa');
        $avaliacao->cooperacao = $request->get('cooperacao');
        $avaliacao->responsabilidade = $request->get('responsabilidade');

        $avaliacao->save();

        return redirect()->route('avaliacao_supervisor.index')
            ->with('success', 'Realizada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function show(AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function edit(AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function destroy(AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }

    public function avaliacaoAjax($id)
    {
        $avaliacao = DB::table('estagiario')
            ->join('empresa', 'empresa.id', '=', 'estagiario.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'estagiario.instituicao_id')
            ->where("estagiario.id", $id)
            ->select("nome_fantasia", "nome_instituicao", "empresa_id", "instituicao_id")
            ->get();
        return json_encode($avaliacao);
    }

    public function supervisorAjax($id)
    {
        $supervisor = DB::table('supervisor')
            ->join('empresa', 'empresa.id', '=', 'supervisor.empresa_id')
            ->where("empresa.id", $id)
            ->select("nome", "supervisor.id")
            ->get();
        return json_encode($supervisor);

    }
}
