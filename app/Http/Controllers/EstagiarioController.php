<?php

namespace App\Http\Controllers;

use DB;
use App\Estagiario;
use App\Instituicao;
use App\Empresa;
use Illuminate\Http\Request;
use App\Curso;
use App\Estado;
use App\Horario;
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
                'estagiario.id',
                'estagiario.status',
                'estagiario.nivel',
                'estagiario.curso',
                'estagiario.termino_curso'
            )
            ->get();

        // dd($estagiarios);
        return view('estagiario.index', compact('estagiarios'));
    }

    public function gerarRelatorio(Estagiario $estagiarios, $id)
    {
        // Todos os Estagiarios
        if ($id == 0) {
            $estagiarios = Estagiario::all();
        }
        // Um Estagiario Específico
        else {
            // $estagiarios = Estagiario::where('id', '=', $id)->get();
            $estagiarios = DB::table('estagiario')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('instituicao', 'estagiario.instituicao_id', '=', 'instituicao.id')
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
                    'instituicao.razao_social AS instituicao_razao',
                    'instituicao.cnpj AS instituicao_cnpj',
                    'instituicao.numero AS instituicao_numero',
                    'instituicao.bairro AS instituicao_bairro',
                    'instituicao.cidade AS instituicao_cidade',
                    'instituicao.estado AS instituicao_estado',
                    'instituicao.cep AS instituicao_cep',
                    'instituicao.nome_rep AS instituicao_nome_rep',
                    'instituicao.cargo_rep AS instituicao_cargo_rep',
                    'instituicao.orientador AS instituicao_orientador',
                    'instituicao.telefone AS instituicao_telefone',
                    'instituicao.rua AS instituicao_rua',
                    'empresa.razao_social AS empresa_razao',
                    'empresa.cnpj AS empresa_cnpj',
                    'empresa.numero AS empresa_numero',
                    'empresa.bairro AS empresa_bairro',
                    'empresa.cidade AS empresa_cidade',
                    'empresa.estado AS empresa_estado',
                    'empresa.cep AS empresa_cep',
                    'empresa.nome_rep AS empresa_nome_rep',
                    'empresa.cargo_rep AS empresa_cargo_rep',
                    'empresa.supervisor AS empresa_cargo_sup',
                    'empresa.orientador AS empresa_orientador',
                    'empresa.supervisor AS empresa_sup',
                    'empresa.telefone AS empresa_telefone',
                    'empresa.rua AS empresa_rua'
                )
                ->where('estagiario.id', '=', $id)
                ->get();
        }

        DB::update('update tce_contrato set assinado = "Sim" where estagiario_id = ?', [$id]);

        $data = ['estagiario' => $estagiarios];
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
        $cursos  = Curso::all();
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

        $estagiarios = new Estagiario();
        $estagiarios->nome = $request->get('nome');
        $estagiarios->email = $request->get('email');
        $estagiarios->rg = $request->get('rg');
        $estagiarios->cpf = $request->get('cpf');
        $estagiarios->telefone = $request->get('telefone');
        $estagiarios->celular = $request->get('celular');
        $estagiarios->data_nascimento = $request->get('data_nascimento');
        $estagiarios->ctps = $request->get('ctps');
        $estagiarios->serie_ctps = $request->get('serie_ctps');
        $estagiarios->numero_pis = $request->get('numero_pis');
        $estagiarios->dt_cadastro = $request->get('dt_cadastro');
        $estagiarios->agente_int = $request->get('agente_int');
        $estagiarios->pessoa_responsavel = $request->get('pessoa_responsavel');
        $estagiarios->sexo = $request->get('sexo');
        $estagiarios->cidade = $request->get('cidade');
        $estagiarios->estado = $request->get('estados');
        $estagiarios->nivel = $request->get('nivel');
        $estagiarios->curso = $request->get('nivel');
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
        $estagiarios->horario = $request->horario;
        $estagiarios->termino_curso = $request->termino_curso;
        if ($request->ativo == 'on') {
            $estagiarios->status = 1;
        }
        $estagiarios->save();
        // $estagiario_id = $estagiarios->id;

        // $contas = new Adicional();
        // $contas->banco = $request->get('banco');
        // $contas->conta = $request->get('conta');
        // $contas->codigo = $request->get('codigo');
        // $contas->senha = $request->get('senha');
        // $contas->obs = $request->get('obs');
        // $contas->estagiario_id = $estagiario_id;
        // $contas->save();

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
        // $empresas = DB::table('empresa')->where('id', '=', $estagiario->empresa_id)->get()->first();
        // $instituicoes = DB::table('instituicao')->where('id', '=', $estagiario->instituicao_id)->get()->first();
        // $instituicoes = Instituicao::all();
        // $estados = Estado::all();
        // $cursos = Curso::all();
        $horarios = Horario::all();

        $estados = DB::table("estado")->pluck("nome", "id");
        $cursos  = Curso::all();
        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();

        return view('estagiario.edit', [
            'estagiario' => $estagiario,
            'empresas' => $empresas,
            'instituicoes' => $instituicoes,
            'cursos' => $cursos,
            'horarios' => $horarios,
            'estados' => $estados
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estagiario $estagiario)
    {
        // dd($estagiario);
        $request->validate([

            'nome' => 'required',
            'email' => 'required',
        ]);

        $estagiario->update($request->all());
        $estagiario->save();
        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('estagiario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Estagiario $estagiario)
    {
        $estagiario->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('estagiario');
    }
}
