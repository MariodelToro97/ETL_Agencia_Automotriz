<div id="modalSolicitudRefacciones" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Solicitud Refacciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSolicitudRefacciones">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idSolicitudesRefacciones" name="idSolicitudesRefacciones">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idSolicitud:</label>
                        <input type="text" min="1" class="form-control" id="idSolicitudSolicitudRefacciones" name="solicitud" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idMecánico:</label>
                        <input type="text" min="1" class="form-control" id="idMecanicoSolicitudRefacciones" name="mecanico" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Refacción:</label>
                        <input type="text" class="form-control" id="refaccionSolicitudRefacciones" name="refaccion" pattern="[A-Z,a-z]+[A-Z,a-z, ,0-9]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Vehículo:</label>
                        <input type="text" class="form-control" id="vehiculoSolicitudRefacciones" name="vehiculo" pattern="[A-Z,a-z,0-9]+[A-Z,a-z, ,0-9]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCliente:</label>
                        <input type="text" min="1" class="form-control" id="idClienteSolicitudRefacciones" name="cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" min="1" class="form-control" id="cantidadSolicitudRefacciones" name="cantidad" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="fechaSolicitudRefacciones" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
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
