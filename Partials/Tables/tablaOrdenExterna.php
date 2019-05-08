<table class="table table-striped" id="tablaOrdenExterna">
    <thead>
        <tr>
            <th scope="col">idRequisición</th>
            <th scope="col">idDepartamento</th>
            <th scope="col">Fecha</th>
            <th scope="col">Decripción</th>
            <th scope="col">Total</th>
            <th scope="col">idEmpleadoRecep</th>
            <th scope="col">idCliente</th>
            <th scope="col">idFactura</th>
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


            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM ordenesExternas ORDER BY idRequisicion ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idRequisicion'])) {
                ?>
                  <td><?php echo $mostrar['idRequisicion']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idRequisicion']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['idDepartamento'])) {
                   ?>
                     <td><?php echo $mostrar['idDepartamento']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['idDepartamento']; ?> </td>
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

                      if (preg_match($letras, $mostrar['Descripcion'])) {
                        ?>
                          <td><?php echo $mostrar['Descripcion']; ?></td>
                          <td hidden>2</td>
                        <?php
                      }else {

                        ?>
                        <td class="bg-danger"> <?php echo $mostrar['Descripcion']; ?> </td>
                        <td hidden>1</td>

                        <?php }

                        if (preg_match($correcto_decimales, $mostrar['Total'])) {
                          ?>
                            <td><?php echo $mostrar['Total']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['Total']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($numeros, $mostrar['idEmpleadoRecep'])) {
                            ?>
                              <td><?php echo $mostrar['idEmpleadoRecep']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['idEmpleadoRecep']; ?> </td>
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
                                if ($_SESSION['rol'] != 1) {


                       ?>

            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idRequisicion'] ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosOrdenExterna(this)" data-toggle="modal" data-target="#modalOrdenExterna">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idRequisicion'] ?>" type="button" name="" onclick="eliminarDatosOrdenExterna(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
