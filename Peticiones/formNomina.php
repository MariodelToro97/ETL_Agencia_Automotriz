<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['nomina'];
$idNomina = trim($_POST['idNominas']);
$percepcion = $_POST['percepcion'];
$empleado = $_POST['empleado'];
$periodicidad = $_POST['periodicidad'];
$salario = $_POST['salario'];
$bono = $_POST['bono'];
$deduccion = $_POST['deduccion'];
$total = $_POST['total'];
$fecha = $_POST['fecha'];
$departamento = $_POST['departamento'];

    $sql = "DELETE FROM Nomina WHERE idNomina = '$idNomina' AND id_departamento = '$departamento'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Nomina (idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha, id_departamento)
                            VALUES ('$id', '$percepcion', '$empleado', '$periodicidad', '$salario', '$bono', '$deduccion', '$total', '$fecha', '$departamento')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'NOMINA', CURRENT_TIMESTAMP, '$idNomina')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
