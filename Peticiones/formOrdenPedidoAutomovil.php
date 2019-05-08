<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['ordenPedido'];
$idOrden = trim($_POST['idOrdenesPedidosAutomoviles']);
$empleado = $_POST['empleado'];
$coche = $_POST['coche'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$fechallegada = $_POST['fechallegada'];
$estado = $_POST['estado'];
$planta = $_POST['planta'];

    $sql = "DELETE FROM ordenesPedidosAutomovil WHERE idOrdenPedido = '$idOrden'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordenesPedidosAutomovil (idOrdenPedido, idEmpleado, idCoche, fechaOrden, Cantidad, fechaLlegada, Estado, idPlanta)
                                            VALUES ('$id', '$empleado', '$coche', '$fecha', '$cantidad', '$fechallegada', '$estado', '$planta')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENESPEDIDOAUTOMOVIL', CURRENT_TIMESTAMP, '$idOrden')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
