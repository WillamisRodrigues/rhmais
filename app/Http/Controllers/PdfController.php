<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Estagiario;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function generatePDF()
    {
        $estagiarios = DB::table('estagiario')
            ->join('endereco', 'estagiario.id', '=', 'endereco.estagiario_id')
            ->join('cidade', 'estagiario.city', '=', 'cidade.id')
            ->select(
                'cidade.nome AS nome_cidade',
                'estagiario.nome',
                'estagiario.empresa_id',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.data_nascimento',
                'estagiario.id'
            )
            ->get();
        // return view('estagiario.index', compact('estagiarios', $estagiarios));

        $data = ['estagiario' => $estagiarios];
        $pdf = PDF::loadView('pdf.tce.index', $data);
        return $pdf->stream('tce-pdf.pdf');

    }

    public function  generateRecisao(){
        $pdf = PDF::loadView('pdf.recisao.index');
        return $pdf->stream('index.pdf');
    }

    public function gerarRelatorio($id)
    {

        // Todos os Estagiarios
        if ($id == 0) {
            $estagiarios = Estagiario::all();
        }
        // Um Estagiario Específico
        else {
            $estagiarios = Estagiario::where('id', '=', $id)->get();
        }


        $data = ['estagiario' => $estagiarios];
        $pdf = PDF::loadView('pdf.tce.index', $data);
        return $pdf->stream('tce-pdf.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
