@extends('layout/app')
@section('titulo','Lista de Benefícios | RH MAIS')
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
                  <a href="{{route('beneficio.create')}}" class="btn btn-success pull-right"> <i class="fa fa-list"> </i> Novo</a>
                    <h2>Lista de Benefícios</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Nome do Beneficio
                          <input type="text" class="form-control">
                          </th>
                          <th>Sigla do Beneficio
                          <input type="text" class="form-control">
                          </th>
                          <th>Unidade
                          <input type="text" class="form-control">
                          </th>
                          <th>Ag. de Integração
                          <input type="text" class="form-control">
                          </th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                           @foreach ($beneficios as $beneficio)
                          <td>{{$beneficio->nome}}</td>
                         <td>{{$beneficio->sigla}}</td>
                         <td>
                           @foreach ($empresas as $empresa)
                            @if ($beneficio->empresa_id == $empresa->id)
                            {{$empresa->nome_fantasia}}
                            @endif
                           @endforeach
                          </td>
                         <td>{{$beneficio->agente_integracao}}</td>
                            <td style="width:15%;">
                            <div class="col-md-3">
                              <a href="{{route('beneficio.edit', [$beneficio->id])}}" class="btn btn-primary"> <i class="fa fa-pencil"> </i> </a>
                            </div>
                            <form class="col-md-3" style="margin-left:10px;" action="{{url('beneficio', [$beneficio->id])}}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top"  onclick="return confirm('Tem certeza que deseja deletar o beneficio selecionado?')">
                              <i class="fa fa-trash"></i>
                              </button>
                            </div>
                            </form>
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