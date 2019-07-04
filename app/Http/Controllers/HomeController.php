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
          $dataset = $chart->dataset('Sexo', 'pie', array($dataMasc,$dataFem));
          $dataset->backgroundColor(collect(['#7158e2','#3ae374', '#ff3838']));
          $dataset->color(collect(['#7d5fff','#32ff7e', '#ff4d4d']));

          $dataEsc = DB::table('estagiario')->where('escolaridade', 'Medio')->count();
          $chart2 = new HomeChart;
          $chart2->displayAxes(false);
          $chart2->labels(['Medio']);
          $dataset = $chart2->dataset('My dataset', 'pie', array($dataEsc));
          $dataset->backgroundColor(collect(['#3a566e']));
          return view('home.index',compact('totalEstagiario', 'totalInstituicao','totalEmpresa','chart','chart2'));
    }

}
