<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Seguradora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguros = Seguradora::all();
        $empresas = Empresa::all();
        return view('seguro.index', compact('seguros', 'empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();

        return view('seguro.create', compact('empresas'));
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
        ]);

        $seguradora = new Seguradora();
        $seguradora->nome = $request->get('nome');
        $seguradora->n_apolice = $request->get('n_apolice');
        $seguradora->empresa_id = $request->get('empresa_id');
        $seguradora->agente_integracao = $request->get('agente_integracao');
        $seguradora->cobertura = $request->get('cobertura');

        $seguradora->save();

        return redirect()->route('seguro.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function show(Seguradora $seguradora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $seguradora = Seguradora::find($id);
        $seguro = DB::table('seguradora')->where('id', $id)->get()->first();
        // $empresas = DB::table('empresa')->where('id', '=', $seguradora->empresa_id)->get()->first();
        $empresas = Empresa::all();

        return view('seguro.edit', [
            'seguro' => $seguro,
            'empresas' => $empresas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seguradora $seguro)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        $seguro->update($request->all());
        $seguro->save();
        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('seguro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Seguradora $seguro)
    {
        $seguro->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('seguro');
    }
}
