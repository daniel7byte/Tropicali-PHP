<button class="sidebar-toggler" type="button">
  <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
  <span class="ua-icon-alert-close sidebar-toggler__close"></span>
</button>

<span class="navbar-brand">
  <a href="/"><img src="img/logo.png" alt="" class="navbar-brand__logo"></a>
</span>

<span class="navbar-brand-sm">
  <a href="/"><img src="img/logo-sm.png" alt="" class="navbar-brand__logo"></a>
  <span class="ua-icon-menu slide-nav-toggle"></span>
</span>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
  <span class="ua-icon-navbar-open navbar-toggler__open"></span>
  <span class="ua-icon-alert-close navbar-toggler__close"></span>
</button>

<div class="collapse navbar-collapse" id="navbar-collapse">
  <div class="navbar__menu">

  </div>
  <div class="dropdown navbar-dropdown">
    <a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
      <span class="navbar-dropdown__user-name"><?=$_SESSION['full_name']?></span>
    </a>
    <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
      <div class="navbar-dropdown-user-content">
        <div class="dropdown-user__avatar"><img src="img/users/user-3.png" alt=""/></div>
        <div class="dropdown-info">
          <div class="dropdown-info__name"><?=$_SESSION['full_name']?></div>
          <div class="dropdown-info__job"><?=$_SESSION['nick']?> - <?=$_SESSION['role']?></div>
        </div>
      </div>
      <a class="dropdown-item navbar-dropdown__item" href="my_account.php">Cambiar contraseña</a>
      <a class="dropdown-item navbar-dropdown__item" href="auth/logout.php">Cerrar sesión</a>
    </div>
  </div>
</div>