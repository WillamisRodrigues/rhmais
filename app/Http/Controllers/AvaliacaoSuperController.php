<?php

namespace App\Http\Controllers;

use App\AvaliacaoSuper;
use Illuminate\Http\Request;

class AvaliacaoSuperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avaliacao = AvaliacaoSuper::all();
        return view('avalicao_supervisor.index', compact('avaliacao'));
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
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function show(AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function edit(AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AvaliacaoSuper  $avaliacaoSuper
     * @return \Illuminate\Http\Response
     */
    public function destroy(AvaliacaoSuper $avaliacaoSuper)
    {
        //
    }
}
