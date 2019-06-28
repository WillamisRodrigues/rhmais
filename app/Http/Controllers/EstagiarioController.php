<?php

namespace App\Http\Controllers;
use App\Endereco;
use App\Estagiario;
use Illuminate\Http\Request;
 use Khill\Lavacharts\Laravel\LavachartsFacade;

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
        // $estagiarios = Estagiario::count();
        $estagiarios = Estagiario::all();
        return view('estagiario.index', compact('estagiarios', $estagiarios));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estagiario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Estagiario $estagiarios)
    {
         {
    $estagiarios = new estagiario();
    $insert = $estagiarios->create($request->all());
    $estagiarios->nome = $request->input("nome");
    $estagiarios->rg = $request->input("rg");
    $estagiarios->cpf = $request->input("cpf");
    $estagiarios->telefone = $request->input("telefone");
    $estagiarios->celular = $request->input("celular");
    $estagiarios->email = $request->input("email");
    $estagiarios->data_nascimento = $request->input("data_nascimento");
    $estagiarios->ctps = $request->input("ctps");
    $estagiarios->serie_ctps = $request->input("serie_ctps");
    $estagiarios->numero_pis = $request->input("numero_pis");
    $estagiarios->cor_raca = $request->input("cor_raca");
    $estagiarios->dt_cadastro = $request->input("dt_cadastro");
    $estagiarios->und_concedente = $request->input("und_concedente");
    $estagiarios->agente_int = $request->input("agente_int");
    $estagiarios->pessoa_responsavel = $request->input("pessoa_responsavel");
    $estagiarios->sexo = $request->input("sexo");
    $estagiarios->save();

    $location = new endereco();
    $location->estagiario_id = $estagiarios->id;
    $location->endereco = $request->input("endereco");
    $location->save();
 }

 if ($estagiarios)
         return redirect()
                     ->route('estagiario.index')
                    ->with('success', 'Categoria inserida com sucesso!');

    // // Redireciona de volta com uma mensagem de erro
     return redirect()
                 ->back()
                 ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function show(Estagiario $estagiario)
    {
        $lava = new Lavacharts;
        $estagiarios = $lava->DataTable();

        $estagiarios->addStringColum('sexo');
        $lava->BarChart('dado', $estagiarios);
        return view('estagiario.show', compact('estagiario', $estagiario, 'lava'));
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
        $request->validate([

            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
        ]);

        $estagiario->nome = $request->nome;
        $estagiario->email = $request->email;
        $estagiario->cpf = $request->cpf;
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
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('estagiario');
    }
    
}