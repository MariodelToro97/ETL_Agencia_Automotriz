<table class="table table-striped" id="tablaModelos">
    <thead>
        <tr>
            <th scope="col">idModelo</th>
            <th scope="col">Nombre</th>
            <th scope="col">idDepartamento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
          $numeros = "/^[0-9]+$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM catalogoModelos WHERE id_departamento =" .$Pantalla;
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>

          <?php
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
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idModelo']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosModelos(this)" data-toggle="modal" data-target="#modalModelos">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idModelo']; ?>" type="button" name="<?php echo $mostrar['id_departamento']; ?>" onclick="eliminarDatosModelos(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php
          }

      ?>
    </tbody>
</table>
