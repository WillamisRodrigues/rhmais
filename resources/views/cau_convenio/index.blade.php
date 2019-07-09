@extends('layout/app')
@section('titulo','Lista de Convênio Agente de Integração | RH MAIS')
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
                  <a href="#" class="btn btn-success pull-right"> <i class="fa fa-plus"> </i> Adicionar Novo Convênio</a>
                    <h2>Lista de Convênio Agente de Integração/Unidade Concedente - CAU</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table  class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Un. Concedente</th>
                          <th>Cidade</th>
                          <th>Data Inicio</th>
                          <th>Data Fim</th>
                          <th>Situação</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <td>ZRH CAPITAL INVESTIMENTOS E PARTICIPAÇÕES EIRELI - AUSTER</td>
                            <td>CAMPINAS</td>
                            <td>20/05/2019</td>
                            <td>31/01/2022</td>
                            <td>Não Assinado</td>

                          <td style="width:22%;">
                          <button class="btn btn-primary"><i class="fa fa-trash"></i> Excluir</button>
                          <button class="btn btn-primary"><i class="fa fa-edit"></i> Editar</button>
                          <button class="btn btn-primary"><i class="fa fa-print"></i> Imprimir CAU</button>
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