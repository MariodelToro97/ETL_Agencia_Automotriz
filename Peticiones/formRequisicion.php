<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$requisicion = $_POST['requisicion'];
$Requ = trim($_POST['idRequisiciones']);
$empleado = $_POST['empleado'];
$registro = $_POST['registro'];
$automovil = $_POST['automovil'];
$cliente = $_POST['cliente'];
$cantidad = $_POST['cantidad'];
$nombre = $_POST['nombre'];

    $sql = "DELETE FROM Requisicion WHERE id_requisicion = '$Requ'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Requisicion (id_requisicion, id_empleado, fecha_registrorequi, automovil, cliente, cantidad_piezas, nombre_piezas)
                                VALUES ('$requisicion', '$empleado', '$registro', '$automovil', '$cliente', '$cantidad', '$nombre')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'REQUISICION', CURRENT_TIMESTAMP, '$Requ')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
