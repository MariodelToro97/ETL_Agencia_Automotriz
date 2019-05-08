<table class="table table-striped" id="tablaAgenda">
    <thead>
        <tr>
            <th scope="col">idAgenda</th>
            <th scope="col">idCita</th>
            <th scope="col">idReparación</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Auto</th>
            <th scope="col">id_servicio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Agenda ORDER BY id_agenda ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_agenda'])) {
                ?>
                  <td><?php echo $mostrar['id_agenda']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_agenda']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['id_cita'])) {
                   ?>
                     <td><?php echo $mostrar['id_cita']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['id_cita']; ?> </td>
                   <td hidden>1</td>

                   <?php }

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

                        if (preg_match($letras, $mostrar['vehiculo'])) {
                          ?>
                            <td><?php echo $mostrar['vehiculo']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['vehiculo']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($numeros, $mostrar['id_servicio'])) {
                            ?>
                              <td><?php echo $mostrar['id_servicio']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['id_servicio']; ?> </td>
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
                              if ($_SESSION['rol'] != 1) {


                       ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_agenda']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosAgenda(this)" data-toggle="modal" data-target="#modalAgenda">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_agenda']; ?>" type="button" name="" onclick="eliminarDatosAgenda(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php
        }
    ?>
    </tbody>
</table>
