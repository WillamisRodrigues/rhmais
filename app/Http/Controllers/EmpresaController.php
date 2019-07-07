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
            'nome_fantasia' => 'required',
            'cnpj' => 'required',
        ]);

        Empresa::create($request->all());

        return redirect()->route('empresa.index')
                        ->with('success','Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show',compact('empresa',$empresa));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit',compact('empresa',$empresa));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
       //Validate
        $request->validate([
            'razao_social' => 'required',
            'cnpj' => 'required',
        ]);

        $empresa->update($request->all());
        $empresa->save();
        $request->session()->flash('message', 'Atualizado com sucesso!');
        return redirect('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
       $empresa->delete();
        $request->session()->flash('message', 'Removido com sucesso!');
        return redirect('empresa');
    }
}

