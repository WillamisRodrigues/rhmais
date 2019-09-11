@extends('layout/app')
@section('titulo','Cidades | RH MAIS')
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
                    <h2>Cidades</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table list table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome cidade
                          <input type="text" class="form-control">
                          </th>
                          <th>Estado
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($cidades as $cidade)
                         <tr>
                          <td>{{$cidade->nome}}</td>
                          <td>{{$cidade->uf}}</td>
                        </tr>
                          @endforeach
                      </tbody>
                    </table>
                    	{{-- <div class="pull-right">
                    {{ $cidades->links() }}
                    	</div>   --}}
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