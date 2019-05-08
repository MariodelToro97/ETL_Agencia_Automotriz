<table class="table table-striped" id="tablaRequisicion">
    <thead>
        <tr>
            <th scope="col">idRequisición</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Fecha de Registro</th>
            <th scope="col">Automóvil</th>
            <th scope="col">Cliente</th>
            <th scope="col">Cantidad de Piezas</th>
            <th scope="col">Nombre de Piezas</th>
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

            $sql = "SELECT * FROM Requisicion ORDER BY id_requisicion ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_requisicion'])) {
                ?>
                  <td><?php echo $mostrar['id_requisicion']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_requisicion']; ?> </td>
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

                   if (preg_match($fecha1, $mostrar['fecha_registrorequi'])) {
                     ?>
                       <td><?php echo $mostrar['fecha_registrorequi']; ?></td>
                       <td hidden>2</td>
                     <?php
                   }else {

                     ?>
                     <td class="bg-danger"> <?php echo $mostrar['fecha_registrorequi']; ?> </td>
                     <td hidden>1</td>

                     <?php }

                     if (preg_match($numeros, $mostrar['automovil'])) {
                       ?>
                         <td><?php echo $mostrar['automovil']; ?></td>
                         <td hidden>2</td>
                       <?php
                     }else {

                       ?>
                       <td class="bg-danger"> <?php echo $mostrar['automovil']; ?> </td>
                       <td hidden>1</td>

                       <?php }

                       if (preg_match($numeros, $mostrar['cliente'])) {
                         ?>
                           <td><?php echo $mostrar['cliente']; ?></td>
                           <td hidden>2</td>
                         <?php
                       }else {

                         ?>
                         <td class="bg-danger"> <?php echo $mostrar['cliente']; ?> </td>
                         <td hidden>1</td>

                         <?php }

                         if (preg_match($numeros, $mostrar['cantidad_piezas'])) {
                           ?>
                             <td><?php echo $mostrar['cantidad_piezas']; ?></td>
                             <td hidden>2</td>
                           <?php
                         }else {

                           ?>
                           <td class="bg-danger"> <?php echo $mostrar['cantidad_piezas']; ?> </td>
                           <td hidden>1</td>

                           <?php }


                           if (preg_match($letras_otro, $mostrar['nombre_piezas'])) {
                             ?>
                               <td><?php echo $mostrar['nombre_piezas']; ?></td>
                               <td hidden>2</td>
                             <?php
                           }else {

                             ?>
                             <td class="bg-danger"> <?php echo $mostrar['nombre_piezas']; ?> </td>
                             <td hidden>1</td>

                             <?php }
                             if ($_SESSION['rol'] != 1) {

                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_requisicion']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosRequisicion(this)" data-toggle="modal" data-target="#modalRequisicion">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_requisicion']; ?>" type="button" name="" onclick="eliminarDatosRequisicion(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
