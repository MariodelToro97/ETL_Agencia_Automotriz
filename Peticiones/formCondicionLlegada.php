<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$condicion = $_POST['condicion'];
$con = trim($_POST['idCondicionesLlegadas']);
$kilometraje = $_POST['kilometraje'];
$gasolina = $_POST['gasolina'];
$luces = $_POST['luces'];
$espejos = $_POST['espejos'];
$caucho = $_POST['caucho'];
$faro = $_POST['faro'];
$placa = $_POST['placa'];
$cliente = $_POST['cliente'];
$empleado = $_POST['empleado'];

    $sql = "DELETE FROM CondiciondeLlegada WHERE id = '$con'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO CondiciondeLlegada (id, kilometraje, gasolina, luces, espejos, cauchos, faros, placa, id_cliente, id_empleado)
                                    VALUES ('$condicion', '$kilometraje', '$gasolina', '$luces', '$espejos', '$caucho', '$faro', '$placa', '$cliente', '$empleado')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'CONDICIONLLEGADA', CURRENT_TIMESTAMP, '$con')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
