<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['orden'];
$idOrden = trim($_POST['idOrdenesLlegadas']);
$empleado = $_POST['empleado'];
$costo = $_POST['costo'];
$fecha = $_POST['fecha'];

    $sql = "DELETE FROM ordenesLlegadaAutomovil WHERE idOrdenEnt = '$idOrden'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordenesLlegadaAutomovil (idOrdenEnt, idEmpleado, Costo, Fecha)
                                            VALUES ('$id', '$empleado', '$costo', '$fecha')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENESLLEGADAAUTOMOVIL', CURRENT_TIMESTAMP, '$idOrden')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
