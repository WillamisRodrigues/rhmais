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
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{route('instituicao.create')}}" class="btn btn-success pull-right"> <i class="fa fa-home"> </i> Adicionar Instituição de Ensino</a>
                    <h2>Instituição de Ensino</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="instituicao" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Complemento</th>
                          <th>Cidade</th>
                          <th>Endereço</th>
                          <th>CNPJ</th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($instituicoes as $instituicao)
                         <tr>
                          <td>{{$instituicao->nome_instituicao}}</td>
                          <td>ENSINO MÉDIO</td>
                          <td>{{$instituicao->insc_estadual}}</td>
                          <td>{{$instituicao->telefone}}</td>
                          <td>{{$instituicao->cnpj}}</td>
                          <td>19/12/2002</td>
                           <td>31/12/2020</td>
                          <td>Sim</td>

                           <td><a href="{{ route('instituicao.edit',$instituicao->id) }}" class="btn btn-primary"> <i class="fa fa-plus"> </i> Editar</a></td>
                           <td>
                          <form action="{{url('instituicao', [$instituicao->id])}}" method="POST">
    		                  <input type="hidden" name="_method" value="DELETE">
   		                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   		                    <input type="submit" class="btn btn-danger" value="Delete"/>
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