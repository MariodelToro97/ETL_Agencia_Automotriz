<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['compra'];
$idCompras = trim($_POST['idCompras']);
$proveedor = $_POST['proveedor'];
$productoCompra = $_POST['productoCompra'];
$pedido = $_POST['pedido'];
$cantidad = $_POST['cantidad'];
$FechaCompra = $_POST['FechaCompra'];

    $sql = "DELETE FROM Compras WHERE id_compras = '$idCompras'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Compras (id_compras, id_proveedor, id_producto, id_pedido, cantidad, fecha_compra)
                            VALUES ('$id', '$proveedor', '$productoCompra', '$pedido', '$cantidad', '$FechaCompra')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'COMPRAS', CURRENT_TIMESTAMP, '$idCompras')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
