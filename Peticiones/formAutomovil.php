<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$idAutomovil = $_POST['idAutomovil'];
$idAuto = trim($_POST['idAutos']);
$idModelo = $_POST['idModelo'];
$precioAutomovil = $_POST['precioAutomovil'];
$marca = $_POST['marca'];
$Year = $_POST['Year'];
$CantidadActual = $_POST['CantidadActual'];
$CantidadMinima = $_POST['CantidadMinima'];
$seguroAutomovil = $_POST['seguroAutomovil'];
$CantidadMaxima = $_POST['CantidadMaxima'];
$puertas = $_POST['puertas'];
$pasajeros = $_POST['pasajeros'];
$Peso = $_POST['Peso'];
$Asientos = $_POST['Asientos'];
$rendimiento = $_POST['rendimiento'];
$cilindros = $_POST['cilindros'];
$tipoAuto = $_POST['tipoAuto'];

    $sql = "DELETE FROM Automovil WHERE ideAutomovil = '$idAuto'";
    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Automovil(ideAutomovil, idModelo, Precio, Marca, idYear, cantidadActual, cantidadMinima, idSeguro, cantidadMaxima, noPuertas, CapacidadPas, Peso, noAsientos, Rendimiento, Cilindros, idTipo)
        VALUES ('$idAutomovil', '$idModelo', '$precioAutomovil', '$marca', '$Year', '$CantidadActual', '$CantidadMinima', '$seguroAutomovil', '$CantidadMaxima', '$puertas', '$pasajeros', '$Peso',
          '$Asientos', '$rendimiento', '$cilindros','$tipoAuto')";
          if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'AUTOMOVIL', CURRENT_TIMESTAMP, '$idAuto')";
          $result = mysqli_query($conexion, $sql);
              echo "La inserción se completó satisfactoriamente";
          } else {
              echo "No se puede eliminar de la base de datos";
          }

    }else {
        echo "No se puede eliminar de la base de datos";
    }


?>
