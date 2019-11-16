@extends('layout/app')
@section('titulo','Lista das Auto-Avaliações Geradas | RH MAIS')
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
                <!-- <a href="{{url('estagiario/exportar')}}">Print  PDF</a> -->
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="">
                        <div class="col-md-4">
                            <br>
                            {{-- <button class="btn btn-primary">Lista Branco</button>
                <button class="btn btn-primary">Lista Preenchida</button> --}}
                        </div>
                    </form>
                    <br>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Listar Auto-Avaliação</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    {!! Form::open(['route' => ['buscar-estagiario'], 'method' => 'post']) !!}
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                            placeholder="Nome Estagiário" name="nome" value="">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit">Enviar</button>
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
