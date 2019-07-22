@extends('layout/app')
@section('titulo','Lista de Supervisores | RH MAIS')
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
                  <a href="#" class="btn btn-success pull-right"> <i class="fa fa-list"> </i> Novo Supervisor</a>
                    <h2>Lista de Supervisores</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Novo Supervisor</th>
                          <th>CPF</th>
                          <th>RG</th>
                          <th>Cidade</th>
                          <th>Unidade</th>
                          <th>Ag. de Integração</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>ADRIELLE SIQUEIRA PARINI</td>
                            <td>372.821.798-08</td>
                            <td>45.798.797-2</td>
                            <td>RIBEIRÃO PRETO</td>
                            <td>PRINCIPAL RB PROMOTORA DE CREDITO LTDA ME - PRINCIPAL PROMOTORA</td>
                            <td>KOSTER E KOSTER CONSULTORIA EM RH LTDA - KOSTER E KOSTER CONSULTORIA EM RH LTDA</td>
                            <td style="width:15%;">
                            <div class="col-md-3" style="margin-left:40px;">
                            <a href="#" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
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