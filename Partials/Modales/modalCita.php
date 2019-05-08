<div id="modalCita" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formCita">
                    <div class="form-group" hidden>
                    <input type="text" min="1" class="form-control" id="idCitas" name="idCitas">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCita:</label>
                        <input type="text" min="1" class="form-control" id="idCita" name="cita" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idRecepcionista:</label>
                        <input type="text" min="1" class="form-control" id="idRecepcionistaCita" name="recepcionista" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cliente:</label>
                        <input type="text" min="1" class="form-control" id="clienteCita" name="Cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="text" min="2016-01-01" max="2023-12-31" class="form-control" id="FechaCita" name="Fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora:</label>
                        <input type="text" class="form-control" id="HoraCita" name="horaCita" pattern="[0-23]:[0-59]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tipo Servicio:</label>
                        <input type="text" min="1" class="form-control" id="tipoServicioCita" name="tiposervicio" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripción del Servicio:</label>
                        <input type="text" class="form-control" id="descripcionServicioCita" name="descripcion" pattern="[A-Z,a-z]+[A-Z,a-z, ]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idMecánico:</label>
                        <input type="text" min="1" class="form-control" id="idMecanicoCita" name="mecanico" pattern="^[0-9]+" required="">
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
