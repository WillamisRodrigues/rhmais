@extends('layout/app')
<<<<<<< HEAD
@section('titulo','Cadastro Empresas | RH MAIS')
=======
@section('titulo','Cadastro Usuário | RH MAIS')
>>>>>>> 6c453fd8fa29614c2b90f28107a12366d3f41c9b
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
<<<<<<< HEAD
                    <h2>Cadastro de Empresas</h2>
=======
                    <h2>Cadastro de Estagiário</h2>
>>>>>>> 6c453fd8fa29614c2b90f28107a12366d3f41c9b
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('estagiario.store') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                  {{csrf_field()}}
<<<<<<< HEAD

                      <!-- SmartWizard html -->
                      <div id="smartwizard">
                          <ul>
                              <li><a href="#step-1">Passo 1<br /><small>Cadastro Empresa</small></a></li>
                              <li><a href="#step-2">Passo 2<br /><small>Cadastro de Endereço</small></a></li>
=======
                      <!-- SmartWizard html -->
                      <div id="smartwizard">
                          <ul>
                          <li><a href="#step-1">Passo 1<br /><small>Dados Pessoais</small></a></li>
                              <li><a href="#step-2">Passo 2<br /><small>Escolaridade</small></a></li>
                              <li><a href="#step-3">Passo 3<br /><small>Outras informações</small></a></li>
>>>>>>> 6c453fd8fa29614c2b90f28107a12366d3f41c9b
                          </ul>

                          <div>
                              <div id="step-1">
<<<<<<< HEAD
                                    <br>
                                  <div id="form-step-0" role="form" data-toggle="validator">
                                        kkk
=======
                              <div>
                                    <br>
                                  <div id="form-step-0" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Nome Completo" name="nome">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Email" name="email">
                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" maxlength="12" class="form-control rg has-feedback-left" placeholder="RG" name="rg">
                                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" maxlength="14" class="form-control cpf has-feedback-left"  placeholder="CPF" name="cpf">
                                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control telefone has-feedback-left" placeholder="Telefone" name="telefone">
                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control telefone has-feedback-left" placeholder="Celular" name="celular">
                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control nascimento has-feedback-left" placeholder="Data de Nascimento" name="data_nascimento">
                                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" placeholder="Bairro" name="bairro">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" placeholder="Endereço" name="endereco">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" maxlength="20" class="form-control has-feedback-left" placeholder="Complemento" name="complemento">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" placeholder="Numero" name="numero">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Estado" name="estado">
                                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" placeholder="Cidade" name="cidade">
                                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Unidade Concedente" name="und_concedente">
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Sexo" name="Sexo">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Filiação Pai" name="filiacao_pai">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Série Ctps:" name="serie_ctps">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Cor/Raça" name="cor">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Filiação Mãe" name="cor">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Ctps" name="ctps">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" placeholder="Número PIS" name="pis">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" value="RH Mais" readonly placeholder="Agente de Integração" name="agente_int">
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                  </div>

                              </div>
                              <div id="step-2">
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                    <div class="row" style="width:960px; margin: 20px auto;">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="nivel">
                                                    <option>Selecione um nível</option>
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="periodo">
                                                <select class="form-control has-feedback-left" name="curso">
                                                    <option>Período</option>
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>

                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Matricula" name="matricula">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Previsão Término Curso" name="previsao_termino">
                                                <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              <div id="step-3">
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="row" style="width:960px; margin: 20px auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Banco/Agência" name="banco_agencia">
                                                <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Conta" name="conta">
                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Código da vaga" name="codigo_vaga">
                                                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Criar Senha" name="criar_senha">
                                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <textarea class="form-control" placeholder="Sua observação" name="observacao">
                                                <textarea class="form-control" placeholder="Sua observação" name="criar_senha">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
>>>>>>> 6c453fd8fa29614c2b90f28107a12366d3f41c9b
                                  </div>
                              </div>
                              <div id="step-2">
                                  <br>
                                  <div id="form-step-1" role="form" data-toggle="validator">
                                        kdk
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
<<<<<<< HEAD
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
=======
>>>>>>> 6c453fd8fa29614c2b90f28107a12366d3f41c9b
        <!-- /page content -->

        <!-- footer content -->
        @include('layout.footer')
        <!-- /footer content -->
      </div>
    </div>
@endsection