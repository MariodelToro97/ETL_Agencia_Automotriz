<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';

$id = $_POST['id'];

    $sql = "DELETE FROM ordenesExternas WHERE idRequisicion = '$id'";

    if(sqlsrv_query($conn_sis, $sql)){
      $usuario = $_SESSION['user_id'];
      require '../Models/database.php';
      $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'ELIMINAR', 'ORDENESEXTERNAS', CURRENT_TIMESTAMP, $id)";
      $result = mysqli_query($conexion, $sql);
        echo "El registro se borró de forma correcta";
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
