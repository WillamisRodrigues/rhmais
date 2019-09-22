@extends('layout/app')
@section('titulo','Editar - Folha - Agente Integração | RH MAIS')
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

              <br>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar - Folha de Pagamento</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div style="height: 400px"></div>
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
