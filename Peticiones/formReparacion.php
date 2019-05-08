<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$reparacion = $_POST['reparacion'];
$reparaciones = trim($_POST['idReparaciones']);
$tipo = $_POST['tipo'];
$tiempo = $_POST['tiempo'];
$mecanico = $_POST['mecanico'];
$vehiculo = $_POST['vehiculo'];
$consumible = $_POST['consumible'];
$estado = $_POST['estado'];

   $sql = "DELETE FROM Reparaciones Where id_reparacion = '$reparaciones'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Reparaciones (id_reparacion, tipo_servicio, tiempo_duracion, id_empleado, id_vehiculo, consumibles_aplicados, id_estado)
                                VALUES ('$reparacion', '$tipo', '$tiempo', '$mecanico', '$vehiculo', '$consumible', '$estado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'REPARACIONES', CURRENT_TIMESTAMP, '$reparaciones')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
