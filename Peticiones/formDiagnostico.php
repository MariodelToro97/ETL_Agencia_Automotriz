<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$diagnostico = $_POST['diagnostico'];
$dia = trim($_POST['idDiagnosticos']);
$detalle = $_POST['detalle'];
$mecanico = $_POST['mecanico'];
$vehiculo = $_POST['vehiculo'];

    $sql = "DELETE FROM Diagnostico WHERE id = '$dia'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Diagnostico (id, detalle_auto, id_mecanico, vehiculo)
                                VALUES ('$diagnostico', '$detalle', '$mecanico', '$vehiculo')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'DIAGNOSTICO', CURRENT_TIMESTAMP, '$dia')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
