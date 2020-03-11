@extends('layout/app')
@section('titulo','Informe de Faturamento | RH MAIS')
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

                        <br>
                        <div class="x_panel">
                            <div class="x_title">

                                <h2>Resumo do Fechamento</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list  table-bordered" style="zoom:0.8;">
                                    <thead>
                                         @foreach ($contratos as $contrato)
                                        <tr>
                                            <th>Contrato
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Unidade
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Referência
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>P.Inicial - P.Final
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Início e Fim - TCE
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Processamento
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>V.Cobrado
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>V.Calculado
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>V.Taxas
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Situação
                                                <input type="text" class="form-control" style="width:75px;">
                                            </th>
                                            {{-- <th>Estagiário
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td># {{$contrato->id}}</td>
                                        <td>{{$contrato->nome_fantasia}}</td>
                                        <td>{{$contrato->referencia}}</td>
                                            <td>{{date('d/m/Y', strtotime($contrato->data_inicio))}} {{date('d/m/Y', strtotime($contrato->data_fim))}}</td>
                                            <td>{{date('d/m/Y', strtotime($contrato->data_inicio))}} {{date('d/m/Y', strtotime($contrato->data_fim))}}</td>
                                            <td></td>
                                        <td>{{"R$ " .number_format($contrato->total_custo, 2)}}</td>
                                            <td>{{"R$ " .number_format($contrato->custo_unitario, 2)}}</td>
                                            <td></td>
                                            <td></td>
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
