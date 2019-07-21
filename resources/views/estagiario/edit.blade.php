@extends('layout/app')
@section('titulo','Editar Estagiário | RH MAIS')
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
                    <h2>Editar Estagiário</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('estagiario.update',  $estagiario->id) }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
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
                                        <input type="text" value="{{ $estagiario->nome }}" class="form-control has-feedback-left" placeholder="Nome Completo" name="nome">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $estagiario->email }}" class="form-control has-feedback-left" placeholder="Email" name="email">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $estagiario->rg }}" maxlength="12" class="form-control has-feedback-left" placeholder="RG" name="rg">
                                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $estagiario->cpf }}" maxlength="14" class="form-control has-feedback-left"  placeholder="CPF" name="cpf">
                                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $estagiario->telefone }}" class="form-control has-feedback-left" placeholder="Telefone" name="telefone">
                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $estagiario->celular }}" class="form-control has-feedback-left" placeholder="Celular" name="celular">
                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="date" value="{{ $estagiario->data_nascimento }}" class="form-control has-feedback-left" placeholder="Data de Nascimento" name="data_nascimento">
                                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" value="{{ $estagiario->bairro }}" class="form-control has-feedback-left" placeholder="Bairro" name="bairro">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" value="{{ $estagiario->endereco }}" class="form-control has-feedback-left" placeholder="Endereço" name="endereco">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" value="{{ $estagiario->complemento }}" maxlength="5" class="form-control has-feedback-left" placeholder="Complemento" name="complemento">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>


                                        </div>
                                    <div class="row" style="width:960px; margin: 0 auto;">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" value="{{ $estagiario->numero }}" class="form-control has-feedback-left" placeholder="Numero" name="numero">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" value="{{ $estagiario->estado }}" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Estado" name="estado">
                                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" value="{{ $estagiario->cidade }}" class="form-control has-feedback-left" placeholder="Cidade" name="cidade">
                                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $estagiario->unid_concendente }}" class="form-control has-feedback-left" placeholder="Unidade Concedente" name="und_condente">
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="sexo">
                                                    <option>Selecione Sexo</option>
                                                    <option>Masculino</option>
                                                    <option>Feminino</option>
                                                </select>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            
                                        </div>
                                        <div class="row" style="width:960px; margin: 0 auto;">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" value="RH Mais" readonly placeholder="Agente de Integração" name="agenteint">
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="nivel">
                                                    <option>Selecione um nível</option>
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="curso">
                                                    <option>Selecione um curso</option>
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="curso">
                                                    <option>Período</option>
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="horario">
                                                    <option>Horário de Estudo</option>
                                                </select>
                                                <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="instituicao_ensino">
                                                    <option>Instituição de Ensino</option>
                                                </select>
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{ $estagiario->matricula }}" class="form-control has-feedback-left" placeholder="Matricula" name="matricula">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{ $estagiario->prev_termino }}" class="form-control has-feedback-left" placeholder="Previsão Término Curso" name="prev_termino">
                                                <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{ $estagiario->banco_agencia }}" class="form-control has-feedback-left" placeholder="Banco/Agência" name="banco_agencia">
                                                <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{ $estagiario->conta }}" class="form-control has-feedback-left" placeholder="Conta" name="conta">
                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{ $estagiario->codigo_vaga }}" class="form-control has-feedback-left" placeholder="Código da vaga" name="codigo_vaga">
                                                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{ $estagiario->criar_senha }}" class="form-control has-feedback-left" placeholder="Criar Senha" name="criar_senha">
                                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                    <input type="checkbox" class="flat"> Esta Ativo
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <textarea class="form-control" placeholder="Sua observação" name="criar_senha">
                                                </textarea>
                                            </div>
                                        </div>
                                        <button  type="submit"class="btn btn-success" style="margin: 20px auto; display:block;">Salvar Alterações</button>
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