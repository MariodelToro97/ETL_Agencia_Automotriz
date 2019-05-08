<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['seguro'];
$idSEguro = trim($_POST['idSeguros']);
$descripcion = $_POST['descripcion'];
$compania = $_POST['compania'];

    $sql = "DELETE FROM Seguro WHERE idSeguro = '$idSEguro'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Seguro (idSeguro, Descripcion, idCompania)
                            VALUES ('$id', '$descripcion', '$compania')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'SEGURO', CURRENT_TIMESTAMP, '$idSEguro')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
