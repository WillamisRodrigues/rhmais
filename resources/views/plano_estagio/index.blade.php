@extends('layout/app')
@section('titulo','TCE e Aditivos de Contratos Ativos - Gerar Plano Estágio | RH MAIS')
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
                    <h2>TCE e Aditivos de Contratos Ativos - Gerar Plano Estágio</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="estagiario" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiario</th>
                          <th>Un. Concedente</th>
                          <th>TCE Início/Fim</th>
                          <th>Contrato</th>
                          <th>tce/Ad Assinado</th>
                          <th>Plano</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <td>NATHALIE KESLEY VIANA SILVA</td>
                          <td>ARYMANA CONTABILIDADE EIRELI - ARYMANA CONTABILIDADE</td>
                          <td>01/08/2018 01/08/2020</td>
                          <td>TCE</td>
                          <td>Sim</td>
                          <td>Sim</td>
                          <td>
                          <button class="btn btn-primary"><i class="fa fa-plus"></i> Editar</button>
                          <button class="btn btn-primary"><i class="fa fa-print"></i> Imprimir Plano</button></td>
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