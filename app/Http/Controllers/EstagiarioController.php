<?php

namespace App\Http\Controllers;
use DB;
use App\Endereco;
use App\Estagiario;
use App\Estado;
use App\Cidade;
use Illuminate\Http\Request;

class EstagiarioController extends Controller
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
        // return view('estagiario.edit', compact('nome', 'estado'));
        // $estagiarios = Estagiario::count();
        $estagiarios = Estagiario::all();
        return view('estagiario.index', compact('estagiarios', $estagiarios));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $estados = Estado::with('cidade')->get();
        // return view('estagiario.create', compact('estados'));

        // $estados = Estado::all();
        // // $cidade = Cidade::with('estado')->get();
        // // //  $roles = Roles::all();
        // //  $cidade = Cidade::first()->estado_id;

        // $cidade = DB::table('estado')
        // ->join('cidade', 'cidade.estado_id', '=' , 'estado.id')
        // ->select('estado.nome', 'estado_id', 'cidade.nome')
        // ->get()->toArray();

        // $estado = Estado::all();
        // return view('estagiario.create', ['estados' => $estados,
        // 'cidade'=>$cidade,'estado'=>$estado]);
        return view('estagiario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:estagiario,email',
        ]);
        Estagiario::create($request->all());
        return redirect()->route('estagiario.index')
                        ->with('success','Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function show(Estagiario $estagiario)
    {
        return view('estagiario.show', compact('estagiario', $estagiario));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function edit (Estagiario $estagiario)
    {
        //dd($estagiario);
        // $estagiario = Estagiario::findOrFail($id);
        return view('estagiario.edit', compact('estagiario', $estagiario));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estagiario $estagiario)
    {
        $request->validate([

            'nome' => 'required',
            'email' => 'required',
        ]);

        $estagiario->update($request->all());
        $estagiario->save();
        $request->session()->flash('message', 'Sucesso!');
        return redirect('estagiario');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Estagiario $estagiario)
    {
        $estagiario->delete();
        $request->session()->flash('warning', 'Removido com sucesso!');
        return redirect('estagiario');

    }

}