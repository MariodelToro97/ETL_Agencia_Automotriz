$(document).ready(function () {

    $('.table').hide();/*
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';*/

    $('#clien').on('click', function(){
        document.getElementById('tablaClientes').style.display = 'block';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';


    });

    $('#empleado').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'block';

    });

    $('#cita').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'block';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#rep').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'block';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#tipSer').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'block';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#Diag').on('click', function () {
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'block';
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#Cond').on('click', function () {
        document.getElementById('tablaCondicionLlegada').style.display = 'block';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#agen').on('click', function () {
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'block';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#Cob').on('click', function () {
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'block';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#rec').on('click', function () {
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'block';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#solic').on('click', function () {
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'block';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#Cons').on('click', function () {
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'block';
        document.getElementById('tablaHerramientas').style.display = 'none';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });

    $('#her').on('click', function () {
        document.getElementById('tablaCondicionLlegada').style.display = 'none';
        document.getElementById('tablaClientes').style.display = 'none';
        document.getElementById('tablaCitas').style.display = 'none';
        document.getElementById('tablaReparaciones').style.display = 'none';
        document.getElementById('tablaTipoServicio').style.display = 'none';
        document.getElementById('tablaDiagnostico').style.display = 'none';
        document.getElementById('tablaAgenda').style.display = 'none';
        document.getElementById('tablaOrdenCobroTaller').style.display = 'none';
        document.getElementById('tablaRecepcionVehiculoNuevo').style.display = 'none';
        document.getElementById('tablaSolicitudRefacciones').style.display = 'none';
        document.getElementById('tablaConsumibles').style.display = 'none';
        document.getElementById('tablaHerramientas').style.display = 'block';
        document.getElementById('tablaEmpleados').style.display = 'none';

    });
});


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

function cargarDatosHerramientas(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 3; i++) {
        datos[i] = $("#tablaHerramientas").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idHerramienta").val(datos[0]);
        $("#idHerramientas").val(datos[0]);
        $("#nombreHerramienta").val(datos[2]);

        if (datos[1] == 2) {
            $("#idHerramienta").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#nombreHerramienta").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosConsumibles(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 5; i++) {
        datos[i] = $("#tablaConsumibles").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idConsumible").val(datos[0]);
        $("#idConsumibles").val(datos[0]);
        $("#productoConsumible").val(datos[2]);
        $("#cantidadConsumible").val(datos[4]);

        if (datos[1] == 2) {
            $("#idConsumible").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#productoConsumible").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#cantidadConsumible").prop("disabled", true);
        }
    }, 500);
};


function cargarDatosSolicitudRefacciones(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
        datos[i] = $("#tablaSolicitudRefacciones").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idSolicitudSolicitudRefacciones").val(datos[0]);
        $("#idSolicitudesRefacciones").val(datos[0]);
        $("#idMecanicoSolicitudRefacciones").val(datos[2]);
        $("#refaccionSolicitudRefacciones").val(datos[4]);
        $("#vehiculoSolicitudRefacciones").val(datos[6]);
        $("#idClienteSolicitudRefacciones").val(datos[8]);
        $("#cantidadSolicitudRefacciones").val(datos[10]);
        $("#fechaSolicitudRefacciones").val(datos[12]);

        if (datos[1] == 2) {
            $("#idSolicitudSolicitudRefacciones").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idMecanicoSolicitudRefacciones").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#refaccionSolicitudRefacciones").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#vehiculoSolicitudRefacciones").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#idClienteSolicitudRefacciones").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#cantidadSolicitudRefacciones").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#fechaSolicitudRefacciones").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosRecepcionVehiculoNuevo(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 11; i++) {
        datos[i] = $("#tablaRecepcionVehiculoNuevo").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idRecepcionVehiculonuevo").val(datos[0]);
        $("#idRecepcionesVehiculosNuevos").val(datos[0]);
        $("#identificacionRecepcionVehiculoNuevo").val(datos[2]);
        $("#idModeloRecepcionVehiculoNuevo").val(datos[4]);
        $("#colorRecepcionVehiculoNuevo").val(datos[6]);
        $("#condicionLlegadaRecepcionVehiculoNuevo").val(datos[8]);
        $("#seguroRecepcionVehiculoNuevo").val(datos[10]);

        if (datos[1] == 2) {
            $("#idRecepcionVehiculonuevo").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#identificacionRecepcionVehiculoNuevo").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idModeloRecepcionVehiculoNuevo").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#colorRecepcionVehiculoNuevo").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#condicionLlegadaRecepcionVehiculoNuevo").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#seguroRecepcionVehiculoNuevo").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosOrdenCobroTaller(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaOrdenCobroTaller").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idCobroOrdenCobroTaller").val(datos[0]);
        $("#idOrdenesCobrosTaller").val(datos[0]);
        $("#idEmpleadoOrdenCobroTaller").val(datos[2]);
        $("#idCLienteOrdenCobroTaller").val(datos[4]);
        $("#idTipoServicioOrdenCobroTaller").val(datos[6]);
        $("#idRefaccionOrdenCobroTaller").val(datos[8]);
        $("#totalOrdenCobroTaller").val(datos[10]);
        $("#fechaOrdenCobroTaller").val(datos[12]);
        $("#lugarEmisionOrdenCobroTaller").val(datos[14]);

        if (datos[1] == 2) {
            $("#idCobroOrdenCobroTaller").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idEmpleadoOrdenCobroTaller").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idCLienteOrdenCobroTaller").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idTipoServicioOrdenCobroTaller").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#idRefaccionOrdenCobroTaller").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#totalOrdenCobroTaller").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#fechaOrdenCobroTaller").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#lugarEmisionOrdenCobroTaller").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosAgenda(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
        datos[i] = $("#tablaAgenda").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idagenda").val(datos[0]);
        $("#idAgendas").val(datos[0]);
        $("#idCitaAgenda").val(datos[2]);
        $("#idReparacionAgenda").val(datos[4]);
        $("#idempleadoAgenda").val(datos[6]);
        $("#automovilAgenda").val(datos[8]);
        $("#idServicioAgenda").val(datos[10]);
        $("#fechaAgenda").val(datos[12]);

        if (datos[1] == 2) {
            $("#idagenda").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idCitaAgenda").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#idReparacionAgenda").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#idempleadoAgenda").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#automovilAgenda").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#idServicioAgenda").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#fechaAgenda").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosCitas(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 15; i++) {
        datos[i] = $("#tablaCitas").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idCita").val(datos[0]);
        $("#idCitas").val(datos[0]);
        $("#idRecepcionistaCita").val(datos[2]);
        $("#clienteCita").val(datos[4]);
        $("#FechaCita").val(datos[6]);
        $("#HoraCita").val(datos[8]);
        $("#tipoServicioCita").val(datos[10]);
        $("#descripcionServicioCita").val(datos[12]);
        $("#idMecanicoCita").val(datos[14]);

        if (datos[1] == 2) {
            $("#idCita").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#idRecepcionistaCita").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#clienteCita").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#FechaCita").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#HoraCita").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#tipoServicioCita").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#descripcionServicioCita").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#idMecanicoCita").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosDevolucionesClientes(boton) {
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
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
    }, 500);
};

function cargarDatosCondicionLlegada(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 19; i++) {
        datos[i] = $("#tablaCondicionLlegada").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#condicionLlegada").val(datos[0]);
        $("#idCondicionesLlegadas").val(datos[0]);
        $("#kilometrajeCondicion").val(datos[2]);
        $("#gasolinaCondicion").val(datos[4]);
        $("#lucesCondicion").val(datos[6]);
        $("#espejosCondicion").val(datos[8]);
        $("#cauchosCondicion").val(datos[10]);
        $("#faroCondicion").val(datos[12]);
        $("#placaCondicion").val(datos[14]);
        $("#idClienteCondicionLlegada").val(datos[16]);
        $("#idEmpleadoCondicionLlegada").val(datos[18]);

        if (datos[1] == 2) {
            $("#condicionLlegada").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#kilometrajeCondicion").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#gasolinaCondicion").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#lucesCondicion").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#espejosCondicion").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#cauchosCondicion").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#faroCondicion").prop("disabled", true);
        }

        if (datos[15] == 2) {
            $("#placaCondicion").prop("disabled", true);
        }

        if (datos[17] == 2) {
            $("#idClienteCondicionLlegada").prop("disabled", true);
        }

        if (datos[19] == 2) {
            $("#idEmpleadoCondicionLlegada").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosDiagnostico(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 7; i++) {
        datos[i] = $("#tablaDiagnostico").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idDiagnostico").val(datos[0]);
        $("#idDiagnosticos").val(datos[0]);
        $("#detalleDiagnostico").val(datos[2]);
        $("#mecanicoDiagnostico").val(datos[4]);
        $("#vehiculoDiagnostico").val(datos[6]);

        if (datos[1] == 2) {
            $("#idDiagnostico").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#detalleDiagnostico").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#mecanicoDiagnostico").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#vehiculoDiagnostico").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosReparaciones(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 13; i++) {
        datos[i] = $("#tablaReparaciones").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idReparacion").val(datos[0]);
        $("#idReparaciones").val(datos[0]);
        $("#MotoReparacion").val(datos[2]);
        $("#tiempoReparacion").val(datos[4]);
        $("#mecanicoReparacion").val(datos[6]);
        $("#vehiculoReparacion").val(datos[8]);
        $("#consumibleReparacion").val(datos[10]);
        $("#estadoReparacion").val(datos[12]);

        if (datos[1] == 2) {
            $("#idReparacion").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#MotoReparacion").prop("disabled", true);
        }

        if (datos[5] == 2) {
            $("#tiempoReparacion").prop("disabled", true);
        }

        if (datos[7] == 2) {
            $("#mecanicoReparacion").prop("disabled", true);
        }

        if (datos[9] == 2) {
            $("#vehiculoReparacion").prop("disabled", true);
        }

        if (datos[11] == 2) {
            $("#consumibleReparacion").prop("disabled", true);
        }

        if (datos[13] == 2) {
            $("#estadoReparacion").prop("disabled", true);
        }
    }, 500);
};

function cargarDatosTipoServicio(boton){
    vaciarModal();
    var fila = boton.name;
    var datos = [];

    for (var i = 0; i <= 3; i++) {
        datos[i] = $("#tablaTipoServicio").children().children()[fila].children[i].innerHTML;
    }

    setTimeout(function () {
        $("#idServicio").val(datos[0]);
        $("#idTiposservicios").val(datos[0]);
        $("#nombreServicio").val(datos[2]);

        if (datos[1] == 2) {
            $("#idServicio").prop("disabled", true);
        }

        if (datos[3] == 2) {
            $("#nombreServicio").prop("disabled", true);
        }
    }, 500);
};

$('#formAgenda').submit(function () {
    idAgenda = $("#idagenda").val();
    idAgendas = $("#idAgendas").val();
    idCita = $("#idCitaAgenda").val();
    idReparacion = $("#idReparacionAgenda").val();
    idEmpleado = $("#idempleadoAgenda").val();
    automovilAgenda = $("#automovilAgenda").val();
    idServicio = $("#idServicioAgenda").val();
    fecha = $("#fechaAgenda").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formAgenda.php',
        data: {
            idAgenda : idAgenda,
            idAgendas : idAgendas,
            idCita : idCita,
            idReparacion : idReparacion,
            idEmpleado : idEmpleado,
            automovilAgenda : automovilAgenda,
            idServicio : idServicio,
            fecha : fecha,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaAgenda').load(" #tablaAgenda");
                $('#modalAgenda').modal('hide');
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


$('#formCita').submit(function () {
    cita = $("#idCita").val();
    idCitas = $("#idCitas").val();
    recepcionista = $("#idRecepcionistaCita").val();
    Cliente = $("#clienteCita").val();
    Fecha = $("#FechaCita").val();
    horaCita = $("#HoraCita").val();
    tiposervicio = $("#tipoServicioCita").val();
    descripcion = $("#descripcionServicioCita").val();
    mecanico = $("#idMecanicoCita").val();
    $.ajax({
        type: 'POST',
        url: '../Peticiones/formCita.php',
        data: {
            cita : cita,
            idCitas : idCitas,
            recepcionista : recepcionista,
            Cliente : Cliente,
            Fecha : Fecha,
            horaCita : horaCita,
            tiposervicio : tiposervicio,
            descripcion : descripcion,
            mecanico : mecanico,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaCitas').load(" #tablaCitas");
                $('#modalCita').modal('hide');
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

$('#formConsumibles').submit(function () {

    consumible = $("#idConsumible").val();
    idConsumibles = $("#idConsumibles").val();
    producto = $("#productoConsumible").val();
    cantidad = $("#cantidadConsumible").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formConsumibles.php',
        data: {
            consumible : consumible,
            idConsumibles : idConsumibles,
            producto : producto,
            cantidad : cantidad,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaConsumibles').load(" #tablaConsumibles");
                $('#modalConsumibles').modal('hide');
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

$('#formSolicitudRefacciones').submit(function () {

    solicitud = $("#idSolicitudSolicitudRefacciones").val();
    idSolicitudesRefacciones = $("#idSolicitudesRefacciones").val();
    mecanico = $("#idMecanicoSolicitudRefacciones").val();
    refaccion = $("#refaccionSolicitudRefacciones").val();
    vehiculo = $("#vehiculoSolicitudRefacciones").val();
    cliente = $("#idClienteSolicitudRefacciones").val();
    cantidad = $("#cantidadSolicitudRefacciones").val();
    fecha = $("#fechaSolicitudRefacciones").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formSolicitudRefacciones.php',
        data: {
            solicitud : solicitud,
            idSolicitudesRefacciones : idSolicitudesRefacciones,
            mecanico : mecanico,
            refaccion : refaccion,
            vehiculo : vehiculo,
            cliente : cliente,
            cantidad : cantidad,
            fecha : fecha,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaSolicitudRefacciones').load(" #tablaSolicitudRefacciones");
                $('#modalSolicitudRefacciones').modal('hide');
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

$('#formHerramienta').submit(function () {

    herramienta = $("#idHerramienta").val();
    idHerramientas = $("#idHerramientas").val();
    nombre = $("#nombreHerramienta").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formHerramienta.php',
        data: {
            herramienta : herramienta,
            idHerramientas : idHerramientas,
            nombre : nombre,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaHerramientas').load(" #tablaHerramientas");
                $('#modalHerramienta').modal('hide');
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

$('#formCondicionLlegada').submit(function () {

    condicion = $("#condicionLlegada").val();
    idCondicionesLlegadas = $("#idCondicionesLlegadas").val();
    kilometraje = $("#kilometrajeCondicion").val();
    gasolina = $("#gasolinaCondicion").val();
    luces = $("#lucesCondicion").val();
    espejos = $("#espejosCondicion").val();
    caucho = $("#cauchosCondicion").val();
    faro = $("#faroCondicion").val();
    placa = $("#placaCondicion").val();
    cliente = $("#idClienteCondicionLlegada").val();
    empleado = $("#idEmpleadoCondicionLlegada").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formCondicionLlegada.php',
        data: {
            condicion : condicion,
            idCondicionesLlegadas : idCondicionesLlegadas,
            kilometraje : kilometraje,
            gasolina : gasolina,
            luces : luces,
            espejos : espejos,
            caucho : caucho,
            faro : faro,
            placa : placa,
            cliente : cliente,
            empleado : empleado,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaCondicionLlegada').load(" #tablaCondicionLlegada");
                $('#modalCondicionLlegada').modal('hide');
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

$('#formDiagnostico').submit(function () {

    diagnostico = $("#idDiagnostico").val();
    idDiagnosticos = $("#idDiagnosticos").val();
    detalle = $("#detalleDiagnostico").val();
    mecanico = $("#mecanicoDiagnostico").val();
    vehiculo = $("#vehiculoDiagnostico").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formDiagnostico.php',
        data: {
            diagnostico : diagnostico,
            idDiagnosticos : idDiagnosticos,
            detalle : detalle,
            mecanico : mecanico,
            vehiculo : vehiculo,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaDiagnostico').load(" #tablaDiagnostico");
                $('#modalDiagnostico').modal('hide');
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

$('#formReparacion').submit(function () {

    reparacion = $("#idReparacion").val();
    idReparaciones = $("#idReparaciones").val();
    tipo = $("#MotoReparacion").val();
    tiempo = $("#tiempoReparacion").val();
    mecanico = $("#mecanicoReparacion").val();
    vehiculo = $("#vehiculoReparacion").val();
    consumible = $("#consumibleReparacion").val();
    estado = $("#estadoReparacion").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formReparacion.php',
        data: {
            reparacion : reparacion,
            idReparaciones : idReparaciones,
            tipo : tipo,
            tiempo : tiempo,
            mecanico : mecanico,
            vehiculo : vehiculo,
            consumible : consumible,
            estado : estado
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaReparaciones').load(" #tablaReparaciones");
                $('#modalReparacion').modal('hide');
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

$('#formOrdenCobroTaller').submit(function () {

    cobro = $("#idCobroOrdenCobroTaller").val();
    idOrdenesCobrosTaller = $("#idOrdenesCobrosTaller").val();
    empleado = $("#idEmpleadoOrdenCobroTaller").val();
    cliente = $("#idCLienteOrdenCobroTaller").val();
    tipoServicio = $("#idTipoServicioOrdenCobroTaller").val();
    refaccion = $("#idRefaccionOrdenCobroTaller").val();
    total = $("#totalOrdenCobroTaller").val();
    fecha = $("#fechaOrdenCobroTaller").val();
    lugar = $("#lugarEmisionOrdenCobroTaller").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formOrdenCobroTaller.php',
        data: {
            cobro : cobro,
            idOrdenesCobrosTaller : idOrdenesCobrosTaller,
            empleado : empleado,
            cliente : cliente,
            tipoServicio : tipoServicio,
            refaccion : refaccion,
            total : total,
            fecha : fecha,
            lugar : lugar,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaOrdenCobroTaller').load(" #tablaOrdenCobroTaller");
                $('#modalOrdenCobroTaller').modal('hide');
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

$('#formTipoServicio').submit(function () {

    servicio = $("#idServicio").val();
    idTiposservicios = $("#idTiposservicios").val();
    nombre = $("#nombreServicio").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formTipoServicio.php',
        data: {
            servicio : servicio,
            idTiposservicios : idTiposservicios,
            nombre : nombre,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaTipoServicio').load(" #tablaTipoServicio");
                $('#modalTipoServicio').modal('hide');
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

$('#formRecepcionVehiculoNuevo').submit(function () {

    recepcion = $("#idRecepcionVehiculonuevo").val();
    idRecepcionesVehiculosNuevos = $("#idRecepcionesVehiculosNuevos").val();
    identificacion = $("#identificacionRecepcionVehiculoNuevo").val();
    modelo = $("#idModeloRecepcionVehiculoNuevo").val();
    color = $("#colorRecepcionVehiculoNuevo").val();
    condicion = $("#condicionLlegadaRecepcionVehiculoNuevo").val();
    seguro = $("#seguroRecepcionVehiculoNuevo").val();

    $.ajax({
        type: 'POST',
        url: '../Peticiones/formRecepcionVehiculoNuevo.php',
        data: {
            recepcion : recepcion,
            idRecepcionesVehiculosNuevos : idRecepcionesVehiculosNuevos,
            identificacion : identificacion,
            modelo : modelo,
            color : color,
            condicion : condicion,
            seguro : seguro,
        },
        success: function (data) {
            if (data == 'La inserción se completó satisfactoriamente') {
                alertify.success(data);
                $('#tablaRecepcionVehiculoNuevo').load(" #tablaRecepcionVehiculoNuevo");
                $('#modalRecepcionVehiculoNuevo').modal('hide');
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

function eliminarDatosAgenda(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosAgenda.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaAgenda').load(" #tablaAgenda");

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

function eliminarDatosCitas(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosCitas.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaCitas').load(" #tablaCitas");
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

function eliminarDatosCondicionLlegada(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosCondicionLlegada.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaCondicionLlegada').load(" #tablaCondicionLlegada");
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

function eliminarDatosDiagnostico(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosDiagnostico.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaDiagnostico').load(" #tablaDiagnostico");
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

function eliminarDatosReparaciones(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosReparaciones.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaReparaciones').load(" #tablaReparaciones");
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

function eliminarDatosTipoServicio(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosTipoServicio.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaTipoServicio').load(" #tablaTipoServicio");
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

function eliminarDatosOrdenCobroTaller(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosOrdenCobroTaller.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaOrdenCobroTaller').load(" #tablaOrdenCobroTaller");
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

function eliminarDatosRecepcionVehiculoNuevo(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosRecepcionVehiculoNuevo.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaRecepcionVehiculoNuevo').load(" #tablaRecepcionVehiculoNuevo");
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

function eliminarDatosSolicitudRefacciones(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosSolicitudRefacciones.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaSolicitudRefacciones').load(" #tablaSolicitudRefacciones");
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

function eliminarDatosConsumibles(boton){
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosConsumibles.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaConsumibles').load(" #tablaConsumibles");
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

function eliminarDatosHerramientas(boton) {
    valor = boton.value;

    $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarDatosHerramientas.php',
        data: {
            id: valor
        },
        success: function (data) {
            if (data == 'Se borró de forma correcta') {
                alertify.success(data);
                $('#tablaHerramientas').load(" #tablaHerramientas");
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
