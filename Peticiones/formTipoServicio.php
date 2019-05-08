<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['servicio'];
$idTipo = trim($_POST['idTiposservicios']);
$nombre = $_POST['nombre'];

    $sql = "DELETE FROM TipoServicios WHERE id = '$idTipo'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO TipoServicios (id, nombreServicio)
                                VALUES ('$id', '$nombre')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'TIPOSERVICIOS', CURRENT_TIMESTAMP, '$idTipo')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
