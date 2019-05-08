<table class="table table-striped" id="tablaCitas">
    <thead>
        <tr>
            <th scope="col">idCita</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">idCliente</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">TipoServicio</th>
            <th scope="col">DescripcionServicio</th>
            <th scope="col">idMecanico</th>

            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Citas ORDER BY idCita ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idCita'])) {
                ?>
                  <td><?php echo $mostrar['idCita']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idCita']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['idEmpleado'])) {
                   ?>
                     <td><?php echo $mostrar['idEmpleado']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['idEmpleado']; ?> </td>
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

                        if (preg_match($hora, $mostrar['hora'])) {
                          ?>
                            <td><?php echo $mostrar['hora']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['hora']; ?> </td>
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

                            if (preg_match($letras, $mostrar['descripcion_Servicio'])) {
                              ?>
                                <td><?php echo $mostrar['descripcion_Servicio']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['descripcion_Servicio']; ?> </td>
                              <td hidden>1</td>

                              <?php }

                              if (preg_match($numeros, $mostrar['id_mecanico'])) {
                                ?>
                                  <td><?php echo $mostrar['id_mecanico']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['id_mecanico']; ?> </td>
                                <td hidden>1</td>

                                <?php }
                                if ($_SESSION['rol'] != 1) {

                       ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idCita']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosCitas(this)" data-toggle="modal" data-target="#modalCita">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idCita']; ?>" type="button" name="" onclick="eliminarDatosCitas(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
