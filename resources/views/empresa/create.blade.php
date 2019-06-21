@extends('layout/app')
@section('titulo','Cadastro Empresas | RH MAIS')
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
                    <h2>Cadastro de Empresas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                  {{csrf_field()}}

                      <!-- SmartWizard html -->
                      <div id="smartwizard">
                          <ul>
                              <li><a href="#step-1">Passo 1<br /><small>Cadastro Empresa</small></a></li>
                              <li><a href="#step-2">Passo 2<br /><small>Cadastro de Endereço</small></a></li>
                          </ul>

                          <div>
                              <div id="step-1">
                                    <br>
                                  <div id="form-step-0" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="CNPJ / CPF">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Razão Social / Nome">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Insc. Estadual/Rg">
                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Cidade">
                            <span class="fa fa-newspaper-o form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Numero">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Bairro">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Telefone">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="End. Site">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Celular cont.">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Nome Representante">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="CPF Representante">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Email Representante">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Agente Integração">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Nome Fantasia">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Estado">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Endereço">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Complemento">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="CEP">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Celular">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Nome do Contato">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email Contato">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Celular Representante">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="R.G. Representante">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                                  </div>
                              </div>
                              <div id="step-2">
                                  <br>
                                  <div id="form-step-1" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Dias p/ Pgto Estágiario(a)">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Dia p/ Vcto Boleto">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Dia p/ Fechamento">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Quantidade TCE Plano">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Cobrança Valor Fixo">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Cobrança Valor %">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Custo Unitário">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Valor Adicional">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div>
                          <div class="row" style="width:500px; margin: 0 auto;">
                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" class="flat" checked="checked"> Proporcional
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
                              </div>
                            </div>
                          </div>
                      </div>
                      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
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