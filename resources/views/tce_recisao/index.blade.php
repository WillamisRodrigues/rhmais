@extends('layout/app')
@section('titulo','Gerar TERMO de Conclusão | RH MAIS')
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

                    <h2>Gerar TERMO de Conclusão / Rescisão do TCE - Agente de Integração (GTR-AI)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiario
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Un. Concedente
                          <input type="text" class="form-control">
                          </th>
                          <th>Instituição
                          <input type="text" class="form-control">
                          </th>
                          <th>Valor Bolsa
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data Inicio
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data Fim
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Contrato
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Situação</th>
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
                          <td>RES</td>
                          <td>TCE Assinado Rescisão Assinada</td>
                          <td><a href="/recisaotce" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> TCE Recisão</a></td>
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