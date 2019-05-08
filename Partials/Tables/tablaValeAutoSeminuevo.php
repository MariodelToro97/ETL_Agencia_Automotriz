<table class="table table-striped" id="tablaValeAutoSeminuevo">
    <thead>
        <tr>
            <th scope="col">idVale</th>
            <th scope="col">idAutoConsideración</th>
            <th scope="col">Fecha</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">idFactura</th>
            <th scope="col">Monto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

            $numeros = "/^[0-9]+$/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM valeautoseminuevo ORDER BY idVale ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idVale'])) {
                ?>
                  <td><?php echo $mostrar['idVale']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idVale']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['idAutoConsideracion'])) {
                   ?>
                     <td><?php echo $mostrar['idAutoConsideracion']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['idAutoConsideracion']; ?> </td>
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

                        if (preg_match($numeros, $mostrar['idFactura'])) {
                          ?>
                            <td><?php echo $mostrar['idFactura']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['idFactura']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                            if (preg_match($correcto_decimales, $mostrar['Monto'])) {
                              ?>
                                <td><?php echo $mostrar['Monto']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['Monto']; ?> </td>
                              <td hidden>1</td>

                              <?php }
                              if ($_SESSION['rol'] != 1) {


                          ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idVale']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosValeAutoSeminuevo(this)" data-toggle="modal" data-target="#modalValeSeminuevo">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idVale']; ?>" type="button" name="" onclick="eliminarDatosValeAutoSeminuevo(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
