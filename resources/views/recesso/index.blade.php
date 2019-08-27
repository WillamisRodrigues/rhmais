@extends('layout/app')
@section('titulo','Lista Termo de Recesso/Férias | RH MAIS')
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

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista Termo de Recesso/Férias - (LTR)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped  list table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiário
                          <input type="text" class="form-control">
                          </th>
                          <th>Unidade Concedente
                          <input type="text" class="form-control">
                          </th>
                          <th>Data Inicio
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data Fim
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Situacao Termo Férias/Recesso</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td>AGATHA VASCONCELOS PAULOS TOME	</td>
                        <td>KOSTER & KOSTER CONSULTORIA EM RH LTDA</td>
                        <td>01/03/2019</td>
                        <td>06/03/2019</td>
                        <td>Assinado</td>
                          <td>
                            <a href="" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                            <a href="" class="btn btn-warning"> <i class="fa fa-print"> </i> Imprimir</a>
                            <a href="" class="btn btn-danger"> <i class="fa fa-trash"> </i> Excluir</a>
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
        @include('layout.footer')
      </div>
    </div>
@endsection