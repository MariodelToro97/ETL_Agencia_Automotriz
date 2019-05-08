<div id="modalClientes" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formClientes">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idClientes" name="idClientes">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCliente:</label>
                        <input type="text" min="1" class="form-control" id="idCliente" name="idCliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">RFC:</label>
                        <input type="text" class="form-control" id="RFCCliente"  name="rfc" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Teléfono:</label>
                        <input type="text" maxlength="10" class="form-control" id="telefonoCliente" name="telefono" pattern="[0-9]{10}" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Correo:</label>
                        <input type="text" class="form-control" id="correoCliente" name="correo" pattern="[A-Z,a-z,-,_,.]+@[a-z]+\.[a-z]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Fecha de Nacimiento:</label>
                        <input type="text" min="1920-01-01" max="2005-12-31" class="form-control" id="NacimientoCliente" name="fechaCliente" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([1-2][9][0-9][0-9]|[2][0][0][0-9])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Domicilio:</label>
                        <input type="text" class="form-control" id="domicilioCliente" name="domicilio" pattern="[A-Z,a-z, ,0-9,#,.]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Género:</label>
                        <input type="text" min="0" max="1" class="form-control" id="GeneroCliente"  name="genero" pattern="[0-1]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idDepartamento:</label>
                        <input type="text" min="0" max="3" class="form-control" id="departamentoCliente"  name="departamento" pattern="[0-3]" required="">
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
