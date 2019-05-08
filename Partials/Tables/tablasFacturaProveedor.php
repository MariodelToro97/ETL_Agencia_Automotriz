<table class="table table-striped" id="tablaFacturaProveedor">
    <thead>
        <tr>
            <th scope="col">idFactura</th>
            <th scope="col">idProveedor</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">idPedido</th>
            <th scope="col">Fecha de Registro</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">cantidad</th>
            <th scope="col">Total</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
          $numeros = "/^[0-9]+$/";
          $pedido = "/^[1-9][0-9]+$/";
            $name = "/^[a-zA-ZÁÉÍÓÚáéíóú]+(\s*[a-zA-ZÁÉÍÓÚáéíóú]*)*[a-zA-ZÁÉÍÓÚáéíóú]+$/";
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

            $sql = "SELECT * FROM FacturasProveedor ORDER BY id_factura ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_factura'])) {
                ?>
                  <td><?php echo $mostrar['id_factura']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_factura']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['id_proveedor'])) {
                   ?>
                     <td><?php echo $mostrar['id_proveedor']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['id_proveedor']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                   if (preg_match($numeros, $mostrar['id_empleado'])) {
                     ?>
                       <td><?php echo $mostrar['id_empleado']; ?></td>
                       <td hidden>2</td>
                     <?php
                   }else {

                     ?>
                     <td class="bg-danger"> <?php echo $mostrar['id_empleado']; ?> </td>
                     <td hidden>1</td>

                     <?php }

                     if (preg_match($numeros, $mostrar['id_pedido'])) {
                       ?>
                         <td><?php echo $mostrar['id_pedido']; ?></td>
                         <td hidden>2</td>
                       <?php
                     }else {

                       ?>
                       <td class="bg-danger"> <?php echo $mostrar['id_pedido']; ?> </td>
                       <td hidden>1</td>

                       <?php }

                       if (preg_match($fecha1, $mostrar['fecha_registro'])) {
                         ?>
                           <td><?php echo $mostrar['fecha_registro']; ?></td>
                           <td hidden>2</td>
                         <?php
                       }else {

                         ?>
                         <td class="bg-danger"> <?php echo $mostrar['fecha_registro']; ?> </td>
                         <td hidden>1</td>

                         <?php }

                         if (preg_match($correcto_decimales, $mostrar['precio_unitario'])) {
                           ?>
                             <td><?php echo $mostrar['precio_unitario']; ?></td>
                             <td hidden>2</td>
                           <?php
                         }else {

                           ?>
                           <td class="bg-danger"> <?php echo $mostrar['precio_unitario']; ?> </td>
                           <td hidden>1</td>

                           <?php }

                           if (preg_match($numeros, $mostrar['cantidad'])) {
                             ?>
                               <td><?php echo $mostrar['cantidad']; ?></td>
                               <td hidden>2</td>
                             <?php
                           }else {

                             ?>
                             <td class="bg-danger"> <?php echo $mostrar['cantidad']; ?> </td>
                             <td hidden>1</td>

                             <?php }

                             if (preg_match($correcto_decimales, $mostrar['total'])) {
                               ?>
                                 <td><?php echo $mostrar['total']; ?></td>
                                 <td hidden>2</td>
                               <?php
                             }else {

                               ?>
                               <td class="bg-danger"> <?php echo $mostrar['total']; ?> </td>
                               <td hidden>1</td>

                               <?php }
                               if ($_SESSION['rol'] != 1) {

                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_factura']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosFacturaProveedor(this)" data-toggle="modal" data-target="#modalFacturaProveedor">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_factura']; ?>" type="button" name="" onclick="eliminarDatosFacturaProveedor(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
