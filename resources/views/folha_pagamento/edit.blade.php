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

        <!-- Script -->
            <script src="{{URL::asset('assets/js/jquery-3.3.1.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/jquery.validate.js')}}"></script>
            <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>

                <div class="row">
                <div class="col-md-2"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Editar - Folha de Pagamento</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row" style="height: 40vh">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="">Estagiário</label>
                                        <input type="hidden" id="estagiario_id" name="estagiario_id" value="{{ $estagiario->id}}">
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
                                        <input type="text" value="{{ $contrato->bolsa }}"
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
                                    <input type="number" value="{{$folha->faltas}}" class="form-control has-feedback-left"
                                            name="dias_falta">
                                        <span class="fa fa-calendar form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>
                                    <div style="margin-left:300px;">
                                        <button type="submit" class="btn btn-success" style="margin-top:20px!important; margin-left:130px!important;">Salvar Alterações</button>
                                        <a href="/folha_pagamento" class="btn btn-danger" style="margin-top:20px!important;">Voltar</a>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <br>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><a class="btn btn-success" href="javascript:void(0)" id="createNewProduct">Outros eventos</a></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row" style="height: 40vh">
                                <table class="table table-bordered data-table" style="width:100%;">
                                    <thead>
                                        <tr>
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
                </div>
            </div>
        </div>
    </div>
    @include('modals.beneficio_estagiario')
    <!-- /page content -->

    <!-- footer content -->
    @include('layout.footer')
    <!-- /footer content -->
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var id_cliente = $("#estagiario_id").val();
    var table = $('.data-table').DataTable({
        oLanguage: {sUrl : '/br/br.txt'},
        processing: true,
        serverSide: true,
        ajax: "http://rhmais.imugi.com.br/beneficio_estagiario/"+id_cliente,
        columns: [
            {data: 'nome', name: 'nome'},
            {data: 'tipo_folha', name: 'tipo_folha'},
            {data: 'valor_real', name: 'valor_real'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
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
        $(this).html('Salvando..');
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
        if(confirm("Deseja remover?")){
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
        }
    });
  });
</script>
@endsection
