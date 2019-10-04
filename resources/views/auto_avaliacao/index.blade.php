@extends('layout/app')
@section('titulo','TCE e Aditivos de Contratos Ativos - Gerar Auto-Avaliações')
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

          <!-- page content -->
          <div class="right_col" role="main">
          <div class="">
          <!-- <a href="{{url('estagiario/exportar')}}">Print  PDF</a> -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TCE e Aditivos de Contratos Ativos - Gerar Auto-Avaliações</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table list table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiario
                          <input type="text" class="form-control" style="width:200px;">
                          </th>
                          <th>Un. Concedente
                          <input type="text" class="form-control">
                          </th>
                          <th>TCE Início/Fim</th>
                          <th>Período Avaliativo</th>
                          <th>Avaliação Branco Período</th>
                          <th>Auto-Avaliação</th>
                          <th>Avaliação Supervisor</th>
                          <th>Saldo das Avaliações</th>
                          <th>Contrato
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Assinado
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                           @foreach ($estagiarios as $estagiario)
                         <td>{{$estagiario->nome}}</td>
                         <td>KOSTER & KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS</td>
                          <td>02/01/2018 31/12/2019</td>
                          <td>02/01/2018 02/07/2018 03/07/2018 03/01/2019 04/01/2019 04/07/2019 05/07/2019 31/12/2019	</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Obrigação=4 Supervisor fez=0 Estudante Fez=0 Falta=4</td>
                          <td>AD</td>
                          <td>Sim	</td>
                          <td style="width:15%;">
                            <div class="col-md-3">
                            <a href="{{route('auto_avaliacao.create')}}" class="btn btn-primary"> <i class="fa fa-pencil"> </i></a>
                            </div>
                            <form class="col-md-3 delete" style="margin-left:10px;" action="" method="POST">
                              <input type="hidden" name="_method" value="">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger" >
                              <i class="fa fa-plus"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>

        <!-- /page content -->

        <!-- footer content -->
        @include('layout.footer')
        <!-- /footer content -->
      </div>
    </div>
@endsection