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
              <div class="count"><td >{{$totalEstagiario}}</td></div>
              <!-- <span class="count_bottom"><i class="green">4% </i> neste mês</span> -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total de Instituição Ensino</span>
              <div class="count">{{$totalInstituicao}}</div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> neste mês</span> -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Empresas Parceiras</span>
              <div class="count green">{{$totalEmpresa}}</div>
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
                      {!! $chart->container() !!}
                      <br>
                      <div>
                        <span class="badge" style="background-color:#84e573; font-size:14pt;">&nbsp; Feminino</span>
                        <span class="badge" style="background-color:#715ae2; font-size:14pt;">&nbsp; Masculino</span>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>RH MAIS TALENTOS | ESCOLARIDADE</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  {!! $chart2->container() !!}
                  <br>
                  <div>
                        <span class="badge" style="background-color:#84e573; font-size:14pt;">&nbsp; MED</span>
                        <span class="badge" style="background-color:#715ae2; font-size:14pt;">&nbsp; SUP</span>
                        <span class="badge" style="background-color:#84e573; font-size:14pt;">&nbsp; M. TEC</span>
                        <span class="badge" style="background-color:#715ae2; font-size:14pt;">&nbsp; S. TEC</span>
                        <span class="badge" style="background-color:#84e573; font-size:14pt;">&nbsp; N. FUN</span>
                        <span class="badge" style="background-color:#715ae2; font-size:14pt;">&nbsp; N. PRO</span>
                      </div>
                  </div>
                </div>
              </div>
               <!-- line graph -->
               <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TCE ATIVOS </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content2">
                    <div id="graph_line" style="width:100%; height:300px;"></div>
                  </div>
                </div>
              </div>
              <!-- /line graph -->
               <!-- line graph -->
               {!! $chart3->container() !!}
               <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TCE INATIVOS</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content2">
                    <div id="graph_line" style="width:100%; height:300px;"></div>
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
        {!! $chart->script() !!}
        {!! $chart2->script() !!}
        {!! $chart3->script() !!}
@endsection

