<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal">
                   <input type="hidden" name="product_id" id="product_id">
                    <input type="hidden" name="estagiario_id" id="estagiario_id" value="{{ $estagiario->id }}">
                     <input type="hidden" name="folha_id" id="folha_id" value="{{ $folha->id }}">

                   <div class="col-md-12">
                        <div class="form-group">
                            <select class="form-control has-feedback-left" name="beneficio_id">
                                    @foreach ($beneficios as $ben)
                                <option value="{{$ben->id}}">{{$ben->nome}}</option>
                                    @endforeach
                            </select>
                                        <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipo" class="control-label">Tipo</label>
                            <div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        <select class="form-control has-feedback-left" name="tipo">
                                            <option value="1">Crédito</option>
                                            <option value="2">Débito</option>
                                        </select>
                                        <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Valor</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" value="0" class="form-control has-feedback-left dinheiro" name="valor">
                            <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="saveBtn" value="create">Salvar mudanças</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>