<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['orden'];
$idOrden = trim($_POST['idOrdenesSalidasAutomoviles']);
$factura = $_POST['factura'];
$empleado = $_POST['empleado'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

    $sql = "DELETE FROM ordenesSalidaAutomovil WHERE idOrdenSalidaAutomovil = '$idOrden'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordenesSalidaAutomovil (idOrdenSalidaAutomovil, idFactura, idEmpleado, Fecha, Hora)
                                            VALUES ('$id', '$factura', '$empleado', '$fecha', '$hora')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENESSALIDAAUTOMOVIL', CURRENT_TIMESTAMP, '$idOrden')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
