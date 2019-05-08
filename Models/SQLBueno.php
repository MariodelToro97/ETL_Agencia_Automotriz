<?php

  $servername = 'localhost';
  $connectionInfo = array("Database" => "zcorrecto", "UID"=>"", "PWD"=>"", "CharacterSet"=>"UTF-8");
  $conn_good = sqlsrv_connect($servername, $connectionInfo);

  if ($conn_good) {
    //echo "conexion exitosa";
  }else {
    //echo "fallo de conexion";
    die(print_r(sqlsrv_errors(), true));
  }

?>
