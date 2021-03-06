<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $empresas = Empresa::all();

        return view('empresa.index', compact('empresas', $empresas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = DB::table("estado")->pluck("nome", "id");
        $empresas = Empresa::all();
        return view('empresa.create', compact('estados', 'empresas'));
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
            'nome_fantasia' => 'required',
            'cnpj' => 'required',
        ]);

        $empresas = new empresa();
        $empresas->razao_social = $request->get('razao_social');
        $empresas->nome_fantasia = $request->get('nome_fantasia');
        $empresas->cnpj = $request->get('cnpj');
        $empresas->insc_estadual = $request->get('insc_estadual');
        $empresas->telefone = $request->get('telefone');
        $empresas->site_url = $request->get('site_url');
        $empresas->cidade = $request->get('cidade');
        $empresas->estado = $request->get('estado');
        $empresas->nome_rep = $request->get('nome_rep');
        $empresas->rg_rep = $request->get('rg_rep');
        $empresas->cpf_rep = $request->get('cpf_rep');
        $empresas->email_rep = $request->get('email_rep');
        $empresas->celular = $request->get('celular');
        $empresas->celular_rep = $request->get('celular_rep');
        $empresas->cep = $request->get('cep');
        $empresas->rua = $request->get('rua');
        $empresas->bairro = $request->get('bairro');
        $empresas->cep = $request->get('cep');
        $empresas->numero = $request->get('numero');
        $empresas->complemento = $request->get('complemento');
        $empresas->nome_contato = $request->get('nome_contato');
        $empresas->email_contato = $request->get('email_contato');
        $empresas->data_estagiario = $request->get('data_estagiario');
        $empresas->data_fechamento = $request->get('data_fechamento');
        $empresas->data_boleto = $request->get('data_boleto');
        $empresas->custo_unitario = $request->get('custo_unitario');
        $empresas->ativo = $request->get('ativo');
        // if ($empresas->ativo == 'on') {
        //     $empresas->ativo = 1;
        // }
        $empresas->save();

        return redirect()->route('empresa.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::where('id', $id)->first();
        if ($empresa) {
            echo "<h2>ID da empresa: {$empresa->id}</h2>";
            echo "<h2>Nome da empresa: {$empresa->nome_fantasia}</h2>";
        }

        $estagiario = $empresa->estagios()->first();

        if ($estagiario) {
            echo "<h2>ID do estagiario: {$estagiario->id}</h2>";
            echo "<h2>Nome do estagiario: {$estagiario->nome}</h2>";
        }

        $instituicao = $estagiario->instituicao()->first();

        if ($instituicao) {
            echo "<h2>ID do estagiario: {$instituicao->id}</h2>";
            echo "<h2>Nome do estagiario: {$instituicao->nome}</h2>";
        }

        // return view('empresa.show', compact('empresa', $empresa));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit', compact('empresa', $empresa));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_fantasia' => 'required',
            'cnpj' => 'required',
        ]);

        $empresas = Empresa::find($id);
        $empresas->razao_social = $request->get('razao_social');
        $empresas->nome_fantasia = $request->get('nome_fantasia');
        $empresas->cnpj = $request->get('cnpj');
        $empresas->insc_estadual = $request->get('insc_estadual');
        $empresas->telefone = $request->get('telefone');
        $empresas->site_url = $request->get('site_url');
        $empresas->cidade = $request->get('cidade');
        $empresas->estado = $request->get('estado');
        $empresas->nome_rep = $request->get('nome_rep');
        $empresas->rg_rep = $request->get('rg_rep');
        $empresas->cpf_rep = $request->get('cpf_rep');
        $empresas->email_rep = $request->get('email_rep');
        $empresas->celular = $request->get('celular');
        $empresas->celular_rep = $request->get('celular_rep');
        $empresas->cep = $request->get('cep');
        $empresas->rua = $request->get('rua');
        $empresas->bairro = $request->get('bairro');
        $empresas->cep = $request->get('cep');
        $empresas->numero = $request->get('numero');
        $empresas->complemento = $request->get('complemento');
        $empresas->nome_contato = $request->get('nome_contato');
        $empresas->email_contato = $request->get('email_contato');
        $empresas->data_estagiario = $request->get('data_estagiario');
        $empresas->data_fechamento = $request->get('data_fechamento');
        $empresas->data_boleto = $request->get('data_boleto');
        $empresas->custo_unitario = $request->get('custo_unitario');
        // $empresas->ativo = $request->get('ativo');
        if ($empresas->ativo == 'on') {
            $empresas->ativo = 1;
        }
        // dd($empresas);
        $empresas->save();

        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();

        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('empresa');
    }
}
