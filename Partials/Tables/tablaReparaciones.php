<table class="table table-striped" id="tablaReparaciones">
    <thead>
        <tr>
            <th scope="col">idReparación</th>
            <th scope="col">tipo_servicio</th>
            <th scope="col">Tiempo</th>
            <th scope="col">id_empleado</th>
            <th scope="col">id_vehiculo</th>
            <th scope="col">Consumibles</th>
            <th scope="col">id_estado</th>

            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $estado = "/^[0-1]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/";
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Reparaciones ORDER BY id_reparacion ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_reparacion'])) {
                ?>
                  <td><?php echo $mostrar['id_reparacion']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_reparacion']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['tipo_servicio'])) {
                   ?>
                     <td><?php echo $mostrar['tipo_servicio']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['tipo_servicio']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                    if (preg_match($letras, $mostrar['tiempo_duracion'])) {
                      ?>
                        <td><?php echo $mostrar['tiempo_duracion']; ?></td>
                        <td hidden>2</td>
                      <?php
                    }else {

                      ?>
                      <td class="bg-danger"> <?php echo $mostrar['tiempo_duracion']; ?> </td>
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

                        if (preg_match($numeros, $mostrar['id_vehiculo'])) {
                          ?>
                            <td><?php echo $mostrar['id_vehiculo']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['id_vehiculo']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($letras, $mostrar['consumibles_aplicados'])) {
                            ?>
                              <td><?php echo $mostrar['consumibles_aplicados']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['consumibles_aplicados']; ?> </td>
                            <td hidden>1</td>

                            <?php }

                            if (preg_match($estado, $mostrar['id_estado'])) {
                              ?>
                                <td><?php echo $mostrar['id_estado']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['id_estado']; ?> </td>
                              <td hidden>1</td>

                              <?php }
                              if ($_SESSION['rol'] != 1) {



                       ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_reparacion']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosReparaciones(this)" data-toggle="modal" data-target="#modalReparacion">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_reparacion']; ?>" type="button" name="" onclick="eliminarDatosReparaciones(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
