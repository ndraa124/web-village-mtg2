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

      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">MASTER</span>
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
            <a href="{{ route('master.hamlet.index') }}" class="menu-link {{ request()->routeIs('master.hamlet.*') ? 'active' : '' }}">
              Dusun
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.job.index') }}" class="menu-link {{ request()->routeIs('master.job.*') ? 'active' : '' }}">
              Pekerjaan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.marriage.index') }}" class="menu-link {{ request()->routeIs('master.marriage.*') ? 'active' : '' }}">
              Perkawinan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.religion.index') }}" class="menu-link {{ request()->routeIs('master.religion.*') ? 'active' : '' }}">
              Agama
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.income.index') }}" class="menu-link {{ request()->routeIs('master.income.*') ? 'active' : '' }}">
              Pendapatan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.shopping.index') }}" class="menu-link {{ request()->routeIs('master.shopping.*') ? 'active' : '' }}">
              Belanja
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.financing.index') }}" class="menu-link {{ request()->routeIs('master.financing.*') ? 'active' : '' }}">
              Pembiayaan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.stunting.index') }}" class="menu-link {{ request()->routeIs('master.stunting.*') ? 'active' : '' }}">
              Stunting
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.social_assistance.index') }}" class="menu-link {{ request()->routeIs('master.social_assistance.*') ? 'active' : '' }}">
              Bantuan Sosial
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('master.idm_status.index') }}" class="menu-link {{ request()->routeIs('master.idm_status.*') ? 'active' : '' }}">
              IDM Status
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">VISI & MISI</span>
      </li>

      <li class="menu-item {{ request()->routeIs('vision.*') ? 'open' : '' }}">
        <a href="{{ route('vision.index') }}" class="menu-link {{ request()->routeIs('vision.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">infrared</span>
          <span class="title">Visi</span>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('mission.*') ? 'open' : '' }}">
        <a href="{{ route('mission.index') }}" class="menu-link {{ request()->routeIs('mission.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">rocket_launch</span>
          <span class="title">Misi</span>
        </a>
      </li>

      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">INFOGRAFIS</span>
      </li>

      <li class="menu-item {{ request()->routeIs('infographics.resident.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">groups</span>
          <span class="title">Penduduk</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('infographics.resident.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.index') || request()->routeIs('infographics.resident.edit') ? 'active' : '' }}">
              Jumlah Penduduk
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.resident.age.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.age.*') ? 'active' : '' }}">
              Jumlah Umur
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.resident.hamlet.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.hamlet.*') ? 'active' : '' }}">
              Jumlah Dusun
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.resident.education.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.education.*') ? 'active' : '' }}">
              Jumlah Pendidikan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.resident.job.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.job.*') ? 'active' : '' }}">
              Jumlah Pekerjaan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.resident.must_select.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.must_select.*') ? 'active' : '' }}">
              Jumlah Wajib Pilih
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.resident.marriage.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.marriage.*') ? 'active' : '' }}">
              Jumlah Perkawinan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.resident.religion.index') }}" class="menu-link {{ request()->routeIs('infographics.resident.religion.*') ? 'active' : '' }}">
              Jumlah Agama
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('infographics.apbd.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">attach_money</span>
          <span class="title">APBD</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('infographics.apbd.index') }}" class="menu-link {{ request()->routeIs('infographics.apbd.index') || request()->routeIs('infographics.apbd.create') || request()->routeIs('infographics.apbd.show') || request()->routeIs('infographics.apbd.edit') ? 'active' : '' }}">
              Semua APBD
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.apbd.year.index') }}" class="menu-link {{ request()->routeIs('infographics.apbd.year.*') ? 'active' : '' }}">
              APBD per Tahun
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.apbd.income.index') }}" class="menu-link {{ request()->routeIs('infographics.apbd.income.*') ? 'active' : '' }}">
              Pendapatan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.apbd.shopping.index') }}" class="menu-link {{ request()->routeIs('infographics.apbd.shopping.*') ? 'active' : '' }}">
              Belanja
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('infographics.apbd.financing.index') }}" class="menu-link {{ request()->routeIs('infographics.apbd.financing.*') ? 'active' : '' }}">
              Pembiayaan
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">stacked_bar_chart</span>
          <span class="title">Stunting</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="#" class="menu-link">
              Jumlah Stunting
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">volunteer_activism</span>
          <span class="title">Bantuan Sosial</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="#" class="menu-link">
              Jumlah Bantual Sosial
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">leaderboard</span>
          <span class="title">IDM</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="#" class="menu-link">
              Jumlah Skor IDM
            </a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link">
              Indikator IKS
            </a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link">
              Indikator IKE
            </a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link">
              Indikator IKL
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">target</span>
          <span class="title">SDGs</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="#" class="menu-link">
              Jumlah SDGs
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">USERS</span>
      </li>

      <li class="menu-item {{ request()->routeIs('users.*') ? 'open' : '' }}">
        <a href="{{ route('users.index') }}" class="menu-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">manage_accounts</span>
          <span class="title">Management User</span>
        </a>
      </li>
    </ul>
  </aside>
</div>