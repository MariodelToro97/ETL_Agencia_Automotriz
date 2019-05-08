<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$recepcion = $_POST['recepcion'];
$recepcionNuevo = trim($_POST['idRecepcionesVehiculosNuevos']);
$identificacion = $_POST['identificacion'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$condicion = $_POST['condicion'];
$seguro = $_POST['seguro'];

    $sql = "DELETE FROM RecepcionVehiculoNuevos WHERE id = '$recepcionNuevo'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO RecepcionVehiculoNuevos (id, numero_identificacion, id_modelo, color, condicionLlegada, Seguro)
                                        VALUES ('$recepcion', '$identificacion', '$modelo', '$color', '$condicion', '$seguro')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'RECEPCIONVEHICULONUEVOS', CURRENT_TIMESTAMP, '$recepcionNuevo')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
