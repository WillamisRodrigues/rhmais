@extends('layout/app')
@section('titulo','CCE - Gerar CONVÊNIOS - AGENTES de INTEGRAÇÃO')
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
                            <h2>CCE - Gerar CONVÊNIOS - AGENTES de INTEGRAÇÃO </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{url('cce_convenio', [$cce->id])}}" id="myForm" role="form"
                                data-toggle="validator" method="post" accept-charset="utf-8">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>

                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 20px auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Agente Integração" name="agente_integracao">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$instituicoes->nome_instituicao}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Instituição de Ensino">
                                                            <input type="hidden" name="instituicao_id" value="{{$instituicoes->id}}">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    {{-- <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$apolices->nome}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Apólice/Seguradora" name="seguradora_id">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div> --}}
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Documento</label>
                                                        <input type="text" value="{{date('d/m/Y', strtotime ($cce->data_doc))}}"
                                                            class="form-control has-feedback-left data"
                                                            placeholder="Data Documento" name="data_doc">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Ínicio</label>
                                                        <input type="text" value="{{date('d/m/Y', strtotime ($cce->data_inicio))}}"
                                                            class="form-control has-feedback-left data"
                                                            placeholder="Data Inicio" name="data_inicio">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Fim</label>
                                                        <input type="text" value="{{date('d/m/Y', strtotime ($cce->data_fim))}}"
                                                            class="form-control has-feedback-left data"
                                                            placeholder="Data Fim" name="data_fim">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <label>Sua observação</label>
                                                        <textarea class="form-control"
                                                            name="obs">{{$cce->obs}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="btn-group mr-2 sw-btn-group-extra" role="group">
                                                    <button type="submit" class="btn btn-info">Enviar</button>
                                                    <a href="/cce_convenio" class="btn btn-danger">Cancelar</a>
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
