@extends('layout/app')
@section('titulo','TCE/Ad Ativo(s) - PRÉVIA da Rescisão | RH MAIS')
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

                    <h2>TCE/Ad Ativo(s) - PRÉVIA da Rescisão</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list  table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiário
                          <input type="text" class="form-control">
                          </th>
                          <th>Unidade Concedente
                          <input type="text" class="form-control">
                          </th>
                          <th>Valor Bolsa
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>TCE Início/Fim</th>
                          <th>TCE / Ad Assinado
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Contrato
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Previa
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <td>RAFAELA MAGALHÃES CASTILHO</td>
                          <td>ADISI EMPREENDIMENTOS EDUCACIONAIS LTDA</td>
                          <td>800,00</td>
                          <td>18/02/2019 31/12/2020</td>
                          <td>Sim</td>
                          <td>TCE</td>
                          <td></td>
                          <td>
                          <button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button>
                          <button class="btn btn-warning"><i class="fa fa-print"></i> Imprimir Prévia Rescisão</button>
                          <button class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
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