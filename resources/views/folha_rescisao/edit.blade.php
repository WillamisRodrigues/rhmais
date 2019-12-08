@extends('layout/app')
@section('titulo','Rescisão - Gerar | RH MAIS')
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
                        <div class="x_panel" style="height:400px!important;">
                            <div class="x_title">
                                <h2>Gerar - Folha de Rescisão</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row" style="height: 40vh">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Estagiário</label>
                                        <input type="text" value=""
                                            class="form-control has-feedback-left" placeholder="Nome Estagiario"
                                            name="estagiario" readonly>
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Unidade Concedente</label>
                                        <input type="text" value=""
                                            class="form-control has-feedback-left" placeholder="Unidade Concedente"
                                            name="unidade-concedente" readonly>
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Valor Bolsa</label>
                                        <input type="text" value=""
                                            class="form-control has-feedback-left" placeholder="Bolsa"
                                            name="valor_bolsa" readonly>
                                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Início do Contrato</label>
                                        <input type="text"
                                            value=""
                                            class="form-control has-feedback-left" placeholder="Data de Início"
                                            name="data_inicio" readonly>
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Fim do Contrato</label>
                                        <input type="text"
                                            value=""
                                            class="form-control has-feedback-left" placeholder="Fim do Contrato"
                                            name="data_inicio" readonly>
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Dias Considerados</label>
                                        <input type="number" value=""
                                            class="form-control has-feedback-left" placeholder=""
                                            name="dias_considerados" readonly>
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    {!! Form::open() !!}
                                    <input type="hidden" name="folha_id" value="">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Dias de Falta</label>
                                        <input type="number" value="0" class="form-control has-feedback-left"
                                            name="dias_falta">
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                   <label for="">Outros Eventos</label>
                                    <select name="beneficio"  class="form-control has-feedback-left">
                                    <option value=""></option>
                                    </select>
                                    <span class="fa fa-list form-control-feedback left"
                                            aria-hidden="true"></span>
                                   </div>
                                   <div>
                                    <button type="submit" class="btn btn-success" style="margin-top:10px!important; margin-left:430px!important;">Salvar Alterações</button>
                                        <button class="btn btn-danger" style="margin-top:10px!important;">Voltar</button>

                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th>Débito</th>
                                <th>Crédito</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th> 1 </th>
                                <td> Bolsa Auxilio</td>
                                <td></td>
                                <td>600.00</td>
                                <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
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
