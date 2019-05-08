<div id="modalOrdenCobroTaller" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Órden de Cobro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formOrdenCobroTaller">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idOrdenesCobrosTaller" name="idOrdenesCobrosTaller">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCobro:</label>
                        <input type="text" min="1" class="form-control" id="idCobroOrdenCobroTaller" name="cobro" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleadoOrdenCobroTaller" name="empleado" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCliente:</label>
                        <input type="text" min="1" class="form-control" id="idCLienteOrdenCobroTaller" name="cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idTipoServicio:</label>
                        <input type="text" min="1" class="form-control" id="idTipoServicioOrdenCobroTaller" name="tipoServicio" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idRefaccion:</label>
                        <input type="text" min="1" class="form-control" id="idRefaccionOrdenCobroTaller" name="refaccion" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Total:</label>
                        <input type="text" class="form-control" id="totalOrdenCobroTaller" name="total" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input type="text" min="2015-01-01" max="2023-12-31" class="form-control" id="fechaOrdenCobroTaller" name="fecha" pattern="^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lugar de Emisión:</label>
                        <input type="text" class="form-control" id="lugarEmisionOrdenCobroTaller" name="lugar" pattern="[A-Z,a-z]+[A-Z,a-z, ]*" required="">
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
