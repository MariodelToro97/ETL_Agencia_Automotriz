<?php
try {
  require 'conexion.php';
} catch (PDOException $e) {
  die('Conexión Fallida: '.$e->getMessage());
}

 ?>
