<!DOCTYPE html>

<html>
<head>
    <title>Laravel Dependent Dropdown</title>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>

<body>
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Selecione Estado e abaixo a Cidade</div>
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Selecione Estado:</label>
                <select name="state" class="form-control" style="width:350px">
                    <option value="">--- Selecione Estado ---</option>
                    @foreach ($states as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="title">Selecione Cidade:</label>
                <select name="city" class="form-control" style="width:350px">
                </select>
            </div>
      </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>
</body>
</html>