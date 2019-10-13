@extends('layout/app')
@section('titulo','TCE e Aditivos de Contratos Ativos - Gerar Avaliações - TCE | RH MAIS')
@section('conteudo')
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('layout.menu.menu')
                <!-- /menu profile quick info -->

                <br />
                @include('layout.menu.sidebar')
                <!-- /sidebar menu -->
            </div>
        </div>
        @include('layout.menu.menutop')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>TCE e Aditivos de Contratos Ativos - Gerar Avaliações</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('beneficio.store') }}" method="post">
                                {{csrf_field()}}

                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="estagiario_id">
                                                    <option>Selecione Estagiário:</option>
                                                    @foreach ($estagiarios as $estagiario)
                                                    <option value="{{ $estagiario->id }}">{{ $estagiario->nome }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <span class="fa fa-home form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="instituicao_id">
                                                    <option>Instituição de ensino:</option>
                                                    @foreach ($instituicoes as $instituicao)
                                                    <option value="{{ $instituicao->id }}">
                                                        {{ $instituicao->nome_instituicao }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="fa fa-home form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="empresa_id">
                                                    <option>Selecione Unidade Concedente:</option>
                                                    @foreach ($empresas as $empresa)
                                                    <option value="{{ $empresa->id }}">{{ $empresa->nome_fantasia }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <span class="fa fa-home form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="supervisor_id">
                                                    <option>Supervisor:</option>
                                                    @foreach ($supervisores as $supervisor)
                                                    <option value="{{ $supervisor->id }}">{{ $supervisor->nome }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <span class="fa fa-home form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 20px auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Período Avaliativo: *"
                                                            name="periodo_avaliativo">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div id="form-step-0" role="form" data-toggle="validator">
                                                        <div class="row" style="width:960px; margin: 20px auto;">
                                                            <div
                                                                class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                                <input type="text"
                                                                    class="form-control has-feedback-left"
                                                                    placeholder="Data Documento:* " name="data_doc">
                                                                <span class="fa fa-user form-control-feedback left"
                                                                    aria-hidden="true"></span>
                                                            </div>
                                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                                <div class="row"
                                                                    style="width:960px; margin: 20px auto;">
                                                                    <div
                                                                        class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                                        <input type="text"
                                                                            class="form-control has-feedback-left"
                                                                            placeholder="Texto Obs.: " name="obs">
                                                                        <span
                                                                            class="fa fa-user form-control-feedback left"
                                                                            aria-hidden="true"></span>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-success"
                                                                    style="margin: 20px auto; display:block;">Gerar
                                                                    Avaliação</button>
                                                                <button class="btn btn-success"
                                                                    style="margin: 20px auto; display:block;">Voltar</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
                            </form>
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
