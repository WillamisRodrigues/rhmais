@extends('layout/app')
@section('titulo','Lista de Orientadores | RH MAIS')
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
                  <a href="{{route('orientador.create')}}" class="btn btn-success pull-right"> <i class="fa fa-list"> </i> Novo Orientador</a>
                    <h2>Lista de Orientadores</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Nome do Orientador
                          <input type="text" class="form-control">
                          </th>
                          <th>CPF
                          <input type="text" class="form-control">
                          </th>
                          <th>RG
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Cidade
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Instituição
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Unidade
                          <input type="text" class="form-control">
                          </th>
                          <th>Ag de Integração
                          <input type="text" class="form-control">
                          </th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                           @foreach ($orientadores as $orientador)
                         <td>{{$orientador->nome}}</td>
                            <td>{{$orientador->cpf}}</td>
                            <td>{{$orientador->rg}}</td>
                            <td>{{$orientador->cidade}}</td>
                            <td>{{$orientador->instituicao}}</td>
                            <td>{{$orientador->empresa}}</td>
                            <td>{{$orientador->agente_integracao}}</td>
                            <td style="width:15%;">
                            <div class="col-md-3">
                              <a href="{{route('orientador.edit', [$orientador->id])}}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                            </div>
                            <form class="col-md-3" style="margin-left:40px;" action="{{url('orientador', [$orientador->id])}}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i> Deletar
                              </button>
                            {{-- <td style="width:15%;">
                          <form class="col-md-3" action="#" method="POST">
    		                  <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i> Deletar
                              </button>
                          </form>
                            <div class="col-md-3" style="margin-left:40px;">
                            <a href="{{route('orientador.edit', [$orientador->id])}}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a> --}}
                            </div>
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