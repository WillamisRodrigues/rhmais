@extends('layout/app')
@section('titulo','Editar Motivo | RH MAIS')
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
                    <h2>Editar Motivo</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="{{ route('motivo.update',  $motivo->id) }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
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
                                        <input type="text" value="{{ $motivo->nome }}" class="form-control has-feedb  ack-left" placeholder="Motivo" name="nome">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $motivo->descricao }}" class="form-control has-feedback-left" placeholder="Descrição:" name="cpf">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ $motivo->empresa }}" class="form-control has-feedback-left" placeholder="Unidade:" name="empresa">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
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