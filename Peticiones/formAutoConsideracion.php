<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$autoConsideracion = $_POST['autoConsideracion'];
$autoCon = trim($_POST['idAutosConsideracion']);
$idEmpleado = $_POST['idEmpleado'];
$fecha = $_POST['fecha'];
$monto = $_POST['monto'];
$estado = $_POST['estado'];
$idClientes = $_POST['idClientes'];
$chasis = $_POST['chasis'];

$sql = "DELETE FROM autoConsideracion WHERE idAutoConsideracion = '$autoCon'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO autoConsideracion (idAutoConsideracion, idEmpleado, Fecha, Monto, estado, idCliente, noChasis)
                                        VALUES ('$autoConsideracion', '$idEmpleado', '$fecha', '$monto', '$estado','$idClientes', '$chasis')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'AUTOCONSIDERACION', CURRENT_TIMESTAMP, '$autoCon')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
