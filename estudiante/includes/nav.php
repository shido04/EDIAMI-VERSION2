<?php
  require_once '../includes/conexion.php';

  $idEstudiante = $_SESSION['Estudiante_id'];

  
  $query = $pdo->prepare($sql);
  $query->execute();
  $row = $query->rowCount();

?>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/user.png" alt="User Image">
        <div>
        <p class="app-sidebar__user-name"><?= $_SESSION['nombre'] ?></p>
          <p class="app-sidebar__user-designation">estudiante</p>
        </div>
      </div>
      <ul class="app-menu">
      <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Inicio</span></a></li>
        <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Mis Cursos</span>
          <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
          
        </ul>
        <li><a class="app-menu__item" href="../logout.php"><i class="app-menu__icon fas fa-sign-out-alt"></i><span class="app-menu__label">Logout</span></a></li>
      </ul>
    </aside>