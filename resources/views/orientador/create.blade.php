@extends('layout/app')
@section('titulo','Lista de Orientadores | RH MAIS')
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
                  <a href="#" class="btn btn-success pull-right"> <i class="fa fa-list"> </i> Novo Orientador</a>
                    <h2>Lista de Orientadores</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Nome do Orientador</th>
                          <th>CPF</th>
                          <th>RG</th>
                          <th>Cidade</th>
                          <th>Instituição</th>
                          <th>Unidade</th>
                          <th>Ag de Integração</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>ADRIANA REGINA MARQUES DE SOUZA PELISSARI</td>
                            <td>000.000.456-78</td>
                            <td></td>
                            <td>CAMPINAS</td>
                            <td>ASSUPERO ENSINO SUPERIOR LTDA</td>
                            <td>KOSTER & KOSTER CONSULTORIA EM RH LTDA</td>
                            <td>KOSTER E KOSTER CONSULTORIA EM RH LTDA</td>
                            <td style="width:15%;">
                          <form class="col-md-3" action="#" method="POST">
    		                  <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i> Deletar
                              </button>
                          </form>
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