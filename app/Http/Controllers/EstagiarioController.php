<?php

namespace App\Http\Controllers;

use App\Estagiario;
use Illuminate\Http\Request;

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
        // Insere uma nova categoria, de acordo com os dados informados pelo usuário
    $insert = $estagiarios->create($request->all());

    // Verifica se inseriu com sucesso
    // Redireciona para a listagem das categorias
    // Passa uma session flash success (sessão temporária)
    if ($insert)
        return redirect()
                    ->route('estagiario.index')
                    ->with('success', 'Categoria inserida com sucesso!');

    // Redireciona de volta com uma mensagem de erro
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
        return view('estagiario.show', compact('estagiario', $estagiario));
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
    public function destroy(Request $request,Estagiario $estagiario)
    {
       $estagiario->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('estagiario');
    }
}
