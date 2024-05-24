 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../img/logoe.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['nombre'] ?></p>
          <p class="app-sidebar__user-designation">Estudiante</p>
        </div>
        </div>
      </div>
      <ul class="app-menu">
      <li><a class="app-menu__item" href="vista.php"><i class="app-menu__icon fas fa-list-alt"></i><span class="app-menu__label"> Mi Curso</span></a></li>
      </ul>
    </aside>