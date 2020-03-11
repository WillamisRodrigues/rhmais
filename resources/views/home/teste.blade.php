<!DOCTYPE html>
<html>
<head>
    <title>Ajax Testes</title>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>

<div class="container">
    <div class="panel panel-default">
      {{-- <div class="panel-heading">Select State and get bellow Related City</div>  --}}
       <div class="panel-body">
            <div class="form-group">
                <label for="title">Empresa</label>
                <select name="empresa_id" class="form-control" style="width:350px">
                     <option>Selecione o Estagiário:</option>
                         @foreach ($empresas as  $key => $value )
                         <option value="{{ $value->id }}">{{ $value->nome_fantasia }}</option>
                         @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Empresa</label>
                <select name="empresa_id" class="form-control" style="width:350px">
                </select>
            </div>
       </div>
      <div class="form-group">
                <label for="title">Horarios</label>
                <select name="horario_id" class="form-control" style="width:350px">
                </select>
            </div>
    </div>
</div>
<script type="text/javascript">
     $(document).ready(function() {
        $('select[name="empresa_id"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/teste-ajax/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="descricao"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="horario_id"]').append('<option value="'+ data[0].id +'">'+ data[0].descricao +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="horario_id"]').empty();
            }
        });
    });
</script>
</body>
</html>