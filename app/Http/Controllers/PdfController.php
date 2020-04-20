<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Estagiario;
use App\Instituicao;
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

    public function generateCau($id)
    {

        $contrato = DB::table('cau')
            ->join('empresa', 'cau.empresa_id', '=', 'empresa.id')
            ->where('cau.id', '=', $id)
            ->get();

        $data = ['contrato' => $contrato];
        $pdf = PDF::loadView('pdf.cau.index', $data);
        return $pdf->stream('index.pdf');
    }
    public function planoEstagio($id)
    {
        $estagiarios = DB::table('estagiario')
            ->join('plano_estagio', 'estagiario.id', '=', 'plano_estagio.estagiario_id')
            ->select(
                'estagiario.nome',
                'estagiario.cpf',
                'estagiario.curso',
                'estagiario.matricula',
                'estagiario.periodo'
            )
            ->where('estagiario.id', '=', $id)
            ->get();

        $empresas = DB::table('empresa')
            ->join('plano_estagio', 'empresa.id', '=', 'plano_estagio.empresa_id')
            ->select(
                'empresa.razao_social',
                'empresa.cnpj',
                'empresa.nome_fantasia',
                'empresa.nome_rep',
                'empresa.cargo_rep',
                'empresa.telefone'
            )
            ->where('plano_estagio.estagiario_id', '=', $id)
            ->get();

        $instituicoes = DB::table('instituicao')
            ->join('plano_estagio', 'instituicao.id', '=', 'plano_estagio.instituicao_id')
            ->select(
                'instituicao.razao_social',
                'instituicao.nome_instituicao',
                'instituicao.cnpj',
                'instituicao.nome_rep',
                'instituicao.cargo_rep',
                'instituicao.telefone',
                'instituicao.rua'
            )
            ->where('plano_estagio.estagiario_id', '=', $id)
            ->get();

        $plano = DB::table('plano_estagio')
            ->select('plano', 'atividade', 'obs')
            ->where('plano_estagio.estagiario_id', '=', $id)
            ->get();

        $supervisores = DB::table('supervisor')
            ->join('plano_estagio', 'supervisor.id', '=', 'plano_estagio.supervisor_id')
            ->select('supervisor.nome', 'supervisor.cargo', 'supervisor.formacao', 'supervisor.email', 'supervisor.telefone')
            ->where('plano_estagio.estagiario_id', '=', $id)
            ->get();

        $tceContrato = DB::table('tce_contrato')
            ->select(
                'tce_contrato.data_inicio',
                'tce_contrato.data_fim',
                'tce_contrato.bolsa',
                'tce_contrato.obrigatorio',
                'tce_contrato.data_doc',
                'tce_contrato.created_at')
            ->where('tce_contrato.estagiario_id', '=', $id)
            ->get();

        $data = ['estagiarios' => $estagiarios, 'instituicoes' => $instituicoes,
            'empresas' => $empresas, 'supervisores' => $supervisores,
            'tceContrato' => $tceContrato, 'plano' => $plano];
        $pdf = PDF::loadView('pdf.plano.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function generateCce($id)
    {
        $contrato = DB::table('cce')
            ->join('instituicao', 'cce.instituicao_id', '=', 'instituicao.id')
            ->where('cce.id', '=', $id)
            ->get();

        $data = ['contrato' => $contrato];
        $pdf = PDF::loadView('pdf.cce.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function generateHolerite(Request $request)
    {
        $ref = request("referencia");
        $und = request('unidade_id');

        if (request('unidade_id') !== null || request('referencia') == !null) {

            $folhas = DB::table('estagiario')
                ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->where('folha_pagamento.status', '=', 1)
                ->where('folha_pagamento.empresa_id', '=', $und)
                ->where('folha_pagamento.referencia', '=', $ref)
                ->get();
        } else {
            $folhas = DB::table('estagiario')
                ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->where('folha_pagamento.status', '=', 1)
                ->where('folha_pagamento.empresa_id', '=', $und)
                ->where('folha_pagamento.referencia', '=', $ref)
                ->get();
        };
        $data = ['folhas' => $folhas];
        $pdf = PDF::loadView('pdf.holerite.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function gerarHolerite($id)
    {

        $folhas = DB::table('estagiario')
            ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
            ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
            ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
            ->where('folha_pagamento.status', '=', 1)
            ->whereMonth('folha_pagamento.created_at', '=', date('m'))
            ->where('folha_pagamento.id', '=', $id)
            ->get();

        $data = ['folhas' => $folhas];
        $pdf = PDF::loadView('pdf.holerite.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function rescisaoHoleriteGeral(Request $request)
    {
        $ref = request("referencia");
        $und = request('unidade_id');

        if (request('unidade_id') !== null || request('referencia') == !null) {

            $folhas = DB::table('estagiario')
                ->join('folha_rescisao', 'estagiario.id', '=', 'folha_rescisao.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->where('folha_rescisao.status', '=', 1)
                ->where('folha_rescisao.empresa_id', '=', $und)
                ->where('folha_rescisao.referencia', '=', $ref)
                ->get();

            $estagiarios = DB::table('estagiario')
                ->join('folha_rescisao', 'estagiario.id', '=', 'folha_rescisao.estagiario_id')
                ->where('folha_rescisao.empresa_id', '=', $und)
                ->where('folha_rescisao.referencia', '=', $ref)
                ->get();

            $instituicoes = Instituicao::all();
            $empresas = Empresa::all();

        } else {
            $folhas = DB::table('estagiario')
                ->join('folha_rescisao', 'estagiario.id', '=', 'folha_rescisao.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->where('folha_rescisao.status', '=', 1)
                ->where('folha_rescisao.empresa_id', '=', $und)
                ->where('folha_rescisao.referencia', '=', $ref)
                ->get();
        };
        $data = ['folhas' => $folhas,
            'instituicoes' => $instituicoes,
            'empresas' => $empresas,
            'estagiarios' => $estagiarios,
        ];
        $pdf = PDF::loadView('pdf.rescisao.index', $data);
        return $pdf->stream('index.pdf');
    }
    public function rescisaoFolha($id)
    {
        $estagiarios = DB::table('estagiario')
            ->join('plano_estagio', 'estagiario.id', '=', 'plano_estagio.estagiario_id')
            ->select(
                'estagiario.nome',
                'estagiario.cpf',
                'estagiario.curso',
                'estagiario.matricula',
                'estagiario.periodo'
            )
            ->where('estagiario.id', '=', $id)
            ->get();

        // $horarios = DB::table('horario')
        //     ->join('folha_rescisao', 'horario.id', '=', 'folha_rescisao.horario_id')
        //     ->select('horario.descricao')
        //     ->where('folha_rescisao.estagiario_id', '=', $id)
        //     ->get();

        $folhaRescisao = DB::table('estagiario')
            ->join('folha_rescisao', 'estagiario.id', '=', 'folha_rescisao.estagiario_id')
            ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
            ->join('tce_rescisao', 'estagiario.id', '=', 'tce_rescisao.estagiario_id')
            ->where('folha_rescisao.folha_id', '=', $id)
            ->get();

        $instituicoes = DB::table('instituicao')
            ->join('estagiario', 'instituicao.id', '=', 'estagiario.instituicao_id')
            ->select(
                'instituicao.razao_social',
                'instituicao.nome_instituicao',
                'instituicao.cnpj',
                'instituicao.nome_rep',
                'instituicao.cargo_rep',
                'instituicao.telefone',
                'instituicao.rua'
            )
            ->where('estagiario.id', '=', $id)
            ->get();

        $empresas = DB::table('empresa')
            ->join('estagiario', 'empresa.id', '=', 'estagiario.empresa_id')
            ->select(
                'empresa.razao_social',
                'empresa.cnpj',
                'empresa.nome_fantasia',
                'empresa.nome_rep',
                'empresa.cargo_rep',
                'empresa.telefone'
            )
            ->where('estagiario.id', '=', $id)
            ->get();

        // $motivos = DB::table('motivo')
        //     ->join('tce_rescisao', 'motivo.id', '=', 'tce_rescisao.motivo_id')
        //     ->select('motivo.nome')
        //     ->where('estagiario.id', '=', $id)
        //     ->get();

        $data = ['folhaRescisao' => $folhaRescisao,
            'instituicoes' => $instituicoes,
            'empresas' => $empresas,
            'estagiarios' => $estagiarios,
            // 'horarios' => $horarios,
            // 'motivos' => $motivos,
        ];
        $pdf = PDF::loadView('pdf.rescisao.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function rescisaoFolhaGeral(Request $request)
    {
        $ref = request("referencia");
        $und = request('unidade_id');

        if (request('unidade_id') !== null || request('referencia') == !null) {

            $folhaRescisao = DB::table('estagiario')
                ->join('folha_rescisao', 'estagiario.id', '=', 'folha_rescisao.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_rescisao', 'estagiario.id', '=', 'tce_rescisao.estagiario_id')
                ->where('folha_rescisao.empresa_id', '=', $und)
                ->where('folha_rescisao.referencia', '=', $ref)
                ->get();

        } else {
            $folhaRescisao = DB::table('estagiario')
                ->join('folha_rescisao', 'estagiario.id', '=', 'folha_rescisao.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_rescisao', 'estagiario.id', '=', 'tce_rescisao.estagiario_id')
                ->where('folha_rescisao.empresa_id', '=', $und)
                ->where('folha_rescisao.referencia', '=', $ref)
                ->whereMonth('folha_rescisao.created_at', '=', date('m'))
                ->get();
        }
        $data = ['folhaRescisao' => $folhaRescisao];
        $pdf = PDF::loadView('pdf.valores_rescisao.index', $data);
        return $pdf->stream('index.pdf');
    }

    public function generateFolha(Request $request)
    {

        $ref = request("referencia");
        $und = request('unidade_id');

        if (request('unidade_id') !== null || request('referencia') == !null) {

            $folha = DB::table('estagiario')
                ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->where('folha_pagamento.status', '=', 1)
                ->where('folha_pagamento.empresa_id', '=', $und)
                ->where('folha_pagamento.referencia', '=', $ref)
                ->get();

        }
        // Um Folha Específica
        else {
            $folha = DB::table('estagiario')
                ->join('folha_pagamento', 'estagiario.id', '=', 'folha_pagamento.estagiario_id')
                ->join('empresa', 'estagiario.empresa_id', '=', 'empresa.id')
                ->join('tce_contrato', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
                ->whereMonth('folha_pagamento.created_at', '=', date('m'))
                ->where('folha_pagamento.status', '=', 1)
                ->where('folha_pagamento.empresa_id', '=', $und)
                ->get();
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

        $data = ['estagiarios' => $estagiarios, 'instituicoes' => $instituicoes,
            'empresas' => $empresas, 'horarios' => $horarios, 'atividades' => $atividades,
            'seguros' => $seguros, 'supervisores' => $supervisores, 'orientadores' => $orientadores,
            'tceContrato' => $tceContrato, 'beneficios' => $beneficios, 'motivos' => $motivos];
        $pdf = PDF::loadView('pdf.rescisao.index', $data);
        return $pdf->stream('rescisao.pdf');
    }
}
