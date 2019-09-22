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
    public function tce_recisao(){
        $estagiarios = DB::table('estagiario')
            ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            ->join('empresa', 'empresa.id', '=', 'tce_contrato.empresa_id')
            ->join('instituicao', 'instituicao.id', '=', 'tce_contrato.instituicao_id')
            ->select(
                'estagiario.nome',
                'estagiario.id',
                'empresa.nome_fantasia',
                'instituicao.nome_instituicao',
                'tce_contrato.bolsa',
                'tce_contrato.data_inicio',
                'tce_contrato.data_fim',
                'tce_contrato.contrato',
                'tce_contrato.assinado',
                'tce_contrato.obrigatorio'
            )
            ->get();
        return view('tce_recisao.index', compact('estagiarios', $estagiarios));
    }

    public function generateRecisao(Estagiario $estagiarios, $id){
        // Todos os Alunos
        if ($id == 0) {
            $estagiarios = Estagiario::all();
        }
        // Um Aluno Específico
        else {
            // $estagiarios = Estagiario::where('id', '=', $id)->get();
            $estagiarios = DB::table('estagiario')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('instituicao', 'estagiario.instituicao_id', '=', 'instituicao.id')
                ->select(
                    'estagiario.nome',
                    'estagiario.rua',
                    'estagiario.numero',
                    'estagiario.bairro',
                    'estagiario.city',
                    'estagiario.state',
                    'estagiario.cep',
                    'estagiario.celular',
                    'estagiario.cpf',
                    'estagiario.rg',
                    'estagiario.email',
                    'instituicao.razao_social AS instituicao_razao',
                    'instituicao.cnpj AS instituicao_cnpj',
                    'instituicao.numero AS instituicao_numero',
                    'instituicao.bairro AS instituicao_bairro',
                    'instituicao.city AS instituicao_cidade',
                    'instituicao.state AS instituicao_estado',
                    'instituicao.cep AS instituicao_cep',
                    'instituicao.nome_rep AS instituicao_nome_rep',
                    'instituicao.cargo_rep AS instituicao_cargo_rep',
                    'instituicao.orientador AS instituicao_orientador',
                    'instituicao.telefone AS instituicao_telefone',
                    'instituicao.rua AS instituicao_rua',
                    'empresa.razao_social AS empresa_razao',
                    'empresa.cnpj AS empresa_cnpj',
                    'empresa.numero AS empresa_numero',
                    'empresa.bairro AS empresa_bairro',
                    'empresa.city AS empresa_cidade',
                    'empresa.state AS empresa_estado',
                    'empresa.cep AS empresa_cep',
                    'empresa.nome_rep AS empresa_nome_rep',
                    'empresa.cargo_rep AS empresa_cargo_rep',
                    'empresa.supervisor AS empresa_cargo_sup',
                    'empresa.orientador AS empresa_orientador',
                    'empresa.supervisor AS empresa_sup',
                    'empresa.telefone AS empresa_telefone',
                    'empresa.rua AS empresa_rua'
                )
                ->where('estagiario.id', '=', $id)
                ->get();
        }

        $pdf = PDF::loadView('pdf.recisao.index');
        return $pdf->stream('index.pdf');
    }

    public function generateCau(){
        $pdf = PDF::loadView('pdf.cau.index');
        return $pdf->stream('index.pdf');
    }
    public function generateEstagio(){
        $pdf = PDF::loadView('pdf.plano.index');
        return $pdf->stream('index.pdf');
    }

    public function generateCce(){
        $pdf = PDF::loadView('pdf.cce.index');
        return $pdf->stream('index.pdf');
    }

    public function generateHolerite(){
        $pdf = PDF::loadView('pdf.holerite.index');
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
