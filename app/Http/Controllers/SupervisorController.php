<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Instituicao;
use App\Supervisor;
use DB;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisores = Supervisor::all();
        return view('supervisor.index', compact('supervisores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();
        return view('supervisor.create', compact('empresas', 'cursos', 'instituicoes'));
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
        $supervisores->escolaridade = $request->get('escolaridade');
        $supervisores->cep = $request->get('cep');
        $supervisores->rua = $request->get('rua');
        $supervisores->bairro = $request->get('bairro');
        $supervisores->numero = $request->get('numero');
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
        $empresa = DB::table('empresa')->where('id', '=', $supervisor->empresa_id)->get()->first();

        // dd($empresa);
        return view('supervisor.edit', compact('supervisor', 'empresa', $supervisor));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        $supervisor->update($request->all());
        $supervisor->save();
        $request->session()->flash('message', 'Sucesso!');
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
