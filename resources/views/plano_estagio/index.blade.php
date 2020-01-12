@extends('layout/app')
@section('titulo','TCE e Aditivos de Contratos Ativos - Gerar Plano Estágio | RH MAIS')
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
                                <h2>TCE e Aditivos de Contratos Ativos - Gerar Plano Estágio</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Estagiario
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Un. Concedente
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>TCE Início/Fim
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Contrato
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>tce/Ad Assinado
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Plano
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($planos as $plano)
                                        <tr>
                                            <td>{{$plano->nome}}</td>
                                            <td>{{$plano->nome_fantasia}}</td>
                                            <td>{{date('d/m/Y', strtotime($plano->data_inicio))}} /
                                                {{date('d/m/Y', strtotime($plano->data_fim))}}</td>
                                            <td>TCE</td>
                                            <td>Sim</td>
                                            <td>
                                                @if ($plano->plano_estagio == '1')
                                                Sim
                                                @else
                                                Não
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('tce_contrato.show',[$plano->tceId])}}"
                                                    class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-warning" href="/estagio" target="_blank"><i
                                                        class="fa fa-print"></i></a></td>
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
