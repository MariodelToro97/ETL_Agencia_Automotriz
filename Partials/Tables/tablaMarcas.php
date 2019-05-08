<table class="table table-striped" id="tablaMarcas">
    <thead>
        <tr>
            <th scope="col">idMarca</th>
            <th scope="col">Descripción</th>
            <th scope="col">idDepartamento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

          $numeros = "/^[0-9]+$/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,#,.,-]+/";
            $name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";


            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM catalogoMarcas WHERE id_departamento =" .$Pantalla;
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {


            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idMarca'])) {
                ?>
                  <td><?php echo $mostrar['idMarca']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idMarca']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($name, $mostrar['Descripcion'])) {
                   ?>
                     <td><?php echo $mostrar['Descripcion']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['Descripcion']; ?> </td>
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
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idMarca']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosMarcas(this)" data-toggle="modal" data-target="#modalMarca">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idMarca']; ?>" type="button" name="<?php echo $mostrar['id_departamento']; ?>" onclick="eliminarDatosMarcas(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
        <?php
          }
        ?>
    </tbody>
</table>
