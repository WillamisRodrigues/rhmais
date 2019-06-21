<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Redirect;
 use App\Empresa;
use App\Message;

class EmpresaController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
          $empresas = Empresa::all();
            return view('empresa.index',compact('empresas', $empresas));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
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
            'nome' => 'required|min:3',
            'email' => 'required',
        ]);

        $inst = Instituicao::create(['nome' => $request->nome,'email' => $request->email]);
        return redirect('/empresa/'.$usr->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $emp
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $emp)
    {
        return view('empresa.show',compact('empresa',$emp));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $emp
     * @return \Illuminate\Http\Response
     */
    public function edit(Instituicao $emp)
    {
        return view('empresa.edit',compact('empresa',$emp));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $emp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $emp)
    {
       //Validate
        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required',
        ]);

        $usr->nome = $request->nome;
        $usr->email = $request->email;
        $usr->save();
        $request->session()->flash('message', 'Atualizado com sucesso!');
        return redirect('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $emp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $emp)
    {
       $usr->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('empresa');
    }
}

