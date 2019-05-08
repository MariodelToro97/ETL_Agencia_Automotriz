<?php require '../Models/checarCredenciales.php';
	$Pantalla = '1';
?>


<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ETL Ventas</title>
	<?php require '../Partials/hojaEstilos.php'; ?>
</head>

<body>
	<?php
        require '../Partials/headers.php';
	?>

	<div style="padding-top: 42px;">
		<div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="clien">Clientes</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="abono">Abonos</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="factura">Facturas</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="salida">Órden Salida Productos</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="externa">Órdenes Externas</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="salidaAu">Órdenes Salida Automóvil</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="carta">Carta Factura</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="empleado">Empleados</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="vale">Vale Auto Seminuevo</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="consi">Auto Consideración</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="serie">Serie Autos</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="llegada">Ordenes Llegada Automóvil</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="revision">Requisicion Revisión de Servicios</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="pedido">Ordenes Pedido Automóvil</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="auto">Automóvil</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="seguro">Seguro</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="compania">Compañía Seguros</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="devolucion">Devoluciones Clientes</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="nomina">Nómina</button>
                </li>
				<li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="year">Catálogo Años</button>
                </li>
				<li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="marca">Catálogo Marcas</button>
                </li>
				<li class="nav-item">
                    <button class="btn btn-primary mb-1 mr-2" id="modelo">Catálogo Modelos</button>
                </li>
            </ul>
        </div>
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

                require '../Partials/Tables/tablaClientes.php';
                require '../Partials/Tables/tablaAbonos.php';
                require '../Partials/Tables/tablaFacturas.php';
                require '../Partials/Tables/tablaOrdenSalidaProductos.php';
                require '../Partials/Tables/tablaOrdenExterna.php';
                require '../Partials/Tables/tablaOrdenSalidaAutomovil.php';
                require '../Partials/Tables/tablaCartaFactura.php';
                require '../Partials/Tables/tablaEmpleados.php';
                require '../Partials/Tables/tablaValeAutoSeminuevo.php';
                require '../Partials/Tables/tablaAutoConsideracion.php';
                require '../Partials/Tables/tablaSerieAutos.php';
                require '../Partials/Tables/tablaOrdenLlegadaAutomovil.php';
                require '../Partials/Tables/tablaRequisicionRevisionServicios.php';
                require '../Partials/Tables/tablaOrdenPedidoAutomovil.php';
                require '../Partials/Tables/tablaAutomovil.php';
                require '../Partials/Tables/tablaSeguro.php';
                require '../Partials/Tables/tablaCompaniaSeguro.php';
                require '../Partials/Tables/tablaDevolucionesClientes.php';
                require '../Partials/Tables/tablaNomina.php';
                require '../Partials/Tables/tablaAnos.php';
                require '../Partials/Tables/tablaMarcas.php';
                require '../Partials/Tables/tablaModelos.php';
            ?>

	</div>

	<?php require '../Partials/hojaScript.php'; ?>

	<script src="../assets/js/Ventas.js"></script>
</body>
</html>
