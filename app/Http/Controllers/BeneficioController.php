<?php

namespace App\Http\Controllers;

use App\Beneficio;
use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeneficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficios = Beneficio::all();
        $empresas = Empresa::all();
        return view('beneficio.index', compact('beneficios', 'empresas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $empresas = Empresa::all();

        return view('beneficio.create', compact('empresas'));
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

        $beneficio = new Beneficio();
        $beneficio->nome = $request->get('nome');
        $beneficio->sigla = $request->get('sigla');
        $beneficio->tipo = $request->get('tipo');
        $beneficio->save();

        return redirect()->route('beneficio.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficio $beneficio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beneficios = Beneficio::find($id);
        $empresas = DB::table('empresa')->get();
        return view('beneficio.edit', ['beneficios' => $beneficios, 'empresas' => $empresas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficio $beneficio)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        $beneficio->update($request->all());
        $beneficio->save();
        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('beneficio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Beneficio $beneficio)
    {
        dd($beneficio);
        $beneficio->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('beneficio');
    }
}
