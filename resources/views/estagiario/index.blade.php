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
                  <a href="{{route('estagiario.create')}}" class="btn btn-success pull-right"> <i class="fa fa-user"> </i> Adicionar Novo Usuário</a>
                    <h2>Estagiários</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="estagiario" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Unidade</th>
                          <th>Tel.Celular</th>
                          <th>CPF</th>
                          <th>Cidade</th>
                          <th>Data de Nascimento</th>
                          <th>Escolaridade</th>
                          <th>Termino Curso</th>
                          <th>Ativo</th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($estagiarios as $estagiario)

                         <tr>
                          <td>{{$estagiario->nome}}</td>
                          <td>{{$estagiario->und_concedente}}</td>
                          <td>{{$estagiario->celular}}</td>
                          <td>{{$estagiario->cpf}}</td>
                          <td>{{$estagiario->cidade}}</td>
                          <td>19/12/2002</td>
                          <td>ENSINO MÉDIO</td>
                           <td>31/12/2020</td>
                          <td>Sim</td>

                           <td style="width:15%;">
                            <div class="col-md-3">
                              <a href="{{ route('estagiario.edit',$estagiario->id) }}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                            </div>
                            <form class="col-md-3 delete" style="margin-left:40px;" action="{{url('estagiario', [$estagiario->id])}}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger" >
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