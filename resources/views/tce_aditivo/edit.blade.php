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
                        <form action="{{route('tce_aditivo.update', $tceAditivo->id ) }}" id="myForm" role="form"
                                data-toggle="validator" method="post" accept-charset="utf-8">
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
                                                        @foreach ($estagiarios as $estagiario)
                                                            @if ($tceAditivo->estagiario_id == $estagiario->id)
                                                        <input type="text" value="{{$estagiario->nome}}"
                                                            class="form-control has-feedback-left" placeholder="Estagiário">
                                                             <input type="hidden" name="estagiario_id" value="{{$estagiario->id}}">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                            @endif
                                                            @endforeach
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        @foreach ($instituicoes as $instituicao)
                                                            @if ($tceAditivo->instituicao_id == $instituicao->id)
                                                            <input type="text" value="{{$instituicao->nome_instituicao}}" class="form-control has-feedback-left"
                                                            placeholder="Instituição de Ensino">
                                                    <input type="hidden" name="instituicao_id" value="{{$instituicao->id}}">
                                                            <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        @foreach ($empresas as $empresa)
                                                            @if ($tceAditivo->empresa_id == $empresa->id)
                                                             <input type="text" value="{{$empresa->nome_fantasia}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Unidade Concedente">
                                                             <input type="hidden" name="empresa_id" value="{{$empresa->id}}">
                                                            <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{$tceAditivo->bolsa}}"
                                                            class="form-control has-feedback-left dinheiro"
                                                            placeholder="Valor Bolsa-Auxílio:" name="bolsa">
                                                        <span class="fa fa-money form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{date('d/m/Y', strtotime($tceAditivo->data_inicio))}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Data Inicio:" name="data_inicio">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{date('d/m/Y', strtotime($tceAditivo->data_fim))}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Data Fim:" name="data_fim">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                          @foreach ($beneficios as $ben)
                                                                @if ($ben->id == $tceAditivo->beneficio_id)
                                                        <input type="text" value="{{$ben->nome }}" class="form-control has-feedback-left" placeholder="Benefício:">
                                                    <input type="hidden" name="beneficio_id" value="{{$ben->id}}">
                                                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                                                @endif
                                                            @endforeach
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        @foreach ($horarios as $hora)
                                                            @if ($tceAditivo->horario_id == $hora->id)
                                                                <input type="text" value="{{$hora->descricao}}" class="form-control has-feedback-left" placeholder="Horário Estágio:">
                                                                <input type="hidden" name="horario_id" value="{{$hora->id}}">
                                                        <span class="fa fa-clock-o form-control-feedback left"aria-hidden="true"></span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                         @foreach ($setores as $setor)
                                                            @if ($setor->id == $tceAditivo->setor_id)
                                                                 <input type="text" value="{{$setor->nome}}" class="form-control has-feedback-left" placeholder="Setor:">
                                                                <input type="hidden" name="setor_id" value="{{$setor->id}}">
                                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                                            @endif
                                                         @endforeach
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        @foreach ($atividades as $ativ)
                                                            @if ($ativ->id == $tceAditivo->atividade_id)
                                                                <input type="text" value="{{$ativ->nome}}" class="form-control has-feedback-left" placeholder="Atividades:">
                                                                <input type="hidden" name="atividade_id" value="{{$ativ->id}}">
                                                                <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                            @foreach ($orientador as $or)
                                                                   @if ($tceAditivo->orientador_id == $or->id)
                                                                   <input type="text" value="{{$or->nome}}" class="form-control has-feedback-left" placeholder="Atividades:">
                                                                    <input type="hidden" name="orientador_id" value="{{$or->id}}">
                                                                    <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                                                   @endif
                                                                @endforeach
                                                     </div>
                                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                                    @foreach ($supervisor as $sup)
                                                                        @if ($tceAditivo->supervisor_id == $sup->id)
                                                                        <input type="text" value="{{$sup->nome}}" class="form-control has-feedback-left" placeholder="Atividades:">
                                                                        <input type="hidden" name="supervisor_id" value="{{$sup->id}}">
                                                                        <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                                                        @endif
                                                                    @endforeach
                                                     </div>
                                                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                                    @foreach ($apolices as $apolice)
                                                                        @if ($tceAditivo->apolice_id == $apolice->id)
                                                                        <input type="text" value="{{$apolice->nome}}" class="form-control has-feedback-left" placeholder="Atividades:">
                                                                        <input type="hidden" name="apolice_id" value="{{$apolice->id}}">
                                                                        <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                                                        @endif
                                                                    @endforeach
                                                     </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" value="{{date('d/m/Y', strtotime($tceAditivo->data_doc))}}"
                                                            class="form-control has-feedback-left"
                                                            placeholder="Data Documento:" name="data_doc">
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="checkbox">
                                                            Tipo de Estágio:
                                                            <!-- 1 - obrigatorio -->
                                                            <label>
                                                                <input type="radio" name="obrigatorio"
                                                                    value="{{$tceAditivo->obrigatorio}}" class="flat" checked="@if ($tceAditivo->obrigatorio == 1) true  @endif "> Obrigatório

                                                            </label>
                                                            <!-- 2 - não obrigatorio -->
                                                            <label>
                                                                <input type="radio" name="obrigatorio"
                                                                    value="{{$tceAditivo->obrigatorio }}" class="flat" checked="@if ($tceAditivo->obrigatorio == 2) true  @endif "> Não
                                                                Obrigatório
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <label>Aditivo</label>
                                                    <textarea  name="obs" class="form-control" placeholder="Aditivo" value="{{$tceAditivo->obs}}">{{$tceAditivo->obs}}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <button type="submit" class="btn btn-success"
                                                    style="margin-left: 30%;">Salvar Alterações</button>
                                                   <a href="/tce_aditivo" class="btn btn-danger">Voltar</a>
                                                    </div>
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
