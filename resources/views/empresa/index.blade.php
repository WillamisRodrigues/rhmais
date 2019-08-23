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
              @include('layout.alerta.flash-message')
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{route('empresa.create')}}" class="btn btn-success pull-right"> <i class="fa fa-home"> </i> Adicionar Empresa Parceira</a>
                    <h2>Empresas Parceiras</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table list table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Cidade
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Telefone
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>CNPJ
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Qtade Plano
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Valor Fixo
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Valor Perc
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Custo Unitario
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Valor Adicional
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Ativo
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($empresas as $empresa)
                         <tr>
                          <td>{{$empresa->nome_fantasia}}</td>
                          <td>{{$empresa->nome_cidade}}</td>
                          <td>{{$empresa->telefone}}</td>
                          <td>{{$empresa->cnpj}}</td>
                          <td>12 Vezes</td>
                          <td>Sim</td>
                          <td>15%</td>
                          <td>{{$empresa->insc_estadual}}</td>
                          <td>{{$empresa->telefone}}</td>
                          <td>{{$empresa->nome_cidade}}</td>
                           <td style="width:15%;">
                           <div class="col-md-3">
                            <a href="{{ route('empresa.edit',[$empresa->id])}}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                          </div>
                          <form  class="col-md-3" style="margin-left:40px;" action="{{route('empresa.destroy', [$empresa->id])}}" method="POST">
    		                  <input type="hidden" name="_method" value="DELETE">
   		                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   		                    <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i> Deletar
                              </button>
                          </form>
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