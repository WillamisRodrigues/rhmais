@extends('layout/app')
@section('titulo','Instituição de Ensino | RH MAIS')
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
                  <a href="" class="btn btn-success pull-right"> <i class="fa fa-home"> </i> Adicionar Instituição de Ensino</a>
                    <h2>Instituição de Ensino</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="instituicao" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Complemento</th>
                          <th>Cidade</th>
                          <th>Endereço</th>
                          <th>CNPJ</th>
                          <th>Ação</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>'CAIXA ESCOLAR MARCOS BORGES DE MIRANDA</td>
                          <td></td>
                          <td>UBERLANDIA</td>
                          <td>AV. COMENDADOR ALEXANDRINO GARCIA	</td>
                          <td>21.296.223/0001-18
                          </td>
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