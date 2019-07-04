<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Instituicao;
use App\Message;

class InstituicaoController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
          $instituicoes = Instituicao::all();
        return view('instituicao.index',compact('instituicoes', $instituicoes));

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instituicao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Instituicao $instituicoes)
    {
        // Insere uma nova categoria, de acordo com os dados informados pelo usuário
    $insert = $instituicoes->create($request->all());

    // Verifica se inseriu com sucesso
    // Redireciona para a listagem das categorias
    // Passa uma session flash success (sessão temporária)
    if ($insert)
        return redirect()
                    ->route('instituicao.index')
                    ->with('success', 'Escola cadastrada com sucesso!');

    // Redireciona de volta com uma mensagem de erro
    return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instituicao  $instituicao
     * @return \Illuminate\Http\Response
     */
    public function show(Instituicao $instituicao)
    {
        return view('instituicao.show',compact('instituicao',$instituicao));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instituicao  $instituicao
     * @return \Illuminate\Http\Response
     */
    public function edit(Instituicao $instituicao)
    {
        return view('instituicao.edit',compact('instituicao',$instituicao));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instituicao  $instituicao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instituicao $instituicao)
    {
       //Validate
        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required',
        ]);

        $instituicao->nome = $request->nome;
        $instituicao->email = $request->email;
        $instituicao->save();
        $request->session()->flash('message', 'Atualizado com sucesso!');
        return redirect('instituicao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instituicao  $instituicoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instituicao $instituicoes)
    {
       $usr->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('instituicao');
    }
}

