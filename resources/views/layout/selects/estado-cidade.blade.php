<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <select class="form-control has-feedback-left" name="state">
       <option value=""> Selecione Estado </option>
        @foreach ($states as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
     {{-- <select name="city" class="form-control has-feedback-left">
        <option value="">Selecione Cidade </option>
    </select> --}}
    <input type="text" name="city" class="form-control has-feedback-left" placeholder="Cidade">
    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
</div>
