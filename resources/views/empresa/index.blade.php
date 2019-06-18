@extends('layout/app')
@section('titulo','Empresas | RH MAIS')
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
                  <a href="" class="btn btn-success pull-right"> <i class="fa fa-home"> </i> Adicionar Empresa Parceira</a>
                    <h2>Empresas Parceiras</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="empresas" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Cidade</th>
                          <th>Telefone</th>
                          <th>CNPJ/ CPF</th>
                          <th>Qtade Plano</th>
                          <th>Valor Fixo</th>
                          <th>Valor Perc</th>
                          <th>Custo Unitario</th>
                          <th>Valor Adicional</th>
                          <th>Ativo</th>
                          <th>Ação</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>ADISI EMPREENDIMENTOS EDUCACIONAIS LTDA - C. PHOTON ADISI</td>
                          <td>CAMPINAS</td>
                          <td>(19)3207-2921</td>
                          <td>01.476.559/0001-55</td>
                          <td>0
                          </td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>110.00</td>
                          <td>0.00</td>
                          <td>Sim</td>
                          <td><a href="" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a></td>
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