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
         $dataEsc = DB::table('estagiario')->where('escolaridade', 'Medio')->count();

         $jan1 = Contrato::whereMonth('created_at', '1')->where('status', '1')->count();
         $jan2 = Contrato::whereMonth('created_at', '1')->where('status', '2')->count();
         $fev1 = Contrato::whereMonth('created_at', '2')->where('status', '1')->count();
         $fev2 = Contrato::whereMonth('created_at', '2')->where('status', '2')->count();
         $mar1 = Contrato::whereMonth('created_at', '3')->where('status', '1')->count();
         $mar2 = Contrato::whereMonth('created_at', '3')->where('status', '2')->count();
         $abr1 = Contrato::whereMonth('created_at', '4')->where('status', '1')->count();
         $abr2 = Contrato::whereMonth('created_at', '4')->where('status', '2')->count();
         $mai1 = Contrato::whereMonth('created_at', '5')->where('status', '1')->count();
         $mai2 = Contrato::whereMonth('created_at', '5')->where('status', '2')->count();
         $jun1 = Contrato::whereMonth('created_at', '6')->where('status', '1')->count();
         $jun2 = Contrato::whereMonth('created_at', '6')->where('status', '2')->count();
         $jul1 = Contrato::whereMonth('created_at', '7')->where('status', '1')->count();
         $jul2 = Contrato::whereMonth('created_at', '7')->where('status', '2')->count();
         $ago1 = Contrato::whereMonth('created_at', '8')->where('status', '1')->count();
         $ago2 = Contrato::whereMonth('created_at', '8')->where('status', '2')->count();
         $set1 = Contrato::whereMonth('created_at', '9')->where('status', '1')->count();
         $set2 = Contrato::whereMonth('created_at', '9')->where('status', '2')->count();
         $out1 = Contrato::whereMonth('created_at', '10')->where('status', '1')->count();
         $out2 = Contrato::whereMonth('created_at', '10')->where('status', '2')->count();
         $nov1 = Contrato::whereMonth('created_at', '11')->where('status', '1')->count();
         $nov2 = Contrato::whereMonth('created_at', '11')->where('status', '2')->count();
         $dez1 = Contrato::whereMonth('created_at', '12')->where('status', '1')->count();
         $dez2 = Contrato::whereMonth('created_at', '12')->where('status', '2')->count();

         $chartjs4 = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'])
        ->datasets([
            [
                "label" => "TCE ATIVOS",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$jan1,$fev1,$mar1,$abr1,$mai1,$jun1,$jul1,$ago1,$set1,$out1,$nov1,$dez1],
            ],
            [
                "label" => "TCE INATIVOS",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$jan2,$fev2,$mar2,$abr2,$mai2,$jun2,$jul2,$ago2,$set2,$out2,$nov2,$dez2],
            ]
        ])
        ->options([]);

        $chartjs1 = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Feminino', 'Masculino'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [$dataMasc,$dataFem]
            ]
        ])
        ->options([]);

         $chartjs2 = app()->chartjs
        ->name('pie')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['MED','SUP','M. TEC','S. TEC','N. FUN','N. PRO'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB','#FF6384', '#36A2EB','#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB','#FF6384', '#36A2EB','#FF6384', '#36A2EB'],
                'data' => [$dataEsc,2, 1,1, 3,5]
            ]
        ])
        ->options([]);

        return view('home.index',compact('totalEstagiario', 'totalInstituicao','totalEmpresa','chartjs4', 'chartjs1', 'chartjs2'));
    }
}
