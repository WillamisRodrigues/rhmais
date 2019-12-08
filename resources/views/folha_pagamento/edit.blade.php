@extends('layout/app')
@section('titulo','Editar - Folha - Agente Integração | RH MAIS')
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
 {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <br>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Editar - Folha de Pagamento</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row" style="height: 40vh">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Estagiário</label>
                                        <input type="text" value="{{ $estagiario->nome }}"
                                            class="form-control has-feedback-left" placeholder="Nome Estagiario"
                                            name="estagiario" readonly>
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Unidade Concedente</label>
                                        <input type="text" value="{{ $empresa->nome_fantasia }}"
                                            class="form-control has-feedback-left" placeholder="Unidade Concedente"
                                            name="unidade-concedente" readonly>
                                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Valor Bolsa</label>
                                        <input type="text" value="R$ {{ number_format($contrato->bolsa, 2, ",", "") }}"
                                            class="form-control has-feedback-left" placeholder="Bolsa"
                                            name="valor_bolsa" readonly>
                                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Início do Contrato</label>
                                        <input type="text"
                                            value="{{ date('d/m/Y', strtotime($contrato->data_inicio)) }}"
                                            class="form-control has-feedback-left" placeholder="Data de Início"
                                            name="data_inicio" readonly>
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Dias Considerados</label>
                                        <input type="number" value="{{$dias_considerados}}"
                                            class="form-control has-feedback-left" placeholder=""
                                            name="dias_considerados" readonly>
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    {!! Form::open(['route' => ['folha_pagamento.editar'], 'method' => 'post']) !!}
                                    <input type="hidden" name="folha_id" value="{{$folha->id}}">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Dias de Falta</label>
                                        <input type="number" value="0" class="form-control has-feedback-left"
                                            name="dias_falta">
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label for="">Outros Eventos</label>
                                            <br>
                                            {{-- <select name="beneficio_id"  class="form-control has-feedback-left" id="beneficio_id">
                                                @foreach ($beneficios as $beneficio)
                                            <option value="{{$beneficio->id}}">{{$beneficio->nome}}</option>
                                                @endforeach
                                            </select>
                                            <span class="fa fa-list form-control-feedback left"
                                                aria-hidden="true"></span>
                                                <br> --}}
                                                <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct">Outros eventos</a>
                                            {{-- <a href="/adicionar_u_infoeficio" class="btn btn-success" style="margin-top:20px!important; margin-rigth:130px!important;">Adicionar</a> --}}
                                        </div>
                                    <div>
                                    <button type="submit" class="btn btn-success" style="margin-top:20px!important; margin-left:130px!important;">Salvar Alterações</button>
                                    <a href="/folha_pagamento" class="btn btn-danger" style="margin-top:20px!important;">Voltar</a>
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th width="280px">Ação</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
            </div>
        </div>
    </div>
    @include('modals.beneficio_estagiario')
    <!-- /page content -->

    <!-- footer content -->
    @include('layout.footer')
    <!-- /footer content -->
</div>
</div>
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('ajax-crud.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'referencia', name: 'referencia'},
            {data: 'tipo', name: 'tipo'},
            {data: 'valor', name: 'valor'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Lançar novo evento");
        $('#ajaxModel').modal('show');
    });

    $('body').on('click', '.editProduct', function () {
      var product_id = $(this).data('id');
      $.get("{{ route('ajax-crud.index') }}" +'/' + product_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#product_id').val(data.id);
          $('#referencia').val(data.referencia);
          $('#valor').val(data.valor);
          $('#tipo').val(data.tipo);
      })
   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('ajax-crud.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              $('#productForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
          },

          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

    $('body').on('click', '.deleteProduct', function () {
        var product_id = $(this).data("id");
        confirm("Deseja remover?");
        $.ajax({
            type: "DELETE",
            url: "{{ route('ajax-crud.store') }}"+'/'+product_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
  });
</script>
@endsection
