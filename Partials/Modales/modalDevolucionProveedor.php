<div id="modalDevolucionProveedor" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Devolución Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formDevolucionProveedor">
                    <div class="form-group" hidden>
                    <input type="text" min="1" class="form-control" id="idDevolucionesProveedores" name="idDevolucionesProveedores">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idDevolución:</label>
                        <input type="text" min="1" class="form-control" id="devolucionProveedor" name="devolucionProveedor" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProducto:</label>
                        <input type="text" min="1" class="form-control" id="productoProveedor" name="producto" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProveedor:</label>
                        <input type="text" min="1" class="form-control" id="proveedorDevolucion" name="proveedor" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de Devolución:</label>
                        <input type="text" min="2017-01-01" max="2023-12-31" class="form-control" id="FechaDevolucion" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" id="DescripcionDevolucion" name="descripcion" pattern="[A-Z,a-z]+[A-Z,a-z, ]" required="">
                    </div>
                    <div class="form-group">

                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" min="1" class="form-control" id="cantidadDevolucion" name="cantidad" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Precio Unitario:</label>
                        <input type="text" class="form-control" id="PrecioDevolucion" name="precio" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Monto Total:</label>
                        <input type="text" class="form-control" id="montoTotalDevolucion" name="montoTotal" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Estado de la devolución:</label>
                        <input type="text" min="1" max="2" class="form-control" id="estadoDevolucionProveedor" name="estado" pattern="[1-2]" required ="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Tipo de devolución:</label>
                        <input type="text" min="1" max="2" class="form-control" id="tipoDevolucionProveedor" name="tipoDevolucion" pattern="[1-2]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCompra:</label>
                        <input type="text" min="1" class="form-control" id="compraDevolucionProveedor" name="compra" pattern="^[0-9]+" required="">
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
