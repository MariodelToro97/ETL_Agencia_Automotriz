<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['automovil'];
$chasis = $_POST['chasis'];
$chasisSerie = trim($_POST['idSeriesAutos']);
$motor = $_POST['motor'];
$factura = $_POST['factura'];
$estado = $_POST['estado'];
$ubicacion = $_POST['ubicacion'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];

    $sql = "DELETE FROM SerieAutos WHERE noChasis = '$chasisSerie'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO SerieAutos (idAutomovil, noChasis, noMotor, idFactura, idEstadoVenta, idUbicacion, FechaLlegada, idEstadoAuto)
                                VALUES ('$id', '$chasis', '$motor', '$factura', '$estado', '$ubicacion', '$fecha', '$estado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'SERIEAUTOS', CURRENT_TIMESTAMP, '$chasisSerie')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
