<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['requisicion'];
$idRequ = trim($_POST['idRequisicionesRevisionesServicios']);
$fecha = $_POST['fecha'];
$entrada = $_POST['entrada'];
$empleado = $_POST['empleado'];

    $sql = "DELETE FROM requisicionRevisionServicios WHERE idRequisicion = '$idRequ'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO requisicionRevisionServicios (idRequisicion, fechaEmision, idOrdenEntrada, idEmpleado)
                                                VALUES ('$id', '$fecha', '$entrada', '$empleado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'REQUISICIONREVISIONSERVICIOS', CURRENT_TIMESTAMP, '$idRequ')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
