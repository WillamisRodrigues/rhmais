@extends('layout/app')
@section('titulo','Cadastro Instituição | RH MAIS')
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
                    <h2>Cadastro de Instituição</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('instituicao.store') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                  {{csrf_field()}}

                      <!-- SmartWizard html -->
                      <div id="smartwizard">
                          <ul>
                              <li><a href="#step-1">Passo 1<br /><small>Cadastro Empresa</small></a></li>
                              <li><a href="#step-2">Passo 2<br /><small>Cadastro de Endereço</small></a></li>
                              <li><a href="#step-3">Passo 3<br /><small> Cadastro Responsável</small></a></li>
                          </ul>

                          <div>
                              <div id="step-1">
                                    <br>
                                  <div id="form-step-0" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" class="form-control cnpj has-feedback-left" placeholder="CNPJ" name="cnpj" value="{{old('cnpj')}}">
                                      <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left" placeholder="Razão Social" name="razao_social" value="{{old('razao_social')}}">
                                      <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"  placeholder="Instituição" name="nome_instituicao" value="{{old('nome_instituicao')}}">
                                      <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left" placeholder="Mantenedora" name="mantenedora" value="{{old('mantenedora')}}">
                                      <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"placeholder="Insc. Estadual" name="insc_estadual" value="{{old('insc_estadual')}}">
                                      <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"  placeholder="Endereço Site" name="site_url" value="{{old('site_url')}}">
                                      <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                  </div>

                              </div>
                              <div id="step-2">
                                  <br>
                                  <div id="form-step-1" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                                  @include('layout.selects.estado-cidade')
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Bairro" name="bairro" value="{{old('bairro')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Endereço" name="endereco" value="{{old('endereco')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Complemento" name="complemento" value="{{old('complemento')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left"  placeholder="Numero" name="numero" value="{{old('numero')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control cep has-feedback-left" placeholder="CEP" name="cep" value="{{old('cep')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control telefone has-feedback-left"  placeholder="Telefone" name="telefone" value="{{old('telefone')}}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                                  </div>
                              </div>
                              <div id="step-3">
                                 <br>
                                  <div id="form-step-2" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left"  placeholder="Nome do Contato" name="nome_contato" value="{{old('nome_contato')}}">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left"  placeholder="Email do Contato" name="email_contato" value="{{old('email_contato')}}">
                            <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control telefone has-feedback-left" placeholder="Celular Contato" name="cel_contato" value="{{old('cel_contato')}}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control telefone has-feedback-left"  placeholder="Celular Representante" name="cel_representante" value="{{old('cel_rep')}}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left"  placeholder="Email do Contato" name="email_contato" value="{{old('email_contato')}}">
                            <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left" placeholder="Email Representante" name="email_rep" value="{{old('email_rep')}}">
                            <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control cpf has-feedback-left" placeholder="CPF Representante" name="cpf_rep" value="{{old('cpf_rep')}}">
                            <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control rg has-feedback-left" placeholder="RG Represetante" name="rg_rep" value="{{old('rg_rep')}}">
                            <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
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