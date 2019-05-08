$(document).ready(function () {

    $('.table').hide();/*
    document.getElementById('tablaClientes').style.display = 'none';
    document.getElementById('tablaAbonos').style.display = 'none';
    document.getElementById('tablaFacturas').style.display = 'none';
    document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
    document.getElementById('tablaOrdenExterna').style.display = 'none';
    document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
    document.getElementById('tablaCartaFactura').style.display = 'none';
    document.getElementById('tablaEmpleados').style.display = 'none';
    document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
    document.getElementById('tablaAutoConsideracion').style.display = 'none';
    document.getElementById('tablaSerieAutos').style.display = 'none';
    document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
    document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
    document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
    document.getElementById('tablaAutomovil').style.display = 'none';
    document.getElementById('tablaSeguro').style.display = 'none';
    document.getElementById('tablaCompaniaSeguro').style.display = 'none';
    document.getElementById('tablaDevoluciones').style.display = 'none';
    document.getElementById('tablaNomina').style.display = 'none';
    document.getElementById('tablaAsistencia').style.display = 'none';
    document.getElementById('tablaYears').style.display = 'none';
    document.getElementById('tablaMarcas').style.display = 'none';
    document.getElementById('tablaModelos').style.display = 'none';  */

    $('#clien').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'block';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#abono').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'block';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#factura').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'block';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#salida').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'block';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#externa').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'block';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#salidaAu').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'block';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#carta').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'block';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#empleado').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'block';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#vale').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'block';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#consi').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'block';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#serie').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'block';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#llegada').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'block';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#revision').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'block';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#pedido').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'block';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#auto').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'block';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#seguro').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'block';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#compania').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'block';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#devolucion').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'block';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#nomina').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'block';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#year').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'block';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#marca').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'block';
        document.getElementById('tablaModelos').style.display = 'none';
    });

    $('#modelo').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaAbonos').style.display = 'none';
        document.getElementById('tablaFacturas').style.display = 'none';
        document.getElementById('tablaOrdenSalidaProductos').style.display = 'none';
        document.getElementById('tablaOrdenExterna').style.display = 'none';
        document.getElementById('tablaOrdenSalidaAuto').style.display = 'none';
        document.getElementById('tablaCartaFactura').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';
        document.getElementById('tablaValeAutoSeminuevo').style.display = 'none';
        document.getElementById('tablaAutoConsideracion').style.display = 'none';
        document.getElementById('tablaSerieAutos').style.display = 'none';
        document.getElementById('tablaOrdenLlegadaAutomovil').style.display = 'none';
        document.getElementById('tablaRequisicionRevisionServicios').style.display = 'none';
        document.getElementById('tablaOrdenPedidoAutomovil').style.display = 'none';
        document.getElementById('tablaAutomovil').style.display = 'none';
        document.getElementById('tablaSeguro').style.display = 'none';
        document.getElementById('tablaCompaniaSeguro').style.display = 'none';
        document.getElementById('tablaDevoluciones').style.display = 'none';
        document.getElementById('tablaNomina').style.display = 'none';
        document.getElementById('tablaYears').style.display = 'none';
        document.getElementById('tablaMarcas').style.display = 'none';
        document.getElementById('tablaModelos').style.display = 'block';
    });
});

function cargarDatosAbono(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 17; i++) {
        datos[i] = $("#tablaAbonos").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#facturaAbono").val(datos[0]);
        $("#conceptoAbono").val(datos[2]);
        $("#fechaAbono").val(datos[4]);
        $("#cargoAbono").val(datos[6]);
        $("#abonoSS").val(datos[8]);
        $("#saldoAbono").val(datos[10]);
        $("#EmpleadoAbono").val(datos[12]);
        $("#InteresAbono").val(datos[14]);
        $("#idAbono").val(datos[16]);
        $("#idAbonos").val(datos[16]);


        if (datos[17] == 2) {
            $("#idAbono").prop("disabled", true);
        }

        if (datos[1] == 2) {
            $("#facturaAbono").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#conceptoAbono").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#fechaAbono").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#cargoAbono").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#abonoSS").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#saldoAbono").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#EmpleadoAbono").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#InteresAbono").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosAutoConsideracion(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
        datos[i] = $("#tablaAutoConsideracion").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idAutoConsideracion").val(datos[0]);
        $("#idAutosConsideracion").val(datos[0]);
        $("#idEmpleadoAutoConsideracion").val(datos[2]);
        $("#FechaAutoConsideracion").val(datos[4]);
        $("#MontoAutoConsideracion").val(datos[6]);
        $("#EstadoAutoConsideracion").val(datos[8]);
        $("#idClienteAutoConsideracion").val(datos[10]);
        $("#noChasisAutoconsideracion").val(datos[12]);

        if (datos[1] == 2) {
            $("#idAutoConsideracion").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idEmpleadoAutoConsideracion").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#FechaAutoConsideracion").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#MontoAutoConsideracion").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#EstadoAutoConsideracion").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#idClienteAutoConsideracion").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#noChasisAutoconsideracion").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosAutomovil(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 31; i++) {
        datos[i] = $("#tablaAutomovil").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idAutomovil").val(datos[0]);
        $("#idAutos").val(datos[0]);
        $("#idModeloAutomovil").val(datos[2]);
        $("#PrecioAutomovil").val(datos[4]);
        $("#marcaAutomovil").val(datos[6]);
        $("#YearAutomovil").val(datos[8]);
        $("#cantidadActualAuto").val(datos[10]);
        $("#CantidadMinimaAutomovil").val(datos[12]);
        $("#SeguroAutomovil").val(datos[14]);
        $("#CantidadMaximaAutomovil").val(datos[16]);
        $("#Puertas").val(datos[18]);
        $("#Pasajeros").val(datos[20]);
        $("#PesoAuto").val(datos[22]);
        $("#AsientosAutomovil").val(datos[24]);
        $("#rendimientoAuto").val(datos[26]);
        $("#cilindrosAutomovil").val(datos[28]);
        $("#idTipoAutomovil").val(datos[30]);

        if (datos[1] == 2) {
            $("#idAutomovil").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idModeloAutomovil").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#PrecioAutomovil").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#marcaAutomovil").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#YearAutomovil").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#cantidadActualAuto").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#CantidadMinimaAutomovil").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#SeguroAutomovil").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#CantidadMaximaAutomovil").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#Puertas").prop("disabled", true);
        }

        if (datos[21] == 2) {
            $("#Pasajeros").prop("disabled", true);
        }

        if (datos[23] == 2) {
            $("#PesoAuto").prop("disabled", true);
        }

        if (datos[25] == 2) {
            $("#AsientosAutomovil").prop("disabled", true);
        }

        if (datos[27] == 2) {
            $("#rendimientoAuto").prop("disabled", true);
        }

        if (datos[29] == 2) {
            $("#cilindrosAutomovil").prop("disabled", true);
        }

        if (datos[31] == 2) {
            $("#idTipoAutomovil").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosCartaFactura(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 7; i++) {
        datos[i] = $("#tablaCartaFactura").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idCartaFactura").val(datos[0]);
        $("#idCartasFacturas").val(datos[0]);
        $("#idFacturaCarta").val(datos[2]);
        $("#idEmpleadoCarta").val(datos[4]);
        $("#FechaCarta").val(datos[6]);

        if (datos[1] == 2) {
            $("#idCartaFactura").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idFacturaCarta").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idEmpleadoCarta").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#FechaCarta").prop("disabled", true);
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

function cargarDatosCompaniaSeguro(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
        datos[i] = $("#tablaCompaniaSeguro").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idCompania").val(datos[0]);
        $("#idCompaniasSeguras").val(datos[0]);
        $("#NombreCompania").val(datos[2]);
        $("#CorreoCompania").val(datos[4]);
        $("#TelefonoCompania").val(datos[6]);
        $("#DireccionCompania").val(datos[8]);
        $("#LocalidadCompania").val(datos[10]);
        $("#EstadoCompania").val(datos[12]);

        if (datos[1] == 2) {
            $("#idCompania").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#NombreCompania").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#CorreoCompania").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#TelefonoCompania").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#DireccionCompania").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#LocalidadCompania").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#EstadoCompania").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosDevolucionesClientes(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <=15; i++) {
        datos[i] = $("#tablaDevoluciones").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idDevolucionCliente").val(datos[0]);
        $("#idDevolucionesClientes").val(datos[0]);
        $("#idProductoDevolucionCliente").val(datos[2]);
        $("#idEmpleadoDevolucionCliente").val(datos[4]);
        $("#idClienteDevolucionCliente").val(datos[6]);
        $("#RazonDevolucionCliente").val(datos[8]);
        $("#FechaDevolucionCliente").val(datos[10]);
        $("#EstadoDevolucionCliente").val(datos[12]);
        $("#CostoDevolucionCliente").val(datos[14]);

        if (datos[1] == 2) {
            $("#idDevolucionCliente").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idProductoDevolucionCliente").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idEmpleadoDevolucionCliente").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idClienteDevolucionCliente").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#RazonDevolucionCliente").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#FechaDevolucionCliente").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#EstadoDevolucionCliente").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#CostoDevolucionCliente").prop("disabled", true);
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

function cargarDatosFacturas(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 19; i++) {
        datos[i] = $("#tablaFacturas").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idFactura").val(datos[0]);
        $("#idFacturas").val(datos[0]);
        $("#IVAFactura").val(datos[2]);
        $("#idClienteFactura").val(datos[4]);
        $("#ImporteFactura").val(datos[6]);
        $("#SubtotalFactura").val(datos[8]);
        $("#idTipoPagoFactura").val(datos[10]);
        $("#lugarEmisionFactura").val(datos[12]);
        $("#FechaFactura").val(datos[14]);
        $("#idEmpleadoFactura").val(datos[16]);
        $("#EstadoFactura").val(datos[18]);

        if (datos[1] == 2) {
            $("#idFactura").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#IVAFactura").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idClienteFactura").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#ImporteFactura").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#SubtotalFactura").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#idTipoPagoFactura").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#FechaFactura").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#idEmpleadoFactura").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#EstadoFactura").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#lugarEmisionFactura").prop("disabled", true);
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
        $("#idNominas").val(datos[0]);
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

function cargarDatosOrdenExterna(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaOrdenExterna").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idRequisicion").val(datos[0]);
        $("#idOrdenesExternas").val(datos[0]);
        $("#idDepartamento").val(datos[2]);
        $("#FechaExterna").val(datos[4]);
        $("#DescripcionExterna").val(datos[6]);
        $("#TotalExterna").val(datos[8]);
        $("#idEmpleadoExterna").val(datos[10]);
        $("#idClienteExterna").val(datos[12]);
        $("#idFacturaExterna").val(datos[14]);

        if (datos[1] == 2) {
            $("#idRequisicion").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idDepartamento").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#FechaExterna").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#DescripcionExterna").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#TotalExterna").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#idEmpleadoExterna").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#idClienteExterna").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#idFacturaExterna").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosOrdenLlegadaAutomovil(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 7; i++) {
        datos[i] = $("#tablaOrdenLlegadaAutomovil").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idOrdenEntrada").val(datos[0]);
        $("#idOrdenesLlegadas").val(datos[0]);
        $("#idEmpleadoEntrada").val(datos[2]);
        $("#CostoEntrada").val(datos[4]);
        $("#FechaEntrada").val(datos[6]);

        if (datos[1] == 2) {
            $("#idOrdenEntrada").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idEmpleadoEntrada").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#CostoEntrada").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#FechaEntrada").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosOrdenPedidoAutomovil(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaOrdenPedidoAutomovil").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idOrdenPedido").val(datos[0]);
        $("#idOrdenesPedidosAutomoviles").val(datos[0]);
        $("#idEmpleadoPedido").val(datos[2]);
        $("#idCochePedido").val(datos[4]);
        $("#FechaPedido").val(datos[6]);
        $("#CantidadPedido").val(datos[8]);
        $("#FechaLlegadaPedido").val(datos[10]);
        $("#EstadoPedido").val(datos[12]);
        $("#idPlantaPedido").val(datos[14]);

        if (datos[1] == 2) {
            $("#idOrdenPedido").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idEmpleadoPedido").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idCochePedido").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#FechaPedido").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#CantidadPedido").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#FechaLlegadaPedido").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#EstadoPedido").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#idPlantaPedido").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosOrdenSalidaAutomovil(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 9; i++) {
        datos[i] = $("#tablaOrdenSalidaAuto").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idOrdenSalida").val(datos[0]);
        $("#idOrdenesSalidasAutomoviles").val(datos[0]);
        $("#idFacturaSalida").val(datos[2]);
        $("#idEmpleadoSalida").val(datos[4]);
        $("#FechaSalida").val(datos[6]);
        $("#HoraSalida").val(datos[8]);

        if (datos[1] == 2) {
            $("#idOrdenSalida").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idFacturaSalida").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idEmpleadoSalida").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#FechaSalida").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#HoraSalida").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosOrdenSalidaProductos(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <=11; i++) {
        datos[i] = $("#tablaOrdenSalidaProductos").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idOrdenSalidaProducto").val(datos[0]);
        $("#idOrdenesSalidasProductos").val(datos[0]);
        $("#idFacturaSalidaProducto").val(datos[2]);
        $("#FechaSalidaProducto").val(datos[4]);
        $("#idEmpleadoSalidaProducto").val(datos[6]);
        $("#EstadoSalidaProducto").val(datos[8]);
        $("#idOrdenExternaSalidaProducto").val(datos[10]);

        if (datos[1] == 2) {
            $("#idOrdenSalidaProducto").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idFacturaSalidaProducto").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#FechaSalidaProducto").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idEmpleadoSalidaProducto").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#EstadoSalidaProducto").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#idOrdenExternaSalidaProducto").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosRequisicionRevisionServicios(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 7; i++) {
        datos[i] = $("#tablaRequisicionRevisionServicios").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idRequisicionRevision").val(datos[0]);
        $("#idRequisicionesRevisionesServicios").val(datos[0]);
        $("#FechaRevision").val(datos[2]);
        $("#idOrdenEntradaRevision").val(datos[4]);
        $("#idEmpleadoRevision").val(datos[6]);

        if (datos[1] == 2) {
            $("#idRequisicionRevision").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#FechaRevision").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idOrdenEntradaRevision").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idEmpleadoRevision").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosSeguro(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 5; i++) {
        datos[i] = $("#tablaSeguro").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idSeguro").val(datos[0]);
        $("#idSeguros").val(datos[0]);
        $("#DescripcionSeguro").val(datos[2]);
        $("#idCompaniaSeguro").val(datos[4]);

        if (datos[1] == 2) {
            $("#idSeguro").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#DescripcionSeguro").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idCompaniaSeguro").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosSerieAutos(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaSerieAutos").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idAutomovilSerie").val(datos[0]);
        $("#noChasisSerie").val(datos[2]);
        $("#idSeriesAutos").val(datos[2]);
        $("#noMotorSerie").val(datos[4]);
        $("#idFacturaSerie").val(datos[6]);
        $("#idEstadoVentaSerie").val(datos[8]);
        $("#idUbicacionSerie").val(datos[10]);
        $("#FechaLlegadaSerieAutos").val(datos[12]);
        $("#idEstadoAutoSerie").val(datos[14]);

        if (datos[1] == 2) {
            $("#idAutomovilSerie").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#noChasisSerie").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#noMotorSerie").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idFacturaSerie").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#idEstadoVentaSerie").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#idUbicacionSerie").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#FechaLlegadaSerieAutos").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#idEstadoAutoSerie").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosValeAutoSeminuevo(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 11; i++) {
        datos[i] = $("#tablaValeAutoSeminuevo").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idVale").val(datos[0]);
        $("#idValesSeminuevos").val(datos[0]);
        $("#idAutoConsideracionVale").val(datos[2]);
        $("#FechaConsideracion").val(datos[4]);
        $("#idEmpleadoConsideracion").val(datos[6]);
        $("#idFacturaConsideracion").val(datos[8]);
        $("#MontoConsideracion").val(datos[10]);

        if (datos[1] == 2) {
            $("#idVale").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idAutoConsideracionVale").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#FechaConsideracion").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idEmpleadoConsideracion").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#idFacturaConsideracion").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#MontoConsideracion").prop("disabled", true);
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

$('#formAbonos').submit(function () {
    idAbono = $("#idAbono").val();
    idAbonos = $("#idAbonos").val();
    idFactura =  $("#facturaAbono").val();
    concepto =  $("#conceptoAbono").val();
    fecha =  $("#fechaAbono").val();
    cargo =  $("#cargoAbono").val();
    abono =  $("#abonoSS").val();
    saldo =  $("#saldoAbono").val();
    idEmpleado =  $("#EmpleadoAbono").val();
    interes =  $("#InteresAbono").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formAbonos.php',
        data: {
            idAbono : idAbono,
            idAbonos : idAbonos,
            idFactura : idFactura,
            concepto : concepto,
            fecha : fecha,
            cargo : cargo,
            abono : abono,
            saldo : saldo,
            idEmpleado : idEmpleado,
            interes : interes,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaAbonos').load(" #tablaAbonos");
                $('#modalAbonos').modal('hide');
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

$('#formAutoConsideracion').submit(function () {
    autoConsideracion = $("#idAutoConsideracion").val();
    idAutosConsideracion = $("#idAutosConsideracion").val();
    idEmpleado = $("#idEmpleadoAutoConsideracion").val();
    fecha = $("#FechaAutoConsideracion").val();
    monto = $("#MontoAutoConsideracion").val();
    estado = $("#EstadoAutoConsideracion").val();
    idClientes = $("#idClienteAutoConsideracion").val();
    chasis = $("#noChasisAutoconsideracion").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formAutoConsideracion.php',
        data: {
            autoConsideracion : autoConsideracion,
            idAutosConsideracion : idAutosConsideracion,
            idEmpleado : idEmpleado,
            fecha : fecha,
            monto : monto,
            estado : estado,
            idClientes : idClientes,
            chasis : chasis,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaAutoConsideracion').load(" #tablaAutoConsideracion");
                $('#modalAutoConsideracion').modal('hide');
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

$('#formAutomovil').submit(function () {

    idAutomovil = $("#idAutomovil").val();
    idAutos = $("#idAutos").val();
    idModelo = $("#idModeloAutomovil").val();
    precioAutomovil = $("#PrecioAutomovil").val();
    marca = $("#marcaAutomovil").val();
    Year = $("#YearAutomovil").val();
    CantidadActual = $("#cantidadActualAuto").val();
    CantidadMinima = $("#CantidadMinimaAutomovil").val();
    seguroAutomovil = $("#SeguroAutomovil").val();
    CantidadMaxima = $("#CantidadMaximaAutomovil").val();
    puertas = $("#Puertas").val();
    pasajeros = $("#Pasajeros").val();
    Peso = $("#PesoAuto").val();
    Asientos = $("#AsientosAutomovil").val();
    rendimiento = $("#rendimientoAuto").val();
    cilindros = $("#cilindrosAutomovil").val();
    tipoAuto = $("#idTipoAutomovil").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formAutomovil.php',
        data: {
            idAutomovil : idAutomovil,
            idAutos : idAutos,
            idModelo : idModelo,
            precioAutomovil : precioAutomovil,
            marca : marca,
            Year : Year,
            CantidadActual : CantidadActual,
            CantidadMinima : CantidadMinima,
            seguroAutomovil : seguroAutomovil,
            CantidadMaxima : CantidadMaxima,
            puertas : puertas,
            pasajeros : pasajeros,
            Peso : Peso,
            Asientos : Asientos,
            rendimiento : rendimiento,
            cilindros : cilindros,
            tipoAuto : tipoAuto,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaAutomovil').load(" #tablaAutomovil");
                $('#modalAutomovil').modal('hide');
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

$('#formCartaFactura').submit(function () {

    cartaFactura = $("#idCartaFactura").val();
    idCartasFacturas = $("#idCartasFacturas").val();
    idFactura = $("#idFacturaCarta").val();
    idEmpleado = $("#idEmpleadoCarta").val();
    FechaCarta = $("#FechaCarta").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formCartaFactura.php',
        data: {
            cartaFactura : cartaFactura,
            idCartasFacturas : idCartasFacturas,
            idFactura : idFactura,
            idEmpleado : idEmpleado,
            FechaCarta : FechaCarta,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaCartaFactura').load(" #tablaCartaFactura");
                $('#modalCartaFactura').modal('hide');
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
            idCliente : idCliente,
            idClientes : idClientes,
            nombreCliente : nombreCliente,
            rfc : rfc,
            telefono : telefono,
            correo : correo,
            fechaCliente : fechaCliente,
            domicilio : domicilio,
            genero : genero,
            departamento : departamento,
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

$('#formCompaniaSeguro').submit(function () {
    companiaSeguro = $("#idCompania").val();
    idCompaniasSeguras = $("#idCompaniasSeguras").val();
    nombre = $("#NombreCompania").val();
    correo = $("#CorreoCompania").val();
    TelefonoCompania = $("#TelefonoCompania").val();
    direccion = $("#DireccionCompania").val();
    localidad = $("#LocalidadCompania").val();
    estado = $("#EstadoCompania").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formCompaniaSeguro.php',
        data: {
            companiaSeguro : companiaSeguro,
            idCompaniasSeguras : idCompaniasSeguras,
            nombre : nombre,
            correo : correo,
            TelefonoCompania : TelefonoCompania,
            direccion : direccion,
            localidad : localidad,
            estado : estado,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaCompaniaSeguro').load(" #tablaCompaniaSeguro");
                $('#modalCompaniaSeguro').modal('hide');
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

$('#formDevolucionClientes').submit(function () {

    devolucion = $("#idDevolucionCliente").val();
    idDevolucionesClientes = $("#idDevolucionesClientes").val();
    idProducto = $("#idProductoDevolucionCliente").val();
    empleado = $("#idEmpleadoDevolucionCliente").val();
    cliente = $("#idClienteDevolucionCliente").val();
    razon = $("#RazonDevolucionCliente").val();
    fecha = $("#FechaDevolucionCliente").val();
    estado = $("#EstadoDevolucionCliente").val();
    costo = $("#CostoDevolucionCliente").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formDevolucionClientes.php',
        data: {
            devolucion : devolucion,
            idDevolucionesClientes : idDevolucionesClientes,
            idProducto : idProducto,
            empleado : empleado,
            cliente : cliente,
            razon : razon,
            fecha : fecha,
            estado : estado,
            costo : costo,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaDevoluciones').load(" #tablaDevoluciones");
                $('#modalDevolucionClientes').modal('hide');
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
            empleado : empleado,
            idEmpleados : idEmpleados,
            nombre : nombre,
            rfc : rfc,
            telefono : telefono,
            correoEmpleado : correoEmpleado,
            domicilio : domicilio,
            fechaIngreso : fechaIngreso,
            contrato : contrato,
            turno : turno,
            genero : genero,
            cargo : cargo,
            sueldo : sueldo,
            comision : comision,
            estado: estado,
            departamento : departamento,
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

$('#formFactura').submit(function () {

    idFactura = $("#idFactura").val();
    idFacturas = $("#idFacturas").val();
    iva = $("#IVAFactura").val();
    cliente = $("#idClienteFactura").val();
    importe = $("#ImporteFactura").val();
    subtotal = $("#SubtotalFactura").val();
    idTipoPago = $("#idTipoPagoFactura").val();
    fecha = $("#FechaFactura").val();
    empleado = $("#idEmpleadoFactura").val();
    estado = $("#EstadoFactura").val();
    lugar = $("#lugarEmisionFactura").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formFactura.php',
        data: {
            idFactura : idFactura,
            idFacturas : idFacturas,
            iva : iva,
            cliente : cliente,
            importe : importe,
            subtotal : subtotal,
            idTipoPago : idTipoPago,
            fecha : fecha,
            empleado : empleado,
            estado : estado,
            lugar : lugar,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaFacturas').load(" #tablaFacturas");
                $('#modalFactura').modal('hide');
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
            idmarca : idmarca,
            idMarcas : idMarcas,
            marca : marca,
            departamento : departamento,
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

$('#formModelos').submit(function () {

    idModelo = $("#idModelo").val();
    idModelos = $("#idModelos").val();
    nombre = $("#NombreModelo").val();
    departamento = $("#idDepartamentoModelos").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formModelos.php',
        data: {
            idModelo : idModelo,
            idModelos : idModelos,
            nombre : nombre,
            departamento : departamento,
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
            nomina : nomina,
            idNominas : idNominas,
            percepcion : percepcion,
            empleado : empleado,
            periodicidad : periodicidad,
            salario : salario,
            bono : bono,
            deduccion : deduccion,
            total : total,
            fecha : fecha,
            departamento : departamento,
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

$('#formOrdenExterna').submit(function () {

    requisicion = $("#idRequisicion").val();
    idOrdenesExternas = $("#idOrdenesExternas").val();
    departamento = $("#idDepartamento").val();
    fecha = $("#FechaExterna").val();
    descripcion = $("#DescripcionExterna").val();
    total = $("#TotalExterna").val();
    empleado = $("#idEmpleadoExterna").val();
    cliente = $("#idClienteExterna").val();
    factura = $("#idFacturaExterna").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenExterna.php',
        data: {
            requisicion : requisicion,
            idOrdenesExternas : idOrdenesExternas,
            departamento : departamento,
            fecha : fecha,
            descripcion : descripcion,
            total : total,
            empleado : empleado,
            cliente : cliente,
            factura : factura,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenExterna').load(" #tablaOrdenExterna");
                $('#modalOrdenExterna').modal('hide');
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

$('#formOrdenLlegada').submit(function () {

    orden = $("#idOrdenEntrada").val();
    idOrdenesLlegadas = $("#idOrdenesLlegadas").val();
    empleado = $("#idEmpleadoEntrada").val();
    costo = $("#CostoEntrada").val();
    fecha = $("#FechaEntrada").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenLlegada.php',
        data: {
            orden : orden,
            idOrdenesLlegadas : idOrdenesLlegadas,
            empleado : empleado,
            costo : costo,
            fecha : fecha,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenLlegadaAutomovil').load(" #tablaOrdenLlegadaAutomovil");
                $('#modalOrdenLlegada').modal('hide');
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

$('#formOrdenPedidoAutomovil').submit(function () {

    ordenPedido = $("#idOrdenPedido").val();
    idOrdenesPedidosAutomoviles = $("#idOrdenesPedidosAutomoviles").val();
    empleado = $("#idEmpleadoPedido").val();
    coche = $("#idCochePedido").val();
    fecha = $("#FechaPedido").val();
    cantidad = $("#CantidadPedido").val();
    fechallegada = $("#FechaLlegadaPedido").val();
    estado = $("#EstadoPedido").val();
    planta = $("#idPlantaPedido").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenPedidoAutomovil.php',
        data: {
            ordenPedido : ordenPedido,
            idOrdenesPedidosAutomoviles : idOrdenesPedidosAutomoviles,
            empleado : empleado,
            coche : coche,
            fecha : fecha,
            cantidad : cantidad,
            fechallegada : fechallegada,
            estado : estado,
            planta : planta,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenPedidoAutomovil').load(" #tablaOrdenPedidoAutomovil");
                $('#modalOrdenPedidoAutomovil').modal('hide');
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

$('#formOrdenSalidaAutomovil').submit(function () {
    orden = $("#idOrdenSalida").val();
    idOrdenesSalidasAutomoviles = $("#idOrdenesSalidasAutomoviles").val();
    factura = $("#idFacturaSalida").val();
    empleado = $("#idEmpleadoSalida").val();
    fecha = $("#FechaSalida").val();
    hora = $("#HoraSalida").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenSalidaAutomovil.php',
        data: {
            orden : orden,
            idOrdenesSalidasAutomoviles : idOrdenesSalidasAutomoviles,
            factura : factura,
            empleado : empleado,
            fecha : fecha,
            hora : hora,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenSalidaAuto').load(" #tablaOrdenSalidaAuto");
                $('#modalOrdenSalidaAutomovil').modal('hide');
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

$('#formOrdenSalidaProductos').submit(function () {

    orden = $("#idOrdenSalidaProducto").val();
    idOrdenesSalidasProductos = $("#idOrdenesSalidasProductos").val();
    facturaSalida = $("#idFacturaSalidaProducto").val();
    fecha = $("#FechaSalidaProducto").val();
    empleado = $("#idEmpleadoSalidaProducto").val();
    estado = $("#EstadoSalidaProducto").val();
    ordenExterna = $("#idOrdenExternaSalidaProducto").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenSalidaProductos.php',
        data: {
            orden : orden,
            idOrdenesSalidasProductos : idOrdenesSalidasProductos,
            facturaSalida : facturaSalida,
            fecha : fecha,
            empleado : empleado,
            estado : estado,
            ordenExterna : ordenExterna,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenSalidaProductos').load(" #tablaOrdenSalidaProductos");
                $('#modalOrdenSalidaProductos').modal('hide');
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

$('#formRequisicionRevisionServicios').submit(function () {

    requisicion = $("#idRequisicionRevision").val();
    idRequisicionesRevisionesServicios = $("#idRequisicionesRevisionesServicios").val();
    fecha = $("#FechaRevision").val();
    entrada = $("#idOrdenEntradaRevision").val();
    empleado = $("#idEmpleadoRevision").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formRequisicionRevisionServicios.php',
        data: {
            requisicion : requisicion,
            idRequisicionesRevisionesServicios : idRequisicionesRevisionesServicios,
            fecha : fecha,
            entrada : entrada,
            empleado : empleado,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaRequisicionRevisionServicios').load(" #tablaRequisicionRevisionServicios");
                $('#modalRequisicionRevisionServicios').modal('hide');
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

$('#formSeguro').submit(function () {

    seguro = $("#idSeguro").val();
    idSeguros = $("#idSeguros").val();
    descripcion = $("#DescripcionSeguro").val();
    compania = $("#idCompaniaSeguro").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formSeguro.php',
        data: {
            seguro : seguro,
            idSeguros : idSeguros,
            descripcion : descripcion,
            compania : compania,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaSeguro').load(" #tablaSeguro");
                $('#modalSeguro').modal('hide');
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

$('#formSerieAutos').submit(function () {

    automovil = $("#idAutomovilSerie").val();
    chasis = $("#noChasisSerie").val();
    idSeriesAutos = $("#idSeriesAutos").val();
    motor = $("#noMotorSerie").val();
    factura = $("#idFacturaSerie").val();
    estado = $("#idEstadoVentaSerie").val();
    ubicacion = $("#idUbicacionSerie").val();
    fecha = $("#FechaLlegadaSerieAutos").val();
    estado = $("#idEstadoAutoSerie").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formSerieAutos.php',
        data: {
            automovil : automovil,
            chasis : chasis,
            idSeriesAutos : idSeriesAutos,
            motor : motor,
            factura : factura,
            estado : estado,
            ubicacion : ubicacion,
            fecha : fecha,
            estado : estado,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaSerieAutos').load(" #tablaSerieAutos");
                $('#modalSerieAutos').modal('hide');
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

$('#formValeSeminuevo').submit(function () {

    vale = $("#idVale").val();
    idValesSeminuevos = $("#idValesSeminuevos").val();
    consideracion = $("#idAutoConsideracionVale").val();
    fecha = $("#FechaConsideracion").val();
    empleado = $("#idEmpleadoConsideracion").val();
    factura = $("#idFacturaConsideracion").val();
    monto = $("#MontoConsideracion").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formValeSeminuevo.php',
        data: {
            vale : vale,
            idValesSeminuevos : idValesSeminuevos,
            consideracion : consideracion,
            fecha : fecha,
            empleado : empleado,
            factura : factura,
            monto : monto,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaValeAutoSeminuevo').load(" #tablaValeAutoSeminuevo");
                $('#modalValeSeminuevo').modal('hide');
                vaciarModal();
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
            idYear : idYear,
            idAnos : idAnos,
            year : year,
            departamento : departamento,
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
function eliminarDatosAbono(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosAbono.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaAbonos').load(" #tablaAbonos");

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

function eliminarDatosAutoConsideracion(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosAutoConsideracion.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaAutoConsideracion').load(" #tablaAutoConsideracion");

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

function eliminarDatosAutomovil(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosAutomovil.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaAutomovil').load(" #tablaAutomovil");

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

function eliminarDatosCartaFactura(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosCartaFactura.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaCartaFactura').load(" #tablaCartaFactura");

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

function eliminarDatosClientes(boton) {
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

function eliminarDatosCompaniaSeguro(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosCompaniaSeguro.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaCompaniaSeguro').load(" #tablaCompaniaSeguro");

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
        url: '../Peticiones/eliminarDatosDevolucionesClientes.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaDevoluciones').load(" #tablaDevoluciones");

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

function eliminarDatosEmpleados(boton) {
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

function eliminarDatosFacturas(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosFacturas.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaFacturas').load(" #tablaFacturas");
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

function eliminarDatosModelos(boton) {
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

function eliminarDatosOrdenExterna(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenExterna.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenExterna').load(" #tablaOrdenExterna");
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

function eliminarDatosOrdenLlegadaAutomovil(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenLlegadaAutomovil.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenLlegadaAutomovil').load(" #tablaOrdenLlegadaAutomovil");
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

function eliminarDatosOrdenPedidoAutomovil(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenPedidoAutomovil.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenPedidoAutomovil').load(" #tablaOrdenPedidoAutomovil");
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

function eliminarDatosOrdenSalidaAutomovil(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenSalidaAutomovil.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenSalidaAuto').load(" #tablaOrdenSalidaAuto");
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


function eliminarDatosOrdenSalidaProductos(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenSalidaAuto').load(" #tablaOrdenSalidaAuto");
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

function eliminarDatosOrdenSalidaProductos(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenSalidaProductos.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenSalidaProductos').load(" #tablaOrdenSalidaProductos");
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

function eliminarDatosRequisicionRevisionServicios(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosRequisicionRevisionServicios.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaRequisicionRevisionServicios').load(" #tablaRequisicionRevisionServicios");
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

function eliminarDatosSeguro(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosSeguro.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaSeguro').load(" #tablaSeguro");
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

function eliminarDatosSerieAutos(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosSerieAutos.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaSerieAutos').load(" #tablaSerieAutos");
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


function eliminarDatosValeAutoSeminuevo(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosValeAutoSeminuevo.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'El registro se borró de forma correcta') {
                alertify.success(data);
                $('#tablaValeAutoSeminuevo').load(" #tablaValeAutoSeminuevo");
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
