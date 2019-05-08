<?php
try {
  	$server = 'localhost: 3306';
	$username = 'root';
	$password = '';
	$database = 'ventas';

	$conexionVentas = new mysqli($server,$username,$password,$database);
	$conexionVentas -> set_charset("utf8");
} catch (PDOException $e) {
  die('Conexión Fallida: '.$e->getMessage());
}

 ?>