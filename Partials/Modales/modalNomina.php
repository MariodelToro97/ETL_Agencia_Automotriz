<div id="modalNomina" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Nómina</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formNomina">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idNominas" name="idNominas">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idNomina:</label>
                        <input type="text" min="1" class="form-control" id="idNomina" name="nomina" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idPercepcion:</label>
                        <input type="text"  min="0" class="form-control" id="percepcionNomina" name="percepcion" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="empleadoNomina" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idPeriodicidad:</label>
                        <input type="text" min="1" class="form-control" id="periodicidadNomina" name="periodicidad" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Salario base:</label>
                        <input type="text" min="1" class="form-control" id="salarioNomina" name="salario" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Bonos:</label>
                        <input type="text" min="0" class="form-control" id="bonoNomina" name="bono" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Deducciones:</label>
                        <input type="text" min="0" class="form-control" id="deduccionNomina" name="deduccion" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Total Neto:</label>
                        <input type="text" min="1" class="form-control" id="TotalNomina" name="total" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="FechaNomina" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idDepartamento:</label>
                        <input type="text" min="1" max="3" class="form-control" id="idDepartamentoNomina" name="departamento" pattern="[1-3]" required="">
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
