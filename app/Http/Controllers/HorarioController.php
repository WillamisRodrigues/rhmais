<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
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
        $horarios = Horario::all();
        $empresas = Empresa::all();
        return view('horario.index', compact('horarios', 'empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('horario.create', compact('empresas'));
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
            'descricao' => 'required',
        ]);

        $horario = new Horario();
        $horario->descricao = $request->get('descricao');
        $horario->qtd_horas = $request->get('qtd_horas');
        $horario->empresa_id = $request->get('empresa_id');
        $horario->agente_integracao = $request->get('agente_integracao');

        $horario->save();

        return redirect()->route('horario.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horarios = Horario::find($id);
        $empresas = Empresa::all();
        return view('horario.edit', compact('horarios', 'empresas', $horarios));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required',
        ]);

        $horario = Horario::find($id);
        $horario->descricao = $request->get('descricao');
        $horario->qtd_horas = $request->get('qtd_horas');
        $horario->empresa_id = $request->get('empresa_id');
        $horario->agente_integracao = $request->get('agente_integracao');
        $horario->save();

        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('horario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Horario $horario)
    {
        $horario->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('horario');
    }
}
