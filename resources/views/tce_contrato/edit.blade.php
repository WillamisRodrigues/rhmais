@extends('layout/app')
@section('titulo','Gerar Termo de Conclusão / Rescisão do TCE - Agente de integração (GTR-AI)')
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
                    <h2>Gerar Termo de Conclusão / Rescisão do TCE - Agente de integração (GTR-AI) </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('tce_rescisao.store') }}" method="post">
                  {{csrf_field()}}

                      <!-- SmartWizard html -->
                      <div>
                          <div>
                              <div>
                                @foreach ($tceContrato as $tce)

                                    <div id="form-step-0" role="form" data-toggle="validator">
                                      <div class="row" style="width:960px; margin: 20px auto;">
                                           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{$tce->nome}}" class="form-control has-feedback-left" placeholder="Estágiario" name="nome">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{$tce->nome_instituicao}}" class="form-control has-feedback-left" placeholder="Instituição de Ensino" name="nome_instituicao">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{$tce->nome_fantasia}}" class="form-control has-feedback-left" placeholder="Unidade Concedente" name="nome_fantasia">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value=" R$ {{$tce->bolsa}}" class="form-control has-feedback-left" placeholder="Valor Bolsa-Auxilio" name="bolsa">
                                                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{ date('d/m/Y', strtotime($tce->data_inicio))}}" class="form-control has-feedback-left" placeholder="Data TCE" name="data_tce">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{date('d/m/Y', strtotime($tce->data_inicio))}}" class="form-control has-feedback-left" placeholder="Data Inicio" name="data_inicio">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{date('d/m/Y', strtotime($tce->data_fim))}}" class="form-control has-feedback-left" placeholder="Data Fim" name="data_fim">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{$tce->horario}}" class="form-control has-feedback-left" placeholder="Horário Estágio" name="horario">
                                                <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{$tce->apolice}}" class="form-control has-feedback-left" placeholder="Apolice / Seguradora" name="apolice">
                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label for="">Beneficio</label>
                                                <textarea class="form-control" placeholder="Beneficio" name="beneficio">
                                                </textarea>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label for="">Atividade / Setor </label>
                                                <textarea class="form-control" placeholder="Beneficio" name="atividade">
                                                </textarea>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" value="{{$tce->supervisor}}" class="form-control has-feedback-left" placeholder="Supervisor Estágio" name="supervisor">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="motivo">
                                                    <option>Selecione Motivo</option>
                                                </select>
                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Último Dia" name="ultimo_dia
                                                ">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Data Documento" name="data_documento
                                                ">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <label for="">Observação </label>
                                                <textarea class="form-control" placeholder="Observação" name="obs">
                                                </textarea>
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
                      @endforeach
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