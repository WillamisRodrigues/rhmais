@extends('layout/app')
@section('titulo','AGENTE DE INTEGRAÇÃO - Lista de Contratos Ativos - TCE | RH MAIS')
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
                    <h2>AGENTE DE INTEGRAÇÃO - Lista de Contratos Ativos - TCE</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('curso.store') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                  {{csrf_field()}}

                      <!-- SmartWizard html -->
                      <div>
                          <div>
                              <div>
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                      <div class="row" style="width:960px; margin: 20px auto;">
                                           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" value="RH Mais" readonly placeholder="Agente de Integração" name="agente_int">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Selecione o Estagiário:</option>
                                                     @foreach ($estagiarios as $key => $value)
                                                        <option value="{{ $key }}">{{ $value->nome }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Selecione Unidade Concedente:</option>
                                                     @foreach ($empresas as $key => $value)
                                                        <option value="{{ $key }}">{{ $value->nome_fantasia }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="instituicao">
                                                    <option>Selecione Instituição de Ensino:</option>
                                                      @foreach ($inst as $key => $value)
                                                        <option value="{{ $key }}">{{ $value->nome_instituicao }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Valor Bolsa-Auxílio:" name="valor_adicional" value="{{old('valor_adicional')}}">
                                              <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="date" class="form-control has-feedback-left" placeholder="Data Início:" name="valor_adicional" value="{{old('valor_adicional')}}">
                                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="date" class="form-control has-feedback-left" placeholder="Data Fim:" name="valor_adicional" value="{{old('valor_adicional')}}">
                                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Selecione Beneficio:</option>
                                                </select>
                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Selecione Seguro:</option>
                                                </select>
                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Horário de Estagio:</option>
                                                </select>
                                                <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Selecione Setor:</option>
                                                </select>
                                                <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Selecione Atividade:</option>
                                                </select>
                                                <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Orientador Estágio:</option>
                                                </select>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="unidade_concedente">
                                                    <option>Supervisor Estagio:</option>
                                                </select>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Data Documento" name="valor_adicional" value="{{old('valor_adicional')}}">
                                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <label>Tipo de Estágio: </label>
                                                <label>
                                                  <input type="checkbox" class="flat" checked="checked"> Não Obrigatório
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat"> Obrigatório
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <textarea class="form-control" placeholder="Sua observação" name="observacao" value="{{old('observacao')}}">
                                                </textarea>
                                            </div>
                                        </div>

                                    <div class="btn-group mr-2 sw-btn-group-extra" role="group">
                                      <button class="btn btn-info">Enviar</button>
                                      <button class="btn btn-danger">Cancelar</button>
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