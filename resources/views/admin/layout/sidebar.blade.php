<div class="sidebar-area" id="sidebar-area">
  <div class="logo position-relative d-flex align-items-center justify-content-between">
    <a href="{{ route('admin.dashboard') }}" class="d-block text-decoration-none position-relative">
      <img src="{{ asset('img/logo.png') }}" alt="logo-icon" width="30px">
    </a>
    <div class="logo-text text-secondary fw-semibold" style="margin-left: 18px;">Motoling Dua</div>
  </div>

  <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
    <ul class="menu-inner">
      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">MAIN</span>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.dashboard.*') ? 'open' : '' }}">
        <a href="{{ route('admin.dashboard') }}" class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">dashboard</span>
          <span class="title">Dashboard</span>
        </a>
      </li>

      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">MASTER</span>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.master.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">database</span>
          <span class="title">Master Data</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.master.village-official-position.index') }}" class="menu-link {{ request()->routeIs('admin.master.village-official-position.*') ? 'active' : '' }}">
              Jabatan Organisasi
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.news-category.index') }}" class="menu-link {{ request()->routeIs('admin.master.news-category.*') ? 'active' : '' }}">
              Kategori Berita
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.legal-product-category.index') }}" class="menu-link {{ request()->routeIs('admin.master.legal-product-category.*') ? 'active' : '' }}">
              Kategori Produk Hukum
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.education.index') }}" class="menu-link {{ request()->routeIs('admin.master.education.*') ? 'active' : '' }}">
              Pendidikan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.gender.index') }}" class="menu-link {{ request()->routeIs('admin.master.gender.*') ? 'active' : '' }}">
              Jenis Kelamin
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.hamlet.index') }}" class="menu-link {{ request()->routeIs('admin.master.hamlet.*') ? 'active' : '' }}">
              Jaga
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.job.index') }}" class="menu-link {{ request()->routeIs('admin.master.job.*') ? 'active' : '' }}">
              Pekerjaan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.marriage.index') }}" class="menu-link {{ request()->routeIs('admin.master.marriage.*') ? 'active' : '' }}">
              Perkawinan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.religion.index') }}" class="menu-link {{ request()->routeIs('admin.master.religion.*') ? 'active' : '' }}">
              Agama
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.income.index') }}" class="menu-link {{ request()->routeIs('admin.master.income.*') ? 'active' : '' }}">
              Pendapatan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.shopping.index') }}" class="menu-link {{ request()->routeIs('admin.master.shopping.*') ? 'active' : '' }}">
              Belanja
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.financing.index') }}" class="menu-link {{ request()->routeIs('admin.master.financing.*') ? 'active' : '' }}">
              Pembiayaan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.stunting.index') }}" class="menu-link {{ request()->routeIs('admin.master.stunting.*') ? 'active' : '' }}">
              Stunting
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.social-assistance.index') }}" class="menu-link {{ request()->routeIs('admin.master.social-assistance.*') ? 'active' : '' }}">
              Bantuan Sosial
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.master.idm-status.index') }}" class="menu-link {{ request()->routeIs('admin.master.idm-status.*') ? 'active' : '' }}">
              IDM Status
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">INFOGRAFIS</span>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.infographics.resident.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">groups</span>
          <span class="title">Penduduk</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.index') || request()->routeIs('admin.infographics.resident.edit') ? 'active' : '' }}">
              Jumlah Penduduk
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.age.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.age.*') ? 'active' : '' }}">
              Jumlah Umur
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.hamlet.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.hamlet.*') ? 'active' : '' }}">
              Jumlah Jaga
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.education.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.education.*') ? 'active' : '' }}">
              Jumlah Pendidikan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.job.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.job.*') ? 'active' : '' }}">
              Jumlah Pekerjaan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.must_select.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.must_select.*') ? 'active' : '' }}">
              Jumlah Wajib Pilih
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.marriage.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.marriage.*') ? 'active' : '' }}">
              Jumlah Perkawinan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.resident.religion.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.resident.religion.*') ? 'active' : '' }}">
              Jumlah Agama
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.infographics.apbd.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">attach_money</span>
          <span class="title">APBD</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.infographics.apbd.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.apbd.index') || request()->routeIs('admin.infographics.apbd.create') || request()->routeIs('admin.infographics.apbd.show') || request()->routeIs('admin.infographics.apbd.edit') ? 'active' : '' }}">
              APBD per Tahun
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.apbd.income.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.apbd.income.*') ? 'active' : '' }}">
              Pendapatan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.apbd.shopping.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.apbd.shopping.*') ? 'active' : '' }}">
              Belanja
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.apbd.financing.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.apbd.financing.*') ? 'active' : '' }}">
              Pembiayaan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.apbd.development-realization.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.apbd.development-realization.*') ? 'active' : '' }}">
              Realisasi Pembangunan
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.infographics.stunting.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">stacked_bar_chart</span>
          <span class="title">Stunting</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.infographics.stunting.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.stunting.*') ? 'active' : '' }}">
              Data Stunting
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.infographics.social-assistance.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">volunteer_activism</span>
          <span class="title">Bantuan Sosial</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.infographics.social-assistance.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.social-assistance.*') ? 'active' : '' }}">
              Penerima Bantual Sosial
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.infographics.idm.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">leaderboard</span>
          <span class="title">IDM</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.infographics.idm.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.idm.index') || request()->routeIs('admin.infographics.idm.create') || request()->routeIs('admin.infographics.idm.show') || request()->routeIs('admin.infographics.idm.edit') ? 'active' : '' }}">
              Skor IDM
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.idm.iks.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.idm.iks.*') ? 'active' : '' }}">
              Indikator IKS
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.idm.ike.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.idm.ike.*') ? 'active' : '' }}">
              Indikator IKE
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.infographics.idm.ikl.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.idm.ikl.*') ? 'active' : '' }}">
              Indikator IKL
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.infographics.sdgs.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">target</span>
          <span class="title">SDGs</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.infographics.sdgs.index') }}" class="menu-link {{ request()->routeIs('admin.infographics.sdgs.*') ? 'active' : '' }}">
              Jumlah SDGs
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-title small text-uppercase">
        <span class="menu-title-text">KONTEN PUBLIK</span>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.content.slider.*') ? 'open' : '' }}">
        <a href="{{ route('admin.content.slider.index') }}" class="menu-link {{ request()->routeIs('admin.content.slider.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">auto_awesome_motion</span>
          <span class="title">Slider</span>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.content.galleries.*') ? 'open' : '' }}">
        <a href="{{ route('admin.content.galleries.index') }}" class="menu-link {{ request()->routeIs('admin.content.galleries.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">photo_library</span>
          <span class="title">Galeri</span>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.content.profile.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle active">
          <span class="material-symbols-outlined menu-icon">app_registration</span>
          <span class="title">Profil Desa</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.content.profile.history.index') }}" class="menu-link {{ request()->routeIs('admin.content.profile.history.*') ? 'active' : '' }}">
              Sejarah Desa
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.content.profile.vision-mission.vision.index') }}" class="menu-link {{ request()->routeIs('admin.content.profile.vision-mission.*') ? 'active' : '' }}">
              Visi & Misi
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.content.profile.organization.structure.index') }}" class="menu-link {{ request()->routeIs('admin.content.profile.organization.*') ? 'active' : '' }}">
              Struktur Organisasi
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.services.*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">handshake</span>
          <span class="title">Layanan Publik</span>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.services.index') }}" class="menu-link {{ request()->routeIs('admin.services.index') || request()->routeIs('admin.services.create') || request()->routeIs('admin.services.edit') ? 'active' : '' }}">
              Daftar Layanan
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('admin.services.submissions.index') }}" class="menu-link {{ request()->routeIs('admin.services.submissions.*') ? 'active' : '' }}">
              Pengajuan Layanan
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.content.news.*') ? 'open' : '' }}">
        <a href="{{ route('admin.content.news.index') }}" class="menu-link {{ request()->routeIs('admin.content.news.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">feed</span>
          <span class="title">Berita & Informasi</span>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.content.legal-product.*') ? 'open' : '' }}">
        <a href="{{ route('admin.content.legal-product.index') }}" class="menu-link {{ request()->routeIs('admin.content.legal-product.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">gavel</span>
          <span class="title">Produk Hukum</span>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.content.anti.*') ? 'open' : '' }}">
        <a href="{{ route('admin.content.anti.governance.index') }}" class="menu-link {{ request()->routeIs('admin.content.anti.*') ? 'active' : '' }}">
          <span class="material-symbols-outlined menu-icon">target</span>
          <span class="title">Desa Anti Korupsi</span>
        </a>
      </li>

      @if (Auth::user()->role == 'superadmin')
        <li class="menu-title small text-uppercase">
          <span class="menu-title-text">USERS</span>
        </li>

        <li class="menu-item {{ request()->routeIs('admin.users.*') ? 'open' : '' }}">
          <a href="{{ route('admin.users.index') }}" class="menu-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <span class="material-symbols-outlined menu-icon">manage_accounts</span>
            <span class="title">Manajemen User</span>
          </a>
        </li>
      @endif
    </ul>
  </aside>
</div>
