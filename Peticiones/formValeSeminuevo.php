<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['vale'];
$idVale = trim($_POST['idValesSeminuevos']);
$consideracion = $_POST['consideracion'];
$fecha = $_POST['fecha'];
$empleado = $_POST['empleado'];
$factura = $_POST['factura'];
$monto = $_POST['monto'];

    $sql = "DELETE FROM valeAutoSeminuevo WHERE idVale = '$idVale'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO valeAutoSeminuevo (idVale, idAutoConsideracion, Fecha, idEmpleado, idFactura, Monto)
                                        VALUES ('$id', '$consideracion', '$fecha', '$empleado', '$factura', '$monto')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'VALEAUTOSEMINUEVO', CURRENT_TIMESTAMP, '$idVale')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
