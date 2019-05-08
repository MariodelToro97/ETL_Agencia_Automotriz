<div id="modalRefaccion" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Refacciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formRefaccion">
                    <div class="form-group" hidden>
                    <input type="text" class="form-control" id="idRefacciones" name="idRefacciones">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idProducto:</label>
                        <input type="text" min="1" class="form-control" id="productoRefacciones" name="producto" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idInventario:</label>
                        <input type="text" min="1" class="form-control" id="inventarioRefacciones" name="inventario" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idMarca:</label>
                        <input type="text" min="1" class="form-control" id="marcaRefacciones" name="marca" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idModelo:</label>
                        <input type="text" min="1" class="form-control" id="idModeloRefacciones" name="modelo" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">idAño:</label>
                        <input type="text" min="1" class="form-control" id="idYearRefacciones" name="year" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombreRefacciones" name="nombre" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Precio Compra:</label>
                        <input type="text" min="1" class="form-control" id="precioRefacciones" name="precio" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Precio de Venta:</label>
                        <input type="text" min="1" class="form-control" id="precioVentaRefacciones" name="venta" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Existencia:</label>
                        <input type="text" min="1" class="form-control" id="existenciaRefacciones" name="existencia" pattern="[0-9]+\.[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" id="DescripcionRefacciones" name="descripcion" pattern="[A-Z,a-z]+[A-Z,a-z, ]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad mínima:</label>
                        <input type="text" min="0" class="form-control" id="minimaRefacciones" name="minima" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad máxima:</label>
                        <input type="text" min="1" class="form-control" id="maximaRefacciones" name="maxima" pattern="^[0-9]+" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de Caducidad:</label>
                        <input type="text" min="2017-01-01" max="2023-12-31" class="form-control" id="fechaCaducidadRefacciones" name="fecha" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" required="">
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
