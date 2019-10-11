<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
<<<<<<< HEAD
    <select class="form-control has-feedback-left" name="estados">
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>
    <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
=======
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
>>>>>>> 28eed1273b3088c0faa18fd6efbb592c221c6847
</div>
    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" placeholder="Cidade" name="cidade" value="{{old('cidade')}}">
        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
    </div>
