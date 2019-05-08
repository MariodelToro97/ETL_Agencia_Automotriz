<?php
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: ../Views/Principal.php');
}

require '../Models/database.php';

$usuario = $_POST['user'];
$password = $_POST['password'];

if (!empty($usuario) && !empty($password)) {
  $checar = $conexion -> query("SELECT * FROM usuario WHERE Usuario = '$usuario'");

  $usuarioEncontrado = $checar -> num_rows;
  $datos = $checar->FETCH_ASSOC();

  if ($usuarioEncontrado == 1 && password_verify($password, $datos['Contrasena'])) {
  //if ($checar) {
    $_SESSION['user_id'] = $datos['Usuario'];
    $_SESSION['rol'] = $datos['tipoRol'];
    $_SESSION['Contra'] = $datos['Contrasena'];
    $_SESSION['etl'] = $datos['etl'];

    $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario',CURRENT_TIMESTAMP, '', 'LOGIN', '', '', '')";
    $result = mysqli_query($conexion, $sql);

    echo "Acceso Correcto";
  } else {
    echo 'Usuario y/o Contraseña incorrectos';
  }
} else {
  echo 'No deje espacios en blanco';
}

?>
