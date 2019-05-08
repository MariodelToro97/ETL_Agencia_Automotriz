<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$factura = $_POST['factura'];
$fact = trim($_POST['idFacturasProveedores']);
$proveedor = $_POST['proveedor'];
$empleado = $_POST['empleado'];
$pedido = $_POST['pedido'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];

    $sql = "DELETE FROM FacturasProveedor WHERE id_factura = '$fact'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO FacturasProveedor (id_factura, id_proveedor, id_empleado, id_pedido, fecha_registro, precio_unitario, cantidad, total)
                                        VALUES ('$factura', '$proveedor', '$empleado', '$pedido', '$fecha', '$precio', '$cantidad', '$total')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'FACTURASPROVEEDOR', CURRENT_TIMESTAMP, '$fact')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
