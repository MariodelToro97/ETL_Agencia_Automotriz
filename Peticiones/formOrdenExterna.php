<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$id = $_POST['requisicion'];
$idExt = trim($_POST['idOrdenesExternas']);
$departamento = $_POST['departamento'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$total = $_POST['total'];
$empleado = $_POST['empleado'];
$cliente = $_POST['cliente'];
$factura = $_POST['factura'];

    $sql = "DELETE FROM ordenesExternas WHERE idRequisicion = '$idExt'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO ordenesExternas (idRequisicion, idDepartamento, fecha, Descripcion, Total, idEmpleadoRecep, idCliente, idFactura)
                                    VALUES ('$id', '$departamento', '$fecha', '$descripcion', '$total', '$empleado', '$cliente', '$factura')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'ORDENESEXTERNAS', CURRENT_TIMESTAMP, '$idExt')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
