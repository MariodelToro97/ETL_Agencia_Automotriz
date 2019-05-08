<table class="table table-striped" id="tablaOrdenPedidoAutomovil">
    <thead>
        <tr>
            <th scope="col">idOrdenPedido</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">idCoche</th>
            <th scope="col">Fecha de Órden</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Fecha de Llegada</th>
            <th scope="col">Estado</th>
            <th scope="col">idPlanta</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $pedido = "/^[1-9][0-9]+$/";
          $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,-]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM ordenespedidosautomovil ORDER BY idOrdenPedido ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idOrdenPedido'])) {
                ?>
                  <td><?php echo $mostrar['idOrdenPedido']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idOrdenPedido']; ?> </td>
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

                    if (preg_match($numeros, $mostrar['idCoche'])) {
                      ?>
                        <td><?php echo $mostrar['idCoche']; ?></td>
                        <td hidden>2</td>
                      <?php
                    }else {

                      ?>
                      <td class="bg-danger"> <?php echo $mostrar['idCoche']; ?> </td>
                      <td hidden>1</td>

                      <?php }

                      if (preg_match($fecha1, $mostrar['fechaOrden'])) {
                        ?>
                          <td><?php echo $mostrar['fechaOrden']; ?></td>
                          <td hidden>2</td>
                        <?php
                      }else {

                        ?>
                        <td class="bg-danger"> <?php echo $mostrar['fechaOrden']; ?> </td>
                        <td hidden>1</td>

                        <?php }

                        if (preg_match($numeros, $mostrar['Cantidad'])) {
                          ?>
                            <td><?php echo $mostrar['Cantidad']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['Cantidad']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($fecha1, $mostrar['fechaLlegada'])) {
                            ?>
                              <td><?php echo $mostrar['fechaLlegada']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['fechaLlegada']; ?> </td>
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

                              if (preg_match($numeros, $mostrar['idPlanta'])) {
                                ?>
                                  <td><?php echo $mostrar['idPlanta']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['idPlanta']; ?> </td>
                                <td hidden>1</td>

                                <?php }
                                if ($_SESSION['rol'] != 1) {

                          ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idOrdenPedido']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosOrdenPedidoAutomovil(this)" data-toggle="modal" data-target="#modalOrdenPedidoAutomovil">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idOrdenPedido']; ?>" type="button" name="" onclick="eliminarDatosOrdenPedidoAutomovil(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
