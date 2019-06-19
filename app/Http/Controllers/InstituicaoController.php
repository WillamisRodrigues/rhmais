<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
            return view('instituicao/index');
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

        $inst = Instituicao::create(['nome' => $request->nome,'email' => $request->email]);
        return redirect('/usario/'.$usr->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instituicao  $inst
     * @return \Illuminate\Http\Response
     */
    public function show(Instituicao $inst)
    {
        return view('instituicao.show',compact('usuario',$inst));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instituicao  $inst
     * @return \Illuminate\Http\Response
     */
    public function edit(Instituicao $inst)
    {
        return view('isntituicao.edit',compact('instituicao',$inst));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instituicao  $inst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instituicao $inst)
    {
       //Validate
        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required',
        ]);

        $usr->nome = $request->nome;
        $usr->email = $request->email;
        $usr->save();
        $request->session()->flash('message', 'Atualizado com sucesso!');
        return redirect('instituicao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instituicao  $inst
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instituicao $inst)
    {
       $usr->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('instituicao');
    }
}

