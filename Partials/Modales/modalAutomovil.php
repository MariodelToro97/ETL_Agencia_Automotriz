<div id="modalAutomovil" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Automóvil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAutomovil">
                    <div class="form-group" hidden>
                    <input type="text" min="1" class="form-control" id="idAutos" name="idAutos">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idAutomóvil:</label>
                        <input type="text" min="1" class="form-control" id="idAutomovil" name="idAutomovil" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idModelo:</label>
                        <input type="text" min="1" max="38" class="form-control" id="idModeloAutomovil" name="idModelo" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Precio:</label>
                        <input type="text" min="1" class="form-control" id="PrecioAutomovil" name="precioAutomovil" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Marca:</label>
                        <input type="text" min="1" max="2" class="form-control" id="marcaAutomovil" name="marca" pattern="[1-2]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idAño:</label>
                        <input type="text" min="1" max="23" class="form-control" id="YearAutomovil" name="Year" pattern="[1-23]" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Cantidad Actual:</label>
                        <input type="text" min="0" class="form-control" id="cantidadActualAuto" name="CantidadActual" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Cantidad Mínima:</label>
                        <input type="text" min="0" class="form-control" id="CantidadMinimaAutomovil" name="CantidadMinima" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idSeguro:</label>
                        <input type="text" min="1" class="form-control" id="SeguroAutomovil" name="seguroAutomovil" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Cantidad Máxima:</label>
                        <input type="text" min="0" class="form-control" id="CantidadMaximaAutomovil" name="CantidadMaxima" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Número de Puertas:</label>
                        <input type="text" min="1" class="form-control" id="Puertas" name="puertas" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Capacidad de Pasajeros:</label>
                        <input type="text" min="1" class="form-control" id="Pasajeros" name="pasajeros" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Peso:</label>
                        <input type="text" class="form-control" id="PesoAuto" name="Peso" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Número de Asientos:</label>
                        <input type="text" min="1" class="form-control" id="AsientosAutomovil" name="Asientos" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Rendimiento:</label>
                        <input type="text" class="form-control" id="rendimientoAuto" name="rendimiento" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Cilindros:</label>
                        <input type="text" min="1" class="form-control" id="cilindrosAutomovil" name="cilindros" pattern="[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">idTipo:</label>
                        <input type="text" min="1" max="10" class="form-control" id="idTipoAutomovil" name="tipoAuto" pattern="[0-9]+" required="">
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
