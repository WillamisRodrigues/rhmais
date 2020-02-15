<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $instituicoes = Instituicao::all();
        return view('instituicao.index', compact('instituicoes', $instituicoes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituicoes = Instituicao::all();
        return view('instituicao.create', compact('instituicoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Instituicao $instituicoes)
    {
        $request->validate([
            'nome_instituicao' => 'required',
            'cnpj' => 'required',
        ]);

        //   Instituicao::create($request->all());

        $instituicoes = new Instituicao();

        $instituicoes->razao_social = $request->get('razao_social');
        $instituicoes->nome_instituicao = $request->get('nome_instituicao');
        $instituicoes->cnpj = $request->get('cnpj');
        $instituicoes->insc_estadual = $request->get('insc_estadual');
        $instituicoes->mantenedora = $request->get('mantenedora');
        $instituicoes->telefone = $request->get('telefone');
        $instituicoes->site_url = $request->get('site_url');
        $instituicoes->cidade = $request->get('cidade');
        $instituicoes->estado = $request->get('estado');
        $instituicoes->nome_contato = $request->get('nome_contato');
        $instituicoes->nome_rep = $request->get('nome_rep');
        $instituicoes->cargo_rep = $request->get('cargo_rep');
        $instituicoes->rg_rep = $request->get('rg_rep');
        $instituicoes->cpf_rep = $request->get('cpf_rep');
        $instituicoes->email_contato = $request->get('email_contato');
        $instituicoes->email_rep = $request->get('email_rep');
        $instituicoes->celular_rep = $request->get('cel_rep');
        $instituicoes->celular_contato = $request->get('celular_contato');
        $instituicoes->cep = $request->get('cep');
        $instituicoes->rua = $request->get('rua');
        $instituicoes->bairro = $request->get('bairro');
        $instituicoes->numero = $request->get('numero');
        $instituicoes->complemento = $request->get('complemento');
        $instituicoes->save();

        return redirect()->route('instituicao.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instituicao  $instituicao
     * @return \Illuminate\Http\Response
     */
    public function show(Instituicao $instituicao)
    {
        return view('instituicao.show', compact('instituicao', $instituicao));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instituicao  $instituicao
     * @return \Illuminate\Http\Response
     */
    public function edit(Instituicao $instituicao)
    {
        $estados = Estado::all();
        return view('instituicao.edit', compact('instituicao', 'estados', $instituicao));
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
            'razao_social' => 'required',
            'cnpj' => 'required',
        ]);

        $instituicao->update($request->all());
        $instituicao->save();
        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('instituicao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instituicao  $instituicoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Instituicao $instituicoes)
    {
        $instituicoes->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('instituicao');
    }
}
