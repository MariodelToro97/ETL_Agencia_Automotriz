<div id="modalProveedor" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formProveedor">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idProveedores" name="idProveedores">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProveedor:</label>
                        <input type="text" min="1" class="form-control" id="idProveedor" name="proveedor" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombreProveedor" name="nombreProveedor" name="nombre" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Teléfono:</label>
                        <input type="text" maxlength="10" class="form-control" id="TelefonoProveedor" name="telefono" pattern="[0-9]{10}" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Dirección:</label>
                        <input type="text" class="form-control" id="direccionProveedor" name="direccion" pattern="[A-Z,a-z, ,0-9,#,.]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Ciudad:</label>
                        <input type="text" class="form-control" id="ciudadProveedor" name="ciudad" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Estado Actual:</label>
                        <input type="text" min="0" class="form-control" id="estadoProveedor" name="estado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Empresa:</label>
                        <input type="text" class="form-control" id="empresaProveedor" name="empresa" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
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
