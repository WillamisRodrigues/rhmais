<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <select class="form-control has-feedback-left" name="state">
       <option value="">--- Selecione Estado ---</option>
        @foreach ($states as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
     <select name="city" class="form-control has-feedback-left">
        <option value="">--- Selecione Cidade ---</option>
    </select>
    <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
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
