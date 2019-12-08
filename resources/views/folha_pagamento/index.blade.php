@extends('layout/app')
@section('titulo','Recibos Processados - Folha - Agente Integração | RH MAIS')
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
                        <form action="/processar" method="POST">
                            {{ csrf_field() }}
                            <div class="col-md-2">
                                <label for="">Unidade:</label>
                                <select name="unidade" class="form-control">
                                    <option value=""> Todas as Unidades</option>
                                    @foreach ($unidades as $unidade)
                                    <option value="{{$unidade->nome_fantasia}}"> {{$unidade->nome_fantasia}}</option>
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
                            <div class="col-md-2">
                                <label for="">Dias Úteis:</label>
                                <select name="" class="form-control">
                                    <option> 01</option>
                                    <option> 02</option>
                                    <option> 03</option>
                                    <option> 04</option>
                                    <option> 05</option>
                                    <option> 06</option>
                                    <option> 07</option>
                                    <option> 08</option>
                                    <option> 09</option>
                                    <option> 10</option>
                                    <option> 11</option>
                                    <option> 12</option>
                                    <option> 13</option>
                                    <option> 14</option>
                                    <option> 15</option>
                                    <option> 16</option>
                                    <option> 17</option>
                                    <option> 18</option>
                                    <option> 19</option>
                                    <option> 20</option>
                                    <option> 21</option>
                                    <option> 22</option>
                                    <option> 23</option>
                                    <option> 24</option>
                                    <option> 25</option>
                                    <option> 26</option>
                                    <option> 27</option>
                                    <option> 28</option>
                                    <option> 29</option>
                                    <option> 30</option>
                                    <option> 31</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <button type="submit" class="btn btn-primary">Processar</button>
                                <a href="/holerite" class="btn btn-primary">G. Recibo</a>
                                <a href="/folha" class="btn btn-primary">G. Relação</a>
                            </div>
                        </form>
                        <br>
                        <div class="x_panel">
                            <div class="x_title">

                                <h2>Recibos Processados - Folha - Agente Integração</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped list  table-bordered" style="zoom:0.9;">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Referência
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Estagiario
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Un. Concedente
                                                <input type="text" class="form-control">
                                            </th>
                                            <th>Valor da Bolsa
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Faltas
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Valor Liquido
                                                <input type="text" class="form-control" style="width:100px;">
                                            </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($folhas as $folha)
                                        <tr>
                                            <td>
                                                @if ($folha->status == 0)
                                                Pendente
                                                @else
                                                Gerado
                                                @endif
                                            </td>
                                            <td>{{ $folha->referencia }}</td>
                                            <td>
                                                @php
                                                foreach ($estagiarios as $estagiario) {
                                                if ($estagiario->id == $folha->estagiario_id) {
                                                echo $estagiario->nome;
                                                }
                                                }
                                                @endphp
                                            </td>
                                            <td>
                                                @php
                                                foreach ($empresas as $empresa) {
                                                if ($empresa->id == $folha->empresa_id) {
                                                echo $empresa->nome_fantasia;
                                                }
                                                }
                                                @endphp
                                            </td>
                                            <td>{{ $folha->valor_bolsa }}</td>
                                            <td>{{ $folha->faltas }}</td>
                                            <td>{{ $folha->valor_liquido }}</td>
                                            <td>
                                                @if ($folha->status == 0)
                                                <a href="{!! route('folha_pagamento.edit', [$folha->id]) !!}"
                                                    class="btn btn-primary"><i class="fa fa-pencil"></i> </a>
                                                @endif
                                                <a href="/holerite" target="_blank" class="btn btn-success">
                                                    <i class="fa fa-print"></i>
                                                </a>
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
