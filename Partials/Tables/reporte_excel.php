<?php

$servername = 'localhost';
$connectionInfo = array("Database" => "zincorrecto", "UID"=>"", "PWD"=>"", "CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($servername, $connectionInfo);

if ($conn_sis) {
  echo "conexion exitosa";
}else {
  echo "fallo de conexion";
  die(print_r(sqlsrv_errors(), true));
}


$sql = "SELECT * FROM Inventario";
$ejecutar = sqlsrv_query($conn_sis, $sql);
$inventario = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogoanos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogoanos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogoModelos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogomodelos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogoMarcas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogomarcas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Cargos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogocargos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM TurnoEmpleados";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$turnoempleados = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Empleados";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$empleados = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$proveedores = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM pedidoProveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$pedidoproveedores = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM refacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$refacciones = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Compras";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$compras = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM tipo_devolucion";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$tipodevolucion = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM devolucion_proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$devolucionproveedores = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM mermas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$mermas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$clientes = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ventas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ventas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenCobro";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordencobro = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM devoluciones_clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$devolucionesclientes = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM FacturasProveedor";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$facturasproveedor = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Requisicion";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$requisicion = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM OrdenSalida";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordensalida = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM nomina";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$nomina = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM TipoPago";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$tipopago = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogo_estado_factura";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogoestadofactura = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM contratos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$contratos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM departamento";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$departamento = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM facturas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$facturas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenesExternas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenesexternas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenSalidaProductos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordensalidaproductos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenesSalidaAutomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenessalidaautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM cartafactura";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$cartafactura = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM autoConsideracion";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$autoconsideracion = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM valeautoseminuevo";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$valeautoseminuevo = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM cat_tipo_auto";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$cattipoauto = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM companiaSeguros";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$companiaseguros = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM seguro";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$seguro = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$automovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM CatalogoEdoVenta";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogoedoventa = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM UbicacionAuto";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ubicacionauto = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM catalogoestadoautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$catalogoestadoautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM serieautos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$serieautos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenesllegadaautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenllegadaautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM requisicionrevisionservicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$requisicionrevisionservicios = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM plantas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$plantas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenespedidosautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordenespedidosautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM devoluciones_automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$devolucionautomovil = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM periodicidad";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$periodicidad = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM abonos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$abonos = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM SolicitudRefacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$solicitudrefacciones = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM tipoServicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$tiposervicios = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM diagnostico";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$diagnostico = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Herramientas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$herramientas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM consumibles";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$consumibles = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM RecepcionVehiculoNuevos";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$recepcionvehiculonuevo = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM ordenCobroTaller";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$ordencobrotaller = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM citas";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$citas = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM CondiciondeLlegada";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$condicionllegada = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Reparaciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$reparaciones = sqlsrv_fetch_array($ejecutar);

$sql = "SELECT * FROM Agenda";
$ejecutar = sqlsrv_query($conn_sis, $sql );
$agenda = sqlsrv_fetch_array($ejecutar);



/*
if ($clientes > 0 || $abonos > 0 || $facturas > 0 || $ordensalidaproductos > 0 || $ordenesexternas > 0
|| $ordenessalidaautomovil > 0 || $cartafactura > 0 || $empleados > 0 || $valeautoseminuevo > 0 || $autoconsideracion > 0
|| $serieautos > 0 || $ordenllegadaautomovil > 0 || $requisicionrevisionservicios > 0 || $ordenespedidosautomovil > 0
|| $automovil > 0 || $seguro > 0 || $companiaseguros > 0 || $devolucionautomovil > 0 || $nomina > 0
|| $catalogoanos > 0 || $catalogomarcas > 0 || $catalogomodelos > 0 || $citas > 0 || $agenda > 0 || $reparaciones > 0
|| $tiposervicios > 0 || $diagnostico > 0 || $ordencobrotaller > 0 || $recepcionvehiculonuevo > 0 || $consumibles > 0
|| $herramientas > 0 || $solicitudrefacciones > 0 || $refacciones > 0 || $ordencobro > 0 || $mermas > 0
|| $proveedores > 0 || $facturasproveedor > 0 || $inventario > 0 || $pedidoproveedores > 0 || $compras > 0
|| $ventas > 0 || $requisicion > 0 || $devolucionproveedores > 0 || $ordensalida > 0
|| $devolucionesclientes > 0) {
  echo "hay registros no puedes imprimir";
}else {*/
  require '../../Models/conexionSQL.php'; //Agregamos la conexión
  require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';
  $sql = "SELECT * FROM clientes";
  $ejecutar = sqlsrv_query($conn_sis, $sql );

  $fila = 2;
  $objPHPExcel = new PHPExcel();
  $objPHPExcel->getProperties()->setCreator ("ETL")->
  setDescription ("reporte etl");

  $objPHPExcel->setActiveSheetIndex(0);
  $objPHPExcel->getActiveSheet()->setTitle("Clientes");

  $objPHPExcel->getActiveSheet()->setCellValue('A1', 'idCliente');
  $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre Completo');
  $objPHPExcel->getActiveSheet()->setCellValue('C1', 'RFC');
  $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Telefono');
  $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Correo');
  $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Fecha Nacimiento');
  $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Domicilio');
  $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Genero');
  $objPHPExcel->getActiveSheet()->setCellValue('I1', 'idDepartamento');

  while ($row = sqlsrv_fetch_array($ejecutar)) {
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, utf8_decode($row['idCliente']));
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, utf8_decode($row['NombreCompleto']));
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, utf8_decode($row['RFC']));
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, utf8_decode($row['Telefono']));
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, utf8_decode($row['Correo']));
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, utf8_decode($row['fechaNac']));
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, utf8_decode($row['Domicilio']));
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, utf8_decode($row['Genero']));
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, utf8_decode($row['id_departamento']));
    $fila++;

  }

  // Redirigir la salida al navegador web de un cliente ( Excel5 )
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="reporte.xls"');
  header('Cache-Control: max-age=0');
  // Si usted está sirviendo a IE 9 , a continuación, puede ser necesaria la siguiente
  header('Cache-Control: max-age=1');

  // Si usted está sirviendo a IE a través de SSL , a continuación, puede ser necesaria la siguiente
  header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
  header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
  header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
  header ('Pragma: public'); // HTTP/1.0

  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
  $objWriter->save('php://output');
  exit;


  echo "imprimiendo";
}



?>
