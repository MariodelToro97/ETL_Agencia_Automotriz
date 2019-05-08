<table class="table table-striped" id="tablaCompaniaSeguro">
    <thead>
        <tr>
            <th scope="col">idCompañía</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Localidad</th>
            <th scope="col">Estado</th>

            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
          $numeros = "/^[0-9]+$/";

            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóúñÑ, ,0-9,#,.,-]+/";
            $name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
          	$numero_telefono = "/^[0-9]{10}$/";
          	$ubicacion = "/[A-Z,a-z, ,0-9,#,.,]+/";
          	$email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $localidad = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";


            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM companiaseguros ORDER BY idCompania ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idCompania'])) {
                ?>
                  <td><?php echo $mostrar['idCompania']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idCompania']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($letras, $mostrar['Nombre'])) {
                   ?>
                     <td><?php echo $mostrar['Nombre']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['Nombre']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                    if (preg_match($email, $mostrar['Correo'])) {
                      ?>
                        <td><?php echo $mostrar['Correo']; ?></td>
                        <td hidden>2</td>
                      <?php
                    }else {

                      ?>
                      <td class="bg-danger"> <?php echo $mostrar['Correo']; ?> </td>
                      <td hidden>1</td>

                      <?php }

                      if (preg_match($numero_telefono, $mostrar['Telefono'])) {
                        ?>
                          <td><?php echo $mostrar['Telefono']; ?></td>
                          <td hidden>2</td>
                        <?php
                      }else {

                        ?>
                        <td class="bg-danger"> <?php echo $mostrar['Telefono']; ?> </td>
                        <td hidden>1</td>

                        <?php }

                        if (preg_match($ubicacion, $mostrar['Direccion'])) {
                          ?>
                            <td><?php echo $mostrar['Direccion']; ?></td>
                            <td hidden>2</td>
                          <?php
                        }else {

                          ?>
                          <td class="bg-danger"> <?php echo $mostrar['Direccion']; ?> </td>
                          <td hidden>1</td>

                          <?php }

                          if (preg_match($localidad, $mostrar['Localidad'])) {
                            ?>
                              <td><?php echo $mostrar['Localidad']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['Localidad']; ?> </td>
                            <td hidden>1</td>

                            <?php }

                            if (preg_match($localidad, $mostrar['Estado'])) {
                              ?>
                                <td><?php echo $mostrar['Estado']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['Estado']; ?> </td>
                              <td hidden>1</td>

                              <?php }
                              if ($_SESSION['rol'] != 1) {

                  ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idCompania']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosCompaniaSeguro(this)" data-toggle="modal" data-target="#modalCompaniaSeguro">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idCompania']; ?>" type="button" name="" onclick="eliminarDatosCompaniaSeguro(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
