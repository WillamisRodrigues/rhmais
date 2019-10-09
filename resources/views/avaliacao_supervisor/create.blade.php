@extends('layout/app')
@section('titulo','TCE e Aditivos - GERAR AVALIAÇÃO SUPERVISOR(A)')
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
                    <h2>TCE e Aditivos - GERAR AVALIAÇÃO SUPERVISOR(A)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{ route('avaliacao_supervisor.store') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                  {{csrf_field()}}
                      <!-- SmartWizard html -->
                      <div>
                          <div>
                              <div>
                                    <br>
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="row" style="width:960px; margin: 0 auto;">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="estagiario_id">
                                                    <option>Selecione o Estagiário:</option>
                                                     @foreach ($estagiarios as $estagiario)
                                                        <option value="{{ $estagiario->id }}">{{ $estagiario->nome }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                             <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="instituicao_id">
                                                    <option>Selecione Instituição de Ensino:</option>
                                                      @foreach ($instituicoes as $instituicao)
                                                        <option value="{{ $instituicao->id }}">{{ $instituicao->nome_instituicao }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                             <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="empresa_id">
                                                    <option>Selecione Unidade Concedente:</option>
                                                     @foreach ($empresas as $empresa)
                                                        <option value="{{ $empresa->id }}">{{ $empresa->nome_fantasia }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select class="form-control has-feedback-left" name="supervisor">
                                                    <option>Selecione o Supervisor de Estágio:</option>
                                                      @foreach ($supervisores as $supervisor)
                                                        <option value="{{ $supervisor->id }}">{{ $supervisor->nome }}</option>
                                                     @endforeach
                                                </select>
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" placeholder="Periodo Avaliativo" name="periodo_avaliativo" value="">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" placeholder="Data Documento" name="data_doc" value="">
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
                                              <label>1. Assiduidade: Constância e pontualidade no cumprimento dos horários e dias trabalhados.*</label>
                                              <br><br>
                                                <label>
                                                  <input type="checkbox" class="flat"  name="assiduidade" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat"name="assiduidade" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="assiduidade" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="assiduidade" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;">
                                              <label> 2. Disciplina: Facilidade em aceitar e seguir instruções de superiores e
                                              acatar regularmente as normas da Entidade.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat"  name="facilidade" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="facilidade" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="facilidade" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="facilidade" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid">
                                              <label> 3. Sociabilidade e Desembaraço: Facilidade e espontaneidade
                                              com que age frente a pessoas, fatos e situações.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat" name="sociabilidade" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="sociabilidade" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="sociabilidade" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat"  name="sociabilidade" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid">
                                              <label> 4. Rendimento no Estágio: Qualidade, rapidez, precisão com as
                                              quais executa as tarefas integrantes do programa de estágio.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat" name="rendimento" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="sociabilidade" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="sociabilidade" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="sociabilidade" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;">
                                              <label> 5. Facilidade de Compreensão: Rapidez e facilidade em interpretar,
                                              pôr em prática ou entender instruções e informações verbais ou escritas.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat" name="facilidade"  value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="facilidade" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="facilidade" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="facilidade" value="otimo"> Ótimo
                                                </label>
                                              </div>

                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;">
                                              <label> 6. Nível de Conhecimento Teórico: Conhecimento demonstrado no cumprimento
                                              do programa de estágio, tendo em vista sua escolaridade.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat" name="conhecimento"  value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="conhecimento" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="conhecimento" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="conhecimento" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>

                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;">
                                              <label> 7. Organização e Métodos no Trabalho: Uso de meios racionais, visando melhorar
                                              a organização do seu trabalho.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat" name="organizacao" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="organizacao" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="organizacao" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="organizacao" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;">
                                              <label> 8. Iniciativa - Independência: Capacidade de procurar
                                              novas soluções, sem prévia orientação, dentro de padrões adequados.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat"  name="iniciativa" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="iniciativa" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="iniciativa" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="iniciativa" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;">
                                              <label> 9. Cooperação : Atuação junto a outras pessoas no sentido de contribuir para o alcance de
                                              um objetivo comum. Influência positiva no grupo.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat" name="cooperacao" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="cooperacao" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="cooperacao" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="cooperacao" value="otimo"> Ótimo
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                              <div class="checkbox">
                                              <hr style="border:0.5px solid #2A3F54;">
                                              <label> 10. Responsabilidade: Capacidade de assumir o próprio trabalho e
                                               zelar pelos bens e equipamentos da Entidade.*</label>
                                              <br><br>
                                              <label>
                                                  <input type="checkbox" class="flat"  name="responsabilidade" value="insuficiente"> Insuficiente
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="responsabilidade" value="regular"> Regular
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="responsabilidade" value="bom"> Bom
                                                </label>
                                                <label>
                                                  <input type="checkbox" class="flat" name="responsabilidade" value="otimo"> Ótimo
                                                </label>
                                              </div>
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