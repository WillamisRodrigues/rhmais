@extends('layout/app')
@section('titulo','Editar - Folha - Agente Integração | RH MAIS')
@section('conteudo')
   <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            @include('layout.menu.menu')
            <br />
            @include('layout.menu.sidebar')
          </div>
        </div>
            @include('layout.menu.menutop')
        <!-- page content -->

          <!-- page content -->
          <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

              <br>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar - Folha de Pagamento</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row" style="height: 40vh">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Estagiário</label>
                            <input type="text" value="{{ $estagiario->nome }}" class="form-control has-feedback-left" placeholder="Nome Estagiario" name="estagiario" readonly>
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Unidade Concedente</label>
                            <input type="text" value="{{ $empresa->nome_fantasia }}" class="form-control has-feedback-left" placeholder="Unidade Concedente" name="unidade-concedente" readonly>
                            <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Valor Bolsa</label>
                            <input type="text" value="R$ {{ number_format($contrato->bolsa, 2, ",", "") }}" class="form-control has-feedback-left" placeholder="Bolsa" name="valor_bolsa" readonly>
                            <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Início do Contrato</label>
                            <input type="text" value="{{ date('d/m/Y', strtotime($contrato->data_inicio)) }}" class="form-control has-feedback-left" placeholder="Data de Início" name="data_inicio" readonly>
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Dias Considerados</label>
                            <input type="number" value="{{$dias_considerados}}" class="form-control has-feedback-left" placeholder="" name="dias_considerados" readonly>
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        {!! Form::open(['route' => ['folha_pagamento.editar'], 'method' => 'post']) !!}
                        <input type="hidden" name="folha_id" value="{{$folha->id}}">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Dias de Falta</label>
                            <input type="number" value="0" class="form-control has-feedback-left" name="dias_falta">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        @foreach ($beneficios as $beneficio)
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">{{$beneficio->nome}}</label>
                            <input type="text" placeholder="R$ {{ number_format(0, 2, ",", "") }}" class="form-control has-feedback-left" name="beneficio_{{ $beneficio->id }}">
                                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        @endforeach

                        <button  type="submit" class="btn btn-success" style="margin: 2rem auto; display:block;">Salvar Alterações</button>
                        {!! Form::close() !!}
                    </div>
                  </div>
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
