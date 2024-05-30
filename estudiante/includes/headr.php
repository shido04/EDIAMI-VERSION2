<?php
  session_start();
  if(empty($_SESSION['activeP'])){
    header('Location: ../');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Ediami">
    <title>Ediami</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .app-content {
        /* Establece un fondo para visualizar el área de contenido */
        background-color: #f0f0f0;
        padding: 30px;
      }
    .row {
        margin-bottom: px; /* Espacio entre filas */
      }
    .col-md-12 img {
        width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
        height: auto; /* Mantiene las proporciones de la imagen */
        object-fit: cover; /* Asegura que la imagen cubra completamente el contenedor sin distorsionarse */
        border-radius: 5px; /* Redondea las esquinas de la imagen */
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="../index.php">Ediami</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"> <i class="fas fa-bars"></i></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
<?php require_once 'nav.php' ?>