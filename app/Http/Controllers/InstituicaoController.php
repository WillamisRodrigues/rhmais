<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Instituicao;
use App\Message;

class InstituicaoController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
          $instituicoes = Instituicao::all();
        return view('instituicao.index',compact('instituicoes', $instituicoes));
            // return view('instituicao/index');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instituicao.create');
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
            'nome' => 'required|min:3',
            'email' => 'required',
        ]);

        $instituicoes = Instituicao::create(['nome' => $request->nome,'email' => $request->email]);
        return redirect('/usario/'.$usr->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instituicao  $instituicoes
     * @return \Illuminate\Http\Response
     */
    public function show(Instituicao $instituicoes)
    {
        return view('instituicao.show',compact('usuario',$instituicoes));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instituicao  $instituicoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Instituicao $instituicoes)
    {
        return view('isntituicao.edit',compact('instituicoes',$instituicoes));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instituicao  $instituicoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instituicao $instituicoes)
    {
       //Validate
        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required',
        ]);

        $instituicoes->nome = $request->nome;
        $instituicoes->email = $request->email;
        $instituicoes->save();
        $request->session()->flash('message', 'Atualizado com sucesso!');
        return redirect('instituicao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instituicao  $instituicoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instituicao $instituicoes)
    {
       $usr->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('instituicao');
    }
}

