<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$venta = $_POST['venta'];
$idVenta = trim($_POST['idVentas']);
$producto = $_POST['producto'];
$cliente = $_POST['cliente'];
$empleado = $_POST['empleado'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];
$total = $_POST['total'];

    $sql = "DELETE FROM Ventas WHERE id_venta = '$idVenta'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Ventas (id_venta, id_producto, id_cliente, id_empleado, cantidad, fecha, precio_venta, total)
                            VALUES ('$venta', '$producto', '$cliente', '$empleado', '$cantidad', '$fecha', '$precio', '$total')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'VENTAS', CURRENT_TIMESTAMP, '$idVenta')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
