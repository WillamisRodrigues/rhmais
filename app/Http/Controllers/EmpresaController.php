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
            return view('empresa/index');
    }

  public function empresas()
    {
        $emp = Empresa::all();
         return view('cadastro.empresas',['empresas' => $emp]);
     }

    public function edit()
    {
        return view('edit-empresa',['empresa' => Empresa::where(request('id_empresa'))->firstOrFail()]);
    }

    public function add()
    {
        return view('cadastro.add-empresa');
    }
    public function store()
    {
        if(request('id') == 0){
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);
            DB::beginTransaction();
            $emp = Empresa::create([
                "razao_social" => request('razao_social'),
                "cnpj" => request('cnpj'),
                "insc_estadual" => request('insc_estadual'),
                "telefone" => request('telefone'),
                "celular" => request('celular'),
                "site_url" => request ('site_url')
            ]);
            DB::commit();
        }else{

            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);
            DB::beginTransaction();
            $emp =  Empresa::whereId(request('id'))->firstOrFail();
            if($emp){
                $emp->name = request('name');
                $emp->email = request('email');
                $emp->password = bcrypt(request('password'));
                $emp->save();
            }
            DB::commit();
        }
        return $this->index();
        //auth()->login($emp);


    }

    public function delete()
    {
        $message = new Message();
        $message->message ="";
        $message->type ="";
        try{
            DB::beginTransaction();

            Empresa::whereId(request("id_empresa"))->delete();

            DB::commit();
            $message->message = 'empresa excluída com sucesso';
            $message->type="success";
        }
        catch (\Exception $e)
        {
            DB::rollback();
            $message->message = $e->getMessage();
            $message->type="error";
        }
        return $this->index()->with(['message' => $message,'emps' =>Empresa::all()]);
    }

}