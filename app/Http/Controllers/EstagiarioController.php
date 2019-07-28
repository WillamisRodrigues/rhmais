<?php

namespace App\Http\Controllers;
use DB;
use App\Estagiario;
use App\Instituicao;
use App\Empresa;
use Illuminate\Http\Request;
use App\Curso;
use App\Adicional;

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
        // $estagiarios = Estagiario::all();
       $estagiarios = DB::table('estagiario')
       ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
        ->join('cidade', 'estagiario.city', '=', 'cidade.id')
       ->select('estagiario.nome','empresa.nome_fantasia','estagiario.celular',
       'estagiario.cpf','estagiario.data_nascimento','estagiario.id','estagiario.status','cidade.nome AS nome_cidade')
       ->get();

        return view('estagiario.index', compact('estagiarios', $estagiarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = DB::table("estado")->pluck("nome","id");
        $cursos  = Curso::all();
        $instituicoes = Instituicao::all();
        // dd($cursos);
        $empresas = Empresa::all();
       return view('estagiario.create', compact('states','empresas', 'cursos','instituicoes'));
    }

        public function myform()
    {
        $states = DB::table("estado")->pluck("nome","id");
        return view('myform',compact('states'));

    }
    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */

    public function myformAjax($id)
    {
        $cities = DB::table("cidade")
                    ->where("estado_id",$id)
                    ->pluck("nome","id");
        return json_encode($cities);
    }

     public function endereco($id)
    {
        $enderecos = DB::table("endereco")
                    ->where("estagiario_id",$id)
                    ->pluck("cidade","id");
        return json_encode($enderecos);
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
        $estagiarios->endereco = $request->get('endereco');
        $estagiarios->bairro = $request->get('bairro');
        $estagiarios->cep = $request->get('cep');
        $estagiarios->numero = $request->get('numero');
        $estagiarios->city = $request->get('city');
        $estagiarios->state = $request->get('state');
        $estagiarios->escolaridade = $request->get('escolaridade');
        $estagiarios->complemento = $request->get('complemento');
        $estagiarios->nacionalidade = $request->get('nacionalidade');
        $estagiarios->pai = $request->get('pai');
        $estagiarios->mae = $request->get('mae');
        $estagiarios->save();
        $estagiario_id = $estagiarios->id;

        $contas = new Adicional();
        $contas->banco = $request->get('banco');
        $contas->conta = $request->get('conta');
        $contas->codigo = $request->get('codigo');
        $contas->senha = $request->get('senha');
        $contas->obs = $request->get('obs');
        $contas->estagiario_id = $estagiario_id;
        $contas->save();

        return redirect()->route('estagiario.index')
                        ->with('success','Cadastrado com sucesso.');
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
    public function edit (Estagiario $estagiario)
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