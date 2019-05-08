<table class="table table-striped" id="tablaMermas">
    <thead>
        <tr>
            <th scope="col">idMerma</th>
            <th scope="col">idProducto</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha</th>
            <th scope="col">Cantidad</th>
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

            $sql = "SELECT * FROM mermas ORDER BY id_merma ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {



            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_merma'])) {
                ?>
                  <td><?php echo $mostrar['id_merma']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_merma']; ?> </td>
                <td hidden>1</td>

                <?php }

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

                       if (preg_match($fecha1, $mostrar['fecha'])) {
                         ?>
                           <td><?php echo $mostrar['fecha']; ?></td>
                           <td hidden>2</td>
                         <?php
                       }else {

                         ?>
                         <td class="bg-danger"> <?php echo $mostrar['fecha']; ?> </td>
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
                           if ($_SESSION['rol'] != 1) {

                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_merma']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosMermas(this)" data-toggle="modal" data-target="#modalMermas">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_merma']; ?>" type="button" name="" onclick="eliminarDatosMermas(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
