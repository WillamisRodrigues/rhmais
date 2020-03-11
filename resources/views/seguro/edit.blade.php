@extends('layout/app')
@section('titulo','Seguros - Apolíces - Editar - TCE | RH MAIS')
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
                            <h2>Seguros - Apolíces - Editar</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            {!! Form::open(['route' => ['seguro.update', $seguro->id], 'method' => 'patch']) !!}
                            <!-- SmartWizard html -->
                            <div>
                                <div>
                                    <div>
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <div class="row" style="width:960px; margin: 20px auto;">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" value="{{$seguro->nome}}"
                                                        class="form-control has-feedback-left"
                                                        placeholder="Nome da seguro:" name="nome">
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" value="{{$seguro->n_apolice}}"
                                                        class="form-control has-feedback-left"
                                                        placeholder="Nº da Apolice:" name="n_apolice">
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <select class="form-control has-feedback-left" name="empresa_id">
                                                        <option value="{{ $seguro->empresa_id}}">
                                                            {{ $seguro->empresa_id }}</option>
                                                        @foreach ($empresas as $empresa)
                                                        <option value="{{$empresa->nome_fantasia}}">
                                                            {{$empresa->nome_fantasia}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="fa fa-home form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div> --}}
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                        value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS"
                                                        readonly placeholder="Agente de Integração"
                                                        name="agente_integracao">
                                                    <span class="fa fa-home form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    {{-- <input type="text" value="{{$seguro->cobertura}}"
                                                        class="form-control has-feedback-left" placeholder="Cobertura:"
                                                        name="cobertura"> --}}
                                                        <select class="form-control has-feedback-left" name="cobertura">
                                                        <option>{{$seguro->cobertura}}</option>
                                                        <option value="Sim">Sim</option>
                                                        <option value="Não">Não</option>
                                                        </select>
                                                    <span class="fa fa-user form-control-feedback left"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin-left:85px;">
                                       <button type="submit" class="btn btn-success" style="margin-top:20px!important; margin-left:130px!important;">Salvar Alterações</button>
                                            <a href="/seguro" class="btn btn-danger" style="margin-top:20px!important;">Voltar</a>
                                    </div>
                                    {!! Form::close() !!}
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
