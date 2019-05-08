<div id="modalOrdenPedidoAutomovil" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Órden Pedido Automóvil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formOrdenPedidoAutomovil">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idOrdenesPedidosAutomoviles" name="idOrdenesPedidosAutomoviles">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idOrdenPedido:</label>
                        <input type="text" min="1" class="form-control" id="idOrdenPedido" name="ordenPedido" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleadoPedido" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCoche:</label>
                        <input type="text" min="1" class="form-control" id="idCochePedido" name="coche" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de Órden:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="FechaPedido" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" min="1" class="form-control" id="CantidadPedido" name="cantidad" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de Llegada:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="FechaLlegadaPedido" name="fechallegada" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <input type="text" min="1" max="2" class="form-control" id="EstadoPedido" name="estado" pattern="[1-2]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idPlanta:</label>
                        <input type="text" min="1" class="form-control" id="idPlantaPedido" name="planta" pattern="^[0-9]+" required="">
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
