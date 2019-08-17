@extends('layout/app')
@section('titulo','Aditivos de Contratos Ativos - AD | RH MAIS')
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
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Aditivos de Contratos Ativos - AD</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table list table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiario
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Un. Concedente
                          <input type="text" class="form-control">
                          </th>
                          <th>Instituição
                          <input type="text" class="form-control">
                          </th>
                          <th>Valor Bolsa
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data Inicio
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Data Fim
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Contrato
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Assinado
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Obrigatório
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          @foreach ($estagiarios as $estagiario)
                         <tr>
                          <td>{{ $estagiario->nome }}</td>
                          <td>{{ $estagiario->nome_fantasia }}</td>
                          <td>{{ $estagiario->nome_instituicao }}</td>
                          <td>R$ {{ $estagiario->bolsa }}</td>
                          <td>{{ $estagiario->data_inicio }}</td>
                          <td>{{ $estagiario->data_fim }}</td>
                          <td>{{ $estagiario->contrato }}</td>
                          <td>{{ $estagiario->assinado }}</td>
                          <td>{{ $estagiario->obrigatorio }}</td>
                          <td><a class="btn btn-primary" href="{{ route('tce_aditivo.edit',[$estagiario->id])}}"><i class="fa fa-pencil"></i> Novo</a></td>
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