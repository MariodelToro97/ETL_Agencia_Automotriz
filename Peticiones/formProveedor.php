<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$proveedor = $_POST['proveedor'];
$proveedores = trim($_POST['idProveedores']);
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$empresa = $_POST['empresa'];

    $sql = "DELETE FROM Proveedores WHERE id_proveedor = '$proveedores'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Proveedores (id_proveedor, Nombre, Telefono, Direccion, Ciudad, Estado_actual, Empresa)
                                VALUES ('$proveedor', '$nombre', '$telefono', '$direccion', '$ciudad', '$estado', '$empresa')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'PROVEEDORES', CURRENT_TIMESTAMP, '$proveedores')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
