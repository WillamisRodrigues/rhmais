@extends('layout/app')
@section('titulo','AGENTE DE INTEGRAÇÃO - Editar Contrato Ativo - TCE | RH MAIS')
@section('conteudo')
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('layout.menu.menu')
                <!-- /menu profile quick info -->
                 <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

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
                            <h2>AGENTE DE INTEGRAÇÃO - Editar Contrato Ativo - TCE</h2>
                            <div class="clearfix"></div>
                        </div>
                            @foreach ($tceContrato as  $tce )
                        <div class="x_content">
                            <form action="{{ route('tce_contrato.update', $tce->id) }}" method="post">
                                  <input type="hidden" name="_method" value="PUT">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 20px auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="">Estagiário</label>
                                                    <input type="hidden" id="estagiario_id" name="estagiario_id" value="{{ $tce->estagiario_id}}">
                                                    <input type="text" value="{{ $tce->nome }}"
                                                        class="form-control has-feedback-left" placeholder="Nome Estagiario"
                                                        name="estagiario" readonly>
                                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="">Unidade Concedente</label>
                                                        <input type="hidden" id="empresa_id" name="empresa_id" value="{{ $tce->empresa_id}}">
                                                         <input type="text" value="{{ $tce->nome_fantasia }}"
                                                        class="form-control has-feedback-left" placeholder="Nome Empresa"
                                                        name="estagiario" readonly>
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="">Instituicao de Ensino</label>
                                                        <input type="hidden" id="instituicao_id" name="instituicao_id" value="{{ $tce->instituicao_id}}">
                                                         <input type="text" value="{{ $tce->nome_instituicao }}"
                                                        class="form-control has-feedback-left" placeholder="Nome Instituição"
                                                        name="estagiario" readonly>
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                           <label for="">Valor Bolsa</label>
                                                        <input type="text" class="form-control has-feedback-left dinheiro"
                                                       placeholder="Valor Bolsa-Auxílio:" name="bolsa" value="{{$tce->bolsa}}">
                                                        <span class="fa fa-money form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for="">Data do Cadastro</label>
                                                        <input type="text" class="form-control has-feedback-left data"
                                                    placeholder="Data Documento" name="data_doc" value="{{ date('d/m/Y', strtotime($tce->data_doc))}}">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for=""> Data Início</label>
                                                        <input type="text" class="form-control has-feedback-left data"
                                                            placeholder="Data Início:" name="data_inicio" value="{{ date('d/m/Y', strtotime($tce->data_inicio))}}">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for=""> Data Fim</label>
                                                        <input type="text" class="form-control has-feedback-left data"
                                                            placeholder="Data Fim:" name="data_fim" value="{{ date('d/m/Y', strtotime($tce->data_inicio))}}">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                          <label for="">Seguro</label>
                                                     <input type="hidden"  name="apolice_id" value="{{ $seguros->id}}">
                                                    <input type="text" value="{{ $seguros->nome }}"
                                                        class="form-control has-feedback-left" placeholder="Seguro" readonly>
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                       <label for="">Benefício</label>
                                                     <input type="hidden"  name="beneficio_id" value="{{ $beneficios->id}}">
                                                    <input type="text" value="{{ $beneficios->nome }}"
                                                        class="form-control has-feedback-left" placeholder="Seguro" readonly>
                                                    <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                          <label for="">Horario</label>
                                                       <input type="hidden"  name="horario_id" value="{{ $horarios->id}}">
                                                    <input type="text" value="{{ $horarios->descricao }}"
                                                        class="form-control has-feedback-left" placeholder="Horario" readonly>
                                                    <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                          <label for="">Setor</label>
                                                          <input type="hidden"  name="setor_id" value="{{ $setores->id}}">
                                                    <input type="text" value="{{ $setores->nome }}"
                                                        class="form-control has-feedback-left" placeholder="Setor" readonly>
                                                    <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                          <label for="">Atividade</label>
                                                        <input type="hidden"  name="atividade_id" value="{{ $atividades->id}}">
                                                    <input type="text" value="{{ $atividades->nome }}"
                                                        class="form-control has-feedback-left" placeholder="Atividade" readonly>
                                                    <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                          <label for="">Orientador</label>
                                                       <input type="hidden"  name="orientador_id" value="{{ $orientadores->id}}">
                                                    <input type="text" value="{{ $orientadores->nome }}"
                                                        class="form-control has-feedback-left" placeholder="Orientador" readonly>
                                                    <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                     <label for="">Supervisor</label>
                                                     <input type="hidden"  name="supervisor_id" value="{{ $supervisor->id}}">
                                                    <input type="text" value="{{ $supervisor->nome }}"
                                                        class="form-control has-feedback-left" placeholder="Supervisor" readonly>
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <div class="checkbox">
                                                            <label>Tipo de Estágio: </label>
                                                            <label>
                                                                <input type="radio" class="flat" checked="checked"
                                                                    name="obrigatorio" value="1"> Não
                                                                Obrigatório
                                                            </label>
                                                            <label>
                                                                <input type="radio" class="flat" name="obrigatorio"
                                                                    value="2"> Obrigatório
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <textarea class="form-control" placeholder="Observações"
                                                            name="obs"></textarea>
                                                    </div>
                                                </div>
                                                <div class="btn-group mr-2 sw-btn-group-extra" role="group">
                                                    <button type="submit" class="btn btn-info">Enviar</button>
                                                    <a href="/tce_contrato" class="btn btn-danger">Cancelar</a>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="estagiario_id"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/tce-ajax/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="empresa_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="empresa_id"]').append('<option value="'+ data[0].empresa_id +'">'+ data[0].nome_fantasia +'</option>');
                            $('select[name="instituicao_id"]').append('<option value="'+ data[0].instituicao_id +'">'+ data[0].nome_instituicao +'</option>');
                        });
                        consultaHorarios(data[0].empresa_id);
                        atividadePrestada(data[0].empresa_id);
                    }
                });
            }else{
                $('select[name="empresa_id"]').empty();
            }
        });
    });

    function consultaHorarios(empresa_id){
            if(empresa_id) {
                $.ajax({
                    url: '/horario-ajax/ajax/'+empresa_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#lista-horario').empty();
                        $.each(data, function(key, value) {
                            for (i = 0; i < data.length; i++){
                            $('#lista-horario').append('<option value="'+ data[0].id +'">'+ value.descricao +'</option>');
                            }
                        });
                    }
                });
            }else{
                $('#lista-horario').empty();
            }
    }

function atividadePrestada(empresa_id){
            if(empresa_id) {
                $.ajax({
                    url: '/atividade-ajax/ajax/'+empresa_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#lista-atividade').empty();
                        $.each(data, function(key, value) {
                            for (i = 0; i < data.length; i++){
                            $('#lista-atividade').append('<option value="'+ data[0].id +'">'+ value.nome +'</option>');
                            }
                        });
                    }
                });
            }else{
                $('#lista-atividade').empty();
            }
    }
</script>

@endsection
