
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Sistema Escolar">
    <title>SISTEMA ESCOLAR</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Asegúrate de cargar la versión completa de jQuery si necesitas AJAX -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Función para mostrar el menú desplegable
            function showMenu() {
                $('.dropdown-menu').stop(true, true).slideDown('fast');
            }

            // Función para ocultar el menú desplegable
            function hideMenu() {
                $('.dropdown-menu').stop(true, true).slideUp('fast');
            }

            // Evento de clic en el menú para mostrar el menú desplegable
            $('#menuToggle').on('click', function(e) {
                e.preventDefault();
                if ($('.dropdown-menu').is(':hidden')) {
                    showMenu();
                } else {
                    hideMenu();
                }
            });
        });
    </script>
    <style>
   .container {
        display: flex;
        align-items: center; /* Alinea verticalmente los elementos */
        gap: 10px; /* Espacio entre los elementos */
    }
    img {
        width: 50px;
    }
    p {
        color: white;
        margin: 0; /* Elimina el margen por defecto */
    }
    </style>
    <!-- Font-icon css-->
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
              <div class="container px-5 ms-xl-">
                <img src="img/logoe.png" alt="logo">
                <p></p>
              </div>

      <ul class="app-nav">
      <nav class="navbar navbar-expand-lg navbar-dark ">
          <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Elementos de navegación alineados a la izquierda -->
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                      <a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Inicio</span></a>
                      </li>
                      <li class="nav-item">
                          <a id="menuToggle" class="app-menu__item" href="#" data-toggle="treeview">
                              <i class="app-menu__icon fa fa-laptop"></i>
                              <span class="app-menu__label"> Cursos</span>
                              <i class="treeview-indicator fa fa-angle-right"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="display:none;">
                              <a class="dropdown-item" href="#">Office</a>
                              <a class="dropdown-item" href="#">Navegacion</a>
                              <a class="dropdown-item" href="#">Etc</a>
                              
                              
                          </div>
                          
                      </li>

                      <li class="nav-item">
                      <a class="app-menu__item" href="Somos.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Quienes somos</span></a>
                      </li>
              <li class="nav-item">
              <a class="app-menu__item" href="precios.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Precios</span></a>
                      </li>
                      
                  </ul>
                  <!-- Elemento de navegación "Log In" alineado a la derecha -->
                  <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="app-menu__item" href="login.php"><i class="app-menu__icon fas fa-sign-out-alt"></i><span class="app-menu__label">INICIAR SECION</span></a>
                      </li>
                  </ul>
              </div>
          </div>
        
        
      </nav>
        
        <!-- User Menu-->
        
      </ul>
      
  </header>
    <?php
        require_once 'nav.php'
    ?>