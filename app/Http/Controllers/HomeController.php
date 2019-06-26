<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Estagiario;
use App\Instituicao;
use App\Empresa;

class HomeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $totalEstagiario = Estagiario::count();
         $totalInstituicao = Instituicao::count();
         $totalEmpresa = Empresa::count();
        return view('home.index',compact('totalEstagiario', 'totalInstituicao','totalEmpresa'));
    }
}
