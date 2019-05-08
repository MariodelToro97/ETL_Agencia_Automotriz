<table class="table table-striped" id="tablaCartaFactura">
    <thead>
        <tr>
            <th scope="col">idCartaFactura</th>
            <th scope="col">idFactura</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";
            $numeros = "/^[0-9]+$/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM cartafactura ORDER BY idCartaFactura ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <?php
            if (preg_match($numeros, $mostrar['idCartaFactura'])) {
              ?>
                <td><?php echo $mostrar['idCartaFactura']; ?></td>
                <td hidden>2</td>
              <?php
            }else {

              ?>
              <td class="bg-danger"> <?php echo $mostrar['idCartaFactura']; ?> </td>
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
                      if ($_SESSION['rol'] != 1) {


                     ?>

            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idCartaFactura']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosCartaFactura(this)" data-toggle="modal" data-target="#modalCartaFactura">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idCartaFactura']; ?>" type="button" name="" onclick="eliminarDatosCartaFactura(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
