<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$pedido = $_POST['pedido'];
$pedidos = trim($_POST['idPedidosProveedores']);
$producto = $_POST['producto'];
$proveedor = $_POST['proveedor'];
$empleado = $_POST['empleado'];
$fecha = $_POST['fecha'];
//$monto = $_POST['monto'];
$cantidad = $_POST['cantidad'];
$tiempo = $_POST['tiempo'];
$estado = $_POST['estado'];

    $sql = "DELETE FROM PedidoProveedores WHERE id_pedido = '$pedidos'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO PedidoProveedores (id_pedido, id_producto, id_proveedor, id_empleado, fecha, cantidad, tiempo_estimado, estado)
                                        VALUES ('$pedido', '$producto', '$proveedor', '$empleado', '$fecha', '$cantidad', '$tiempo', '$estado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'PEDIDOPROVEEDORES', CURRENT_TIMESTAMP, '$pedidos')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
