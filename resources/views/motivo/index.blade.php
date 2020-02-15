@extends('layout/app')
@section('titulo','Motivos - Relacionados à Aditivos / Rescisões - Listagem | RH MAIS')
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
                                <a href="{{route('motivo.create')}}" class="btn btn-success pull-right"> <i
                                        class="fa fa-list"> </i> Novo</a>
                                <h2>Motivos - Relacionados à Aditivos / Rescisões - Listagem</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Descrição do Nome do Motivo
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Descrição do Motivo
                                                <input type="text" class="form-control">
                                            </th>
                                            {{-- <th>Unidade
                                                <input type="text" class="form-control">
                                            </th> --}}
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($motivos as $motivo)
                                            <td>{{$motivo->nome}}</td>
                                            <td>{{$motivo->descricao}}</td>
                                            {{-- <td>{{$motivo->empresa}}</td> --}}
                                            <td style="width:15%;">
                                                <div class="col-md-3">
                                                    <a href="{{ route('motivo.edit', $motivo->id) }}"
                                                        class="btn btn-primary" title="Editar"> <i class="fa fa-pencil"> </i></a>
                                                </div>
                                                <form class="col-md-3" style="margin-left:10px;"
                                                    action="{{route('motivo.destroy', [$motivo->id])}}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Excluir"
                                                        onclick="return confirm('Tem certeza que deseja deletar o motivo selecionado?')">
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
