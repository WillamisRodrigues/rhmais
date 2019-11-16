@extends('layout/app')
@section('titulo','Usuários do Sistema | RH MAIS')
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
                                <h2>Estagiários</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table list table-striped table-bordered" style="max-width: 100px">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 12vw">Nome
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>CPF
                                                <input type="text" class="form-control" style="width:200px;">
                                            </th>
                                            <th>Cidade
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Ativo
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th style="min-width: 7vw">Gerar Avaliação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($estagiarios as $estagiario)
                                        <tr>
                                            <td>{{$estagiario->nome}}</td>
                                            <td>{{$estagiario->cpf}}</td>
                                            <td>{{$estagiario->cidade}}</td>
                                            <td>
                                                @if ($estagiario->status == '1')
                                                Sim
                                                @else
                                                Não
                                                @endif
                                            </td>
                                            <td>
                                                <button title="Gerar Avaliação em PDF" class="btn btn-primary">
                                                    <i class="fa fa-file"></i>
                                                </button>
                                                <button title="Gerar Avaliação Online" class="btn btn-warning">
                                                    <i class="fa fa-star"></i>
                                                </button>
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
