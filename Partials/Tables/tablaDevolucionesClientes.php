<table class="table table-striped " id="tablaDevoluciones">
    <thead>
        <tr>
            <th scope="col">idDevolucion</th>
            <th scope="col">idProducto</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">idCliente</th>
            <th scope="col">Razón</th>
            <th scope="col">Fecha de Emisión</th>
            <th scope="col">Estado</th>
            <th scope="col">Costo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $estado = "/^[0-1]+$/";

            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
          	$numero_telefono = "/^[0-9]{9}$/";
          	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
          	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $localidad = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM devoluciones_automovil ORDER BY idDevolucion ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idDevolucion'])) {
                ?>
                  <td><?php echo $mostrar['idDevolucion']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idDevolucion']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['id_automovil'])) {
                   ?>
                     <td><?php echo $mostrar['id_automovil']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['id_automovil']; ?> </td>
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

                        if (preg_match($letras, $mostrar['Razon'])) {
                          ?>
                            <td><?php echo $mostrar['Razon']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['Razon']; ?> </td>
                          <td hidden>1</td>

                          <?php }


                        if (preg_match($fecha1, $mostrar['fechaDevolucion'])) {
                          ?>
                            <td><?php echo $mostrar['fechaDevolucion']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['fechaDevolucion']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($estado, $mostrar['Estado_devolucion'])) {
                            ?>
                              <td><?php echo $mostrar['Estado_devolucion']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['Estado_devolucion']; ?> </td>
                            <td hidden>1</td>

                            <?php }

                            if (preg_match($correcto_decimales, $mostrar['Costo'])) {
                              ?>
                                <td><?php echo $mostrar['Costo']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['Costo']; ?> </td>
                              <td hidden>1</td>

                              <?php }
                              if ($_SESSION['rol'] != 1) {

                  ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idDevolucion']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosDevolucionesClientes(this)" data-toggle="modal" data-target="#modalDevolucionClientes">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idDevolucion']; ?>" type="button" name="" onclick="eliminarDatosDevolucionesClientes(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
