@extends('layout/app')
@section('titulo','Informe de Faturamento | RH MAIS')
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

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="">
                            <div class="col-md-2">
                                <label for="">Agente:</label>
                                <select name="" class="form-control">
                                    <option> KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">Unidade:</label>
                                <select name="" class="form-control">
                                    <option> Nome da Unidade</option>
                                    @foreach ($empresas as $empresa)
                                    <option value="{!! $empresa->id !!}">{!! $empresa->nome_fantasia !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">Período:</label>
                                <select name="" class="form-control">
                                    <option> 2019/04</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <button class="btn btn-primary">Processar</button>
                                <button class="btn btn-primary">Rel. Agente</button>
                                <button class="btn btn-primary">L. Relação</button>
                            </div>
                        </form>
                        <br>
                        <div class="x_panel">
                            <div class="x_title">

                                <h2>Informe de Faturamento</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list  table-bordered" style="zoom:0.8;">
                                    <thead>
                                        <tr>
                                            <th>Unidade
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Referência
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Dia Vcto
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>T.Bolsa
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            {{-- <th>Q.Plano
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th> --}}
                                            {{-- <th>V.Fixo
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th> --}}
                                            <th>C.Unitario
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Q.Resc.
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Q.Ativos
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>V.Calculado
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Fechado
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{ $empresa->nome_fantasia }}</td>
                                            <td>{{ date('Y/m') }}</td>
                                            <td></td>
                                            <td>
                                                @php
                                                $soma = 0;
                                                foreach ($contratos as $contrato) {
                                                if ($contrato->empresa_id == $empresa->id) {
                                                $soma += $contrato->bolsa;
                                                }
                                                }
                                                echo "R$ ".number_format($soma, 2, ',', '.');;
                                                @endphp
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>VALOR <BR> SOMA <BR> % <BR> CONTRATO<BR> ESTAGIARIO</td>
                                            <td></td>
                                            <td><a href="{{ route('financeiro.infos', [$empresa->id]) }}"
                                                    class="btn btn-primary"><i class="fa fa-bars"></i></a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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
