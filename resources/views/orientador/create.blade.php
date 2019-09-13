@extends('layout/app')
@section('titulo','Orientador - Cadastro - TCE | RH MAIS')
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
                    <h2>Orientador - Cadastro</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('orientador.store') }}" method="post">
                  {{csrf_field()}}

                      <!-- SmartWizard html -->
                      <div>
                          <div>
                              <div>
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                      <div class="row" style="width:960px; margin: 20px auto;">
                                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="CPF:" name="cpf">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="RG:" name="rg">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Nome do orientador:" name="nome">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            @include('layout.selects.estado-cidade')
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Numero" name="numero">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Endereco:" name="endereco">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="CEP:" name="cep">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Complemento:" name="complemento">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Telefone:" name="telefone">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Celular:" name="celular">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Email:" name="email">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Cargo:" name="cargo">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Formação:" name="formacao">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                             <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="instituicao_id">
                                                    <option>Selecione Instituição de Ensino:</option>
                                                      @foreach ($instituicoes as $instituicao)
                                                        <option value="{{ $instituicao->id }}">{{ $instituicao->nome_instituicao }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" value="RH Mais" readonly placeholder="Agente de Integração" name="agente_integracao">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="empresa_id">
                                                    <option>Selecione Unidade Concedente:</option>
                                                     @foreach ($empresas as $empresa)
                                                        <option value="{{ $empresa->id }}">{{ $empresa->nome_fantasia }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    <div class="btn-group mr-2 sw-btn-group-extra" role="group">
                                      <button type="submit" class="btn btn-info">Enviar</button>
                                      <button class="btn btn-danger">Cancelar</button>
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