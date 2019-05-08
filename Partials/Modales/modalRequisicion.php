<div id="modalRequisicion" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Requisición</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formRequisicion">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idRequisiciones" name="idRequisiciones">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idRequisicion:</label>
                        <input type="text" min="1" class="form-control" id="idRequisicionReq"  name="requisicion" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="empleadoRequisicion" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de Registro:</label>
                        <input type="text" min="2017-01-01" max="2023-12-31" class="form-control" id="registroRequisicion" name="registro" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Automóvil:</label>
                        <input type="text" min="1" class="form-control" id="automovilRequisicion" name="automovil" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cliente:</label>
                        <input type="text" min="1" class="form-control" id="clienteRequisicion" name="cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad de Piezas:</label>
                        <input type="text" min="1" class="form-control" id="piezasRequisicion" name="cantidad" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nombre de las piezas:</label>
                        <input type="text" class="form-control" id="nombreRequisicion" name="nombre" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
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
