 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="img/logo.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['nombre'] ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['nombre_rol']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
      <li><a class="app-menu__item" href="lista_usuarios.php"><i class="app-menu__icon fas fa-users"></i><span class="app-menu__label">Usuarios</span></a></li>
      <li><a class="app-menu__item" href="lista_Estudiantes.php"><i class="app-menu__icon fas fa-user-graduate"></i><span class="app-menu__label">Estudiantes</span></a></li>
      <li><a class="app-menu__item" href="lista_Cursos.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label">Cursos</span></a></li>
      <li><a class="app-menu__item" href="../logout.php"><i class="app-menu__icon fas fa-sign-out-alt"></i><span class="app-menu__label">Cerrar sesion</span></a></li>
      </ul>
    </aside>