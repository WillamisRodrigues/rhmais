@extends('layout/app')
@section('titulo','Gerar Avaliações Supervisor(a)')
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
                                <a href="{{route('avaliacao_supervisor.create')}}" class="btn btn-success pull-right"> </i> Gerar
                                    Avaliação Supervisores</a>
                                <h2>TCE e Aditivos de Contratos Ativos - Gerar Avaliações Supervisor(a)</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table list table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Estagiario
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Unidade Concedente
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>TCE inicio/Fim</th>
                                            <th>Supervisor
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Qtd. Realizada</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SABRINA KELOLY VIEIRA DOS SANTOS</td>
                                            <td>LIFE ACADEMIA BRASIL EIRELI- EPP - ACADEMIA LIFE GYM</td>
                                            <td>10/09/2018 31/12/2019</td>
                                            <td>LUCIELENA NISTA</td>
                                            {{-- <td style="width:10%;">
                                                <div class="col-md-3">
                                                    <a href="#"
                                                        class="btn btn-primary" title="Lançar"> <i class="fa fa-pencil"> </i></a>
                                                </div>
                                            </td> --}}
                                            <td style="width:5%;">2</td>
                                        </tr>
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
