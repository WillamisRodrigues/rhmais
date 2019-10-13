@extends('layout/app')
@section('titulo','Cursos | RH MAIS')
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
                <!-- <a href="{{url('curso/exportar')}}">Print  PDF</a> -->
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include('layout.alerta.flash-message')
                        <div class="x_panel">
                            <div class="x_title">
                                <a href="{{route('curso.create')}}" class="btn btn-success pull-right"> <i
                                        class="fa fa-user"> </i> Adicionar Novo Curso</a>
                                <h2>Cursos</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nome curso
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Nível
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cursos as $curso)
                                        <tr>
                                            <td>{{$curso->nome}}</td>
                                            <td>{{$curso->nivel}}</td>
                                            <td style="width:15%;">
                                                <div class="col-md-3">
                                                    <a href="{{ route('curso.edit',$curso->id) }}"
                                                        class="btn btn-primary"> <i class="fa fa-pencil"> </i></a>
                                                </div>
                                                <form class="col-md-3" style="margin-left:10px;"
                                                    action="{{url('curso', [$curso->id])}}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger" data-toggle="tooltip"
                                                        data-placement="top"
                                                        onclick="return confirm('Tem certeza que deseja deletar o curso selecionado?')">
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
