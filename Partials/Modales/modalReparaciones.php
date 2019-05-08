<div id="modalReparacion" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Reparaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formReparacion">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idReparaciones" name="idReparaciones">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idReparacion:</label>
                        <input type="text" min="1" class="form-control" id="idReparacion" name="reparacion" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tipo de Servicio:</label>
                        <input type="text" class="form-control" id="MotoReparacion" name="tipo" pattern="[A-Z]{3}-[0-9]{3}" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tiempo:</label>
                        <input type="text" min="1" class="form-control" id="tiempoReparacion" name="tiempo" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Mecánico:</label>
                        <input type="text" min="1" class="form-control" id="mecanicoReparacion" name="mecanico" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Vehículo:</label>
                        <input type="text" min="1" class="form-control" id="vehiculoReparacion" name="vehiculo" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Consumibles:</label>
                        <input type="text" min="1" class="form-control" id="consumibleReparacion" name="consumible" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <input type="text" min="1" class="form-control" id="estadoReparacion" name="estado" pattern="^[0-2]+" required="">
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
