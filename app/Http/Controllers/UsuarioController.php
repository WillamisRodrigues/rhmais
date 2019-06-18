<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Usuario;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usr = Usuario::all();
        return view('usuario.index',compact('usuario',$usr));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
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

        $usr = Usuario::create(['nome' => $request->nome,'email' => $request->email]);
        return redirect('/usario/'.$usr->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usr
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usr)
    {
        return view('usuario.show',compact('usuario',$usr));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usr
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usr)
    {
        return view('usuario.edit',compact('usuario',$usr));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usr)
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
        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usr)
    {
       $usr->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('usuario');
    }
}