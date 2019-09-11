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
              <form action="">
                    <div class="col-md-2">
                    <label for="">Unidade:</label>
                    <select name="" class="form-control">
                        <option> Todas as Unidades</option>
                        @foreach ($unidades as $unidade)
                          <option> {{$unidade->nome_fantasia}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                <label for="">Período:</label>
                <select name="" class="form-control">
                    <option> Periodo Ano</option>
                </select>
                </div>
                <div class="col-md-2">
                <label for="">Dias Úteis:</label>
                <select name="" class="form-control">
                    <option> 30</option>
                </select>
                </div>
                <div class="col-md-4    ">
                <br>
                <button class="btn btn-primary">Processar</button>
                <button class="btn btn-primary">G. Recibo</button>
                <button class="btn btn-primary">G. Relaçãp</button>
                </div>
              </form>
              <br>
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Recibos Processados - Folha - Agente Integração</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped list  table-bordered">
                      <thead>
                        <tr>
                          <th><button class="btn btn-primary"> Fechar Mês</button></th>
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
                         <tr>
                          <td>Pendente</td>
                          <td>2019/06</td>
                          <td>CYNTHIA LIMA DA SILVA</td>
                          <td>ENGENHO COM JEITO MODAS LTDA</td>
                          <td>600,00</td>
                          <td>0</td>
                          <td>600,00</td>
                          <td><button class="btn btn-primary"><i class="fa fa-pencil"></i> Editar</button></td>
                        </tr>
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