<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Resmi Desa Mekarjaya</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('main/css/styles.css') }}">

  <!-- Leaflet CSS for Map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
</head>

<body class="bg-gray-50">

  <!-- Navigation -->
  <nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center py-4">
        <div class="flex items-center space-x-3">
          <img src="https://via.placeholder.com/40" alt="Logo Desa" class="h-10 w-10">
          <div>
            <h1 class="text-red-700 font-bold text-xl">DESA MEKARJAYA</h1>
            <p class="text-xs text-gray-600">Kecamatan Cikarang - Kabupaten Bekasi</p>
          </div>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-6">
          <a href="#beranda" class="text-gray-700 hover:text-red-600 transition">Beranda</a>
          <div class="relative group">
            <button class="text-gray-700 hover:text-red-600 transition flex items-center">
              Profil <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
              <a href="{{ route('history') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Sejarah Desa</a>
              <a href="{{ route('vision') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Visi & Misi</a>
              <a href="{{ route('organization') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Struktur Organisasi</a>
            </div>
          </div>
          <a href="#layanan" class="text-gray-700 hover:text-red-600 transition">Layanan</a>
          <a href="#berita" class="text-gray-700 hover:text-red-600 transition">Berita</a>
          <a href="#potensi" class="text-gray-700 hover:text-red-600 transition">Potensi</a>
          <div class="relative group">
            <button class="text-gray-700 hover:text-red-600 font-semibold flex items-center">
              Infografis <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
              <a href="infografis-penduduk.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Penduduk</a>
              <a href="infografis-apbdes.html" class="block px-4 py-2 hover:bg-red-50 hover:text-red-600">APBDes</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Stunting</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Bansos</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">IDM</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">SDGs</a>
            </div>
          </div>
          <a href="#kontak" class="text-gray-700 hover:text-red-600 transition">Kontak</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="lg:hidden text-gray-700">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t">
      <a href="#beranda" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Beranda</a>
      <a href="#profil" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Profil</a>
      <a href="#layanan" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Layanan</a>
      <a href="#berita" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Berita</a>
      <a href="#potensi" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Potensi</a>
      <a href="#kontak" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Kontak</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-red-600 to-red-800 text-white">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="relative container mx-auto px-4 py-24">
      <div class="text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Website Resmi</h2>
        <h3 class="text-3xl md:text-4xl font-bold mb-6">DESA MEKARJAYA</h3>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">
          Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan Desa.
          Aspek pemerintahan, penduduk, demografi, potensi Desa, dan juga berita tentang Desa.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="#layanan" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-50 transition">
            <i class="fas fa-hand-holding-heart mr-2"></i> Layanan Publik
          </a>
          <a href="#berita" class="bg-red-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-800 transition border-2 border-white">
            <i class="fas fa-newspaper mr-2"></i> Berita Terkini
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-chart-bar text-red-600 mr-2"></i>
        Statistik Kependudukan
      </h2>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
        <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6 text-center hover:shadow-lg transition">
          <i class="fas fa-users text-3xl text-red-600 mb-3"></i>
          <h3 class="text-3xl font-bold text-gray-800 counter" data-target="5234">0</h3>
          <p class="text-gray-600 mt-2">Total Penduduk</p>
        </div>

        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 text-center hover:shadow-lg transition">
          <i class="fas fa-male text-3xl text-blue-600 mb-3"></i>
          <h3 class="text-3xl font-bold text-gray-800 counter" data-target="2678">0</h3>
          <p class="text-gray-600 mt-2">Laki-Laki</p>
        </div>

        <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6 text-center hover:shadow-lg transition">
          <i class="fas fa-female text-3xl text-pink-600 mb-3"></i>
          <h3 class="text-3xl font-bold text-gray-800 counter" data-target="2556">0</h3>
          <p class="text-gray-600 mt-2">Perempuan</p>
        </div>

        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 text-center hover:shadow-lg transition">
          <i class="fas fa-home text-3xl text-green-600 mb-3"></i>
          <h3 class="text-3xl font-bold text-gray-800 counter" data-target="1345">0</h3>
          <p class="text-gray-600 mt-2">Kepala Keluarga</p>
        </div>

        <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-6 text-center hover:shadow-lg transition">
          <i class="fas fa-user-clock text-3xl text-yellow-600 mb-3"></i>
          <h3 class="text-3xl font-bold text-gray-800 counter" data-target="127">0</h3>
          <p class="text-gray-600 mt-2">Penduduk Sementara</p>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6 text-center hover:shadow-lg transition">
          <i class="fas fa-exchange-alt text-3xl text-purple-600 mb-3"></i>
          <h3 class="text-3xl font-bold text-gray-800 counter" data-target="45">0</h3>
          <p class="text-gray-600 mt-2">Mutasi Penduduk</p>
        </div>
      </div>
    </div>
  </section>

  <!-- APBDesa Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-money-bill-wave text-red-600 mr-2"></i>
        Transparansi APB Desa 2024
      </h2>

      <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-xl font-bold text-gray-800 mb-6">Anggaran Desa</h3>
          <div class="space-y-4">
            <div class="flex justify-between items-center border-b pb-3">
              <span class="text-gray-600"><i class="fas fa-arrow-down text-green-500 mr-2"></i>Pendapatan</span>
              <span class="font-bold text-green-600">Rp 1.250.000.000</span>
            </div>
            <div class="flex justify-between items-center border-b pb-3">
              <span class="text-gray-600"><i class="fas fa-arrow-up text-red-500 mr-2"></i>Belanja</span>
              <span class="font-bold text-red-600">Rp 1.180.000.000</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-600"><i class="fas fa-balance-scale text-blue-500 mr-2"></i>Surplus</span>
              <span class="font-bold text-blue-600">Rp 70.000.000</span>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-xl font-bold text-gray-800 mb-6">Realisasi Pembangunan</h3>
          <div class="space-y-4">
            <div>
              <div class="flex justify-between mb-1">
                <span class="text-gray-600">Infrastruktur</span>
                <span class="text-gray-800 font-semibold">85%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-red-600 h-2 rounded-full" style="width: 85%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1">
                <span class="text-gray-600">Pendidikan</span>
                <span class="text-gray-800 font-semibold">92%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full" style="width: 92%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1">
                <span class="text-gray-600">Kesehatan</span>
                <span class="text-gray-800 font-semibold">78%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-600 h-2 rounded-full" style="width: 78%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="layanan" class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-hands-helping text-red-600 mr-2"></i>
        Layanan Publik
      </h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-lg p-6 text-white hover:shadow-2xl transition transform hover:-translate-y-1">
          <i class="fas fa-id-card text-4xl mb-4"></i>
          <h3 class="text-xl font-bold mb-2">E-KTP</h3>
          <p class="text-sm mb-4">Layanan pembuatan dan perpanjangan KTP elektronik</p>
          <a href="#" class="inline-block bg-white text-red-600 px-4 py-2 rounded-md text-sm font-semibold hover:bg-red-50 transition">
            Ajukan Sekarang →
          </a>
        </div>

        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg p-6 text-white hover:shadow-2xl transition transform hover:-translate-y-1">
          <i class="fas fa-file-alt text-4xl mb-4"></i>
          <h3 class="text-xl font-bold mb-2">Surat Keterangan</h3>
          <p class="text-sm mb-4">Berbagai surat keterangan untuk keperluan administrasi</p>
          <a href="#" class="inline-block bg-white text-blue-600 px-4 py-2 rounded-md text-sm font-semibold hover:bg-blue-50 transition">
            Ajukan Sekarang →
          </a>
        </div>

        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg p-6 text-white hover:shadow-2xl transition transform hover:-translate-y-1">
          <i class="fas fa-baby text-4xl mb-4"></i>
          <h3 class="text-xl font-bold mb-2">Akta Kelahiran</h3>
          <p class="text-sm mb-4">Pembuatan akta kelahiran untuk bayi baru lahir</p>
          <a href="#" class="inline-block bg-white text-green-600 px-4 py-2 rounded-md text-sm font-semibold hover:bg-green-50 transition">
            Ajukan Sekarang →
          </a>
        </div>

        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg p-6 text-white hover:shadow-2xl transition transform hover:-translate-y-1">
          <i class="fas fa-briefcase text-4xl mb-4"></i>
          <h3 class="text-xl font-bold mb-2">UMKM</h3>
          <p class="text-sm mb-4">Pendaftaran dan perizinan usaha mikro kecil menengah</p>
          <a href="#" class="inline-block bg-white text-purple-600 px-4 py-2 rounded-md text-sm font-semibold hover:bg-purple-50 transition">
            Ajukan Sekarang →
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section id="berita" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-newspaper text-red-600 mr-2"></i>
        Berita Terkini
      </h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
          <img src="https://via.placeholder.com/400x250" alt="Berita 1" class="w-full h-48 object-cover">
          <div class="p-6">
            <div class="flex items-center text-sm text-gray-500 mb-2">
              <i class="fas fa-calendar mr-2"></i>
              <span>28 Desember 2024</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Pembangunan Jalan Desa Tahap II Dimulai</h3>
            <p class="text-gray-600 mb-4">Pemerintah desa memulai tahap kedua pembangunan jalan desa sepanjang 2 kilometer yang menghubungkan...</p>
            <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">
              Baca Selengkapnya →
            </a>
          </div>
        </article>

        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
          <img src="https://via.placeholder.com/400x250" alt="Berita 2" class="w-full h-48 object-cover">
          <div class="p-6">
            <div class="flex items-center text-sm text-gray-500 mb-2">
              <i class="fas fa-calendar mr-2"></i>
              <span>25 Desember 2024</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Festival Budaya Desa Sukses Digelar</h3>
            <p class="text-gray-600 mb-4">Festival budaya tahunan berhasil menarik ribuan pengunjung dari berbagai daerah dengan menampilkan...</p>
            <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">
              Baca Selengkapnya →
            </a>
          </div>
        </article>

        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
          <img src="https://via.placeholder.com/400x250" alt="Berita 3" class="w-full h-48 object-cover">
          <div class="p-6">
            <div class="flex items-center text-sm text-gray-500 mb-2">
              <i class="fas fa-calendar mr-2"></i>
              <span>20 Desember 2024</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Pelatihan Digital Marketing untuk UMKM</h3>
            <p class="text-gray-600 mb-4">Pemerintah desa bekerja sama dengan Dinas Koperasi mengadakan pelatihan digital marketing untuk...</p>
            <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">
              Baca Selengkapnya →
            </a>
          </div>
        </article>
      </div>

      <div class="text-center mt-8">
        <a href="#" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
          <i class="fas fa-arrow-right mr-2"></i>
          Lihat Semua Berita
        </a>
      </div>
    </div>
  </section>

  <!-- Potential Section -->
  <section id="potensi" class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-gem text-red-600 mr-2"></i>
        Potensi Desa
      </h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="text-center">
          <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-mountain text-3xl text-red-600"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">Wisata Alam</h3>
          <p class="text-gray-600">Keindahan alam pegunungan dengan udara sejuk dan pemandangan yang memukau</p>
        </div>

        <div class="text-center">
          <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-seedling text-3xl text-green-600"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">Pertanian</h3>
          <p class="text-gray-600">Hasil pertanian berkualitas dengan sistem organik dan ramah lingkungan</p>
        </div>

        <div class="text-center">
          <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-store text-3xl text-blue-600"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">UMKM</h3>
          <p class="text-gray-600">Produk kerajinan tangan dan kuliner khas daerah yang mendunia</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-map-marked-alt text-red-600 mr-2"></i>
        Peta Desa
      </h2>

      <div class="bg-white rounded-lg shadow-lg p-4">
        <div id="map" class="h-96 rounded-lg"></div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-images text-red-600 mr-2"></i>
        Galeri Kegiatan
      </h2>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 1" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 2" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 3" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 4" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 5" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 6" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 7" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
        <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
          <img src="https://via.placeholder.com/300x300" alt="Galeri 8" class="w-full h-full object-cover hover:scale-110 transition duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
            <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="kontak" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
        <i class="fas fa-phone-alt text-red-600 mr-2"></i>
        Hubungi Kami
      </h2>

      <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>

          <div class="space-y-4">
            <div class="flex items-start">
              <i class="fas fa-map-marker-alt text-red-600 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-800">Alamat</p>
                <p class="text-gray-600">Jl. Raya Desa No. 123, Desa Mekarjaya, Kecamatan Cikarang, Kabupaten Bekasi, Jawa Barat 17530</p>
              </div>
            </div>

            <div class="flex items-start">
              <i class="fas fa-phone text-red-600 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-800">Telepon</p>
                <p class="text-gray-600">(021) 1234-5678</p>
              </div>
            </div>

            <div class="flex items-start">
              <i class="fas fa-envelope text-red-600 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-800">Email</p>
                <p class="text-gray-600">info@desamekarjaya.go.id</p>
              </div>
            </div>

            <div class="flex items-start">
              <i class="fas fa-clock text-red-600 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-800">Jam Operasional</p>
                <p class="text-gray-600">Senin - Jumat: 08.00 - 16.00 WIB</p>
                <p class="text-gray-600">Sabtu: 08.00 - 12.00 WIB</p>
              </div>
            </div>
          </div>

          <div class="mt-6">
            <p class="font-semibold text-gray-800 mb-3">Media Sosial</p>
            <div class="flex space-x-3">
              <a href="#" class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="bg-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-700 transition">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-700 transition">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>

          <form id="contact-form">
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2" for="name">Nama Lengkap</label>
              <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
              <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2" for="subject">Subjek</label>
              <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2" for="message">Pesan</label>
              <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required></textarea>
            </div>

            <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">
              <i class="fas fa-paper-plane mr-2"></i>
              Kirim Pesan
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-xl font-bold mb-4">Desa Mekarjaya</h3>
          <p class="text-gray-400">Membangun desa yang maju, mandiri, dan sejahtera untuk kesejahteraan bersama.</p>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Link Cepat</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition">Profil Desa</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Layanan</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Berita</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Pengaduan</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Layanan Online</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition">E-KTP</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Surat Keterangan</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Perizinan</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">UMKM</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Statistik Pengunjung</h4>
          <div class="bg-gray-800 rounded-lg p-4">
            <p class="text-gray-400 mb-2">
              <i class="fas fa-users mr-2"></i>
              Total: <span class="text-white font-semibold">125,678</span>
            </p>
            <p class="text-gray-400 mb-2">
              <i class="fas fa-user mr-2"></i>
              Hari Ini: <span class="text-white font-semibold">234</span>
            </p>
            <p class="text-gray-400">
              <i class="fas fa-chart-line mr-2"></i>
              Online: <span class="text-white font-semibold">12</span>
            </p>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-8 pt-8 text-center">
        <p class="text-gray-400">
          © 2024 Desa Mekarjaya. All rights reserved. | Developed with <i class="fas fa-heart text-red-500"></i> by Tim IT Desa
        </p>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="back-to-top" class="fixed bottom-8 right-8 bg-red-600 text-white w-12 h-12 rounded-full shadow-lg hidden hover:bg-red-700 transition">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <!-- Custom JavaScript -->
  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>