@extends('layout/app')
@section('titulo','Lista de Convênio Agente de Integração | RH MAIS')
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
                                <a href="{{route('cau_convenio.create')}}" class="btn btn-success pull-right"> <i
                                        class="fa fa-plus"> </i> Adicionar Novo Convênio</a>
                                <h2>Lista de Convênio Agente de Integração/Unidade Concedente - CAU</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped table-responsive w-auto list table-bordered"
                                    style="zoom:0.8;">
                                    <thead>
                                        <tr>
                                            <th>Un. Concedente
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Cidade
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Data Inicio
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Data Fim
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            {{-- <th>Situação</th> --}}
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($caus as $cau)
                                        <tr>
                                            <td>{{$cau->empresa->nome_fantasia}}</td>
                                            <td>{{$cau->empresa->cidade}}</td>
                                            <td>{{date('d/m/Y', strtotime($cau->data_inicio))}}</td>
                                            <td>{{date('d/m/Y', strtotime($cau->data_fim))}}</td>
                                            <td style="width:22%;">
                                                <a href="{{ route('cau_convenio.edit', [$cau->id]) }}"
                                                    class="btn btn-primary" title="Editar"> <i class="fa fa-pencil"> </i></a>
                                                <form class="col-md-3"
                                                    action="{{route('cau_convenio.destroy', [$cau->id])}}"
                                                    method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger" title="Excluir"
                                                        onclick="return confirm('Tem certeza que deseja deletar o Convênio selecionado?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                                <a class="btn btn-warning" href="{{ action('PdfController@generateCau', $cau->id) }}" target="_blank"><i
                                                        class="fa fa-print" title="Imprimir"></i> </a>
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
