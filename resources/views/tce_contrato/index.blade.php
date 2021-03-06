@extends('layout/app')
@section('titulo','Lista de Contratos Ativos - TCE | RH MAIS')
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
                <!-- <a href="{{url('tce/exportar')}}">Print  PDF</a> -->
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            @include('layout.alerta.flash-message')
                        <div class="x_panel">
                            <div class="x_title">
                                <a href="{{route('tce_contrato.create')}}" class="btn btn-success pull-right"> <i
                                        class="fa fa-plus"> </i> Adicionar Novo Contrato</a>
                                <h2>AGENTE DE INTEGRAÇÃO - Lista de Contratos Ativos - TCE</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table list table-striped table-responsive w-auto table-bordered"
                                    style="zoom:0.8;">
                                    <thead>
                                        <tr>
                                            <th>Estagiario
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Un. Concedente
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Instituição
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Valor Bolsa
                                                <input type="text" style="width:100px;" class="form-control">
                                            </th>
                                            <th>Data Inicio
                                                <input type="text" style="width:100px;" class="form-control">
                                            </th>
                                            <th>Data Fim
                                                <input type="text" style="width:100px;" class="form-control">
                                            </th>
                                            <th>Contrato
                                                <input type="text" style="width:100px;" class="form-control">
                                            </th>
                                            <th>Assinado
                                                <input type="text" style="width:100px;" class="form-control">
                                            </th>
                                            <th>Ativo
                                                <input type="text" style="width:50px;" class="form-control">
                                            </th>
                                            <th>Obrigatório
                                                <input type="text" style="width:100px;" class="form-control">
                                            </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tces as $tce)
                                        <tr>
                                            <td>{{ $tce->estagiario->nome }}</td>
                                            <td>{{ $tce->empresa->nome_fantasia }}</td>
                                            <td>{{ $tce->instituicao->nome_instituicao }}</td>
                                            <td>R$ {{ $tce->bolsa }}</td>
                                            <td>{{date('d/m/Y', strtotime($tce->data_inicio)) }}</td>
                                            <td>{{ date('d/m/Y', strtotime($tce->data_fim ))}}</td>
                                            <td>{{ $tce->contrato }}</td>
                                            <td>
                                                @if ($tce->assinado == '1')
                                                Sim
                                                @else
                                                Não
                                                @endif
                                            </td>
                                            <td>
                                                @if ($tce->ativo == '1')
                                                Sim
                                                @else
                                                Não
                                                @endif
                                            </td>
                                            <td>
                                                 @if ( $tce->obrigatorio == '1')
                                                Sim
                                                @else
                                                Não
                                                @endif
                                            </td>
                                            <td style="width:22%;">
                                                <a href="{{ action('EstagiarioController@contratoTce', $tce->estagiario->id) }}"
                                                   class="btn btn-primary" title="Imprimir TCE" target="_blank"><i class="fa fa-print"></i></a>
                                                <a href="{{ route('tce_contrato.edit',[$tce->id])}}"
                                                    class="btn btn-danger" title="Gerar Rescisão"><i class="fa fa-book"></i> </a>
                                                <a href="{{ route('editar_contrato.editar', [$tce->id]) }}"
                                                    class="btn btn-success" title="Editar"> <i class="fa fa-pencil"> </i></a>
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
