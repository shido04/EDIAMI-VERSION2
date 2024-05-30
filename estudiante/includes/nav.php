<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <img class="app-sidebar__user-avatar" src="../img/logoe.png" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?= $_SESSION['nombre']?></p>
      <p class="app-sidebar__user-designation">Estudiante</p>
    </div>
  </div>
  <div class="app-sidebar__inner">
    <ul class="app-menu">
    <li><a class="app-menu__item" href="../index.php"><i class="app-menu__icon fas fa-sign-out-alt"></i><span class="app-menu__label">Regresar</span></a></li>
    </ul>
  </div>
</aside>
