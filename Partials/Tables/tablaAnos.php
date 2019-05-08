<table class="table table-striped" id="tablaYears">
    <thead>
        <tr>
            <th scope="col">idAño</th>
            <th scope="col">Año</th>
            <th scope="col">id_departamento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $ano_nuevo = "/^[1-2][09][019][0-9]/";


            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM catalogoanos WHERE id_departamento =" .$Pantalla;
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['idYear'])) {
                ?>
                  <td><?php echo $mostrar['idYear']; ?></td>
                  <td hidden>1</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['idYear']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($ano_nuevo, $mostrar['Ano'])) {
                   ?>
                     <td><?php echo $mostrar['Ano']; ?></td>
                     <td hidden>1</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['Ano']; ?> </td>
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
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idYear']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosYear(this)" data-toggle="modal" data-target="#modalYear">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idYear']; ?>" type="button" name="<?php echo $mostrar['id_departamento']; ?>" onclick="eliminarDatosYear(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
        <?php
        }
      ?>
    </tbody>
</table>
