@extends('layout/app')
@section('titulo','Termo Recesso Férias | RH MAIS')
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
                    <h2>TCE / Ad Ativo(s) - Gerar Termo de Recesso / Férias</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table list table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiário</th>
                          <th>Unidade Concedente</th>
                          <th>Valor da Bolsa</th>
                          <th>TCE Inicio / FIM</th>
                          <th>Período <br> Aquisitivo</th>
                          <th>Ferias Concedidas</th>
                          <th>Valor Direito</th>
                          <th>Valor Recebido</th>
                          <th>Valor Saldo</th>
                          <th>TCE / Ad Assinado </th>
                          <th>Opções</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>Nathalie Kesley Viana Silva</td>
                          <td>Arymana Contabilidade Eireli</td>
                          <td>800,00</td>
                          <td>01/08/2018 <br> 01/08/2020</td>
                          <td>01/08/2018 <br>01/08/2019 <br>11/12 27.5 <br> Dias
                        02/08/2019 <br> 01/08/2020 <br> n/c
                          </td>
                          <td></td>
                          <td>733,33</td>
                          <td>0,00</td>
                          <td>733,33</td>
                          <td>Sim</td>
                          <td><a href="" class="btn btn-primary"> <i class="fa fa-plus"> </i> Adicionar</a></td>
                        </tr>
                        <tr>
                          <td>Nathalie Kesley Viana Silva</td>
                          <td>Arymana Contabilidade Eireli</td>
                          <td>800,00</td>
                          <td>01/08/2018 <br> 01/08/2020</td>
                          <td>01/08/2018 <br>01/08/2019 <br>11/12 27.5 <br> Dias
                        02/08/2019 <br> 01/08/2020 <br> n/c
                          </td>
                          <td></td>
                          <td>733,33</td>
                          <td>0,00</td>
                          <td>733,33</td>
                          <td>Sim</td>
                          <td><a href="" class="btn btn-primary"> <i class="fa fa-plus"> </i> Adicionar</a></td>
                        </tr>
                        <tr>
                          <td>Nathalie Kesley Viana Silva</td>
                          <td>Arymana Contabilidade Eireli</td>
                          <td>800,00</td>
                          <td>01/08/2018 <br> 01/08/2020</td>
                          <td>01/08/2018 <br>01/08/2019 <br>11/12 27.5 <br> Dias
                        02/08/2019 <br> 01/08/2020 <br> n/c
                          </td>
                          <td></td>
                          <td>733,33</td>
                          <td>0,00</td>
                          <td>733,33</td>
                          <td>Sim</td>
                          <td><a href="" class="btn btn-primary"> <i class="fa fa-plus"> </i> Adicionar</a></td>
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