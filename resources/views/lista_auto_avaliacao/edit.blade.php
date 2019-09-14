@extends('layout/app')
@section('titulo','Editar Auto-Avaiação Estagiário')
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
                    <h2>Editar Auto-Avaiação Estagiário</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{ route('cce_convenio.store') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                  {{csrf_field()}}
                      <!-- SmartWizard html -->
                      <div>
                          <div>
                              <div>
                                    <br>
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Nome Estagiário" name="nome" value="">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Instituição de Ensino" name="instituicao" value="">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Unidade Concedente" name="unidade_concedente" value="">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Supervisor Estágio" name="super_estagio" value="">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Periodo Avaliativo" name="periodo_avaliativo" value="">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" placeholder="Data Documento" name="data_documento" value="">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                           
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <label for="">Descreva as Principais Atividades Desenvolvidas:</label>
                                                <textarea class="form-control" placeholder="observação" name="obs">
                                                </textarea>
                                            </div>
                                            
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                <br>
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;"> 
                                              <label>1. As atividades estão de acordo com o Termo de Compromisso de Estágio?</label>
                                                <label>
                                                  <input type="checkbox" class="flat"  name="sim"> Sim 
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="nao"> Não
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;"> 
                                              <label> 2. As atividades estão de acordo com o Plano de Estágio?</label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="sim"> Sim 
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="nao"> Não
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid"> 
                                              <label> 3. O estágio tem me colocado diante de situações de aprendizagem profissional?</label>
                                                <label>
                                                  <input type="checkbox" class="flat"  name="sim"> Sim 
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="nao"> Não
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid"> 
                                              <label> 4. As atividades do estágio têm proporcionado alguma identificação com o curso ?</label>
                                                <label>
                                                  <input type="checkbox" class="flat"  name="sim"> Sim 
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="nao"> Não
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;"> 
                                              <label> 5. O estágio tem oferecido experiências práticas favorecendo minha formação ?</label>
                                                <label>
                                                  <input type="checkbox" class="flat"  name="sim"> Sim 
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="nao"> Não
                                                </label>
                                              </div>
                                              <hr style="border:0.5px solid"> 
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <button type="submit" class="btn btn-success">Gerar Auto-Avaliação</button>
                                                <button class="btn btn-primary">Cancelar</button>
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