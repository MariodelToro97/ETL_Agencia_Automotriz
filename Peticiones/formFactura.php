<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$idFactura = $_POST['idFactura'];
$Fact = trim($_POST['idFacturas']);
$iva = $_POST['iva'];
$cliente = $_POST['cliente'];
$importe = $_POST['importe'];
$subtotal = $_POST['subtotal'];
$idTipoPago = $_POST['idTipoPago'];
$fecha = $_POST['fecha'];
$empleado = $_POST['empleado'];
$estado = $_POST['estado'];
$lugar = $_POST['lugar'];

    $sql = "DELETE FROM Facturas WHERE idFactura = '$Fact'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Facturas (idFactura, IVA, idCliente, importe, total, idTipoPago, lugarEmision, fecha, idEmpleado, idEstado)
                            VALUES ('$idFactura', '$iva', '$cliente', '$importe', '$subtotal', '$idTipoPago', '$fecha', '$empleado', '$estado', '$lugar')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'FACTURAS', CURRENT_TIMESTAMP, '$Fact')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
