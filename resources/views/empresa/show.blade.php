@extends('layout/app')
@section('titulo','Cadastro Empresa | RH MAIS')
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
                            <h2>Cadastro de Empresa</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                                Dados da Empresa<br />
                                                <small>cadastra dados da empresa</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                                Dados da Cobrança<br />
                                                <small>cadadtro da cobrança</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="step-1" style="overflow:hidden;">
                                    <form class="form-horizontal form-label-left input_mask">
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess2" placeholder="CNPJ / CPF">
                                                <span class="fa fa-user form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess3"
                                                    placeholder="Razão Social / Nome">
                                                <span class="fa fa-user form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Insc. Estadual/Rg">
                                                <span class="fa fa-newspaper-o form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Cidade">
                                                <span class="fa fa-newspaper-o form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Numero">
                                                <span class="fa fa-phone form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Bairro">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Telefone">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="End. Site">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Celular cont.">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Nome Representante">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="CPF Representante">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Email Representante">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Agente Integração">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Nome Fantasia">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Estado">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Endereço">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Complemento">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="CEP">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Celular">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Nome do Contato">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="Email Contato">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" id="inputSuccess5"
                                                    placeholder="Celular Representante">
                                                <span class="fa fa-phone form-control-feedback right"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    id="inputSuccess4" placeholder="R.G. Representante">
                                                <span class="fa fa-calendar form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                </div>
                                <div id="step-2">
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4"
                                                placeholder="Dias p/ Pgto Estágiario(a)">
                                            <span class="fa fa-calendar form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5"
                                                placeholder="Dia p/ Vcto Boleto">
                                            <span class="fa fa-phone form-control-feedback right"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4"
                                                placeholder="Dia p/ Fechamento">
                                            <span class="fa fa-calendar form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5"
                                                placeholder="Quantidade TCE Plano">
                                            <span class="fa fa-phone form-control-feedback right"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4"
                                                placeholder="Cobrança Valor Fixo">
                                            <span class="fa fa-calendar form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5"
                                                placeholder="Cobrança Valor %">
                                            <span class="fa fa-phone form-control-feedback right"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4"
                                                placeholder="Custo Unitário">
                                            <span class="fa fa-calendar form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5"
                                                placeholder="Valor Adicional">
                                            <span class="fa fa-phone form-control-feedback right"
                                                aria-hidden="true"></span>
                                        </div>
                                        <div class="row" style="width:500px; margin: 0 auto;">
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" checked="checked">
                                                        Proporcional
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" class="flat"> Está Ativo
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" class="flat"> Dias Comerciais
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" class="flat"> Roda Folha
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End SmartWizard Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
@endsection
