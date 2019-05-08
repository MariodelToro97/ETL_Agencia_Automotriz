<?php require '../Models/checarCredenciales.php';

$Pantalla = '3';

?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ETL Refaccionaria</title>
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
                    <button class="mr-2 mb-1 btn btn-primary" id="cliente">Clientes</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="empleado">Empleados</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="nomina">Nómina</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="refaccion">Refacciones</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="cobro">Orden de Cobro</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="merma">Mermas</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="proveedor">Proveedores</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="factura">Facturas Proveedor</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="inventario">Inventario</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="pedido">Pedido Proveedores</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="compra">Compras</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="venta">Ventas</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="requisicion">Requisicion</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="devolucion">Devolución Proveedores</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="salida">Orden de Salida</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="year">Catálogo Años</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="marca">Catálogo Marcas</button>
                </li>
                <li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="modelo">Catálogo Modelos</button>
                </li>
								<li class="nav-item">
                    <button class="mr-2 mb-1 btn btn-primary" id="devolucion0">Devoluciones Clientes</button>
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
            require '../Partials/Tables/tablaEmpleados.php';
            require '../Partials/Tables/tablaNomina.php';
            require '../Partials/Tables/tablaRefacciones.php';
            require '../Partials/Tables/tablaOrdenCobro.php';
            require '../Partials/Tables/tablaMermas.php';
            require '../Partials/Tables/tablaProveedores.php';
            require '../Partials/Tables/tablasFacturaProveedor.php';
            require '../Partials/Tables/tablaInventario.php';
            require '../Partials/Tables/tablaPedidoProveedores.php';
            require '../Partials/Tables/tablaCompras.php';
            require '../Partials/Tables/tablaVentas.php';
            require '../Partials/Tables/tablaRequisicion.php';
            require '../Partials/Tables/tablaDevolucionProveedores.php';
            require '../Partials/Tables/tablaOrdenSalida.php';
            require '../Partials/Tables/tablaAnos.php';
            require '../Partials/Tables/tablaMarcas.php';
            require '../Partials/Tables/tablaModelos.php';
						require '../Partials/Tables/tablaDevolucionesClientes0.php';


            ?>
	</div>

	<?php require '../Partials/hojaScript.php'; ?>
    <script src="../assets/js/Refaccionaria.js"></script>
</body>
</html>
