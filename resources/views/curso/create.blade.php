@extends('layout/app')
@section('titulo','Cadastro curso | RH MAIS')
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
                            <h2>Cadastro de Curso</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('curso.store') }}" id="myForm" role="form" data-toggle="validator"
                                method="post" accept-charset="utf-8">
                                {{csrf_field()}}

                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div id="step-2">
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 20px auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Nome Curso" name="nome">
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="nivel">
                                                            <option value="SELECION NÍVEL">SELECION NÍVEL</option>
                                                            <option value="FUNDAMENTAL - NF">FUNDAMENTAL - NF</option>
                                                            <option value="NÍVEL MÉDIO - NM">NÍVEL MÉDIO - NM</option>
                                                            <option value="NÍVEL MÉDIO TÉCNICO - MT">NÍVEL MÉDIO TÉCNICO - MT</option>
                                                            <option value="NÍVEL SUPERIOR- NS">NÍVEL SUPERIOR- NS</option>
                                                        </select>
                                                        {{-- <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Nivel" name="nivel"> --}}
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-group mr-2 sw-btn-group-extra" role="group">
                                                <button class="btn btn-info">Enviar</button>
                                                <a href="/curso" class="btn btn-danger">Cancelar</a>
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
