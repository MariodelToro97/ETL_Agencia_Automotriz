<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$idCliente = $_POST['idCliente'];
$Cliente = trim($_POST['idClientes']);
$nombreCliente = $_POST['nombreCliente'];
$rfc = $_POST['rfc'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$fechaCliente = $_POST['fechaCliente'];
$domicilio = $_POST['domicilio'];
$genero = $_POST['genero'];
$departamento = $_POST['departamento'];

    $sql = "DELETE FROM Clientes WHERE idCliente = '$Cliente' AND id_departamento = ".$departamento;

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Clientes (idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero, id_departamento)
                            VALUES ('$idCliente', '$nombreCliente', '$rfc', '$telefono', '$correo', '$fechaCliente','$domicilio', '$genero', '$departamento')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CLIENTES', CURRENT_TIMESTAMP, '$Cliente')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
