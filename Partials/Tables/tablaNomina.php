<table class="table table-striped" id="tablaNomina">
    <thead>
        <tr>
            <th scope="col">idNomina</th>
            <th scope="col">idPercepción</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">idPeriodicidad</th>
            <th scope="col">salarioBase</th>
            <th scope="col">Bonos</th>
            <th scope="col">Deducciones</th>
            <th scope="col">Total Neto</th>
            <th scope="col">Fecha</th>
            <th scope="col">idDepartameto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";

            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{9}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $localidad = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Nomina WHERE id_departamento =" .$Pantalla;
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idNomina'])) {
                ?>
                  <td><?php echo $mostrar['idNomina']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idNomina']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($correcto_decimales, $mostrar['sumaPercepcion'])) {
                   ?>
                     <td><?php echo $mostrar['sumaPercepcion']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['sumaPercepcion']; ?> </td>
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

                      if (preg_match($numeros, $mostrar['idPeriodicidad'])) {
                        ?>
                          <td><?php echo $mostrar['idPeriodicidad']; ?></td>
                          <td hidden>2</td>
                        <?php
                      }else {

                        ?>
                        <td class="bg-danger"> <?php echo $mostrar['idPeriodicidad']; ?> </td>
                        <td hidden>1</td>

                        <?php }

                        if (preg_match($correcto_decimales, $mostrar['salarioBase'])) {
                          ?>
                            <td><?php echo $mostrar['salarioBase']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['salarioBase']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($correcto_decimales, $mostrar['sumaBonos'])) {
                            ?>
                              <td><?php echo $mostrar['sumaBonos']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['sumaBonos']; ?> </td>
                            <td hidden>1</td>

                            <?php }

                            if (preg_match($correcto_decimales, $mostrar['sumaDeduccion'])) {
                              ?>
                                <td><?php echo $mostrar['sumaDeduccion']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['sumaDeduccion']; ?> </td>
                              <td hidden>1</td>

                              <?php }

                              if (preg_match($correcto_decimales, $mostrar['totalNeto'])) {
                                ?>
                                  <td><?php echo $mostrar['totalNeto']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['totalNeto']; ?> </td>
                                <td hidden>1</td>

                                <?php }

                                if (preg_match($fecha1, $mostrar['Fecha'])) {
                                  ?>
                                    <td><?php echo $mostrar['Fecha']; ?></td>
                                    <td hidden>2</td>
                                  <?php
                                }else {

                                  ?>
                                  <td class="bg-danger"> <?php echo $mostrar['Fecha']; ?> </td>
                                  <td hidden>1</td>

                                  <?php }

                                  if (preg_match($numeros, $mostrar['id_departamento'])) {
                                    ?>
                                      <td><?php echo $mostrar['id_departamento']; ?></td>
                                      <td hidden>2</td>
                                    <?php
                                  }else {

                                    ?>
                                    <td class="bg-danger"> <?php echo $mostrar['id_departamento']; ?> </td>
                                    <td hidden>1</td>

                                    <?php }
                                    if ($_SESSION['rol'] != 1) {

                  ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idNomina']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosNomina(this)" data-toggle="modal" data-target="#modalNomina">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idNomina']; ?>" type="button" name="<?php echo $mostrar['id_departamento']; ?>" onclick="eliminarDatosNomina(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
