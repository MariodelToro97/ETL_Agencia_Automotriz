<table class="table table-striped" id="tablaDiagnostico">
    <thead>
        <tr>
            <th scope="col">idDiagnóstico</th>
            <th scope="col">Detalle</th>
            <th scope="col">Mecánico</th>
            <th scope="col">Vehiculo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

            $numeros = "/^[0-9]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,-]+/";

            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Diagnostico ORDER BY id ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id'])) {
                ?>
                  <td><?php echo $mostrar['id']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($letras, $mostrar['detalle_auto'])) {
                   ?>
                     <td><?php echo $mostrar['detalle_auto']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['detalle_auto']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                   if (preg_match($numeros, $mostrar['id_mecanico'])) {
                     ?>
                       <td><?php echo $mostrar['id_mecanico']; ?></td>
                       <td hidden>2</td>
                     <?php
                   }else {

                     ?>
                     <td class="bg-danger"> <?php echo $mostrar['id_mecanico']; ?> </td>
                     <td hidden>1</td>

                     <?php }

                     if (preg_match($letras, $mostrar['vehiculo'])) {
                       ?>
                         <td><?php echo $mostrar['vehiculo']; ?></td>
                         <td hidden>2</td>
                       <?php
                     }else {

                       ?>
                       <td class="bg-danger"> <?php echo $mostrar['vehiculo']; ?> </td>
                       <td hidden>1</td>

                       <?php }
                       if ($_SESSION['rol'] != 1) {

                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosDiagnostico(this)" data-toggle="modal" data-target="#modalDiagnostico">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id']; ?>" type="button" name="" onclick="eliminarDatosDiagnostico(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
