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
                        <form action="{{route('processarFinanceiro')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="col-md-2">
                                <label for="">Agente:</label>
                                 <input type="text" class="form-control" name="" value="KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS" readonly><br><br>
                                {{-- <select name="" class="form-control">
                                    <option> KOSTER E KOSTER CONSULTORIA EM RH LTDA - RH MAIS TALENTOS</option>
                                </select> --}}
                            </div>
                            <div class="col-md-2">
                                <label for="">Unidade:</label>
                                <select name="unidade_id" class="form-control">
                                    <option> Nome da Unidade</option>
                                     @foreach ($empresas as $unidade)
                                    <option value="{{$unidade->id}}"> {{$unidade->nome_fantasia}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">Período:</label>
                                <select name="referencia" class="form-control">
                                    <option value=""> Periodo Ano</option>
                                    @foreach ($periodos as $periodo)
                                     <option value="{{$periodo->referencia}}"> {{$periodo->referencia}}
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <button class="btn btn-primary">Processar</button>
                                <a href="" class="btn btn-primary">Rel. Agente</a>
                                <a href="" class="btn btn-primary">L. Relação</a>
                            </div>
                        </form>
                        <br>
                        <div class="x_panel">
                            <div class="x_title">

                                <h2>Informe de Faturamento</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list  table-bordered" style="zoom:0.9;">
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
                                            {{-- <th>T.Bolsa
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
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contratos as $contrato)
                                        <tr>
                                            <td>  @php
                                                foreach ($empresas as $empresa) {
                                                if ($empresa->id == $contrato->empresa_id) {
                                                echo $empresa->nome_fantasia;
                                                }
                                                }
                                                @endphp
                                            </td>
                                            <td>{{ $contrato->referencia }}</td>
                                            <td>{{$contrato->data_boleto}}</td>
                                            <td>@php
                                                foreach ($empresas as $empresa) {
                                                if ($empresa->id == $contrato->empresa_id) {
                                                echo "R$ ".number_format($empresa->custo_unitario, 2, ',', '.');;
                                                }
                                                }
                                                @endphp
                                            </td>
                                            <td>
                                                @foreach ($qRescisao as $inativos)
                                                    @if($inativos->id == $contrato->empresa_id)
                                                            {{$inativos->qtd}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($qAtivos as $ativos)
                                                    @if($ativos->id == $contrato->empresa_id)
                                                            {{$ativos->qtd}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{"R$ ".number_format($contrato->total_custo, 2)}}</td>
                                            <td>
                                                @if ($contrato->situacao != 1)
                                                Aberto
                                                @else
                                                Fechado
                                                @endif
                                            </td>
                                             <td>
                                                 <a href="{{ route('financeiro.fechar', [$contrato->id]) }}"
                                                    class="btn btn-primary" title="Marcar contrato como fechado"> <i
                                                        class="fa fa-star"></i> </a>
                                            </td>
                                            <td>VALOR <BR> SOMA <BR> % <BR> CONTRATO<BR> ESTAGIARIO</td>
                                                <td><a href="{{ route('financeiro.infos', [$contrato->id]) }}"
                                                    class="btn btn-primary" title="Detalhes"><i class="fa fa-bars"></i></a></td>
                                                <td><a href="{{ action('PdfController@generateFechamento', $contrato->empresa_id) }}" target="_blank" class="btn btn-warning" title="Imprimir"> <i class="fa fa-print"></i> </a><td>
                                            </td>
                                        </td>
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
