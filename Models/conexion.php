<?php

	$server = 'localhost: 3306';
	$username = 'root';
	$password = '';
	$database = 'etl';

	$conexion = new mysqli($server,$username,$password,$database);
	$conexion -> set_charset("utf8");
?>