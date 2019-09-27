@extends('layout/app')
@section('titulo','Lista das Auto-Avaliações Geradas | RH MAIS')
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
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form action="">
                <div class="col-md-4">
                <br>
                <button class="btn btn-primary">Lista Branco</button>
                <button class="btn btn-primary">Lista Preenchida</button>
                </div>
              </form>
              <br>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista das Auto-Avaliações Geradas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table list table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiario
                          <input type="text" class="form-control">
                          </th>
                          <th style="width:10%:">Un. Concedente
                            <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Supervisor
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Perido Avaliativo
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Avaliação Branco Período
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Situação</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <td>SABRINA KELOLY VIEIRA DOS SANTOS</td>
                          <td style="width:24%;">LIFE ACADEMIA BRASIL EIRELI- EPP - ACADEMIA LIFE GYM</td>
                          <td>LUCIELENA NISTA</td>
                          <td></td>
                          <td>10/09/2018 a 10/03/2019</td>
                          <td>Não Assinado</td>
                          <td style="width:24%;">
                            <div class="col-md-3">
                            <a href="/editar_avaliacao_estagiario" class="btn btn-primary"> 
                            <i class="fa fa-pencil"> </i> </a>
                            </div>
                            <form class="col-md-3 delete" action="" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i> 
                              </button>
                            </form>
                            <div class="col-md-3">
                            <a href="#" class="btn btn-warning"> <i class="fa fa-print"> </i>  </a>
                            </div>
                          </td>
                        </tr>
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