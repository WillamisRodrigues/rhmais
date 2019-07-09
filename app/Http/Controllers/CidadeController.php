<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $estadoModel;
    public function __construct(Estado $estado)
    {
        $this->estadoModel = $estado;
    }
    public function index()
    {
        // $cidades = Cidade::all();
        $estados = $this->estadoModel->pluck('nome', 'id');
        return view('cidade', compact('estados'));

        // $cidades = DB::table('cidade')->paginate(5);
        // return view('cidade.index', compact('cidades', $cidades));
    }
     public function getCidades($idEstado)
    {
        $estado = $this->estadoModel->find($idEstado);
        $cidades = $estado->cidades()->getQuery()->get(['id', 'nome']);
        return Response::json($cidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cidade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cidade $cidades)
    {
        // Insere uma nova categoria, de acordo com os dados informados pelo usuário
    $insert = $cidades->create($request->all());
    // Verifica se inseriu com sucesso
    // Redireciona para a listagem das categorias
    // Passa uma session flash success (sessão temporária)
    if ($insert)
        return redirect()
                    ->route('cidade.index')
                    ->with('success', 'Cidade cadastrada com sucesso!');

    // Redireciona de volta com uma mensagem de erro
    return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        //
    }
}
