<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$solicitud = $_POST['solicitud'];
$id = trim($_POST['idSolicitudesRefacciones']);
$mecanico = $_POST['mecanico'];
$refaccion = $_POST['refaccion'];
$vehiculo = $_POST['vehiculo'];
$cliente = $_POST['cliente'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];

    $sql = "DELETE FROM solicitudRefacciones WHERE id = '$id'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO solicitudRefacciones (id, id_mecanico, refaccion, vehiculo, cliente, cantidad, fecha_solicitud) VALUES ('$solicitud', '$mecanico', '$refaccion', '$vehiculo', '$cliente', '$cantidad','$fecha')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'SOLICITUDREFACCIONES', CURRENT_TIMESTAMP, '$id')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
