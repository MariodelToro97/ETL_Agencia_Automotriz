<table class="table table-striped" id="tablaAbonos">
    <thead>
        <tr>
            <th scope="col">idFactura</th>
            <th scope="col">Concepto</th>
            <th scope="col">Fecha</th>
            <th scope="col">Cargo</th>
            <th scope="col">Abono</th>
            <th scope="col">Saldo</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Intereses</th>
            <th scope="col">idAbono</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

            $numeros = "/^[0-9]+$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Abonos ORDER BY idFactura ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
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

                 if (preg_match($letras, $mostrar['Concepto'])) {
                   ?>
                     <td><?php echo $mostrar['Concepto']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['Concepto']; ?> </td>
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

                      if (preg_match($correcto_decimales, $mostrar['Cargo'])) {
                        ?>
                          <td><?php echo $mostrar['Cargo']; ?></td>
                          <td hidden>2</td>
                        <?php
                      }else {

                        ?>
                        <td class="bg-danger"> <?php echo $mostrar['Cargo']; ?> </td>
                        <td hidden>1</td>

                        <?php }

                        if (preg_match($correcto_decimales, $mostrar['Abono'])) {
                          ?>
                            <td><?php echo $mostrar['Abono']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['Abono']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($correcto_decimales, $mostrar['Saldo'])) {
                            ?>
                              <td><?php echo $mostrar['Saldo']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['Saldo']; ?> </td>
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

                              if (preg_match($correcto_decimales, $mostrar['Intereses'])) {
                                ?>
                                  <td><?php echo $mostrar['Intereses']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['Intereses']; ?> </td>
                                <td hidden>1</td>

                                <?php }

                                if (preg_match($numeros, $mostrar['idAbono'])) {
                                  ?>
                                    <td><?php echo $mostrar['idAbono']; ?></td>
                                    <td hidden>2</td>
                                  <?php
                                }else {

                                  ?>
                                  <td class="bg-danger"> <?php echo $mostrar['idAbono']; ?> </td>
                                  <td hidden>1</td>

                                  <?php }
                                  if ($_SESSION['rol'] != 1) {

                       ?>

            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idAbono']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosAbono(this)" data-toggle="modal" data-target="#modalAbonos">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idAbono']; ?>" type="button" name="" onclick="eliminarDatosAbono(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
        <?php

            }
        ?>
    </tbody>
</table>
