<?php

  session_start();
  if(isset($_SESSION['nick'])){
    header('Location: home.php');
    exit;
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Gestion Tropicali</title>

  
    <link rel="stylesheet" href="fonts/open-sans/style.min.css"> <!-- common font  styles  -->
<link rel="stylesheet" href="fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
<link rel="stylesheet" href="fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
<link rel="stylesheet" href="fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
<link rel="stylesheet" href="vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
<link rel="stylesheet" href="vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
<link rel="stylesheet" href="vendor/tagify/tagify.css"> <!-- styles for tags -->
<link rel="stylesheet" href="vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
<link rel="stylesheet" href="vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
<link rel="stylesheet" href="css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->

  

  <script src="js/ie.assign.fix.min.js"></script>
</head>
<body class="p-front">


  <div class="navbar navbar-light navbar-expand-lg p-front__navbar"> <!-- is-dark -->
    <a class="navbar-brand" href="/"><img src="img/logo.png" alt=""/></a>
    <a class="navbar-brand-sm" href="/"><img src="img/logo-sm.png" alt=""/></a>
  </div>




<div class="p-front__content">
  
<div class="p-signin">
  <form class="p-signin__form" method="POST" action="auth/validation.php">
    <h2 class="p-signin__form-heading">Ingresa a Tropicali 2.0</h2>
    <div class="p-signin__form-content">
      <div class="row">
        <div class="form-group col-md-12">
          <label for="p-signin-work-email">Usuario</label>
          <input type="text" name="nick" id="nick" class="form-control" id="p-signin-work-email" placeholder="example123" required="required">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="p-signin-set-password">Contraseña</label>
          <input type="password" name="password" id="password" class="form-control" id="p-signin-set-password" placeholder="*****" required="required">
        </div>
      </div>
      <div>
        <button type="submit" class="btn btn-info btn-block btn-lg p-signin__form-submit">Entrar!</button>
      </div>
    </div>
  </form>
</div>

</div>



<footer class="p-front__footer">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">FAQ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Terms of Service</a>
    </li>
  </ul>
  <span>2017 &copy; UniverseAdmin</span>
</footer>



  <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/js/select2.full.min.js"></script>
<script src="vendor/simplebar/simplebar.js"></script>
<script src="vendor/text-avatar/jquery.textavatar.js"></script>
<script src="vendor/tippyjs/tippy.all.min.js"></script>
<script src="vendor/flatpickr/flatpickr.min.js"></script>
<script src="vendor/wnumb/wNumb.js"></script>
<script src="js/main.js"></script>



<div class="sidebar-mobile-overlay"></div>

</body>
</html>
