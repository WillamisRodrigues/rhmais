<?php

namespace App\Http\Controllers;

use App\TceContrato;
use App\Empresa;
use App\Instituicao;
use App\Estagiario;
use Illuminate\Http\Request;

class TceContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('tce_contrato.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        $estagiarios = Estagiario::all();
        $inst = Instituicao::all();
        return view('tce_contrato.create', compact('empresas', 'inst', 'estagiarios'));
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
            'empresa' => 'required',
            'instituicao' => 'required',
        ]);
        TceContrato::create($request->all());
        return redirect()->route('tce_contrato.index')
                        ->with('success','Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function show(TceContrato $tceContrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function edit(TceContrato $tceContrato)
    {
        return view('tce_contrato.edit', compact('tceContrato', $tceContrato));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TceContrato $tceContrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TceContrato  $tceContrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(TceContrato $tceContrato)
    {
        //
    }
}
