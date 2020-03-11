<?php

namespace App\Http\Controllers;

use App\Estagiario;
use DB;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function __contruct()
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

    public function generateCau($id)
    {
        $contrato = DB::table('cau')
            ->join('empresa', 'cau.empresa_id', '=', 'empresa.id')
            ->where('cau.id', '=', $id)
            ->get();
// dd($contrato);
        $data = ['contrato' => $contrato];
        $pdf = PDF::loadView('pdf.cau.index', $data);
        return $pdf->stream('index.pdf');
    }
    public function generateEstagio($id)
    {
        $estagio = DB::table('plano_estagio')
            ->where('plano_estagio.id', '=', $id)
            ->get();
//  dd($estagio);
        $data = ['estagio' => $estagio];
        $pdf = PDF::loadView('pdf.plano.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function generateCce($id)
    {
        $contrato = DB::table('cce')
            ->join('instituicao', 'cce.instituicao_id', '=', 'instituicao.id')
            ->where('cce.id', '=', $id)
            ->get();
//  dd($contrato);
        $data = ['contrato' => $contrato];
        $pdf = PDF::loadView('pdf.cce.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function generateHolerite($id)
    {
        if ($id == 0) {

            $folhas = DB::table('estagiario')
                ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->whereMonth('folha_pagamento.created_at', '=', date('m'))
                ->where('folha_pagamento.status', '=', 0)
                ->get();

            // $folhas = DB::table('estagiario')
            //     ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            //     ->select('folha_pagamento.referencia', 'folha_pagamento.valor_bolsa')
            //     ->whereMonth('folha_pagamento.created_at', '=', date('m'))
            //     ->where('folha_pagamento.status', '=', 0)
            //     ->get();

            // $empresas = DB::table('empresa')
            //     ->join('folha_pagamento', 'empresa.id', '=', 'folha_pagamento.empresa_id')
            //     ->select('empresa.nome_fantasia', 'empresa.cnpj')
            //     ->whereMonth('folha_pagamento.created_at', '=', date('m'))
            //     ->where('folha_pagamento.status', '=', 0)
            //     ->get();

            // $estagiarios = DB::table('estagiario')
            //     ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            //     ->select('estagiario.nome', 'estagiario.cpf')
            //     ->whereMonth('folha_pagamento.created_at', '=', date('m'))
            //     ->where('folha_pagamento.status', '=', 0)
            //     ->get();

            // $tceContrato = DB::table('estagiario')
            //     ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            //     ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            //     ->select('tce_contrato.data_inicio', 'tce_contrato.data_fim')
            //     ->whereMonth('folha_pagamento.created_at', '=', date('m'))
            //     ->where('folha_pagamento.status', '=', 0)
            //     ->get();

        }
        // Um Folha Específica
        else {
            $folhas = DB::table('estagiario')
                ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->where('folha_pagamento.id', '=', $id)
                ->get();

            // $folhas = DB::table('estagiario')
            //     ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            //     ->select('folha_pagamento.referencia', 'folha_pagamento.valor_bolsa')
            //     ->where('folha_pagamento.id', '=', $id)
            //     ->get();

            // $empresas = DB::table('empresa')
            //     ->join('folha_pagamento', 'empresa.id', '=', 'folha_pagamento.empresa_id')
            //     ->select('empresa.nome_fantasia', 'empresa.cnpj')
            //     ->where('folha_pagamento.id', '=', $id)
            //     ->get();

            // $estagiarios = DB::table('estagiario')
            //     ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            //     ->select('estagiario.nome', 'estagiario.cpf')
            //     ->where('folha_pagamento.id', '=', $id)
            //     ->get();

            // $tceContrato = DB::table('estagiario')
            //     ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            //     ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            //     ->select('tce_contrato.data_inicio', 'tce_contrato.data_fim')
            //     ->where('folha_pagamento.id', '=', $id)
            //     ->get();

            // $estagiarioBeneficio = DB::table('estagiario')
            // ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            // ->join('beneficio_estagiario', 'estagiario.id', '=', 'beneficio_estagiario.estagiario_id')
            // ->select('beneficio_estagiario.nome')
            // ->where('folha_pagamento.id', '=', $id)
            // ->get();

            //             folha_pagamento referencia, bolsa
            // empresa nome_fantasia, cnpj
            // estagiario nome
            // tce_contrato data_inicio, data_fim
            // estagiario_beneficio nome, valor

        }
        // dd($estagiarios);

        // $data = ['folhas' => $folhas,
        //     'empresas' => $empresas,
        //     'estagiarios' => $estagiarios,
        //     'tceContrato' => $tceContrato,
        // ];
        $data = ['folhas' => $folhas];
        $pdf = PDF::loadView('pdf.holerite.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function rescisaoFolha($id)
    {
        if ($id == 0) {
            $folhaRescisao = FolhaRescisao::all();
        }
        // Um Folha Específica
        else {
            $folhaRescisao = DB::table('estagiario')
                ->join('folha_rescisao', 'estagiario.id', '=', 'folha_rescisao.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_rescisao', 'estagiario.id', '=', 'tce_rescisao.estagiario_id')
                ->where('folha_rescisao.folha_id', '=', $id)
                ->get();

            // dd($folhaRescisao);
        }
        $data = ['folhaRescisao' => $folhaRescisao];
        $pdf = PDF::loadView('pdf.valores_rescisao.index', $data);
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

    public function generateFechamento($empresa_id)
    {

        $fechamento = DB::table('cobranca')
            ->join('empresa', 'empresa.id', '=', 'cobranca.empresa_id')
            ->join('cau', 'cobranca.empresa_id', '=', 'empresa.id')
            ->join('tce_contrato', 'tce_contrato.empresa_id', '=', 'empresa.id')
            ->join('estagiario', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            ->where('empresa.id', '=', $empresa_id)
            ->whereMonth('cobranca.created_at', '=', date('m'))
            ->get();
        // dd($fechamento);
        $data = ['fechamento' => $fechamento];
        $pdf = PDF::loadView('pdf.fechamento.index', $data);
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

    public function rescisaoTce($id)
    {
        $estagiarios = DB::table('estagiario')
            ->join('tce_rescisao', 'estagiario.id', '=', 'tce_rescisao.estagiario_id')
            ->select(
                'estagiario.nome',
                'estagiario.rua',
                'estagiario.numero',
                'estagiario.bairro',
                'estagiario.cidade',
                'estagiario.estado',
                'estagiario.cep',
                'estagiario.telefone',
                'estagiario.celular',
                'estagiario.cpf',
                'estagiario.rg',
                'estagiario.email',
                'estagiario.curso',
                'estagiario.periodo'
            )
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $empresas = DB::table('empresa')
            ->join('tce_rescisao', 'empresa.id', '=', 'tce_rescisao.empresa_id')
            ->select(
                'empresa.razao_social',
                'empresa.cnpj',
                'empresa.nome_fantasia',
                'empresa.telefone',
                'empresa.numero',
                'empresa.bairro',
                'empresa.cidade',
                'empresa.estado',
                'empresa.cep',
                'empresa.nome_rep',
                'empresa.cargo_rep',
                'empresa.telefone',
                'empresa.rua'
            )
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $instituicoes = DB::table('instituicao')
            ->join('tce_rescisao', 'instituicao.id', '=', 'tce_rescisao.instituicao_id')
            ->select(
                'instituicao.razao_social',
                'instituicao.nome_instituicao',
                'instituicao.cnpj',
                'instituicao.numero',
                'instituicao.telefone',
                'instituicao.bairro',
                'instituicao.cidade',
                'instituicao.estado',
                'instituicao.cep',
                'instituicao.nome_rep',
                'instituicao.cargo_rep',
                'instituicao.telefone',
                'instituicao.rua'
            )
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $horarios = DB::table('horario')
            ->join('tce_rescisao', 'horario.id', '=', 'tce_rescisao.horario_id')
            ->select('horario.descricao')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $atividades = DB::table('atividade')
            ->join('tce_rescisao', 'atividade.id', '=', 'tce_rescisao.atividade_id')
            ->select('atividade.nome')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $seguros = DB::table('seguradora')
            ->join('tce_rescisao', 'seguradora.id', '=', 'tce_rescisao.apolice_id')
            ->select('seguradora.nome')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $supervisores = DB::table('supervisor')
            ->join('tce_rescisao', 'supervisor.id', '=', 'tce_rescisao.supervisor_id')
            ->select('supervisor.nome', 'supervisor.cargo', 'supervisor.formacao', 'supervisor.email')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $orientadores = DB::table('orientador')
            ->join('tce_rescisao', 'orientador.id', '=', 'tce_rescisao.orientador_id')
            ->select('orientador.nome')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $beneficios = DB::table('beneficio')
            ->join('tce_rescisao', 'beneficio.id', '=', 'tce_rescisao.beneficio_id')
            ->select('beneficio.nome')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $tceContrato = DB::table('tce_rescisao')
            ->select(
                'tce_rescisao.data_inicio',
                'tce_rescisao.data_fim',
                'tce_rescisao.bolsa',
                'tce_rescisao.data_doc',
                'tce_rescisao.created_at')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        $motivos = DB::table('motivo')
            ->join('tce_rescisao', 'motivo.id', '=', 'tce_rescisao.motivo_id')
            ->select('motivo.nome')
            ->where('tce_rescisao.id', '=', $id)
            ->get();

        // dd($motivos);

        $data = ['estagiarios' => $estagiarios, 'instituicoes' => $instituicoes,
            'empresas' => $empresas, 'horarios' => $horarios, 'atividades' => $atividades,
            'seguros' => $seguros, 'supervisores' => $supervisores, 'orientadores' => $orientadores,
            'tceContrato' => $tceContrato, 'beneficios' => $beneficios, 'motivos' => $motivos];
        $pdf = PDF::loadView('pdf.rescisao.index', $data);
        return $pdf->stream('rescisao.pdf');
    }
}
