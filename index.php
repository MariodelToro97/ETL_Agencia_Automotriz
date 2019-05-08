<?php

	session_start();

	if (isset($_SESSION['user_id'])) {
		header('Location: Views/Principal.php');
		exit;
	}

	require 'Models/conexion.php';

 ?>
 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login ETL</title>
  <link href="assets/css/signin.css" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="assets/css/default.min.css"/>
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="assets/css/semantic.min.css"/>
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/css/all.css">
</head>
  <body class="text-center">
    <div class="login">
        <form class="form-signin mt-3" id="formIndex">
            <img class="mb-4 mt-5" src="Pictures/LogoC.png" alt="" width="72" height="72">
            <h1 class="h3 mb-4 mt-3 font-weight-normal">Bienvenido</h1>
            <h6 class="font-italic">Inserte sus credenciales a continuación</h6>
            <input type="text" name="user" id="inputEmail" class="form-control mt-3" placeholder="Usuario" autofocus="" required="">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">

            <input class="btn mt-3" type="submit" value="Inciar Sesión">
        </form>

        <a href="Views/signup.php">Registrarse</a>

        <!--AJAX y jQuery-->
        <script src="assets/js/jquery.min.js" charset="utf-8"></script>

        <!-- JavaScript -->
        <script src="assets/js/alertify.min.js" charset="utf-8"></script>
        <!--Bootstrap-->
        <script src="assets/js/popper.min.js" charset="utf-8"></script>
        <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
        <script src="assets/js/Sign.js"></script>
    </div>
  </body>
</html>
