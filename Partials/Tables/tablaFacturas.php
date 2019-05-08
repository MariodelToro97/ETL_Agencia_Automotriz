<table class="table table-striped" id="tablaFacturas">
    <thead>
        <tr>
            <th scope="col">idFactura</th>
            <th scope="col">IVA</th>
            <th scope="col">idCliente</th>
            <th scope="col">Importe</th>
            <th scope="col">Subtotal</th>
            <th scope="col">idTipoPago</th>
            <th scope="col">Lugar de Emisión</th>
            <th scope="col">Fecha</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

            $numeros = "/^[0-9]+$/";
              $estado = "/^[0-5]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";


            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Facturas ORDER BY idFactura ASC";
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

                 if (preg_match($correcto_decimales, $mostrar['IVA'])) {
                   ?>
                     <td><?php echo $mostrar['IVA']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['IVA']; ?> </td>
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

                      if (preg_match($correcto_decimales, $mostrar['importe'])) {
                        ?>
                          <td><?php echo $mostrar['importe']; ?></td>
                          <td hidden>2</td>
                        <?php
                      }else {

                        ?>
                        <td class="bg-danger"> <?php echo $mostrar['importe']; ?> </td>
                        <td hidden>1</td>

                        <?php }

                        if (preg_match($correcto_decimales, $mostrar['total'])) {
                          ?>
                            <td><?php echo $mostrar['total']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['total']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                        if (preg_match($numeros, $mostrar['idTipoPago'])) {
                          ?>
                            <td><?php echo $mostrar['idTipoPago']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['idTipoPago']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($letras, $mostrar['lugarEmision'])) {
                            ?>
                              <td><?php echo $mostrar['lugarEmision']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['lugarEmision']; ?> </td>
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

                                if (preg_match($estado, $mostrar['idEstado'])) {
                                  ?>
                                    <td><?php echo $mostrar['idEstado']; ?></td>
                                    <td hidden>2</td>
                                  <?php
                                }else {

                                  ?>
                                  <td class="bg-danger"> <?php echo $mostrar['idEstado']; ?> </td>
                                  <td hidden>1</td>

                                  <?php }
                                  if ($_SESSION['rol'] != 1) {

                       ?>

            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idFactura']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosFacturas(this)" data-toggle="modal" data-target="#modalFactura">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idFactura']; ?>" type="button" name="" onclick="eliminarDatosFacturas(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
<?php } ?>

    </tbody>
</table>
