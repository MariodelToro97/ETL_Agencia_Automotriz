<table class="table table-striped" id="tablaEmpleados">
    <thead>
        <tr>
            <th scope="col">idEmpleado</th>
            <th scope="col">Nombre</th>
            <th scope="col">RFC</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Fecha Ingreso</th>
            <th scope="col">idContrato</th>
            <th scope="col">idTurno</th>
            <th scope="col">Genero</th>
            <th scope="col">idCargo</th>
            <th scope="col">sueldo_base</th>
            <th scope="col">comision</th>
            <th scope="col">Estado</th>
            <th scope="col">id_departamento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $estado = "/^[0-5]+$/";
            $name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";

            $sexo = "/[0-1]/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Empleados WHERE id_departamento =" .$Pantalla;
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
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

                 if (preg_match($name, $mostrar['Nombre'])) {
                   ?>
                     <td><?php echo $mostrar['Nombre']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['Nombre']; ?> </td>
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

                            if (preg_match($ubicacion, $mostrar['Domicilio'])) {
                              ?>
                                <td><?php echo $mostrar['Domicilio']; ?></td>
                                <td hidden>2</td>
                              <?php
                            }else {

                              ?>
                              <td class="bg-danger"> <?php echo $mostrar['Domicilio']; ?> </td>
                              <td hidden>1</td>

                              <?php }

                              if (preg_match($fecha1, $mostrar['fechaIngreso'])) {
                                ?>
                                  <td><?php echo $mostrar['fechaIngreso']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['fechaIngreso']; ?> </td>
                                <td hidden>1</td>

                                <?php }

                              if (preg_match($numeros, $mostrar['idContrato'])) {
                                ?>
                                  <td><?php echo $mostrar['idContrato']; ?></td>
                                  <td hidden>2</td>
                                <?php
                              }else {

                                ?>
                                <td class="bg-danger"> <?php echo $mostrar['idContrato']; ?> </td>
                                <td hidden>1</td>

                                <?php }

                                if (preg_match($numeros, $mostrar['idTurno'])) {
                                  ?>
                                    <td><?php echo $mostrar['idTurno']; ?></td>
                                    <td hidden>2</td>
                                  <?php
                                }else {

                                  ?>
                                  <td class="bg-danger"> <?php echo $mostrar['idTurno']; ?> </td>
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

                                    if (preg_match($numeros, $mostrar['idCargo'])) {
                                      ?>
                                        <td><?php echo $mostrar['idCargo']; ?></td>
                                        <td hidden>2</td>
                                      <?php
                                    }else {

                                      ?>
                                      <td class="bg-danger"> <?php echo $mostrar['idCargo']; ?> </td>
                                      <td hidden>1</td>

                                      <?php }

                                      if (preg_match($correcto_decimales, $mostrar['sueldo_base'])) {
                                        ?>
                                          <td><?php echo $mostrar['sueldo_base']; ?></td>
                                          <td hidden>2</td>
                                        <?php
                                      }else {

                                        ?>
                                        <td class="bg-danger"> <?php echo $mostrar['sueldo_base']; ?> </td>
                                        <td hidden>1</td>

                                        <?php }

                                        if (preg_match($numeros, $mostrar['comision'])) {
                                          ?>
                                            <td><?php echo $mostrar['comision']; ?></td>
                                            <td hidden>2</td>
                                          <?php
                                        }else {

                                          ?>
                                          <td class="bg-danger"> <?php echo $mostrar['comision']; ?> </td>
                                          <td hidden>1</td>

                                          <?php }

                                          if (preg_match($estado, $mostrar['Estado'])) {
                                            ?>
                                              <td><?php echo $mostrar['Estado']; ?></td>
                                              <td hidden>2</td>
                                            <?php
                                          }else {

                                            ?>
                                            <td class="bg-danger"> <?php echo $mostrar['Estado']; ?> </td>
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
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idEmpleado']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosEmpleados(this)" data-toggle="modal" data-target="#modalEmpleado">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idEmpleado']; ?>" type="button" name="<?php echo $mostrar['id_departamento']; ?>" onclick="eliminarDatosEmpleados(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
