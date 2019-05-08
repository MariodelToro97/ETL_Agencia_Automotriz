<table class="table table-striped" id="tablaRequisicionRevisionServicios">
    <thead>
        <tr>
            <th scope="col">idRequisicion</th>
            <th scope="col">Fecha de Emisión</th>
            <th scope="col">idordenEntrada</th>
            <th scope="col">idEmpleado</th>
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

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM requisicionrevisionservicios ORDER BY idRequisicion ASC";
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

                 if (preg_match($fecha1, $mostrar['fechaEmision'])) {
                   ?>
                     <td><?php echo $mostrar['fechaEmision']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['fechaEmision']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                    if (preg_match($numeros, $mostrar['idOrdenEntrada'])) {
                      ?>
                        <td><?php echo $mostrar['idOrdenEntrada']; ?></td>
                        <td hidden>2</td>
                      <?php
                    }else {

                      ?>
                      <td class="bg-danger"> <?php echo $mostrar['idOrdenEntrada']; ?> </td>
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
                        if ($_SESSION['rol'] != 1) {

                          ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idRequisicion']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosRequisicionRevisionServicios(this)" data-toggle="modal" data-target="#modalRequisicionRevisionServicios">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idRequisicion']; ?>" type="button" name="" onclick="eliminarDatosRequisicionRevisionServicios(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
