<?php
  session_start();

  require '../Models/conexion.php';

  // realizamos la consulta para obtener el mayor id insertado
  $sql = "SELECT MAX(id) AS id FROM bitacora1";
  $result = mysqli_query($conexion, $sql);

  while ($row = $result->fetch_assoc()) {
      $id = $row['id']."<br>";

  }

  $usuario = $_SESSION['user_id'];

  $sql = "INSERT INTO bitacora1 (id, usuario, fechaentrada, fechaSalida, Accion, nombreTabla, fechaModificacion, idCampo) VALUES ('','$usuario', '', CURRENT_TIMESTAMP, 'DESLOGUEO', '', '', '')";
  $result = mysqli_query($conexion, $sql);
  
  if ($result) {
    echo "correcto";
  }

  session_unset();
  session_destroy();
  header('Location: ../Index.php');

 ?>
