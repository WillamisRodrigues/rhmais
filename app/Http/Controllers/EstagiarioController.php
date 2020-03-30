<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Empresa;
use App\Estado;
use App\Estagiario;
use App\Instituicao;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use PDF;

class EstagiarioController extends Controller
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

        $estagiarios = DB::table('estagiario')
            ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
            ->select(
                'estagiario.nome',
                'empresa.nome_fantasia',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.data_nascimento',
                'estagiario.cidade',
                'estagiario.estado',
                'estagiario.curso',
                'estagiario.id',
                'estagiario.ativo',
                'estagiario.termino_curso'
            )
            ->get();

        return view('estagiario.index', compact('estagiarios'));
    }

    public function contratoTce(Estagiario $estagiarios, $id)
    {
        // Todos os Estagiarios
        if ($id == 0) {
            $estagiarios = Estagiario::all();
        }
        // Um Estagiario Específico
        else {

            $estagiarios = DB::table('estagiario')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->select(
                    'estagiario.nome',
                    'estagiario.rua',
                    'estagiario.numero',
                    'estagiario.bairro',
                    'estagiario.cidade',
                    'estagiario.estado',
                    'estagiario.cep',
                    'estagiario.celular',
                    'estagiario.cpf',
                    'estagiario.rg',
                    'estagiario.email',
                    'estagiario.curso',
                    'estagiario.periodo'
                )
                ->where('estagiario.id', '=', $id)
                ->get();

            $empresas = DB::table('empresa')
                ->join('tce_contrato', 'empresa.id', '=', 'tce_contrato.empresa_id')
                ->select(
                    'empresa.razao_social',
                    'empresa.cnpj',
                    'empresa.numero',
                    'empresa.bairro',
                    'empresa.cidade',
                    'empresa.estado',
                    'empresa.cep',
                    'empresa.nome_rep',
                    'empresa.cargo_rep',
                    'empresa.telefone',
                    'empresa.rua'
                )
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $instituicoes = DB::table('instituicao')
                ->join('tce_contrato', 'instituicao.id', '=', 'tce_contrato.instituicao_id')
                ->select(
                    'instituicao.razao_social',
                    'instituicao.cnpj',
                    'instituicao.numero',
                    'instituicao.bairro',
                    'instituicao.cidade',
                    'instituicao.estado',
                    'instituicao.cep',
                    'instituicao.nome_rep',
                    'instituicao.cargo_rep',
                    'instituicao.telefone',
                    'instituicao.rua'
                )
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $horarios = DB::table('horario')
                ->join('tce_contrato', 'horario.id', '=', 'tce_contrato.horario_id')
                ->select('horario.descricao')
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $atividades = DB::table('atividade')
                ->join('tce_contrato', 'atividade.id', '=', 'tce_contrato.atividade_id')
                ->select('atividade.nome')
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $seguros = DB::table('seguradora')
                ->join('tce_contrato', 'seguradora.id', '=', 'tce_contrato.apolice_id')
                ->select('seguradora.nome')
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $supervisores = DB::table('supervisor')
                ->join('tce_contrato', 'supervisor.id', '=', 'tce_contrato.supervisor_id')
                ->select('supervisor.nome', 'supervisor.cargo', 'supervisor.formacao')
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $orientadores = DB::table('orientador')
                ->join('tce_contrato', 'orientador.id', '=', 'tce_contrato.orientador_id')
                ->select('orientador.nome')
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $beneficios = DB::table('beneficio')
                ->join('tce_contrato', 'beneficio.id', '=', 'tce_contrato.beneficio_id')
                ->select('beneficio.nome')
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

            $tceContrato = DB::table('tce_contrato')
                ->select(
                    'tce_contrato.data_inicio',
                    'tce_contrato.data_fim',
                    'tce_contrato.bolsa',
                    'tce_contrato.obrigatorio',
                    'tce_contrato.data_doc',
                    'tce_contrato.created_at')
                ->where('tce_contrato.estagiario_id', '=', $id)
                ->get();

        }
        // dd($instituicoes);
        DB::update('update tce_contrato set assinado = 1 where estagiario_id = ?', [$id]);

        $data = ['estagiarios' => $estagiarios, 'instituicoes' => $instituicoes,
            'empresas' => $empresas, 'horarios' => $horarios, 'atividades' => $atividades,
            'seguros' => $seguros, 'supervisores' => $supervisores, 'orientadores' => $orientadores,
            'tceContrato' => $tceContrato, 'beneficios' => $beneficios];
        $pdf = PDF::loadView('pdf.tce.index', $data);
        return $pdf->stream('tce-pdf.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = DB::table("estado")->pluck("nome", "id");
        $cursos = Curso::all();
        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();
        return view('estagiario.create', compact('states', 'empresas', 'cursos', 'instituicoes'));
    }

    public function myform()
    {
        $states = DB::table("estado")->pluck("nome", "id");
        return view('myform', compact('states'));
    }
    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */

    public function myformAjax($id)
    {
        $cities = DB::table("cidade")
            ->where("estado_id", $id)
            ->pluck("nome", "id");
        return json_encode($cities);
    }

    public function endereco($id)
    {
        $estagiarios = DB::table("endereco")
            ->where("estagiario_id", $id)
            ->pluck("cidade", "id");
        return json_encode($estagiarios);
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
            'nome' => 'required',
            'email' => 'required|email|unique:estagiario,email',
        ]);
        $date_nascimento = $request->get('data_nascimento');
        $date_termino_curso = $request->get('termino_curso');

        $estagiarios = new Estagiario();
        $estagiarios->nome = $request->get('nome');
        $estagiarios->email = $request->get('email');
        $estagiarios->rg = $request->get('rg');
        $estagiarios->cpf = $request->get('cpf');
        $estagiarios->telefone = $request->get('telefone');
        $estagiarios->celular = $request->get('celular');
        $estagiarios->data_nascimento = Carbon::createFromFormat('d/m/Y', $date_nascimento)->format('Y-m-d');
        $estagiarios->ctps = $request->get('ctps');
        $estagiarios->serie_ctps = $request->get('serie_ctps');
        $estagiarios->numero_pis = $request->get('numero_pis');
        $estagiarios->dt_cadastro = $request->get('dt_cadastro');
        $estagiarios->agente_int = $request->get('agente_int');
        $estagiarios->pessoa_responsavel = $request->get('pessoa_responsavel');
        $estagiarios->sexo = $request->get('sexo');
        $estagiarios->cidade = $request->get('cidade');
        $estagiarios->estado = $request->get('estado');
        $estagiarios->curso = $request->get('curso');
        $estagiarios->nacionalidade = $request->get('nacionalidade');
        $estagiarios->pai = $request->get('pai');
        $estagiarios->mae = $request->get('mae');
        $estagiarios->cep = $request->get('cep');
        $estagiarios->rua = $request->get('rua');
        $estagiarios->bairro = $request->get('bairro');
        $estagiarios->cep = $request->get('cep');
        $estagiarios->numero = $request->get('numero');
        $estagiarios->complemento = $request->get('complemento');
        $estagiarios->banco = $request->get('banco');
        $estagiarios->conta = $request->get('conta');
        $estagiarios->codigo_vaga = $request->get('codigo_vaga');
        $estagiarios->senha = $request->get('senha');
        $estagiarios->periodo = $request->get('periodo');
        $estagiarios->obs = $request->get('obs');
        $estagiarios->matricula = $request->get('matricula');
        $estagiarios->empresa_id = $request->get('empresa_id');
        $estagiarios->instituicao_id = $request->get('instituicao_id');
        $estagiarios->curso = $request->get('curso');
        $estagiarios->dt_cadastro = date("Y-m-d");
        $estagiarios->termino_curso = Carbon::createFromFormat('d/m/Y', $date_termino_curso)->format('Y-m-d');
        if ($request->ativo == 'on') {
            $estagiarios->ativo = 1;
        }
        // dd($estagiarios);
        $estagiarios->save();

        return redirect()->route('estagiario.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // return view('estagiario.show', compact('estagiario', $estagiario));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $estagiario = DB::table('estagiario')->where('id', $id)->get()->first();

        $estados = DB::table("estado")->pluck("nome", "id");
        $cursos = Curso::all();
        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();

        return view('estagiario.edit', [
            'estagiario' => $estagiario,
            'empresas' => $empresas,
            'instituicoes' => $instituicoes,
            'cursos' => $cursos,
            'estados' => $estados,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nome' => 'required',
            'email' => 'required',
        ]);

        $date_nascimento = $request->get('data_nascimento');
        $date_termino_curso = $request->get('termino_curso');

        $estagiarios = Estagiario::find($id);
        $estagiarios->nome = $request->get('nome');
        $estagiarios->email = $request->get('email');
        $estagiarios->rg = $request->get('rg');
        $estagiarios->cpf = $request->get('cpf');
        $estagiarios->telefone = $request->get('telefone');
        $estagiarios->celular = $request->get('celular');
        $estagiarios->data_nascimento = Carbon::createFromFormat('d/m/Y', $date_nascimento)->format('Y-m-d');
        $estagiarios->ctps = $request->get('ctps');
        $estagiarios->serie_ctps = $request->get('serie_ctps');
        $estagiarios->numero_pis = $request->get('numero_pis');
        $estagiarios->dt_cadastro = $request->get('dt_cadastro');
        $estagiarios->agente_int = $request->get('agente_int');
        $estagiarios->pessoa_responsavel = $request->get('pessoa_responsavel');
        $estagiarios->sexo = $request->get('sexo');
        $estagiarios->cidade = $request->get('cidade');
        $estagiarios->estado = $request->get('estado');
        $estagiarios->curso = $request->get('curso');
        $estagiarios->nacionalidade = $request->get('nacionalidade');
        $estagiarios->pai = $request->get('pai');
        $estagiarios->mae = $request->get('mae');
        $estagiarios->cep = $request->get('cep');
        $estagiarios->rua = $request->get('rua');
        $estagiarios->bairro = $request->get('bairro');
        $estagiarios->cep = $request->get('cep');
        $estagiarios->numero = $request->get('numero');
        $estagiarios->complemento = $request->get('complemento');
        $estagiarios->banco = $request->get('banco');
        $estagiarios->conta = $request->get('conta');
        $estagiarios->codigo_vaga = $request->get('codigo_vaga');
        $estagiarios->senha = $request->get('senha');
        $estagiarios->periodo = $request->get('periodo');
        $estagiarios->obs = $request->get('obs');
        $estagiarios->matricula = $request->get('matricula');
        $estagiarios->empresa_id = $request->get('empresa_id');
        $estagiarios->instituicao_id = $request->get('instituicao_id');
        $estagiarios->curso = $request->get('curso');
        $estagiarios->dt_cadastro = date("Y-m-d");
        $estagiarios->termino_curso = Carbon::createFromFormat('d/m/Y', $date_termino_curso)->format('Y-m-d');
        if ($request->ativo == 'on') {
            $estagiarios->ativo = 1;
        }
        $estagiarios->save();

        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('estagiario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $estagiario = Estagiario::find($id);
        $estagiario->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('estagiario');
    }
}
