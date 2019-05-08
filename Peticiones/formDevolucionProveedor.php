<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$devolucionProveedor = $_POST['devolucionProveedor'];
$dev = trim($_POST['idDevolucionesProveedores']);
$producto = $_POST['producto'];
$proveedor = $_POST['proveedor'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$montoTotal = $_POST['montoTotal'];
$estado = $_POST['estado'];
$tipoDevolucion = $_POST['tipoDevolucion'];
$compra = $_POST['compra'];

    $sql = "DELETE FROM devolucion_proveedores WHERE id_devolucion = '$dev'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO devolucion_proveedores (id_devolucion, id_producto, id_proveedor, fecha_devolucion, descripcion, cantidad, precio_unitario, monto_total, estado_devolucion, tipo_devolucion, id_compra)
                                            VALUES ('$devolucionProveedor', '$producto', '$proveedor', '$fecha', '$descripcion', '$cantidad', '$precio', '$montoTotal', '$estado', '$tipoDevolucion', '$compra')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'DEVOLUCION_PROVEEDORES', CURRENT_TIMESTAMP, '$dev')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
