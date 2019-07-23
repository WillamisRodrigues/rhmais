<?php

namespace App\Http\Controllers;
use DB;
use App\Estagiario;
use App\Empresa;
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
       $estagiarios = DB::table('estagiario')
       ->join('endereco', 'estagiario.id', '=', 'endereco.estagiario_id')
       ->select('endereco.cidade', 'estagiario.nome','estagiario.und_concedente','estagiario.celular',
       'estagiario.cpf','estagiario.data_nascimento','estagiario.id')
       ->get();
        return view('estagiario.index', compact('estagiarios', $estagiarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = DB::table("estado")->pluck("nome","id");
        $empresas = Empresa::all();
       return view('estagiario.create', compact('states','empresas'));
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

     public function endereco($id)
    {
        $enderecos = DB::table("endereco")
                    ->where("estagiario_id",$id)
                    ->pluck("cidade","id");
        return json_encode($enderecos);
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