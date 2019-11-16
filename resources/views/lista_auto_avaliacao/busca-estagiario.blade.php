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
                                    <h2>Listar Estagiários</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    {!! Form::open(['route' => ['filtrar-estagiario'], 'method' => 'post']) !!}
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Supervisor</label>
                                        <select name="supervisor_id" class="form-control has-feedback-left" id="">
                                            <option value=""></option>
                                            @foreach ($supervisores as $supervisor)
                                            <option value="{{ $supervisor->id }}">{{ $supervisor->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Empresa</label>
                                        <select name="empresa_id" class="form-control has-feedback-left" id="">
                                            <option value=""></option>
                                            @foreach ($empresas as $empresa)
                                            <option value="{{ $empresa->id }}">{{ $empresa->nome_fantasia }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Pesquisar</button>
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
