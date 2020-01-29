@extends('layout/app')
@section('titulo','Lista de Supervisores | RH MAIS')
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
                        @include('layout.alerta.flash-message')
                        <div class="x_panel">
                            <div class="x_title">
                                <a href="{{route('supervisor.create')}}" class="btn btn-success pull-right"> <i
                                        class="fa fa-list"> </i> Novo Supervisor</a>
                                <h2>Lista de Supervisores</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Novo Supervisor
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>CPF
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>RG
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Cidade
                                                <input type="text" class="form-control"></th>
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
                                            @foreach ($supervisores as $supervisor)
                                            <td>{{$supervisor->nome}}</td>
                                            <td>{{$supervisor->cpf}}</td>
                                            <td>{{$supervisor->rg}}</td>
                                            <td>{{$supervisor->cidade}}</td>
                                            <td>
                                                @foreach($empresa as $emp)
                                                @if($supervisor->empresa_id == $emp->id)
                                                    {{$emp->nome_fantasia}}
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>{{$supervisor->agente_integracao}}</td>
                                            <td style="width:15%;">
                                                <div class="col-md-3">
                                                    <a href="{{route('supervisor.edit', [$supervisor->id])}}"
                                                        class="btn btn-primary"> <i class="fa fa-pencil"> </i></a>
                                                </div>
                                                <form class="col-md-3"  style="margin-left:10px;"
                                                    action="{{route('supervisor.destroy', [$supervisor->id])}}"
                                                    method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Tem certeza que deseja deletar o supervisor selecionada?')">
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
