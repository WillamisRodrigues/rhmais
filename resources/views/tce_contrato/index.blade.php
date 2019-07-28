@extends('layout/app')
@section('titulo','Lista de Contratos Ativos - TCE | RH MAIS')
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
                  <a href="{{route('tce_contrato.create')}}" class="btn btn-success pull-right"> <i class="fa fa-plus"> </i> Adicionar Novo Contrato</a>
                    <h2>AGENTE DE INTEGRAÇÃO - Lista de Contratos Ativos - TCE</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table list table-striped table-responsive w-auto table-bordered">
                      <thead>
                        <tr>
                          <th>Estagiario:
                          <input type="text" class="form-control">
                          </th>
                          <th>Un. Concedente: <br>
                          <input type="text" class="form-control">
                          </th>
                          <th>Instituição:
                          <input type="text" class="form-control">
                          </th>
                          <th>Valor Bolsa:
                          <input type="text" style="width:100px;" class="form-control">
                          </th>
                          <th>Data Inicio:
                          <input type="text" style="width:100px;" class="form-control">
                          </th>
                          <th>Data Fim:
                          <input type="text" style="width:100px;" class="form-control">
                          </th>
                          <th>Contrato:
                          <input type="text" style="width:100px;" class="form-control">
                          </th>
                          <th>Assinado:
                          <input type="text" style="width:100px;" class="form-control">
                          </th>
                          <th>Obrigatório:
                          <input type="text" style="width:100px;" class="form-control">
                          </th>
                          <th>Opções
                          <div style="height:20px;"></div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
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
                         <td><a class="btn btn-primary" href="/tce-pdf" target="_blank"><i class="fa fa-print"></i> Imprimir TCE</a></td>
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