<table class="table table-striped" id="tablaSeguro">
    <thead>
        <tr>
            <th scope="col">idSeguro</th>
            <th scope="col">Descripción</th>
            <th scope="col">idCompañía</th>
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

            $sql = "SELECT * FROM Seguro ORDER BY idSeguro ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {
            $contador++;
        ?>
        <tr>
          <?php
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

                 if (preg_match($letras, $mostrar['Descripcion'])) {
                   ?>
                     <td><?php echo $mostrar['Descripcion']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['Descripcion']; ?> </td>
                   <td hidden>1</td>

                   <?php }

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
                      if ($_SESSION['rol'] != 1) {

                              ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idSeguro']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosSeguro(this)" data-toggle="modal" data-target="#modalSeguro">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idSeguro']; ?>" type="button" name="" onclick="eliminarDatosSeguro(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
