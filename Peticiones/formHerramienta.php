<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$herramienta = $_POST['herramienta'];
$herra = trim($_POST['idHerramientas']);
$nombre = $_POST['nombre'];

    $sql = "DELETE FROM Herramientas WHERE id = '$herra'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Herramientas (id, nombreHerramienta) VALUES ('$herramienta', '$nombre')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'HERRAMIENTAS', CURRENT_TIMESTAMP, '$herra')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
