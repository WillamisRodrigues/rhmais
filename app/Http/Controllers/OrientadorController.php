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
        $states = DB::table("estado")->pluck("nome", "id");

        $instituicoes = Instituicao::all();
        $empresas = Empresa::all();

        return view('orientador.create', compact('states', 'empresas', 'cursos', 'instituicoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('orientador.edit', compact('orientador', $orientador));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orientador $orientador)
    {
        //
    }
}
