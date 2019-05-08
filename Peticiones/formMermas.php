<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$merma = $_POST['merma'];
$mer = trim($_POST['idMermas']);
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$Fecha = $_POST['Fecha'];
$cantidad = $_POST['cantidad'];
$empleado = $_POST['empleado'];

    $sql = "DELETE FROM Mermas WHERE id_merma = '$mer'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Mermas (id_merma, id_producto, id_empleado, descripcion, fecha, cantidad)
                            VALUES ('$merma', '$producto', '$descripcion', '$Fecha', '$cantidad', '$empleado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'MERMAS', CURRENT_TIMESTAMP, '$mer')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
