<div id="modalAbonos" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Abonos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="formAbonos">
                <div class="form-group" hidden>
                    <input type="text" min="1" class="form-control" id="idAbonos" name="idAbonos">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">idFactura:</label>
                    <input type="text" min="1" class="form-control" id="facturaAbono" name="idFactura" pattern="^[0-9]+" required="">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Concepto:</label>
                    <input type="text" class="form-control" id="conceptoAbono" name="concepto" pattern="[A-Z,a-z]+" required="">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Fecha:</label>
                    <input type="text" min="2015-01-01" class="form-control" name="fecha" id="fechaAbono" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Cargo:</label>
                    <input type="text" class="form-control" id="cargoAbono" name="cargo" pattern="[0-9]+\.[0-9]+" required="">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Abono:</label>
                    <input type="text" class="form-control" id="abonoSS" name="abono" pattern="[0-9]+\.[0-9]+" required="">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Saldo:</label>
                    <input type="text" class="form-control" id="saldoAbono" name="saldo" pattern="[0-9]+\.[0-9]+" required="">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">idEmpleados:</label>
                    <input type="text" min="1" class="form-control" id="EmpleadoAbono" name="idEmpleado" pattern="[0-9]+" required="">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Intereses:</label>
                    <input type="text" class="form-control" id="InteresAbono" name="interes" pattern="[0-9]+\.[0-9]+" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">idAbono:</label>
                    <input type="text" min="1" class="form-control" id="idAbono" name="idAbono" pattern="^[0-9]+" required="">
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
