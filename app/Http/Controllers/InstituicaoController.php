<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instituicao;
use Illuminate\Support\Facades\DB;

class InstituicaoController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $instituicoes = Instituicao::all();
        //  $instituicoes = DB::table('instituicao')
        //     ->join('endereco', 'instituicao.id', '=', 'endereco.instituicao_id')
        //     ->select(
        //     'instituicao.razao_social',
        //     'instituicao.nome_instituicao',
        //     'instituicao.cnpj',
        //     'instituicao.id',
        //     'endereco.rua',
        //     'endereco.cidade'
        //     )
        //     ->get();
        return view('instituicao.index',compact('instituicoes', $instituicoes));

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = DB::table("estado")->pluck("nome", "id");
        return view('instituicao.create', compact('states','empresas'));
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

      Instituicao::create($request->all());

        return redirect()->route('instituicao.index')
                        ->with('success','Cadastrado com sucesso.');
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
            'razao_social' => 'required',
            'cnpj' => 'required',
        ]);

        $instituicao->update($request->all());
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
    public function destroy(Request $request, Instituicao $instituicoes)
    {
       $instituicoes->delete();
       $request->session()->flash('message', 'Removido com sucesso!');
       return redirect('instituicao');
    }
}

