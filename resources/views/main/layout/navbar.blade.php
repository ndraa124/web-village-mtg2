<nav class="bg-white shadow-lg sticky top-0 z-50">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <div class="flex items-center space-x-3">
        <img src="{{ asset('img/logo.png') }}" alt="Logo Desa" class="h-10 w-8">
        <div>
          <h1 class="text-red-700 font-bold text-xl">DESA MOTOLING DUA</h1>
          <p class="text-xs text-gray-600">Kecamatan Motoling - Kabupaten Minahasa Selatan</p>
        </div>
      </div>

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
        <a href="{{ route('service.index') }}" class="text-gray-700 hover:text-red-600 transition {{ request()->routeIs('service.*') ? 'text-red-600 font-semibold' : '' }}">
          Layanan
        </a>
        <a href="{{ route('news.index') }}" class="text-gray-700 hover:text-red-600 transition {{ request()->routeIs('news.*') ? 'text-red-600 font-semibold' : '' }}">
          Berita
        </a>
        <a href="{{ route('potential.index') }}" class="text-gray-700 hover:text-red-600 transition {{ request()->routeIs('potential.*') ? 'text-red-600 font-semibold' : '' }}">
          Potensi
        </a>
        <div class="relative group">
          <button class="text-gray-700 hover:text-red-600 flex items-center {{ request()->routeIs('anti..*') ? 'text-red-600 font-semibold' : '' }}">
            Desa Anti Korupsi <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <a href="{{ route('anti.layout.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 {{ request()->routeIs('anti.layout.index') ? 'text-red-600 font-semibold' : '' }}">
              Tata Letak
            </a>
          </div>
        </div>
      </div>

      <button id="mobile-menu-btn" class="lg:hidden text-gray-700">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
  </div>

  <div id="mobile-menu" class="lg:hidden hidden bg-white border-t">
    <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Beranda</a>
    <a href="#profil" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Profil</a>
    <a href="#infografis" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Infografis</a>
    <a href="{{ route('service.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Layanan</a>
    <a href="{{ route('news.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Berita</a>
    <a href="{{ route('potential.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Potensi</a>
  </div>
</nav>