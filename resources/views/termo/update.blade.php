@extends('layout/app')
@section('titulo','Gerar Termo de Recesso/Férias | RH MAIS')
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
                                <h2>Gerar Termo de Recesso/Férias</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Estagiário:</strong> {!! $estagiario->nome !!}
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Instituição de Ensino:</strong> {!! $instituicao->razao_social !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Unidade Concedente:</strong>
                                        {!! $empresa->nome_fantasia !!}
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Valor Bolsa-Auxílio:</strong>
                                        {!! $contrato->bolsa !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Data Início TCE:</strong>
                                        {!! $contrato->data_doc !!}
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Data de Início:</strong>
                                        {!! $contrato->data_inicio !!}
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Data Fim:</strong>
                                        {!! $contrato->data_fim !!}
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Benefício:</strong>
                                        {!! $contrato->beneficio !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Apólice/Seguradora:</strong>
                                        {!! $contrato->apolice !!}
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Horário Estágio:</strong>
                                        {!! $contrato->horario !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Atividade/Setor:</strong>
                                        {!! $atividade->nome !!}
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <strong>Supervisor Estágio:</strong>
                                        {!! $supervisor->nome !!}
                                    </div>
                                </div>
                                <hr>
                                {!! Form::open(['route' => 'termo_recesso.store']) !!}
                                <input type="hidden" name="estagiario_id" value="{!! $estagiario->id !!}">
                                <input type="hidden" name="empresa_id" value="{!! $empresa->id !!}">
                                <input type="hidden" name="bolsa" value="{!! $contrato->bolsa !!}">
                                <input type="hidden" name="contrato_inicio" value="{!! $contrato->data_inicio !!}">
                                <input type="hidden" name="contrato_fim" value="{!! $contrato->data_fim !!}">
                                <input type="hidden" name="contrato_id" value="{!! $contrato->id !!}">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <select class="form-control has-feedback-left" name="motivo_id">
                                            <option>Selecione o Motivo:</option>
                                            @foreach($motivos as $motivo)
                                            <option value="{!! $motivo->id !!}">{!! $motivo->nome !!}</option>
                                            @endforeach
                                        </select>
                                        <span class="fa fa-align-justify form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input required type="text" class="form-control has-feedback-left"
                                            placeholder="Observação" name="observacao">
                                        <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Início do Recesso</label>
                                        <input required type="date" class="form-control has-feedback-left" name="inicio_recesso">
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Fim do Recesso</label>
                                        <input required type="date" class="form-control has-feedback-left" name="fim_recesso">
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Data do Documento</label>
                                        <input required type="date" class="form-control has-feedback-left" name="data_doc">
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="btn-group mr-2 sw-btn-group-extra" role="group">
                                    <button type="submit" class="btn btn-info">Enviar</button>
                                    <button class="btn btn-danger">Cancelar</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
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
