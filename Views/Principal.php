<?php
    require '../Models/checarCredenciales.php';
    require '../Models/conexionVentas.php';
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ETL</title>
	<?php require '../Partials/hojaEstilos.php'; ?>
</head>

<body>
	<?php
        require '../Partials/headers.php';
        require '../Partials/rolPrincipal.php';

        //echo $_SESSION['user_id'];
        $usuario = $_SESSION['user_id'];

        if (isset($usuario)) {
          //echo "CORRECTO";
          require '../Models/conexion.php';
/*
              if ($result) {
                // code.
                echo "CORRECTO";
              }
              */

        }
	?>

	<div style="padding-top: 42px;">
		<?php
            require '../Partials/Modales/modalCerrar.php';
		?>
	</div>

    <div class="container-fluid">
        <div class="card-header mb-3">
          <center>
            <h2>¿Qué es un ETL?</h2>
          </center>
        </div>
        <div class="card-body">
            <p class="text-justify">Es el proceso que permite a las organizaciones mover datos desde múltiples fuentes, reformatearlos y limpiarlos, y cargarlos en otra base de datos, data mart, o data warehouse para analizar, o en otro sistema operacional para apoyar un proceso de negocio.</p>
            <h5 class="card-title">Extract - Transform - Load</h5>
            <br>

            <h6 class="card-title">Extracción</h6>
            <ul>
                <li class="text-justify">La primera parte del proceso ETL consiste en extraer los datos desde los sistemas de origen. La mayoría de los proyectos de almacenamiento de datos fusionan datos provenientes de diferentes sistemas de origen</li>
            </ul>

            <h6 class="card-title">Transformación</h6>
            <ul>
                <li class="text-justify">La fase de transformación aplica una serie de reglas de negocio o funciones sobre los datos extraídos para convertirlos en datos que serán cargados.</li>
            </ul>

            <h6 class="card-title">Carga</h6>
            <ul>
                <li class="text-justify">La fase de carga es el momento en el cual los datos de la fase anterior (transformación) son cargados en el sistema de destino.</li>
            </ul>

            <div id="btn">
                <?php
                if ($_SESSION['etl'] == 0) {
                ?>
                    <button id="iniciobtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Iniciar proceso ETL</button>
                <?php
                    } else {
                ?>
                    <button id="reiniciobtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#resetModal">Reiniciar proceso ETL</button>
                <?php
                    }
                ?>
            </div>

        </div>

        <!-- Inicio del Modal de confirmacion de usuario -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmar usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="alert alert-warning text-center" role="alert">Estás a punto de iniciar el proceso ETL</h2>
                        <h4 class="text-center text-danger">Favor de confirmar Usuario</h4>

                        <form class="form-signin" id="formConfirm">
                            <div class="form-label-group">
                                <label class="font-weight-light" for="usuario"><b>Usuario</b></label>
                                <input id="user1" type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="Ingresar usuario" name="usuario" autofocus="" required="">
                            </div>
                            <br>
                            <div class="form-label-group">
                                <label class="font-weight-light" for="password"><b>Contraseña</b></label><br>
                                <input id="password1" type="password" class="form-control mb-3" id="password" placeholder="Contraseña" name="password" required="">
                            </div>
                            <div>
                                <input class="btn btn-primary btn-block" type="submit" value="Iniciar">
                                <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Cierre del Modal de Confirmación-->
    </div>

        <!-- Inicio del Modal de Reinicio de ETL -->
        <div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reinicio ETL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="alert alert-warning text-center" role="alert">Estás a punto de reiniciar el proceso ETL</h2>
                        <h4 class="text-center text-danger">Los datos serán reiniciados para todos los usuarios del sistema</h4>
                        <h4 class="text-center">Favor de confirmar Usuario</h4>

                        <form class="form-signin" id="formReset">
                            <div class="form-label-group">
                                <label class="font-weight-light" for="usuario"><b>Usuario</b></label>
                                <input id="user2" type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="Ingresar usuario" name="usuario" autofocus="" required="">
                            </div>
                            <br>
                            <div class="form-label-group">
                                <label class="font-weight-light" for="password"><b>Contraseña</b></label><br>
                                <input id="password2" type="password" class="form-control mb-3" id="password" placeholder="Contraseña" name="password" required="">
                            </div>
                            <div>
                                <input class="btn btn-primary btn-block" type="submit" value="Reiniciar">
                                <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Cierre del Modal de reinicio ETL-->

    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © EquipoDos 2019</span>
            </div>
        </div>
    </footer>

    <?php require '../Partials/hojaScript.php'; ?>
    <script src="../assets/js/principal.js"></script>

</body>
</html>
