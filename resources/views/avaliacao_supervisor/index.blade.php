@extends('layout/app')
@section('titulo','TCE e Aditivos de Contratos Ativos - Gerar Avaliações Supervisor(a)')
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
                                <a href="#" class="btn btn-success pull-right"> <i class="fa fa-print"> </i> Relátorio
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
                                            <th>Período Avaliativo</th>
                                            <th>Avaliação Supervisor</th>
                                            <th>Avaliação Branco Período</th>
                                            <th>Auto-Avaliação</th>
                                            <th>Saldo das Avaliações</th>
                                            <th>Supervisor
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Contrato
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Assinado
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SABRINA KELOLY VIEIRA DOS SANTOS</td>
                                            <td>LIFE ACADEMIA BRASIL EIRELI- EPP - ACADEMIA LIFE GYM</td>
                                            <td>10/09/2018 31/12/2019</td>
                                            <td>10/09/2018 10/03/2019 11/03/2019 11/09/2019 12/09/2019 31/12/2019</td>
                                            <td></td>
                                            <td>(em: 06/05/2019) - 10/09/2018 a 10/03/2019 (em: 06/05/2019)
                                                - 10/09/2018 a 10/03/2019 (em: 10/05/2019) - 10/09/2018 a 10/03/2019
                                            </td>
                                            <td>(em: 06/05/2019) - null(em: 06/05/2019) - null(em: 10/05/2019) - null
                                            </td>
                                            <td>Obrigação=2 Supervisor fez=0 Estudante Fez=3 Estudante a mais=2 Falta=1
                                            </td>
                                            <td>LUCIELENA NISTA</td>
                                            <td>RES</td>
                                            <td>Sim</td>
                                            <td style="width:10%;">
                                                <div class="col-md-3">
                                                    <a href="{{route('avaliacao_supervisor.create')}}"
                                                        class="btn btn-primary"> <i class="fa fa-pencil"> </i></a>
                                                </div>
                                            </td>
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
