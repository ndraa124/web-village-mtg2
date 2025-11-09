<nav class="bg-white shadow-lg sticky top-0 z-50">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <!-- Logo Section - Responsive -->
      <div class="flex items-center space-x-3 flex-shrink-0">
        <img src="{{ asset('img/logo.png') }}" alt="Logo Desa" class="h-10 w-8">
        <!-- Desktop Logo Text -->
        <div class="hidden sm:block">
          <h1 class="text-red-700 font-bold text-lg md:text-xl">DESA MOTOLING DUA</h1>
          <p class="text-xs text-gray-600">Kecamatan Motoling - Kabupaten Minahasa Selatan</p>
        </div>
        <!-- Mobile Logo Text -->
        <div class="block sm:hidden">
          <h1 class="text-red-700 font-bold text-sm">DESA MOTOLING DUA</h1>
          <p class="text-[10px] text-gray-600">Kec. Motoling - Kab. Minsel</p>
        </div>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden lg:flex items-center space-x-6">
        <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-600 transition {{ request()->routeIs('home') ? 'text-red-600 font-semibold' : '' }}">
          Beranda
        </a>

        <div class="relative group">
          <button class="text-gray-700 hover:text-red-600 transition flex items-center {{ request()->routeIs('profile.*') ? 'text-red-600 font-semibold' : '' }}">
            Profil <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <a href="{{ route('profile.history') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('profile.history') ? 'text-red-600 font-semibold' : '' }}">
              Sejarah Desa
            </a>
            <a href="{{ route('profile.vision') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('profile.vision') ? 'text-red-600 font-semibold' : '' }}">
              Visi & Misi
            </a>
            <a href="{{ route('profile.organization') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('profile.organization') ? 'text-red-600 font-semibold' : '' }}">
              Struktur Organisasi
            </a>
          </div>
        </div>

        <div class="relative group">
          <button class="text-gray-700 hover:text-red-600 flex items-center {{ request()->routeIs('public.infographics.*') ? 'text-red-600 font-semibold' : '' }}">
            Infografis <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <a href="{{ route('public.infographics.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.index') ? 'text-red-600 font-semibold' : '' }}">
              Penduduk
            </a>
            <a href="{{ route('public.infographics.apbdes') }}" class="block px-4 py-2 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.apbdes') ? 'text-red-600 font-semibold' : '' }}">
              APBDes
            </a>
            <a href="{{ route('public.infographics.stunting') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.stunting') ? 'text-red-600 font-semibold' : '' }}">
              Stunting
            </a>
            <a href="{{ route('public.infographics.social_assistance') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.social_assistance') ? 'text-red-600 font-semibold' : '' }}">
              Bansos
            </a>
            <a href="{{ route('public.infographics.idm') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.idm') ? 'text-red-600 font-semibold' : '' }}">
              IDM
            </a>
            <a href="{{ route('public.infographics.sdgs') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.sdgs') ? 'text-red-600 font-semibold' : '' }}">
              SDGs
            </a>
          </div>
        </div>

        <div class="relative group">
          <button class="text-gray-700 hover:text-red-600 flex items-center {{ request()->routeIs('service.*') ? 'text-red-600 font-semibold' : '' }}">
            Layanan <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <a href="{{ route('service.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('service.index') ? 'text-red-600 font-semibold' : '' }}">
              Layanan Masyarakat
            </a>
            <a href="https://forms.gle/PUBxooALDLNdUkS67" target="_blank" class="block px-4 py-2 hover:bg-red-50 hover:text-red-600">
              Layanan Pengaduan
            </a>
          </div>
        </div>

        <a href="{{ route('news.index') }}" class="text-gray-700 hover:text-red-600 transition {{ request()->routeIs('news.*') ? 'text-red-600 font-semibold' : '' }}">
          Berita & Informasi
        </a>

        <a href="{{ route('potential.index') }}" class="text-gray-700 hover:text-red-600 transition {{ request()->routeIs('potential.*') ? 'text-red-600 font-semibold' : '' }}">
          Potensi
        </a>

        <a href="{{ route('legal-products.index') }}" class="text-gray-700 hover:text-red-600 transition {{ request()->routeIs('legal-products.*') ? 'text-red-600 font-semibold' : '' }}">
          Produk Hukum
        </a>

        <div class="relative group">
          <button class="text-gray-700 hover:text-red-600 flex items-center {{ request()->routeIs('anti.*') ? 'text-red-600 font-semibold' : '' }}">
            Desa Anti Korupsi <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <a href="{{ route('anti.governance.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.governance.index') ? 'text-red-600 font-semibold' : '' }}">
              Tata Laksana
            </a>
            <a href="{{ route('anti.supervision.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.supervision.index') ? 'text-red-600 font-semibold' : '' }}">
              Pengawasan
            </a>
            <a href="{{ route('anti.service-quality.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.service-quality.index') ? 'text-red-600 font-semibold' : '' }}">
              Kualitas Pelayanan Publik
            </a>
            <a href="{{ route('anti.participate.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.participate.index') ? 'text-red-600 font-semibold' : '' }}">
              Partisipasi Masyarakat
            </a>
            <a href="{{ route('anti.local-wisdom.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.local-wisdom.index') ? 'text-red-600 font-semibold' : '' }}">
              Kearifan Lokal
            </a>
          </div>
        </div>

        <div class="relative group">
          <button class="text-gray-700 hover:text-red-600 flex items-center">
            Survei <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <a href="https://forms.gle/HgqgZtuVUe7sfNqd7" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">
              Survei Kepuasan Masyarakat
            </a>
            <a href="https://forms.gle/PZSRrQU1GBqXhY2JA" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">
              Survei Perilaku
            </a>
          </div>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="lg:hidden text-gray-700 p-2 hover:bg-gray-100 rounded-md transition">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden hidden bg-white border-t absolute left-0 right-0 shadow-lg">
    <div class="max-h-[70vh] overflow-y-auto">
      <a href="{{ route('home') }}" class="block px-4 py-3 text-gray-700 hover:bg-red-50 border-b {{ request()->routeIs('home') ? 'text-red-600 font-semibold bg-red-50' : '' }}">
        Beranda
      </a>

      <!-- Profil Dropdown -->
      <div class="border-b">
        <button class="mobile-dropdown-btn w-full text-left px-4 py-3 text-gray-700 hover:bg-red-50 flex justify-between items-center {{ request()->routeIs('profile.*') ? 'text-red-600 font-semibold' : '' }}">
          Profil
          <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </button>
        <div class="mobile-dropdown-content hidden bg-gray-50">
          <a href="{{ route('profile.history') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('profile.history') ? 'text-red-600 font-semibold' : '' }}">
            Sejarah Desa
          </a>
          <a href="{{ route('profile.vision') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('profile.vision') ? 'text-red-600 font-semibold' : '' }}">
            Visi & Misi
          </a>
          <a href="{{ route('profile.organization') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('profile.organization') ? 'text-red-600 font-semibold' : '' }}">
            Struktur Organisasi
          </a>
        </div>
      </div>

      <!-- Infografis Dropdown -->
      <div class="border-b">
        <button class="mobile-dropdown-btn w-full text-left px-4 py-3 text-gray-700 hover:bg-red-50 flex justify-between items-center {{ request()->routeIs('public.infographics.*') ? 'text-red-600 font-semibold' : '' }}">
          Infografis
          <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </button>
        <div class="mobile-dropdown-content hidden bg-gray-50">
          <a href="{{ route('public.infographics.index') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.index') ? 'text-red-600 font-semibold' : '' }}">
            Penduduk
          </a>
          <a href="{{ route('public.infographics.apbdes') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.apbdes') ? 'text-red-600 font-semibold' : '' }}">
            APBDes
          </a>
          <a href="{{ route('public.infographics.stunting') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.stunting') ? 'text-red-600 font-semibold' : '' }}">
            Stunting
          </a>
          <a href="{{ route('public.infographics.social_assistance') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.social_assistance') ? 'text-red-600 font-semibold' : '' }}">
            Bansos
          </a>
          <a href="{{ route('public.infographics.idm') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.idm') ? 'text-red-600 font-semibold' : '' }}">
            IDM
          </a>
          <a href="{{ route('public.infographics.sdgs') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('public.infographics.sdgs') ? 'text-red-600 font-semibold' : '' }}">
            SDGs
          </a>
        </div>
      </div>

      <!-- Layanan Dropdown -->
      <div class="border-b">
        <button class="mobile-dropdown-btn w-full text-left px-4 py-3 text-gray-700 hover:bg-red-50 flex justify-between items-center {{ request()->routeIs('service.*') ? 'text-red-600 font-semibold' : '' }}">
          Layanan
          <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </button>
        <div class="mobile-dropdown-content hidden bg-gray-50">
          <a href="{{ route('service.index') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('service.index') ? 'text-red-600 font-semibold' : '' }}">
            Layanan Masyarakat
          </a>
          <a href="https://forms.gle/PUBxooALDLNdUkS67" target="_blank" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">
            Layanan Pengaduan
          </a>
        </div>
      </div>

      <a href="{{ route('news.index') }}" class="block px-4 py-3 text-gray-700 hover:bg-red-50 border-b {{ request()->routeIs('news.*') ? 'text-red-600 font-semibold bg-red-50' : '' }}">
        Berita & Informasi
      </a>

      <a href="{{ route('potential.index') }}" class="block px-4 py-3 text-gray-700 hover:bg-red-50 border-b {{ request()->routeIs('potential.*') ? 'text-red-600 font-semibold bg-red-50' : '' }}">
        Potensi
      </a>

      <a href="{{ route('legal-products.index') }}" class="block px-4 py-3 text-gray-700 hover:bg-red-50 border-b {{ request()->routeIs('legal-products.*') ? 'text-red-600 font-semibold bg-red-50' : '' }}">
        Produk Hukum
      </a>

      <!-- Desa Anti Korupsi Dropdown -->
      <div class="border-b">
        <button class="mobile-dropdown-btn w-full text-left px-4 py-3 text-gray-700 hover:bg-red-50 flex justify-between items-center {{ request()->routeIs('anti.*') ? 'text-red-600 font-semibold' : '' }}">
          Desa Anti Korupsi
          <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </button>
        <div class="mobile-dropdown-content hidden bg-gray-50">
          <a href="{{ route('anti.governance.index') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.governance.index') ? 'text-red-600 font-semibold' : '' }}">
            Tata Laksana
          </a>
          <a href="{{ route('anti.supervision.index') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.supervision.index') ? 'text-red-600 font-semibold' : '' }}">
            Pengawasan
          </a>
          <a href="{{ route('anti.service-quality.index') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.service-quality.index') ? 'text-red-600 font-semibold' : '' }}">
            Kualitas Pelayanan Publik
          </a>
          <a href="{{ route('anti.participate.index') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.participate.index') ? 'text-red-600 font-semibold' : '' }}">
            Partisipasi Masyarakat
          </a>
          <a href="{{ route('anti.local-wisdom.index') }}" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.local-wisdom.index') ? 'text-red-600 font-semibold' : '' }}">
            Kearifan Lokal
          </a>
        </div>
      </div>

      <!-- Survei Dropdown -->
      <div class="border-b">
        <button class="mobile-dropdown-btn w-full text-left px-4 py-3 text-gray-700 hover:bg-red-50 flex justify-between items-center">
          Survei
          <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </button>
        <div class="mobile-dropdown-content hidden bg-gray-50">
          <a href="https://forms.gle/HgqgZtuVUe7sfNqd7" target="_blank" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">
            Survei Kepuasan Masyarakat
          </a>
          <a href="https://forms.gle/PZSRrQU1GBqXhY2JA" target="_blank" class="block px-8 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">
            Survei Perilaku
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>