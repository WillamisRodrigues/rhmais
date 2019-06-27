@extends('layout/app')
@section('titulo','TCEs Rescindidos | RH MAIS')
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
              <form action="">
              <div class="col-md-2">
                <label for="">Unidade:</label>
                <select name="" class="form-control">
                    <option> Todas as Unidades</option>
                </select>
                </div>
                <div class="col-md-2">
                <label for="">Ano:</label>
                <select name="" class="form-control">
                    <option> Periodo Ano</option>
                </select>
                </div>
                <div class="col-md-2">
                <label for="">Mês:</label>
                <select name="" class="form-control">
                    <option> Periodo Mês</option>
                </select>
                </div>
                <div class="col-md-2">
                <br>
                <button class="btn btn-primary">G. Relação</button>
                <button class="btn btn-primary">L. Relação</button>
                </div>
              </form>
              <br>
                <div class="x_panel">
                  <div class="x_title">

                    <h2>TCEs Rescindidos - Agente Integração</h2>
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
                          <th>Nº Contrato</th>
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
                          <td>20181124022944 - 20181129030248596</td>
                          <td><button class="btn btn-primary"><i class="fa fa-print"></i> Imprimir TCE</button></td>
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