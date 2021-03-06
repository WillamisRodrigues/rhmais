<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Supervisor;
use Illuminate\Http\Request;

class SupervisorController extends Controller
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
        $supervisores = Supervisor::all();
        // $empresa = Empresa::all();
        return view('supervisor.index', compact('supervisores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('supervisor.create', compact('empresas', 'cursos'));
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
            'email' => 'required',
        ]);

        $supervisores = new Supervisor();
        $supervisores->nome = $request->get('nome');
        $supervisores->email = $request->get('email');
        $supervisores->rg = $request->get('rg');
        $supervisores->cpf = $request->get('cpf');
        $supervisores->telefone = $request->get('telefone');
        $supervisores->celular = $request->get('celular');
        $supervisores->agente_integracao = $request->get('agente_integracao');
        $supervisores->cidade = $request->get('cidade');
        $supervisores->estado = $request->get('estado');
        $supervisores->formacao = $request->get('formacao');
        $supervisores->cep = $request->get('cep');
        $supervisores->rua = $request->get('rua');
        $supervisores->complemento = $request->get('complemento');
        $supervisores->bairro = $request->get('bairro');
        $supervisores->numero = $request->get('numero');
        $supervisores->cargo = $request->get('cargo');
        $supervisores->id_profissional = $request->get('id_profissional');
        $supervisores->empresa_id = $request->get('empresa_id');
        $supervisores->save();

        return redirect()->route('supervisor.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function show(Supervisor $supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supervisor = Supervisor::find($id);
        $empresa = Empresa::all();

        return view('supervisor.edit', compact('supervisor', 'empresa', $supervisor));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        $supervisores = Supervisor::find($id);
        $supervisores->nome = $request->get('nome');
        $supervisores->email = $request->get('email');
        $supervisores->rg = $request->get('rg');
        $supervisores->cpf = $request->get('cpf');
        $supervisores->telefone = $request->get('telefone');
        $supervisores->celular = $request->get('celular');
        $supervisores->agente_integracao = $request->get('agente_integracao');
        $supervisores->cidade = $request->get('cidade');
        $supervisores->estado = $request->get('estado');
        $supervisores->formacao = $request->get('formacao');
        $supervisores->cep = $request->get('cep');
        $supervisores->rua = $request->get('rua');
        $supervisores->complemento = $request->get('complemento');
        $supervisores->bairro = $request->get('bairro');
        $supervisores->numero = $request->get('numero');
        $supervisores->cargo = $request->get('cargo');
        $supervisores->id_profissional = $request->get('id_profissional');
        $supervisores->empresa_id = $request->get('empresa_id');
        $supervisores->save();

        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('supervisor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Supervisor $supervisor)
    {
        $supervisor->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('supervisor');
    }
}
