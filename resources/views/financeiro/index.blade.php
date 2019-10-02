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
                    <table class="table table-striped list  table-bordered">
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
                          <th>Q.Plano
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
                          <th>V.Fixo
                          <input type="text" class="form-control" style="width:100px;">
                          </th>
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
                         <tr>
                          <td>R M SOLUÇÕES SERVIÇOS DE COBRANÇAS LTDA - RM COBRANÇAS</td>
                          <td>2019/07</td>
                          <td>22</td>
                          <td>18600.00</td>
                          <td>0</td>
                          <td>0.00</td>
                          <td>80.00</td>
                          <td>3</td>
                          <td>28</td>
                          <td>2122.66</td>
                          <td>S</td>
                          <td><button class="btn btn-primary"><i class="fa fa-bars"></i> Resumo</button></td>
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
