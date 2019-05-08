<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['idmarca'];
$idMar = trim($_POST['idMarcas']);
$descripcion = $_POST['marca'];
$departamento = $_POST['departamento'];

    $sql = "DELETE FROM catalogoMarcas WHERE idMarca = '$idMar' AND id_departamento = '$departamento'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO catalogoMarcas (idMarca, Descripcion, id_departamento)
                                    VALUES ('$id', '$descripcion', '$departamento')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CATALOGOMARCAS', CURRENT_TIMESTAMP, '$idMar')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
