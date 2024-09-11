<?php
    include 'php/config.php';
    session_start();
    if (isset($_SESSION['username'])) {
        header('location: '. WEB);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/Global.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(assets/multimedia/images/portada.jpg);">
    <div class="form-container" style="padding-bottom: 100px;">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
       <form>
            <div class="group-material-login">
              <input type="text" class="material-login-control" name="username" required maxlength="100">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" required name="password">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
<!--             <div class="group-material">
                <select class="material-control-login" required>
                    <option>Usuario</option>
                </select>
            </div> -->
            <button class="btn-login" style="margin-bottom: 30px;" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div> 

<script src="assets/js/login.js"></script>
</body>
</html>