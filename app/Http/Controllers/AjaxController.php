<?php

namespace App\Http\Controllers;

use App\BeneficioEstagiario;
use DataTables;
use DB;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beneficio_estagiario($id)
    {
        $id_estagiario = $id;
        $data = date("m");

        $estagiario = DB::table('beneficio')
            ->join('beneficio_estagiario', 'beneficio.id', '=', 'beneficio_estagiario.beneficio_id')
            ->where('estagiario_id', '=', $id_estagiario)
            ->whereMonth('beneficio_estagiario.created_at', '=', $data)
            ->get();
        return Datatables::of($estagiario)
            ->addColumn('action', function ($row) {
                $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"> <i class="fa fa-trash"></i> Delete</a>';
                return $btn;
            })->addColumn('tipo_folha', function ($row) {
            if ($row->tipo == 1) {
                $tipo = 'Crédito';
            } elseif ($row->tipo == 2) {
                $tipo = 'Débito';
            } else {
                $tipo = 'Indefinido';
            }
            return $tipo;
        })->addColumn('valor_real', function ($row) {
            $valor = number_format($row->valor, 2, ',', '.');
            // $valor = $row->valor;
            return "R$ " . $valor;

        })->rawColumns(['action', 'tipo_folha', 'valor_real'])
            ->make(true);

    }

    public function saldo($id)
    {
        $referencia = date("Y/m");
        $saldo = DB::table('folha_pagamento')
            ->where('referencia', '=', $referencia)
            ->where('estagiario_id', '=', $id)
            ->get();

        return response()->json($saldo);
        // return Datatables::of($saldo)->make(true);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BeneficioEstagiario::updateOrCreate(['id' => $request->product_id],
            [
                'valor' => str_replace(',', '.', $request->valor),
                'tipo' => $request->tipo,
                'estagiario_id' => $request->estagiario_id,
                'beneficio_id' => $request->beneficio_id,
                'folha_id' => $request->folha_id,
            ]);

        return response()->json(['success' => 'Evento lançado.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        BeneficioEstagiario::find($id)->delete();
        return response()->json(['success' => 'Atualizado com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BeneficioEstagiario::find($id)->delete($id);
        return response()->json(['warning' => 'Removido com sucesso!']);
    }

}
