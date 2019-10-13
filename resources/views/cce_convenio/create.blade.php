@extends('layout/app')
@section('titulo','CCE - Gerar CONVÊNIOS - AGENTES de INTEGRAÇÃO | RH MAIS')
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
                            <h2>CCE - Gerar CONVÊNIOS - AGENTES de INTEGRAÇÃO</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('cce_convenio.store') }}" id="myForm" role="form"
                                data-toggle="validator" method="post" accept-charset="utf-8">
                                {{csrf_field()}}
                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>
                                            <br>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="instituicao_id">
                                                            <option>Institução de Ensino</option>
                                                            @foreach ($instituicoes as $instituicao)
                                                            <option value="{{ $instituicao->id }}">
                                                                {{ $instituicao->nome_instituicao }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="agente_integracao">
                                                            <option>Koster & Koster Consultoria em RH LTDA</option>
                                                        </select>
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data inicio:</label>
                                                        <input type="text"
                                                            class="form-control nascimento has-feedback-left"
                                                            placeholder="Data de Inicio" name="data_inicio" value="">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Fim:</label>
                                                        <input type="text"
                                                            class="form-control nascimento has-feedback-left"
                                                            placeholder="Data de Final" name="data_fim" value="">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Documento:</label>
                                                        <input type="text"
                                                            class="form-control nascimento has-feedback-left"
                                                            placeholder="Data de Documento" name="data_doc" value="">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="seguro_id">
                                                            <option>Apólice/Seguradora</option>
                                                            @foreach ($seguro as $seg)
                                                            <option value="{{ $seg->id }}">{{ $seg->nome }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <label for="">Observação:</label>
                                                        <textarea class="form-control" placeholder="Sua observação"
                                                            name="obs">
                                                </textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <button type="submit" class="btn btn-success">Salvar</button>
                                                        <button class="btn btn-primary">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
