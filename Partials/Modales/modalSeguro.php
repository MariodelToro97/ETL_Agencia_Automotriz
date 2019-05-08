<div id="modalSeguro" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Seguro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSeguro">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idSeguros" name="idSeguros">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idSeguro:</label>
                        <input type="text" min="1" class="form-control" id="idSeguro" name="seguro" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" id="DescripcionSeguro" name="descripcion" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCompañía:</label>
                        <input type="text" min="1" class="form-control" id="idCompaniaSeguro" name="compania" pattern="^[0-9]+" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
