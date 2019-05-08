<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$inventario = $_POST['inventario'];
$inve = trim($_POST['idInventarios']);
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$minimo = $_POST['minimo'];
$maximo = $_POST['maximo'];

    $sql = "DELETE FROM Inventario WHERE id_inventario = '$inve'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Inventario (id_inventario, nombre, descripcion, almacen_min, almacen_max)
                                VALUES ('$inventario', '$nombre', '$descripcion', '$minimo', '$maximo')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'INVENTARIO', CURRENT_TIMESTAMP, '$inve')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
