@extends('layout/app')
@section('titulo','AGENTE DE INTEGRAÇÃO - Lista de Contratos Ativos - TCE | RH MAIS')
@section('conteudo')
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('layout.menu.menu')
                <!-- /menu profile quick info -->
                 <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

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
                            <form action="{{ route('tce_contrato.store') }}" method="post">
                                {{csrf_field()}}

                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 20px auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS" readonly placeholder="Agente de Integração"
                                                            name="agente_integracao">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="estagiario_id">
                                                            <option>Selecione o Estagiário:</option>
                                                            @foreach ($estagiarios as  $key => $value )
                                                           <option value="{{ $value->id }}">{{ $value->nome }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="">Unidade Concedente</label>
                                                        <select class="form-control has-feedback-left"
                                                            name="empresa_id">
                                                        </select>
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="">Instituicao de Ensino</label>
                                                        <select class="form-control has-feedback-left"
                                                            name="instituicao_id">
                                                        </select>
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for="">Data do Cadastro</label>
                                                        <input type="date" class="form-control has-feedback-left"
                                                            placeholder="Data Documento" name="data_doc">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for=""> Data Inicio</label>
                                                        <input type="date" class="form-control has-feedback-left"
                                                            placeholder="Data Início:" name="data_inicio">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for=""> Data Fim</label>
                                                        <input type="date" class="form-control has-feedback-left"
                                                            placeholder="Data Fim:" name="data_fim">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="beneficio">
                                                            <option>Selecione Beneficio:</option>
                                                            @foreach ($beneficios as $beneficio)
                                                            <option value="{{ $beneficio->id }}">{{ $beneficio->nome }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-bars form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="apolice">
                                                            <option>Selecione Seguro:</option>
                                                            @foreach ($seguros as $seguro)
                                                            <option value="{{ $seguro->id }}">{{ $seguro->nome }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-bars form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="horario">
                                                            <option>Horário de Estagio:</option>
                                                            @foreach ($horarios as $horario)
                                                            <option value="{{ $horario->descricao }}">{{ $horario->descricao }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-clock-o form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="setor">
                                                            <option>Selecione Setor:</option>
                                                            @foreach ($setores as $setor)
                                                            <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-cube form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="atividade">
                                                            <option>Selecione Atividade:</option>
                                                            @foreach ($atividades as $atividade)
                                                            <option value="{{ $atividade->nome }}">{{ $atividade->nome }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-book form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div> --}}
                                                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Atividade prestada" name="atividade">
                                                        <span class="fa fa-cube form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="orientador">
                                                            <option>Orientador Estágio:</option>
                                                            @foreach ($orienta as $orient)
                                                            <option value="{{ $orient->id }}">{{ $orient->nome }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="supervisor">
                                                            <option>Supervisor Estagio:</option>
                                                            @foreach ($super as $sup)
                                                            <option value="{{ $sup->nome }}">{{ $sup->nome }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Valor Bolsa-Auxílio:" name="bolsa">
                                                        <span class="fa fa-money form-control-feedback left"
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
                                                            name="observacao"></textarea>
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
                    }
                });
            }else{
                $('select[name="empresa_id"]').empty();
            }
        });
    });
</script>

@endsection
