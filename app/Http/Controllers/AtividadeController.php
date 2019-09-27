<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Empresa;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
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
        ]);

        $atividades = new Atividade();
        $atividades->nome = $request->get('nome');
        $atividades->empresa_id = $request->get('empresa_id');
        $atividades->sigla = $request->get('sigla');

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
        return view('atividade.edit', compact('atividades', $atividades));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividade $atividade)
    {
         $request->validate([
            'nome' => 'required',
        ]);

        $atividade->update($request->all());
        $atividade->save();
        $request->session()->flash('message', 'Sucesso!');
        return redirect('atividade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividade $atividade)
    {
        //
    }
}
