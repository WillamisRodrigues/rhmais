@extends('layout/app')
@section('titulo','Beneficios - Editar - TCE | RH MAIS')
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
                    @include('layout.alerta.flash-message')
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Beneficios - Editar</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            {!! Form::model($beneficios, array('route' => array('beneficio.update', $beneficios->id)))
                            !!} @method('PUT')
                            <div>
                                <div>
                                    <div>
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <div class="row" style="width:960px; margin: 20px auto;">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" value="{{$beneficios->nome}}"
                                                        class="form-control has-feedback-left"
                                                        placeholder="Nome do Benefício:" name="nome">
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" value="{{$beneficios->sigla}}"
                                                        class="form-control has-feedback-left"
                                                        placeholder="Sigla do Benefício:" name="sigla">
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    @foreach ($empresas as $empresa)
                                                        @if ($beneficios->empresa_id == $empresa->id)
                                                        <input type="text" value="{{ $empresa->nome_fantasia }}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Unidade concedente*" name="empresa_id">
                                                        @endif
                                                    @endforeach
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    {{-- <select class="form-control has-feedback-left" name="empresa_id">
                                                        <option value="{!! $beneficios->empresa !!}"> {!!
                                                            $beneficios->empresa !!}</option>
                                                        @foreach ($empresas as $empresa)
                                                        <option value="{!! $empresa->id !!}"> {!!
                                                            $empresa->nome_fantasia !!}</option>
                                                        @endforeach
                                                    </select> --}}
                                                    <span class="fa fa-home form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" value="{{$beneficios->agente_integracao}}"
                                                        class="form-control has-feedback-left" value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS" readonly
                                                        placeholder="Agente de Integração" name="agente_integracao">
                                                    <span class="fa fa-home form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <label for="">Selecione o Tipo</label>
                                                    <select class="form-control has-feedback-left" name="tipo">
                                                        <option value="1">Crédito</option>
                                                        <option value="2">Débito</option>
                                                    </select>
                                                    <span class="fa fa-list form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                       <button type="submit" class="btn btn-success" style="margin-top:20px!important; margin-left:130px!important;">Salvar Alterações</button>
                                       <a href="/beneficio" class="btn btn-danger" style="margin-top:20px!important;">Voltar</a>
                                    </div>
                                </div>
                                {!! Form::close() !!}
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
