$(document).ready(function () {

    $('.table').hide();/*
    document.getElementById('tablaClientes').style.display = 'none';
    document.getElementById('tablaEmpleados').style.display = 'none';
    document.getElementById('tablaNomina').style.display = 'none';
    document.getElementById('tablaRefacciones').style.display = 'none';
    document.getElementById('tablaOrdenCobro').style.display = 'none';
    document.getElementById('tablaMermas').style.display = 'none';
    document.getElementById('tablaProveedores').style.display = 'none';
    document.getElementById('tablaFacturaProveedor').style.display = 'none';
    document.getElementById('tablaInventario').style.display = 'none';
    document.getElementById('tablaPedidoProveedores').style.display = 'none';
    document.getElementById('tablaCompras').style.display = 'none';
    document.getElementById('tablaVentas').style.display = 'none';
    document.getElementById('tablaRequisicion').style.display = 'none';
    document.getElementById('tablaDevolucionProveedor').style.display = 'none';
    document.getElementById('tablaOrdenSalida').style.display = 'none';
    document.getElementById('tablaYears').style.display = 'none';
    document.getElementById('tablaMarcas').style.display = 'none';
    document.getElementById('tablaModelos').style.display = 'none';*/

    $('#cliente').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'block';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';


    });

    $('#empleado').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'block';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#nomina').on('click', function () {

      document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'block';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#refaccion').on('click', function () {
      document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'block';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#cobro').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'block';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#merma').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'block';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#proveedor').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'block';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#factura').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'block';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#inventario').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'block';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#pedido').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'block';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#compra').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'block';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#venta').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'block';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#requisicion').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'block';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#devolucion').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'block';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';

    });

    $('#salida').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'block';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';

    });

    $('#year').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'block';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';

    });

    $('#marca').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'block';
        document.getElementById('tablaModelos').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'none';

    });

    $('#modelo').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'block';
        document.getElementById('tablaDevoluciones0').style.display = 'none';
    });

    $('#devolucion0').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaRefacciones').style.display = 'none';
        document.getElementById('tablaOrdenCobro').style.display = 'none';
        document.getElementById('tablaMermas').style.display = 'none';
        document.getElementById('tablaProveedores').style.display = 'none';
        document.getElementById('tablaFacturaProveedor').style.display = 'none';
        document.getElementById('tablaInventario').style.display = 'none';
        document.getElementById('tablaPedidoProveedores').style.display = 'none';
        document.getElementById('tablaCompras').style.display = 'none';
        document.getElementById('tablaVentas').style.display = 'none';
        document.getElementById('tablaRequisicion').style.display = 'none';
        document.getElementById('tablaDevolucionProveedor').style.display = 'none';
        document.getElementById('tablaOrdenSalida').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
        document.getElementById('tablaDevoluciones0').style.display = 'block';
    });

});



function cargarDatosDevolucionesClientes0(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <=13; i++) {
        datos[i] = $("#tablaDevoluciones0").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idDevolucionCliente0").val(datos[0]);
        $("#idDevolucionesClientes0").val(datos[0]);
        $("#idProductoDevolucionCliente0").val(datos[2]);
        $("#idEmpleadoDevolucionCliente0").val(datos[4]);
        $("#idClienteDevolucionCliente0").val(datos[6]);
        $("#RazonDevolucionCliente0").val(datos[8]);
        $("#FechaDevolucionCliente0").val(datos[10]);
        $("#EstadoDevolucionCliente0").val(datos[12]);

        if (datos[1] == 2) {
            $("#idDevolucionCliente0").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idProductoDevolucionCliente0").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idEmpleadoDevolucionCliente0").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idClienteDevolucionCliente0").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#RazonDevolucionCliente0").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#FechaDevolucionCliente0").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#EstadoDevolucionCliente0").prop("disabled", true);
        }

    }, 500);
};


function cargarDatosClientes(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 17; i++) {
        datos[i] = $("#tablaClientes").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idCliente").val(datos[0]);
        $("#idClientes").val(datos[0]);
        $("#nombreCliente").val(datos[2]);
        $("#RFCCliente").val(datos[4]);
        $("#telefonoCliente").val(datos[6]);
        $("#correoCliente").val(datos[8]);
        $("#NacimientoCliente").val(datos[10]);
        $("#domicilioCliente").val(datos[12]);
        $("#GeneroCliente").val(datos[14]);
        $("#departamentoCliente").val(datos[16]);

        if (datos[1] == 2) {
            $("#idCliente").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#nombreCliente").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#RFCCliente").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#telefonoCliente").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#correoCliente").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#NacimientoCliente").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#domicilioCliente").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#GeneroCliente").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#departamentoCliente").prop("disabled", true);
        }
    }, 500);
};


function cargarDatosCompras(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 11; i++) {
        datos[i] = $("#tablaCompras").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idcompra").val(datos[0]);
        $("#idCompras").val(datos[0]);
        $("#proveedorCompra").val(datos[2]);
        $("#productoCompra").val(datos[4]);
        $("#pedidoCompra").val(datos[6]);
        $("#cantidadCompra").val(datos[8]);
        $("#FechaCompra").val(datos[10]);


        if (datos[1] == 2) {
            $("#idcompra").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#proveedorCompra").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#productoCompra").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#pedidoCompra").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#cantidadCompra").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#FechaCompra").prop("disabled", true);
        }


    }, 500);
};

function cargarDatosDevolucionProveedor(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 21; i++) {
        datos[i] = $("#tablaDevolucionProveedor").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#devolucionProveedor").val(datos[0]);
        $("#idDevolucionesProveedores").val(datos[0]);
        $("#productoProveedor").val(datos[2]);
        $("#proveedorDevolucion").val(datos[4]);
        $("#FechaDevolucion").val(datos[6]);
        $("#DescripcionDevolucion").val(datos[8]);
        $("#cantidadDevolucion").val(datos[10]);
        $("#PrecioDevolucion").val(datos[12]);
        $("#montoTotalDevolucion").val(datos[14]);
        $("#estadoDevolucionProveedor").val(datos[16]);
        $("#tipoDevolucionProveedor").val(datos[18]);
        $("#compraDevolucionProveedor").val(datos[20]);

        if (datos[1] == 2) {
            $("#devolucionProveedor").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#productoProveedor").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#proveedorDevolucion").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#FechaDevolucion").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#DescripcionDevolucion").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#cantidadDevolucion").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#PrecioDevolucion").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#montoTotalDevolucion").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#estadoDevolucionProveedor").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#tipoDevolucionProveedor").prop("disabled", true);
        }

        if (datos[21] == 2) {
            $("#compraDevolucionProveedor").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosEmpleados(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 29; i++) {
        datos[i] = $("#tablaEmpleados").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idEmpleado").val(datos[0]);
        $("#idEmpleados").val(datos[0]);
        $("#NombreEmpleado").val(datos[2]);
        $("#RFCEmpleado").val(datos[4]);
        $("#telefonoEmpleado").val(datos[6]);
        $("#CorreoEmpleado").val(datos[8]);
        $("#DomicilioEMpleados").val(datos[10]);
        $("#FechaIngresoEmpleado").val(datos[12]);
        $("#idContratoEmpleado").val(datos[14]);
        $("#idTurnoEmpleado").val(datos[16]);
        $("#GeneroEmpleado").val(datos[18]);
        $("#cargoEmpleado").val(datos[20]);
        $("#sueldoBaseEmpleado").val(datos[22]);
        $("#comisionEmpleado").val(datos[24]);
        $("#estadoEmpleado").val(datos[26]);
        $("#idDepartamentoEmpleado").val(datos[28]);

        if (datos[1] == 2) {
            $("#idEmpleado").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#NombreEmpleado").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#RFCEmpleado").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#telefonoEmpleado").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#CorreoEmpleado").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#DomicilioEMpleados").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#FechaIngresoEmpleado").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#idContratoEmpleado").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#idTurnoEmpleado").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#GeneroEmpleado").prop("disabled", true);
        }

        if (datos[21] == 2) {
            $("#cargoEmpleado").prop("disabled", true);
        }

        if (datos[23] == 2) {
            $("#sueldoBaseEmpleado").prop("disabled", true);
        }

        if (datos[25] == 2) {
            $("#comisionEmpleado").prop("disabled", true);
        }

        if (datos[27] == 2) {
            $("#estadoEmpleado").prop("disabled", true);
        }

        if (datos[29] == 2) {
            $("#idDepartamentoEmpleado").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosInventario(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 9; i++) {
        datos[i] = $("#tablaInventario").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#inventarioInv").val(datos[0]);
        $("#idInventarios").val(datos[0]);
        $("#nombreInventario").val(datos[2]);
        $("#DescripcionInventario").val(datos[4]);
        $("#minimoInventario").val(datos[6]);
        $("#maximoInventario").val(datos[8]);

        if (datos[1] == 2) {
            $("#inventarioInv").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#nombreInventario").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#DescripcionInventario").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#minimoInventario").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#maximoInventario").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosMarcas(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 5; i++) {
        datos[i] = $("#tablaMarcas").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idMarca").val(datos[0]);
        $("#idMarcas").val(datos[0]);
        $("#Marca").val(datos[2]);
        $("#idDepartamentoMarca").val(datos[4]);

        if (datos[1] == 2) {
            $("#idMarca").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#Marca").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idDepartamentoMarca").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosMermas(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 11; i++) {
        datos[i] = $("#tablaMermas").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#mermas").val(datos[0]);
        $("#idMermas").val(datos[0]);
        $("#productoMermas").val(datos[2]);
        $("#DescripcionMerma").val(datos[6]);
        $("#FechaMerma").val(datos[8]);
        $("#cantidadMerma").val(datos[10]);
        $("#empleadoMerma").val(datos[4]);

        if (datos[1] == 2) {
            $("#mermas").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#productoMermas").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#DescripcionMerma").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#FechaMerma").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#cantidadMerma").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#empleadoMerma").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosModelos(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 5; i++) {
        datos[i] = $("#tablaModelos").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idModelo").val(datos[0]);
        $("#idModelos").val(datos[0]);
        $("#NombreModelo").val(datos[2]);
        $("#idDepartamentoModelos").val(datos[4]);

        if (datos[1] == 2) {
            $("#idModelo").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#NombreModelo").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idDepartamentoModelos").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosNomina(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 19; i++) {
        datos[i] = $("#tablaNomina").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idNomina").val(datos[0]);
        $("#percepcionNomina").val(datos[2]);
        $("#empleadoNomina").val(datos[4]);
        $("#periodicidadNomina").val(datos[6]);
        $("#salarioNomina").val(datos[8]);
        $("#bonoNomina").val(datos[10]);
        $("#deduccionNomina").val(datos[12]);
        $("#TotalNomina").val(datos[14]);
        $("#FechaNomina").val(datos[16]);
        $("#idDepartamentoNomina").val(datos[18]);

        if (datos[1] == 2) {
            $("#idNomina").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#percepcionNomina").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#empleadoNomina").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#periodicidadNomina").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#salarioNomina").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#bonoNomina").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#deduccionNomina").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#TotalNomina").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#FechaNomina").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#idDepartamentoNomina").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosOrdenCobro(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 19; i++) {
        datos[i] = $("#tablaOrdenCobro").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#ordenCobro").val(datos[0]);
        $("#idOrdenesCobros").val(datos[0]);
        $("#productoCobro").val(datos[2]);
        $("#clienteCobro").val(datos[4]);
        $("#empleadoCobro").val(datos[6]);
        $("#FechaCobro").val(datos[8]);
        $("#cantidadCobro").val(datos[10]);
        $("#subtotalCobro").val(datos[12]);
        $("#IVACobro").val(datos[14]);
        $("#TotalCobro").val(datos[16]);
        $("#estadoCobro").val(datos[18]);


        if (datos[1] == 2) {
            $("#ordenCobro").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#FechaCobro").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#subtotalCobro").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#IVACobro").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#TotalCobro").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#clienteCobro").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#empleadoCobro").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#estadoCobro").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#productoCobro").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#cantidadCobro").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosOrdenSalidaRefaccionaria(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaOrdenSalida").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#ordenSalidaRef").val(datos[0]);
        $("#idOrdenesSalidasRefacciones").val(datos[0]);
        $("#idEmpleadoSalidaRef").val(datos[2]);
        $("#FechaSalidaRef").val(datos[4]);
        $("#cantidadPiezasSalidaRef").val(datos[6]);
        $("#NombrePiezasOrdenSalidaRef").val(datos[8]);
        $("#idOrdenExternaSalidaRef").val(datos[10]);
        $("#precioUnidatrioOrdenExternaRef").val(datos[12]);
        $("#totalOrdenExternaRef").val(datos[14]);

        if (datos[1] == 2) {
            $("#ordenSalidaRef").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idEmpleadoSalidaRef").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#FechaSalidaRef").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#cantidadPiezasSalidaRef").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#NombrePiezasOrdenSalidaRef").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#idOrdenExternaSalidaRef").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#precioUnidatrioOrdenExternaRef").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#totalOrdenExternaRef").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosPedidoProveedores(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaPedidoProveedores").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idPedidoProveedor").val(datos[0]);
        $("#idPedidosProveedores").val(datos[0]);
        $("#productoProveedores").val(datos[2]);
        $("#pedidoProveedores").val(datos[4]);
        $("#empleadoProveedores").val(datos[6]);
        $("#FechaProveedores").val(datos[8]);
        //$("#montoProveedor").val(datos[10]);
        $("#cantidadProveedor").val(datos[10]);
        $("#tiempoProveedor").val(datos[12]);
        $("#estadoProveedor").val(datos[14]);

        if (datos[1] == 2) {
            $("#idPedidoProveedor").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#productoProveedores").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#pedidoProveedores").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#empleadoProveedores").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#FechaProveedores").prop("disabled", true);
        }


        //if (datos[11] == 2) {
          //  $("#montoProveedor").prop("disabled", true);
        //}

        if (datos[11] == 2) {
            $("#cantidadProveedor").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#tiempoProveedor").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#estadoProveedor").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosProveedores(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
        datos[i] = $("#tablaProveedores").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idProveedor").val(datos[0]);
        $("#idProveedores").val(datos[0]);
        $("#nombreProveedor").val(datos[2]);
        $("#TelefonoProveedor").val(datos[4]);
        $("#direccionProveedor").val(datos[6]);
        $("#ciudadProveedor").val(datos[8]);
        $("#estadoProveedor").val(datos[10]);
        $("#empresaProveedor").val(datos[12]);

        if (datos[1] == 2) {
            $("#idProveedor").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#nombreProveedor").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#TelefonoProveedor").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#direccionProveedor").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#ciudadProveedor").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#estadoProveedor").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#empresaProveedor").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosRefacciones(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 25; i++) {
        datos[i] = $("#tablaRefacciones").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#productoRefacciones").val(datos[0]);
        $("#idRefacciones").val(datos[0]);
        $("#inventarioRefacciones").val(datos[2]);
        $("#marcaRefacciones").val(datos[4]);
        $("#idModeloRefacciones").val(datos[6]);
        $("#idYearRefacciones").val(datos[8]);
        $("#nombreRefacciones").val(datos[10]);
        $("#precioRefacciones").val(datos[12]);
        $("#precioVentaRefacciones").val(datos[14]);
        $("#existenciaRefacciones").val(datos[16]);
        $("#DescripcionRefacciones").val(datos[18]);
        $("#minimaRefacciones").val(datos[20]);
        $("#maximaRefacciones").val(datos[22]);
        $("#fechaCaducidadRefacciones").val(datos[24]);

        if (datos[1] == 2) {
            $("#productoRefacciones").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#inventarioRefacciones").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#marcaRefacciones").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idModeloRefacciones").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#idYearRefacciones").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#nombreRefacciones").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#precioRefacciones").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#precioVentaRefacciones").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#existenciaRefacciones").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#DescripcionRefacciones").prop("disabled", true);
        }

        if (datos[21] == 2) {
            $("#minimaRefacciones").prop("disabled", true);
        }

        if (datos[23] == 2) {
            $("#maximaRefacciones").prop("disabled", true);
        }

        if (datos[25] == 2) {
            $("#fechaCaducidadRefacciones").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosRequisicion(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
        datos[i] = $("#tablaRequisicion").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idRequisicionReq").val(datos[0]);
        $("#idRequisiciones").val(datos[0]);
        $("#empleadoRequisicion").val(datos[2]);
        $("#registroRequisicion").val(datos[4]);
        $("#automovilRequisicion").val(datos[6]);
        $("#clienteRequisicion").val(datos[8]);
        $("#piezasRequisicion").val(datos[10]);
        $("#nombreRequisicion").val(datos[12]);

        if (datos[1] == 2) {
            $("#idRequisicionReq").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#empleadoRequisicion").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#registroRequisicion").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#automovilRequisicion").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#clienteRequisicion").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#piezasRequisicion").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#nombreRequisicion").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosFacturaProveedor(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaFacturaProveedor").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#facturaProveedor").val(datos[0]);
        $("#idFacturasProveedores").val(datos[0]);
        $("#idPproveedor").val(datos[2]);
        $("#empleadoProveedor").val(datos[4]);
        $("#pedidoProveedor").val(datos[6]);
        $("#FechaProveedor").val(datos[8]);
        $("#precioUnitarioProveedor").val(datos[10]);
        $("#cantidadPproveedor").val(datos[12]);
        $("#TotalProveedor").val(datos[14]);

        if (datos[1] == 2) {
            $("#facturaProveedor").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idPproveedor").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#empleadoProveedor").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#pedidoProveedor").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#FechaProveedor").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#precioUnitarioProveedor").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#cantidadPproveedor").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#TotalProveedor").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosVentas(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaVentas").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idVenta").val(datos[0]);
        $("#idVentas").val(datos[0]);
        $("#idProductoVentas").val(datos[2]);
        $("#clienteVentas").val(datos[4]);
        $("#empleadoVentas").val(datos[6]);
        $("#cantidadVentas").val(datos[8]);
        $("#FechaVentas").val(datos[10]);
        $("#precioVentas").val(datos[12]);
        $("#TotalVentas").val(datos[14]);

        if (datos[1] == 2) {
            $("#idVenta").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idProductoVentas").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#clienteVentas").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#empleadoVentas").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#cantidadVentas").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#FechaVentas").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#precioVentas").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#TotalVentas").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosYear(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 5; i++) {
        datos[i] = $("#tablaYears").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idYear").val(datos[0]);
        $("#idAnos").val(datos[0]);
        $("#yearAno").val(datos[2]);
        $("#idDepartamentoYear").val(datos[4]);

        if (datos[1] == 2) {
            $("#idYear").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#yearAno").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idDepartamentoYear").prop("disabled", true);
        }
    }, 500);
};


$('#formClientes').submit(function () {

    idCliente = $("#idCliente").val();
    idClientes = $("#idClientes").val();
    nombreCliente = $("#nombreCliente").val();
    rfc = $("#RFCCliente").val();
    telefono = $("#telefonoCliente").val();
    correo = $("#correoCliente").val();
    fechaCliente = $("#NacimientoCliente").val();
    domicilio = $("#domicilioCliente").val();
    genero = $("#GeneroCliente").val();
    departamento = $("#departamentoCliente").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formClientes.php',
        data: {
            idCliente: idCliente,
            idClientes: idClientes,
            nombreCliente: nombreCliente,
            rfc: rfc,
            telefono: telefono,
            correo: correo,
            fechaCliente: fechaCliente,
            domicilio: domicilio,
            genero: genero,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaClientes').load(" #tablaClientes");
                $('#modalClientes').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formCompras').submit(function () {

    compra = $("#idcompra").val();
    idCompras = $("#idCompras").val();
    proveedor = $("#proveedorCompra").val();
    productoCompra = $("#productoCompra").val();
    pedido = $("#pedidoCompra").val();
    cantidad = $("#cantidadCompra").val();
    FechaCompra = $("#FechaCompra").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formCompras.php',
        data: {
            compra : compra,
            idCompras : idCompras,
            proveedor : proveedor,
            productoCompra : productoCompra,
            pedido : pedido,
            cantidad : cantidad,
            FechaCompra : FechaCompra,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaCompras').load(" #tablaCompras");
                $('#modalCompras').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});


$('#formDevolucionClientes0').submit(function () {

    devolucion0 = $("#idDevolucionCliente0").val();
    idDevolucionesClientes0 = $("#idDevolucionesClientes0").val();
    idProducto0 = $("#idProductoDevolucionCliente0").val();
    empleado0 = $("#idEmpleadoDevolucionCliente0").val();
    cliente0 = $("#idClienteDevolucionCliente0").val();
    razon0 = $("#RazonDevolucionCliente0").val();
    fecha0 = $("#FechaDevolucionCliente0").val();
    estado0 = $("#EstadoDevolucionCliente0").val();


    $.ajax({
        type: 'POST',
        url: '../Peticiones/formDevolucionClientes0.php',
        data: {
            devolucion0 : devolucion0,
            idDevolucionesClientes0 : idDevolucionesClientes0,
            idProducto0 : idProducto0,
            empleado0 : empleado0,
            cliente0 : cliente0,
            razon0 : razon0,
            fecha0 : fecha0,
            estado0 : estado0,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaDevoluciones0').load(" #tablaDevoluciones0");
                $('#modalDevolucionClientes0').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});


$('#formDevolucionProveedor').submit(function () {

    devolucionProveedor = $("#devolucionProveedor").val();
    idDevolucionesProveedores = $("#idDevolucionesProveedores").val();
    producto = $("#productoProveedor").val();
    proveedor = $("#proveedorDevolucion").val();
    fecha = $("#FechaDevolucion").val();
    descripcion = $("#DescripcionDevolucion").val();
    cantidad = $("#cantidadDevolucion").val();
    precio = $("#PrecioDevolucion").val();
    montoTotal = $("#montoTotalDevolucion").val();
    estado = $("#estadoDevolucionProveedor").val();
    tipoDevolucion = $("#tipoDevolucionProveedor").val();
    compra = $("#compraDevolucionProveedor").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formDevolucionProveedor.php',
        data: {
            devolucionProveedor : devolucionProveedor,
            idDevolucionesProveedores : idDevolucionesProveedores,
            producto : producto,
            proveedor : proveedor,
            fecha : fecha,
            descripcion : descripcion,
            cantidad : cantidad,
            precio : precio,
            montoTotal : montoTotal,
            estado : estado,
            tipoDevolucion : tipoDevolucion,
            compra : compra,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaDevolucionProveedor').load(" #tablaDevolucionProveedor");
                $('#modalDevolucionProveedor').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formEmpleado').submit(function () {

    empleado = $("#idEmpleado").val();
    idEmpleados = $("#idEmpleados").val();
    nombre = $("#NombreEmpleado").val();
    rfc = $("#RFCEmpleado").val();
    telefono = $("#telefonoEmpleado").val();
    correoEmpleado = $("#CorreoEmpleado").val();
    domicilio = $("#DomicilioEMpleados").val();
    fechaIngreso = $("#FechaIngresoEmpleado").val();
    contrato = $("#idContratoEmpleado").val();
    turno = $("#idTurnoEmpleado").val();
    genero = $("#GeneroEmpleado").val();
    cargo = $("#cargoEmpleado").val();
    sueldo = $("#sueldoBaseEmpleado").val();
    comision = $("#comisionEmpleado").val();
    estado = $("#estadoEmpleado").val();
    departamento = $("#idDepartamentoEmpleado").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formEmpleado.php',
        data: {
            empleado: empleado,
            idEmpleados: idEmpleados,
            nombre: nombre,
            rfc: rfc,
            telefono: telefono,
            correoEmpleado: correoEmpleado,
            domicilio: domicilio,
            fechaIngreso: fechaIngreso,
            contrato: contrato,
            turno: turno,
            genero: genero,
            cargo: cargo,
            sueldo: sueldo,
            comision: comision,
            estado: estado,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaEmpleados').load(" #tablaEmpleados");
                $('#modalEmpleado').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formFacturaProveedor').submit(function () {

    factura = $("#facturaProveedor").val();
    idFacturasProveedores = $("#idFacturasProveedores").val();
    proveedor = $("#idPproveedor").val();
    empleado = $("#empleadoProveedor").val();
    pedido = $("#pedidoProveedor").val();
    fecha = $("#FechaProveedor").val();
    precio = $("#precioUnitarioProveedor").val();
    cantidad = $("#cantidadPproveedor").val();
    total = $("#TotalProveedor").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formFacturaProveedor.php',
        data: {
            factura : factura,
            idFacturasProveedores : idFacturasProveedores,
            proveedor : proveedor,
            empleado : empleado,
            pedido : pedido,
            fecha : fecha,
            precio : precio,
            cantidad : cantidad,
            total : total,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaFacturaProveedor').load(" #tablaFacturaProveedor");
                $('#modalFacturaProveedor').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formInventario').submit(function () {

    inventario = $("#inventarioInv").val();
    idInventarios = $("#idInventarios").val();
    nombre = $("#nombreInventario").val();
    descripcion = $("#DescripcionInventario").val();
    minimo = $("#minimoInventario").val();
    maximo = $("#maximoInventario").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formInventario.php',
        data: {
            inventario : inventario,
            idInventarios : idInventarios,
            nombre : nombre,
            descripcion : descripcion,
            minimo : minimo,
            maximo : maximo,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaInventario').load(" #tablaInventario");
                $('#modalInventario').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formMarcas').submit(function () {

    idmarca = $("#idMarca").val();
    idMarcas = $("#idMarcas").val();
    marca = $("#Marca").val();
    departamento = $("#idDepartamentoMarca").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formMarcas.php',
        data: {
            idmarca: idmarca,
            idMarcas: idMarcas,
            marca: marca,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaMarcas').load(" #tablaMarcas");
                $('#modalMarca').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formMermas').submit(function () {

    merma = $("#mermas").val();
    idMermas = $("#idMermas").val();
    producto = $("#productoMermas").val();
    descripcion = $("#DescripcionMerma").val();
    Fecha = $("#FechaMerma").val();
    cantidad = $("#cantidadMerma").val();
    empleado = $("#empleadoMerma").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formMermas.php',
        data: {
            merma : merma,
            idMermas : idMermas,
            producto : producto,
            descripcion : descripcion,
            Fecha : Fecha,
            cantidad : cantidad,
            empleado : empleado,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaMermas').load(" #tablaMermas");
                $('#modalMermas').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formModelos').submit(function () {

    idModelo = $("#idModelo").val();
    idModelos = $("#idModelos").val();
    nombre = $("#NombreModelo").val();
    departamento = $("#idDepartamentoModelos").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formModelos.php',
        data: {
            idModelo: idModelo,
            idModelos: idModelos,
            nombre: nombre,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaModelos').load(" #tablaModelos");
                $('#modalModelos').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formNomina').submit(function () {

    nomina = $("#idNomina").val();
    idNominas = $("#idNominas").val();
    percepcion = $("#percepcionNomina").val();
    empleado = $("#empleadoNomina").val();
    periodicidad = $("#periodicidadNomina").val();
    salario = $("#salarioNomina").val();
    bono = $("#bonoNomina").val();
    deduccion = $("#deduccionNomina").val();
    total = $("#TotalNomina").val();
    fecha = $("#FechaNomina").val();
    departamento = $("#idDepartamentoNomina").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formNomina.php',
        data: {
            nomina: nomina,
            idNominas: idNominas,
            percepcion: percepcion,
            empleado: empleado,
            periodicidad: periodicidad,
            salario: salario,
            bono: bono,
            deduccion: deduccion,
            total: total,
            fecha: fecha,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaNomina').load(" #tablaNomina");
                $('#modalNomina').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formOrdenCobro').submit(function () {

    orden = $("#ordenCobro").val();
    idOrdenesCobros = $("#idOrdenesCobros").val();
    producto = $("#productoCobro").val();
    fecha = $("#FechaCobro").val();
    subtotal = $("#subtotalCobro").val();
    iva = $("#IVACobro").val();
    total = $("#TotalCobro").val();
    cliente = $("#clienteCobro").val();
    empleado = $("#empleadoCobro").val();
    estado = $("#estadoCobro").val();
    nombre = $("#productoCobro").val();
    cantidad = $("#cantidadCobro").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenCobro.php',
        data: {
            orden : orden,
            idOrdenesCobros : idOrdenesCobros,
            fecha : fecha,
            producto : producto,
            subtotal : subtotal,
            iva : iva,
            total : total,
            cliente : cliente,
            empleado : empleado,
            estado : estado,
            nombre : nombre,
            cantidad : cantidad,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenCobro').load(" #tablaOrdenCobro");
                $('#modalOrdenCobro').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formOrdenSalidaRef').submit(function () {

    orden = $("#ordenSalidaRef").val();
    idOrdenesSalidasRefacciones = $("#idOrdenesSalidasRefacciones").val();
    empleado = $("#idEmpleadoSalidaRef").val();
    fechaSalidaRef = $("#FechaSalidaRef").val();
    cantidad = $("#cantidadPiezasSalidaRef").val();
    nombre = $("#NombrePiezasOrdenSalidaRef").val();
    ordenExterna = $("#idOrdenExternaSalidaRef").val();
    precioUni = $("#precioUnidatrioOrdenExternaRef").val();
    total = $("#totalOrdenExternaRef").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenSalidaRef.php',
        data: {
            orden : orden,
            idOrdenesSalidasRefacciones : idOrdenesSalidasRefacciones,
            empleado : empleado,
            FechaSalidaRef : fechaSalidaRef,
            cantidad : cantidad,
            nombre : nombre,
            ordenExterna : ordenExterna,
            precioUni : precioUni,
            total : total,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenSalida').load(" #tablaOrdenSalida");
                $('#modalOrdenSalidaRef').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formPedidoProveedor').submit(function () {

    pedido = $("#idPedidoProveedor").val();
    idPedidosProveedores = $("#idPedidosProveedores").val();
    producto = $("#productoProveedores").val();
    proveedor = $("#pedidoProveedores").val();
    empleado = $("#empleadoProveedores").val();
    fecha = $("#FechaProveedores").val();
  //  monto = $("#montoProveedor").val();
    cantidad = $("#cantidadProveedor").val();
    tiempo = $("#tiempoProveedor").val();
    estado = $("#estadoProveedor").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formPedidoProveedor.php',
        data: {
            pedido : pedido,
            idPedidosProveedores : idPedidosProveedores,
            producto : producto,
            proveedor : proveedor,
            empleado : empleado,
            fecha : fecha,
            //monto : monto,
            cantidad : cantidad,
            tiempo : tiempo,
            estado : estado,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaPedidoProveedores').load(" #tablaPedidoProveedores");
                $('#modalPedidoProveedor').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formProveedor').submit(function () {

    proveedor = $("#idProveedor").val();
    idProveedores = $("#idProveedores").val();
    nombre = $("#nombreProveedor").val();
    telefono = $("#TelefonoProveedor").val();
    direccion = $("#direccionProveedor").val();
    ciudad = $("#ciudadProveedor").val();
    estado = $("#estadoProveedor").val();
    empresa = $("#empresaProveedor").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formProveedor.php',
        data: {
            proveedor : proveedor,
            idProveedores : idProveedores,
            nombre : nombre,
            telefono : telefono,
            direccion : direccion,
            ciudad : ciudad,
            estado : estado,
            empresa : empresa,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaProveedores').load(" #tablaProveedores");
                $('#modalProveedor').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formRefaccion').submit(function () {

    producto = $("#productoRefacciones").val();
    idRefacciones = $("#idRefacciones").val();
    inventario = $("#inventarioRefacciones").val();
    marca = $("#marcaRefacciones").val();
    modelo = $("#idModeloRefacciones").val();
    year = $("#idYearRefacciones").val();
    nombre = $("#nombreRefacciones").val();
    precio = $("#precioRefacciones").val();
    venta = $("#precioVentaRefacciones").val();
    existencia = $("#existenciaRefacciones").val();
    descripcion = $("#DescripcionRefacciones").val();
    minima = $("#minimaRefacciones").val();
    maxima = $("#maximaRefacciones").val();
    fecha = $("#fechaCaducidadRefacciones").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formRefaccion.php',
        data: {
            producto : producto,
            idRefacciones : idRefacciones,
            inventario : inventario,
            marca : marca,
            modelo : modelo,
            year : year,
            nombre : nombre,
            precio : precio,
            venta : venta,
            existencia : existencia,
            descripcion : descripcion,
            minima : minima,
            maxima : maxima,
            fecha : fecha,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaRefacciones').load(" #tablaRefacciones");
                $('#modalRefaccion').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formRequisicion').submit(function () {

    requisicion = $("#idRequisicionReq").val();
    idRequisiciones = $("#idRequisiciones").val();
    empleado = $("#empleadoRequisicion").val();
    registro = $("#registroRequisicion").val();
    automovil = $("#automovilRequisicion").val();
    cliente = $("#clienteRequisicion").val();
    cantidad = $("#piezasRequisicion").val();
    nombre = $("#nombreRequisicion").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formRequisicion.php',
        data: {
            requisicion : requisicion,
            idRequisiciones : idRequisiciones,
            empleado : empleado,
            registro : registro,
            automovil : automovil,
            cliente : cliente,
            cantidad : cantidad,
            nombre : nombre,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaRequisicion').load(" #tablaRequisicion");
                $('#modalRequisicion').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formVentas').submit(function () {

    venta = $("#idVenta").val();
    idVentas = $("#idVentas").val();
    producto = $("#idProductoVentas").val();
    cliente = $("#clienteVentas").val();
    empleado = $("#empleadoVentas").val();
    cantidad = $("#cantidadVentas").val();
    fecha = $("#FechaVentas").val();
    precio = $("#precioVentas").val();
    total = $("#TotalVentas").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formVentas.php',
        data: {
            venta : venta,
            idVentas : idVentas,
            producto : producto,
            cliente : cliente,
            empleado : empleado,
            cantidad : cantidad,
            fecha : fecha,
            precio : precio,
            total : total,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaVentas').load(" #tablaVentas");
                $('#modalVentas').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

$('#formYear').submit(function () {

    idYear = $("#idYear").val();
    idAnos = $("#idAnos").val();
    year = $("#yearAno").val();
    departamento = $("#idDepartamentoYear").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formYear.php',
        data: {
            idYear: idYear,
            idAnos: idAnos,
            year: year,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaYears').load(" #tablaYears");
                $('#modalYear').modal('hide');
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
});

function eliminarDatosYear(boton) {
    valor = boton.value;
    departamento = boton.name;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosYear.php',
        data: {
            id: valor,
            departamento: departamento
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaYears').load(" #tablaYears");

            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};


function eliminarDatosDevolucionesClientes(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosDevolucionesClientes0.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaDevoluciones0').load(" #tablaDevoluciones0");

            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosClientes(boton){
    valor = boton.value;
    departamento = boton.name;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosClientes.php',
        data: {
            id: valor,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaClientes').load(" #tablaClientes");

            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosCompras(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosCompras.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaCompras').load(" #tablaCompras");

            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosDevolucionProveedor(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosDevolucionProveedor.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaDevolucionProveedor').load(" #tablaDevolucionProveedor");

            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosEmpleados(boton){
    valor = boton.value;
    departamento = boton.name;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosEmpleados.php',
        data: {
            id: valor,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaEmpleados').load(" #tablaEmpleados");

            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosInventario(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosInventario.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaInventario').load(" #tablaInventario");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosMarcas(boton) {
    valor = boton.value;
    departamento = boton.name;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosMarcas.php',
        data: {
            id: valor,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaMarcas').load(" #tablaMarcas");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosMermas(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosMermas.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaMermas').load(" #tablaMermas");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosModelos(boton){
    valor = boton.value;
    departamento = boton.name;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosModelos.php',
        data: {
            id: valor,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaModelos').load(" #tablaModelos");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosNomina(boton) {
    valor = boton.value;
    departamento = boton.name;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosNomina.php',
        data: {
            id: valor,
            departamento: departamento,
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaNomina').load(" #tablaNomina");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosOrdenCobro(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenCobro.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenCobro').load(" #tablaOrdenCobro");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosOrdenSalidaRefaccionaria(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenSalidaRefaccionaria.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenSalida').load(" #tablaOrdenSalida");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosPedidoProveedores(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosPedidoProveedores.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaPedidoProveedores').load(" #tablaPedidoProveedores");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosProveedores(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosProveedores.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaProveedores').load(" #tablaProveedores");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosRefacciones(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosRefacciones.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaRefacciones').load(" #tablaRefacciones");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosRequisicion(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosRequisicion.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaRequisicion').load(" #tablaRequisicion");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosFacturaProveedor(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosFacturaProveedor.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaFacturaProveedor').load(" #tablaFacturaProveedor");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};

function eliminarDatosVentas(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosVentas.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaVentas').load(" #tablaVentas");
            } else {
                alertify.error(data);
            }
        },
        error: function (r) {
            alertify.error(r);
        }
    });
    return false;
};


function vaciarModal() {
    $('input').val('');
    $("input[type = 'submit']").val('Actualizar');
    $("input").prop("disabled", false);
};
