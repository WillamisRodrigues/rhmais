@extends('layout/app')
@section('titulo','Lista de Convênio de Concessão de Estágios - CCE | RH MAIS')
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
                        <div class="x_panel">
                            <div class="x_title">
                                <a href="{{route('cce_convenio.create')}}" class="btn btn-success pull-right"> <i
                                        class="fa fa-plus"> </i> Adicionar Novo Convênio</a>
                                <h2>Lista de Convênio de Concessão de Estágios - CCE - AGENTES de INTEGRAÇÃO</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list table-bordered">
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
                                            <th>Situação</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cces as $cce)
                                        <tr>
                                            <td>{{$cce->nome_instituicao}}</td>
                                            <td>{{$cce->cidade}}</td>
                                            <td>{{date('d/m/Y', strtotime($cce->data_inicio))}}</td>
                                            <td>{{date('d/m/Y', strtotime($cce->data_fim))}}</td>
                                            <td>Não Assinado</td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('cce_convenio.edit', [$cce->id])}}"><i
                                                        class="fa fa-pencil"></i> </a>
                                                <a class="btn btn-info" href="/cce" target="_blank"><i
                                                        class="fa fa-print"></i></a>
                                                <form action="{{route('cce_convenio.destroy', [$cce->id])}}"
                                                    method="POST">
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Tem certeza que deseja deletar o Convênio selecionado?')"><i
                                                            class="fa fa-trash"></i></button>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
