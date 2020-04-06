<?php

namespace App\Http\Controllers;

use App\Beneficio;
use App\Horario;
use App\Recesso;
use App\Seguradora;
use App\Setor;
use DateInterval;
use DateTime;
use DB;
use Illuminate\Http\Request;

class RecessoController extends Controller
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
        $recessos = DB::table('tce_contrato')
            ->join('estagiario', 'estagiario.id', '=', 'tce_contrato.estagiario_id')
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
                'tce_contrato.obrigatorio',
                'tce_contrato.id As tceId'
            )
            ->get();

        $data1text = DB::table('tce_contrato')->where([['data_inicio', '=', $recessos[0]->data_inicio]])->get();
        $data2text = DB::table('tce_contrato')->where([['data_fim', '=', $recessos[0]->data_fim]])->get();
        $bolsa = DB::table('tce_contrato')->where('bolsa', '=', $recessos[0]->bolsa)->get();
        $date = date('Y');

        $sub_valor = substr($bolsa[0]->bolsa, 0, 4);
        $valor = str_replace(',', '.', str_replace('.', '', $sub_valor));

        $date1 = DateTime::createFromFormat('Y-m-d H:i', $data1text[0]->data_inicio);
        $date2 = DateTime::createFromFormat('Y-m-d H:i', $data2text[0]->data_fim);

        //Repare que inverto a ordem, assim terei a subtração da ultima data pela primeira.
        //Calculando a diferença entre os meses
        $meses = ((int) date('m', $date2) - (int) date('m', $date1))
        //     //    e somando com a diferença de anos multiplacado por 12
         + (((int) date('y', $date2) - (int) date('y', $date1)) * 12);
        if ($meses <= 12) {
            // $soma = is_float($bolsa[0]->bolsa) / 12;
            $soma = $valor / 12;
            $resultado = $soma * $meses;
            // echo $resultado;
        } else {
            // $soma = $bolsa[0]->bolsa / 24;
            $soma = $valor / 24;
            $resultado = $soma * $meses;
        }

        $listaRecessos = DB::table('recesso')->get();

        return view('termo.index', [
            'listaRecessos' => $listaRecessos,
            'dataContrato' => $data1text,
            'dataFim' => $data2text,
            'dataAgora' => $date,
            'bolsa' => $bolsa,
            'meses' => $meses,
            'recessos' => $recessos,
            'resultado' => $resultado,
        ]);
    }

    public static function valorFerias($dataInicio, $valorBolsa)
    {
        $data1text = $dataInicio;
        $data2text = date('Y');

        $date1 = new DateTime($data1text);
        $date2 = new DateTime($data2text);
        //Repare que inverto a ordem, assim terei a subtração da ultima data pela primeira.
        //Calculando a diferença entre os meses
        //    e somando com a diferença de anos multiplacado por 12
        $meses = ((int) $date2->format('m') - (int) $date1->format('m'))
             + (((int) $date2->format('y') - (int) $date1->format('y')) * 12);

        $sub_valorB = substr($valorBolsa, 0, 4);
        $valorB = str_replace(',', '.', str_replace('.', '', $sub_valorB));

        if ($meses <= 12) {
            // $soma = $valorBolsa / 12;
            $soma = $valorB / 12;
            $resultado = $soma * $meses;
            $resultado = number_format($resultado, 2, ",", ".");
        } else {
            $mesesExcedentes = $meses - 12;
            // $soma = $valorBolsa / 12;
            $soma = $valorB / 12;
            $resultado = $soma * $mesesExcedentes;
            // $resultado = number_format($resultado + $valorBolsa, 2, ",", ".");
            $resultado = number_format($resultado + $valorB, 2, ",", ".");
            // number_format($valorBolsa, 2, '.', ',')." + R$ ".
        }

        return $resultado;
    }

    public static function valorSaldo($tceId)
    {
        $contrato = DB::table('tce_contrato')->where('id', '=', $tceId)->get()->first();

        $saldo = 0;

        return $saldo;
    }

    public static function diasFerias($dataInicio, $dataFim)
    {
        $data1text = $dataInicio;
        $data2text = date('Y');

        $date1 = new DateTime($data1text);
        $date2 = new DateTime($data2text);
        //Repare que inverto a ordem, assim terei a subtração da ultima data pela primeira.
        //Calculando a diferença entre os meses
        //    e somando com a diferença de anos multiplacado por 12
        $meses = ((int) $date2->format('m') - (int) $date1->format('m')) + (((int) $date2->format('y') - (int) $date1->format('y')) * 12);

        return $meses;
    }

    public static function periodoAquisitivo($tceId)
    {
        $contrato = DB::table('tce_contrato')->where('id', '=', $tceId)->get()->first();
        $dataInicio = $contrato->data_inicio;
        $dataFim = $contrato->data_fim;

        $dataInicioObj = new DateTime($dataInicio);
        $dataFimObj = new DateTime($dataFim);
        $dataInicioStr = $dataInicioObj->format('d/m/Y');
        $dataFimStr = $dataFimObj->format('d/m/Y');

        $AnoQueVem = $dataInicioObj->add(new DateInterval('P1Y'));
        $AnoQueVemStr = $AnoQueVem->format('d/m/Y');
        $AnoQueVemMaisUmDia = $AnoQueVem->add(new DateInterval('P1D'));
        $AnoQueVemMaisUmDiaStr = $AnoQueVemMaisUmDia->format('d/m/Y');

        $meses = RecessoController::diasFerias($dataInicio, $dataFim);

        if ($meses > 12) {
            $mesesExcedentes = $meses - 12;
            $meses = 12;
            $dias = 30.0;
            $diasExcedentes = $mesesExcedentes * 2.5;
            $excedente = "$mesesExcedentes/12 $diasExcedentes Dias";
        } else {
            $dias = $meses * 2.5;
            $excedente = "n/c";
        }

        $recesso = DB::table('recesso')->where('estagiario_id', '=', $contrato->estagiario_id)->get()->first();

        if ($recesso) {
            $data1text = $recesso->data_inicio;
            $data2text = $recesso->data_fim;

            $date1 = new DateTime($data1text);
            $date2 = new DateTime($data2text);

            $diasFerias = ((int) $date2->format('d') - (int) $date1->format('d')) + (((int) $date2->format('m') - (int) $date1->format('m')) * 30) + (((int) $date2->format('y') - (int) $date1->format('y')) * 360);
            $dias = $dias - $diasFerias;
        }

        return "$dataInicioStr $AnoQueVemStr $meses/12 $dias Dias $AnoQueVemMaisUmDiaStr $dataFimStr $excedente";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //para cada 2.5 dias de férias o fulano recebe o valor referente a (bolsa / 12)
        $data1text = $request->inicio_recesso;
        $data2text = $request->fim_recesso;

        $date1 = new DateTime($data1text);
        $date2 = new DateTime($data2text);

        $dias = ((int) $date2->format('d') - (int) $date1->format('d')) + (((int) $date2->format('m') - (int) $date1->format('m')) * 30) + (((int) $date2->format('y') - (int) $date1->format('y')) * 360);

        $valorReceber = ($dias / 2.5) * ($request->bolsa / 12);

        $contrato = DB::table('tce_contrato')->where('id', '=', $request->contrato_id)->get()->first();
        $dataInicio = $contrato->data_inicio;
        $dataFim = $contrato->data_fim;

        $meses = RecessoController::diasFerias($dataInicio, $dataFim);

        $valorDireito = $meses * ($request->bolsa / 12);

        $valorRestante = $valorDireito - $valorReceber;

        $valorReceber = number_format($valorReceber, 2, '.', ',');
        $valorDireito = number_format($valorDireito, 2, '.', ',');
        $valorRestante = number_format($valorRestante, 2, '.', ',');

        DB::insert(
            'insert into recesso
        (estagiario_id, empresa_id, bolsa, data_inicio, data_fim, vr_direito, vr_recebido, vr_saldo, periodo, ferias) values
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$request->estagiario_id, $request->empresa_id, $request->bolsa, $request->inicio_recesso, $request->fim_recesso, $valorDireito, $valorReceber, $valorRestante, $request->observacao, $request->motivo_id]
        );

        return redirect()->route('termo_recesso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function show(Recesso $recesso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estagiario = DB::table('estagiario')->where('id', '=', $id)->get()->first();
        $contrato = DB::table('tce_contrato')->where('estagiario_id', '=', $id)->get()->first();
        $empresa = DB::table('empresa')->where('id', '=', $contrato->empresa_id)->get()->first();
        // dd($empresa = DB::table('empresa')->where('id', $contrato->empresa_id)->pluck('id', 'nome_fantasia'));
        $instituicao = DB::table('instituicao')->where('id', '=', $contrato->instituicao_id)->get()->first();
        $orientador = DB::table('orientador')->where('id', '=', $contrato->orientador_id)->get()->first();
        $supervisor = DB::table('supervisor')->where('id', '=', $contrato->supervisor_id)->get()->first();
        // $atividade = DB::table('atividade')->where('id', '=', $contrato->atividade)->get()->first();
        $motivos = DB::table('motivo')->get();

        $apolices = Seguradora::all();
        $setores = Setor::all();
        $beneficios = Beneficio::all();
        $horarios = Horario::all();

        // dd($atividade);

        return view('termo.update', [
            'estagiario' => $estagiario,
            'contrato' => $contrato,
            'empresa' => $empresa,
            'instituicao' => $instituicao,
            'orientador' => $orientador,
            'supervisor' => $supervisor,
            // 'atividade' => $atividade,
            'motivos' => $motivos,
            'apolices' => $apolices,
            'setores' => $setores,
            'beneficios' => $beneficios,
            'horarios' => $horarios,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recesso $recesso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recesso  $recesso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recesso $recesso)
    {
        //
    }

    public static function dias_Ferias($inicio, $fim)
    {
        $data1text = $inicio;
        $data2text = $fim;

        $date1 = new DateTime($data1text);
        $date2 = new DateTime($data2text);

        $dias = ((int) $date2->format('d') - (int) $date1->format('d')) + (((int) $date2->format('m') - (int) $date1->format('m')) * 30) + (((int) $date2->format('y') - (int) $date1->format('y')) * 360);

        $inicio = $date1->format("d/m/Y");
        $fim = $date2->format("d/m/Y");

        echo "De " . $inicio . " Até " . $fim . " Total: ";

        echo $dias . " Dias";
    }
    public function recessoList()
    {

        // $recesso = Recesso::all();
        $recesso = DB::table('recesso')
            ->join('estagiario', 'estagiario.id', '=', 'recesso.estagiario_id')
            ->join('empresa', 'empresa.id', '=', 'recesso.empresa_id')
            ->get();

        // dd($recesso);
        return view('recesso.index', compact('recesso', $recesso));
    }

    public function assinado($id)
    {
        DB::update('update recesso set recesso_assinado = 1 where id = ?', [$id]);
        return redirect('lista_recesso');
    }
}
