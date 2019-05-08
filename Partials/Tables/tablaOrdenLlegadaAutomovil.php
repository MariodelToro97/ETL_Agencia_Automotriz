<table class="table table-striped" id="tablaOrdenLlegadaAutomovil">
    <thead>
        <tr>
            <th scope="col">idOrdenEntrada</th>
            <th scope="col">idEmpleado</th>
            <th scope="col">Costo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
          $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM ordenesllegadaautomovil ORDER BY idOrdenEnt ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idOrdenEnt'])) {
                ?>
                  <td><?php echo $mostrar['idOrdenEnt']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idOrdenEnt']; ?> </td>
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
                        if ($_SESSION['rol'] != 1) {



                          ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idOrdenEnt']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosOrdenLlegadaAutomovil(this)" data-toggle="modal" data-target="#modalOrdenLlegada">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idOrdenEnt']; ?>" type="button" name="" onclick="eliminarDatosOrdenLlegadaAutomovil(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
