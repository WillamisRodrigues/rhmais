<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Charts\HomeChart;
use App\Estagiario;
use App\Instituicao;
use App\Empresa;
use App\Contrato;
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

         $today_users = Contrato::whereMonth('created_at', '5')->where('status', '1')->count();
         $yesterday_users = Contrato::whereMonth('created_at', '6')->where('status', '2')->count();
         $users_2_days_ago = Contrato::whereMonth('created_at', '7')->where('status', '1')->count();

         $chart3 = new HomeChart;
         $chart3->labels(['Maio', 'Junho', 'Julho']);
         $chart3->dataset('My dataset', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);


        return view('home.index',compact('totalEstagiario', 'totalInstituicao','totalEmpresa','chart','chart2', 'chart3'));
    }
}
