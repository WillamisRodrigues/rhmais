<?php

namespace App\Http\Controllers;

use App\Cau;
use DB;
use Illuminate\Http\Request;

class CauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = DB::table('empresa')
            ->join('cau', 'empresa.id', '=', 'cau.empresa_id')
            ->join('cidade', 'empresa.city', '=', 'cidade.id')
            ->select(
                'empresa.id',
                'empresa.nome_fantasia',
                'cau.data_inicio',
                'cau.data_fim',
                'cau.situacao'
            )
            ->get();
        return view('cau_convenio.index',  compact('empresas', $empresas));
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
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function show(Cau $cau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function edit(Cau $cau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cau $cau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cau  $cau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cau $cau)
    {
        //
    }
}
