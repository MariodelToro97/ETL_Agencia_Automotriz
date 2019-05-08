<?php

  $servername = 'localhost';
  $connectionInfo = array("Database" => "zincorrecto", "UID"=>"", "PWD"=>"", "CharacterSet"=>"UTF-8");
  $conn_sis = sqlsrv_connect($servername, $connectionInfo);

  if ($conn_sis) {
    //echo "conexion exitosa";
  }else {
    //echo "fallo de conexion";
    die(print_r(sqlsrv_errors(), true));
  }

?>
