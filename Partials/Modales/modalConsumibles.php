<div id="modalConsumibles" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Consumibles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formConsumibles">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idConsumibles" name="idConsumibles">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idConsumible:</label>
                        <input type="text" min="1" class="form-control" id="idConsumible" name="consumible" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Producto:</label>
                        <input type="text" class="form-control" id="productoConsumible" name="producto" pattern="[A-Z,a-z]+[A-Z,a-z, ]*" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" min="1" class="form-control" id="cantidadConsumible" name="cantidad" pattern="^[0-9]+" required="">
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
