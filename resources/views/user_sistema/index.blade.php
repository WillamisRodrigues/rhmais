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

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{route('user_sistema.create')}}" class="btn btn-success pull-right"> <i class="fa fa-user"> </i> Adicionar Novo Usuário</a>
                    <h2>Usuários do Sistema</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="user" class="table table-striped table-bordered">
                    <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Data de cadastro</th>
                                <th>Ultima atualização</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                      <tbody>
                       @foreach ($users as $user)
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>{{$user->created_at}}</th>
                                    <th>{{$user->updated_at}}</th>

                           <td style="width:15%;">
                            <div class="col-md-3">
                              <a href="{{ route('user_sistema.edit',$user->id) }}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a>
                            </div>
                            <form class="col-md-3" style="margin-left:40px;" action="{{url('user_sistema', [$user->id])}}" method="POST">
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
                    <div class="text-right">
                      {{ $users->links() }}
                    </div>
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