<?php

namespace App\Http\Controllers;

use DB;
use App\Estagiario;
use App\Instituicao;
use App\Empresa;
use Illuminate\Http\Request;
use App\Curso;
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
            ->join('cidade', 'estagiario.city', '=', 'cidade.id')
            ->select(
                'estagiario.nome',
                'empresa.nome_fantasia',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.data_nascimento',
                'estagiario.id',
                'estagiario.status',
                'cidade.nome AS nome_cidade'
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
                ->select('estagiario.nome',
                'estagiario.rua',
                'estagiario.numero',
                'estagiario.bairro',
                'estagiario.city',
                'estagiario.state',
                'estagiario.cep',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.rg',
                'estagiario.email',
                'instituicao.razao_social AS instituicao_razao',
                'instituicao.cnpj AS instituicao_cnpj',
                'instituicao.numero AS instituicao_numero',
                'instituicao.bairro AS instituicao_bairro',
                'instituicao.city AS instituicao_cidade',
                'instituicao.state AS instituicao_estado',
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
                'empresa.city AS empresa_cidade',
                'empresa.state AS empresa_estado',
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

        // return \PDF::loadView('alunoRelatorio', compact('alunos'))
        //     ->setPaper('A4', 'portrait')
        //     ->stream('relatorio_alunos.pdf');
        // // ->download('relatorio_alunos.pdf');

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
        // dd($cursos);
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

        //  Estagiario::create($request->all());
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
        $estagiarios->city = $request->get('city');
        $estagiarios->state = $request->get('state');
        $estagiarios->escolaridade = $request->get('escolaridade');
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
        $estagiarios->codigo = $request->get('codigo');
        $estagiarios->senha = $request->get('senha');
        $estagiarios->obs = $request->get('obs');
        $estagiarios->matricula = $request->get('matricula');
        $estagiarios->empresa_id = $request->get('empresa_id');
        $estagiarios->instituicao_id = $request->get('instituicao_id');
        $estagiarios->curso_id = $request->get('curso_id');
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
    public function edit(Estagiario $estagiario)
    {
        return view('estagiario.edit', compact('estagiario', $estagiario));
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
        $request->session()->flash('message', 'Sucesso!');
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
