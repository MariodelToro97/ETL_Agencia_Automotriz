<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$cartaFactura = $_POST['cartaFactura'];
$car = trim($_POST['idCartasFacturas']);
$idFactura = $_POST['idFactura'];
$idEmpleado = $_POST['idEmpleado'];
$FechaCarta = $_POST['FechaCarta'];

    $sql = "DELETE FROM cartaFactura WHERE idCartaFactura = '$car'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO cartaFactura (idCartaFactura, idFactura, idEmpleado, fecha)
                            VALUES ('$cartaFactura', '$idFactura', '$idEmpleado', '$FechaCarta')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CARTAFACTURA', CURRENT_TIMESTAMP, '$car')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
