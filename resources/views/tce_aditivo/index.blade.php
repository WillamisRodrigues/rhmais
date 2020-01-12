@extends('layout/app')
@section('titulo','Aditivos de Contratos Ativos - AD | RH MAIS')
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
                <!-- <a href="{{url('tcead/exportar')}}">Print  PDF</a> -->
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">

                                <h2>Aditivos de Contratos Ativos - AD</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table list table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Estagiario
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Un. Concedente
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Instituição
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Valor Bolsa
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Data Inicio
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Data Fim
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Contrato
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Assinado
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Obrigatório
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($tcesad as $tcead)
                                        <tr>
                                            <td>{{ $tcead->nome }}</td>
                                            <td>{{ $tcead->nome_fantasia }}</td>
                                            <td>{{ $tcead->nome_instituicao }}</td>
                                            <td>{{"R$ " .number_format($tcead->bolsa, 2) }}</td>
                                            <td>{{ date('d/m/Y', strtotime($tcead->data_inicio)) }}</td>
                                            <td>{{date('d/m/Y', strtotime($tcead->data_fim))}}</td>
                                            <td>{{ $tcead->contrato }}</td>
                                            <td>
                                                @if ( $tcead->assinado == '1')
                                                Sim
                                                @else
                                                Não
                                                @endif
                                            </td>
                                            <td>{{ $tcead->obrigatorio }}</td>
                                            <td><a class="btn btn-primary"
                                                    href="{{ route('tce_aditivo.edit',[$tcead->id])}}"><i
                                                        class="fa fa-plus"></i></a></td>
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
