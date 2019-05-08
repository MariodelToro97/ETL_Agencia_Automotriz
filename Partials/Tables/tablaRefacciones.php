<table class="table table-striped" id="tablaRefacciones">
    <thead>
        <tr>
            <th scope="col">idProducto</th>
            <th scope="col">idInventario</th>
            <th scope="col">idMarca</th>
            <th scope="col">idModelo</th>
            <th scope="col">idYear</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio Compra</th>
            <th scope="col">Precio de Venta</th>
            <th scope="col">Existencia</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad Mínima</th>
            <th scope="col">Cantidad Máxima</th>
            <th scope="col">Fecha Caducidad</th>

            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $letras_otro = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,-,#]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Refacciones ORDER BY id_producto ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_producto'])) {
                ?>
                  <td><?php echo $mostrar['id_producto']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_producto']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['id_inventario'])) {
                   ?>
                     <td><?php echo $mostrar['id_inventario']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['id_inventario']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                   if (preg_match($numeros, $mostrar['id_marca'])) {
                     ?>
                       <td><?php echo $mostrar['id_marca']; ?></td>
                       <td hidden>2</td>
                     <?php
                   }else {

                     ?>
                     <td class="bg-danger"> <?php echo $mostrar['id_marca']; ?> </td>
                     <td hidden>1</td>

                     <?php }

                     if (preg_match($numeros, $mostrar['id_modelo'])) {
                       ?>
                         <td><?php echo $mostrar['id_modelo']; ?></td>
                         <td hidden>2</td>
                       <?php
                     }else {

                       ?>
                       <td class="bg-danger"> <?php echo $mostrar['id_modelo']; ?> </td>
                       <td hidden>1</td>

                       <?php }

                       if (preg_match($numeros, $mostrar['id_year'])) {
                         ?>
                           <td><?php echo $mostrar['id_year']; ?></td>
                           <td hidden>2</td>
                         <?php
                       }else {

                         ?>
                         <td class="bg-danger"> <?php echo $mostrar['id_year']; ?> </td>
                         <td hidden>1</td>

                         <?php }

                         if (preg_match($letras_otro, $mostrar['Nombre'])) {
                           ?>
                             <td><?php echo $mostrar['Nombre']; ?></td>
                             <td hidden>2</td>
                           <?php
                         }else {

                           ?>
                           <td class="bg-danger"> <?php echo $mostrar['Nombre']; ?> </td>
                           <td hidden>1</td>

                           <?php }

                           if (preg_match($correcto_decimales, $mostrar['PrecioCompra'])) {
                             ?>
                               <td><?php echo $mostrar['PrecioCompra']; ?></td>
                               <td hidden>2</td>
                             <?php
                           }else {

                             ?>
                             <td class="bg-danger"> <?php echo $mostrar['PrecioCompra']; ?> </td>
                             <td hidden>1</td>

                             <?php }

                             if (preg_match($correcto_decimales, $mostrar['precioVenta'])) {
                               ?>
                                 <td><?php echo $mostrar['precioVenta']; ?></td>
                                 <td hidden>2</td>
                               <?php
                             }else {

                               ?>
                               <td class="bg-danger"> <?php echo $mostrar['precioVenta']; ?> </td>
                               <td hidden>1</td>

                               <?php }

                               if (preg_match($numeros, $mostrar['Existencia'])) {
                                 ?>
                                   <td><?php echo $mostrar['Existencia']; ?></td>
                                   <td hidden>2</td>
                                 <?php
                               }else {

                                 ?>
                                 <td class="bg-danger"> <?php echo $mostrar['Existencia']; ?> </td>
                                 <td hidden>1</td>

                                 <?php }

                                 if (preg_match($letras_otro, $mostrar['descripcion'])) {
                                   ?>
                                     <td><?php echo $mostrar['descripcion']; ?></td>
                                     <td hidden>2</td>
                                   <?php
                                 }else {

                                   ?>
                                   <td class="bg-danger"> <?php echo $mostrar['descripcion']; ?> </td>
                                   <td hidden>1</td>

                                   <?php }

                                   if (preg_match($numeros, $mostrar['cantidad_minima'])) {
                                     ?>
                                       <td><?php echo $mostrar['cantidad_minima']; ?></td>
                                       <td hidden>2</td>
                                     <?php
                                   }else {

                                     ?>
                                     <td class="bg-danger"> <?php echo $mostrar['cantidad_minima']; ?> </td>
                                     <td hidden>1</td>

                                     <?php }

                                     if (preg_match($numeros, $mostrar['cantidad_maxima'])) {
                                       ?>
                                         <td><?php echo $mostrar['cantidad_maxima']; ?></td>
                                         <td hidden>2</td>
                                       <?php
                                     }else {

                                       ?>
                                       <td class="bg-danger"> <?php echo $mostrar['cantidad_maxima']; ?> </td>
                                       <td hidden>1</td>

                                       <?php }

                                       if (preg_match($fecha1, $mostrar['fecha_caducidad'])) {
                                         ?>
                                           <td><?php echo $mostrar['fecha_caducidad']; ?></td>
                                           <td hidden>2</td>
                                         <?php
                                       }else {

                                         ?>
                                         <td class="bg-danger"> <?php echo $mostrar['fecha_caducidad']; ?> </td>
                                         <td hidden>1</td>

                                         <?php }
                                         if ($_SESSION['rol'] != 1) {



                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_producto']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosRefacciones(this)" data-toggle="modal" data-target="#modalRefaccion">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_producto']; ?>" type="button" name="" onclick="eliminarDatosRefacciones(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
