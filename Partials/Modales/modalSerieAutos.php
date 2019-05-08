<div id="modalSerieAutos" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Serie Autos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSerieAutos">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idSeriesAutos" name="idSeriesAutos">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idAutomovil:</label>
                        <input type="text" min="1" class="form-control" id="idAutomovilSerie" name="automovil" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">noChasis:</label>
                        <input type="text" class="form-control" id="noChasisSerie" name="chasis" pattern="[A-Z]{3}-[0-9]{3}" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">noMotor:</label>
                        <input type="text" class="form-control" id="noMotorSerie" name="motor" pattern="[A-Z]{3}-[0-9]{3}" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idFactura:</label>
                        <input type="text" min="1" class="form-control" id="idFacturaSerie" name="factura" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idEstadoVenta:</label>
                        <input type="text" min="1" max="3" class="form-control" id="idEstadoVentaSerie" name="estado" pattern="[1-3]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idUbicacion:</label>
                        <input type="text" min="1" max="3" class="form-control" id="idUbicacionSerie" name="ubicacion" pattern="[1-3]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de Llegada:</label>
                        <input type="text" min="2017-01-01" max="2023-12-31" class="form-control" id="FechaLlegadaSerieAutos" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEstadoAuto:</label>
                        <input type="text" min="1" max="5" class="form-control" id="idEstadoAutoSerie" name="estado" pattern="^[0-9]+" required="">
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
