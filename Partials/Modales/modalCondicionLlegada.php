<div id="modalCondicionLlegada" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Condición Llegada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formCondicionLlegada">
                    <div class="form-group" hidden>
                    <input type="text" min="1" class="form-control" id="idCondicionesLlegadas" name="idCondicionesLlegadas">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCondición:</label>
                        <input type="text" min="1" class="form-control" id="condicionLlegada" name="condicion" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kilometraje:</label>
                        <input type="text" min="0" class="form-control" id="kilometrajeCondicion" name="kilometraje" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Gasolina:</label>
                        <input type="text" min="0" class="form-control" id="gasolinaCondicion" name="gasolina" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Luces:</label>
                        <input type="text" min="0" max="1" class="form-control" id="lucesCondicion" name="luces" pattern="[0-1]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Espejos:</label>
                        <input type="text" min="0" max="1" class="form-control" id="espejosCondicion" name="espejos" pattern="[0-1]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cauchos:</label>
                        <input type="text" min="0" max="1" class="form-control" id="cauchosCondicion" name="caucho" pattern="[0-1]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Faros:</label>
                        <input type="text" min="0" max="1" class="form-control" id="faroCondicion" name="faro" pattern="[0-1]" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Placa:</label>
                        <input type="text" class="form-control" id="placaCondicion" name="placa" pattern="[A-Z]+[A-Z,0-9,-]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idCliente:</label>
                        <input type="text" min="1" class="form-control" id="idClienteCondicionLlegada" name="cliente" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idEmpleado:</label>
                        <input type="text" min="1" class="form-control" id="idEmpleadoCondicionLlegada" name="empleado" pattern="^[0-9]+" required="">
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
