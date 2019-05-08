<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$cobro = $_POST['cobro'];
$cob = trim($_POST['idOrdenesCobrosTaller']);
$empleado = $_POST['empleado'];
$cliente = $_POST['cliente'];
$tipoServicio = $_POST['tipoServicio'];
$refaccion = $_POST['refaccion'];
$total = $_POST['total'];
$fecha = $_POST['fecha'];
$lugar = $_POST['lugar'];

    $sql = "DELETE FROM ordenCobroTaller WHERE id = '$cob'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordenCobroTaller (id, id_empleado, cliente, tipo_servicios, refacciones, totalpagar, fecha_emision, lugarEmision)
                                VALUES ('$cobro', '$empleado', '$cliente', '$tipoServicio', '$refaccion', '$total', '$fecha', '$lugar')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENCOBROTALLER', CURRENT_TIMESTAMP, '$cob')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
