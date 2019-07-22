@extends('layout/app')
@section('titulo','Atividades Relacionadas aos Setores - Listagem | RH MAIS')
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
                  <a href="#" class="btn btn-success pull-right"> <i class="fa fa-list"> </i> Novo</a>
                    <h2>Atividades Relacionadas aos Setores - Listagem</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Nome da Atividade</th>
                          <th>Unidade</th>
                          <th>Ag. Integração</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>ACIONAMENTO DE CLIENTES E NEGOCIAÇÃO DE CRÉDITO VIA TELEFONE, PRESTAÇÃO DE SERVIÇOS PARA BANCOS,</td>
                            <td>R. DE LIMA SILVEIRA INFORMAÇÕES CADASTRAIS - FABRICA DO CRÉDITO</td>
                            <td>KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS</td>
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