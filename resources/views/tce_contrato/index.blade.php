@extends('layout/app')
@section('titulo','Lista de Contratos Ativos - TCE | RH MAIS')
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
                  <a href="{{route('tce_contrato.create')}}" class="btn btn-success pull-right"> <i class="fa fa-plus"> </i> Adicionar Novo Contrato</a>
                    <h2>AGENTE DE INTEGRAÇÃO - Lista de Contratos Ativos - TCE</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="estagiario" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiario</th>
                          <th>Un. Concedente</th>
                          <th>Instituição</th>
                          <th>Valor Bolsa</th>
                          <th>Data Inicio</th>
                          <th>Data Fim</th>
                          <th>Contrato</th>
                          <th>Assinado</th>
                          <th>Obrigatório</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <td>LÍVIA ALBUQUERQUE DIAS</td>
                          <td>NEY CARTER DO CARMO BORGES CRM: 50.535 - VIVECOR VINHEDO</td>
                          <td>CETEC - CENTRO TÉCNICO DE ENFERMAGEM LTDA - CETEC JUNDIAÍ</td>
                          <td>800,00</td>
                          <td>06/02/2019</td>
                          <td>31/10/2019</td>
                          <td>AD</td>
                          <td>Não</td>
                          <td>N</td>
                          <td><a class="btn btn-primary" href="/tce" target="_blank"><i class="fa fa-print"></i> Imprimir TCE</a></td>
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