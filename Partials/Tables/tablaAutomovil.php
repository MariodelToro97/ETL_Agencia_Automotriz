<table class="table table-striped" id="tablaAutomovil">
    <thead>
        <tr>
            <th scope="col">idAutomovil</th>
            <th scope="col">idModelo</th>
            <th scope="col">Precio</th>
            <th scope="col">Marca</th>
            <th scope="col">idYear</th>
            <th scope="col">Cantidad Actual</th>
            <th scope="col">Cantidad Mínima</th>
            <th scope="col">idSeguro</th>
            <th scope="col">cantidadMxima</th>
            <th scope="col">Número de Puertas</th>
            <th scope="col">Capacidad de Pasajeros</th>
            <th scope="col">Peso</th>
            <th scope="col">noAsientos</th>
            <th scope="col">Rendimiento</th>
            <th scope="col">Cilindro</th>
            <th scope="col">idTipo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";

            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,-]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Automovil ORDER BY ideAutomovil ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['ideAutomovil'])) {
                ?>
                  <td><?php echo $mostrar['ideAutomovil']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['ideAutomovil']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($numeros, $mostrar['idModelo'])) {
                   ?>
                     <td><?php echo $mostrar['idModelo']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['idModelo']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                    if (preg_match($correcto_decimales, $mostrar['Precio'])) {
                      ?>
                        <td><?php echo $mostrar['Precio']; ?></td>
                        <td hidden>2</td>
                      <?php
                    }else {

                      ?>
                      <td class="bg-danger"> <?php echo $mostrar['Precio']; ?> </td>
                      <td hidden>1</td>

                      <?php }

                      if (preg_match($numeros, $mostrar['Marca'])) {
                        ?>
                          <td><?php echo $mostrar['Marca']; ?></td>
                          <td hidden>2</td>
                        <?php
                      }else {

                        ?>
                        <td class="bg-danger"> <?php echo $mostrar['Marca']; ?> </td>
                        <td hidden>1</td>

                        <?php }

                        if (preg_match($numeros, $mostrar['idYear'])) {
                          ?>
                            <td><?php echo $mostrar['idYear']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['idYear']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($numeros, $mostrar['cantidadActual'])) {
                            ?>
                              <td><?php echo $mostrar['cantidadActual']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['cantidadActual']; ?> </td>
                            <td hidden>1</td>

                            <?php }

                            if (preg_match($numeros, $mostrar['cantidadMinima'])) {
                              ?>
                                <td><?php echo $mostrar['cantidadMinima']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['cantidadMinima']; ?> </td>
                              <td hidden>1</td>

                              <?php }

                              if (preg_match($numeros, $mostrar['idSeguro'])) {
                                ?>
                                  <td><?php echo $mostrar['idSeguro']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['idSeguro']; ?> </td>
                                <td hidden>1</td>

                                <?php }

                                if (preg_match($numeros, $mostrar['cantidadMaxima'])) {
                                  ?>
                                    <td><?php echo $mostrar['cantidadMaxima']; ?></td>
                                    <td hidden>2</td>
                                  <?php
                                }else {

                                  ?>
                                  <td class="bg-danger"> <?php echo $mostrar['cantidadMaxima']; ?> </td>
                                  <td hidden>1</td>

                                  <?php }

                                  if (preg_match($numeros, $mostrar['noPuertas'])) {
                                    ?>
                                      <td><?php echo $mostrar['noPuertas']; ?></td>
                                      <td hidden>2</td>
                                    <?php
                                  }else {

                                    ?>
                                    <td class="bg-danger"> <?php echo $mostrar['noPuertas']; ?> </td>
                                    <td hidden>1</td>

                                    <?php }

                                    if (preg_match($numeros, $mostrar['CapacidadPas'])) {
                                      ?>
                                        <td><?php echo $mostrar['CapacidadPas']; ?></td>
                                        <td hidden>2</td>
                                      <?php
                                    }else {

                                      ?>
                                      <td class="bg-danger"> <?php echo $mostrar['CapacidadPas']; ?> </td>
                                      <td hidden>1</td>

                                      <?php }

                                      if (preg_match($correcto_decimales, $mostrar['Peso'])) {
                                        ?>
                                          <td><?php echo $mostrar['Peso']; ?></td>
                                          <td hidden>2</td>
                                        <?php
                                      }else {

                                        ?>
                                        <td class="bg-danger"> <?php echo $mostrar['Peso']; ?> </td>
                                        <td hidden>1</td>

                                        <?php }

                                        if (preg_match($numeros, $mostrar['noAsientos'])) {
                                          ?>
                                            <td><?php echo $mostrar['noAsientos']; ?></td>
                                            <td hidden>2</td>
                                          <?php
                                        }else {

                                          ?>
                                          <td class="bg-danger"> <?php echo $mostrar['noAsientos']; ?> </td>
                                          <td hidden>1</td>

                                          <?php }

                                          if (preg_match($correcto_decimales, $mostrar['Rendimiento'])) {
                                            ?>
                                              <td><?php echo $mostrar['Rendimiento']; ?></td>
                                              <td hidden>2</td>
                                            <?php
                                          }else {

                                            ?>
                                            <td class="bg-danger"> <?php echo $mostrar['Rendimiento']; ?> </td>
                                            <td hidden>1</td>

                                            <?php }

                                            if (preg_match($numeros, $mostrar['Cilindros'])) {
                                              ?>
                                                <td><?php echo $mostrar['Cilindros']; ?></td>
                                                <td hidden>2</td>
                                              <?php
                                            }else {

                                              ?>
                                              <td class="bg-danger"> <?php echo $mostrar['Cilindros']; ?> </td>
                                              <td hidden>1</td>

                                              <?php }

                                              if (preg_match($numeros, $mostrar['idTipo'])) {
                                                ?>
                                                  <td><?php echo $mostrar['idTipo']; ?></td>
                                                  <td hidden>2</td>
                                                <?php
                                              }else {

                                                ?>
                                                <td class="bg-danger"> <?php echo $mostrar['idTipo']; ?> </td>
                                                <td hidden>1</td>

                                                <?php }
                                                if ($_SESSION['rol'] != 1) {
  
                          ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['ideAutomovil']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosAutomovil(this)" data-toggle="modal" data-target="#modalAutomovil">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['ideAutomovil']; ?>" type="button" name="" onclick="eliminarDatosAutomovil(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
