<table class="table table-striped" id="tablaSerieAutos">
    <thead>
        <tr>
            <th scope="col">idAutomovil</th>
            <th scope="col">noChasis</th>
            <th scope="col">noMotor</th>
            <th scope="col">idFactura</th>
            <th scope="col">idEstadoVenta</th>
            <th scope="col">idUbicacion</th>
            <th scope="col">FechaLlegada</th>
            <th scope="col">idEstadoAuto</th>
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

            $sql = "SELECT * FROM serieautos ORDER BY idAutomovil ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idAutomovil'])) {
                ?>
                  <td><?php echo $mostrar['idAutomovil']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idAutomovil']; ?> </td>
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

                    if (preg_match($motorchasis, $mostrar['noMotor'])) {
                      ?>
                        <td><?php echo $mostrar['noMotor']; ?></td>
                        <td hidden>2</td>
                      <?php
                    }else {

                      ?>
                      <td class="bg-danger"> <?php echo $mostrar['noMotor']; ?> </td>
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

                        if (preg_match($numeros, $mostrar['idEstadoVenta'])) {
                          ?>
                            <td><?php echo $mostrar['idEstadoVenta']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['idEstadoVenta']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                            if (preg_match($numeros, $mostrar['idUbicacion'])) {
                              ?>
                                <td><?php echo $mostrar['idUbicacion']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['idUbicacion']; ?> </td>
                              <td hidden>1</td>

                              <?php }

                              if (preg_match($fecha1, $mostrar['FechaLlegada'])) {
                                ?>
                                  <td><?php echo $mostrar['FechaLlegada']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['FechaLlegada']; ?> </td>
                                <td hidden>1</td>

                                <?php }

                                if (preg_match($numeros, $mostrar['idEstadoAuto'])) {
                                  ?>
                                    <td><?php echo $mostrar['idEstadoAuto']; ?></td>
                                    <td hidden>2</td>
                                  <?php
                                }else {

                                  ?>
                                  <td class="bg-danger"> <?php echo $mostrar['idEstadoAuto']; ?> </td>
                                  <td hidden>1</td>

                                  <?php }
                                  if ($_SESSION['rol'] != 1) {


                          ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['noChasis']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosSerieAutos(this)" data-toggle="modal" data-target="#modalSerieAutos">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['noChasis']; ?>" type="button" name="" onclick="eliminarDatosSerieAutos(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
