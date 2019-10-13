@extends('layout/app')
@section('titulo','Home | RH MAIS')
@section('conteudo')
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('layout.menu.menu')
                <br />
                @include('layout.menu.sidebar')
            </div>
        </div>
        @include('layout.menu.menutop')
        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->

            <div class="row tile_count">
                <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total de Estagiários</span>
                    <div class="count">
                        <td>{{$totalEstagiario}}</td>
                    </div>
                    <!-- <span class="count_bottom"><i class="green">4% </i> neste mês</span> -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-home"></i> Total de Instituição Ensino</span>
                    <div class="count">{{$totalInstituicao}}</div>
                    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> neste mês</span> -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Empresas Parceiras</span>
                    <div class="count">{{$totalEmpresa}}</div>
                    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> neste mês</span> -->
                </div>
            </div>
            <!-- /top tiles -->
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>RH TALENTOS | SEXO</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div style="width:100%;">
                                {!! $chartjs1->render() !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>RH TALENTOS | ESCOLARIDADE</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div style="width:100%;">
                                {!! $chartjs2->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- line graph -->
                <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TCE ATIVOS </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content2">
                    <div id="graph_line" style="width:100%; height:300px;"></div>
                  </div>
                </div>
              </div> -->
                <!-- /line graph -->
                <!-- line graph -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>RH TALENTOS | TCE ATIVO X TCE INATIVOS</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content2">
                            <div style="width:100%;">
                                {!! $chartjs4->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /line graph -->
    </div>
</div>
</div>
<!-- /page content -->
@include('layout.footer')
</div>
</div>
@endsection
