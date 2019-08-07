@extends('layout/app')
@section('titulo','Gerar TERMO de Conclusão | RH MAIS')
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

                    <h2>Gerar TERMO de Conclusão / Rescisão do TCE - Agente de Integração (GTR-AI)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list table-bordered">
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
                          <th>Situação</th>
                          <th>Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($estagiarios as $estagiario)
                         <tr>
                         <td>{{$estagiario->nome}}</td>
                          <td>{{ $estagiario->nome_fantasia }}</td>
                          <td>{{ $estagiario->nome_instituicao }}</td>
                          <td>R$ {{ $estagiario->bolsa }}</td>
                          <td>{{ $estagiario->data_inicio }}</td>
                          <td>{{ $estagiario->data_fim }}</td>
                          <td>{{ $estagiario->contrato }}</td>
                          {{-- <td>{{ $estagiario->assinado }}</td> --}}
                          {{-- <td>{{ $estagiario->obrigatorio }}</td> --}}
                          <td>RES</td>
                          <td>TCE Assinado Rescisão Assinada</td>
                          <td><a href="{{ action('EstagiarioController@gerarRelatorio', $estagiario->id) }}" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> TCE Recisão</a></td>
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