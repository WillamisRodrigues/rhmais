@extends('layout/app')
@section('titulo','Termo Recesso Férias | RH MAIS')
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
                                <h2>TCE / Ad Ativo(s) - Gerar Termo de Recesso / Férias</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table list table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Estagiário
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Unidade Concedente
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Valor da Bolsa
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>TCE Inicio / FIM</th>
                                            <th>Período <br> Aquisitivo</th>
                                            <th>Ferias Concedidas</th>
                                            <th style="min-width: 8rem">Valor Direito</th>
                                            <th style="min-width: 8rem">Valor Recebido</th>
                                            <th style="min-width: 8rem">Valor Saldo</th>
                                            <th>TCE / Ad Assinado <input type="text" class="form-control"
                                                    style="width:100px;"> </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recessos as $recesso)
                                        <tr>
                                            <td>{{$recesso->nome}}</td>
                                            <td>{{$recesso->nome_fantasia}}</td>
                                            <td>{{"R$ " .number_format($recesso->bolsa, 2 )}}</td>
                                            <td>
                                                {{date('d/m/Y', strtotime($recesso->data_inicio)) }}<br>
                                                {{date('d/m/Y', strtotime($recesso->data_fim)) }}<br>
                                            </td>
                                            <td>
                                                {{-- <!-- {{date('d/m/Y', strtotime($recesso->data_inicio)) }}<br>02/08/2019
                                                {{ App\Http\Controllers\RecessoController::diasFerias($recesso->data_inicio, $recesso->data_fim) }}/12 <br>X Dias
                                                02/08/2019 <br> {{ date('d/m/Y', strtotime($recesso->data_fim)) }} <br> n/c --> --}}
                                                {{ App\Http\Controllers\RecessoController::periodoAquisitivo($recesso->tceId) }}
                                            </td>
                                            <td>
                                                @php
                                                foreach($listaRecessos as $listaRecesso){
                                                if($recesso->id == $listaRecesso->estagiario_id){
                                                App\Http\Controllers\RecessoController::dias_Ferias($listaRecesso->data_inicio,
                                                $listaRecesso->data_fim);
                                                }
                                                }
                                                @endphp
                                            </td>
                                            <td>
                                                {{-- 733,33 --}}
                                                R$
                                                {{ App\Http\Controllers\RecessoController::valorFerias($recesso->data_inicio, $recesso->bolsa) }}
                                            </td>
                                            <td>
                                                <!-- 0,00 -->
                                                @php
                                                foreach($listaRecessos as $listaRecesso){
                                                if($recesso->id == $listaRecesso->estagiario_id){
                                                echo "R$ ".$listaRecesso->vr_recebido;
                                                }
                                                }
                                                @endphp

                                            </td>
                                            <td>
                                                <!-- 733,33 -->
                                                <!-- {{ App\Http\Controllers\RecessoController::valorSaldo($recesso->tceId) }} -->
                                                @php
                                                foreach($listaRecessos as $listaRecesso){
                                                if($recesso->id == $listaRecesso->estagiario_id){
                                                echo "R$ ".$listaRecesso->vr_saldo;
                                                }
                                                }
                                                @endphp
                                            </td>
                                            <td>Sim</td>
                                            <td><a href="{!! route('termo_recesso.edit', [$recesso->id]) !!}"
                                                    class="btn btn-primary"> <i class="fa fa-plus"> </i>
                                                </a></td>
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
