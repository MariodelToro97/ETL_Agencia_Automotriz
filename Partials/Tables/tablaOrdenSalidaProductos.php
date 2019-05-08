<table class="table table-striped" id="tablaOrdenSalidaProductos">
    <thead>
        <tr>
            <th scope="col">idOrdenSalida</th>
            <th scope="col">idFactura</th>
            <th scope="col">Fecha</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Estado</th>
            <th scope="col">idOrdenExterna</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

            $numeros = "/^[0-9]+$/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM ordenSalidaProductos ORDER BY idOrdenSalida ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idOrdenSalida'])) {
                ?>
                  <td><?php echo $mostrar['idOrdenSalida']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idOrdenSalida']; ?> </td>
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

                        if (preg_match($numeros, $mostrar['Estado'])) {
                          ?>
                            <td><?php echo $mostrar['Estado']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['Estado']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($numeros, $mostrar['idOrdenExterna'])) {
                            ?>
                              <td><?php echo $mostrar['idOrdenExterna']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['idOrdenExterna']; ?> </td>
                            <td hidden>1</td>

                            <?php }
                            if ($_SESSION['rol'] != 1) {


                       ?>

            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idOrdenSalida']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosOrdenSalidaProductos(this)" data-toggle="modal" data-target="#modalOrdenSalidaProductos">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idOrdenSalida']; ?>" type="button" name="" onclick="eliminarDatosOrdenSalidaProductos(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
