<div id="modalDiagnostico" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Diagnóstico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formDiagnostico">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idDiagnosticos" name="idDiagnosticos">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idDiagnóstico:</label>
                        <input type="text" min="1" class="form-control" id="idDiagnostico" name="diagnostico" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Detalle:</label>
                        <input type="text" class="form-control" id="detalleDiagnostico" name="detalle" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idMecánico:</label>
                        <input type="text" min="1" class="form-control" id="mecanicoDiagnostico" name="mecanico" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Vehículo:</label>
                        <input type="text" class="form-control" id="vehiculoDiagnostico" name="vehiculo" pattern="[A-Z]{3}-[0-9]{3}" required="">
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
