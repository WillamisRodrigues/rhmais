@extends('layout/app')
@section('titulo','Lista Termo de Recesso/Férias | RH MAIS')
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
                                <h2>Lista Termo de Recesso/Férias - (LTR)</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped  list table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Estagiário
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Unidade Concedente
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Data Inicio
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Data Fim
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Situacao Termo Férias/Recesso</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recesso as $rec)
                                        <tr>
                                        <td>{{$rec->nome}}</td>
                                            <td>{{$rec->nome_fantasia}}</td>
                                            <td>{{date('d/m/Y', strtotime($rec->data_inicio))}}</td>
                                            <td>{{date('d/m/Y', strtotime($rec->data_fim))}}</td>
                                            <td>
                                                @if ($rec->recesso_assinado == 1 )
                                                    Assinado
                                                 @else
                                                    Não Assinado
                                                @endif
                                                </td>
                                            <td>
                                                {{-- <a href="#" class="btn btn-primary"> <i class="fa fa-pencil"> </i></a> --}}
                                                <a href="{{ route('recesso_assinado.assinar', [$rec->id]) }}"
                                                    class="btn btn-primary" title="Marcar contrato como assinado"> <i
                                                        class="fa fa-star"></i> </a>
                                                <a href="#" class="btn btn-warning" title="Imprimir"> <i class="fa fa-print"> </i></a>
                                                {{-- <a href="#" class="btn btn-danger"> <i class="fa fa-trash"> </i></a> --}}
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
    @include('layout.footer')
</div>
</div>
@endsection
