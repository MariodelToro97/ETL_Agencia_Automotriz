<?php
session_start();

require '../Models/database.php';

$usuario = $_POST['usuario'];
//$usuario = $_SESSION['user_id'];
$password = $_POST['password'];
//$password = $_SESSION['Contra']
if ($_POST['usuario'] == $_SESSION['user_id']) {
  if (!empty($usuario) && !empty($password)) {
    $checar = $conexion -> query("SELECT * FROM usuario WHERE Usuario = '$usuario' AND tipoRol = 1");

    $usuarioEncontrado = $checar -> num_rows;
    $datos = $checar->FETCH_ASSOC();

    if ($usuarioEncontrado == 1 && password_verify($password, $datos['Contrasena'])) {
      $actualizar = $conexion -> query("UPDATE usuario SET etl = 1 WHERE tipoRol = 1");

      if ($actualizar) {
      if ($_SESSION['etl'] == 0) {
          $_SESSION['etl'] = 1;
      }
      $usuario = $_SESSION['user_id'];
      require '../Models/database.php';
      $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario','', '', 'INICIO ETL', '', CURRENT_TIMESTAMP, '')";
      $result = mysqli_query($conexion, $sql);

          echo "ETL Iniciado Correctamente";
      } else {
          echo "Ha ocurrido un error en el inicio del ETL";
      }

    } else {
      echo 'Usuario y/o Contraseña no corresponde al rol de administrador';
    }
  } else {
    echo 'No deje espacios en blanco';
  }
} else {
  echo "El usuario que intenta iniciar el ETL no coincide con el que tiene la sesión iniciada";
}



?>
