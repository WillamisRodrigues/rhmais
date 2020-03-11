@extends('layout/app')
@section('titulo','Editar Instituição | RH MAIS')
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
                            <h2>Editar Instituição</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('instituicao.update', $instituicao->id) }}" id="myForm" role="form"
                                data-toggle="validator" method="post" accept-charset="utf-8">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <!-- SmartWizard html -->
                                <i class="fas fa-divide"></i>

                                <div id="smartwizard">
                                    <ul>
                                        <li><a href="#step-1">Passo 1<br /><small>Cadastro instituicao</small></a></li>
                                        <li><a href="#step-2">Passo 2<br /><small>Cadastro de Endereço</small></a></li>
                                        <li><a href="#step-3">Passo 3<br /><small> Cadastro Responsável</small></a></li>
                                    </ul>

                                    <div>
                                        <div id="step-1">
                                            <br>
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control cnpj has-feedback-left"
                                                            placeholder="CNPJ" name="cnpj"
                                                            value="{{ $instituicao->cnpj }}">
                                                        <span class="fa fa-bars form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Razão Social" name="razao_social"
                                                            value="{{ $instituicao->razao_social }}">
                                                        <span class="fa fa-bars form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Instituição" name="nome_instituicao"
                                                            value="{{ $instituicao->nome_instituicao }}">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Mantenedora" name="mantenedora"
                                                            value="{{ $instituicao->mantenedora }}">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Insc. Estadual" name="insc_estadual"
                                                            value="{{ $instituicao->insc_estadual }}">
                                                        <span class="fa fa-home form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Endereço Site" name="site_url"
                                                            value="{{ $instituicao->site_url }}">
                                                        <span class="fa fa-at form-control-feedback left"
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
                                                    <select  class="form-control has-feedback-left" name="estado">
                                                        <option selected="{{ $instituicao->estado }}">{{ $instituicao->estado }}</option>
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
                                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left" placeholder="Cidade"
                                                        name="cidade" value="{{ $instituicao->cidade}}">
                                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Bairro" name="bairro"
                                                            value="{{ $instituicao->bairro }}">
                                                        <span class="fa fa-map-marker form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Endereço" name="rua"
                                                            value="{{ $instituicao->rua }}">
                                                        <span class="fa fa-map-marker form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Complemento" name="complemento"
                                                            value="{{ $instituicao->complemento }}">
                                                        <span class="fa fa-map-marker form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Numero" name="numero"
                                                            value="{{ $instituicao->numero }}">
                                                        <span class="fa fa-map-marker form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control cep has-feedback-left"
                                                            placeholder="CEP" name="cep"
                                                            value="{{ $instituicao->cep }}">
                                                        <span class="fa fa-map-marker form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text"
                                                            class="form-control telefone has-feedback-left"
                                                            placeholder="Telefone" name="telefone"
                                                            value="{{ $instituicao->telefone }}">
                                                        <span class="fa fa-phone form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-3">
                                            <br>
                                            <div id="form-step-2" role="form" data-toggle="validator">
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Nome do Contato" name="nome_contato"
                                                            value="{{ $instituicao->nome_contato }}">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="email" class="form-control has-feedback-left"
                                                            placeholder="Email do Contato" name="email_contato"
                                                            value="{{ $instituicao->email_contato }}">
                                                        <span class="fa fa-at form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text"
                                                            class="form-control telefone has-feedback-left"
                                                            placeholder="Celular Contato" name="celular_contato"
                                                            value="{{ $instituicao->celular_contato }}">
                                                        <span class="fa fa-phone form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text"
                                                            class="form-control telefone has-feedback-left"
                                                            placeholder="Celular Representante" name="celular_rep"
                                                            value="{{ $instituicao->celular_rep }}">
                                                        <span class="fa fa-phone form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            placeholder="Nome do representante" name="nome_rep"
                                                            value="{{ $instituicao->nome_rep }}">
                                                        <span class="fa fa-user form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="email" class="form-control has-feedback-left"
                                                            placeholder="Email Representante" name="email_rep"
                                                            value="{{ $instituicao->email_rep }}">
                                                        <span class="fa fa-at form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:960px; margin: 0 auto;">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control cpf has-feedback-left"
                                                            placeholder="CPF Representante" name="cpf_rep"
                                                            value="{{ $instituicao->cpf_rep }}">
                                                        <span class="fa fa-bars form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control rg has-feedback-left"
                                                            placeholder="RG Represetante" name="rg_rep"
                                                            value="{{ $instituicao->rg_rep }}">
                                                        <span class="fa fa-bars form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
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
