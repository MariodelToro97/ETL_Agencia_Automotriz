<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$cita = $_POST['cita'];
$idCcita = trim($_POST['idCitas']);
$recepcionista = $_POST['recepcionista'];
$Cliente = $_POST['Cliente'];
$Fecha = $_POST['Fecha'];
$horaCita = $_POST['horaCita'];
$tiposervicio = $_POST['tiposervicio'];
$descripcion = $_POST['descripcion'];
$mecanico = $_POST['mecanico'];

    $sql = "DELETE FROM Citas WHERE idCita = '$idCcita'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Citas (idCita, idEmpleado, cliente, fecha, hora, tipo_servicio, descripcion_Servicio, id_mecanico) VALUES ('$cita', '$recepcionista', '$Cliente', '$Fecha', '$horaCita', '$tiposervicio', '$descripcion', '$mecanico')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CITAS', CURRENT_TIMESTAMP, '$idCcita')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }

    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
