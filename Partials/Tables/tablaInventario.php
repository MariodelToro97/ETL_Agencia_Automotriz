<table class="table table-striped" id="tablaInventario">
    <thead>
        <tr>
            <th scope="col">idInventario</th>

            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Almacén Mínimo</th>
            <th scope="col">Almacén Máximo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contador = 0;

            $numeros = "/^[0-9]+$/";
            $name = "/^[a-zA-ZÁÉÍÓÚáéíóú]+(\s*[a-zA-ZÁÉÍÓÚáéíóú]*)*[a-zA-ZÁÉÍÓÚáéíóú]+$/";
            $sexo = "/[0-1]/";
            $letras = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,]+/";
            $letras_otro = "/[A-Z,a-zÁÉÍÓÚáéíóú, ,0-9,-,#]+/";
            $correcto_decimales = "/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/";
            $numero_telefono = "/^[0-9]{10}$/";
            $ubicacion = "/[A-Z,a-z, ,0-9,#,.,,-]+/";
            $email = "/^[a-zA-ZÁÉÍÓÚñáéíóúÑ0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            $rfc_nuevo = "/[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}/";
            $fecha1 = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/";
            $hora = "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

            require '../Models/conexionMYSQL_incorrecto.php'; //Agregamos la conexión

            $sql = "SELECT * FROM Inventario ORDER BY id_inventario ASC";
            $ejecutar = sqlsrv_query($conn_sis, $sql);

            while ($mostrar = sqlsrv_fetch_array($ejecutar) ) {

            $contador++;
        ?>
        <tr>
          <?php
              if (preg_match($numeros, $mostrar['id_inventario'])) {
                ?>
                  <td><?php echo $mostrar['id_inventario']; ?></td>
                  <td hidden>2</td>
                <?php
              }else {

                ?>
                <td class="bg-danger"> <?php echo $mostrar['id_inventario']; ?> </td>
                <td hidden>1</td>

                <?php }

                 if (preg_match($name, $mostrar['nombre'])) {
                   ?>
                     <td><?php echo $mostrar['nombre']; ?></td>
                     <td hidden>2</td>
                   <?php
                 }else {

                   ?>
                   <td class="bg-danger"> <?php echo $mostrar['nombre']; ?> </td>
                   <td hidden>1</td>

                   <?php }

                   if (preg_match($letras_otro, $mostrar['descripcion'])) {
                     ?>
                       <td><?php echo $mostrar['descripcion']; ?></td>
                       <td hidden>2</td>
                     <?php
                   }else {

                     ?>
                     <td class="bg-danger"> <?php echo $mostrar['descripcion']; ?> </td>
                     <td hidden>1</td>

                     <?php }

                     if (preg_match($numeros, $mostrar['almacen_min'])) {
                       ?>
                         <td><?php echo $mostrar['almacen_min']; ?></td>
                         <td hidden>2</td>
                       <?php
                     }else {

                       ?>
                       <td class="bg-danger"> <?php echo $mostrar['almacen_min']; ?> </td>
                       <td hidden>1</td>

                       <?php }

                       if (preg_match($numeros, $mostrar['almacen_max'])) {
                         ?>
                           <td><?php echo $mostrar['almacen_max']; ?></td>
                           <td hidden>2</td>
                         <?php
                       }else {

                         ?>
                         <td class="bg-danger"> <?php echo $mostrar['almacen_max']; ?> </td>
                         <td hidden>1</td>

                         <?php }
                         if ($_SESSION['rol'] != 1) {


                ?>
            <td>
                <button class="btn btn-info btn-sm" value="<?php echo $mostrar['id_inventario']; ?>" name="<?php echo $contador ?>" type="button" onclick="cargarDatosInventario(this)" data-toggle="modal" data-target="#modalInventario">Editar Campo</button>
                <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_inventario']; ?>" type="button" name="" onclick="eliminarDatosInventario(this)">Eliminar Persona</button>
            </td>
            <?php
          } ?>
        </tr>
      <?php } ?>
    </tbody>
</table>
