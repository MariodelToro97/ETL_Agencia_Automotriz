<div id="modalCompaniaSeguro" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Compañia de Seguros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formCompaniaSeguro">
                    <div class="form-group" hidden>
                    <input type="text" min="1" class="form-control" id="idCompaniasSeguras" name="idCompaniasSeguras">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCompañía:</label>
                        <input type="text" min="1" class="form-control" id="idCompania" name="companiaSeguro" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="NombreCompania" name="nombre" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Correo:</label>
                        <input type="text" class="form-control" id="CorreoCompania" name="correo" pattern="[A-Z,a-z,-,_,.]+@[a-z]+\.[a-z]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Teléfono:</label>
                        <input type="text" maxlength="10" class="form-control" id="TelefonoCompania" name="telefono" pattern="[0-9]{10}" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Dirección:</label>
                        <input type="text" class="form-control" id="DireccionCompania" name="direccion" pattern="[A-Z,a-z, ,0-9,#,.]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Localidad:</label>
                        <input type="text" class="form-control" id="LocalidadCompania" name="localidad" pattern="[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Estado:</label>
                        <input type="text" class="form-control" id="EstadoCompania" name="estado" pattern="[A-Z,a-z, ]+" required="">
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
