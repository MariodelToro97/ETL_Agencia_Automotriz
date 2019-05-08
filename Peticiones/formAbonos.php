<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$idAbono = $_POST['idAbono'];
$idAb = trim($_POST['idAbonos']);
$idFactura = $_POST['idFactura'];
$concepto = $_POST['concepto'];
$fecha = $_POST['fecha'];
$cargo = $_POST['cargo'];
$abono = $_POST['abono'];
$saldo = $_POST['saldo'];
$idEmpleado = $_POST['idEmpleado'];
$interes = $_POST['interes'];

    $sql = "DELETE FROM Abonos WHERE idAbono = '$idAb'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Abonos (idFactura, Concepto, Fecha, Cargo, Abono, Saldo, idEmpleado, Intereses, idAbono)
                            VALUES ('$idFactura', '$concepto', '$fecha', '$cargo', '$abono','$saldo', '$idEmpleado', '$interes', '$idAbono')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ABONOS', CURRENT_TIMESTAMP, '$idAb')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se PUEDE eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
