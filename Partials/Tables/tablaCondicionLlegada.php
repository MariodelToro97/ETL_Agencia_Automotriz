<table class="table table-striped" id="tablaCondicionLlegada" style="display:none;">
    <thead>
        <tr>
            <th scope="col">idCondición</th>
            <th scope="col">Kilometraje</th>
            <th scope="col">Gasolina</th>
            <th scope="col">Luces</th>
            <th scope="col">Espejos</th>
            <th scope="col">Cauchos</th>
            <th scope="col">Faros</th>
            <th scope="col">Placa</th>
            <th scope="col">idCliente</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
          $numeros = "/^[0-9]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9]+/";
            $letras_otros = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9, #, -]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM condiciondeLlegada ORDER BY id ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {



            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id'])) {
                ?>
                  <td><?php echo $mostrar['id']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($correcto_decimales, $mostrar['kilometraje'])) {
                   ?>
                     <td><?php echo $mostrar['kilometraje']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['kilometraje']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                   if (preg_match($numeros, $mostrar['gasolina'])) {
                     ?>
                       <td><?php echo $mostrar['gasolina']; ?></td>
                       <td hidden>2</td>
                     <?php
                   }else {

                     ?>
                     <td class="bg-danger"> <?php echo $mostrar['gasolina']; ?> </td>
                     <td hidden>1</td>

                     <?php }

                     if (preg_match($numeros, $mostrar['luces'])) {
                       ?>
                         <td><?php echo $mostrar['luces']; ?></td>
                         <td hidden>2</td>
                       <?php
                     }else {

                       ?>
                       <td class="bg-danger"> <?php echo $mostrar['luces']; ?> </td>
                       <td hidden>1</td>

                       <?php }

                       if (preg_match($numeros, $mostrar['espejos'])) {
                         ?>
                           <td><?php echo $mostrar['espejos']; ?></td>
                           <td hidden>2</td>
                         <?php
                       }else {

                         ?>
                         <td class="bg-danger"> <?php echo $mostrar['espejos']; ?> </td>
                         <td hidden>1</td>

                         <?php }

                         if (preg_match($numeros, $mostrar['cauchos'])) {
                           ?>
                             <td><?php echo $mostrar['cauchos']; ?></td>
                             <td hidden>2</td>
                           <?php
                         }else {

                           ?>
                           <td class="bg-danger"> <?php echo $mostrar['cauchos']; ?> </td>
                           <td hidden>1</td>

                           <?php }

                           if (preg_match($numeros, $mostrar['faros'])) {
                             ?>
                               <td><?php echo $mostrar['faros']; ?></td>
                               <td hidden>2</td>
                             <?php
                           }else {

                             ?>
                             <td class="bg-danger"> <?php echo $mostrar['faros']; ?> </td>
                             <td hidden>1</td>

                             <?php }

                             if (preg_match($letras_otros, $mostrar['placa'])) {
                               ?>
                                 <td><?php echo $mostrar['placa']; ?></td>
                                 <td hidden>2</td>
                               <?php
                             }else {

                               ?>
                               <td class="bg-danger"> <?php echo $mostrar['placa']; ?> </td>
                               <td hidden>1</td>

                               <?php }

                               if (preg_match($numeros, $mostrar['id_cliente'])) {
                                 ?>
                                   <td><?php echo $mostrar['id_cliente']; ?></td>
                                   <td hidden>2</td>
                                 <?php
                               }else {

                                 ?>
                                 <td class="bg-danger"> <?php echo $mostrar['id_cliente']; ?> </td>
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
                                   if ($_SESSION['rol'] != 1) {

                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosCondicionLlegada(this)" data-toggle="modal" data-target="#modalCondicionLlegada">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id']; ?>" type="button" name="" onclick="eliminarDatosCondicionLlegada(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
