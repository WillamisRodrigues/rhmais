<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 use App\Empresa;


class EmpresaController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $empresas = Empresa::all();

        $empresas = DB::table('empresa')
            ->select(
            'empresa.razao_social',
            'empresa.nome_fantasia',
            'empresa.cnpj',
            'empresa.insc_estadual',
            'empresa.telefone',
            'empresa.id',
            'empresa.qtd_plano',
            'empresa.valor_fixo',
            'empresa.valor_percentual',
            'empresa.cidade',
            'empresa.estado'
            )
            ->get();
        return view('empresa.index',compact('empresas', $empresas));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = DB::table("estado")->pluck("nome", "id");
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

        // Empresa::create($request->all());

        $empresas = new empresa();
        $empresas->razao_social = $request->get('razao_social');
        $empresas->nome_empresa = $request->get('nome_empresa');
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
        $empresas->telefone_rep = $request->get('telefone_rep');
        $empresas->save();
        $empresa_id = $empresas->id;

        $enderecos = new Endereco();
        $enderecos->cep = $request->get('cep');
        $enderecos->endereco = $request->get('endereco');
        $enderecos->bairro = $request->get('bairro');
        $enderecos->cep = $request->get('cep');
        $enderecos->numero = $request->get('numero');
        $enderecos->complemento = $request->get('complemento');
        $enderecos->empresa_id = $empresa_id;
        $enderecos->save();

        return redirect()->route('empresa.index')
                        ->with('success','Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show',compact('empresa',$empresa));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit',compact('empresa',$empresa));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
       //Validate
        $request->validate([
            'razao_social' => 'required',
            'cnpj' => 'required',
        ]);

        $empresa->update($request->all());
        $empresa->save();
        $request->session()->flash('message', 'Atualizado com sucesso!');
        return redirect('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Empresa $empresa)
    {
        $empresa->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('empresa');
    }

}

