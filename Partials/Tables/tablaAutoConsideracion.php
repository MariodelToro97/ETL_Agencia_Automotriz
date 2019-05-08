<table class="table table-striped" id="tablaAutoConsideracion">
    <thead>
        <tr>
            <th scope="col">idAutoConsideracion</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Fecha</th>
            <th scope="col">Monto</th>
            <th scope="col">Estado</th>
            <th scope="col">idCliente</th>
            <th scope="col">noChasis</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

          $numeros = "/^[0-9]+$/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,-]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $motorchasis = "/[A-Z]{3}-[0-9]{3}/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM autoconsideracion ORDER BY idAutoConsideracion ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
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

                        if (preg_match($numeros, $mostrar['estado'])) {
                          ?>
                            <td><?php echo $mostrar['estado']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['estado']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                            if (preg_match($numeros, $mostrar['idCliente'])) {
                              ?>
                                <td><?php echo $mostrar['idCliente']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['idCliente']; ?> </td>
                              <td hidden>1</td>

                              <?php }

                              if (preg_match($motorchasis, $mostrar['noChasis'])) {
                                ?>
                                  <td><?php echo $mostrar['noChasis']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['noChasis']; ?> </td>
                                <td hidden>1</td>

                                <?php }
                                if ($_SESSION['rol'] != 1) {


                          ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idAutoConsideracion']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosAutoConsideracion(this)" data-toggle="modal" data-target="#modalAutoConsideracion">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idAutoConsideracion']; ?>" type="button" name="" onclick="eliminarDatosAutoConsideracion(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
