@extends('layout/app')
@section('titulo','Editar Orientador | RH MAIS')
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
                            <h2>Editar Orientador</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('orientador.update',  $orientador->id) }}" id="myForm" role="form"
                                data-toggle="validator" method="post" accept-charset="utf-8">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>
                                            <br>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{ $orientador->nome }}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Nome Completo" name="nome">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{ $orientador->cpf }}"
                                                            class="form-control has-feedback-left" placeholder="CPF:"
                                                            name="cpf">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{ $orientador->rg }}"
                                                            class="form-control has-feedback-left" placeholder="RG:"
                                                            name="rg">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{ $orientador->cidade }}"
                                                            class="form-control has-feedback-left" placeholder="Cidade:"
                                                            name="cidade">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="empresa">
                                                            <option value="{{ $orientador->empresa }}">
                                                                {{ $orientador->empresa }}</option>
                                                            @foreach ($empresas as $empresa)
                                                            <option value="{{ $empresa->nome_fantasia }}">
                                                                {{ $empresa->nome_fantasia }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div> --}}
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="instituicao">
                                                            <option value="{{ $orientador->instituicao }}">
                                                                {{ $orientador->instituicao }}</option>
                                                            @foreach ($instituicoes as $instituicao)
                                                            <option value="{{ $instituicao->nome_instituicao }}">
                                                                {{ $instituicao->nome_instituicao }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS" readonly placeholder="Agente de Integração"
                                                            name="agenteint">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-left:85px;">
                                           <button type="submit" class="btn btn-success" style="margin-top:20px!important; margin-left:130px!important;">Salvar Alterações</button>
                                            <a href="/orientador" class="btn btn-danger" style="margin-top:20px!important;">Voltar</a>
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
