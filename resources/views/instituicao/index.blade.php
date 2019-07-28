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
              @include('layout.alerta.flash-message')
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{route('instituicao.create')}}" class="btn btn-success pull-right"> <i class="fa fa-home"> </i> Adicionar Instituição de Ensino</a>
                    <h2>Instituição de Ensino</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th>Nome
                          <input type="text" class="form-control">
                          </th>
                          <th>Complemento
                          <input type="text" class="form-control">
                          </th>
                          <th>Cidade
                          <input type="text" class="form-control">
                          </th>
                          <th>Endereço
                          <input type="text" class="form-control">
                          </th>
                          <th>CNPJ
                          <input type="text" class="form-control">
                          </th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($instituicoes as $instituicao)
                         <tr>
                          <td>{{$instituicao->nome_instituicao}}</td>
                          <td>{{$instituicao->razao_social}}</td>
                          <td>{{$instituicao->endereco}}</td>
                          <td>{{$instituicao->nome_cidade}}</td>
                          <td>{{$instituicao->cnpj}}</td>
                           <td style="width:15%;">
                           <div class="col-md-3">
                           <a href="{{ route('instituicao.edit',[$instituicao->id])}}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                           </div>
                          <form class="col-md-3" style="margin-left:40px;" action="{{route('instituicao.destroy', [$instituicao->id])}}" method="POST">
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