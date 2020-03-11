<?php

namespace App\Http\Controllers;

use App\Cce;
use App\Instituicao;
use App\Seguradora;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class CceController extends Controller
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
        $cces = DB::table('cce')
            ->join('instituicao', 'instituicao.id', '=', 'cce.instituicao_id')
            ->select(
                'instituicao.id',
                'instituicao.nome_instituicao',
                'instituicao.cidade',
                'cce.data_inicio',
                'cce.data_fim',
                'cce.situacao',
                'cce.id'
            )
            ->get();
        return view('cce_convenio.index', compact('cces', $cces));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituicoes = Instituicao::all();
        $seguro = Seguradora::all();
        return view('cce_convenio.create', compact('instituicoes', 'seguro'));
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
            'instituicao_id' => 'required|unique:cce',
        ]);

        $date_doc = $request->get('data_doc');
        $date_inicio = $request->get('data_inicio');
        $date_fim = $request->get('data_fim');

        $cce = new cce();
        $cce->instituicao_id = $request->get('instituicao_id');
        $cce->agente_integracao = $request->get('agente_integracao');
        $cce->data_inicio = Carbon::createFromFormat('d/m/Y', $date_inicio)->format('Y-m-d');
        $cce->data_fim = Carbon::createFromFormat('d/m/Y', $date_fim)->format('Y-m-d');
        $cce->data_doc = Carbon::createFromFormat('d/m/Y', $date_doc)->format('Y-m-d');
        $cce->obs = $request->get('obs');
        $cce->save();

        $request->session()->flash('success', 'Cadastrado com sucesso!');
        return redirect('cce_convenio');

        // return redirect()->route('cce_convenio.index')
        //     ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function show(Cce $cce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cce = DB::table('cce')->where('id', $id)->first();
        $instituicoes = DB::table('instituicao')->where('id', '=', $cce->instituicao_id)->get()->first();
        // $apolices = DB::table('seguradora')->where('id', '=', $cce->seguradora_id)->get()->first();
        return view('cce_convenio.edit', compact('cce', 'instituicoes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'instituicao_id' => 'required',
        ]);

        $date_doc = $request->get('data_doc');
        $date_inicio = $request->get('data_inicio');
        $date_fim = $request->get('data_fim');

        $cce = Cce::find($id);
        $cce->data_inicio = Carbon::createFromFormat('d/m/Y', $date_inicio)->format('Y-m-d');
        $cce->data_fim = Carbon::createFromFormat('d/m/Y', $date_fim)->format('Y-m-d');
        $cce->data_doc = Carbon::createFromFormat('d/m/Y', $date_doc)->format('Y-m-d');
        $cce->obs = $request->get('obs');
        $cce->save();

        $request->session()->flash('success', 'Atualizado com sucesso!');
        return redirect('cce_convenio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cce  $cce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $cce = Cce::find($id);
        $cce->delete();

        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('cce_convenio');

    }
    public function assinado($id)
    {
        DB::update('update cce set situacao = 1 where id = ?', [$id]);
        return redirect('cce_convenio');
    }
}
