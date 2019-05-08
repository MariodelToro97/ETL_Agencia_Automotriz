<div id="modalOrdenSalidaProductos" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Órden Salida Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formOrdenSalidaProductos">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idOrdenesSalidasProductos" name="idOrdenesSalidasProductos">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idOrdenSalida:</label>
                        <input type="text" min="1" class="form-control" id="idOrdenSalidaProducto" name="orden" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idFactura:</label>
                        <input type="text" min="1" class="form-control" id="idFacturaSalidaProducto" name="facturaSalida" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="text" min="2017-01-01" max="2023-12-31" class="form-control" id="FechaSalidaProducto" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleadoSalidaProducto" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Estado:</label>
                        <input type="text" min="1" max="5" class="form-control" id="EstadoSalidaProducto" name="estado" pattern="[1-5]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idOrdenExterna:</label>
                        <input type="text" min="1" class="form-control" id="idOrdenExternaSalidaProducto" name="ordenExterna" pattern="^[0-9]+" required="">
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
