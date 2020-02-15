<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dependent Dropdown Example with demo</title>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>

<div class="container">
    <div class="panel panel-default">
      {{-- <div class="panel-heading">Select State and get bellow Related City</div> --}}
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Nome</label>
                <select name="nome" class="form-control" style="width:350px">
                    <option value="">Nome</option>
                    @foreach ($estagiarios as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Empresa</label>
                <select name="empresa" class="form-control" style="width:350px">
                </select>
            </div>
      {{-- </div> --}}
      <div class="form-group">
                <label for="title">Instituição</label>
                <select name="instituicao" class="form-control" style="width:350px">
                </select>
            </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="nome"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/teste/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="empresa"]').empty();
                        $('select[name="instituicao"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="empresa"]').append('<option value="'+ key +'">'+ key +'</option>');
                            $('select[name="instituicao"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="empresa"]').empty();
            }
        });
    });
</script>
</body>
</html>