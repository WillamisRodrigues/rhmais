<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Estagiario;
use App\FolhaPagamento;

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
            ->select(
                'estagiario.cidade AS nome_cidade',
                'estagiario.nome',
                'estagiario.empresa_id',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.data_nascimento',
                'estagiario.id'
            )
            ->get();

        $data = ['estagiario' => $estagiarios];
        $pdf = PDF::loadView('pdf.tce.index', $data);
        return $pdf->stream('tce-pdf.pdf');
    }
    public function tce_recisao()
    {
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

    public function generateRecisao(Estagiario $estagiarios, $id)
    {
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
                    'estagiario.cidade',
                    'estagiario.estado',
                    'estagiario.cep',
                    'estagiario.celular',
                    'estagiario.cpf',
                    'estagiario.rg',
                    'estagiario.email',
                    'instituicao.razao_social AS instituicao_razao',
                    'instituicao.cnpj AS instituicao_cnpj',
                    'instituicao.numero AS instituicao_numero',
                    'instituicao.bairro AS instituicao_bairro',
                    'instituicao.cidade AS instituicao_cidade',
                    'instituicao.estado AS instituicao_estado',
                    'instituicao.cep AS instituicao_cep',
                    'instituicao.nome_rep AS instituicao_nome_rep',
                    'instituicao.cargo_rep AS instituicao_cargo_rep',
                    'instituicao.telefone AS instituicao_telefone',
                    'instituicao.rua AS instituicao_rua',
                    'empresa.razao_social AS empresa_razao',
                    'empresa.cnpj AS empresa_cnpj',
                    'empresa.numero AS empresa_numero',
                    'empresa.bairro AS empresa_bairro',
                    'empresa.cidade AS empresa_cidade',
                    'empresa.estado AS empresa_estado',
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

    public function generateCau()
    {
        $pdf = PDF::loadView('pdf.cau.index');
        return $pdf->stream('index.pdf');
    }
    public function generateEstagio()
    {
        $pdf = PDF::loadView('pdf.plano.index');
        return $pdf->stream('index.pdf');
    }

    public function generateCce()
    {
        $pdf = PDF::loadView('pdf.cce.index');
        return $pdf->stream('index.pdf');
    }

    public function generateHolerite($id)
    {
        if ($id == 0) {

        $folha = DB::table('estagiario')
        ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
        ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
        ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
        ->whereMonth('folha_pagamento.created_at', '=', date('m'))
        ->where('folha_pagamento.status', '=', 0)
        ->get();
        // dd($folha);
        }
        // Um Folha Específica
        else {
        $folha = DB::table('estagiario')
        ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
        ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
        ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
        ->where('folha_pagamento.id', '=', $id)
        ->get();

        // dd($folha);
        }
        $data = ['folha' => $folha];
        $pdf = PDF::loadView('pdf.holerite.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function generateRescisao($id)
    {
        if ($id == 0) {
            $folha = FolhaRescisao::all();
        }
        // Um Folha Específica
        else {
        $folha = DB::table('estagiario')
        ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
        ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
        ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
        ->where('folha_pagamento.id', '=', $id)
        ->get();

        // dd($folha);
        }
        $data = ['folha' => $folha];
        $pdf = PDF::loadView('pdf.valores_rescisao.index');
        return $pdf->stream('index.pdf');
    }

    public function generateFolha($id)
    {
        if ($id == 0) {

        $folha = DB::table('estagiario')
        ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
        ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
        ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
        ->whereMonth('folha_pagamento.created_at', '=', date('m'))
        ->where('folha_pagamento.status', '=', 0)
        ->get();
        // dd($folha);
        }
        // Um Folha Específica
        else {
        $folha = DB::table('estagiario')
        ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
        ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
        ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
        ->where('folha_pagamento.id', '=', $id)
        ->get();

        // dd($folha);
        }
        $data = ['folha' => $folha];
        $pdf = PDF::loadView('pdf.folha.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function generateAvaliacao()
    {
        $pdf = PDF::loadView('pdf.avaliacao.index');
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
