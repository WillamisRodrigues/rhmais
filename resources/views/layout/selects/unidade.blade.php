<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <select class="form-control has-feedback-left" name="unidade_concedente">
    <option>Selecione Unidade Concedente</option>
    @foreach ($empresas as $key => $value)
      <option value="{{ $key }}">{{ $value->nome_fantasia }}</option>
    @endforeach
    </select>
    <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
    </div>