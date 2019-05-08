<div id="modalFacturaProveedor" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Factura Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formFacturaProveedor">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idFacturasProveedores" name="idFacturasProveedores">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idFactura:</label>
                        <input type="text" min="1" class="form-control" id="facturaProveedor" name="factura" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProveedor:</label>
                        <input type="text" min="1" class="form-control" id="idPproveedor" name="proveedor" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="empleadoProveedor" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idPedido:</label>
                        <input type="text" min="1" class="form-control" id="pedidoProveedor" name="pedido" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de Registro:</label>
                        <input type="text" min="2016-01-01" max="2023-12-31" class="form-control" id="FechaProveedor" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Precio Unitario:</label>
                        <input type="text"class="form-control" id="precioUnitarioProveedor" name="precio" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" min="1" class="form-control" id="cantidadPproveedor" name="cantidad" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Total:</label>
                        <input type="text" class="form-control" id="TotalProveedor" name="total" pattern="[0-9]+\.[0-9]+" required="">
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
