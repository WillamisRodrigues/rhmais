<?php

namespace App\Http\Controllers;

use App\BeneficioEstagiario;
use Illuminate\Http\Request;
use DataTables;
use DB;


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
        $estagiario = DB::table('beneficio_estagiario')
        ->join('beneficio', 'beneficio_estagiario.beneficio_id', '=', 'beneficio.id')
        ->where('estagiario_id','=',$id_estagiario)
        ->get();
        return Datatables::of($estagiario)
        ->addColumn('action', function($row){
            $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"> <i class="fa fa-trash"></i> Delete</a>';
             return $btn;
        })->addColumn('tipo_folha', function($row){
            if($row->tipo == 1){
                $tipo = 'Crédito';
            }elseif($row->tipo ==2){
                $tipo = 'Débito';
            }else{
                $tipo = 'Indefinido';
            }
            return $tipo;
        })->addColumn('valor_real', function($row){
            $valor = number_format($row->valor, 2, ',', '.');
            return "R$ ".$valor;
        
        })->rawColumns(['action','tipo_folha','valor_real'])
        ->make(true);

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
                ['referencia' => $request->referencia,
                'valor' => $request->valor,
                'tipo' => $request->tipo,
                'estagiario_id' => $request->estagiario_id,
                'beneficio_id' => $request->beneficio_id,
                'empresa_id' => $request->empresa,
                'folha_id' => $request->folha,
                ]);
        return response()->json(['success'=>'Evento lançado.']);
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
        return response()->json(['success'=>'Product deleted successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BeneficioEstagiario::find($id)->delete();
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
