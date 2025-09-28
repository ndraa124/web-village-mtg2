<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-globe"></i>
    </div>
    <div class="sidebar-brand-text mx-3 text-left">Desa Notoling II</div>
  </a>

  <div class="sidebar-heading mt-4">CORE</div>
  <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider" />
  <div class="sidebar-heading">MASTER DATA</div>

  <li class="nav-item {{ request()->is('education*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('education') }}">
      <i class="fas fa-fw fa-book"></i>
      <span>Education</span></a>
  </li>

  <hr class="sidebar-divider d-none d-md-block" />
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>