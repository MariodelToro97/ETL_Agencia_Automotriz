<table class="table table-striped" id="tablaProveedores">
    <thead>
        <tr>
            <th scope="col">idProveedor</th>
            <th scope="col">Nombre</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Estado Actual</th>
            <th scope="col">Empresa</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;
            $numeros = "/^[0-9]+$/";
            $name = "/^[a-zA-ZÁÉÍÓÚáéíóúÑñ]+(\s*[a-zA-ZÁÉÍÓÚáéíóúÑñ]*)*[a-zA-ZÁÉÍÓÚáéíóúÑñ]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $letras_otro = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,-,#]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)([2][0][1][5-9]|[2][0][2][0-3])$/";
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM proveedores ORDER BY id_proveedor ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_proveedor'])) {
                ?>
                  <td><?php echo $mostrar['id_proveedor']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_proveedor']; ?> </td>
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

                     if (preg_match($letras_otro, $mostrar['Direccion'])) {
                       ?>
                         <td><?php echo $mostrar['Direccion']; ?></td>
                         <td hidden>2</td>
                       <?php
                     }else {

                       ?>
                       <td class="bg-danger"> <?php echo $mostrar['Direccion']; ?> </td>
                       <td hidden>1</td>

                       <?php }

                       if (preg_match($letras, $mostrar['Ciudad'])) {
                         ?>
                           <td><?php echo $mostrar['Ciudad']; ?></td>
                           <td hidden>2</td>
                         <?php
                       }else {

                         ?>
                         <td class="bg-danger"> <?php echo $mostrar['Ciudad']; ?> </td>
                         <td hidden>1</td>

                         <?php }

                         if (preg_match($numeros, $mostrar['Estado_actual'])) {
                           ?>
                             <td><?php echo $mostrar['Estado_actual']; ?></td>
                             <td hidden>2</td>
                           <?php
                         }else {

                           ?>
                           <td class="bg-danger"> <?php echo $mostrar['Estado_actual']; ?> </td>
                           <td hidden>1</td>

                           <?php }

                           if (preg_match($letras, $mostrar['Empresa'])) {
                             ?>
                               <td><?php echo $mostrar['Empresa']; ?></td>
                               <td hidden>2</td>
                             <?php
                           }else {

                             ?>
                             <td class="bg-danger"> <?php echo $mostrar['Empresa']; ?> </td>
                             <td hidden>1</td>

                             <?php }
                             if ($_SESSION['rol'] != 1) {

                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_proveedor']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosProveedores(this)" data-toggle="modal" data-target="#modalProveedor">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_proveedor']; ?>" type="button" name="" onclick="eliminarDatosProveedores(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
