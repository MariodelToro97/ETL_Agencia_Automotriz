
<?php

require '../../Models/conexionSQL.php'; //Agregamos la conexión
$sql = "DELETE FROM inventario";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoanos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoModelos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoMarcas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Cargos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM TurnoEmpleados";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Empleados";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM pedidoProveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM refacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Compras";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM tipo_devolucion";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM devolucion_proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM mermas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ventas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenCobro";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM devoluciones_clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM FacturasProveedor";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Requisicion";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM OrdenSalida";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM nomina";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM TipoPago";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogo_estado_factura";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM contratos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM departamento";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM facturas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenesExternas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenSalidaProductos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenesSalidaAutomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM cartafactura";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM autoConsideracion";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM valeautoseminuevo";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM cat_tipo_auto";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM companiaSeguros";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM seguro";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM CatalogoEdoVenta";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM UbicacionAuto";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoestadoautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM serieautos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenesllegadaautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM requisicionrevisionservicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM plantas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenespedidosautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM devoluciones_automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM periodicidad";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM abonos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM SolicitudRefacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM tipoServicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM diagnostico";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Herramientas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM consumibles";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM RecepcionVehiculoNuevos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenCobroTaller";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM citas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM CondiciondeLlegada";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Reparaciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Agenda";
$ejecutar = sqlsrv_query($conn_sis, $sql );


require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

$sql = "DELETE FROM inventario";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoanos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoModelos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoMarcas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Cargos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM TurnoEmpleados";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Empleados";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM pedidoProveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM refacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Compras";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM tipo_devolucion";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM devolucion_proveedores";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM mermas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ventas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenCobro";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM devoluciones_clientes";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM FacturasProveedor";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Requisicion";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM OrdenSalida";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM nomina";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM TipoPago";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogo_estado_factura";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM contratos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM departamento";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM facturas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenesExternas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenSalidaProductos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenesSalidaAutomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM cartafactura";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM autoConsideracion";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM valeautoseminuevo";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM cat_tipo_auto";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM companiaSeguros";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM seguro";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM CatalogoEdoVenta";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM UbicacionAuto";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM catalogoestadoautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM serieautos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenesllegadaautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM requisicionrevisionservicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM plantas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenespedidosautomovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM devoluciones_automovil";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM periodicidad";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM abonos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM SolicitudRefacciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM tipoServicios";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM diagnostico";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Herramientas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM consumibles";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM RecepcionVehiculoNuevos";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM ordenCobroTaller";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM citas";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM CondiciondeLlegada";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Reparaciones";
$ejecutar = sqlsrv_query($conn_sis, $sql );

$sql = "DELETE FROM Agenda";
$ejecutar = sqlsrv_query($conn_sis, $sql );

	require '../../Models/conexionSQL.php'; //Agregamos la conexión
	echo "<br>";

	require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';

	$nombreArchivo = 'refaccionaria_prueba.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);



		echo "Inventario"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(1)->getHighestRow();
			$ano_nuevo = "/^[1-2][09][019][0-9]/";
			echo '<table border=1><tr><td>id_inventario</td><td>nombre</td><td>descripcion</td><td>almacen_min</td>
			<td>almacen_max</td></tr>';
			$numeros = "/^[0-9]+$/";

			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";


			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_inventario = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$descripcion = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$almacen_min = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$almacen_max = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_inventario) && preg_match($numeros, $almacen_min) && preg_match($numeros, $almacen_max)
				 && preg_match($name, $nombre)&&preg_match($letras2, $descripcion)) {
					// echo "correcto";
					 $sql = "INSERT INTO Inventario (id_inventario,nombre,descripcion,almacen_min,almacen_max)
							VALUES('$id_inventario', '$nombre', '$descripcion', '$almacen_min',
							'$almacen_max')";

							$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión
					//echo "ejecutado";
					echo '<tr>';
					echo '<td>'.$id_inventario.'</td>';
					echo '<td>'.$nombre.'</td>';
					echo '<td>'.$descripcion.'</td>';
					echo '<td>'.$almacen_min.'</td>';
					echo '<td>'.$almacen_max.'</td>';
					echo '</tr>';

					$sql = "INSERT INTO Inventario (id_inventario,nombre,descripcion,almacen_min,almacen_max)
						 VALUES('$id_inventario', '$nombre', '$descripcion', '$almacen_min',
						 '$almacen_max')";

						 $ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';


		echo "catalogo Años"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(2)->getHighestRow();
			echo '<table border=1><tr><td>idYear</td><td>Ano</td><td>id_departamento</td></tr>';
			$numeros = "/^[0-9]+$/";
			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idYear = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Ano = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();


				if (preg_match($numeros, $idYear) && preg_match($ano_nuevo, $Ano)) {

						$sql = "INSERT INTO catalogoAnos (idYear,Ano, id_departamento) VALUES('$idYear','$Ano', '3')";
						$ejecutar = sqlsrv_query($conn_sis, $sql );

				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "no son numeros";

					echo '<tr>';
					echo '<td>'.$idYear.'</td>';
					echo '<td>'. $Ano.'</td>';
					echo '</tr>';

					$sql = "INSERT INTO catalogoAnos (idYear,Ano, id_departamento) VALUES('$idYear','$Ano', '3')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
			echo "</table>";


		echo "Modelos"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(3)->getHighestRow();

			$numeros = "/^[0-9]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

			echo '<table border=1><tr><td>idModelo</td><td>Nombre</td><td>id_departamento</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idModelo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();

				if (preg_match($numeros, $idModelo) && preg_match($letras2, $Nombre)) {
					//echo "correcto";
						$sql = "INSERT INTO catalogoModelos (idModelo, Nombre, id_departamento) VALUES('$idModelo', '$Nombre', '3')";
						$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$idModelo.'</td>';
					echo '<td>'. $Nombre.'</td>';
					echo '</tr>';

					$sql = "INSERT INTO catalogoModelos (idModelo, Nombre, id_departamento) VALUES('$idModelo', '$Nombre', '3')";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}


		}
		echo '</table>';



		echo "Marcas"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(4)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";


			echo '<table border=1><tr><td>idMarca</td><td>Descripcion</td><td>id_departamento</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idMarca = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Descripcion = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();

				if (preg_match($numeros, $idMarca) && preg_match($name, $Descripcion)) {
					//echo "correcto";
					$sql = "INSERT INTO catalogoMarcas (idMarca,Descripcion, id_departamento) VALUES('$idMarca', '$Descripcion', '3')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$idMarca.'</td>';
					echo '<td>'. $Descripcion.'</td>';
					echo '</tr>';

					$sql = "INSERT INTO catalogoMarcas (idMarca,Descripcion, id_departamento) VALUES('$idMarca', '$Descripcion', '3')";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}
		}
		echo '</table>';


		echo "Refacciones"."\n";
		$objPHPExcel->setActiveSheetIndex(0);
		$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

		$numeros = "/^[0-9]+$/";
		$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
		$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
		$precios = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

		$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


		echo '<table border=1><tr><td>id_producto</td><td>id_inventario</td><td>id_marca</td>
			<td>id_modelo</td><td>id_year</td><td>Nombre</td><td>PrecioCompra</td><td>precioVenta</td><td>Existencia</td><td>descri</td><td>cantidad_minima</td>
		  <td>cantidad_maxima</td><td>fecha_caducidad</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión

				$id_producto = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				 $id_inventario = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				 $id_marca = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				 $id_modelo = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				 $id_year = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				 $Nombre = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
				 $PrecioCompra = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
				 $precioVenta = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
				 $Existencia = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
				 $descripcion = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
				 $cantidad_minima = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
				 $cantidad_maxima = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
			 	$fecha_caducidad = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_producto) && preg_match($numeros, $id_inventario) && preg_match($numeros, $id_marca)
				&& preg_match($numeros, $id_modelo) && preg_match($numeros, $id_year) && preg_match($letras, $Nombre) &&
				preg_match($precios, $PrecioCompra) && preg_match($precios, $precioVenta) && preg_match($numeros, $Existencia)
			  && preg_match($letras2, $descripcion) && preg_match($numeros, $cantidad_minima) && preg_match($numeros, $cantidad_maxima)
				&& preg_match($fecha1, $fecha_caducidad)) {
					echo "correcto";
					$sql = "INSERT INTO Refacciones (id_producto, id_inventario, id_marca, id_modelo, id_year, Nombre, PrecioCompra, precioVenta, Existencia, descripcion, cantidad_minima, cantidad_maxima, fecha_caducidad) VALUES ('$id_producto', '$id_inventario', '$id_marca', '$id_modelo', '$id_year', '$Nombre', '$PrecioCompra', '$precioVenta', '$Existencia', '$descripcion', '$cantidad_minima',  '$cantidad_maxima', '$fecha_caducidad')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql);

				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'. $id_producto.'</td>';
					echo '<td>'. $id_inventario.'</td>';
					echo '<td>'. $id_marca.'</td>';
					echo '<td>'. $id_modelo.'</td>';
					echo '<td>'. $id_year.'</td>';
					echo '<td>'. $Nombre.'</td>';
					echo '<td>'. $PrecioCompra.'</td>';
					echo '<td>'. $precioVenta.'</td>';
					echo '<td>'. $Existencia.'</td>';
					echo '<td>'. $descripcion.'</td>';
					echo '<td>'. $cantidad_minima.'</td>';
					echo '<td>'. $cantidad_maxima.'</td>';
					echo '<td>'. $fecha_caducidad.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO Refacciones (id_producto, id_inventario, id_marca, id_modelo, id_year, Nombre, PrecioCompra, precioVenta, Existencia, descripcion, cantidad_minima, cantidad_maxima, fecha_caducidad) VALUES ('$id_producto', '$id_inventario', '$id_marca', '$id_modelo', '$id_year', '$Nombre', '$PrecioCompra', '$precioVenta', '$Existencia', '$descripcion', '$cantidad_minima',  '$cantidad_maxima', '$fecha_caducidad')";

					$ejecutar = sqlsrv_query($conn_sis, $sql);

				}

		}
		echo '</table>';



		echo "Proveedor"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(5)->getHighestRow();

			$numeros = "/^[0-9]+$/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$numero_telefono = "/^[0-9]{10}$/";
			$ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";

			echo '<table border=1><tr><td>id_proveedor</td><td>Nombre</td><td>Telefono</td><td>Direccion</td><td>Ciudad</td><td>Estado_actual</td><td>Empresa</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_proveedor = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$Telefono = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$Direccion = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$Ciudad = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $Estado_actual = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $Empresa = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_proveedor) && preg_match($name, $Nombre) && preg_match($numero_telefono, $Telefono)
						&& preg_match($letras2, $Direccion) && preg_match($letras, $Ciudad) && preg_match($letras, $Estado_actual)
					&& preg_match($numeros, $Empresa)) {
					//	echo "correcto";
						$sql = "INSERT INTO Proveedores (id_proveedor, Nombre, Telefono, Direccion,Ciudad, Estado_actual, Empresa)
						 VALUES('$id_proveedor', '$Nombre', '$Telefono', '$Direccion', '$Ciudad', '$Estado_actual', '$Empresa')";

						 $ejecutar = sqlsrv_query($conn_sis, $sql );

				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					echo '<tr>';
					echo '<td>'.$id_proveedor.'</td>';
					echo '<td>'.$Nombre.'</td>';
					echo '<td>'.$Telefono.'</td>';
					echo '<td>'.$Direccion.'</td>';
			    echo '<td>'.$Ciudad.'</td>';
					echo '<td>'.$Estado_actual.'</td>';
					echo '<td>'.$Empresa.'</td>';
					echo '</tr>';


					$sql = "INSERT INTO Proveedores (id_proveedor, Nombre, Telefono, Direccion, Ciudad, Estado_actual, Empresa)
					 VALUES('$id_proveedor', '$Nombre', '$Telefono', '$Direccion', '$Ciudad', '$Estado_actual', '$Empresa')";

					 $ejecutar = sqlsrv_query($conn_sis, $sql );

				}

		}
		echo '</table>';


		echo "Cargos"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(16)->getHighestRow();

			$numeros = "/^[0-9]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";

			echo '<table border=1><tr><td>idCargo</td><td>Descripcion</td><td>id_departamento</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idCargo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Descripcion = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();

				if (preg_match($numeros, $idCargo) && preg_match($letras, $Descripcion)) {
					//echo "correcto";
					$sql = "INSERT INTO cargos(idCargo, Descripcion, id_departamento) VALUES('$idCargo', '$Descripcion', '3')";

					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$idCargo.'</td>';
					echo '<td>'.$Descripcion.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO cargos(idCargo, Descripcion, id_departamento) VALUES('$idCargo', '$Descripcion', '3')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}


		}

		echo '</table>';


		echo "Turno"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(15)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";



			echo '<table border=1><tr><td>idTurno</td><td>Descripcion</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idTurno = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Descripcion = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();

				if (preg_match($numeros, $idTurno) && preg_match($letras, $Descripcion)) {
					//echo "correcto";
					$sql = "INSERT INTO TurnoEmpleados(idTurno, Descripcion) VALUES('$idTurno', '$Descripcion')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$idTurno.'</td>';
					echo '<td>'.$Descripcion.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO TurnoEmpleados(idTurno, Descripcion) VALUES('$idTurno', '$Descripcion')";

					$ejecutar = sqlsrv_query($conn_sis, $sql );

				}

		}

		echo '</table>';


		echo "Empleados"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(14)->getHighestRow();

			$numeros = "/^[0-9]+$/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$numero_telefono = "/^[0-9]{10}$/";
			$ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
			$email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
			$sueldo = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
			$rfc = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";



			echo '<table border=1><tr><td>idEmpleado</td><td>Nombre</td>
		  <td>RFC</td><td>Telefono</td><td>Correo</td><td>Domicilio</td><td>fechaIngreso</td><td>idContrato</td>
			<td>idTurno</td><td>Genero</td><td>idCargo</td><td>sueldo_base</td><td>comision</td>
			<td>Estado</td><td>id_departamento</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idEmpleado = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		    $RFC = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $Telefono = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $Correo = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $Domicilio = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $fechaIngreso = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
				$idContrato = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		    $idTurno = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		    $Genero = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		    $idCargo = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
		    $sueldo_base = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
		    $comision = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
				$Estado = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();


				if (preg_match($numeros, $idEmpleado) && preg_match($name, $Nombre) && preg_match($rfc, $RFC) && preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($letras2, $Domicilio) && preg_match($fecha1, $fechaIngreso) && preg_match($numeros, $idContrato) && preg_match($numeros, $idTurno) && preg_match($numeros, $Genero) && preg_match($numeros, $idCargo) && preg_match($sueldo, $sueldo_base) && preg_match($numeros, $comision)
				&& preg_match($numeros, $Estado)) {

					//echo "correcto";
					$sql = "INSERT INTO Empleados (idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, idCargo, sueldo_base, comision, Estado, id_departamento)
					 VALUES('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$idCargo', '$sueldo_base', '$comision', '$Estado','3')";

					 $ejecutar = sqlsrv_query($conn_sis, $sql);

				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
								echo '<tr>';
								echo '<td>'.$idEmpleado.'</td>';
								echo '<td>'.$Nombre.'</td>';
						    echo '<td>'.$RFC.'</td>';
						    echo '<td>'.$Telefono.'</td>';
						    echo '<td>'.$Correo.'</td>';
						    echo '<td>'.$Domicilio.'</td>';
						    echo '<td>'.$fechaIngreso.'</td>';
								echo '<td>'.$idContrato.'</td>';
						    echo '<td>'.$idTurno.'</td>';
						    echo '<td>'.$Genero.'</td>';
						    echo '<td>'.$idCargo.'</td>';
						    echo '<td>'.$sueldo_base.'</td>';
						    echo '<td>'.$comision.'</td>';
								echo '<td>'.$Estado.'</td>';


								echo '</tr>';

								$sql = "INSERT INTO Empleados (idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, idCargo, sueldo_base, comision, Estado, id_departamento)
								 VALUES('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$idCargo', '$sueldo_base', '$comision', '$Estado', '3')";

								 $ejecutar = sqlsrv_query($conn_sis, $sql);
				}

		}
		echo '</table>';

	/*
		echo "Prueba"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(24)->getHighestRow();
			$numeros = "/^[0-9]+/";
			$letras = "/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/";
			$numero_telefono = "/^[0-9]{10}$/";
			$ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
			$email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
			$sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
			$rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";

			echo '<table border=1><tr><td>id</td><td>nombre</td><td>rfc</td><td>domicilio</td><td>telefono</td><td>correo</td><td>fecha_inicio</td>
			<td>id_turno</td><td>genero</td><td>id_cat_emp</td><td>sueldo_base</td><td>comision</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require 'conexionSQL.php'; //Agregamos la conexión
				$id = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$rfc = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$domicilio = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$telefono = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				$correo = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
				$fecha_inicio = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
				$id_turno = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
				$genero = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
				$id_cat_emp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
				$sueldo_base = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
				$comision = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();



				if (preg_match($numeros, $id) && preg_match($letras, $nombre) && preg_match($rfc_nuevo, $rfc) && preg_match($ubicacion, $domicilio) && preg_match($numero_telefono, $telefono) && preg_match($email, $correo) && preg_match($numeros, $fecha_inicio) && preg_match($numeros, $id_turno) && preg_match($numeros, $genero) && preg_match($numeros, $id_cat_emp) && preg_match($sueldo, $sueldo_base) && preg_match($numeros, $comision)) {
					echo "correcto";
					$sql = "INSERT INTO prueba(id, nombre, rfc, domicilio, telefono, correo, fecha_inicio, id_turno, genero, id_cat_emp, sueldo_base, comision) VALUES('$id', '$nombre', '$rfc', '$domicilio', '$telefono', '$correo', '$fecha_inicio', '$id_turno', '$genero', '$id_cat_emp', '$sueldo_base', '$comision')";

					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require 'conexionSQL_incorrecto.php'; //Agregamos la conexión
					echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id.'</td>';
					echo '<td>'.$nombre.'</td>';
					echo '<td>'.$rfc.'</td>';
					echo '<td>'.$domicilio.'</td>';
					echo '<td>'.$telefono.'</td>';
					echo '<td>'.$correo.'</td>';
					echo '<td>'.$fecha_inicio.'</td>';
					echo '<td>'.$id_turno.'</td>';
					echo '<td>'.$genero.'</td>';
					echo '<td>'.$id_cat_emp.'</td>';
					echo '<td>'.$sueldo_base.'</td>';
					echo '<td>'.$comision.'</td>';


					echo '</tr>';

					$sql = "INSERT INTO prueba(id, nombre, rfc, domicilio, telefono, correo, fecha_inicio, id_turno, genero, id_cat_emp, sueldo_base, comision)
					VALUES('$id', '$nombre', '$rfc', '$domicilio', '$telefono', '$correo', '$fecha_inicio', '$id_turno', '$genero', '$id_cat_emp', '$sueldo_base', '$comision')";

					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}

		echo '</table>';
	*/



		echo "Pedido Proveedores"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(7)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


			echo '<table border=1><tr><td>id_pedido</td><td>id_producto</td><td>id_proveedor</td>
			<td>id_empleado</td><td>fecha</td><td>cantidad</td><td>tiempo_estimado</td><td>estado</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
 			require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_pedido = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_producto = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$id_proveedor = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$id_empleado = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $fecha = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $cantidad = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
				$tiempo_estimado = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		    $estado = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_pedido) && preg_match($numeros, $id_producto) && preg_match($numeros, $id_proveedor) && preg_match($numeros, $id_empleado) && preg_match($fecha1, $fecha) && preg_match($numeros, $cantidad) && preg_match($letras2, $tiempo_estimado) && preg_match($numeros, $estado) ) {
					//echo "correcto";
					$sql = "INSERT INTO PedidoProveedores(id_pedido,id_producto,id_proveedor,id_empleado,fecha,cantidad,tiempo_estimado, estado)
					 VALUES('$id_pedido', '$id_producto', '$id_proveedor', '$id_empleado', '$fecha', '$cantidad', '$tiempo_estimado', '$estado')";

			     $ejecutar = sqlsrv_query($conn_sis, $sql);
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_pedido.'</td>';
					echo '<td>'.$id_producto.'</td>';
					echo '<td>'.$id_proveedor.'</td>';
					echo '<td>'.$id_empleado.'</td>';
					echo '<td>'.$fecha.'</td>';
					echo '<td>'. $cantidad.'</td>';
					echo '<td>'. $tiempo_estimado.'</td>';
					echo '<td>'. $estado.'</td>';


					echo '</tr>';

					$sql = "INSERT INTO PedidoProveedores(id_pedido,id_producto,id_proveedor,id_empleado,fecha,cantidad,tiempo_estimado, estado)
					 VALUES('$id_pedido', '$id_producto', '$id_proveedor', '$id_empleado', '$fecha', '$cantidad', '$tiempo_estimado', '$estado')";

					 $ejecutar = sqlsrv_query($conn_sis, $sql);
				 }
		}
		echo '</table>';

		echo "Compras"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(9)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


			echo '<table border=1><tr><td>id_compras</td><td>id_proveedor</td><td>id_producto</td><td>id_pedido</td><td>cantidad</td><td>fecha_compra</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
 			require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_compras = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_proveedor = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		    $id_producto = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $id_pedido = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $cantidad = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $fecha_compra = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_compras) && preg_match($numeros, $id_proveedor) && preg_match($numeros, $id_producto) && preg_match($numeros, $id_pedido) && preg_match($numeros, $cantidad) && preg_match($fecha1, $fecha_compra)) {
					$sql = "INSERT INTO Compras (id_compras, id_proveedor, id_producto, id_pedido, cantidad, fecha_compra)
			    VALUES('$id_compras', '$id_proveedor', '$id_producto', '$id_pedido', '$cantidad', '$fecha_compra')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					echo '<tr>';
					echo '<td>'.$id_compras.'</td>';
					echo '<td>'.$id_proveedor.'</td>';
			    echo '<td>'.$id_producto.'</td>';
			    echo '<td>'.$id_pedido.'</td>';
			    echo '<td>'.$cantidad.'</td>';
			    echo '<td>'.$fecha_compra.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO Compras (id_compras, id_proveedor, id_producto, id_pedido, cantidad, fecha_compra)
			    VALUES('$id_compras', '$id_proveedor', '$id_producto', '$id_pedido', '$cantidad', '$fecha_compra')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';



		echo "Tipo devolucion"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(13)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$letras = "/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/";
			echo '<table border=1><tr><td>id_tipo</td><td>nombre</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_tipo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_tipo) && preg_match($letras, $nombre)) {
					//echo "correcto";
					$sql = "INSERT INTO tipo_devolucion (id_tipo, nombre) VALUES('$id_tipo', '$nombre')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_tipo.'</td>';
					echo '<td>'. $nombre.'</td>';
					echo '</tr>';

					$sql = "INSERT INTO tipo_devolucion (id_tipo, nombre) VALUES('$id_tipo', '$nombre')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';


		echo "Devoluciones de Proveedores"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(6)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$sueldo = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


			echo '<table border=1><tr><td>id_devolucion</td><td>id_producto</td><td>id_proveedor</td>
			<td>fecha_devolucion</td><td>descripcion</td><td>cantidad</td><td>precio_unitario</td><td>monto_total</td><td>estado_devolucion</td>
		  <td>tipo_devolucion</td><td>id_compra</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_devolucion = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_producto = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
			  $id_proveedor = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$fecha_devolucion = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$descripcion = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				$cantidad = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $precio_unitario = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		    $monto_total = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		    $estado_devolucion = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		    $tipo_devolucion = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		    $id_compra = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_devolucion) && preg_match($numeros, $id_producto) && preg_match($numeros, $id_proveedor) && preg_match($fecha1, $fecha_devolucion) && preg_match($letras2, $descripcion) && preg_match($numeros, $cantidad) && preg_match($sueldo, $precio_unitario) && preg_match($sueldo, $monto_total) && preg_match($numeros, $estado_devolucion) && preg_match($numeros, $tipo_devolucion) && preg_match($numeros, $id_compra) ) {
					echo "correcto";
					$sql = "INSERT INTO devolucion_proveedores(id_devolucion, id_producto, id_proveedor, fecha_devolucion, descripcion, cantidad, precio_unitario, monto_total, estado_devolucion, tipo_devolucion, id_compra) VALUES('$id_devolucion', '$id_producto', '$id_proveedor', '$fecha_devolucion', '$descripcion', '$cantidad', '$precio_unitario', '$monto_total', '$estado_devolucion', '$tipo_devolucion', '$id_compra')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_devolucion.'</td>';
					echo '<td>'.$id_producto.'</td>';
					echo '<td>'.$id_proveedor.'</td>';
					echo '<td>'.$fecha_devolucion.'</td>';
					echo '<td>'.$descripcion.'</td>';
					echo '<td>'.$cantidad.'</td>';
					echo '<td>'.$precio_unitario.'</td>';
					echo '<td>'.$monto_total.'</td>';
					echo '<td>'.$estado_devolucion.'</td>';
					echo '<td>'.$tipo_devolucion.'</td>';
					echo '<td>'.$id_compra.'</td>';
					echo '</tr>';

					$sql = "INSERT INTO devolucion_proveedores(id_devolucion, id_producto, id_proveedor, fecha_devolucion, descripcion, cantidad, precio_unitario, monto_total, estado_devolucion, tipo_devolucion, id_compra) VALUES('$id_devolucion', '$id_producto', '$id_proveedor', '$fecha_devolucion', '$descripcion', '$cantidad', '$precio_unitario', '$monto_total', '$estado_devolucion', '$tipo_devolucion', '$id_compra')";

					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}


		}

		echo '</table>';



		echo "Mermas"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(10)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

			echo '<table border=1><tr><td>id_merma</td><td>id_producto</td><td>id_empleado</td><td>descripcion</td><td>fecha</td><td>cantidad</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
		    $id_merma = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_producto = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		    $id_empleado = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $descripcion = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $fecha = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $cantidad = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_merma) && preg_match($numeros, $id_producto) && preg_match($numeros, $id_empleado) && preg_match($letras2, $descripcion) && preg_match($fecha1, $fecha) && preg_match($numeros, $cantidad)) {
					$sql = "INSERT INTO Mermas (id_merma, id_producto, id_empleado, descripcion, fecha, cantidad)
			    VALUES('$id_merma', '$id_producto', '$id_empleado', '$descripcion', '$fecha', '$cantidad')";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					echo '<tr>';
					echo '<td>'.$id_merma.'</td>';
					echo '<td>'.$id_producto.'</td>';
					echo '<td>'.$id_empleado.'</td>';
					echo '<td>'.$descripcion.'</td>';
					echo '<td>'.$fecha.'</td>';
					echo '<td>'.$cantidad.'</td>';
					echo '</tr>';

					$sql = "INSERT INTO Mermas (id_merma, id_producto, id_empleado, descripcion, fecha, cantidad)
					VALUES('$id_merma', '$id_producto', '$id_empleado', '$descripcion', '$fecha', '$cantidad')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';


		echo "Clientes"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(11)->getHighestRow();
		$numeros = "/^[0-9]+$/";
			$sexo = "/[0-1]/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$numero_telefono = "/^[0-9]{10}$/";
			$ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
			$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
			$sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
			$rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([1-2][9][0-9][0-9]|[2][0][0][0-9])$/";


			echo '<table border=1><tr><td>idCliente</td><td>NombreCompleto</td><td>RFC</td>
			<td>Telefono</td><td>Correo</td><td>fechaNac</td><td>Domicilio</td><td>Genero</td><td>id_departamento</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idCliente = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$NombreCompleto = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		    $RFC = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $Telefono = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $Correo = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $fechaNac = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $Domicilio = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		    $Genero = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();

				if (preg_match($numeros, $idCliente) && preg_match($name, $NombreCompleto) && preg_match($rfc_nuevo, $RFC) && preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($fecha1, $fechaNac) && preg_match($letras2, $Domicilio) && preg_match($sexo, $Genero)) {
					//echo "correcto";
					$sql = "INSERT INTO Clientes (idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero, id_departamento)
					VALUES('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero', '3')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$idCliente.'</td>';
					echo '<td>'. $NombreCompleto.'</td>';
					echo '<td>'. $RFC.'</td>';
					echo '<td>'. $Telefono.'</td>';
					echo '<td>'. $Correo.'</td>';
					echo '<td>'. $fechaNac.'</td>';
			    echo '<td>'. $Domicilio.'</td>';
			    echo '<td>'. $Genero.'</td>';


					echo '</tr>';

					$sql = "INSERT INTO Clientes (idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero, id_departamento)
					VALUES('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero', '3')";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';


		echo "Ventas"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(18)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$sueldo = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


			echo '<table border=1><tr><td>id_venta</td><td>id_producto</td><td>id_cliente</td><td>id_empleado</td>
			<td>cantidad</td><td>fecha</td><td>precio_venta</td><td>total</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_venta = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_producto = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$id_cliente = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$id_empleado = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$cantidad = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				$fecha = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $precio_venta = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		    $total = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_venta) && preg_match($numeros, $id_producto) && preg_match($numeros, $id_cliente) && preg_match($numeros, $id_empleado) && preg_match($numeros, $cantidad) && preg_match($fecha1, $fecha) && preg_match($sueldo, $precio_venta) && preg_match($sueldo, $total) ) {
					//echo "correcto";
					$sql = "INSERT INTO ventas (id_venta,id_producto,id_cliente,id_empleado,cantidad,fecha, precio_venta, total)
					VALUES('$id_venta', '$id_producto', '$id_cliente', '$id_empleado', '$cantidad', '$fecha', '$precio_venta', '$total')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_venta.'</td>';
					echo '<td>'.$id_producto.'</td>';
					echo '<td>'.$id_cliente.'</td>';
					echo '<td>'.$id_empleado.'</td>';
					echo '<td>'.$cantidad.'</td>';
					echo '<td>'.$fecha.'</td>';
			    echo '<td>'.$precio_venta.'</td>';
			    echo '<td>'.$total.'</td>';


					echo '</tr>';

					$sql = "INSERT INTO ventas (id_venta,id_producto,id_cliente,id_empleado,cantidad,fecha, precio_venta, total)
					VALUES('$id_venta', '$id_producto', '$id_cliente', '$id_empleado', '$cantidad', '$fecha', '$precio_venta', '$total')";

			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';


		echo "Orden de Cobro"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(23)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$sueldo = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


			echo '<table border=1><tr><td>id_ordencobro</td><td>id_producto</td><td>id_cliente</td>
			<td>id_empleado</td><td>fecha_emision</td><td>cantidad_producto</td><td>subtotal</td><td>iva</td>
		  <td>total</td><td>estado</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_ordencobro = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		    $id_producto = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$id_cliente = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$id_empleado = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$fecha_emision = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $cantidad_producto = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $subtotal = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		    $iva = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		    $total = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		    $estado = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_ordencobro) && preg_match($numeros, $id_producto) && preg_match($numeros, $id_cliente) && preg_match($numeros, $id_empleado) && preg_match($fecha1, $fecha_emision) && preg_match($numeros, $cantidad_producto) && preg_match($sueldo, $subtotal) && preg_match($sueldo, $iva) && preg_match($sueldo, $total) ) {
					//echo "correcto";
					$sql = "INSERT INTO ordenCobro (id_ordencobro, id_producto, id_cliente, id_empleado, fecha_emision, cantidad_producto, subtotal, iva, total, estado)
					VALUES('$id_ordencobro', '$id_producto', '$id_cliente', '$id_empleado', '$fecha_emision', '$cantidad_producto', '$subtotal', '$iva', '$total', $estado)";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_ordencobro.'</td>';
			    echo '<td>'. $id_producto.'</td>';
					echo '<td>'.$id_cliente.'</td>';
					echo '<td>'.$id_empleado.'</td>';
					echo '<td>'. $fecha_emision.'</td>';
			    echo '<td>'. $cantidad_producto.'</td>';
			    echo '<td>'. $subtotal.'</td>';
			    echo '<td>'. $iva.'</td>';
			    echo '<td>'. $total.'</td>';
			    echo '<td>'. $estado.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO ordenCobro (id_ordencobro, id_producto, id_cliente, id_empleado, fecha_emision, cantidad_producto, subtotal, iva, total, estado)
					VALUES('$id_ordencobro', '$id_producto', '$id_cliente', '$id_empleado', '$fecha_emision', '$cantidad_producto', '$subtotal', '$iva', '$total', $estado)";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}


		echo "Devoluciones Clientes"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(12)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

			echo '<table border=1><tr><td>idDevolucion</td><td>idProducto</td><td>idEmpleado</td><td>idCliente</td><td>Razon</td><td>fechaDevolucion</td>
		  <td>Estado_devolucion</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$idDevolucion = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$idProducto = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		    $idEmpleado = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $idCliente = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $Razon = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $fechaDevolucion = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $Estado_devolucion = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();

				if (preg_match($numeros, $idDevolucion) && preg_match($numeros, $idProducto) && preg_match($numeros, $idEmpleado) && preg_match($numeros, $idCliente) && preg_match($numeros, $Razon) && preg_match($fecha1, $fechaDevolucion) && preg_match($numeros, $Estado_devolucion)) {
					//echo "correcto";
					$sql = "INSERT INTO devoluciones_clientes (idDevolucion, idProducto, idEmpleado, idCliente, Razon, fechaDevolucion, Estado_devolucion)
			    VALUES('$idDevolucion', '$idProducto', '$idEmpleado', '$idCliente', '$Razon', '$fechaDevolucion', '$Estado_devolucion')";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$idDevolucion.'</td>';
					echo '<td>'. $idProducto.'</td>';
					echo '<td>'.$idEmpleado.'</td>';
					echo '<td>'.$idCliente.'</td>';
					echo '<td>'.$Razon.'</td>';
					echo '<td>'.$fechaDevolucion.'</td>';
					echo '<td>'.$Estado_devolucion.'</td>';

					echo '</tr>';


					$sql = "INSERT INTO devoluciones_clientes (idDevolucion, idProducto, idEmpleado, idCliente, Razon, fechaDevolucion, Estado_devolucion)
					VALUES('$idDevolucion', '$idProducto', '$idEmpleado', '$idCliente', '$Razon', '$fechaDevolucion', '$Estado_devolucion')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';


		echo "Factura Proveedor"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(22)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$sueldo = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


			echo '<table border=1><tr><td>id_factura</td><td>id_proveedor</td><td>id_empleado</td><td>id_pedido</td>
		  <td>fecha_registro</td><td>precio_unitario</td><td>cantidad</td><td>total</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_factura = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_proveedor = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$id_empleado = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $id_pedido = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $fecha_registro = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $precio_unitario = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $cantidad = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		    $total = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_factura) && preg_match($numeros, $id_proveedor) && preg_match($numeros, $id_empleado) && preg_match($numeros, $id_pedido) && preg_match($fecha1, $fecha_registro) && preg_match($sueldo, $precio_unitario) && preg_match($numeros, $cantidad) && preg_match($sueldo, $total)) {
				//	echo "correcto";
					$sql = "INSERT INTO FacturasProveedor (id_factura, id_proveedor, id_empleado, id_pedido, fecha_registro, precio_unitario, cantidad, total)
					VALUES('$id_factura', '$id_proveedor', '$id_empleado', '$id_pedido', '$fecha_registro', '$precio_unitario', '$cantidad', '$total')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_factura.'</td>';
					echo '<td>'. $id_proveedor.'</td>';
					echo '<td>'. $id_empleado.'</td>';
			    echo '<td>'.$id_pedido.'</td>';
			    echo '<td>'.$fecha_registro.'</td>';
			    echo '<td>'.$precio_unitario.'</td>';
			    echo '<td>'.$cantidad.'</td>';
			    echo '<td>'.$total.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO FacturasProveedor (id_factura, id_proveedor, id_empleado, id_pedido, fecha_registro, precio_unitario, cantidad, total)
					VALUES('$id_factura', '$id_proveedor', '$id_empleado', '$id_pedido', '$fecha_registro', '$precio_unitario', '$cantidad', '$total')";
			    $ejecutar = sqlsrv_query($conn_sis, $sql );
				}
		}
		echo '</table>';


		echo "Requisicion"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(20)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$ubicacion = "/[A-Z,a-z, ,0-9,#,.,-]+/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";



			echo '<table border=1><tr><td>id_requisicion</td><td>id_empleado</td><td>fecha_registrorequi</td><td>automovil</td>
		  <td>cliente</td><td>cantidad_piezas</td><td>nombre_piezas</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_requisicion = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_empleado = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		    $fecha_registrorequi = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $automovil = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $cliente = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $cantidad_piezas = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $nombre_piezas = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_requisicion) && preg_match($numeros, $id_empleado) && preg_match($fecha1, $fecha_registrorequi) && preg_match($numeros, $automovil) && preg_match($numeros, $cliente) && preg_match($numeros, $cantidad_piezas) && preg_match($ubicacion, $nombre_piezas)) {
					//echo "correcto";
					$sql = "INSERT INTO Requisicion (id_requisicion, id_empleado, fecha_registrorequi, automovil, cliente, cantidad_piezas, nombre_piezas)
					VALUES('$id_requisicion', '$id_empleado', '$fecha_registrorequi', '$automovil', '$cliente', '$cantidad_piezas', '$nombre_piezas')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión

					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_requisicion.'</td>';
					echo '<td>'.$id_empleado.'</td>';
					echo '<td>'.$fecha_registrorequi.'</td>';
					echo '<td>'.$automovil.'</td>';
					echo '<td>'.$cliente.'</td>';
					echo '<td>'.$cantidad_piezas.'</td>';
					echo '<td>'.$nombre_piezas.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO Requisicion (id_requisicion, id_empleado, fecha_registrorequi, automovil, cliente, cantidad_piezas, nombre_piezas)
					VALUES('$id_requisicion', '$id_empleado', '$fecha_registrorequi', '$automovil', '$cliente', '$cantidad_piezas', '$nombre_piezas')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );

				}

		}
		echo '</table>';



		echo "Orden Salida"."\n";
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(21)->getHighestRow();
			$numeros = "/^[0-9]+$/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
			$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
			$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
			$sueldo = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

			echo '<table border=1><tr><td>id_orden_salida</td><td>id_empleado</td><td>fecha_salida</td><td>cantidad_piezas</td>
		  <td>nombre_piezas</td><td>id_requisicion</td><td>precio_unitario</td><td>total</td></tr>';

			for ($i = 2; $i <= $numRows; $i++) {
require '../../Models/conexionSQL.php'; //Agregamos la conexión
				$id_orden_salida = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$id_empleado = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		    $fecha_salida = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		    $cantidad_piezas = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		    $nombre_piezas = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		    $id_requisicion = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		    $precio_unitario = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		    $total = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();

				if (preg_match($numeros, $id_orden_salida) && preg_match($numeros, $id_empleado) && preg_match($fecha1, $fecha_salida) && preg_match($numeros, $cantidad_piezas) && preg_match($letras, $nombre_piezas) && preg_match($numeros, $id_requisicion) && preg_match($sueldo, $precio_unitario) && preg_match($sueldo, $total) ) {
					//echo "correcto";
					$sql = "INSERT INTO OrdenSalida (id_orden_salida, id_empleado, fecha_salida, cantidad_piezas, nombre_piezas, id_requisicion, precio_unitario, total)
					VALUES('$id_orden_salida', '$id_empleado', '$fecha_salida', '$cantidad_piezas', '$nombre_piezas', '$id_requisicion', '$precio_unitario', '$total')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}else {
					require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión
					//echo "incorrecto";
					echo '<tr>';
					echo '<td>'.$id_orden_salida.'</td>';
					echo '<td>'. $id_empleado.'</td>';
					echo '<td>'.$fecha_salida.'</td>';
					echo '<td>'.$cantidad_piezas.'</td>';
					echo '<td>'.$nombre_piezas.'</td>';
					echo '<td>'.$id_requisicion.'</td>';
					echo '<td>'.$precio_unitario.'</td>';
					echo '<td>'.$total.'</td>';

					echo '</tr>';

					$sql = "INSERT INTO OrdenSalida (id_orden_salida, id_empleado, fecha_salida, cantidad_piezas, nombre_piezas, id_requisicion, precio_unitario, total)
					VALUES('$id_orden_salida', '$id_empleado', '$fecha_salida', '$cantidad_piezas', '$nombre_piezas', '$id_requisicion', '$precio_unitario', '$total')";
					$ejecutar = sqlsrv_query($conn_sis, $sql );
				}

		}
		echo '</table>';


				echo "Nomina refaccionaria"."\n";
					//Asigno la hoja de calculo activa
					$objPHPExcel->setActiveSheetIndex(0);
					//Obtengo el numero de filas del archivo
					$numRows = $objPHPExcel->setActiveSheetIndex(17)->getHighestRow();
					$numeros = "/^[0-9]+$/";
					$ubicacion = "/[A-Z,a-z, ,0-9,#,.,-]+/";
					$sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
					$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
					$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";



					echo '<table border=1><tr><td>idNomina</td><td>sumaPercepcion</td><td>idEmpleado</td><td>idPeriodicidad</td>
					<td>salarioBase</td><td>sumaBonos</td><td>sumaDeduccion</td><td>totalNeto</td><td>Fecha</td><td>Fecha</td>id_departamento</tr>';

					for ($i = 2; $i <= $numRows; $i++) {
						require '../../Models/conexionSQL.php'; //Agregamos la conexión
						$idNomina = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
						$sumaPercepcion = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				    $idEmpleado = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				    $idPeriodicidad = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				    $salarioBase = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				    $sumaBonos = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
				    $sumaDeduccion = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
				    $totalNeto = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
						$Fecha = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();


						if (preg_match($numeros, $idNomina) & preg_match($correcto_decimales, $sumaPercepcion) && preg_match($numeros, $idEmpleado)
						&& preg_match($numeros, $idPeriodicidad) && preg_match($correcto_decimales, $salarioBase) && preg_match($correcto_decimales, $sumaBonos)
						&& preg_match($correcto_decimales, $sumaDeduccion) && preg_match($correcto_decimales, $totalNeto) && preg_match($fecha1, $Fecha)) {
							require '../../Models/conexionSQL.php'; //Agregamos la conexión
						  //echo "correcto";
						  $sql = "INSERT INTO nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha, id_departamento)
						  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha', '3')";

						  $ejecutar = sqlsrv_query($conn_sis, $sql );
						}else {
							require '../../Models/conexionSQL_incorrecto.php'; //Agregamos la conexión


							//echo "incorrecto";
							echo '<tr>';
							echo '<td>'.$idNomina.'</td>';
							echo '<td>'. $sumaPercepcion.'</td>';
							echo '<td>'.$idEmpleado.'</td>';
							echo '<td>'.$idPeriodicidad.'</td>';
							echo '<td>'.$salarioBase.'</td>';
							echo '<td>'.$sumaBonos.'</td>';
							echo '<td>'.$sumaDeduccion.'</td>';
							echo '<td>'.$totalNeto.'</td>';
							echo '<td>'.$Fecha.'</td>';
							echo '</tr>';

							$sql = "INSERT INTO nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha, id_departamento)
						  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha', '3')";

						  $ejecutar = sqlsrv_query($conn_sis, $sql );
						}

				}
				echo '</table>';






/////////////////////////////////////////////////////

	////////////////////VENTAAAAAAAAAAAAAAAAAAAAAS/////////////////////////////////

	// 1) Conexión
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
	if ($conexión = mysql_connect("localhost", "root", "", 3306)){
	echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";


	echo "Clientes";
	// 2) Preparar la orden SQL
	$consulta= "SELECT*FROM clientes";

	// 3) Ejecutar la orden y obtener datos
	mysql_select_db("ventas");
	$datos= mysql_query ($consulta);

	    $numeros = "/^[0-9]+$/";
	    $sexo = "/[0-1]/";
	    $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
			$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	    $numero_telefono = "/^[0-9]{10}$/";
	    $ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
	    $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	    $sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
			$rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";
			$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([1-2][9][0-9][0-9]|[2][0][0][0-9])$/";



	echo '<table border=1><tr><td>idCliente</td><td>Nombre</td><td>apellidoPat</td><td>apellidoMat</td><td>RFC</td>
	<td>Telefono</td><td>Correo</td><td>fechaNac</td><td>Domicilio</td><td>Genero</td><td>id_departamento</td></tr>';
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

	if (preg_match($numeros, $idCliente) && preg_match($name, $NombreCompleto) && preg_match($rfc_nuevo, $RFC) && preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($fecha1, $fechaNac) && preg_match($ubicacion, $Domicilio) && preg_match($sexo, $Genero)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO Clientes(idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero, id_departamento)
	  VALUES ('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero', '1')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

	  //echo "incorrecto";

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

	  $sql = "INSERT INTO Clientes(idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero, id_departamento)
	  VALUES ('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero', '1')";

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

	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	echo '<table border=1><tr><td>idTipo</td><td>Descripcion</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes

	while ($fila = mysql_fetch_array($datos)){

	$idTipo = $fila["idtipoPago"];
	$Descripcion = utf8_encode($fila["Descripcion"]);


	      if (preg_match($numeros, $idTipo) && preg_match($letras, $Descripcion)) {
					require '../../Models/conexionSQL.php'; //Agregamos la conexión
	        //echo "correcto";

	        $sql = "INSERT INTO TipoPago(idTipo, Descripcion) VALUES ('$idTipo', '$Descripcion')";
	        $ejecutar = sqlsrv_query($conn_sis, $sql );

	      }else {
					require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	        echo "<tr>";
	                echo '<td>'.$fila["idtipoPago"].'</td>';
	                echo '<td>'.$fila["Descripcion"].'</td>';

	        echo "</tr>";

	        //echo "incorrecto";
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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

	echo '<table border=1><tr><td>idEstado</td><td>Descripcion</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){


	$idTipo = $fila["idEstado"];
	$Descripcion = utf8_encode($fila["Descripcion"]);

	if (preg_match($numeros, $idTipo) && preg_match($letras, $Descripcion)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO catalogo_estado_factura(idEstado, Descripcion)
	  VALUES ('$idTipo', '$Descripcion')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

	  echo "<tr>";
	          echo '<td>'.$fila["idEstado"].'</td>';
	          echo '<td>'.$fila["Descripcion"].'</td>';
	  echo "</tr>";

	  $sql = "INSERT INTO catalogo_estado_factura(idEstado, Descripcion)
	  VALUES ('$idTipo', '$Descripcion')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}

	}



	//////////////////////////////////////////////////////////////////////////

	echo "Contratos";
	// 2) Preparar la orden SQL
	$consulta= "SELECT*FROM contratos";

	// 3) Ejecutar la orden y obtener datos
	mysql_select_db("ventas");
	$datos= mysql_query ($consulta);

	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

	echo '<table border=1><tr><td>idContrato</td><td>Descripcion</td><td>Tiempo</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idContrato = $fila["idContrato"];
	$Descripcion = utf8_encode($fila["Descripcion"]);
	$Tiempo = $fila["Tiempo"];

	    if (preg_match($numeros, $idContrato) && preg_match($letras, $Descripcion) && preg_match($numeros, $Tiempo)) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	      //echo "correcto";

	      $sql = "INSERT INTO contratos(idContrato, Descripcion, Tiempo)
	      VALUES ('$idContrato', '$Descripcion', '$Tiempo')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );

	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";

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

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	echo '<table border=1><tr><td>idTurno</td><td>Descripcion</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){



	$idTurno = $fila["idTurno"];
	$Descripcion = utf8_encode($fila["Descripcion"]);

	    if (preg_match($numeros, $idTurno) && preg_match($letras, $Descripcion)) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	      //echo "correcto";

	      $sql = "INSERT INTO TurnoEmpleados(idTurno, Descripcion)
	      VALUES ('$idTurno', '$Descripcion')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );

	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";

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

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	echo '<table border=1><tr><td>id_departamento</td><td>Descripcion</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$id_departamento = $fila["idDepartamento"];
	$Descripcion = utf8_encode($fila["Descripcion"]);

	    if (preg_match($numeros, $id_departamento) && preg_match($letras, $Descripcion)) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	      //echo "correcto";

	      $sql = "INSERT INTO departamento(id_departamento, Descripcion)
	      VALUES ('$id_departamento', '$Descripcion')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );

	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";

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

	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	echo '<table border=1><tr><td>idCargo</td><td>Descripcion</td><td>id_departamento</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idCargo = $fila["idCargo"];
	$Descripcion = utf8_encode($fila["Descripcion"]);

	if (preg_match($numeros, $idCargo) && preg_match($letras, $Descripcion)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO cargos(idCargo, Descripcion, id_departamento)
	  VALUES ('$idCargo', '$Descripcion', '1')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

	  echo "<tr>";
	          echo '<td>'.$fila["idCargo"].'</td>';
	          echo '<td>'.$fila["Descripcion"].'</td>';

	  echo "</tr>";

	  $sql = "INSERT INTO cargos(idCargo, Descripcion, id_departamento)
	  VALUES ('$idCargo', '$Descripcion', '1')";

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

	$numeros = "/^[0-9]+$/";
	$sexo = "/[0-1]/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

	$numero_telefono = "/^[0-9]{10}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	$sueldo = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


	echo '<table border=1><tr><td>idEmpleado</td><td>Nombre</td><td>apellidoPat</td><td>apellidoMat</td><td>RFC</td>
	<td>Telefono</td><td>Correo</td><td>Domicilio</td><td>fechaIngreso</td><td>idContrato</td><td>idTurno</td>
	<td>Genero</td><td>idCargo</td><td>sueldo_base</td><td>comision</td><td>Estado</td><td>id_departamento</td></tr>';
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
	$idCargo = $fila["idCargo"];
	$sueldo_base = $fila["sueldo_base"];
	$comision = $fila["comision"];
	$Estado = $fila["Estado"];

	$Nombre = $Nombre ." ". $apellidoPat ." ". $apellidoMat;

	    if (preg_match($numeros, $idEmpleado) && preg_match($name, $Nombre) && preg_match($rfc_nuevo, $RFC) &&
	    preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($letras2, $Domicilio)
	    && preg_match($fecha1, $fechaIngreso) && preg_match($numeros, $idContrato) && preg_match($numeros, $idTurno)
	    && preg_match($sexo, $Genero) && preg_match($numeros, $idCargo) && preg_match($sexo, $Estado)) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	   // echo "correcto";

	      $sql = "INSERT INTO Empleados(idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, idCargo, sueldo_base, comision, Estado, id_departamento)
	      VALUES ('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$idCargo', '$sueldo_base', '$comision', '$Estado', '1')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );


	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";

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

	      $sql = "INSERT INTO Empleados(idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, idCargo, sueldo_base, comision, Estado, id_departamento)
	      VALUES ('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$idCargo', '$sueldo_base', '$comision', '$Estado', '1')";

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

	$numeros = "/^[0-9]+$/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$sexo = "/[0-5]/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	$numero_telefono = "/^[0-9]{8}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	$rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";




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
	&& preg_match($fecha1, $fecha) && preg_match($numeros, $idEmpleado) && preg_match($sexo, $idEstado)) {

		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	     // echo "correcto";

	      $sql = "INSERT INTO Facturas(idFactura, IVA, idCliente, importe, total, idTipoPago, lugarEmision, fecha, idEmpleado, idEstado)
	      VALUES ('$idFactura', '$IVA', '$idCliente', '$importe', '$total', '$idTipoPago', '$lugarEmision', '$fecha', '$idEmpleado', '$idEstado')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );

	  }else {
			require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";
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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9]+/";
	$sueldo = "/^-?[0-9]+([,\.][0-9]*)?$/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

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

	    if (preg_match($numeros, $idRequisicion) && preg_match($numeros, $idDepartamento) && preg_match($fecha1, $fecha)
	    && preg_match($letras, $Descripcion) && preg_match($correcto_decimales, $Total) && preg_match($numeros, $idEmpleadoRecep)
	    && preg_match($numeros, $idCliente) && preg_match($numeros, $idFactura) ) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	    //echo "cirrecto";
	    $sql = "INSERT INTO ordenesExternas(idRequisicion, idDepartamento, fecha, Descripcion, Total, idEmpleadoRecep, idCliente, idFactura)
	    VALUES ('$idRequisicion', '$idDepartamento', '$fecha', '$Descripcion', '$Total', '$idEmpleadoRecep', '$idCliente', '$idFactura')";

	    $ejecutar = sqlsrv_query($conn_sis, $sql );

	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";

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

$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


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

	      if (preg_match($numeros, $idOrdenSalida) && preg_match($numeros, $idFactura) && preg_match($fecha1, $fecha)
	      && preg_match($numeros, $idEmpleado) && preg_match($numeros, $Estado) && preg_match($numeros, $idOrdenExterna)) {
					require '../../Models/conexionSQL.php'; //Agregamos la conexión
	        //echo "cirrecto";

	        $sql = "INSERT INTO ordenSalidaProductos(idOrdenSalida, idFactura, fecha, idEmpleado, Estado, idOrdenExterna)
	        VALUES ('$idOrdenSalida', '$idFactura', '$fecha', '$idEmpleado', '$Estado', '$idOrdenExterna')";

	        $ejecutar = sqlsrv_query($conn_sis, $sql );
	      }else {
					require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	        //echo "incorrecto";


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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
	$hora1 = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";


	echo '<table border=1><tr><td>idOrdenSalidaAutomoviles</td><td>idFactura</td><td>idEmpleado</td><td>Fecha</td><td>Hora</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){


	$idOrdenSalidaAutomovil = $fila["idordenesSalidaAutomovil"];
	$idFactura = $fila["idFactura"];
	$idEmpleado = $fila["idEmpleado"];
	$Fecha = $fila["Fecha"];
	$Hora = $fila["Hora"];

	    if (preg_match($numeros, $idOrdenSalidaAutomovil) && preg_match($numeros, $idFactura) && preg_match($numeros, $idEmpleado) && preg_match($fecha1, $Fecha)
		&& preg_match($hora1, $Hora)) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	      //echo "correcto";

	      $sql = "INSERT INTO ordenesSalidaAutomovil(idOrdenSalidaAutomovil, idFactura, idEmpleado, Fecha, Hora)
	      VALUES ('$idOrdenSalidaAutomovil', '$idFactura', '$idEmpleado', '$Fecha', '$Hora')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );


	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	     // echo "incorrecto";

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

$numeros = "/^[0-9]+$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


	echo '<table border=1><tr><td>idCartaFactura</td><td>idFactura</td><td>idEmpleado</td><td>Fecha</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idCartaFactura = $fila["idcartaFactura"];
	$idFactura = $fila["idFactura"];
	$idEmpleado = $fila["idEmpleado"];
	$fecha = $fila["Fecha"];

	    if (preg_match($numeros, $idCartaFactura) && preg_match($numeros, $idFactura) && preg_match($numeros, $idEmpleado)
	    && preg_match($fecha1, $fecha)) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	      //echo "correcto";

	      $sql = "INSERT INTO cartafactura(idCartaFactura, idFactura, idEmpleado, fecha)
	      VALUES ('$idCartaFactura', '$idFactura', '$idEmpleado', '$fecha')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );

	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";

	        echo "<tr>";
	              echo '<td>'.$fila["idcartaFactura"].'</td>';
	              echo '<td>'.$fila["idFactura"].'</td>';
	              echo '<td>'.$fila["idEmpleado"].'</td>';
	              echo '<td>'.$fila["Fecha"].'</td>';

	       echo "</tr>";

	       $sql = "INSERT INTO cartafactura(idCartaFactura, idFactura, idEmpleado, fecha)
	       VALUES ('$idCartaFactura', '$idFactura', '$idEmpleado', '$fecha')";

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

	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
	  $motorchasis = "/[A-Z]{3}-[0-9]{3}/";

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

	      if (preg_match($numeros, $idAutoConsideracion) && preg_match($numeros, $idEmpleado) && preg_match($fecha1, $Fecha)
	      && preg_match($correcto_decimales, $Monto) && preg_match($numeros, $Estado) && preg_match($numeros, $idCliente) && preg_match($motorchasis, $noChasis) ) {
					require '../../Models/conexionSQL.php'; //Agregamos la conexión
	        //echo "correcto";

	        $sql = "INSERT INTO autoconsideracion(idAutoConsideracion, idEmpleado, Fecha, Monto, Estado, idCliente, noChasis)
	        VALUES ('$idAutoConsideracion', '$idEmpleado', '$Fecha', '$Monto', '$Estado', '$idCliente', '$noChasis')";

	        $ejecutar = sqlsrv_query($conn_sis, $sql );

	      }else {
					require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	        //echo "incorrecto";

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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


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

	    if (preg_match($numeros, $idVale) && preg_match($numeros, $idAutoConsideracion) && preg_match($fecha1, $Fecha)
	    && preg_match($numeros, $idEmpleado) && preg_match($numeros, $idFactura) && preg_match($correcto_decimales, $Monto)) {
				require '../../Models/conexionSQL.php'; //Agregamos la conexión
	      //echo "correcto";

	      $sql = "INSERT INTO valeautoseminuevo(idVale, idAutoConsideracion, Fecha, idEmpleado, idFactura, Monto)
	      VALUES ('$idVale', '$idAutoConsideracion', '$Fecha', '$idEmpleado', '$idFactura', '$Monto')";

	      $ejecutar = sqlsrv_query($conn_sis, $sql );

	    }else {
				require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	      //echo "incorrecto";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

	echo '<table border=1><tr><td>idModelo</td><td>Nombre</td><td>id_departamento</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idModelo = $fila["idModelos"];
	$Nombre = $fila["Nombre"];

	if (preg_match($numeros, $idModelo) && preg_match($letras2, $Nombre) ) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO catalogomodelos(idModelo, Nombre, id_departamento)
	  VALUES ('$idModelo', '$Nombre', '1')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

	  echo "<tr>";
	          echo '<td>'.$fila["idModelos"].'</td>';
	          echo '<td>'.$fila["Nombre"].'</td>';

	  echo "</tr>";

	  $sql = "INSERT INTO catalogomodelos(idModelo, Nombre, id_departamento)
	  VALUES ('$idModelo', '$Nombre', '1')";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";


	echo '<table border=1><tr><td>idMarca</td><td>Descripcion</td><td>id_departamento</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idMarca = $fila["idMarca"];
	$Descripcion = $fila["Descripcion"];

	if (preg_match($numeros, $idMarca) && preg_match($name, $Descripcion) ) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";

	  $sql = "INSERT INTO catalogomarcas(idMarca, Descripcion, id_departamento)
	  VALUES ('$idMarca', '$Descripcion', '1')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );


	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";

	  echo "<tr>";
	          echo '<td>'.$fila["idMarca"].'</td>';
	          echo '<td>'.$fila["Descripcion"].'</td>';

	  echo "</tr>";

	  $sql = "INSERT INTO catalogomarcas(idMarca, Descripcion, id_departamento)
	  VALUES ('$idMarca', '$Descripcion', '1')";

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

$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,., -]+/";

	echo '<table border=1><tr><td>idYear</td><td>Ano</td><td>id_departamento</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idYear = $fila["idAnos"];
	$Ano = $fila["Ano"];

	if (preg_match($numeros, $idYear) && preg_match($ano_nuevo, $Ano)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";

	    $sql = "INSERT INTO catalogoanos(idYear, Ano, id_departamento)
	    VALUES ('$idYear', '$Ano', '1')";

	    $ejecutar = sqlsrv_query($conn_sis, $sql );


	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

	  echo "<tr>";
	          echo '<td>'.$fila["idAnos"].'</td>';
	          echo '<td>'.$fila["Ano"].'</td>';

	  echo "</tr>";

		$sql = "INSERT INTO catalogoanos(idYear, Ano, id_departamento)
		VALUES ('$idYear', '$Ano', '1')";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	echo '<table border=1><tr><td>idTipo</td><td>Descripcion</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){



	$idTipo = $fila["idTipo"];
	$Descripcion = utf8_encode($fila["Descripcion"]);

	if (preg_match($numeros, $idTipo) && preg_match($letras, $Descripcion)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO cat_tipo_auto(idTipo, Descripcion)
	  VALUES ('$idTipo', '$Descripcion')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,.]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	$numero_telefono = "/^[0-9]{10}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";

	echo '<table border=1><tr><td>idCompania</td><td>Nombre</td><td>Correo</td><td>Telefono</td><td>Direccion</td>
	<td>Localidad</td><td>Estado</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idCompania = $fila["idCompania"];
	$Nombre = utf8_encode($fila["Nombre"]);
	$Correo = utf8_encode($fila["Correo"]);
	$Telefono = utf8_encode($fila["Telefono"]);
	$Direccion = utf8_encode($fila["Direccion"]);
	$Localidad = utf8_encode($fila["Localidad"]);
	$Estado = utf8_encode($fila["Estado"]);

	if (preg_match($numeros, $idCompania) && preg_match($letras, $Nombre) && preg_match($email, $Correo)
	&& preg_match($numero_telefono, $Telefono) && preg_match($letras2, $Direccion) && preg_match($letras, $Localidad)
	&& preg_match($letras, $Estado) ) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO companiaseguros(idCompania, Nombre, Correo, Telefono, Direccion, Localidad, Estado)
	  VALUES ('$idCompania', '$Nombre', '$Correo', '$Telefono', '$Direccion', '$Localidad', '$Estado')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

	  echo "<tr>";
	          echo '<td>'.$fila["idCompania"].'</td>';
	          echo '<td>'.$fila["Nombre"].'</td>';
	          echo '<td>'.$fila["Correo"].'</td>';
	          echo '<td>'.$fila["Telefono"].'</td>';
	          echo '<td>'.$fila["Direccion"].'</td>';
	          echo '<td>'.$fila["Localidad"].'</td>';
	          echo '<td>'.$fila["Estado"].'</td>';

	  echo "</tr>";

	  $sql = "INSERT INTO companiaseguros(idCompania, Nombre, Correo, Telefono, Direccion, Localidad, Estado)
	  VALUES ('$idCompania', '$Nombre', '$Correo', '$Telefono', '$Direccion', '$Localidad', '$Estado')";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	echo '<table border=1><tr><td>idSeguro</td><td>Descripcion</td><td>idCompania</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){


	$idSeguro = $fila["idSeguro"];
	$Descripcion = utf8_encode($fila["Descripcion"]);
	$idCompania = utf8_encode($fila["idCompania"]);

	if (preg_match($numeros, $idSeguro) && preg_match($letras, $Descripcion) && preg_match($numeros, $idCompania) ) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO seguro(idSeguro, Descripcion, idCompania)
	  VALUES ('$idSeguro', '$Descripcion', '$idCompania')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

	  echo "<tr>";
	          echo '<td>'.$fila["idSeguro"].'</td>';
	          echo '<td>'.$fila["Descripcion"].'</td>';
	          echo '<td>'.$fila["idCompania"].'</td>';


	  echo "</tr>";

	  $sql = "INSERT INTO seguro(idSeguro, Descripcion, idCompania)
	  VALUES ('$idSeguro', '$Descripcion', '$idCompania')";

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

$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
	$numero_telefono = "/^[0-9]{9}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

	echo '<table border=1><tr><td>ideAutomovil</td><td>idModelo</td><td>Precio</td><td>Marca</td>
	<td>idYear</td><td>cantidadActual</td><td>cantidadMinima</td><td>idSeguro</td><td>cantidadMaxima</td><td>noPuertas</td>
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
	$cantidadMinima = $fila["cantidadMinima"];
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
	&& preg_match($numeros, $cantidadMinima) && preg_match($numeros, $idSeguro) && preg_match($numeros, $cantidadMaxima)
	&& preg_match($numeros, $noPuertas) && preg_match($numeros, $CapacidadPas) && preg_match($correcto_decimales, $Peso)
	&& preg_match($numeros, $noAsientos) && preg_match($correcto_decimales, $Rendimiento) && preg_match($numeros, $Cilindros)
	&& preg_match($numeros, $idTipo)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO Automovil(ideAutomovil, idModelo, Precio, Marca, idYear, cantidadActual, cantidadMinima, idSeguro, cantidadMaxima, noPuertas, CapacidadPas, Peso, noAsientos, Rendimiento, Cilindros, idTipo)
	  VALUES ('$ideAutomovil', '$idModelo', '$Precio', '$Marca', '$idYear', '$cantidadActual', '$cantidadMinima', '$idSeguro', '$cantidadMaxima', '$noPuertas', '$CapacidadPas', '$Peso', '$noAsientos', '$Rendimiento', '$Cilindros', $idTipo)";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

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

	          $sql = "INSERT INTO Automovil(ideAutomovil, idModelo, Precio, Marca, idYear, cantidadActual, cantidadMinima, idSeguro, cantidadMaxima, noPuertas, CapacidadPas, Peso, noAsientos, Rendimiento, Cilindros, idTipo)
	          VALUES ('$ideAutomovil', '$idModelo', '$Precio', '$Marca', '$idYear', '$cantidadActual', '$cantidadMinima', '$idSeguro', '$cantidadMaxima', '$noPuertas', '$CapacidadPas', '$Peso', '$noAsientos', '$Rendimiento', '$Cilindros', $idTipo)";

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
$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

	echo '<table border=1><tr><td>idEstadoVenta</td><td>estado_venta</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){



	$idEstadoVenta = $fila["idEstadoVenta"];
	$estado_venta = utf8_encode($fila["estadoVenta"]);

	if (preg_match($numeros, $idEstadoVenta) && preg_match($letras, $estado_venta)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";
	  $sql = "INSERT INTO CatalogoEdoVenta(idEstadoVenta, estado_venta)
	  VALUES ('$idEstadoVenta', '$estado_venta')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";
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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	echo '<table border=1><tr><td>idUbicacion</td><td>Ubicacion</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){


	$idUbicacion = $fila["idUbicacion"];
	$Ubicacion = utf8_encode($fila["Ubicacion"]);

	if (preg_match($numeros, $idUbicacion) && preg_match($letras, $Ubicacion)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO UbicacionAuto(idUbicacion, Ubicacion)
	  VALUES ('$idUbicacion', '$Ubicacion')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";
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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

	echo '<table border=1><tr><td>idEstado</td><td>Estado</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){


	$idEstado = $fila["idEstado"];
	$Estado = utf8_encode($fila["Estado"]);

	if (preg_match($numeros, $idEstado) && preg_match($letras, $Estado)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";
	  $sql = "INSERT INTO catalogoestadoautomovil(idEstado, Estado)
	  VALUES ('$idEstado', '$Estado')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
	  $motorchasis = "/[A-Z]{3}-[0-9]{3}/";


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

	if (preg_match($numeros, $idAutomovil) && preg_match($motorchasis, $noChasis) && preg_match($motorchasis, $noMotor)
	&& preg_match($numeros, $idFactura) && preg_match($numeros, $idEstadoVenta) && preg_match($numeros, $idUbicacion)
	&& preg_match($fecha1, $FechaLlegada) && preg_match($numeros, $idEstadoAuto)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO serieautos(idAutomovil, noChasis, noMotor, idFactura, idEstadoVenta, idUbicacion, FechaLlegada, idEstadoAuto)
	  VALUES ('$idAutomovil', '$noChasis', '$noMotor', '$idFactura', '$idEstadoVenta', '$idUbicacion', '$FechaLlegada', '$idEstadoAuto')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

	echo '<table border=1><tr><td>idOrdenEnt</td><td>idEmpleado</td><td>Costo</td><td>Fecha</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idOrdenEnt = $fila["idOrdenEnt"];
	$idEmpleado = utf8_encode($fila["idEmpleado"]);
	$Costo = utf8_encode($fila["Costo"]);
	$Fecha = utf8_encode($fila["Fecha"]);

	if (preg_match($numeros, $idOrdenEnt) && preg_match($numeros, $idEmpleado) && preg_match($correcto_decimales, $Costo)
	&& preg_match($fecha1, $Fecha)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

	  $sql = "INSERT INTO ordenesllegadaautomovil(idOrdenEnt, idEmpleado, Costo, Fecha)
	  VALUES ('$idOrdenEnt', '$idEmpleado', '$Costo', '$Fecha')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";
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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";



	echo '<table border=1><tr><td>idRequisicion</td><td>fechaEmision</td><td>idOrdenEntrada</td><td>idEmpleado</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){


	$idRequisicion = $fila["idRequisicion"];
	$fechaEmision = utf8_encode($fila["fechaEmision"]);
	$idOrdenEntrada = utf8_encode($fila["idOrdenEntrada"]);
	$idEmpleado = utf8_encode($fila["idEmpleado"]);

	if (preg_match($numeros, $idRequisicion) && preg_match($fecha1, $fechaEmision) && preg_match($numeros, $idOrdenEntrada)
	&& preg_match($numeros, $idEmpleado)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";
	  $sql = "INSERT INTO requisicionrevisionservicios(idRequisicion, fechaEmision, idOrdenEntrada, idEmpleado)
	  VALUES ('$idRequisicion', '$fechaEmision', '$idOrdenEntrada', '$idEmpleado')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,.]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
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
	&& preg_match($letras2, $Domicilio) && preg_match($email, $Correo)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";
	  $sql = "INSERT INTO plantas(idPlanta, Nombre, Telefono, Domicilio, Correo)
	  VALUES ('$idPlanta', '$Nombre', '$Telefono', '$Domicilio', '$Correo')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";
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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
	$numero_telefono = "/^[0-9]{10}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

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
	&& preg_match($fecha1, $fechaOrden) && preg_match($numeros, $Cantidad) && preg_match($fecha1, $fechaLlegada)
	&& preg_match($numeros, $Estado) && preg_match($numeros, $idPlanta)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	  //echo "correcto";

		$sql = "INSERT INTO ordenespedidosautomovil(idOrdenPedido, idEmpleado, idCoche, fechaOrden, Cantidad, fechaLlegada, Estado, idPlanta)
	  VALUES ('$idOrdenPedido', '$idEmpleado', '$idCoche', '$fechaOrden', '$Cantidad', '$fechaLlegada', '$Estado', '$idPlanta')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";
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

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	$numero_telefono = "/^[0-9]{10}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

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
	&& preg_match($numeros, $idCliente) && preg_match($letras, $Razon) && preg_match($fecha1, $fechaDevolucion)
	&& preg_match($numeros, $Estado_devolucion) && preg_match($correcto_decimales, $Costo)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";

	  $sql = "INSERT INTO devoluciones_automovil(idDevolucion, id_automovil, idEmpleado, idCliente, Razon, fechaDevolucion, Estado_devolucion, Costo)
	  VALUES ('$idDevolucion', '$id_automovil', '$idEmpleado', '$idCliente', '$Razon', '$fechaDevolucion', '$Estado_devolucion', '$Costo')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

	echo '<table border=1><tr><td>idPeriodicidad</td><td>Descripcion</td><td>fechaInicial</td><td>fechaFinal</td></tr>';
	// 4) Ir Imprimiendo las filas resultantes
	while ($fila = mysql_fetch_array($datos)){

	$idPeriodicidad = $fila["idPeriodicidad"];
	$Descripcion = utf8_encode($fila["Descripcion"]);
	$fechaInicial = utf8_encode($fila["fechaInicial"]);
	$fechaFinal = utf8_encode($fila["fechaFinal"]);

	if (preg_match($numeros, $idPeriodicidad) && preg_match($letras, $Descripcion) && preg_match($fecha1, $fechaInicial) && preg_match($fecha1, $fechaFinal)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";

	  $sql = "INSERT INTO periodicidad(idPeriodicidad, Descripcion, fechaInicial, fechaFinal)
	  VALUES ('$idPeriodicidad', '$Descripcion', '$fechaInicial', '$fechaFinal')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	 // echo "incorrecto";
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
	$numeros = "/^[0-9]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
	$numero_telefono = "/^[0-9]{10}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

	echo '<table border=1><tr><td>idNomina</td><td>sumaPercepcion</td><td>idEmpleado</td><td>idPeriodicidad</td>
	<td>salarioBase</td><td>sumaBonos</td><td>sumaDeduccion</td><td>totalNeto</td><td>Fecha</td><td>Fecha</td>id_departamento</tr>';
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
	&& preg_match($correcto_decimales, $sumaDeduccion) && preg_match($correcto_decimales, $totalNeto) && preg_match($fecha1, $Fecha)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	//  echo "correcto";
	  $sql = "INSERT INTO nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha, id_departamento)
	  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha', '1')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );
	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	//  echo "incorrecto";
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
	  $sql = "INSERT INTO nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha, id_departamento)
	  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha', '1')";

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
	$numeros = "/^[0-9]+$/";
	$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
	$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
	$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
	$numero_telefono = "/^[0-9]{10}$/";
	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
	$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
	$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


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

	if (preg_match($numeros, $idFactura) && preg_match($letras, $Concepto) && preg_match($fecha1, $Fecha)
	&& preg_match($correcto_decimales, $Cargo) && preg_match($correcto_decimales, $Abono) && preg_match($correcto_decimales, $Saldo)
	&& preg_match($numeros, $idEmpleado) && preg_match($correcto_decimales, $Intereses) && preg_match($numeros, $idAbono)) {
		require '../../Models/conexionSQL.php'; //Agregamos la conexión
	 // echo "correcto";

	  $sql = "INSERT INTO Abonos(idFactura, Concepto, Fecha, Cargo, Abono, Saldo, idEmpleado, Intereses, idAbono)
	  VALUES ('$idFactura', '$Concepto', '$Fecha', '$Cargo', '$Abono', '$Saldo', '$idEmpleado', '$Intereses', '$idAbono')";

	  $ejecutar = sqlsrv_query($conn_sis, $sql );

	}else {
		require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
	  //echo "incorrecto";

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


	//////////////////////////////////////////////////////////////////////////////////

	require '../../Models/conexionSQL.php'; //Agregamos la conexión

// Conectando y seleccionado la base de datos
$dbconn = pg_connect("host=localhost dbname=taller user=postgres password=diego port=3310" )
    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = 'SELECT * FROM "SolicitudRefacciones"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>id_mecanico</td><td>refaccion</td>
  <td>vehiculo</td><td>cliente</td><td>cantidad</td><td>fecha_solicitud</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$id_mecanico = $line[1];
$refaccion = $line[2];
$vehiculo = $line[3];
$cliente = $line[4];
$cantidad = $line[5];
$fecha_solicitud = $line[6];

if (preg_match($numeros, $id) && preg_match($numeros, $id_mecanico) && preg_match($letras, $refaccion) &&
preg_match($letras, $vehiculo) && preg_match($numeros, $cliente) && preg_match($fecha1, $fecha_solicitud) && preg_match($numeros, $cantidad)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
  //echo "correcto";

  $sql = "INSERT INTO SolicitudRefacciones(id, id_mecanico, refaccion, vehiculo, cliente, cantidad, fecha_solicitud)
  VALUES ('$id', '$id_mecanico', '$refaccion', '$vehiculo', '$cliente', '$cantidad', '$fecha_solicitud')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
  //echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";
  echo "\t</tr>\n";

  $sql = "INSERT INTO SolicitudRefacciones(id, id_mecanico, refaccion, vehiculo, cliente, cantidad, fecha_solicitud)
  VALUES ('$id', '$id_mecanico', '$refaccion', '$vehiculo', '$cliente', '$cantidad', '$fecha_solicitud')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

////////////////////////////////////////////////////////////


// Realizando una consulta SQL
$query = 'SELECT * FROM "TipoServicios"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>nombreServicio</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$nombreServicio = $line[1];

if (preg_match($numeros, $id) && preg_match($letras, $nombreServicio)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO TipoServicios(id, nombreServicio)
  VALUES ('$id', '$nombreServicio')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
  //echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO TipoServicios(id, nombreServicio)
  VALUES ('$id', '$nombreServicio')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

/////////////////////////////////////////////////////////////////


// Realizando una consulta SQL
$query = 'SELECT * FROM "Clientes"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$sexo = "/^[0-1]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
$numero_telefono = "/^[0-9]{10}$/";
$rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([1-2][9][0-9][0-9]|[2][0][0][0-9])$/";


// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>idCliente</td><td>NombreCompleto</td>
<td>RFC</td><td>Telefono</td><td>Correo</td><td>fechaNac</td><td>Domicilio</td>
<td>Genero</td><td>id_departamento</td></tr>';
while ($line = pg_fetch_array($result)) {

$idCliente = $line[0];
$NombreCompleto = $line[1];
$RFC = $line[2];
$Telefono = $line[3];
$Correo = $line[4];
$fechaNac = $line[5];
$Domicilio = $line[6];
$Genero = $line[7];


if (preg_match($numeros, $idCliente) && preg_match($name, $NombreCompleto) && preg_match($rfc_nuevo, $RFC) &&
preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($fecha1, $fechaNac)
&& preg_match($letras2, $Domicilio) && preg_match($sexo, $Genero)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

	$sql = "INSERT INTO Clientes (idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero, id_departamento)
	VALUES('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero', '2')";
	$ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
			echo "\t\t<td>$line[2]</td>\n";
			echo "\t\t<td>$line[3]</td>\n";
			echo "\t\t<td>$line[4]</td>\n";
			echo "\t\t<td>$line[5]</td>\n";
			echo "\t\t<td>$line[6]</td>\n";
			echo "\t\t<td>$line[7]</td>\n";

  echo "\t</tr>\n";

	$sql = "INSERT INTO Clientes (idCliente, NombreCompleto, RFC, Telefono, Correo, fechaNac, Domicilio, Genero, id_departamento)
	VALUES('$idCliente', '$NombreCompleto', '$RFC', '$Telefono', '$Correo', '$fechaNac', '$Domicilio', '$Genero', '2')";

	$ejecutar = sqlsrv_query($conn_sis, $sql );

}

}
echo "</table>\n";




//////////////////////////////////////////////////////////////////

// Realizando una consulta SQL
$query = 'SELECT * FROM "Diagnostico"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>detalle_auto</td><td>id_mecanico</td><td>vehiculo</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$detalle_auto = $line[1];
$id_mecanico = $line[2];
$vehiculo = $line[3];


if (preg_match($numeros, $id) && preg_match($letras, $detalle_auto) && preg_match($numeros, $id_mecanico)
&& preg_match($letras, $vehiculo)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO Diagnostico(id, detalle_auto, id_mecanico, vehiculo)
  VALUES ('$id', '$detalle_auto', '$id_mecanico', '$vehiculo')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";


  echo "\t</tr>\n";

    $sql = "INSERT INTO Diagnostico(id, detalle_auto, id_mecanico, vehiculo)
    VALUES ('$id', '$detalle_auto', '$id_mecanico', '$vehiculo')";

    $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

//////////////////////////////////////////////////////////////////////////////
// Realizando una consulta SQL
$query = 'SELECT * FROM "Herramientas"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>nombreHerramienta</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$nombreHerramienta = $line[1];


if (preg_match($numeros, $id) && preg_match($letras, $nombreHerramienta)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO Herramientas(id, nombreHerramienta)
  VALUES ('$id', '$nombreHerramienta')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO Herramientas(id, nombreHerramienta)
  VALUES ('$id', '$nombreHerramienta')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

///////////////////////////////////////////////////////////////////
// Realizando una consulta SQL
$query = 'SELECT * FROM "Consumibles"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.]+/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>producto</td><td>cantidad</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$producto = $line[1];
$cantidad = $line[2];


if (preg_match($numeros, $id) && preg_match($letras, $producto) && preg_match($numeros, $cantidad)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO Consumibles(id, producto, cantidad)
  VALUES ('$id', '$producto', '$cantidad')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";


  echo "\t</tr>\n";

  $sql = "INSERT INTO Consumibles(id, producto, cantidad)
  VALUES ('$id', '$producto', '$cantidad')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

//////////////////////////////////////////////////////////////////////

// Realizando una consulta SQL
$query = 'SELECT * FROM "Empleados"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
$numero_telefono = "/^[0-9]{10}$/";
$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
$rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>idEmpleado</td><td>Nombre</td><td>apellidoPat</td><td>apellidoMat</td><td>RFC</td>
<td>Telefono</td><td>Correo</td><td>Domicilio</td><td>fechaIngreso</td><td>idContrato</td><td>idTurno</td>
<td>Genero</td><td>idCargo</td><td>sueldo_base</td><td>comision</td><td>Estado</td><td>id_departamento</td></tr>';
while ($line = pg_fetch_array($result)) {

$idEmpleado = $line[0];
$Nombre = $line[1];
$RFC = $line[2];
$Telefono = $line[3];
$Correo = $line[4];
$Domicilio = $line[5];
$fechaIngreso = $line[6];
$idContrato = $line[7];
$idTurno = $line[8];
$Genero = $line[9];
$idCargo = $line[10];
$sueldo_base = $line[11];
$comision = $line[12];
$Estado = $line[13];


if (preg_match($numeros, $idEmpleado) && preg_match($name, $Nombre) && preg_match($rfc_nuevo, $RFC) &&
    preg_match($numero_telefono, $Telefono) && preg_match($email, $Correo) && preg_match($letras2, $Domicilio)
    && preg_match($fecha1, $fechaIngreso) && preg_match($numeros, $idContrato) && preg_match($numeros, $idTurno)
    && preg_match($numeros, $Genero) && preg_match($numeros, $idCargo) && preg_match($numeros, $Estado)) {
			require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO Empleados(idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, idCargo, sueldo_base, comision, Estado, id_departamento)
      VALUES ('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$idCargo', '$sueldo_base', '$comision', '$Estado', '2')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";
      echo "\t\t<td>$line[7]</td>\n";
      echo "\t\t<td>$line[8]</td>\n";
      echo "\t\t<td>$line[9]</td>\n";
      echo "\t\t<td>$line[10]</td>\n";
      echo "\t\t<td>$line[11]</td>\n";
      echo "\t\t<td>$line[12]</td>\n";
      echo "\t\t<td>$line[13]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO Empleados(idEmpleado, Nombre, RFC, Telefono, Correo, Domicilio, fechaIngreso, idContrato, idTurno, Genero, idCargo, sueldo_base, comision, Estado, id_departamento)
      VALUES ('$idEmpleado', '$Nombre', '$RFC', '$Telefono', '$Correo', '$Domicilio', '$fechaIngreso', '$idContrato', '$idTurno', '$Genero', '$idCargo', '$sueldo_base', '$comision', '$Estado', '2')";

      $ejecutar = sqlsrv_query($conn_sis, $sql );

}

}
echo "</table>\n";

//////////////////////////////////////////////////////////////////////////////////
// Realizando una consulta SQL
$query = 'SELECT * FROM "RecepcionVehiculoNuevos"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
$motorchasis = "/[A-Z]{3}-[0-9]{3}/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>numero_identificacion</td><td>id_modelo</td>
<td>color</td><td>condicionLlegada</td><td>Seguro</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$numero_identificacion = $line[1];
$id_modelo = $line[2];
$color = $line[3];
$condicionLlegada = $line[4];
$Seguro = $line[5];

if (preg_match($numeros, $id) && preg_match($motorchasis, $numero_identificacion) && preg_match($numeros, $id_modelo) &&
preg_match($letras, $color) && preg_match($letras2, $condicionLlegada) && preg_match($letras2, $Seguro)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO RecepcionVehiculoNuevos(id, numero_identificacion, id_modelo, color, condicionLlegada, Seguro)
  VALUES ('$id', '$numero_identificacion', '$id_modelo', '$color', '$condicionLlegada', '$Seguro')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";



  echo "\t</tr>\n";

  $sql = "INSERT INTO RecepcionVehiculoNuevos(id, numero_identificacion, id_modelo, color, condicionLlegada, Seguro)
  VALUES ('$id', '$numero_identificacion', '$id_modelo', '$color', '$condicionLlegada', '$Seguro')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

// Realizando una consulta SQL
$query = 'SELECT * FROM "ordenCobroTaller"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>id_empleado</td><td>cliente</td>
<td>tipo_servicios</td><td>refacciones</td><td>totalpagar</td><td>fecha_emision</td><td>lugarEmision</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$id_empleado = $line[1];
$cliente = $line[2];
$tipo_servicios = $line[3];
$refacciones = $line[4];
$totalpagar = $line[5];
$fecha_emision = $line[6];
$lugarEmision = $line[7];


if (preg_match($numeros, $id) && preg_match($numeros, $id_empleado) && preg_match($numeros, $cliente) &&
preg_match($numeros, $tipo_servicios) && preg_match($numeros, $refacciones) && preg_match($correcto_decimales, $totalpagar)
&& preg_match($fecha1, $fecha_emision) && preg_match($letras, $lugarEmision)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO ordenCobroTaller(id, id_empleado, cliente, tipo_servicios, refacciones, totalpagar, fecha_emision, lugarEmision)
  VALUES ('$id', '$id_empleado', '$cliente', '$tipo_servicios', '$refacciones', '$totalpagar', '$fecha_emision', '$lugarEmision')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";
      echo "\t\t<td>$line[7]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO ordenCobroTaller(id, id_empleado, cliente, tipo_servicios, refacciones, totalpagar, fecha_emision, lugarEmision)
  VALUES ('$id', '$id_empleado', '$cliente', '$tipo_servicios', '$refacciones', '$totalpagar', '$fecha_emision', '$lugarEmision')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

/////////////////////////////////////////////////////////////////////

// Realizando una consulta SQL
$query = 'SELECT * FROM "cargos"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>idCargo</td><td>Descripcion</td><td>id_departamento</td></tr>';
while ($line = pg_fetch_array($result)) {

$idCargo = $line[0];
$Descripcion = $line[1];

if (preg_match($numeros, $idCargo) && preg_match($letras, $Descripcion)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO cargos(idCargo, Descripcion, id_departamento)
  VALUES ('$idCargo', '$Descripcion', '2')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO cargos(idCargo, Descripcion, id_departamento)
  VALUES ('$idCargo', '$Descripcion', '2')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

/////////////////////////////////////////////////////////////////////////////

// Realizando una consulta SQL
$query = 'SELECT * FROM "Citas"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,]+/";
$letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
	$hora1 = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";


// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>idCita</td><td>idEmpleado</td><td>cliente</td><td>fecha</td>
<td>hora</td><td>tipo_servicio</td><td>descripcion_Servicio</td><td>id_mecanico</td></tr>';
while ($line = pg_fetch_array($result)) {

$idCita = $line[0];
$idEmpleado = $line[1];
$cliente = $line[2];
$fecha = $line[3];
$hora = $line[4];
$tipo_servicio = $line[5];
$descripcion_Servicio = $line[6];
$id_mecanico = $line[7];


if (preg_match($numeros, $idCita) && preg_match($numeros, $idEmpleado) && preg_match($numeros, $cliente)
&& preg_match($fecha1, $fecha) && preg_match($hora1, $hora) && preg_match($numeros, $tipo_servicio) &&
preg_match($letras2, $descripcion_Servicio) && preg_match($numeros, $id_mecanico)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
  //echo "correcto";

  $sql = "INSERT INTO Citas(idCita, idEmpleado, cliente, fecha, hora, tipo_servicio, descripcion_Servicio, id_mecanico)
  VALUES ('$idCita', '$idEmpleado', '$cliente', '$fecha', '$hora', '$tipo_servicio', '$descripcion_Servicio', '$id_mecanico')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";
      echo "\t\t<td>$line[7]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO Citas(idCita, idEmpleado, cliente, fecha, hora, tipo_servicio, descripcion_Servicio, id_mecanico)
  VALUES ('$idCita', '$idEmpleado', '$cliente', '$fecha', '$hora', '$tipo_servicio', '$descripcion_Servicio', '$id_mecanico')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

////////////////////////////////////////////////////////////////////////////////


// Realizando una consulta SQL
$query = 'SELECT * FROM "CondiciondeLlegada"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id</td><td>kilometraje</td><td>gasolina</td><td>luces</td>
<td>espejos</td><td>cauchos</td><td>faros</td><td>placa</td><td>id_cliente</td><td>id_empleado</td></tr>';
while ($line = pg_fetch_array($result)) {

$id = $line[0];
$kilometraje = $line[1];
$gasolina = $line[2];
$luces = $line[3];
$espejos = $line[4];
$cauchos = $line[5];
$faros = $line[6];
$placa = $line[7];
$id_cliente = $line[7];
$id_empleado = $line[7];



if (preg_match($numeros, $id) && preg_match($numeros, $kilometraje) && preg_match($numeros, $gasolina)
&& preg_match($numeros, $luces) && preg_match($numeros, $espejos) && preg_match($numeros, $cauchos) &&
preg_match($letras, $faros) && preg_match($letras, $placa) && preg_match($numeros, $id_cliente) && preg_match($numeros, $id_empleado)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO CondiciondeLlegada(id, kilometraje, gasolina, luces, espejos, cauchos, faros, placa, id_cliente, id_empleado)
  VALUES ('$id', '$kilometraje', '$gasolina', '$luces', '$espejos', '$cauchos', '$faros', '$placa', '$id_cliente', '$id_empleado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";
      echo "\t\t<td>$line[7]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO CondiciondeLlegada(id, kilometraje, gasolina, luces, espejos, cauchos, faros, placa, id_cliente, id_empleado)
  VALUES ('$id', '$kilometraje', '$gasolina', '$luces', '$espejos', '$cauchos', '$faros', '$placa', '$id_cliente', '$id_empleado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

/*

// Realizando una consulta SQL
$query = 'SELECT * FROM "Nomina"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>idNomina</td><td>sumaPercepcion</td><td>idEmpleado</td><td>idPeriodicidad</td>
<td>salarioBase</td><td>sumaBonos</td><td>sumaDeduccion</td><td>totalNeto</td><td>Fecha</td><td>id_departamento</td></tr>';
while ($line = pg_fetch_array($result)) {

$idNomina = $line[0];
$sumaPercepcion = $line[1];
$idEmpleado = $line[2];
$idPeriodicidad = $line[3];
$salarioBase = $line[4];
$sumaBonos = $line[5];
$sumaDeduccion = $line[6];
$totalNeto = $line[7];
$Fecha = $line[8];

if (preg_match($numeros, $idNomina) && preg_match($correcto_decimales, $sumaPercepcion) && preg_match($numeros, $idEmpleado)
&& preg_match($numeros, $idPeriodicidad) && preg_match($correcto_decimales, $salarioBase) && preg_match($correcto_decimales, $sumaBonos) &&
preg_match($correcto_decimales, $sumaDeduccion) && preg_match($correcto_decimales, $totalNeto) && preg_match($fecha1, $Fecha)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO Nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha, id_departamento)
  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha', '2')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";
      echo "\t\t<td>$line[7]</td>\n";
      echo "\t\t<td>$line[8]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO Nomina(idNomina, sumaPercepcion, idEmpleado, idPeriodicidad, salarioBase, sumaBonos, sumaDeduccion, totalNeto, Fecha, id_departamento)
  VALUES ('$idNomina', '$sumaPercepcion', '$idEmpleado', '$idPeriodicidad', '$salarioBase', '$sumaBonos', '$sumaDeduccion', '$totalNeto', '$Fecha', '2')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";
*/

////////////////////////////////////////////////////////////////////////

// Realizando una consulta SQL
$query = 'SELECT * FROM "Reparaciones"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id_reparacion</td><td>tipo_servicio</td><td>tiempo_duracion</td><td>id_empleado</td>
<td>id_vehiculo</td><td>consumibles_aplicados</td><td>id_estado</td></tr>';
while ($line = pg_fetch_array($result)) {

$id_reparacion = $line[0];
$tipo_servicio = $line[1];
$tiempo_duracion = $line[2];
$id_empleado = $line[3];
$id_vehiculo = $line[4];
$consumibles_aplicados = $line[5];
$id_estado = $line[6];


if (preg_match($numeros, $id_reparacion) && preg_match($numeros, $tipo_servicio) && preg_match($letras, $tiempo_duracion)
&& preg_match($numeros, $id_empleado) && preg_match($numeros, $id_vehiculo) && preg_match($letras, $consumibles_aplicados) &&
preg_match($numeros, $id_estado)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
  //echo "correcto";

  $sql = "INSERT INTO Reparaciones(id_reparacion, tipo_servicio, tiempo_duracion, id_empleado, id_vehiculo, consumibles_aplicados, id_estado)
  VALUES ('$id_reparacion', '$tipo_servicio', '$tiempo_duracion', '$id_empleado', '$id_vehiculo', '$consumibles_aplicados', '$id_estado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
//  echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO Reparaciones(id_reparacion, tipo_servicio, tiempo_duracion, id_empleado, id_vehiculo, consumibles_aplicados, id_estado)
  VALUES ('$id_reparacion', '$tipo_servicio', '$tiempo_duracion', '$id_empleado', '$id_vehiculo', '$consumibles_aplicados', '$id_estado')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";

///////////////////////////////////////////////////////////////
// Realizando una consulta SQL
$query = 'SELECT * FROM "Agenda"';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$numeros = "/^[0-9]+$/";
$letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
$correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
$fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


// Imprimiendo los resultados en HTML
echo '<table border=1><tr><td>id_agenda</td><td>id_cita</td><td>id_reparacion</td><td>id_empleado</td>
<td>vehiculo</td><td>id_servicio</td><td>fecha</td></tr>';
while ($line = pg_fetch_array($result)) {

$id_agenda = $line[0];
$id_cita = $line[1];
$id_reparacion = $line[2];
$id_empleado = $line[3];
$vehiculo = $line[4];
$id_servicio = $line[5];
$fecha = $line[6];


if (preg_match($numeros, $id_agenda) && preg_match($numeros, $id_cita) && preg_match($numeros, $id_reparacion)
&& preg_match($numeros, $id_empleado) && preg_match($letras, $vehiculo) && preg_match($numeros, $id_servicio) &&
preg_match($fecha1, $fecha)) {
	require '../../Models/conexionSQL.php'; //Agregamos la conexión
//  echo "correcto";

  $sql = "INSERT INTO Agenda(id_agenda, id_cita, id_reparacion, id_empleado, vehiculo, id_servicio, fecha)
  VALUES ('$id_agenda', '$id_cita', '$id_reparacion', '$id_empleado', '$vehiculo', '$id_servicio', '$fecha')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);
}else {
	require '../../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión
  //echo "incorrecto";
  echo "\t<tr>\n";
      echo "\t\t<td>$line[0]</td>\n";
      echo "\t\t<td>$line[1]</td>\n";
      echo "\t\t<td>$line[2]</td>\n";
      echo "\t\t<td>$line[3]</td>\n";
      echo "\t\t<td>$line[4]</td>\n";
      echo "\t\t<td>$line[5]</td>\n";
      echo "\t\t<td>$line[6]</td>\n";

  echo "\t</tr>\n";

  $sql = "INSERT INTO Agenda(id_agenda, id_cita, id_reparacion, id_empleado, vehiculo, id_servicio, fecha)
  VALUES ('$id_agenda', '$id_cita', '$id_reparacion', '$id_empleado', '$vehiculo', '$id_servicio', '$fecha')";

  $ejecutar = sqlsrv_query($conn_sis, $sql);

}

}
echo "</table>\n";


// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);



?>
