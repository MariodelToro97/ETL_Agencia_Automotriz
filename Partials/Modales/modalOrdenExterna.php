<div id="modalOrdenExterna" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Órden Externa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formOrdenExterna">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idOrdenesExternas" name="idOrdenesExternas">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idRequisicion:</label>
                        <input type="text" min="1" class="form-control" id="idRequisicion" name="requisicion" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idDepartamento:</label>
                        <input type="text" min="1" max="3" class="form-control" id="idDepartamento" name="departamento" pattern="[1-3]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="FechaExterna" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" id="DescripcionExterna" name="descripcion" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Total:</label>
                        <input type="text" class="form-control" id="TotalExterna" name="total" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idEmpleadoRecepción:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleadoExterna" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idCliente:</label>
                        <input type="text" min="1" class="form-control" id="idClienteExterna" name="cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idFactura:</label>
                        <input type="text" min="1" class="form-control" id="idFacturaExterna" name="factura" pattern="^[0-9]+" required="">
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
