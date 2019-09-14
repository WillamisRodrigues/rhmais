    @extends('layout/app')
@section('titulo','Gerar Aditivo | RH MAIS')
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
                    <h2>Gerar Aditivo</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('tce_aditivo.update',  $tceAditivo->id) }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
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
                                    <input type="text" value="{{$tceAditivo->estagiario_id}}" class="form-control has-feedback-left" placeholder="Estagiário" name="nome">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->instituicao_id}}" class="form-control has-feedback-left" placeholder="Instituição de Ensino" name="email">
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->empresa_id}}" class="form-control has-feedback-left" placeholder="Unidade Concedente" name="email">
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->bolsa}}" class="form-control has-feedback-left" placeholder="Valor Bolsa-Auxílio:" name="email">
                                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->data_inicio}}" class="form-control has-feedback-left" placeholder="Data Inicio:" name="data_inicio">
                                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->data_fim}}" class="form-control has-feedback-left" placeholder="Data Fim:" name="data_fim">
                                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->beneficio_id}}" class="form-control has-feedback-left" placeholder="Benefício:" name="beneficio">
                                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->horario}}" class="form-control has-feedback-left" placeholder="Horário Estágio:" name="horario">
                                        <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->setor_id}}" class="form-control has-feedback-left" placeholder="Setor:" name="setor">
                                        <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->atividades}}" class="form-control has-feedback-left" placeholder="Atividades:" name="atividades">
                                        <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->orientador}}" class="form-control has-feedback-left" placeholder="Orientador Estágio:" name="orientador">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->supervisor}}"class="form-control has-feedback-left" placeholder="Supervisor Estágio:" name="supervisor">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{$tceAditivo->data_doc}}" class="form-control has-feedback-left" placeholder="Data Documento:" name="data_doc">
                                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkbox">
                                        Tipo de Estágio:
                                            <label>
                                                <input type="radio" name="obrigatorio" value="Não Obrigatório" class="flat"> Não Obrigatório
                                            </label>
                                            <label>
                                                <input type="radio" name="obrigatorio" value="Obrigatório" class="flat"> Obrigatório
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        <label>Sua observação</label>
                                        <textarea class="form-control" placeholder="Observações" name="nomeText"></textarea>
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
