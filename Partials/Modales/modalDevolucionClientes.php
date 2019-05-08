<div id="modalDevolucionClientes" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Devolución Clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formDevolucionClientes">
                    <div class="form-group" hidden>
                    <input type="text" min="1" class="form-control" id="idDevolucionesClientes" name="idDevolucionesClientes">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idDevolución:</label>
                        <input type="text" min="1" class="form-control" id="idDevolucionCliente" name="devolucion"  pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProducto:</label>
                        <input type="text" min="1" class="form-control" id="idProductoDevolucionCliente" name="idProducto" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleadoDevolucionCliente" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCliente:</label>
                        <input type="text" min="1" class="form-control" id="idClienteDevolucionCliente" name="cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Razón:</label>
                        <input type="text" class="form-control" id="RazonDevolucionCliente" name="razon" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de emisión:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="FechaDevolucionCliente" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Estado:</label>
                        <input type="text" min="1" max="2" class="form-control" id="EstadoDevolucionCliente" name="estado" pattern="[1-2]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Costo:</label>
                        <input type="text" class="form-control" id="CostoDevolucionCliente" name="costo" pattern="[0-9]+[\.]*[0-9]*" required="">
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
