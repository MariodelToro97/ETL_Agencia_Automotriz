<table class="table table-striped" id="tablaClientes">
    <thead>
        <tr>
            <th scope="col">idCliente</th>
            <th scope="col">Nombre</th>
            <th scope="col">RFC</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Género</th>
            <th scope="col">idDepartamento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

            $numeros = "/^[0-9]+$/";
            $pedido = "/^[1-9][0-9]+$/";
            $sexo = "/[0-1]/";
            $name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $letras2 = "/[A-Z,a-zÁÉÍÓÚáéíóúÑñ, ,0-9,#,.,-]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([1-2][9][0-9][0-9]|[2][0][0][0-9])$/";


            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Clientes WHERE id_departamento =" .$Pantalla;
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
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

                 if (preg_match($name, $mostrar['NombreCompleto'])) {
                   ?>
                     <td><?php echo $mostrar['NombreCompleto']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['NombreCompleto']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                    if (preg_match($rfc_nuevo, $mostrar['RFC'])) {
                      ?>
                        <td><?php echo $mostrar['RFC']; ?></td>
                        <td hidden>2</td>
                      <?php
                    }else {

                      ?>
                      <td class="bg-danger"> <?php echo $mostrar['RFC']; ?> </td>
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

                          if (preg_match($fecha1, $mostrar['fechaNac'])) {
                            ?>
                              <td><?php echo $mostrar['fechaNac']; ?></td>
                              <td hidden>2</td>
                            <?php
                          }else {

                            ?>
                            <td class="bg-danger"> <?php echo $mostrar['fechaNac']; ?> </td>
                            <td hidden>1</td>

                            <?php }

                            if (preg_match($letras2, $mostrar['Domicilio'])) {
                              ?>
                                <td><?php echo $mostrar['Domicilio']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['Domicilio']; ?> </td>
                              <td hidden>1</td>

                              <?php }

                              if (preg_match($sexo, $mostrar['Genero'])) {
                                ?>
                                  <td><?php echo $mostrar['Genero']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['Genero']; ?> </td>
                                <td hidden>1</td>

                                <?php }

                                if (preg_match($numeros, $mostrar['id_departamento'])) {
                                  ?>
                                    <td><?php echo $mostrar['id_departamento']; ?></td>
                                    <td hidden>2</td>
                                  <?php
                                }else {

                                  ?>
                                  <td class="bg-danger"> <?php echo $mostrar['id_departamento']; ?> </td>
                                  <td hidden>1</td>

                                  <?php }
                                  if ($_SESSION['rol'] != 1) {

                       ?>

            <td>
                <button class="btn btn-info btn-sm" value=" <?php echo $mostrar['idCliente']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosClientes(this)" data-toggle="modal" data-target="#modalClientes">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idCliente'] ?>" type="button" name="<?php echo $mostrar['id_departamento'] ?>" onclick="eliminarDatosClientes(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
