<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$devolucion = $_POST['devolucion'];
$dev = trim($_POST['idDevolucionesClientes']);
$idProducto = $_POST['idProducto'];
$empleado = $_POST['empleado'];
$cliente = $_POST['cliente'];
$razon = $_POST['razon'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$costo = $_POST['costo'];

    $sql = "DELETE FROM devoluciones_automovil WHERE idDevolucion = '$dev'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO devoluciones_automovil (idDevolucion, id_automovil, idEmpleado, idCliente, Razon, fechaDevolucion, Estado_devolucion, costo)
                                            VALUES ('$devolucion', '$idProducto', '$empleado', '$cliente', '$razon', '$fecha', '$estado', '$costo')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'DEVOLUCIONES_AUTOMOVIL', CURRENT_TIMESTAMP, '$dev')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
