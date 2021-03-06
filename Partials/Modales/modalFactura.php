<div id="modalFactura" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Factura</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formFactura">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idFacturas" name="idFacturas">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idFactura:</label>
                        <input type="text" min="1" class="form-control" id="idFactura" name="idFactura" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IVA:</label>
                        <input type="text" class="form-control" id="IVAFactura" name="iva" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCliente:</label>
                        <input type="text" min="1" class="form-control" id="idClienteFactura" name="cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Importe:</label>
                        <input type="text" class="form-control" id="ImporteFactura" name="importe" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Subtotal:</label>
                        <input type="text" class="form-control" id="SubtotalFactura" name="subtotal" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idTipoPago:</label>
                        <input type="text" min="1" max="2" class="form-control" id="idTipoPagoFactura" name="idTipoPago" pattern="[1-2]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lugar de Emisión:</label>
                        <input type="text" class="form-control" id="lugarEmisionFactura" name="lugar" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Fecha:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="FechaFactura" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleadoFactura" name="empleadoFactura" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Estado:</label>
                        <input type="text" min="1" max="5" class="form-control" id="EstadoFactura" name="estado" pattern="[1-5]" required="">
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
