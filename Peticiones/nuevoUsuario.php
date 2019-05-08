<?php
require '../Models/database.php';

$usuario = $_POST['usuario'];
$contra = $_POST['password'];
$conf = $_POST['confirmPassword'];
$rol = $_POST['rol'];

if (!empty($usuario) && !empty($contra) && !empty($conf)) {
  if ($contra == $conf) {
    $checar = $conexion -> query("SELECT Usuario, Contrasena FROM usuario WHERE UPPER(Usuario) = UPPER('.$usuario.')");

    $usuarioEncontrado = $checar -> num_rows;
    $crypt = password_hash($contra, PASSWORD_BCRYPT);

    if ($usuarioEncontrado == 0) {
      $insertar = $conexion -> query("INSERT INTO usuario (Usuario, Contrasena, tipoRol, etl) VALUES('$usuario','$crypt', '$rol', 0)");

      if ($insertar) {
        echo 'La inserción se completó satisfactoriamente';
      } else {
        echo 'Ese usuario ya se encuentra en la base de datos';
      }
    } else {
      echo 'Ese usuario ya se encuentra en la base de datos';
    }

  } else {
    echo 'Las contraseñas no coinciden';
  }
} else {
  echo 'No deje espacios en blanco';
}
 ?>
