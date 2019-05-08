<?php
// 1) Conexión
require 'conexionSQL.php';
if ($conexión = mysql_connect("localhost", "root", "", 3306)){
echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";


echo "Clientes";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM clientes";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

    $numeros = "/^[0-9]+/";
    $sexo = "/[0-1]/";
    $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
    $numero_telefono = "/^[0-9]{10}$/";
    $ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
    $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
    $sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
    $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";


echo '<table border=1><tr><td>idCliente</td><td>Nombre</td><td>apellidoPat</td><td>apellidoMat</td><td>RFC</td>
<td>Telefono</td><td>Correo</td><td>fechaNac</td><td>Domicilio</td><td>Genero</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idCliente = utf8_encode($fila["idCliente"]);
$NombreCompleto = utf8_encode($fila["Nombre"]);
$apellidoPat = utf8_encode($fila["apellidoPat"]);
$apellidoMat = utf8_encode($fila["apellidoMat"]);
$RFC = utf8_encode($fila["RFC"]);
$Telefono = utf8_encode($fila["Telefono"]);
$Correo = utf8_encode($fila["Correo"]);
$fechaNac = utf8_encode($fila["fechaNac"]);
$Domicilio = utf8_encode($fila["Domicilio"]);
$Genero = utf8_encode($fila["Genero"]);

$NombreCompleto = $NombreCompleto ." ". $apellidoPat ." ". $apellidoMat;

if (preg_match($numeros, $idCliente) && preg_match($letras, $NombreCompleto) && preg_match($rfc_nuevo, $RFC) && preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($numeros, $fechaNac) && preg_match($ubicacion, $Domicilio) && preg_match($sexo, $Genero)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO Clientes(idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero)
  VALUES ('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

    echo "<tr>";
          echo '<td>'.$fila["idCliente"].'</td>';
          echo '<td>'.$fila["Nombre"].'</td>';
          echo '<td>'.$fila["apellidoPat"].'</td>';
          echo '<td>'.$fila["apellidoMat"].'</td>';
          echo '<td>'.$fila["RFC"].'</td>';
          echo '<td>'.$fila["Telefono"].'</td>';
          echo '<td>'.$fila["Correo"].'</td>';
          echo '<td>'.$fila["fechaNac"].'</td>';
          echo '<td>'.$fila["Domicilio"].'</td>';
          echo '<td>'.$fila["Genero"].'</td>';
  echo "</tr>";

  $sql = "INSERT INTO Clientes(idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero)
  VALUES ('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}


}




///////////////////////////////////////////////////////////////////////////////////////////

echo "Tipo de pago";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM tipopago";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/[0-9]/";
$ubicacion = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
echo '<table border=1><tr><td>idTipo</td><td>Descripcion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes

while ($fila = mysql_fetch_array($datos)){

$idTipo = $fila["idtipoPago"];
$Descripcion = utf8_encode($fila["Descripcion"]);


      if (preg_match($numeros, $idTipo) && preg_match($ubicacion, $Descripcion)) {
        require 'conexionSQL.php';
        echo "correcto";

        $sql = "INSERT INTO TipoPago(idTipo, Descripcion) VALUES ('$idTipo', '$Descripcion')";
        $ejecutar = sqlsrv_query($conn_sis, $sql );

      }else {
        require 'conexionMYSQL_incorrecto.php';
        echo "<tr>";
                echo '<td>'.$fila["idtipoPago"].'</td>';
                echo '<td>'.$fila["Descripcion"].'</td>';

        echo "</tr>";

        echo "incorrecto";
        $sql = "INSERT INTO TipoPago(idTipo, Descripcion)
        VALUES ('$idTipo', '$Descripcion')";

        $ejecutar = sqlsrv_query($conn_sis, $sql );

      }



}

echo "</table>";



///////////////////////////////////////////////////////////////////////
echo "Catalogo estado factura";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM catalogo_estado_factura";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/[0-9]/";
$ubicacion = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

echo '<table border=1><tr><td>idEstado</td><td>Descripcion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idTipo = $fila["idEstado"];
$Descripcion = utf8_encode($fila["Descripcion"]);

if (preg_match($numeros, $idTipo) && preg_match($ubicacion, $Descripcion)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO catalogo_estado_factura(idEstado, Descripcion)
  VALUES ('$idTipo', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idEstado"].'</td>';
          echo '<td>'.$fila["Descripcion"].'</td>';
  echo "</tr>";

  $sql = "INSERT INTO catalogo_estado_factura(idEstado, Descripcion)
  VALUES ('$idTipo', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}



    if ($ejecutar) {
      echo "correcto";
    }

}



//////////////////////////////////////////////////////////////////////////

echo "Contratos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM contratos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/[0-9]/";
$ubicacion = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

echo '<table border=1><tr><td>idContrato</td><td>Descripcion</td><td>Tiempo</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idContrato = $fila["idContrato"];
$Descripcion = utf8_encode($fila["Descripcion"]);
$Tiempo = $fila["Tiempo"];

    if (preg_match($numeros, $idContrato) && preg_match($ubicacion, $Descripcion) && preg_match($numeros, $Tiempo)) {
      require 'conexionSQL.php';
      echo "correcto";

      $sql = "INSERT INTO contratos(idContrato, Descripcion, Tiempo)
      VALUES ('$idContrato', '$Descripcion', '$Tiempo')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

      echo "<tr>";
              echo '<td>'.$fila["idContrato"].'</td>';
              echo '<td>'.$fila["Descripcion"].'</td>';
              echo '<td>'.$fila["Tiempo"].'</td>';


      echo "</tr>";

      $sql = "INSERT INTO contratos(idContrato, Descripcion, Tiempo)
      VALUES ('$idContrato', '$Descripcion', '$Tiempo')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );
    }


}
//////////////////////////////////////////////////////////////////////////



echo "Turnos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM turnoempleados";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/[0-9]/";
$ubicacion = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
echo '<table border=1><tr><td>idTurno</td><td>Descripcion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){



$idTurno = $fila["idTurno"];
$Descripcion = utf8_encode($fila["Descripcion"]);

    if (preg_match($numeros, $idTurno) && preg_match($ubicacion, $Descripcion)) {
      require 'conexionSQL.php';
      echo "correcto";

      $sql = "INSERT INTO TurnoEmpleados(idTurno, Descripcion)
      VALUES ('$idTurno', '$Descripcion')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

      echo "<tr>";
              echo '<td>'.$fila["idTurno"].'</td>';
              echo '<td>'.$fila["Descripcion"].'</td>';

      echo "</tr>";

      $sql = "INSERT INTO TurnoEmpleados(idTurno, Descripcion)
      VALUES ('$idTurno', '$Descripcion')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

    }

}
//////////////////////////////////////////////////////////////////////////


echo "Departamento";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM departamentos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/[0-9]/";
$ubicacion = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
echo '<table border=1><tr><td>id_departamento</td><td>Descripcion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$id_departamento = $fila["idDepartamento"];
$Descripcion = utf8_encode($fila["Descripcion"]);

    if (preg_match($numeros, $id_departamento) && preg_match($ubicacion, $Descripcion)) {
      require 'conexionSQL.php';
      echo "correcto";

      $sql = "INSERT INTO departamento(id_departamento, Descripcion)
      VALUES ('$id_departamento', '$Descripcion')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

      echo "<tr>";
              echo '<td>'.$fila["idDepartamento"].'</td>';
              echo '<td>'.$fila["Descripcion"].'</td>';

      echo "</tr>";

      $sql = "INSERT INTO departamento(id_departamento, Descripcion)
      VALUES ('$id_departamento', '$Descripcion')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );


    }


}
//////////////////////////////////////////////////////////////////////////


echo "Cargos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM cargos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/[0-9]/";
$ubicacion = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
echo '<table border=1><tr><td>idCargo</td><td>Descripcion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idCargo = $fila["idCargo"];
$Descripcion = utf8_encode($fila["Descripcion"]);

if (preg_match($numeros, $idCargo) && preg_match($ubicacion, $Descripcion)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO cargos(idCargo, Descripcion)
  VALUES ('$idCargo', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idCargo"].'</td>';
          echo '<td>'.$fila["Descripcion"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO cargos(idCargo, Descripcion)
  VALUES ('$idCargo', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}


}

//////////////////////////////////////////////////////////////////////////



echo "Empleados";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM empleados";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9]+/";
$sexo = "/[0-1]/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{8}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
$rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
$fecha = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/";

echo '<table border=1><tr><td>idEmpleado</td><td>Nombre</td><td>apellidoPat</td><td>apellidoMat</td><td>RFC</td>
<td>Telefono</td><td>Correo</td><td>Domicilio</td><td>fechaIngreso</td><td>idContrato</td><td>idTurno</td>
<td>Genero</td><td>id_departamento</td><td>sueldo_base</td><td>comision</td><td>Estado</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idEmpleado = $fila["idEmpleado"];
$Nombre = utf8_encode($fila["Nombre"]);
$apellidoPat = utf8_encode($fila["apellidoPat"]);
$apellidoMat = utf8_encode($fila["apellidoMat"]);
$RFC = $fila["RFC"];
$Telefono = $fila["Telefono"];
$Correo = $fila["Correo"];
$Domicilio = $fila["Domicilio"];
$fechaIngreso = $fila["fechaIngreso"];
$idContrato = $fila["idContrato"];
$idTurno = $fila["idTurno"];
$Genero = $fila["Genero"];
$id_departamento = $fila["idCargo"];
$sueldo_base = $fila["sueldo_base"];
$comision = $fila["comision"];
$Estado = $fila["Estado"];

$Nombre = $Nombre ." ". $apellidoPat ." ". $apellidoMat;

    if (preg_match($numeros, $idEmpleado) && preg_match($letras, $Nombre) && preg_match($rfc_nuevo, $RFC) &&
    preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($ubicacion, $Domicilio)
    && preg_match($numeros, $fechaIngreso) && preg_match($numeros, $idContrato) && preg_match($numeros, $idTurno)
    && preg_match($sexo, $Genero) && preg_match($numeros, $id_departamento) && preg_match($sexo, $Estado)) {
    require 'conexionSQL.php';
    echo "correcto";

      $sql = "INSERT INTO Empleados(idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, id_departamento, sueldo_base, comision, Estado)
      VALUES ('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$id_departamento', '$sueldo_base', '$comision', '$Estado')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );


    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

      echo "<tr>";
              echo '<td>'.$fila["idEmpleado"].'</td>';
              echo '<td>'.$fila["Nombre"].'</td>';
              echo '<td>'.$fila["apellidoPat"].'</td>';
              echo '<td>'.$fila["apellidoMat"].'</td>';
              echo '<td>'.$fila["RFC"].'</td>';
              echo '<td>'.$fila["Telefono"].'</td>';
              echo '<td>'.$fila["Correo"].'</td>';
              echo '<td>'.$fila["Domicilio"].'</td>';
              echo '<td>'.$fila["fechaIngreso"].'</td>';
              echo '<td>'.$fila["idContrato"].'</td>';
              echo '<td>'.$fila["idTurno"].'</td>';
              echo '<td>'.$fila["Genero"].'</td>';
              echo '<td>'.$fila["idCargo"].'</td>';
              echo '<td>'.$fila["sueldo_base"].'</td>';
              echo '<td>'.$fila["comision"].'</td>';
              echo '<td>'.$fila["Estado"].'</td>';

      echo "</tr>";

      $Nombre = $Nombre ." ". $apellidoPat ." ". $apellidoMat;

      $sql = "INSERT INTO Empleados(idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, id_departamento, sueldo_base, comision, Estado)
      VALUES ('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$id_departamento', '$sueldo_base', '$comision', '$Estado')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

    }


}


//////////////////////////////////////////////////////////////////////////

echo "Facturas";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM facturas";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
$sexo = "/[0-1]/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{8}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
$rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/";



echo '<table border=1><tr><td>idFactura</td><td>IVA</td><td>idCliente</td><td>importe</td><td>total</td>
<td>idTipoPago</td><td>lugarEmision</td><td>fecha</td><td>idEmpleado</td><td>idEstado</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idFactura = $fila["idFacturas"];
$IVA = $fila["IVA"];
$idCliente = $fila["idCliente"];
$importe = $fila["Importe"];
$total = $fila["Total"];
$idTipoPago = $fila["idTipoPago"];
$lugarEmision = utf8_encode($fila["lugarEmision"]);
$fecha = $fila["Fecha"];
$idEmpleado = $fila["idEmpleado"];
$idEstado = $fila["idEstado"];


  if (preg_match($numeros, $idFactura) && preg_match($correcto_decimales, $IVA) && preg_match($numeros, $idCliente)
&& preg_match($correcto_decimales, $importe) && preg_match($correcto_decimales, $total) && preg_match($numeros, $idTipoPago) && preg_match($letras, $lugarEmision)
&& preg_match($numeros, $fecha) && preg_match($numeros, $idEmpleado) && preg_match($numeros, $idEstado)) {

      require 'conexionSQL.php';
      echo "correcto";

      $sql = "INSERT INTO Facturas(idFactura, IVA, idCliente, importe, total, idTipoPago, lugarEmision, fecha, idEmpleado, idEstado)
      VALUES ('$idFactura', '$IVA', '$idCliente', '$importe', '$total', '$idTipoPago', '$lugarEmision', '$fecha', '$idEmpleado', '$idEstado')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

  }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";
      echo "<tr>";
              echo '<td>'.$fila["idFacturas"].'</td>';
              echo '<td>'.$fila["IVA"].'</td>';
              echo '<td>'.$fila["idCliente"].'</td>';
              echo '<td>'.$fila["Importe"].'</td>';
              echo '<td>'.$fila["Total"].'</td>';
              echo '<td>'.$fila["idTipoPago"].'</td>';
              echo '<td>'.$fila["lugarEmision"].'</td>';
              echo '<td>'.$fila["Fecha"].'</td>';
              echo '<td>'.$fila["idEmpleado"].'</td>';
              echo '<td>'.$fila["idEstado"].'</td>';

      echo "</tr>";

      $sql = "INSERT INTO Facturas(idFactura, IVA, idCliente, importe, total, idTipoPago, lugarEmision, fecha, idEmpleado, idEstado)
      VALUES ('$idFactura', '$IVA', '$idCliente', '$importe', '$total', '$idTipoPago', '$lugarEmision', '$fecha', '$idEmpleado', '$idEstado')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );
    }

}


//////////////////////////////////////////////////////////////////////////


echo "Ordenes Externas";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM ordenesexternas";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";



echo '<table border=1><tr><td>idRequisicion</td><td>idDepartamento</td><td>fecha</td><td>Descripcion</td><td>Total</td>
<td>idEmpleadoRecep</td><td>idCliente</td><td>idFactura</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idRequisicion = $fila["idRequisicion"];
$idDepartamento = $fila["idDepartamento"];
$fecha = $fila["Fecha"];
$Descripcion = utf8_encode($fila["Descripcion"]);
$Total = $fila["Total"];
$idEmpleadoRecep = $fila["idEmpleadoRecep"];
$idCliente = utf8_encode($fila["idCliente"]);
$idFactura = $fila["idFactura"];

    if (preg_match($numeros, $idRequisicion) && preg_match($numeros, $idDepartamento) && preg_match($numeros, $fecha)
    && preg_match($letras, $Descripcion) && preg_match($correcto_decimales, $Total) && preg_match($numeros, $idEmpleadoRecep)
    && preg_match($numeros, $idCliente) && preg_match($numeros, $idFactura) ) {
    require 'conexionSQL.php';
    echo "cirrecto";
    $sql = "INSERT INTO ordenesExternas(idRequisicion, idDepartamento, fecha, Descripcion, Total, idEmpleadoRecep, idCliente, idFactura)
    VALUES ('$idRequisicion', '$idDepartamento', '$fecha', '$Descripcion', '$Total', '$idEmpleadoRecep', '$idCliente', '$idFactura')";

    $ejecutar = sqlsrv_query($conn_sis, $sql );

    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

      echo "<tr>";
              echo '<td>'.$fila["idRequisicion"].'</td>';
              echo '<td>'.$fila["idDepartamento"].'</td>';
              echo '<td>'.$fila["Fecha"].'</td>';
              echo '<td>'.$fila["Descripcion"].'</td>';
              echo '<td>'.$fila["Total"].'</td>';
              echo '<td>'.$fila["idEmpleadoRecep"].'</td>';
              echo '<td>'.$fila["idCliente"].'</td>';
              echo '<td>'.$fila["idFactura"].'</td>';

      echo "</tr>";

      $sql = "INSERT INTO ordenesExternas(idRequisicion, idDepartamento, fecha, Descripcion, Total, idEmpleadoRecep, idCliente, idFactura)
      VALUES ('$idRequisicion', '$idDepartamento', '$fecha', '$Descripcion', '$Total', '$idEmpleadoRecep', '$idCliente', '$idFactura')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );
    }


}

/////////////////////////////////////////////////////////////////////////


echo "Ordenes Salidas de productos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM ordensalidaproductos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

echo '<table border=1><tr><td>idOrdenSalida</td><td>idFactura</td><td>fecha</td><td>idEmpleado</td><td>Estado</td>
<td>idOrdenExterna</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idOrdenSalida = $fila["idOrdenSalida"];
$idFactura = $fila["idFactura"];
$fecha = $fila["Fecha"];
$idEmpleado = $fila["idEmpleado"];
$Estado = $fila["Estado"];
$idOrdenExterna = $fila["idOrdenExterna"];

      if (preg_match($numeros, $idOrdenSalida) && preg_match($numeros, $idFactura) && preg_match($numeros, $fecha)
      && preg_match($numeros, $idEmpleado) && preg_match($numeros, $Estado) && preg_match($numeros, $idOrdenExterna)) {
        require 'conexionSQL.php';
        echo "cirrecto";

        $sql = "INSERT INTO ordenSalidaProductos(idOrdenSalida, idFactura, fecha, idEmpleado, Estado, idOrdenExterna)
        VALUES ('$idOrdenSalida', '$idFactura', '$fecha', '$idEmpleado', '$Estado', '$idOrdenExterna')";

        $ejecutar = sqlsrv_query($conn_sis, $sql );
      }else {
        require 'conexionMYSQL_incorrecto.php';
        echo "incorrecto";


        echo "<tr>";
                echo '<td>'.$fila["idOrdenSalida"].'</td>';
                echo '<td>'.$fila["idFactura"].'</td>';
                echo '<td>'.$fila["Fecha"].'</td>';
                echo '<td>'.$fila["idEmpleado"].'</td>';
                echo '<td>'.$fila["Estado"].'</td>';
                echo '<td>'.$fila["idOrdenExterna"].'</td>';



        echo "</tr>";

        $sql = "INSERT INTO ordenSalidaProductos(idOrdenSalida, idFactura, fecha, idEmpleado, Estado, idOrdenExterna)
        VALUES ('$idOrdenSalida', '$idFactura', '$fecha', '$idEmpleado', '$Estado', '$idOrdenExterna')";

        $ejecutar = sqlsrv_query($conn_sis, $sql );


      }

}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////


echo "Ordenes Salidas de automoviles";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM ordenessalidaautomovil";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";


echo '<table border=1><tr><td>idOrdenSalidaAutomoviles</td><td>idFactura</td><td>idEmpleado</td><td>Fecha</td><td>Hora</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idOrdenSalidaAutomovil = $fila["idordenesSalidaAutomovil"];
$idFactura = $fila["idFactura"];
$idEmpleado = $fila["idEmpleado"];
$Fecha = $fila["Fecha"];
$Hora = $fila["Hora"];

    if (preg_match($numeros, $idOrdenSalidaAutomovil) && preg_match($numeros, $idFactura) && preg_match($numeros, $idEmpleado)) {
      require 'conexionSQL.php';
      echo "correcto";

      $sql = "INSERT INTO ordenesSalidaAutomovil(idOrdenSalidaAutomovil, idFactura, idEmpleado, Fecha, Hora)
      VALUES ('$idOrdenSalidaAutomovil', '$idFactura', '$idEmpleado', '$Fecha', '$Hora')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );


    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

      echo "<tr>";
              echo '<td>'.$fila["idordenesSalidaAutomovil"].'</td>';
              echo '<td>'.$fila["idFactura"].'</td>';
              echo '<td>'.$fila["idEmpleado"].'</td>';
              echo '<td>'.$fila["Fecha"].'</td>';
              echo '<td>'.$fila["Hora"].'</td>';

      echo "</tr>";

      $sql = "INSERT INTO ordenesSalidaAutomovil(idOrdenSalidaAutomovil, idFactura, idEmpleado, Fecha, Hora)
      VALUES ('$idOrdenSalidaAutomovil', '$idFactura', '$idEmpleado', '$Fecha', '$Hora')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );
    }

}

/////////////////////////////////////////////////////////////////////////////////////


echo "Carta factura";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM cartafactura";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9,:]+/";

echo '<table border=1><tr><td>idCartaFactura</td><td>idFactura</td><td>idEmpleado</td><td>Fecha</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idCartaFactura = $fila["idcartaFactura"];
$idFactura = $fila["idFactura"];
$idEmpleado = $fila["idEmpleado"];
$fecha = $fila["Fecha"];

    if (preg_match($numeros, $idCartaFactura) && preg_match($numeros, $idFactura) && preg_match($numeros, $idEmpleado)
    && preg_match($numeros, $fecha)) {
      require 'conexionSQL.php';
      echo "correcto";

      $sql = "INSERT INTO cartafactura(idCartaFactura, idFactura, idEmpleado, fecha)
      VALUES ('$idCartaFactura', '$idFactura', '$idEmpleado', '$Fecha')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

        echo "<tr>";
              echo '<td>'.$fila["idcartaFactura"].'</td>';
              echo '<td>'.$fila["idFactura"].'</td>';
              echo '<td>'.$fila["idEmpleado"].'</td>';
              echo '<td>'.$fila["Fecha"].'</td>';

       echo "</tr>";

       $sql = "INSERT INTO cartafactura(idCartaFactura, idFactura, idEmpleado, fecha)
       VALUES ('$idCartaFactura', '$idFactura', '$idEmpleado', '$Fecha')";

       $ejecutar = sqlsrv_query($conn_sis, $sql );

    }


}
/////////////////////////////////////////////////////////////////////////


echo "Auto Consideracion";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM autoconsideracion";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
echo '<table border=1><tr><td>idAutoConsideracion</td><td>idEmpleado</td><td>Fecha</td><td>Monto</td><td>estado</td>
<td>idCliente</td><td>noChasis</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idAutoConsideracion = $fila["idautoConsideracion"];
$idEmpleado = $fila["idEmpleado"];
$Fecha = $fila["Fecha"];
$Monto = $fila["Monto"];
$Estado = $fila["Estado"];
$idCliente = $fila["idCliente"];
$noChasis = $fila["noChasis"];

      if (preg_match($numeros, $idAutoConsideracion) && preg_match($numeros, $idEmpleado) && preg_match($numeros, $Fecha)
      && preg_match($correcto_decimales, $Monto) && preg_match($numeros, $Estado) && preg_match($numeros, $idCliente) && preg_match($letras, $noChasis) ) {
        require 'conexionSQL.php';
        echo "correcto";

        $sql = "INSERT INTO autoconsideracion(idAutoConsideracion, idEmpleado, Fecha, Monto, Estado, idCliente, noChasis)
        VALUES ('$idAutoConsideracion', '$idEmpleado', '$Fecha', '$Monto', '$Estado', '$idCliente', '$noChasis')";

        $ejecutar = sqlsrv_query($conn_sis, $sql );

      }else {
        require 'conexionMYSQL_incorrecto.php';
        echo "incorrecto";

        echo "<tr>";
                echo '<td>'.$fila["idautoConsideracion"].'</td>';
                echo '<td>'.$fila["idEmpleado"].'</td>';
                echo '<td>'.$fila["Fecha"].'</td>';
                echo '<td>'.$fila["Monto"].'</td>';
                echo '<td>'.$fila["Estado"].'</td>';
                echo '<td>'.$fila["idCliente"].'</td>';
                echo '<td>'.$fila["noChasis"].'</td>';

        echo "</tr>";

        $sql = "INSERT INTO autoconsideracion(idAutoConsideracion, idEmpleado, Fecha, Monto, Estado, idCliente, noChasis)
        VALUES ('$idAutoConsideracion', '$idEmpleado', '$Fecha', '$Monto', '$Estado', '$idCliente', '$noChasis')";

        $ejecutar = sqlsrv_query($conn_sis, $sql );
      }

}

/////////////////////////////////////////////////////////////////////////////////////

echo "Vale Auto seminuevo";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM valeautoseminuevo";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

echo '<table border=1><tr><td>idVale</td><td>idAutoConsideracion</td><td>Fecha</td><td>idEmpleado</td><td>idFactura</td>
<td>Monto</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idVale = $fila["idVale"];
$idAutoConsideracion = $fila["idAutoConsideracion"];
$Fecha = $fila["Fecha"];
$idEmpleado = $fila["idEmpleado"];
$idFactura = $fila["idFactura"];
$Monto = $fila["Monto"];

    if (preg_match($numeros, $idVale) && preg_match($numeros, $idAutoConsideracion) && preg_match($numeros, $Fecha)
    && preg_match($numeros, $idEmpleado) && preg_match($numeros, $idFactura) && preg_match($correcto_decimales, $Monto)) {
      require 'conexionSQL.php';
      echo "correcto";

      $sql = "INSERT INTO valeautoseminuevo(idVale, idAutoConsideracion, Fecha, idEmpleado, idFactura, Monto)
      VALUES ('$idVale', '$idAutoConsideracion', '$Fecha', '$idEmpleado', '$idFactura', '$Monto')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

    }else {
      require 'conexionMYSQL_incorrecto.php';
      echo "incorrecto";

      echo "<tr>";
              echo '<td>'.$fila["idVale"].'</td>';
              echo '<td>'.$fila["idAutoConsideracion"].'</td>';
              echo '<td>'.$fila["Fecha"].'</td>';
              echo '<td>'.$fila["idEmpleado"].'</td>';
              echo '<td>'.$fila["idFactura"].'</td>';
              echo '<td>'.$fila["Monto"].'</td>';

      echo "</tr>";

      $sql = "INSERT INTO valeautoseminuevo(idVale, idAutoConsideracion, Fecha, idEmpleado, idFactura, Monto)
      VALUES ('$idVale', '$idAutoConsideracion', '$Fecha', '$idEmpleado', '$idFactura', '$Monto')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );
    }


}

/////////////////////////////////////////////////////////////////////////////////////


echo "Modelos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM catalogomodelos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";

echo '<table border=1><tr><td>idModelo</td><td>Nombre</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idModelo = $fila["idModelos"];
$Nombre = $fila["Nombre"];

if (preg_match($numeros, $idModelo) && preg_match($letras, $Nombre) ) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO catalogomodelos(idModelo, Nombre)
  VALUES ('$idModelo', '$Nombre')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idModelos"].'</td>';
          echo '<td>'.$fila["Nombre"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO catalogomodelos(idModelo, Nombre)
  VALUES ('$idModelo', '$Nombre')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}


}

/////////////////////////////////////////////////////////////////////



echo "Marcas";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM catalogomarcas";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";

echo '<table border=1><tr><td>idMarca</td><td>Descripcion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idMarca = $fila["idMarca"];
$Descripcion = $fila["Descripcion"];

if (preg_match($numeros, $idMarca) && preg_match($letras, $Descripcion) ) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO catalogomarcas(idMarca, Descripcion)
  VALUES ('$idMarca', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );


}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idMarca"].'</td>';
          echo '<td>'.$fila["Descripcion"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO catalogomarcas(idMarca, Descripcion)
  VALUES ('$idMarca', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}

}

//////////////////////////////////////////////////////////////////


echo "Anos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM catalogoanos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";

echo '<table border=1><tr><td>idYear</td><td>Año</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idYear = $fila["idAnos"];
$Año = $fila["Ano"];

if (preg_match($numeros, $idYear) && preg_match($letras, $Año)) {
  require 'conexionSQL.php';
  echo "correcto";

    $sql = "INSERT INTO catalogoanos(idYear, Año)
    VALUES ('$idYear', '$Año')";

    $ejecutar = sqlsrv_query($conn_sis, $sql );


}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idAnos"].'</td>';
          echo '<td>'.$fila["Ano"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO catalogoanos(idYear, Año)
  VALUES ('$idYear', '$Año')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}

}

/////////////////////////////////////////////////////////////////////


echo "Catalogo tipo autos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM cat_tipo_auto";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";
echo '<table border=1><tr><td>idTipo</td><td>Descripcion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){



$idTipo = $fila["idTipo"];
$Descripcion = utf8_encode($fila["Descripcion"]);

if (preg_match($numeros, $idTipo) && preg_match($letras, $Descripcion)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO cat_tipo_auto(idTipo, Descripcion)
  VALUES ('$idTipo', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idTipo"].'</td>';
          echo '<td>'.$fila["Descripcion"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO cat_tipo_auto(idTipo, Descripcion)
  VALUES ('$idTipo', '$Descripcion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}


///////////////////////////////////////////////////////////////////////


echo "Catalogo compañia seguros";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM cat_companiaseguros";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{9}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";



echo '<table border=1><tr><td>idCompañia</td><td>Nombre</td><td>Correo</td><td>Telefono</td><td>Direccion</td>
<td>Localidad</td><td>Estado</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idCompañia = $fila["idCompania"];
$Nombre = utf8_encode($fila["Nombre"]);
$Correo = utf8_encode($fila["Correo"]);
$Telefono = utf8_encode($fila["Telefono"]);
$Direccion = utf8_encode($fila["Direccion"]);
$Localidad = utf8_encode($fila["Localidad"]);
$Estado = utf8_encode($fila["Estado"]);

if (preg_match($numeros, $idCompañia) && preg_match($letras, $Nombre) && preg_match($email, $Correo)
&& preg_match($numero_telefono, $Telefono) && preg_match($ubicacion, $Direccion) && preg_match($letras, $Localidad)
&& preg_match($letras, $Estado) ) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO compañiaseguros(idCompañia, Nombre, Correo, Telefono, Direccion, Localidad, Estado)
  VALUES ('$idCompañia', '$Nombre', '$Correo', '$Telefono', '$Direccion', '$Localidad', '$Estado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idCompania"].'</td>';
          echo '<td>'.$fila["Nombre"].'</td>';
          echo '<td>'.$fila["Correo"].'</td>';
          echo '<td>'.$fila["Telefono"].'</td>';
          echo '<td>'.$fila["Direccion"].'</td>';
          echo '<td>'.$fila["Localidad"].'</td>';
          echo '<td>'.$fila["Estado"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO compañiaseguros(idCompañia, Nombre, Correo, Telefono, Direccion, Localidad, Estado)
  VALUES ('$idCompañia', '$Nombre', '$Correo', '$Telefono', '$Direccion', '$Localidad', '$Estado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}


}


///////////////////////////////////////////////////////////////////////


echo "Catalogo seguro";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM seguro";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
echo '<table border=1><tr><td>idSeguro</td><td>Descripcion</td><td>idCompañia</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idSeguro = $fila["idSeguro"];
$Descripcion = utf8_encode($fila["Descripcion"]);
$idCompañia = utf8_encode($fila["idCompania"]);

if (preg_match($numeros, $idSeguro) && preg_match($letras, $Descripcion) && preg_match($numeros, $idCompañia) ) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO seguro(idSeguro, Descripcion, idCompañia)
  VALUES ('$idSeguro', '$Descripcion', '$idCompañia')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idSeguro"].'</td>';
          echo '<td>'.$fila["Descripcion"].'</td>';
          echo '<td>'.$fila["idCompania"].'</td>';


  echo "</tr>";

  $sql = "INSERT INTO seguro(idSeguro, Descripcion, idCompañia)
  VALUES ('$idSeguro', '$Descripcion', '$idCompañia')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}


}

//////////////////////////////////////////////////////////////////////


echo "Automovil";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM cat_automoviles";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{9}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

echo '<table border=1><tr><td>ideAutomovil</td><td>idModelo</td><td>Precio</td><td>Marca</td>
<td>idYear</td><td>cantidadActual</td><td>cantidadMínima</td><td>idSeguro</td><td>cantidadMaxima</td><td>noPuertas</td>
<td>CapacidadPas</td><td>Peso</td><td>noAsientos</td><td>Rendimiento</td><td>Cilindros</td><td>idTipo</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

echo "</tr>";

$ideAutomovil = $fila["idAutomovil"];
$idModelo = utf8_encode($fila["idModelo"]);
$Precio = $fila["Precio"];
$Marca = $fila["Marca"];
$idYear = $fila["idYear"];
$cantidadActual = $fila["cantidadActual"];
$cantidadMínima = $fila["cantidadMinima"];
$idSeguro = $fila["idSeguro"];
$cantidadMaxima = $fila["cantidadMaxima"];
$noPuertas = $fila["noPuertas"];
$CapacidadPas = $fila["CapacidadPas"];
$Peso = $fila["Peso"];
$noAsientos = $fila["noAsientos"];
$Rendimiento = $fila["Rendimiento"];
$Cilindros = $fila["Cilindros"];
$idTipo = $fila["idTipoAutomovil"];

if (preg_match($numeros, $ideAutomovil) && preg_match($numeros, $idModelo) && preg_match($correcto_decimales, $Precio)
&& preg_match($numeros, $Marca) && preg_match($numeros, $idYear) && preg_match($numeros, $cantidadActual)
&& preg_match($numeros, $cantidadMínima) && preg_match($numeros, $idSeguro) && preg_match($numeros, $cantidadMaxima)
&& preg_match($numeros, $noPuertas) && preg_match($numeros, $CapacidadPas) && preg_match($correcto_decimales, $Peso)
&& preg_match($numeros, $noAsientos) && preg_match($correcto_decimales, $Rendimiento) && preg_match($numeros, $Cilindros)
&& preg_match($numeros, $idTipo)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO Automovil(ideAutomovil, idModelo, Precio, Marca, idYear, cantidadActual, cantidadMínima, idSeguro, cantidadMaxima, noPuertas, CapacidadPas, Peso, noAsientos, Rendimiento, Cilindros, idTipo)
  VALUES ('$ideAutomovil', '$idModelo', '$Precio', '$Marca', '$idYear', '$cantidadActual', '$cantidadMínima', '$idSeguro', '$cantidadMaxima', '$noPuertas', '$CapacidadPas', '$Peso', '$noAsientos', '$Rendimiento', '$Cilindros', $idTipo)";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idAutomovil"].'</td>';
          echo '<td>'.$fila["idModelo"].'</td>';
          echo '<td>'.$fila["Precio"].'</td>';
          echo '<td>'.$fila["Marca"].'</td>';
          echo '<td>'.$fila["idYear"].'</td>';
          echo '<td>'.$fila["cantidadActual"].'</td>';
          echo '<td>'.$fila["cantidadMinima"].'</td>';
          echo '<td>'.$fila["idSeguro"].'</td>';
          echo '<td>'.$fila["cantidadMaxima"].'</td>';
          echo '<td>'.$fila["noPuertas"].'</td>';
          echo '<td>'.$fila["CapacidadPas"].'</td>';
          echo '<td>'.$fila["Peso"].'</td>';
          echo '<td>'.$fila["noAsientos"].'</td>';
          echo '<td>'.$fila["Rendimiento"].'</td>';
          echo '<td>'.$fila["Cilindros"].'</td>';
          echo '<td>'.$fila["idTipoAutomovil"].'</td>';

          $sql = "INSERT INTO Automovil(ideAutomovil, idModelo, Precio, Marca, idYear, cantidadActual, cantidadMínima, idSeguro, cantidadMaxima, noPuertas, CapacidadPas, Peso, noAsientos, Rendimiento, Cilindros, idTipo)
          VALUES ('$ideAutomovil', '$idModelo', '$Precio', '$Marca', '$idYear', '$cantidadActual', '$cantidadMínima', '$idSeguro', '$cantidadMaxima', '$noPuertas', '$CapacidadPas', '$Peso', '$noAsientos', '$Rendimiento', '$Cilindros', $idTipo)";

          $ejecutar = sqlsrv_query($conn_sis, $sql );


}

}

////////////////////////////////////////////////////////////////////////


echo "Catalogo estado venta";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM catalogoestadoventa";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

echo '<table border=1><tr><td>idEstadoVenta</td><td>estado_venta</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){



$idEstadoVenta = $fila["idEstadoVenta"];
$estado_venta = utf8_encode($fila["estadoVenta"]);

if (preg_match($numeros, $idEstadoVenta) && preg_match($letras, $estado_venta)) {
  require 'conexionSQL.php';
  echo "correcto";
  $sql = "INSERT INTO CatalogoEdoVenta(idEstadoVenta, estado_venta)
  VALUES ('$idEstadoVenta', '$estado_venta')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";
  echo "<tr>";
          echo '<td>'.$fila["idEstadoVenta"].'</td>';
          echo '<td>'.$fila["estadoVenta"].'</td>';

  echo "</tr>";
  $sql = "INSERT INTO CatalogoEdoVenta(idEstadoVenta, estado_venta)
  VALUES ('$idEstadoVenta', '$estado_venta')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}


}


////////////////////////////////////////////////////////////////////////

echo "ubicacion";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM catalogoubicacionauto";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
echo '<table border=1><tr><td>idUbicacion</td><td>Ubicacion</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idUbicacion = $fila["idUbicacion"];
$Ubicacion = utf8_encode($fila["Ubicacion"]);

if (preg_match($numeros, $idUbicacion) && preg_match($letras, $Ubicacion)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO UbicacionAuto(idUbicacion, Ubicacion)
  VALUES ('$idUbicacion', '$Ubicacion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";
  echo "<tr>";
          echo '<td>'.$fila["idUbicacion"].'</td>';
          echo '<td>'.$fila["Ubicacion"].'</td>';
  echo "</tr>";

  $sql = "INSERT INTO UbicacionAuto(idUbicacion, Ubicacion)
  VALUES ('$idUbicacion', '$Ubicacion')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}


////////////////////////////////////////////////////////////////////////


echo "catalogo estado automovil";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM catalogoestadoautomovil";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

echo '<table border=1><tr><td>idEstado</td><td>Estado</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idEstado = $fila["idEstado"];
$Estado = utf8_encode($fila["Estado"]);

if (preg_match($numeros, $idEstado) && preg_match($letras, $Estado)) {
  require 'conexionSQL.php';
  echo "correcto";
  $sql = "INSERT INTO catalogoestadoautomovil(idEstado, Estado)
  VALUES ('$idEstado', '$Estado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idEstado"].'</td>';
          echo '<td>'.$fila["Estado"].'</td>';

  echo "</tr>";
  $sql = "INSERT INTO catalogoestadoautomovil(idEstado, Estado)
  VALUES ('$idEstado', '$Estado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );


}

}


//////////////////////////////////////////////////////////////////////77


echo "serie autos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM serieautos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";

echo '<table border=1><tr><td>idAutomovil</td><td>noChasis</td><td>noMotor</td><td>idFactura</td>
<td>idEstadoVenta</td><td>idUbicacion</td><td>FechaLlegada</td><td>idEstadoAuto</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idAutomovil = $fila["idAutomovil"];
$noChasis = utf8_encode($fila["noChasis"]);
$noMotor = utf8_encode($fila["noMotor"]);
$idFactura = utf8_encode($fila["idFactura"]);
$idEstadoVenta = utf8_encode($fila["idEstadoVenta"]);
$idUbicacion = utf8_encode($fila["idUbicacion"]);
$FechaLlegada = utf8_encode($fila["FechaLlegada"]);
$idEstadoAuto = utf8_encode($fila["idEstadoAuto"]);

if (preg_match($numeros, $idAutomovil) && preg_match($letras, $noChasis) && preg_match($letras, $noMotor)
&& preg_match($numeros, $idFactura) && preg_match($numeros, $idEstadoVenta) && preg_match($numeros, $idUbicacion)
&& preg_match($letras, $FechaLlegada) && preg_match($numeros, $idEstadoAuto)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO serieautos(idAutomovil, noChasis, noMotor, idFactura, idEstadoVenta, idUbicacion, FechaLlegada, idEstadoAuto)
  VALUES ('$idAutomovil', '$noChasis', '$noMotor', '$idFactura', '$idEstadoVenta', '$idUbicacion', '$FechaLlegada', '$idEstadoAuto')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idAutomovil"].'</td>';
          echo '<td>'.$fila["noChasis"].'</td>';
          echo '<td>'.$fila["noMotor"].'</td>';
          echo '<td>'.$fila["idFactura"].'</td>';
          echo '<td>'.$fila["idEstadoVenta"].'</td>';
          echo '<td>'.$fila["idUbicacion"].'</td>';
          echo '<td>'.$fila["FechaLlegada"].'</td>';
          echo '<td>'.$fila["idEstadoAuto"].'</td>';

  echo "</tr>";
  $sql = "INSERT INTO serieautos(idAutomovil, noChasis, noMotor, idFactura, idEstadoVenta, idUbicacion, FechaLlegada, idEstadoAuto)
  VALUES ('$idAutomovil', '$noChasis', '$noMotor', '$idFactura', '$idEstadoVenta', '$idUbicacion', '$FechaLlegada', '$idEstadoAuto')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}


//////////////////////////////////////////////////////////////////////77


echo "orden llegada automoviles";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM ordenesllegadaautomovil";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";


echo '<table border=1><tr><td>idOrdenEnt</td><td>idEmpleado</td><td>Costo</td><td>Fecha</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){



$idOrdenEnt = $fila["idOrdenEnt"];
$idEmpleado = utf8_encode($fila["idEmpleado"]);
$Costo = utf8_encode($fila["Costo"]);
$Fecha = utf8_encode($fila["Fecha"]);

if (preg_match($numeros, $idOrdenEnt) && preg_match($numeros, $idEmpleado) && preg_match($correcto_decimales, $Costo)
&& preg_match($numeros, $Fecha)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO ordenesllegadaautomovil(idOrdenEnt, idEmpleado, Costo, Fecha)
  VALUES ('$idOrdenEnt', '$idEmpleado', '$Costo', '$Fecha')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";
  echo "<tr>";
          echo '<td>'.$fila["idOrdenEnt"].'</td>';
          echo '<td>'.$fila["idEmpleado"].'</td>';
          echo '<td>'.$fila["Costo"].'</td>';
          echo '<td>'.$fila["Fecha"].'</td>';

  echo "</tr>";
  $sql = "INSERT INTO ordenesllegadaautomovil(idOrdenEnt, idEmpleado, Costo, Fecha)
  VALUES ('$idOrdenEnt', '$idEmpleado', '$Costo', '$Fecha')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}

//////////////////////////////////////////////////////////////////////77


echo "requisicion revision servicios";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM requisicionrevisionservicios";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";


echo '<table border=1><tr><td>idRequisicion</td><td>fechaEmision</td><td>idOrdenEntrada</td><td>idEmpleado</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idRequisicion = $fila["idRequisicion"];
$fechaEmision = utf8_encode($fila["fechaEmision"]);
$idOrdenEntrada = utf8_encode($fila["idOrdenEntrada"]);
$idEmpleado = utf8_encode($fila["idEmpleado"]);

if (preg_match($numeros, $idRequisicion) && preg_match($numeros, $fechaEmision) && preg_match($numeros, $idOrdenEntrada)
&& preg_match($numeros, $idEmpleado)) {
  require 'conexionSQL.php';
  echo "correcto";
  $sql = "INSERT INTO requisicionrevisionservicios(idRequisicion, fechaEmision, idOrdenEntrada, idEmpleado)
  VALUES ('$idRequisicion', '$fechaEmision', '$idOrdenEntrada', '$idEmpleado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idRequisicion"].'</td>';
          echo '<td>'.$fila["fechaEmision"].'</td>';
          echo '<td>'.$fila["idOrdenEntrada"].'</td>';
          echo '<td>'.$fila["idEmpleado"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO requisicionrevisionservicios(idRequisicion, fechaEmision, idOrdenEntrada, idEmpleado)
  VALUES ('$idRequisicion', '$fechaEmision', '$idOrdenEntrada', '$idEmpleado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}

}


//////////////////////////////////////////////////////////////////////77


echo "catalogo de plantas";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM cat_plantas";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{10}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";


echo '<table border=1><tr><td>idPlanta</td><td>Nombre</td><td>Telefono</td><td>Domicilio</td><td>Correo</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idPlanta = $fila["idPlanta"];
$Nombre = utf8_encode($fila["Nombre"]);
$Telefono = utf8_encode($fila["Telefono"]);
$Domicilio = utf8_encode($fila["Domicilio"]);
$Correo = utf8_encode($fila["Correo"]);

if (preg_match($numeros, $idPlanta) && preg_match($letras, $Nombre) && preg_match($numero_telefono, $Telefono)
&& preg_match($ubicacion, $Domicilio) && preg_match($email, $Correo)) {
  require 'conexionSQL.php';
  echo "correcto";
  $sql = "INSERT INTO plantas(idPlanta, Nombre, Telefono, Domicilio, Correo)
  VALUES ('$idPlanta', '$Nombre', '$Telefono', '$Domicilio', '$Correo')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";
  echo "<tr>";
          echo '<td>'.$fila["idPlanta"].'</td>';
          echo '<td>'.$fila["Nombre"].'</td>';
          echo '<td>'.$fila["Telefono"].'</td>';
          echo '<td>'.$fila["Domicilio"].'</td>';
          echo '<td>'.$fila["Correo"].'</td>';

  echo "</tr>";

  $sql = "INSERT INTO plantas(idPlanta, Nombre, Telefono, Domicilio, Correo)
  VALUES ('$idPlanta', '$Nombre', '$Telefono', '$Domicilio', '$Correo')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}

}


/////////////////////////////////////////////////////////////////////77


echo "ordenespedidoautomovil";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM ordenespedidosautomovil";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{10}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";


echo '<table border=1><tr><td>idOrdenPedido</td><td>idEmpleado</td><td>idCoche</td><td>fechaOrden</td><td>Cantidad</td>
<td>fechaLlegada</td><td>Estado</td><td>idPlanta</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){



$idOrdenPedido = $fila["idOrdenPedido"];
$idEmpleado = utf8_encode($fila["idEmpleado"]);
$idCoche = utf8_encode($fila["idCoche"]);
$fechaOrden = utf8_encode($fila["fechaOrden"]);
$Cantidad = utf8_encode($fila["Cantidad"]);
$fechaLlegada = utf8_encode($fila["fechaLlegada"]);
$Estado = utf8_encode($fila["Estado"]);
$idPlanta = utf8_encode($fila["idPlanta"]);

if (preg_match($numeros, $idOrdenPedido) && preg_match($numeros, $idEmpleado) && preg_match($numeros, $idCoche)
&& preg_match($numeros, $fechaOrden) && preg_match($numeros, $Cantidad) && preg_match($numeros, $fechaLlegada)
&& preg_match($numeros, $Estado) && preg_match($numeros, $idPlanta)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO ordenespedidosautomovil(idOrdenPedido, idEmpleado, idCoche, fechaOrden, Cantidad, fechaLlegada, Estado, idPlanta)
  VALUES ('$idOrdenPedido', '$idEmpleado', '$idCoche', '$fechaOrden', '$Cantidad', '$fechaLlegada', '$Estado', '$idPlanta')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";
  echo "<tr>";
          echo '<td>'.$fila["idOrdenPedido"].'</td>';
          echo '<td>'.$fila["idEmpleado"].'</td>';
          echo '<td>'.$fila["idCoche"].'</td>';
          echo '<td>'.$fila["fechaOrden"].'</td>';
          echo '<td>'.$fila["Cantidad"].'</td>';
          echo '<td>'.$fila["fechaLlegada"].'</td>';
          echo '<td>'.$fila["Estado"].'</td>';
          echo '<td>'.$fila["idPlanta"].'</td>';

  echo "</tr>";
  $sql = "INSERT INTO ordenespedidosautomovil(idOrdenPedido, idEmpleado, idCoche, fechaOrden, Cantidad, fechaLlegada, Estado, idPlanta)
  VALUES ('$idOrdenPedido', '$idEmpleado', '$idCoche', '$fechaOrden', '$Cantidad', '$fechaLlegada', '$Estado', '$idPlanta')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}


/////////////////////////////////////////////////////////////////////77


echo "devoluciones automovil";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM devolucionesautomovil";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);

$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{10}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
echo '<table border=1><tr><td>idDevolucion</td><td>id_automovil</td><td>idEmpleado</td><td>idCliente</td><td>Razon</td>
<td>fechaDevolucion</td><td>Estado_devolucion</td><td>Costo</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){



$idDevolucion = $fila["idDevolucion"];
$id_automovil = utf8_encode($fila["idAutomovil"]);
$idEmpleado = utf8_encode($fila["idEmpleado"]);
$idCliente = utf8_encode($fila["idCliente"]);
$Razon = utf8_encode($fila["Razon"]);
$fechaDevolucion = utf8_encode($fila["fechaDevolucion"]);
$Estado_devolucion = utf8_encode($fila["Estado_devolucion"]);
$Costo = utf8_encode($fila["Costo"]);

if (preg_match($numeros, $idDevolucion) && preg_match($numeros, $id_automovil) && preg_match($numeros, $idEmpleado)
&& preg_match($numeros, $idCliente) && preg_match($letras, $Razon) && preg_match($numeros, $fechaDevolucion)
&& preg_match($numeros, $Estado_devolucion) && preg_match($correcto_decimales, $Costo)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO devoluciones_automovil(idDevolucion, id_automovil, idEmpleado, idCliente, Razon, fechaDevolucion, Estado_devolucion, Costo)
  VALUES ('$idDevolucion', '$id_automovil', '$idEmpleado', '$idCliente', '$Razon', '$fechaDevolucion', '$Estado_devolucion', '$Costo')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idDevolucion"].'</td>';
          echo '<td>'.$fila["idAutomovil"].'</td>';
          echo '<td>'.$fila["idEmpleado"].'</td>';
          echo '<td>'.$fila["idCliente"].'</td>';
          echo '<td>'.$fila["Razon"].'</td>';
          echo '<td>'.$fila["fechaDevolucion"].'</td>';
          echo '<td>'.$fila["Estado_devolucion"].'</td>';
          echo '<td>'.$fila["Costo"].'</td>';

  echo "</tr>";
  $sql = "INSERT INTO devoluciones_automovil(idDevolucion, id_automovil, idEmpleado, idCliente, Razon, fechaDevolucion, Estado_devolucion, Costo)
  VALUES ('$idDevolucion', '$id_automovil', '$idEmpleado', '$idCliente', '$Razon', '$fechaDevolucion', '$Estado_devolucion', '$Costo')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}

}


//////////////////////////////////////////////////////////////////////////


echo "periodicidad nomina";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM periodicidad";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
echo '<table border=1><tr><td>idPeriodicidad</td><td>Descripcion</td><td>fechaInicial</td><td>fechaFinal</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){



$idPeriodicidad = $fila["idPeriodicidad"];
$Descripcion = utf8_encode($fila["Descripcion"]);
$fechaInicial = utf8_encode($fila["fechaInicial"]);
$fechaFinal = utf8_encode($fila["fechaFinal"]);

if (preg_match($numeros, $idPeriodicidad) && preg_match($letras, $Descripcion) && preg_match($numeros, $fechaInicial) && preg_match($numeros, $fechaFinal)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO periodicidad(idPeriodicidad, Descripcion, fechaInicial, fechaFinal)
  VALUES ('$idPeriodicidad', '$Descripcion', '$fechaInicial', '$fechaFinal')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";
  echo "<tr>";
          echo '<td>'.$fila["idPeriodicidad"].'</td>';
          echo '<td>'.$fila["Descripcion"].'</td>';
          echo '<td>'.$fila["fechaInicial"].'</td>';
          echo '<td>'.$fila["fechaFinal"].'</td>';

  echo "</tr>";
  $sql = "INSERT INTO periodicidad(idPeriodicidad, Descripcion, fechaInicial, fechaFinal)
  VALUES ('$idPeriodicidad', '$Descripcion', '$fechaInicial', '$fechaFinal')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}

//////////////////////////////////////////////////////////////////////////


echo "nomina";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM nomina";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{10}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
echo '<table border=1><tr><td>idNomina</td><td>sumaPercepcion</td><td>idEmpleado</td><td>idPeriodicidad</td>
<td>salarioBase</td><td>sumaBonos</td><td>sumaDeduccion</td><td>totalNeto</td><td>Fecha</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){

$idNomina = $fila["idNomina"];
$sumaPercepcion = utf8_encode($fila["sumaPercepcion"]);
$idEmpleado = utf8_encode($fila["idEmpleado"]);
$idPeriodicidad = utf8_encode($fila["idPeriodicidad"]);
$salarioBase = utf8_encode($fila["salarioBase"]);
$sumaBonos = utf8_encode($fila["sumaBonos"]);
$sumaDeduccion = utf8_encode($fila["sumaDeduccion"]);
$totalNeto = utf8_encode($fila["totalNeto"]);
$Fecha = utf8_encode($fila["Fecha"]);

if (preg_match($numeros, $idNomina) & preg_match($correcto_decimales, $sumaPercepcion) && preg_match($numeros, $idEmpleado)
&& preg_match($numeros, $idPeriodicidad) && preg_match($correcto_decimales, $salarioBase) && preg_match($correcto_decimales, $sumaBonos)
&& preg_match($correcto_decimales, $sumaDeduccion) && preg_match($correcto_decimales, $totalNeto) && preg_match($numeros, $Fecha)) {
  require 'conexionSQL.php';
  echo "correcto";
  $sql = "INSERT INTO nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha)
  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";
  echo "<tr>";
          echo '<td>'.$fila["idNomina"].'</td>';
          echo '<td>'.$fila["sumaPercepcion"].'</td>';
          echo '<td>'.$fila["idEmpleado"].'</td>';
          echo '<td>'.$fila["idPeriodicidad"].'</td>';
          echo '<td>'.$fila["salarioBase"].'</td>';
          echo '<td>'.$fila["sumaBonos"].'</td>';
          echo '<td>'.$fila["sumaDeduccion"].'</td>';
          echo '<td>'.$fila["totalNeto"].'</td>';
          echo '<td>'.$fila["Fecha"].'</td>';
      echo "</tr>";
  $sql = "INSERT INTO nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha)
  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}



//////////////////////////////////////////////////////////////////////////


echo "Abonos";
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM abonos";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("ventas");
$datos= mysql_query ($consulta);
$numeros = "/^[0-9,:]+/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$numero_telefono = "/^[0-9]{10}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

echo '<table border=1><tr><td>idFactura</td><td>Concepto</td><td>Fecha</td><td>Cargo</td>
<td>Abono</td><td>Saldo</td><td>idEmpleado</td><td>Intereses</td><td>idAbono</td></tr>';
// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysql_fetch_array($datos)){


$idFactura = $fila["idFactura"];
$Concepto = utf8_encode($fila["Concepto"]);
$Fecha = utf8_encode($fila["Fecha"]);
$Cargo = utf8_encode($fila["Cargo"]);
$Abono = utf8_encode($fila["Abono"]);
$Saldo = utf8_encode($fila["Saldo"]);
$idEmpleado = utf8_encode($fila["idEmpleado"]);
$Intereses = utf8_encode($fila["Intereses"]);
$idAbono = utf8_encode($fila["idAbono"]);

if (preg_match($numeros, $idFactura) && preg_match($letras, $Concepto) && preg_match($numeros, $Fecha)
&& preg_match($correcto_decimales, $Cargo) && preg_match($correcto_decimales, $Abono) && preg_match($correcto_decimales, $Saldo)
&& preg_match($numeros, $idEmpleado) && preg_match($correcto_decimales, $Intereses) && preg_match($numeros, $idAbono)) {
  require 'conexionSQL.php';
  echo "correcto";

  $sql = "INSERT INTO Abonos(idFactura, Concepto, Fecha, Cargo, Abono, Saldo, idEmpleado, Intereses, idAbono)
  VALUES ('$idFactura', '$Concepto', '$Fecha', '$Cargo', '$Abono', '$Saldo', '$idEmpleado', '$Intereses', '$idAbono')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );

}else {
  require 'conexionMYSQL_incorrecto.php';
  echo "incorrecto";

  echo "<tr>";
          echo '<td>'.$fila["idFactura"].'</td>';
          echo '<td>'.$fila["Concepto"].'</td>';
          echo '<td>'.$fila["Fecha"].'</td>';
          echo '<td>'.$fila["Cargo"].'</td>';
          echo '<td>'.$fila["Abono"].'</td>';
          echo '<td>'.$fila["Saldo"].'</td>';
          echo '<td>'.$fila["idEmpleado"].'</td>';
          echo '<td>'.$fila["Intereses"].'</td>';
          echo '<td>'.$fila["idAbono"].'</td>';


  echo "</tr>";
  $sql = "INSERT INTO Abonos(idFactura, Concepto, Fecha, Cargo, Abono, Saldo, idEmpleado, Intereses, idAbono)
  VALUES ('$idFactura', '$Concepto', '$Fecha', '$Cargo', '$Abono', '$Saldo', '$idEmpleado', '$Intereses', '$idAbono')";

  $ejecutar = sqlsrv_query($conn_sis, $sql );
}

}



//////////////////////////////////////////////////////////////////////77




}else{
echo "<p> MySQL no conoce ese usuario y password</p>";
}
?>
