<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$idAgenda = $_POST['idAgenda'];
$idAge = trim($_POST['idAgendas']);
$idCita = $_POST['idCita'];
$idReparacion = $_POST['idReparacion'];
$idEmpleado = $_POST['idEmpleado'];
$automovilAgenda = $_POST['automovilAgenda'];
$idServicio = $_POST['idServicio'];
$fecha = $_POST['fecha'];

    $sql = "DELETE FROM Agenda WHERE id_agenda = '$idAge'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Agenda (id_agenda, id_cita, id_reparacion, id_empleado, vehiculo, id_servicio, fecha) VALUES ('$idAgenda', '$idCita', '$idReparacion', '$idEmpleado', '$automovilAgenda', '$idServicio', '$fecha')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'AGENDA', CURRENT_TIMESTAMP, '$idAge')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }

    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
