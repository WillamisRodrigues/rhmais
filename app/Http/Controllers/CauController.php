<?php

namespace App\Http\Controllers;

use App\Cau;
use DB;
use App\Empresa;
use Illuminate\Http\Request;

class CauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caus = DB::table('cau')
            ->join('empresa', 'empresa.id', '=', 'cau.empresa_id')
            ->select(
                'empresa.id',
                'empresa.nome_fantasia',
                'cau.data_inicio',
                'cau.data_fim',
                'cau.situacao',
                'cau.id AS id'
            )
            ->get();
        return view('cau_convenio.index',  compact('caus', $caus));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('cau_convenio.create', compact('empresas'));
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
            'empresa_id' => 'required',
        ]);

        $cau = new cau();
        $cau->empresa_id = $request->get('empresa_id');
        $cau->agente_integracao = $request->get('agente_integracao');
        $cau->data_inicio = $request->get('data_inicio');
        $cau->data_fim = $request->get('data_fim');
        $cau->data_doc = $request->get('data_doc');
        $cau->obs = $request->get('obs');
        $cau->save();
        return redirect()->route('cau_convenio.index')
            ->with('sucess', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function show(Cau $cau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function edit(Cau $caus)
    {
        return view('cau_convenio.edit', compact('caus', $caus));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cau $cau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)

    {
        $res = Cau::destroy($id);
        if ($res) {
            $request->session()->flash('warning', 'Removido com sucesso!');
            return redirect('cau_convenio');
        } else {
            $request->session()->flash('warning', 'Removido com sucesso!');
            return redirect('cau_convenio');
        }
    }
}
