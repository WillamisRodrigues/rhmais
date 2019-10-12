@extends('layout/app')
@section('titulo','Editar Instituição | RH MAIS')
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
                    <h2>Editar Instituição</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('instituicao.update', $instituicao->id) }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                 <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <!-- SmartWizard html -->
                      <i class="fas fa-divide"></i>
                          <div>
                              <div>
                                    <br>
                                  <div id="form-step-0" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->cnpj }}" class="form-control cnpj has-feedback-left" placeholder="CNPJ" name="cnpj">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->razao_social }}" class="form-control has-feedback-left" placeholder="Razão Social" name="razao_social">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->nome_instituicao }}" class="form-control has-feedback-left"  placeholder="Instituição" name="nome_instituicao">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->mantenedora }}" class="form-control has-feedback-left" placeholder="Mantenedora" name="mantenedora">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->insc_estadual }}" class="form-control has-feedback-left"placeholder="Insc. Estadual" name="insc_estadual">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->site_url }}"class="form-control has-feedback-left"  placeholder="Endereço Site" name="site_url">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->estado }}"class="form-control has-feedback-left"  placeholder="Estado" name="estado">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->cidade }}" class="form-control has-feedback-left" placeholder="Cidade" name="cidade">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->bairro }}" class="form-control has-feedback-left" placeholder="Bairro" name="bairro">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->rua }}" class="form-control has-feedback-left" placeholder="Endereço" name="rua">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->complemento }}" class="form-control has-feedback-left" placeholder="Complemento" name="complemento">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->numero }}" class="form-control has-feedback-left"  placeholder="Numero" name="numero">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->cep }}" class="form-control cep has-feedback-left" placeholder="CEP" name="cep">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->telefone }}" class="form-control telefone has-feedback-left"  placeholder="Telefone" name="telefone">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->nome_contato }}" class="form-control has-feedback-left"  placeholder="Nome do Contato" name="nome_contato">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->nome_rep }}" class="form-control has-feedback-left"  placeholder="Nome do Representante" name="nome_rep">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->celular_contato }}" class="form-control telefone has-feedback-left" placeholder="Celular Contato" name="celular_contato">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->celular_rep }}" class="form-control telefone has-feedback-left"  placeholder="Celular Representante" name="celular_rep">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->email_rep }}" class="form-control has-feedback-left"  placeholder="Email do Representante" name="email_rep">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->email_contato }}" class="form-control has-feedback-left" placeholder="Email Contato" name="email_contato">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->cpf_rep }}" class="form-control cpf has-feedback-left" placeholder="CPF Representante" name="cpf_rep">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" value="{{ $instituicao->rg_rep}}" class="form-control rg has-feedback-left" placeholder="RG Represetante" name="rg_rep">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                  <button class="btn btn-success" style="margin:20px auto; display:block;">Salvar Alterações</button>
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