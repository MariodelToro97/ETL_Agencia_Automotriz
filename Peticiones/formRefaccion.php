<?php
session_start();
require '../Models/conexionSQL_incorrecto.php';
require '../Models/SQLBueno.php';

$producto = $_POST['producto'];
$productoRef = trim($_POST['idRefacciones']);
$inventario = $_POST['inventario'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$year = $_POST['year'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$venta = $_POST['venta'];
$existencia = $_POST['existencia'];
$descripcion = $_POST['descripcion'];
$minima = $_POST['minima'];
$maxima = $_POST['maxima'];
$fecha = $_POST['fecha'];

    $sql = "DELETE FROM Refacciones WHERE id_producto = '$productoRef'";

    if(sqlsrv_query($conn_sis, $sql)){
        $sql = "INSERT INTO Refacciones (id_producto, id_inventario, id_marca, id_modelo, id_year, Nombre, PrecioCompra, precioVenta, Existencia, descripcion, cantidad_minima, cantidad_maxima, fecha_caducidad)
                                VALUES ('$producto', '$inventario', '$marca', '$modelo', '$year', '$nombre', '$precio', '$venta', '$existencia', '$descripcion', '$minima', '$maxima', '$fecha')";

        if (sqlsrv_query($conn_good, $sql)) {
          $usuario = $_SESSION['user_id'];
          require '../Models/database.php';
          $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'MODIFICACION', 'REFACCIONES', CURRENT_TIMESTAMP, '$productoRef')";
          $result = mysqli_query($conexion, $sql);
            echo "La inserción se completó satisfactoriamente";
        } else {
            echo "No se puede eliminar de la base de datos";
        }
    } else {
        echo "No se puede eliminar de la base de datos";
    }
?>
