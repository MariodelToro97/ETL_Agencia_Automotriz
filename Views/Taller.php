<?php require '../Models/checarCredenciales.php';

$Pantalla = '2';

?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ETL Taller</title>
	<?php require '../Partials/hojaEstilos.php'; ?>
</head>

<body>
	<?php
        require '../Partials/headers.php';
	?>

	<div style="padding-top: 15px;">

        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="clien">Clientes</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="cita">Citas</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="agen">Agenda</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="rep">Reparaciones</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="tipSer">Tipo de Servicio</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="Diag">Diagnóstico</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="Cond">Condición de llegada</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="Cob">Órden de Cobro</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="rec">Recepción Vehículo Nuevo</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="Cons">Consumibles</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="her">Herramientas</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="solic">Solicitud de Refacciones</button>
                </li>
								<li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="empleado">Empleados</button>
                </li>
            </ul>

            <div class="mt-3">
                <?php
                    require '../Partials/Modales/modalCerrar.php';
                    require '../Partials/Modales/modalAbonos.php';
                    require '../Partials/Modales/modalAgenda.php';
                    require '../Partials/Modales/modalAutoConsideracion.php';
                    require '../Partials/Modales/modalAutomovil.php';
                    require '../Partials/Modales/modalCartaFactura.php';
                    require '../Partials/Modales/modalCita.php';
                    require '../Partials/Modales/modalClientes.php';
                    require '../Partials/Modales/modalCompaniaSeguro.php';
                    require '../Partials/Modales/modalCompra.php';
                    require '../Partials/Modales/modalCondicionLlegada.php';
                    require '../Partials/Modales/modalDevolucionClientes.php';
										require '../Partials/Modales/modalDevolucionClientes0.php';
                    require '../Partials/Modales/modalDevolucionProveedor.php';
                    require '../Partials/Modales/modalDiagnostico.php';
                    require '../Partials/Modales/modalEmpleados.php';
                    require '../Partials/Modales/modalFactura.php';
                    require '../Partials/Modales/modalFacturaProveedor.php';
                    require '../Partials/Modales/modalInventario.php';
                    require '../Partials/Modales/modalMarca.php';
                    require '../Partials/Modales/modalMermas.php';
                    require '../Partials/Modales/modalModelos.php';
                    require '../Partials/Modales/modalNomina.php';
                    require '../Partials/Modales/modalOrdenCobro.php';
                    require '../Partials/Modales/modalOrdenExterna.php';
                    require '../Partials/Modales/modalOrdenLlegada.php';
                    require '../Partials/Modales/modalOrdenPedidoAutomovil.php';
                    require '../Partials/Modales/modalOrdenSalidaAutomovil.php';
                    require '../Partials/Modales/modalOrdenSalidaProductos.php';
                    require '../Partials/Modales/modalOrdenSalidaRef.php';
                    require '../Partials/Modales/modalPedidoProveedor.php';
                    require '../Partials/Modales/modalProveedor.php';
                    require '../Partials/Modales/modalRefacciones.php';
                    require '../Partials/Modales/modalReparaciones.php';
                    require '../Partials/Modales/modalRequisicion.php';
                    require '../Partials/Modales/modalRequisicionRevisionServicios.php';
                    require '../Partials/Modales/modalSeguro.php';
                    require '../Partials/Modales/modalSerieAutos.php';
                    require '../Partials/Modales/modalTipoServicio.php';
                    require '../Partials/Modales/modalValeSeminuevo.php';
                    require '../Partials/Modales/modalVentas.php';
                    require '../Partials/Modales/modalYear.php';
                    require '../Partials/Modales/modalOrdenCobroTaller.php';
                    require '../Partials/Modales/modalRecepcionVehiculoNuevo.php';
                    require '../Partials/Modales/modalSolicitudRefacciones.php';
                    require '../Partials/Modales/modalConsumibles.php';
                    require '../Partials/Modales/modalHerramientas.php';

                    require '../Partials/Tables/tablaClientes.php';
                    require '../Partials/Tables/tablaCitas.php';
                    require '../Partials/Tables/tablaAgenda.php';
                    require '../Partials/Tables/tablaReparaciones.php';
                    require '../Partials/Tables/tablaTipoServicio.php';
                    require '../Partials/Tables/tablaDiagnostico.php';
                    require '../Partials/Tables/tablaCondicionLlegada.php';
                    require '../Partials/Tables/tablaOrdenCobroTaller.php';
                    require '../Partials/Tables/tablaRecepcionVehiculoNuevo.php';
                    require '../Partials/Tables/tablaSolicitudRefacciones.php';
                    require '../Partials/Tables/tablaConsumibles.php';
                    require '../Partials/Tables/tablaHerramientas.php';
										require '../Partials/Tables/tablaEmpleados.php';
                ?>
            </div>
        </div>
	</div>

	<?php require '../Partials/hojaScript.php'; ?>
    <script src="../assets/js/Taller.js"></script>
</body>
</html>
