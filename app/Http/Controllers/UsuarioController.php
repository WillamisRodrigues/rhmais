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
    //     $registros = Curso::all();
    //   return view('admin.cursos.index',compact('registros'));
        $usuarios = Usuario::all();
        return view('usuario.index',compact('usuarios', $usuarios));
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
    public function store(Request $request, Usuario $usuarios)
    {

        // $request->validate([
        //     'nome' => 'required|min:3',
        //     'email' => 'required',
        // ]);

       {
    // Insere uma nova categoria, de acordo com os dados informados pelo usuário
    $insert = $usuarios->create($request->all());

    // Verifica se inseriu com sucesso
    // Redireciona para a listagem das categorias
    // Passa uma session flash success (sessão temporária)
    if ($insert)
        return redirect()
                    ->route('usuario.index')
                    ->with('success', 'Categoria inserida com sucesso!');

    // Redireciona de volta com uma mensagem de erro
    return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
     }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuarios)
    {
        return view('usuario.show',compact('usuarios',$usuarios));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuarios)
    {
        return view('usuario.edit',compact('usuario',$usuarios));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuarios)
    {
       //Validate
        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required',
        ]);

        $usuarios->nome = $request->nome;
        $usuarios->email = $request->email;
        $usuarios->save();
        $request->session()->flash('message', 'Atualizado com sucesso!');
        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuarios)
    {
       $usuarios->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('usuario');
    }
}