<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Empresa;
use Illuminate\Http\Request;

class AtividadeController extends Controller
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
        $atividades = Atividade::all();
        return view('atividade.index', compact('atividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();

        return view('atividade.create', compact('empresas'));
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
            'empresa_id' => 'required',
        ]);

        $atividades = new Atividade();
        $atividades->nome = $request->get('nome');
        $atividades->empresa_id = $request->get('empresa_id');
        $atividades->agente_integracao = $request->get('agente_integracao');

        $atividades->save();

        return redirect()->route('atividade.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function show(Atividade $atividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atividades = Atividade::find($id);
        return view('atividade.edit', compact('atividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'empresa_id' => 'required',
            'nome' => 'required',
        ]);

        $atividades = Atividade::find($id);
        $atividades->nome = $request->get('nome');
        $atividades->empresa_id = $request->get('empresa_id');
        $atividades->save();

        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('atividade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Atividade $atividade)
    {
        $atividade->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('atividade');
    }
}
