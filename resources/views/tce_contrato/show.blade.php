@extends('layout/app')
@section('titulo','TCE e Aditivos - Gerar Plano de Estágio')
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
                @foreach ($tceContrato as $tce)

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>TCE e Aditivos - Gerar Plano de Estágio </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('plano_estagio.store') }}" method="post">
                                {{csrf_field()}}

                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 20px auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$tce->nome}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Estágiario" name="estagiario">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Curso" name="curso" value="{{$tce->curso}}">
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$tce->nome_instituicao}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Insituição de Ensino" name="instituicao">
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$tce->nome_fantasia}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Unidade Concedente" name="empresa">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$tce->supervisor}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Supervisor Estágio" name="supervisor">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div> --}}
                                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <select class="form-control has-feedback-left" name="supervisor" value="{{$tce->supervisor_id}}">
                                                                    @foreach ($supervisor as $sup)
                                                                        @if ($tce->supervisor_id == $sup->id)
                                                                       <option value="{{$sup->nome}}">{{$sup->nome}}</option>
                                                                        @endif
                                                                    @endforeach
                                                            @foreach ($supervisor as $sup)
                                                            <option value="{{ $sup->id }}">{{ $sup->nome }}</option>
                                                            @endforeach
                                                    </select>
                                                     </div>
                                                    {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$tce->orientador}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Orientador" name="orientador">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div> --}}
                                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <select class="form-control has-feedback-left" name="orientador" value="{{$tce->orientador_id}}">
                                                            @foreach ($orientador as $or)
                                                                   @if ($tce->orientador_id == $or->id)
                                                                <option value="{{$or->nome}}">{{$or->nome}}</option>
                                                                   @endif
                                                                @endforeach
                                                            @foreach ($orientador as $or)
                                                            <option value="{{ $or->id }}">{{ $or->nome }}</option>
                                                            @endforeach
                                                    </select>
                                                     </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Documento:</label>
                                                        <input type="text" value="{{date('d/m/Y', strtotime($tce->data_doc))}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Data Documento" name="data_doc">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Inicio:</label>
                                                        <input type="text" value="{{date('d/m/Y', strtotime($tce->data_inicio))}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Data Inicio" name="data_inicio">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                        <label for="">Data Fim:</label>
                                                        <input type="text" value="{{date('d/m/Y', strtotime($tce->data_fim))}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Data Fim" name="data_fim">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for="">Plano de Estágio </label>
                                                        <textarea class="form-control" placeholder="Plano Estágio"
                                                            name="plano"></textarea>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for="">Atividade </label>
                                                        <textarea class="form-control" placeholder="Atividade"
                                                            name="atividade"></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <label>Observação </label>
                                                        <textarea class="form-control" placeholder="Observação"
                                                            name="obs"></textarea>
                                                    </div>
                                                </div>
                                                <div class="btn-group mr-2 sw-btn-group-extra" role="group">
                                                    <button type="submit" class="btn btn-info">Enviar</button>
                                                    <button class="btn btn-danger">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            @endforeach
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
