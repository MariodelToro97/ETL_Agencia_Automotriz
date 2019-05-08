<div id="modalEmpleado" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Empleados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEmpleado">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idEmpleados" name="idEmpleados">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleado" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="NombreEmpleado" name="nombre" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">RFC:</label>
                        <input type="text" class="form-control" id="RFCEmpleado" name="rfc" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Teléfono:</label>
                        <input type="text" maxlength="10" class="form-control" id="telefonoEmpleado" name="telefono" pattern="[0-9]{10}" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Correo:</label>
                        <input type="text" class="form-control" id="CorreoEmpleado" name="correoEmpleado" pattern="[A-Z,a-z,-,_,.]+@[a-z]+\.[a-z]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Domicilio:</label>
                        <input type="text" class="form-control" id="DomicilioEMpleados" name="domicilio" pattern="[A-Z,a-z, ,0-9,#,.]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Fecha Ingreso:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="FechaIngresoEmpleado" name="fechaIngreso" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idContrato:</label>
                        <input type="text" min="1" max="5" class="form-control" id="idContratoEmpleado" name="contrato" pattern="[1-5]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idTurno:</label>
                        <input type="text" min="1" max="2" class="form-control" id="idTurnoEmpleado" name="turno" pattern="[1-2]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Género:</label>
                        <input type="text" min="0" max="1" class="form-control" id="GeneroEmpleado" name="genero" pattern="[0-1]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idCargo:</label>
                        <input type="text" min="1" class="form-control" id="cargoEmpleado" name="cargo" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Sueldo Base:</label>
                        <input type="text" min="1" class="form-control" id="sueldoBaseEmpleado" name="sueldo" pattern="[0-9]+[\.]*[0-9]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Comisión:</label>
                        <input type="text" min="1" class="form-control" id="comisionEmpleado" name="comision" pattern="[0-9]+[\.]*[0-9]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Estado:</label>
                        <input type="text" min="0" max="1" class="form-control" id="estadoEmpleado" name="estado" pattern="[0-1]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idDepartamento:</label>
                        <input type="text" min="1" max="3" class="form-control" id="idDepartamentoEmpleado" name="departamento" pattern="[1-3]" required="">
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
