@extends('layout/app')
@section('titulo','Setores - Listagem | RH MAIS')
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
                  <a href={{route('setor.create')}} class="btn btn-success pull-right"> <i class="fa fa-list"> </i> Novo</a>
                    <h2>Setores - Listagem</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Nome do Setor
                          <input type="text" class="form-control">
                          </th>
                          <th>Sigla do Setor
                          <input type="text" class="form-control" >
                          </th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                           @foreach ($setores as $setor)
                         <td>{{$setor->nome}}</td>
                         <td>{{$setor->sigla}}</td>
                         <td style="width:15%;">
                            <div class="col-md-3">
                              <a href="{{route('setor.edit', [$setor->id])}}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                            </div>
                            <form class="col-md-3" style="margin-left:40px;" action="{{url('setor', [$setor->id])}}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i> Deletar
                              </button>
                            </div>
                            {{-- <td style="width:15%;">
                          <form class="col-md-3" action="#" method="POST">
    		                  <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i> Deletar
                              </button>
                          </form>
                            <div class="col-md-3" style="margin-left:40px;">
                            <a href="{{route('setor.edit', [$setor->id])}}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                            </div> --}}
                          </td>
                        </tr>
                           @endforeach
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