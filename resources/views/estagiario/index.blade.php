@extends('layout/app')
@section('titulo','Usuários do Sistema | RH MAIS')
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
          <!-- <a href="{{url('estagiario/exportar')}}">Print  PDF</a> -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              @include('layout.alerta.flash-message')
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{route('estagiario.create')}}" class="btn btn-success pull-right"> <i class="fa fa-user"> </i> Adicionar Novo Estagiário</a>
                    <h2>Estagiários</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped table-bordered" style="max-width: 100px">
                      <thead>
                        <tr>
                          <th>Nome
                          <input type="text" class="form-control">
                          </th>
                          <th>Unidade
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Tel.Celular
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>CPF
                          <input type="text" class="form-control" style="width:200px;">
                          </th>
                          <th>Cidade
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data de Nascimento
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Escolaridade
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Termino Curso
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Ativo
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($estagiarios as $estagiario)
                         <tr>
                          <td>{{$estagiario->nome}}</td>
                          <td>{{$estagiario->nome_fantasia}}</td>
                          <td>{{$estagiario->celular}}</td>
                          <td>{{$estagiario->cpf}}</td>
                          <td>{{$estagiario->nome_cidade}}</td>
                          <td>{{date('d/m/Y', strtotime($estagiario->data_nascimento))}}</td>
                          <td>ENSINO MÉDIO</td>
                           <td>31/12/2020</td>
                           <td>
                           @if ($estagiario->status == '1')
                              Sim
                              @else
                              Não
                            @endif
                          </td>
                           <td style="width:15%;">
                            <div class="col-md-3">
                            <form action="{{ route('estagiario.edit',[$estagiario->id])}}" method="POST">
                            {{ csrf_field() }}
                              <input type="hidden" name="_method" value="PUT">
                              <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar">
                              <i class="fa fa-pencil"></i>
                              </button>
                            </form>
                            </div>
                            <form class="col-md-3 delete" style="margin-left:20px;" action="{{route('estagiario.destroy', [$estagiario->id])}}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Deletar">
                              <i class="fa fa-trash"></i>
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
