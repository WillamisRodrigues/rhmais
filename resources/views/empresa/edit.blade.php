@extends('layout/app')
@section('titulo','Editar empresass | RH MAIS')
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
                            <h2>Cadastro de Empresas</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            {!! Form::open(['route' => ['empresa.update', $empresa->id], 'method' => 'patch']) !!}

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul>
                                    <li><a href="#step-1">Passo 1<br /><small>Cadastro Empresa</small></a></li>
                                    <li><a href="#step-2">Passo 2<br /><small>Cadastro de Endereço</small></a></li>
                                </ul>

                                <div>
                                    <div id="step-1">
                                        <br>
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <div class="row" style="width:960px; margin: 0 auto;">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control cnpj has-feedback-left"
                                                        placeholder="CNPJ / CPF" name="cnpj" value="{{ $empresa->cnpj}}">
                                                    <span class="fa fa-bars form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Razão Social / Nome" name="razao_social"
                                                        value="{{ $empresa->razao_social}}">
                                                    <span class="fa fa-bars form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                               <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <select  class="form-control has-feedback-left" name="estado">
                                                        <option selected="{{ $empresa->estado }}">{{ $empresa->estado }}</option>
                                                        <option value="Acre">Acre</option>
                                                        <option value="Alagoas">Alagoas</option>
                                                        <option value="Amapá">Amapá</option>
                                                        <option value="Amazonas">Amazonas</option>
                                                        <option value="Bahia">Bahia</option>
                                                        <option value="Ceará">Ceará</option>
                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                        <option value="Espírito Santo">Espírito Santo</option>
                                                        <option value="Goiás">Goiás</option>
                                                        <option value="Maranhão">Maranhão</option>
                                                        <option value="Mato Grosso">Mato Grosso</option>
                                                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                                        <option value="Minas Gerais">Minas Gerais</option>
                                                        <option value="Pará">Pará</option>
                                                        <option value="Paraíba">Paraíba</option>
                                                        <option value="Paraná">Paraná</option>
                                                        <option value="Pernambuco">Pernambuco</option>
                                                        <option value="Piauí">Piauí</option>
                                                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                                        <option value="Rondônia">Rondônia</option>
                                                        <option value="Roraima">Roraima</option>
                                                        <option value="Santa Catarina">Santa Catarina</option>
                                                        <option value="São Paulo">São Paulo</option>
                                                        <option value="Sergipe">Sergipe</option>
                                                        <option value="Tocantins">Tocantins</option>
                                                    </select>
                                                    <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left" placeholder="Cidade"
                                                        name="cidade" value="{{ $empresa->cidade}}">
                                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Insc. Estadual/Rg" name="insc_estadual"
                                                        value="{{ $empresa->insc_estadual}}">
                                                    <span class="fa fa-bars form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Numero" name="numero" value="{{ $empresa->numero}}">
                                                    <span class="fa fa-map-marker form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Bairro" name="bairro" value="{{ $empresa->bairro}}">
                                                    <span class="fa fa-map-marker form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control telefone has-feedback-left"
                                                        placeholder="Telefone" name="telefone"
                                                        value="{{ $empresa->telefone}}">
                                                    <span class="fa fa-phone form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="End. Site" name="site_url"
                                                        value="{{ $empresa->site_url}}">
                                                    <span class="fa fa-at form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control telefone has-feedback-left"
                                                        placeholder="Celular cont." name="celular"
                                                        value="{{ $empresa->celular}}">
                                                    <span class="fa fa-phone form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Nome Representante" name="nome_rep"
                                                        value="{{ $empresa->nome_rep}}">
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control cpf has-feedback-left"
                                                        placeholder="CPF Representante" name="cpf_rep"
                                                        value="{{ $empresa->cpf_rep}}">
                                                    <span class="fa fa-bars form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="email" class="form-control has-feedback-left"
                                                        placeholder="Email Representante" name="email_rep"
                                                        value="{{ $empresa->email_rep}}">
                                                    <span class="fa fa-at form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS"
                                                        value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS"
                                                        name="agente_integracao">
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Nome Fantasia" name="nome_fantasia"
                                                        value="{{ $empresa->nome_fantasia}}">
                                                    <span class="fa fa-home form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Endereço" name="rua"
                                                        value="{{ $empresa->rua}}">
                                                    <span class="fa fa-map-marker form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Complemento" name="complemento"
                                                        value="{{ $empresa->complemento}}">
                                                    <span class="fa fa-map-marker form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control cep has-feedback-left"
                                                        placeholder="CEP" name="cep" value="{{ $empresa->cep}}">
                                                    <span class="fa fa-map-marker form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control telefone has-feedback-left"
                                                        placeholder="Celular" name="celular_rep"
                                                        value="{{ $empresa->celular_rep}}">
                                                    <span class="fa fa-phone form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Nome do Contato" name="nome_contato"
                                                        value="{{ $empresa->nome_contato}}">
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Email Contato" name="email_contato"
                                                        value="{{ $empresa->email_contato}}">
                                                    <span class="fa fa-at form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control telefone has-feedback-left"
                                                        placeholder="Celular Representante" name="celular_rep"
                                                        value="{{ $empresa->celular_rep}}">
                                                    <span class="fa fa-phone form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control rg has-feedback-left"
                                                        placeholder="R.G. Representante" name="rg_rep"
                                                        value="{{ $empresa->rg_rep}}">
                                                    <span class="fa fa-bars form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-2">
                                        <br>
                                        <div id="form-step-1" role="form" data-toggle="validator">
                                            <div class="row" style="width:960px; margin: 0 auto;">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="">Dia p/ Pgto Estágiario(a)</label>
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Dia p/ Pgto Estágiario(a)" name="data_estagiario"
                                                        value="{{ $empresa->data_estagiario}}">
                                                    <span class="fa fa-calendar form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                      <label for="">Dia p/ Vcto Boleto</label>
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Dia p/ Vcto Boleto" name="data_boleto"
                                                        value="{{ $empresa->data_boleto}}">
                                                    <span class="fa fa-calendar form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="row" style="width:960px; margin: 0 auto;">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                     <label for="">Dia p/ Fechamento</label>
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Dia p/ Fechamento" name="data_fechamento"
                                                        value="{{ $empresa->data_fechamento}}">
                                                    <span class="fa fa-calendar form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                            <div class="row" style="width:960px; margin: 0 auto;">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="">Custo unitário </label>
                                                    <input type="text" class="form-control has-feedback-left"
                                                        placeholder="Custo Unitário" name="custo_unitario"
                                                        value="{{"R$ " .number_format($empresa->custo_unitario, 2) }}">
                                                    <span class="fa fa-money form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="row" style="width:500px; margin: 0 auto;">
                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="flat" checked="checked">
                                                                Proporcional
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" class="flat" value="1" checked="checked"> Está Ativo
                                                                <input type="hidden" value="1" name="ativo" />
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" class="flat"> Dias Comerciais
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" class="flat"> Roda Folha
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            {{-- </form> --}}
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
