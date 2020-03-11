@extends('layout/app')
@section('titulo','TCE e Aditivos - GERAR AUTO-AVALIAÇÃO')
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
                            <h2>TCE e Aditivos - GERAR AUTO-AVALIAÇÃO</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{route('auto_avaliacao.store')}}" id="myForm" role="form"
                                data-toggle="validator" method="post" accept-charset="utf-8">
                                {{csrf_field()}}
                                <!-- SmartWizard html -->
                                <div>
                                    <div>
                                        <div>
                                            <br>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="estagiario_id">
                                                            <option>Selecione o Estagiário:</option>
                                                            @foreach ($estagiarios as $estagiario)
                                                            <option value="{{ $estagiario->id }}">
                                                                {{ $estagiario->nome }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="empresa_id">
                                                            <option>Selecione Unidade Concedente:</option>
                                                            {{--@foreach ($empresas as $empresa)
                                                            <option value="{{ $empresa->id }}">
                                                                {{ $empresa->nome_fantasia }}</option>
                                                            @endforeach --}}
                                                        </select>
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left" name="instituicao_id">
                                                              <option>Selecione Instituição de Ensino:</option>
                                                             {{-- <option>Selecione Instituição de Ensino:</option> --}}
                                                            {{--@foreach ($instituicoes as $instituicao)
                                                            <option value="{{ $instituicao->id }}">
                                                                {{ $instituicao->nome_instituicao }}</option>
                                                            @endforeach --}}
                                                        </select>
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select class="form-control has-feedback-left"
                                                            name="supervisor_id" id="lista-supervisor">
                                                            <option>Selecione o Supervisor de Estágio:</option>
                                                            {{--@foreach ($supervisores as $supervisor)
                                                            <option value="{{ $supervisor->id }}">
                                                                {{ $supervisor->nome }}</option>
                                                            @endforeach --}}
                                                        </select>
                                                        <span class="fa fa-graduation-cap form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for="">Período Avaliativo</label>
                                                        <input type="text" class="form-control has-feedback-left data"
                                                            placeholder="Período Avaliativo" name="periodo_avaliativo" required>
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <label for="">Data do Documento</label>
                                                        <input type="text" class="form-control has-feedback-left data"
                                                            placeholder="Data Documento" name="data_doc" required>
                                                        <span class="fa fa-calendar form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <label for="">Descreva as Principais Atividades
                                                            Desenvolvidas:</label>
                                                        <textarea class="form-control"
                                                            placeholder="Descrição das atividades"
                                                            name="obs"></textarea>
                                                    </div>

                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <br>
                                                        <div class="checkbox">
                                                            <hr style="border:0.5px solid #2A3F54;">
                                                            <label>1. As atividades estão de acordo com o Termo de
                                                                Compromisso de Estágio?</label>
                                                            <label>
                                                                <input type="radio" class="flat" name="compromisso"
                                                                    value="1"> Sim
                                                            </label>
                                                            <label>
                                                                <input type="radio" class="flat" name="compromisso"
                                                                    value="2"> Não
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <div class="checkbox">
                                                            <hr style="border:0.5px solid #2A3F54;">
                                                            <label> 2. As atividades estão de acordo com o Plano de
                                                                Estágio?</label>
                                                            <label>
                                                                <input type="radio" class="flat" name="plano_de_estagio"
                                                                    value="1"> Sim
                                                            </label>
                                                            <label>
                                                                <input type="radio" class="flat" name="plano_de_estagio"
                                                                    value="2"> Não
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <div class="checkbox">
                                                            <hr style="border:0.5px solid">
                                                            <label> 3. O estágio tem me colocado diante de situações de
                                                                aprendizagem profissional?</label>
                                                            <label>
                                                                <input type="radio" class="flat" name="aprendizagem"
                                                                    value="1"> Sim
                                                            </label>
                                                            <label>
                                                                <input type="radio" class="flat" name="aprendizagem"
                                                                    value="2"> Não
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <div class="checkbox">
                                                            <hr style="border:0.5px solid">
                                                            <label> 4. As atividades do estágio têm proporcionado alguma
                                                                identificação com o curso ?</label>
                                                            <label>
                                                                <input type="radio" class="flat" name="identificacao"
                                                                    value="1"> Sim
                                                            </label>
                                                            <label>
                                                                <input type="radio" class="flat" name="identificacao"
                                                                    value="2"> Não
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <div class="checkbox">
                                                            <hr style="border:0.5px solid #2A3F54;">
                                                            <label> 5. O estágio tem oferecido experiências práticas
                                                                favorecendo minha formação ?</label>
                                                            <label>
                                                                <input type="radio" class="flat" name="experiencia"
                                                                    value="1"> Sim
                                                            </label>
                                                            <label>
                                                                <input type="radio" class="flat" name="experiencia"
                                                                    value="2"> Não
                                                            </label>
                                                        </div>
                                                        <hr style="border:0.5px solid">
                                                    </div>

                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <button type="submit" class="btn btn-success">Gerar
                                                            Auto-Avaliação</button>
                                                        <a href="/auto_avaliacao" class="btn btn-primary">Cancelar</a>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="estagiario_id"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/avaliacao-ajax/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="empresa_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="empresa_id"]').append('<option value="'+ data[0].empresa_id +'">'+ data[0].nome_fantasia +'</option>');
                            $('select[name="instituicao_id"]').append('<option value="'+ data[0].instituicao_id +'">'+ data[0].nome_instituicao +'</option>');
                        });
                        consultaSupervisor(data[0].empresa_id);
                    }
                });
            }else{
                $('select[name="empresa_id"]').empty();
            }
        });
    });

    function consultaSupervisor(empresa_id){
            if(empresa_id) {
                $.ajax({
                    url: '/supervisor-ajax/ajax/'+empresa_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#lista-supervisor').empty();
                        $.each(data, function(key, value) {
                            for (i = 0; i < data.length; i++){
                            $('#lista-supervisor').append('<option value="'+ data[0].id +'">'+ value.nome +'</option>');
                            }
                        });
                    }
                });
            }else{
                $('#lista-supervisor').empty();
            }
    }
</script>
@endsection
