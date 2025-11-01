<div class="sidebar-area" id="sidebar-area">
  <div class="logo position-relative d-flex align-items-center justify-content-between">
    <a href="{{ route('dashboard') }}" class="d-block text-decoration-none position-relative">
      <img src="{{ asset('img/logo.png') }}" alt="logo-icon" width="30px">
    </a>
    <div class="logo-text text-secondary fw-semibold" style="margin-left: 18px;">Motoling Dua</div>
  </div>

  <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
    <ul class="menu-inner">
      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">MAIN</span>
      </li>

      <li class="menu-item {{ request()->routeIs('dashboard') ? 'open' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">dashboard</span>
          <span class="title">Dashboard</span>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('users.*') ? 'open' : '' }}">
        <a href="{{ route('users.index') }}" class="menu-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">manage_accounts</span>
          <span class="title">Management User</span>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('master.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">database</span>
          <span class="title">Master Data</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('master.education.index') }}" class="menu-link {{ request()->routeIs('master.education.*') ? 'active' : '' }}">
              Pendidikan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.gender.index') }}" class="menu-link {{ request()->routeIs('master.gender.*') ? 'active' : '' }}">
              Jenis Kelamin
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Dusun
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Pekerjaan
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Perkawinan
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Agama
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Pendapatan
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Belanja
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Pembiayaan
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Stunting
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              Bantuan Sosial
            </a>
          </li>
          <li class="menu-item">
            <a href="read-email.html" class="menu-link">
              IDM Status
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>
</div>