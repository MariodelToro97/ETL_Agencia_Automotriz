<div id="modalRecepcionVehiculoNuevo" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Recepción Vehículo Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formRecepcionVehiculoNuevo">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idRecepcionesVehiculosNuevos" name="idRecepcionesVehiculosNuevos">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idRecepción:</label>
                        <input type="text" min="1" class="form-control" id="idRecepcionVehiculonuevo" name="recepcion" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Identificación:</label>
                        <input type="text" min="1" class="form-control" id="identificacionRecepcionVehiculoNuevo" name="identificacion" pattern="[A-Z]{3}-[0-9]{3}" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idModelo:</label>
                        <input type="text" min="1" class="form-control" id="idModeloRecepcionVehiculoNuevo" name="modelo" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Color:</label>
                        <input type="text" class="form-control" id="colorRecepcionVehiculoNuevo" name="color" pattern="[A-Z,a-z]+[A-Z,a-z, ]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Condición de Llegada:</label>
                        <input type="text" class="form-control" id="condicionLlegadaRecepcionVehiculoNuevo" name="condicion" pattern="[A-Z,a-z]+[A-Z,a-z, ]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Seguro:</label>
                        <input type="text" class="form-control" id="seguroRecepcionVehiculoNuevo" name="seguro" pattern="[A-Z,a-z]+[A-Z,a-z, ]*" required="">
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
