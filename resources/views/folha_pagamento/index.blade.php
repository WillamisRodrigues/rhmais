@extends('layout/app')
@section('titulo','Folha de Pagamento - Agente Integração | RH MAIS')
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

        <!-- JQuery -->
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <!-- <a href="{{url('estagiario/exportar')}}">Print  PDF</a> -->
                <div class="clearfix"></div>

                <div class="row">
                     @include('layout.alerta.flash-message')
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="{{route('processar')}}" id="frm-relatorio" method="POST">
                            {{ csrf_field() }}
                            <div class="col-md-2">
                                <label for="">Unidade:</label>
                                <select name="unidade_id" id="unidade-id" class="form-control">
                                    <option value=""> Todas as Unidades</option>
                                    @foreach ($unidades as $unidade)
                                    <option value="{{$unidade->empresa_id}}"> {{$unidade->nome_fantasia}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">Período:</label>
                                <select name="referencia" id="referencia" class="form-control">
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
                                 <button type="submit" name="processar" id="processar" class="btn btn-primary">Processar</button>
                                 <button type="submit" name="grecibo"  id="grecibo"  class="btn btn-primary">G. Recibo</button>
                                 <button type="submit" name="grelacao" id="grelacao" class="btn btn-primary">G. Relação</button>
                        </form>
                            </div>
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
                                            <td>R$ {{ $folha->valor_bolsa }}</td>
                                            <td>{{ $folha->faltas }}</td>
                                            <td>@if ($folha->valor_liquido)
                                                 R$ {{ $folha->valor_liquido }}
                                            @endif
                                            </td>
                                             <td>
                                                {{-- @if ($folha->status == 0) --}}
                                                <form action="{{ route('folha_pagamento.edit', [$folha->id]) }}">
                                                <button type="submit" class="btn btn-primary" title="Editar"><i class="fa fa-pencil"></i> </a>
                                                </button>
                                                {{-- @endif --}}
                                                <a href="{{ route('holerite', [$folha->id]) }}" target="_blank" class="btn btn-success">
                                                    <i class="fa fa-print" title="Imprimir"></i>
                                                </a>
                                                </form>
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
<script>
var und = [];
var ref = [];

$('#unidade-id').bind('change', function(){
   und = $(this).val();
});

$('#referencia').bind('change', function(){
   ref = $(this).val();
 });

    $('#grecibo').click(function(e){
        if(und > 0 && ref != null){
            $('#frm-relatorio').attr("action", '{{route('grecibo')}}').attr( 'target','_blank' );
        }else {
            e.preventDefault();
            alert("Escolha ao lado");
        }
      });

      $('#processar').click(function(){
         $('#frm-relatorio').removeAttr('target');
        $('#frm-relatorio').attr("action", '{{route('processar')}}');
    });

     $('#grelacao').click(function(e){
          if(und > 0 && ref != null){
        $('#frm-relatorio').attr("action", '{{route('grelacao')}}').attr( 'target','_blank' );
        }else {
            e.preventDefault();
            alert("Escolha ao lado");
        }
    });
</script>
@endsection
