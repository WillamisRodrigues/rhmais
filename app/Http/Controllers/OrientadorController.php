<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Orientador;
use DB;
use App\Instituicao;
use Illuminate\Http\Request;

class OrientadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orientadores = Orientador::all();
        return view('orientador.index', compact('orientadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = DB::table("estado")->pluck("nome", "id");

        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();

        return view('orientador.create', compact('estados', 'empresas', 'cursos', 'instituicoes'));
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

        $orientadoress = new Orientador();
        $orientadoress->nome = $request->get('nome');
        $orientadoress->email = $request->get('email');
        $orientadoress->rg = $request->get('rg');
        $orientadoress->cpf = $request->get('cpf');
        $orientadoress->telefone = $request->get('telefone');
        $orientadoress->celular = $request->get('celular');
        $orientadoress->agente_integracao = $request->get('agente_integracao');
        $orientadoress->cidade = $request->get('cidade');
        $orientadoress->estado = $request->get('estado');
        $orientadoress->formacao = $request->get('formacao');
        $orientadoress->cep = $request->get('cep');
        $orientadoress->rua = $request->get('rua');
        $orientadoress->bairro = $request->get('bairro');
        $orientadoress->cep = $request->get('cep');
        $orientadoress->numero = $request->get('numero');
        $orientadoress->complemento = $request->get('complemento');
        $orientadoress->empresa_id = $request->get('empresa_id');
        $orientadoress->instituicao_id = $request->get('instituicao_id');
        $orientadoress->save();

        return redirect()->route('orientador.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function show(Orientador $orientador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orientador = Orientador::find($id);
        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();
        return view('orientador.edit', compact('orientador', 'instituicoes', 'empresas',  $orientador));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orientador $orientador)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        $orientador->update($request->all());
        $orientador->save();
        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('orientador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Orientador $orientador)
    {
        $orientador->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('orientador');
    }
}
