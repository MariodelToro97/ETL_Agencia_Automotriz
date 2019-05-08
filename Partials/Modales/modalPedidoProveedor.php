<div id="modalPedidoProveedor" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Pedido Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formPedidoProveedor">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idPedidosProveedores" name="idPedidosProveedores">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idPedido:</label>
                        <input type="text" min="1" class="form-control" id="idPedidoProveedor" name="pedido" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProducto:</label>
                        <input type="text" min="1" class="form-control" id="productoProveedores" name="producto" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProveedor:</label>
                        <input type="text" min="1" class="form-control" id="pedidoProveedores" name="proveedor" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="empleadoProveedores" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="text" min="2017-01-01" max="2023-12-31" class="form-control" id="FechaProveedores" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" min="1" class="form-control" id="cantidadProveedor" name="cantidad" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tiempo Estimado:</label>
                        <input type="text" min="1" class="form-control" id="tiempoProveedor" name="tiempo" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <input type="text" min="0" max="2" class="form-control" id="estadoProveedor" name="estado" pattern="^[0-9]+" required="">
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
