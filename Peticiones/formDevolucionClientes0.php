<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$devolucion0 = $_POST['devolucion0'];
$dev0 = trim($_POST['idDevolucionesClientes0']);
$idProducto0 = $_POST['idProducto0'];
$empleado0 = $_POST['empleado0'];
$cliente0 = $_POST['cliente0'];
$razon0 = $_POST['razon0'];
$fecha0 = $_POST['fecha0'];
$estado0 = $_POST['estado0'];


  $sql = "DELETE FROM devoluciones_clientes WHERE idDevolucion = '$dev0'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO devoluciones_clientes (idDevolucion, idProducto, idEmpleado, idCliente, Razon, fechaDevolucion, Estado_devolucion)
                                            VALUES ('$devolucion0', '$idProducto0', '$empleado0', '$cliente0', '$razon0', '$fecha0', '$estado0')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'DEVOLUCIONES_CLIENTES', CURRENT_TIMESTAMP, '$dev0')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }


?>
