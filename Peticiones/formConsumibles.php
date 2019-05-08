<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$consumible = $_POST['consumible'];
$con = trim($_POST['idConsumibles']);
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

    $sql = "DELETE FROM Consumibles WHERE id = '$con'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Consumibles (id, producto, cantidad) VALUES ('$consumible', '$producto', '$cantidad')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CONSUMIBLES', CURRENT_TIMESTAMP, '$con')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }

?>
