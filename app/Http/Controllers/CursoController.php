<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('curso.index', compact('cursos', $cursos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
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
            'nivel' => 'required',
        ]);

        $cursos = new Curso();
        $cursos->nome = $request->get('nome');
        $cursos->nivel = $request->get('nivel');
        $cursos->save();

        return redirect()->route('curso.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos = Curso::find($id);
        return view('curso.edit', compact('cursos', $cursos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'nivel' => 'required',
        ]);

        $request->validate([
            'nome' => 'required',
            'nivel' => 'required',
        ]);

        $cursos = Curso::find($id);
        $cursos->nome = $request->get('nome');
        $cursos->nivel = $request->get('nivel');
        $cursos->save();

        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('curso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('curso');
    }
}
