<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Charts\HomeChart;
use App\Estagiario;
use App\Instituicao;
use App\Empresa;
use Charts;


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

         $dataMasc = DB::table('estagiario')->where('sexo', 'Masculino')->count();
         $dataFem = DB::table('estagiario')->where('sexo', 'Feminino')->count();
          $chart = new HomeChart;
          $chart->displayAxes(false);
          $chart->labels(['Masculino', 'Feminino']);
          $chart->dataset('Gráfico pizza', 'pie', [$dataMasc, $dataFem]);

          $dataEsc = DB::table('estagiario')->where('escolaridade', 'Medio')->count();
          $chart2 = new HomeChart;
          $chart2->displayAxes(false);
          $chart2->labels(['Medio']);
          $chart2->dataset('Gráfico pizza2', 'pie', [$dataEsc]);

          return view('home.index',compact('totalEstagiario', 'totalInstituicao','totalEmpresa','chart','chart2'));
    }

}
