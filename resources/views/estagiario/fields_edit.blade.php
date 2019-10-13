<div class="x_panel">
    <div class="x_title">
        <h2>Cadastro de Estagiarios</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <form action="{{ route('estagiario.store') }}" id="myForm" role="form" data-toggle="validator" method="post"
            accept-charset="utf-8">
            {{csrf_field()}}

            <!-- SmartWizard html -->
            <div id="smartwizard">
                <ul>
                    <li><a href="#step-1">Passo 1<br /><small>Dados Pessoais</small></a></li>
                    <li><a href="#step-2">Passo 2<br /><small>Escolaridade</small></a></li>
                    <li><a href="#step-3">Passo 3<br /><small>Outras informações</small></a></li>
                </ul>

                <div>
                    <div id="step-1">
                        <br>
                        <div id="form-step-0" role="form" data-toggle="validator">
                            <div class="row" style="width:960px; margin: 0 auto;">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                        placeholder="Nome Completo" name="nome" value="{{ $estagiario->nome }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Email"
                                        name="email" value="{{ $estagiario->email }}">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" maxlength="12" class="form-control rg has-feedback-left"
                                        placeholder="RG" name="rg" value="{{ $estagiario->rg }}">
                                    <span class="fa fa-newspaper-o form-control-feedback left"
                                        aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" maxlength="14" class="form-control cpf has-feedback-left"
                                        placeholder="CPF" name="cpf" value="{{ $estagiario->cpf }}">
                                    <span class="fa fa-newspaper-o form-control-feedback left"
                                        aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control telefone has-feedback-left"
                                        placeholder="Telefone" name="telefone" value="{{ $estagiario->telefone }}">
                                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control telefone has-feedback-left"
                                        placeholder="Celular" name="celular" value="{{ $estagiario->celular }}">
                                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="date" class="form-control nascimento has-feedback-left"
                                        placeholder="Data de Nascimento" name="data_nascimento"
                                        value="{{ $estagiario->data_nascimento }}">
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Bairro"
                                        name="bairro" value="{{ $estagiario->bairro }}">
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Endereço"
                                        name="rua" value="{{ $estagiario->rua }}">
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" maxlength="20" class="form-control has-feedback-left"
                                        placeholder="Complemento" name="complemento"
                                        value="{{ $estagiario->complemento }}">
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" maxlength="20" class="form-control cep has-feedback-left"
                                        placeholder="CEP" name="cep" value="{{ $estagiario->cep }}">
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Numero"
                                        name="numero" value="{{ $estagiario->numero }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                @include('layout.selects.estado-cidade')
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select class="form-control has-feedback-left" name="empresa_id">
                                        <option value="{{ $estagiario->empresa_id }}">Selecione Unidade Concedente
                                        </option>
                                        @foreach ($empresas as $empresa)
                                        <option value="{{ $empresa->id }}">{{ $empresa->nome_fantasia }}</option>
                                        @endforeach
                                    </select>
                                    <span class="fa fa-graduation-cap form-control-feedback left"
                                        aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select class="form-control has-feedback-left" name="sexo">
                                        <option value="{{ $estagiario->sexo }}">Selecione Sexo</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select>
                                    <span class="fa fa-graduation-cap form-control-feedback left"
                                        aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Filiação Pai"
                                        name="pai" value="{{ $estagiario->pai }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Filiação Mãe"
                                        name="mae" value="{{ $estagiario->mae }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <!-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <select class="form-control has-feedback-left" name="cor">
                                      <option>Selecione Cor/Raça</option>
                                  </select>
                                  <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                              </div> -->
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Série Ctps:"
                                        name="serie_ctps" value="{{ $estagiario->serie_ctps }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Ctps"
                                        name="ctps" value="{{ $estagiario->ctps }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Número PIS"
                                        name="numero_pis" value="{{ $estagiario->numero_pis }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" value="RH Mais" readonly
                                        placeholder="Agente de Integração" name="agente_int">
                                    <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select class="form-control has-feedback-left" name="nacionalidade"
                                        value="{{ $estagiario->nacionalidade }}">
                                        <option>Selecione Nacionalidade</option>
                                        <option>Brasileiro(a)</option>
                                    </select>
                                    <span class="fa fa-graduation-cap form-control-feedback left"
                                        aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                        value="{{Auth::user()->name}}" readonly placeholder="Responsável"
                                        name="pessoa_responsavel">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select class="form-control has-feedback-left" name="deficiencia">
                                        <option value="{{ $estagiario->deficiencia }}">Portador de Deficiência</option>
                                        <option value="1">Sim</option>
                                        <option value="2">Não</option>
                                    </select>
                                    <span class="fa fa-graduation-cap form-control-feedback left"
                                        aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-2">
                        <br>
                        <div id="form-step-1" role="form" data-toggle="validator">
                            <div class="row" style="width:960px; margin: 20px auto;">
                                {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select class="form-control has-feedback-left" name="nivel">
                                        <option value="{{ $estagiario->nivel }}" >Selecione um nível</option>
                                @foreach ($cursos as $key)
                                <option>{{ $key->nome }}</option>
                                @endforeach
                                </select>
                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                            </div> --}}
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <select class="form-control has-feedback-left" name="nivel">
                                    <option value="{{ $estagiario->nivel }}">Selecione um Curso</option>
                                    @foreach ($cursos as $key)
                                    <option value="{{ $key->nome }}">{{ $key->nome }}</option>
                                    @endforeach
                                </select>
                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <select class="form-control has-feedback-left" name="periodo">
                                    <option value="{{ $estagiario->periodo }}">Período</option>
                                    <option>Manhã</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                </select>
                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <select class="form-control has-feedback-left" name="instituicao_id">
                                    <option value="{{ $estagiario->instituicao_id }}">Instituição de Ensino</option>
                                    @foreach ($instituicoes as $key => $value)
                                    <option value="{{ $key }}">{{ $value->nome_instituicao }}</option>
                                    @endforeach
                                </select>
                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <select class="form-control has-feedback-left" name="horario">
                                      <option>Selecione um Horário</option>
                                  </select>
                                  <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                              </div> --}}
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" placeholder="Matricula"
                                    name="matricula" value="{{ $estagiario->matricula }}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left"
                                    placeholder="Data de Término do Curso" name="termino_curso"
                                    value="{{ $estagiario->termino_curso }}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="date" class="form-control has-feedback-left"
                                    placeholder="Previsão Término Curso" name="termino_curso"
                                    value="{{ $estagiario->termino_curso }}">
                                <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div id="step-3">
                        <br>
                        <div id="form-step-1" role="form" data-toggle="validator">
                            <div class="row" style="width:960px; margin: 20px auto;">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                        placeholder="Banco/Agência" name="banco" value="{{ $estagiario->banco }}">
                                    <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Conta"
                                        name="conta" value="{{ $estagiario->conta }}">
                                    <span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                        placeholder="Código da vaga" name="codigo_vaga"
                                        value="{{ $estagiario->codigo_vaga }}">
                                    <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" placeholder="Criar Senha"
                                        name="senha" value="{{ $estagiario->senha }}">
                                    <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                    <textarea class="form-control" placeholder="Sua observação" name="obs"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ativo" class="flat" checked="checked"> Está
                                            Ativo
                                        </label>
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
