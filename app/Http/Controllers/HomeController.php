<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Charts\HomeChart;
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
          $chart = new HomeChart;
          $chart->displayAxes(false);
          $chart->labels(['Masc', 'Fem']);
           $chart->dataset('Sample Test', 'pie', [3,4]);

        return view('home.index',compact('totalEstagiario', 'totalInstituicao','totalEmpresa','chart'));

    }

      public function grafico()
    {
         $totalEstagiario = Estagiario::count();
        return view('home.grafico',compact('totalEstagiario'));

    }

}
