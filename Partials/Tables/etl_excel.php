<?php
require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';

$sql = "SELECT * FROM clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$clientes = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM abonos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$abonos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM facturas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$facturas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenSalidaProductos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordensalidaproductos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenesExternas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenesexternas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenesSalidaAutomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenessalidaautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM cartafactura";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$cartafactura = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Empleados";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$empleados = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM valeautoseminuevo";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$valeautoseminuevo = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM autoConsideracion";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$autoconsideracion = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM serieautos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$serieautos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenesllegadaautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenllegadaautomovil = sqlsrv_fetch_array($ejecutar);


$sql = "SELECT * FROM requisicionRevisionServicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$requisicionrevisionservicios = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenespedidosautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenespedidosautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$automovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM seguro";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$seguro = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM companiaSeguros";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$companiaseguros = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM devoluciones_automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$devolucionautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM nomina";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$nomina = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogoanos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogoanos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogoMarcas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogomarcas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogoModelos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogomodelos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM citas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$citas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Agenda";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$agenda = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Reparaciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$reparaciones = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM tipoServicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$tiposervicios = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM diagnostico";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$diagnostico = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM CondiciondeLlegada";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$condicionllegada = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenCobroTaller";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordencobrotaller = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM RecepcionVehiculoNuevos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$recepcionvehiculonuevo = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM consumibles";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$consumibles = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Herramientas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$herramientas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM SolicitudRefacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$solicitudrefacciones = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM refacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$refacciones = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenCobro";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordencobro = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM mermas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$mermas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$proveedores = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM FacturasProveedor";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$facturasproveedor = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Inventario";
$ejecutar = sqlsrv_query($conn_sis, $sql);
$inventario = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM pedidoProveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$pedidoproveedores = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Compras";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$compras = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ventas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ventas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Requisicion";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$requisicion = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM devolucion_proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$devolucionproveedores = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM OrdenSalida";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordensalida = sqlsrv_fetch_array($ejecutar);


$sql = "SELECT * FROM devoluciones_clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$devolucionesclientes = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM condiciondellegada";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$condicionllegada = sqlsrv_fetch_array($ejecutar);



////////////////////////////////////////////////////////////////////////////


if ($clientes > 0 || $abonos > 0 || $facturas > 0 || $ordensalidaproductos > 0 || $ordenesexternas > 0
|| $ordenessalidaautomovil > 0 || $cartafactura > 0 || $empleados > 0 || $valeautoseminuevo > 0 || $autoconsideracion > 0
|| $serieautos > 0 || $ordenllegadaautomovil > 0 || $requisicionrevisionservicios > 0 || $ordenespedidosautomovil > 0
|| $automovil > 0 || $seguro > 0 || $companiaseguros > 0 || $devolucionautomovil > 0 || $nomina > 0
|| $catalogoanos > 0 || $catalogomarcas > 0 || $catalogomodelos > 0 || $citas > 0 || $agenda > 0 || $reparaciones > 0
|| $tiposervicios > 0 || $diagnostico > 0 || $condicionllegada > 0 || $ordencobrotaller > 0 || $recepcionvehiculonuevo > 0 || $consumibles > 0
|| $herramientas > 0 || $solicitudrefacciones > 0 || $refacciones > 0 || $ordencobro > 0 || $mermas > 0
|| $proveedores > 0 || $facturasproveedor > 0 || $inventario > 0 || $pedidoproveedores > 0 || $compras > 0
|| $ventas > 0 || $requisicion > 0 || $devolucionproveedores > 0 || $ordensalida > 0
|| $devolucionesclientes > 0) {
  echo "<br>";
  echo "hay registros aún sin corregir";

}else {
  require_once '../../PHPExcel/Classes/PHPExcel.php';


$servername = 'localhost';
$connectionInfo = array("Database" => "zcorrecto", "UID"=>"", "PWD"=>"", "CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($servername, $connectionInfo);

if ($conn_sis) {
  //echo "conexion exitosa";
}else {
//echo "fallo de conexion";
  die(print_r(sqlsrv_errors(), true));
}


$objPHPExcel  = new PHPExcel();
$objPHPExcel->getProperties()
      ->setLastModifiedBy("EQUIPO_2")
      ->setTitle("ETL");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Clientes");
$sqlclientes = "SELECT * FROM clientes";
$res = sqlsrv_query($conn_sis, $sqlclientes, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
$fila = 2;

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'idCliente');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NombreCompleto');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'RFC');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Telefono');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Correo');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'fechaNac');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Domicilio');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Genero');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'id_departamento');

while($rows = sqlsrv_fetch_array($res)){

  $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idCliente']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['NombreCompleto']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['RFC']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Telefono']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Correo']);
  $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fechaNac']);
  $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['Domicilio']);
  $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['Genero']);
  $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['id_departamento']);

  $fila++;
}


//////////////////////////////////////////////////////////////////////
$objPHPExcel->createSheet();
$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->getActiveSheet()->setTitle("Abonos");
$sqlabonos = "SELECT * FROM abonos";
$res = sqlsrv_query($conn_sis, $sqlabonos, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
$fila = 2;

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'idFactura');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Concepto');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Fecha');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Cargo');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Abono');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Saldo');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'idEmpleado');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Intereses');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'idAbono');

while($rows = sqlsrv_fetch_array($res)){

  $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idFactura']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Concepto']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Fecha']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Cargo']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Abono']);
  $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Saldo']);
  $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['idEmpleado']);
  $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['Intereses']);
  $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['idAbono']);

  $fila++;
}


//////////////////////////////////////////////////////////////////////

$objPHPExcel->createSheet();
$objPHPExcel->setActiveSheetIndex(2);
$objPHPExcel->getActiveSheet()->setTitle("Facturas");
$sqlfacturas = "SELECT * FROM Facturas";
$res = sqlsrv_query($conn_sis, $sqlfacturas, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
$fila = 2;

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'idFactura');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'IVA');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'idCliente');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'total');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'idTipoPago');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'lugarEmision');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'fecha');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'idEmpleado');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'idEstado');

while($rows = sqlsrv_fetch_array($res)){

  $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idFactura']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['IVA']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idCliente']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['total']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['idTipoPago']);
  $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['lugarEmision']);
  $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fecha']);
  $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['idEmpleado']);
  $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['idEstado']);

  $fila++;
}

//////////////////////////////////////////////////////////////////////

$objPHPExcel->createSheet();
$objPHPExcel->setActiveSheetIndex(3);
$objPHPExcel->getActiveSheet()->setTitle("ordenSalidaProductos");
$sqlordensalidaproductos = "SELECT * FROM ordenSalidaProductos";
$res = sqlsrv_query($conn_sis, $sqlordensalidaproductos, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
$fila = 2;

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'idOrdenSalida');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'idFactura');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'fecha');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'idEmpleado');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Estado');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'idOrdenExterna');


while($rows = sqlsrv_fetch_array($res)){

  $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idOrdenSalida']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idFactura']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['fecha']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['idEmpleado']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Estado']);
  $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['idOrdenExterna']);

  $fila++;
}

//////////////////////////////////////////////////////////////////////

$objPHPExcel->createSheet();
$objPHPExcel->setActiveSheetIndex(4);
$objPHPExcel->getActiveSheet()->setTitle("ordenesExternas");
$ordenesexternas = "SELECT * FROM ordenesExternas";
$res = sqlsrv_query($conn_sis, $ordenesexternas, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
$fila = 2;

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'idRequisicion');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'idDepartamento');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'fecha');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Total');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'idEmpleadoRecep');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'idCliente');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'idFactura');



while($rows = sqlsrv_fetch_array($res)){

  $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idRequisicion']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idDepartamento']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['fecha']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Total']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['idEmpleadoRecep']);
  $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['idCliente']);
  $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['idFactura']);


  $fila++;
}

//////////////////////////////////////////////////////////////////////

$objPHPExcel->createSheet();
$objPHPExcel->setActiveSheetIndex(5);
$objPHPExcel->getActiveSheet()->setTitle("ordenesSalidaAutomovil");
$ordenessalidaautomovil = "SELECT * FROM ordenesSalidaAutomovil";
$res = sqlsrv_query($conn_sis, $ordenessalidaautomovil, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
$fila = 2;

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'idOrdenSalidaAutomovil');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'idFactura');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'idEmpleado');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Fecha');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Hora');

while($rows = sqlsrv_fetch_array($res)){

  $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idOrdenSalidaAutomovil']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idFactura']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idEmpleado']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Fecha']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Hora']);

  $fila++;
}

//////////////////////////////////////////////////////////////////////


  $objPHPExcel->createSheet();
  $objPHPExcel->setActiveSheetIndex(6);
  $objPHPExcel->getActiveSheet()->setTitle("cartafactura");
  $cartafactura = "SELECT * FROM cartafactura";
  $res = sqlsrv_query($conn_sis, $cartafactura, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
  $fila = 2;

  $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idCartaFactura');
  $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idFactura');
  $objPHPExcel->getActiveSheet()->setCellValue('C1', 'idEmpleado');
  $objPHPExcel->getActiveSheet()->setCellValue('D1', 'fecha');

  while($rows = sqlsrv_fetch_array($res)){

    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idCartaFactura']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idFactura']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idEmpleado']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['fecha']);

    $fila++;
  }

  //////////////////////////////////////////////////////////////////////


      $objPHPExcel->createSheet();
      $objPHPExcel->setActiveSheetIndex(7);
      $objPHPExcel->getActiveSheet()->setTitle("empleados");
      $empleados = "SELECT * FROM empleados";
      $res = sqlsrv_query($conn_sis, $empleados, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
      $fila = 2;

      $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idEmpleado');
      $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre');
      $objPHPExcel->getActiveSheet()->setCellValue('C1', 'RFC');
      $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Telefono');
      $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Correo');
      $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Domicilio');
      $objPHPExcel->getActiveSheet()->setCellValue('G1', 'fechaIngreso');
      $objPHPExcel->getActiveSheet()->setCellValue('H1', 'idContrato');
      $objPHPExcel->getActiveSheet()->setCellValue('I1', 'idTurno');
      $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Genero');
      $objPHPExcel->getActiveSheet()->setCellValue('K1', 'idCargo');
      $objPHPExcel->getActiveSheet()->setCellValue('L1', 'sueldo_base');
      $objPHPExcel->getActiveSheet()->setCellValue('M1', 'comision');
      $objPHPExcel->getActiveSheet()->setCellValue('N1', 'Estado');
      $objPHPExcel->getActiveSheet()->setCellValue('O1', 'id_departamento');



      while($rows = sqlsrv_fetch_array($res)){

        $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idEmpleado']);
        $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Nombre']);
        $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['RFC']);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Telefono']);
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Correo']);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Domicilio']);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fechaIngreso']);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['idContrato']);
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['idTurno']);
        $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['Genero']);
        $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['idCargo']);
        $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['sueldo_base']);
        $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['comision']);
        $objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $rows['Estado']);
        $objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $rows['id_departamento']);



        $fila++;
      }

//////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(8);
        $objPHPExcel->getActiveSheet()->setTitle("valeautoseminuevo");
        $valeautoseminuevo = "SELECT * FROM valeautoseminuevo";
        $res = sqlsrv_query($conn_sis, $valeautoseminuevo, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idVale');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idAutoConsideracion');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Fecha');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'idFactura');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Monto');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idVale']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idAutoConsideracion']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Fecha']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['idFactura']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Monto']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(9);
        $objPHPExcel->getActiveSheet()->setTitle("autoconsideracion");
        $autoconsideracion = "SELECT * FROM autoconsideracion";
        $res = sqlsrv_query($conn_sis, $autoconsideracion, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idAutoConsideracion');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Fecha');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Monto');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'estado');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'idCliente');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'noChasis');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idAutoConsideracion']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Fecha']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Monto']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['estado']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['idCliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['noChasis']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////
        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(10);
        $objPHPExcel->getActiveSheet()->setTitle("serieautos");
        $serieautos = "SELECT * FROM serieautos";
        $res = sqlsrv_query($conn_sis, $serieautos, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idAutomovil');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'noChasis');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'noMotor');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'idFactura');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'idEstadoVenta');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'idUbicacion');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'FechaLlegada');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'idEstadoAuto');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idAutomovil']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['noChasis']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['noMotor']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['idFactura']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['idEstadoVenta']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['idUbicacion']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['FechaLlegada']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['idEstadoAuto']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(11);
        $objPHPExcel->getActiveSheet()->setTitle("ordenesllegadaautomovil");
        $ordenesllegadaautomovil = "SELECT * FROM ordenesllegadaautomovil";
        $res = sqlsrv_query($conn_sis, $ordenesllegadaautomovil, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idOrdenEnt');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Costo');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Fecha');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idOrdenEnt']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Costo']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Fecha']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////


        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(12);
        $objPHPExcel->getActiveSheet()->setTitle("requisicionrevisionservicios");
        $requisicionrevisionservicios = "SELECT * FROM requisicionrevisionservicios";
        $res = sqlsrv_query($conn_sis, $requisicionrevisionservicios, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idRequisicion');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'fechaEmision');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'idOrdenEntrada');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'idEmpleado');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idRequisicion']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['fechaEmision']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idOrdenEntrada']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['idEmpleado']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(13);
        $objPHPExcel->getActiveSheet()->setTitle("ordenespedidosautomovil");
        $ordenespedidosautomovil = "SELECT * FROM ordenespedidosautomovil";
        $res = sqlsrv_query($conn_sis, $ordenespedidosautomovil, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idOrdenPedido');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'idCoche');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'fechaOrden');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Cantidad');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'fechaLlegada');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Estado');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'idPlanta');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idOrdenPedido']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idCoche']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['fechaOrden']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Cantidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fechaLlegada']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['Estado']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['idPlanta']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(14);
        $objPHPExcel->getActiveSheet()->setTitle("automovil");
        $automovil = "SELECT * FROM automovil";
        $res = sqlsrv_query($conn_sis, $automovil, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ideAutomovil');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idModelo');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Precio');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Marca');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'idYear');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidadActual');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'cantidadMinima');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'idSeguro');
        $objPHPExcel->getActiveSheet()->setCellValue('I1', 'cantidadMaxima');
        $objPHPExcel->getActiveSheet()->setCellValue('J1', 'noPuertas');
        $objPHPExcel->getActiveSheet()->setCellValue('K1', 'CapacidadPas');
        $objPHPExcel->getActiveSheet()->setCellValue('L1', 'Peso');
        $objPHPExcel->getActiveSheet()->setCellValue('M1', 'noAsientos');
        $objPHPExcel->getActiveSheet()->setCellValue('N1', 'Rendimiento');
        $objPHPExcel->getActiveSheet()->setCellValue('O1', 'Cilindros');
        $objPHPExcel->getActiveSheet()->setCellValue('P1', 'idTipo');



        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['ideAutomovil']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idModelo']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Precio']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Marca']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['idYear']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidadActual']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['cantidadMinima']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['idSeguro']);
          $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['cantidadMaxima']);
          $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['noPuertas']);
          $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['CapacidadPas']);
          $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['Peso']);
          $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['noAsientos']);
          $objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $rows['Rendimiento']);
          $objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $rows['Cilindros']);
          $objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, $rows['idTipo']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(15);
        $objPHPExcel->getActiveSheet()->setTitle("seguro");
        $seguro = "SELECT * FROM seguro";
        $res = sqlsrv_query($conn_sis, $seguro, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idSeguro');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Descripcion');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'idCompania');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idSeguro']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Descripcion']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idCompania']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(16);
        $objPHPExcel->getActiveSheet()->setTitle("companiaseguros");
        $companiaseguros = "SELECT * FROM companiaseguros";
        $res = sqlsrv_query($conn_sis, $companiaseguros, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idCompania');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Correo');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Telefono');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Direccion');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Localidad');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Estado');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idCompania']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Nombre']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Correo']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Telefono']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Direccion']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Localidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['Estado']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(17);
        $objPHPExcel->getActiveSheet()->setTitle("devoluciones_automovil");
        $devoluciones_automovil = "SELECT * FROM devoluciones_automovil";
        $res = sqlsrv_query($conn_sis, $devoluciones_automovil, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idDevolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_automovil');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'idCliente');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'fechaDevolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Estado_devolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Costo');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idDevolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_automovil']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['idCliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['fechaDevolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Estado_devolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['Costo']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////
        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(18);
        $objPHPExcel->getActiveSheet()->setTitle("nomina");
        $nomina = "SELECT * FROM nomina";
        $res = sqlsrv_query($conn_sis, $nomina, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idNomina');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'sumaPercepcion');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'idPeriodicidad');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'salarioBase');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'sumaBonos');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'sumaDeduccion');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'totalNeto');
        $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Fecha');
        $objPHPExcel->getActiveSheet()->setCellValue('J1', 'id_departamento');



        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idNomina']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['sumaPercepcion']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['idPeriodicidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['salarioBase']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['sumaBonos']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['sumaDeduccion']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['totalNeto']);
          $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['Fecha']);
          $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['id_departamento']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(19);
        $objPHPExcel->getActiveSheet()->setTitle("catalogoanos");
        $catalogoanos = "SELECT * FROM catalogoanos";
        $res = sqlsrv_query($conn_sis, $catalogoanos, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idYear');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Ano');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_departamento');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idYear']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Ano']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_departamento']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(20);
        $objPHPExcel->getActiveSheet()->setTitle("catalogomarcas");
        $catalogomarcas = "SELECT * FROM catalogomarcas";
        $res = sqlsrv_query($conn_sis, $catalogomarcas, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idMarca');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Descripcion');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_departamento');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idMarca']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Descripcion']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_departamento']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(21);
        $objPHPExcel->getActiveSheet()->setTitle("catalogoModelos");
        $catalogoModelos = "SELECT * FROM catalogoModelos";
        $res = sqlsrv_query($conn_sis, $catalogoModelos, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idModelo');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_departamento');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idModelo']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Nombre']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_departamento']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(22);
        $objPHPExcel->getActiveSheet()->setTitle("citas");
        $citas = "SELECT * FROM citas";
        $res = sqlsrv_query($conn_sis, $citas, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idCita');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'cliente');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'fecha');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'hora');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'tipo_servicio');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'descripcion_Servicio');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'id_mecanico');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idCita']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['cliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['fecha']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['hora']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['tipo_servicio']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['descripcion_Servicio']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['id_mecanico']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(23);
        $objPHPExcel->getActiveSheet()->setTitle("agenda");
        $agenda = "SELECT * FROM agenda";
        $res = sqlsrv_query($conn_sis, $agenda, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_agenda');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_cita');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_reparacion');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'vehiculo');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'id_servicio');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'fecha');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_agenda']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_cita']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_reparacion']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['vehiculo']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['id_servicio']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fecha']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(24);
        $objPHPExcel->getActiveSheet()->setTitle("reparaciones");
        $reparaciones = "SELECT * FROM reparaciones";
        $res = sqlsrv_query($conn_sis, $reparaciones, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_reparacion');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'tipo_servicio');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'tiempo_duracion');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'id_vehiculo');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'consumibles_aplicados');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'id_estado');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_reparacion']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['tipo_servicio']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['tiempo_duracion']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['id_vehiculo']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['consumibles_aplicados']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['id_estado']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(25);
        $objPHPExcel->getActiveSheet()->setTitle("tiposervicios");
        $tiposervicios = "SELECT * FROM tiposervicios";
        $res = sqlsrv_query($conn_sis, $tiposervicios, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'nombreServicio');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['nombreServicio']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(26);
        $objPHPExcel->getActiveSheet()->setTitle("diagnostico");
        $diagnostico = "SELECT * FROM diagnostico";
        $res = sqlsrv_query($conn_sis, $diagnostico, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'detalle_auto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_mecanico');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'vehiculo');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['detalle_auto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_mecanico']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['vehiculo']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(27);
        $objPHPExcel->getActiveSheet()->setTitle("condiciondellegada");
        $condiciondellegada = "SELECT * FROM condiciondellegada";
        $res = sqlsrv_query($conn_sis, $condiciondellegada, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'kilometraje');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'gasolina');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'luces');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'espejos');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cauchos');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'faros');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'placa');
        $objPHPExcel->getActiveSheet()->setCellValue('I1', 'id_cliente');
        $objPHPExcel->getActiveSheet()->setCellValue('J1', 'id_empleado');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['kilometraje']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['gasolina']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['luces']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['espejos']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cauchos']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['faros']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['placa']);
          $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['id_cliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['id_empleado']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(28);
        $objPHPExcel->getActiveSheet()->setTitle("ordencobrotaller");
        $ordencobrotaller = "SELECT * FROM ordencobrotaller";
        $res = sqlsrv_query($conn_sis, $ordencobrotaller, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'cliente');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'tipo_servicios');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'refacciones');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'totalpagar');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'fecha_emision');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'lugarEmision');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['cliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['tipo_servicios']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['refacciones']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['totalpagar']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fecha_emision']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['lugarEmision']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(29);
        $objPHPExcel->getActiveSheet()->setTitle("recepcionvehiculonuevos");
        $recepcionvehiculonuevos = "SELECT * FROM recepcionvehiculonuevos";
        $res = sqlsrv_query($conn_sis, $recepcionvehiculonuevos, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'numero_identificacion');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_modelo');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'color');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'condicionLlegada');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Seguro');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['numero_identificacion']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_modelo']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['color']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['condicionLlegada']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Seguro']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(30);
        $objPHPExcel->getActiveSheet()->setTitle("consumibles");
        $consumibles = "SELECT * FROM consumibles";
        $res = sqlsrv_query($conn_sis, $consumibles, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'producto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'cantidad');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['cantidad']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(31);
        $objPHPExcel->getActiveSheet()->setTitle("herramientas");
        $herramientas = "SELECT * FROM herramientas";
        $res = sqlsrv_query($conn_sis, $herramientas, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'nombreHerramienta');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['nombreHerramienta']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(32);
        $objPHPExcel->getActiveSheet()->setTitle("solicitudrefacciones");
        $solicitudrefacciones = "SELECT * FROM solicitudrefacciones";
        $res = sqlsrv_query($conn_sis, $solicitudrefacciones, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_mecanico');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'refaccion');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'vehiculo');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'cliente');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidad');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'fecha_solicitud');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_mecanico']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['refaccion']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['vehiculo']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['cliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fecha_solicitud']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(33);
        $objPHPExcel->getActiveSheet()->setTitle("refacciones");
        $refacciones = "SELECT * FROM refacciones";
        $res = sqlsrv_query($conn_sis, $refacciones, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_inventario');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_marca');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_modelo');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'id_year');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Nombre');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'PrecioCompra');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'precioVenta');
        $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Existencia');
        $objPHPExcel->getActiveSheet()->setCellValue('J1', 'descripcion');
        $objPHPExcel->getActiveSheet()->setCellValue('K1', 'cantidad_minima');
        $objPHPExcel->getActiveSheet()->setCellValue('L1', 'cantidad_maxima');
        $objPHPExcel->getActiveSheet()->setCellValue('M1', 'fecha_caducidad');



        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_inventario']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_marca']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['id_modelo']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['id_year']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Nombre']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['PrecioCompra']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['precioVenta']);
          $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['Existencia']);
          $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['descripcion']);
          $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['cantidad_minima']);
          $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['cantidad_maxima']);
          $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['fecha_caducidad']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(34);
        $objPHPExcel->getActiveSheet()->setTitle("ordencobro");
        $ordencobro = "SELECT * FROM ordencobro";
        $res = sqlsrv_query($conn_sis, $ordencobro, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_ordencobro');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_cliente');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'fecha_emision');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidad_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'subtotal');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'iva');
        $objPHPExcel->getActiveSheet()->setCellValue('I1', 'total');
        $objPHPExcel->getActiveSheet()->setCellValue('J1', 'estado');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_ordencobro']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_cliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['fecha_emision']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidad_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['subtotal']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['iva']);
          $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['total']);
          $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['estado']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////
        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(35);
        $objPHPExcel->getActiveSheet()->setTitle("mermas");
        $mermas = "SELECT * FROM mermas";
        $res = sqlsrv_query($conn_sis, $mermas, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_merma');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'descripcion');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'fecha');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidad');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_merma']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['descripcion']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['fecha']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidad']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(36);
        $objPHPExcel->getActiveSheet()->setTitle("proveedores");
        $proveedores = "SELECT * FROM proveedores";
        $res = sqlsrv_query($conn_sis, $proveedores, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_proveedor');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Telefono');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Direccion');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Ciudad');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Estado_actual');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Empresa');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_proveedor']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Nombre']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Telefono']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Direccion']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Ciudad']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Estado_actual']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['Empresa']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////
        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(37);
        $objPHPExcel->getActiveSheet()->setTitle("facturasproveedor");
        $facturasproveedor = "SELECT * FROM facturasproveedor";
        $res = sqlsrv_query($conn_sis, $facturasproveedor, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_factura');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_proveedor');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'fecha_registro');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'precio_unitario');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidad');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'total');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_factura']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_proveedor']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['fecha_registro']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['precio_unitario']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['total']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////


        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(38);
        $objPHPExcel->getActiveSheet()->setTitle("inventario");
        $inventario = "SELECT * FROM inventario";
        $res = sqlsrv_query($conn_sis, $inventario, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_inventario');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'nombre');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'descripcion');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'almacen_min');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'almacen_max');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_inventario']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['nombre']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['descripcion']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['almacen_min']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['almacen_max']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(39);
        $objPHPExcel->getActiveSheet()->setTitle("pedidoproveedores");
        $pedidoproveedores = "SELECT * FROM pedidoproveedores";
        $res = sqlsrv_query($conn_sis, $pedidoproveedores, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_pedido');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_proveedor');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'fecha');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidad');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'tiempo_estimado');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'estado');



        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_pedido']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_proveedor']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['fecha']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['tiempo_estimado']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['estado']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(40);
        $objPHPExcel->getActiveSheet()->setTitle("compras");
        $compras = "SELECT * FROM compras";
        $res = sqlsrv_query($conn_sis, $compras, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_compras');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_proveedor');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_pedido');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'cantidad');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'fecha_compra');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_compras']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_proveedor']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['id_pedido']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['cantidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fecha_compra']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(41);
        $objPHPExcel->getActiveSheet()->setTitle("ventas");
        $ventas = "SELECT * FROM ventas";
        $res = sqlsrv_query($conn_sis, $ventas, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_venta');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_cliente');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'cantidad');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'fecha');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'precio_venta');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'total');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_venta']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_cliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['cantidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fecha']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['precio_venta']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['total']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(42);
        $objPHPExcel->getActiveSheet()->setTitle("requisicion");
        $requisicion = "SELECT * FROM requisicion";
        $res = sqlsrv_query($conn_sis, $requisicion, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_requisicion');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'fecha_registrorequi');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'automovil');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'cliente');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidad_piezas');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'nombre_piezas');


        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_requisicion']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['fecha_registrorequi']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['automovil']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['cliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidad_piezas']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['nombre_piezas']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(43);
        $objPHPExcel->getActiveSheet()->setTitle("devolucion_proveedores");
        $devolucion_proveedores = "SELECT * FROM devolucion_proveedores";
        $res = sqlsrv_query($conn_sis, $devolucion_proveedores, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_devolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_producto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_proveedor');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'fecha_devolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'descripcion');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'cantidad');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'precio_unitario');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'monto_total');
        $objPHPExcel->getActiveSheet()->setCellValue('I1', 'estado_devolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('J1', 'tipo_devolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('K1', 'id_compra');



        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_devolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_producto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['id_proveedor']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['fecha_devolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['descripcion']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cantidad']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['precio_unitario']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['monto_total']);
          $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['estado_devolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['tipo_devolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['id_compra']);


          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(44);
        $objPHPExcel->getActiveSheet()->setTitle("ordensalida");
        $ordensalida = "SELECT * FROM ordensalida";
        $res = sqlsrv_query($conn_sis, $ordensalida, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_orden_salida');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_empleado');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'fecha_salida');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'cantidad_piezas');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'nombre_piezas');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'id_requisicion');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'precio_unitario');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'total');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id_orden_salida']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['id_empleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['fecha_salida']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['cantidad_piezas']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['nombre_piezas']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['id_requisicion']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['precio_unitario']);
          $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['total']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(45);
        $objPHPExcel->getActiveSheet()->setTitle("devoluciones_clientes");
        $devoluciones_clientes = "SELECT * FROM devoluciones_clientes";
        $res = sqlsrv_query($conn_sis, $devoluciones_clientes, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        $fila = 2;

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idDevolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'idProducto');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'idEmpleado');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'idCliente');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Razon');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'fechaDevolucion');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'estado_devolucion');

        while($rows = sqlsrv_fetch_array($res)){

          $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idDevolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['idProducto']);
          $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['idEmpleado']);
          $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['idCliente']);
          $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Razon']);
          $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fechaDevolucion']);
          $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['Estado_devolucion']);

          $fila++;
        }

        //////////////////////////////////////////////////////////////////////


header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
ob_end_clean();
header('Content-Disposition: attachment;filename="Reporte_Actividades.xlsx"');
header('Cache-Control: max-age=0');

$ObjWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$ObjWriter->save('php://output');


}




 ?>
