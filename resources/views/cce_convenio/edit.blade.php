@extends('layout/app')
@section('titulo','CCE - Gerar CONVÊNIOS - AGENTES de INTEGRAÇÃO')
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
                    <h2>CCE - Gerar CONVÊNIOS - AGENTES de INTEGRAÇÃO </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="" method="post">
                  {{csrf_field()}}

                      <!-- SmartWizard html -->
                      <div>
                          <div>
                              <div>
                               
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                      <div class="row" style="width:960px; margin: 20px auto;">
                                           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="" class="form-control has-feedback-left" placeholder="Agente Integração" name="agente_integracao">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select type="text" value="" class="form-control has-feedback-left" placeholder="Instituição de Ensino" name="instituicao_ensino">
                                                  <option value="instituição">Instituição de Ensino</option>
                                                </select>
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" value="" class="form-control has-feedback-left" placeholder="Apólice/Seguradora" name="apolice_seguradora">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                <input type="text" value="" class="form-control has-feedback-left" placeholder="Data Documento" name="data_documento">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                <input type="text" value="" class="form-control has-feedback-left" placeholder="Data Inicio" name="data_inicio">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                <input type="text" value="" class="form-control has-feedback-left" placeholder="Data Fim" name="data_fim">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <label>Sua observação</label>
                                            <textarea class="form-control" name="nomeText"></textarea>
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