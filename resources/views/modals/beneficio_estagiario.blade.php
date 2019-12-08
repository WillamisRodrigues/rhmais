<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal">
                   <input type="hidden" name="product_id" id="product_id">
                    <div class="form-group">
                        <label for="referencia" class="col-sm-2 control-label">Referencia</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipo" class="col-sm-2 control-label">Tipo</label>
                        <div class="col-sm-12">
                          <select class="form-control has-feedback-left" name="tipo">
                                    <option value="1">Crédito</option>
                                    <option value="2">Débito</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Valor</label>
                        <div class="col-sm-12">
                            <textarea id="valor" name="valor" required="" placeholder="Enter Details" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Salvar
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>