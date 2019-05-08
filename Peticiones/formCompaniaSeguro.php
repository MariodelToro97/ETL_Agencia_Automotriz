<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$companiaSeguro = $_POST['companiaSeguro'];
$comp = trim($_POST['idCompaniasSeguras']);
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$TelefonoCompania = $_POST['TelefonoCompania'];
$direccion = $_POST['direccion'];
$localidad = $_POST['localidad'];
$estado = $_POST['estado'];

    $sql = "DELETE FROM companiaSeguros WHERE idCompania = '$comp'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO companiaSeguros (idCompania, Nombre, Correo, Telefono, Direccion, Localidad, Estado)
                                    VALUES ('$companiaSeguro', '$nombre', '$correo', '$TelefonoCompania', '$direccion', '$localidad', '$estado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'COMPANIASEGUROS', CURRENT_TIMESTAMP, '$comp')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
