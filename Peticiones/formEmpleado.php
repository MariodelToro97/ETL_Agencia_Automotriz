<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$empleado = $_POST['empleado'];
$idEmpleado = trim($_POST['idEmpleados']);
$nombre = $_POST['nombre'];
$rfc = $_POST['rfc'];
$telefono = $_POST['telefono'];
$correoEmpleado = $_POST['correoEmpleado'];
$domicilio = $_POST['domicilio'];
$fechaIngreso = $_POST['fechaIngreso'];
$contrato = $_POST['contrato'];
$turno = $_POST['turno'];
$genero = $_POST['genero'];
$cargo = $_POST['cargo'];
$sueldo = $_POST['sueldo'];
$comision = $_POST['comision'];
$estado = $_POST['estado'];
$departamento = $_POST['departamento'];

    $sql = "DELETE FROM Empleados WHERE idEmpleado = '$idEmpleado' AND id_departamento = '$departamento'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Empleados (idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, idCargo, sueldo_base, comision, Estado, id_departamento)
                            VALUES ('$empleado', '$nombre', '$rfc', '$telefono', '$correoEmpleado', '$domicilio', '$fechaIngreso', '$contrato', '$turno', '$genero', '$cargo', '$sueldo', '$comision', '$estado', '$departamento')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'EMPLEADOS', CURRENT_TIMESTAMP, '$idEmpleado')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
