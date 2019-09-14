@extends('layout/app')
@section('titulo','Seguros - Apolíces - Cadatro - TCE | RH MAIS')
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
                    <h2>Seguros - Apolíces - Cadatro</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('seguro.store') }}" method="post">
                  {{csrf_field()}}

                      <!-- SmartWizard html -->
                      <div>
                          <div>
                              <div>
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                      <div class="row" style="width:960px; margin: 20px auto;">
                                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Nome da Seguradora:" name="nome">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Nº da Apolice:" name="numero">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
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
                                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" value="RH Mais" readonly placeholder="Agente de Integração" name="agente_int">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left" placeholder="Cobertura:" name="cobertura">
                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
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