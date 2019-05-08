<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$orden = $_POST['orden'];
$idOrden = trim($_POST['idOrdenesSalidasRefacciones']);
$empleado = $_POST['empleado'];
$FechaSalidaRef = $_POST['FechaSalidaRef'];
$cantidad = $_POST['cantidad'];
$nombre = $_POST['nombre'];
$ordenExterna = $_POST['ordenExterna'];
$precioUni = $_POST['precioUni'];
$total = $_POST['total'];

    $sql = "DELETE FROM ordensalida WHERE id_orden_salida = '$idOrden'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordensalida (id_orden_salida, id_empleado, fecha_salida, cantidad_piezas, nombre_piezas, id_requisicion, precio_unitario, total)
                                VALUES ('$orden', '$empleado', '$FechaSalidaRef', '$cantidad', '$nombre', '$ordenExterna', '$precioUni', '$total')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENSALIDA', CURRENT_TIMESTAMP, '$idOrden')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
