@extends('layout/app')
@section('titulo','Lista de Convênio de Concessão de Estágios - CCE | RH MAIS')
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
                    <h2>Lista de Convênio de Concessão de Estágios - CCE - AGENTES de INTEGRAÇÃO</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Un. Concedente
                          <input type="text" class="form-control">
                          </th>
                          <th>Cidade
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data Inicio
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data Fim
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
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
                          <a class="btn btn-primary" href="/cce" target="_blank"><i class="fa fa-print"></i> Imprimir CCE</a>
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