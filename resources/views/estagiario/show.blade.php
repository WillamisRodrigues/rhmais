@extends('layout/app')
@section('titulo','Cadastro Usuário | RH MAIS')
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
                    <h2>Editar Usuário</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $estagiario->nome }}<br>
            <strong>Description:</strong> {{ $estagiario->email }}
        </p>
    </div>

                      <!-- SmartWizard html -->
                          <div>
                              <div id="step-1">
                                    <br>
                                  <div id="form-step-0" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nome Completo" name="nome">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Email" name="email">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" maxlength="12" class="form-control has-feedback-left" id="inputSuccess4" placeholder="RG" name="rg">
                                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" maxlength="14" class="form-control" id="inputSuccess5" placeholder="CPF" name="cpf">
                                        <span class="fa fa-newspaper-o form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Telefone" name="telefone">
                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Celular" name="celular">
                                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="date" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Data de Nascimento" name="nascimento">
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
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Bairro" name="bairro">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Endereço" name="endereco">
                                            <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" maxlength="5" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Complemento" name="complemento">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Numero" name="numero">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Estado" name="estado">
                                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Cidade" name="cidade">
                                            <span class="fa fa-newspaper-o form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        </div>
                                  </div>
                              </div>
                              <div id="step-3">
                                 <br>
                                  <div id="form-step-2" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Unidade Concedente" name="undcondente">
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Agente de Integração" name="agenteint">
                                        <span class="fa fa-home form-control-feedback right" aria-hidden="true"></span>
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