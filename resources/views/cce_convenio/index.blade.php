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
                          @include('layout.alerta.flash-message')
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
                                            {{-- <th>Situação
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th> --}}
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
                                            {{-- <td>
                                                @if ($cce->situacao != 1)
                                                Não Assinado
                                                @else
                                                Assinado
                                                @endif
                                            </td> --}}
                                              <td style="width:22%;">
                                                <a href="{{ route('cce_convenio.edit', [$cce->id]) }}"
                                                    class="btn btn-primary" title="Editar"> <i class="fa fa-pencil"> </i></a>
                                                {{-- <a href="{{ route('cce_convenio.assinar', [$cce->id]) }}"
                                                    class="btn btn-primary" title="Marcar contrato como assinado"> <i
                                                        class="fa fa-star"></i> </a> --}}
                                                <form class="col-md-3"
                                                    action="{{route('cce_convenio.destroy', [$cce->id])}}"
                                                    method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger" title="Excluir"
                                                        onclick="return confirm('Tem certeza que deseja deletar o Convênio selecionado?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                                <a class="btn btn-warning" title="Contrato" href="{{ action('PdfController@generateCce', $cce->id) }}" target="_blank"><i
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
