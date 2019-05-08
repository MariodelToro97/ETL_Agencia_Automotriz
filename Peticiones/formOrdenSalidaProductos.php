<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['orden'];
$idOrden = trim($_POST['idOrdenesSalidasProductos']);
$facturaSalida = $_POST['facturaSalida'];
$fecha = $_POST['fecha'];
$empleado = $_POST['empleado'];
$estado = $_POST['estado'];
$ordenExterna = $_POST['ordenExterna'];

    $sql = "DELETE FROM ordenSalidaProductos WHERE idOrdenSalida = '$idOrden'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordenSalidaProductos (idOrdenSalida, idFactura, fecha, idEmpleado, Estado, idOrdenExterna)
                                        VALUES ('$id', '$facturaSalida', '$fecha', '$empleado', '$estado', '$ordenExterna')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENSALIDAPRODUCTOS', CURRENT_TIMESTAMP, '$idOrden')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
