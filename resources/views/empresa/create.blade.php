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
              @include('layout.alerta.flash-message')
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastro de Empresas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('empresa.store') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
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
                            <input type="text" class="form-control cnpj has-feedback-left" placeholder="CNPJ / CPF" name="cnpj" value="{{old('cnpj')}}">
                            <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Razão Social / Nome" name="razao_social" value="{{old('razao_social')}}">
                            <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          @include('layout.selects.estado-cidade')
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Insc. Estadual/Rg" name="insc_estadual" value="{{old('insc_estadual')}}" >
                            <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Numero" name="numero" value="{{old('numero')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Bairro" name="bairro" value="{{old('bairro')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control telefone has-feedback-left" placeholder="Telefone" name="telefone" value="{{old('telefone')}}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="End. Site" name="site_url" value="{{old('site_url')}}">
                            <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control telefone has-feedback-left" placeholder="Celular cont." name="celular" value="{{old('celular')}}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Nome Representante" name="nome_rep" value="{{old('nome_rep')}}">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control cpf has-feedback-left" placeholder="CPF Representante" name="cpf_rep" value="{{old('cpf_rep')}}">
                            <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left" placeholder="Email Representante" name="email_rep" value="{{old('email_rep')}}">
                            <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS" value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS" name="agente_integracao">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Nome Fantasia" name="nome_fantasia" value="{{old('nome_fantasia')}}">
                            <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left"  placeholder="Endereço" name="endereco" value="{{old('endereco')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Complemento"  name="complemento" value="{{old('complemento')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control cep has-feedback-left"  placeholder="CEP" name="cep" value="{{old('cep')}}">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control telefone has-feedback-left" placeholder="Celular" name="celular_rep" value="{{old('celular_rep')}}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left"  placeholder="Nome do Contato" name="nome_contato" value="{{old('nome_contato')}}">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Email Contato" name="email_contato" value="{{old('email_contato')}}">
                            <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control telefone has-feedback-left"  placeholder="Celular Representante" name="celular_rep" value="{{old('celular_rep')}}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control rg has-feedback-left" placeholder="R.G. Representante" name="rg_rep" value="{{old('rg_rep')}}">
                            <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                        </div>
                         </div>
                              <div id="step-2">
                                  <br>
                                  <div id="form-step-1" role="form" data-toggle="validator">
                                  <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Dia p/ Pgto Estágiario(a)</label>
                            <input type="date" class="form-control has-feedback-left" placeholder="Dia p/ Pgto Estágiario(a)" name="data_estagiario" value="{{old('data_estagiario')}}">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Dia p/ Vcto Boleto</label>
                            <input type="date" class="form-control has-feedback-left" placeholder="Dia p/ Vcto Boleto" name="data_boleto" value="{{old('data_boleto')}}">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Dia p/ Fechamento</label>
                            <input type="date" class="form-control has-feedback-left" placeholder="Dia p/ Fechamento" name="data_fechamento" value="{{old('data_fechamento')}}">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        <div class="row" style="width:960px; margin: 0 auto;">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" placeholder="Custo Unitário" name="custo_unitario" value="{{old('custo_unitario')}}">
                            <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="row" style="width:500px; margin: 0 auto;">
                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" class="flat"> Proporcional
                                </label>
                                <label>
                                  <input type="checkbox" class="flat" value="1" checked="checked"> Está Ativo
                                  <input type="hidden" value="1" name="ativo" />
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