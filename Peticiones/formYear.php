<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['idYear'];
$idAn = trim($_POST['idAnos']);
$year = $_POST['year'];
$departamento = $_POST['departamento'];



    $sql = "DELETE FROM catalogoAnos WHERE idYear = '$idAn' AND id_departamento = '$departamento'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO catalogoAnos (idYear, Ano, id_departamento)
                                VALUES ('$id', '$year', '$departamento')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CATALOGOANOS', CURRENT_TIMESTAMP, '$idAn')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }


?>
