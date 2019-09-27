@extends('layout/app')
@section('titulo','Horários de Estágio - Trabalho - Listagem | RH MAIS')
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
          <!-- <a href="{{url('cidade/exportar')}}">Print  PDF</a> -->
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{route('horario.create')}}" class="btn btn-success pull-right"> <i class="fa fa-list"> </i> Novo Horário</a>
                    <h2>Horários de Estágio - Trabalho - Listagem</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Descrição do Horário
                          <input type="text" class="form-control">
                          </th>
                          <th>Qtade Horas
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Unidade
                          <input type="text" class="form-control">
                          </th>
                          <th>Ag de Integração
                          <input type="text" class="form-control">
                          </th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>2ª 6ª DAS 09:00 ÀS 15:00 COM 00:15 MINUTOS DE INTERVALO, TOTALIZANDO 30 HORAS SEMANAIS.</td>
                            <td>30.00</td>
                            <td>PRINCIPAL RB PROMOTORA DE CREDITO LTDA ME - PRINCIPAL PROMOTORA </td>
                            <td>KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS</td>
                            <td style="width:15%;">
                          <form class="col-md-3" action="#" method="POST">
    		                  <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i>
                              </button>
                          </form>
                            <div class="col-md-3" style="margin-left:10px;">
                            <a href="#" class="btn btn-primary"> <i class="fa fa-pencil"> </i></a>
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