<?php

namespace App\Http\Controllers;

use App\Recesso;
use App\TceContrato;
use DB;
use DateTime;
use Illuminate\Http\Request;

class RecessoController extends Controller
{
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

        $dataContrato = TceContrato::all();

        $data1text = DB::table('tce_contrato')->where([['data_inicio', '=', $dataContrato]])->get();
        $data2text = DB::table('tce_contrato')->where([['data_fim', '=', $dataContrato]])->get();
        $bolsa = DB::table('tce_contrato')->where('bolsa', '=', $dataContrato)->get();
        $date = date('Y');

        $data1text = $date->format('Y-m-d ') . $data1text;
        $$data2text = $date->format('Y-m-d ') . $data2text;
        $date1 = DateTime::createFromFormat('Y-m-d H:i', $data1text);
        $date2 = DateTime::createFromFormat('Y-m-d H:i', $data2text);

        $meses = $date2->diffInMonths($date1); // saída: 365 dias
        // $date1 = new DateTime($data1text);
        // $date2 = new DateTime($data2text);
        //Repare que inverto a ordem, assim terei a subtração da ultima data pela primeira.
        //Calculando a diferença entre os meses
        // $meses = ((int) $date2->format('m') - (int) $date1->format('m'))
        //     //    e somando com a diferença de anos multiplacado por 12
        //     + (((int) $date2->format('y') - (int) $date1->format('y')) * 12);
        if ($meses <= 12) {
            $soma = $bolsa / 12;
            $resultado = $soma * $meses;
            // echo $resultado;
        } else {
            $soma = $bolsa / 24;
            $resultado = $soma * $meses;
        }
        return view('termo.index', [
            'recessos' => $recessos,
            'dataContrato' => $data1text,
            'dataFim' => $data2text,
            'dataAgora' => $date,
            'bolsa' => $bolsa,
            'meses' => $meses,
            'resultado' => $resultado
            ]);
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
    public function edit(Recesso $recesso)
    {
        //
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
}
