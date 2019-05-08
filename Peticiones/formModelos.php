<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['idModelo'];
$idModelos = trim($_POST['idModelos']);
$nombre = $_POST['nombre'];
$departamento = $_POST['departamento'];

    $sql = "DELETE FROM catalogoModelos WHERE idModelo = '$idModelos' AND id_departamento = '$departamento'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO catalogoModelos (idModelo, Nombre, id_departamento)
                                    VALUES ('$id', '$nombre', '$departamento')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CATALOGOMODELOS', CURRENT_TIMESTAMP, '$idModelos')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
