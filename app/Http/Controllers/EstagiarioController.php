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
       $estagiarios = Estagiario::all();
        return view('estagiario.index', compact('estagiarios', $estagiarios));
    }

    public function getEstados()
    {
        $estados = DB::table("estado")->pluck("nome","id");
        return view('estagiario.create',compact('estados'));
    }

    public function getCidades($id)
    {
        $cidades = DB::table("cidade")
                    ->where("estado_id",$id)
                    ->pluck("nome","id");
        return json_encode($cidades);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('estagiario.create');
    }

        public function myform()
    {
        $states = DB::table("estado")->pluck("nome","id");
        return view('myform',compact('states'));

    }
    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */

    public function myformAjax($id)
    {
        $cities = DB::table("cidade")
                    ->where("estado_id",$id)
                    ->pluck("nome","id");
        return json_encode($cities);
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
        // return view('estagiario.show', compact('estagiario', $estagiario));
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