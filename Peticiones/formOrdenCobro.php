<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$orden = $_POST['orden'];
$ord = trim($_POST['idOrdenesCobros']);
$fecha = $_POST['fecha'];
$subtotal = $_POST['subtotal'];
$iva = $_POST['iva'];
$total = $_POST['total'];
$cliente = $_POST['cliente'];
$empleado = $_POST['empleado'];
$producto = $_POST['producto'];
$estado = $_POST['estado'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];

    $sql = "DELETE FROM ordenCobro WHERE id_ordencobro = '$ord'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordenCobro (id_ordencobro, id_producto, id_cliente, id_empleado, fecha_emision, cantidad_producto, subtotal, iva, total, estado)
                                VALUES ('$orden', '$producto', '$cliente', '$empleado', '$fecha', '$cantidad', '$subtotal', '$iva', '$total', '$estado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENCOBRO', CURRENT_TIMESTAMP, '$ord')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
