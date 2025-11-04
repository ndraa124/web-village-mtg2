<section class="relative h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden">
  {{-- Slider Latar Belakang Ilustrasi --}}
  <div class="absolute inset-0 swiper hero-background-slider">
    <div class="swiper-wrapper">

      {{-- Slide 1: Pemandangan Desa Asri --}}
      <div class="swiper-slide"
        style="background-image: url('/images/illustrations/pemandangan.svg'); background-size: cover; background-position: center;">

        <div class="absolute inset-0 z-10 bg-black opacity-30"></div>
      </div>

      {{-- Slide 2: Aktivitas Pertanian --}}
      <div class="swiper-slide"
        style="background-image: url('/images/illustrations/pertanian.svg'); background-size: cover; background-position: center;">

        <div class="absolute inset-0 z-10 bg-black opacity-30"></div>
      </div>

      {{-- Slide 3: Bangunan Publik Desa --}}
      <div class="swiper-slide"
        style="background-image: url('/images/illustrations/gedung.svg'); background-size: cover; background-position: center;">

        <div class="absolute inset-0 z-10 bg-black opacity-30"></div>
      </div>

    </div>
  </div>

  {{-- Konten Teks Tetap di Atas --}}
  <div class="relative z-20 container mx-auto px-4 py-24 md:py-32 lg:py-48">
    <div class="text-center text-white">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Website Resmi</h2>
      <h3 class="text-3xl md:text-4xl font-bold mb-6">DESA MOTOLING DUA</h3>
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

<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
      <i class="fas fa-chart-pie text-red-600 mr-2"></i>
      Info Grafis Unggulan
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <a href="/infografis/penduduk"
        class="group relative block rounded-lg overflow-hidden shadow-lg h-42 transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">

        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800"></div>

        <i class="fas fa-users absolute right-6 bottom-6 text-9xl text-white opacity-10 transform -rotate-12 transition-transform duration-300 group-hover:scale-110"></i>

        <div class="relative h-full flex flex-col justify-end p-6 text-white">
          <h3 class="text-2xl font-bold mb-2">Infografis Kependudukan</h3>
          <p class="text-sm mb-4">Lihat data demografi, kelompok umur, dan pekerjaan warga.</p>
          <span class="font-semibold text-blue-200 group-hover:text-white transition-colors">
            Lihat Data <i class="fas fa-arrow-right ml-1"></i>
          </span>
        </div>
      </a>

      <a href="/infografis/apbdes"
        class="group relative block rounded-lg overflow-hidden shadow-lg h-42 transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">

        <div class="absolute inset-0 bg-gradient-to-br from-green-600 to-green-800"></div>

        <i class="fas fa-balance-scale absolute right-6 bottom-6 text-9xl text-white opacity-10 transform -rotate-12 transition-transform duration-300 group-hover:scale-110"></i>

        <div class="relative h-full flex flex-col justify-end p-6 text-white">
          <h3 class="text-2xl font-bold mb-2">Transparansi Anggaran</h3>
          <p class="text-sm mb-4">Akses rincian Anggaran Pendapatan dan Belanja Desa (APBDes).</p>
          <span class="font-semibold text-green-200 group-hover:text-white transition-colors">
            Lihat APBDes <i class="fas fa-arrow-right ml-1"></i>
          </span>
        </div>
      </a>

      <a href="/infografis/idm"
        class="group relative block rounded-lg overflow-hidden shadow-lg h-42 transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">

        <div class="absolute inset-0 bg-gradient-to-br from-red-600 to-red-800"></div>

        <i class="fas fa-chart-line absolute right-6 bottom-6 text-9xl text-white opacity-10 transform -rotate-12 transition-transform duration-300 group-hover:scale-110"></i>

        <div class="relative h-full flex flex-col justify-end p-6 text-white">
          <h3 class="text-2xl font-bold mb-2">Status Pembangunan</h3>
          <p class="text-sm mb-4">Lihat pencapaian Indeks Desa Membangun (IDM) & SDGs Desa.</p>
          <span class="font-semibold text-red-200 group-hover:text-white transition-colors">
            Lihat IDM & SDGs <i class="fas fa-arrow-right ml-1"></i>
          </span>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
      <i class="fas fa-chart-bar text-red-600 mr-2"></i>
      Statistik Kependudukan
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
      <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-users text-3xl text-red-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="1678">0</h3>
        <p class="text-gray-600 mt-2">Total Penduduk</p>
      </div>

      <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-male text-3xl text-blue-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="894">0</h3>
        <p class="text-gray-600 mt-2">Laki-Laki</p>
      </div>

      <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-female text-3xl text-pink-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="780">0</h3>
        <p class="text-gray-600 mt-2">Perempuan</p>
      </div>

      <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-home text-3xl text-green-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="522">0</h3>
        <p class="text-gray-600 mt-2">Kepala Keluarga</p>
      </div>

      <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-user-clock text-3xl text-yellow-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="26">0</h3>
        <p class="text-gray-600 mt-2">Penduduk Sementara</p>
      </div>

      <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-exchange-alt text-3xl text-purple-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="15">0</h3>
        <p class="text-gray-600 mt-2">Mutasi Penduduk</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
      <i class="fas fa-money-bill-wave text-red-600 mr-2"></i>
      Transparansi APB Desa 2025
    </h2>

    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-xl font-bold text-gray-800 mb-6">Anggaran Desa</h3>
        <div class="space-y-4">
          <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600"><i class="fas fa-arrow-down text-green-500 mr-2"></i>Pendapatan</span>
            <span class="font-bold text-green-600">Rp 1.523.921.510</span>
          </div>
          <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600"><i class="fas fa-arrow-up text-red-500 mr-2"></i>Belanja</span>
            <span class="font-bold text-red-600">Rp 1.321.221.510</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-gray-600"><i class="fas fa-balance-scale text-blue-500 mr-2"></i>Surplus</span>
            <span class="font-bold text-blue-600">Rp 0</span>
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
            <span>5 September 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">TUPOKSI HUKUM TUA</h3>
          <p class="text-gray-600 mb-4">TUGAS POKOK DAN FUNGSI HUKUM TUA...</p>
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
            <span>27 Oktober 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">SURVEI PRILAKU MASYARAKAT TENTANG GRATIFIKASI, SUAP DAN KONLIK KEPENTINGAN</h3>
          <p class="text-gray-600 mb-4">Survei kepuasan masyarakat (SKM) desa adalah pengukuran tingkat kepuasan warga terhadap kualitas pelayanan publik...</p>
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
            <span>3 September 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">GOTONG ROYONG MEMINDAHKAN RUMAH DI DESA MOTOLING DUA</h3>
          <p class="text-gray-600 mb-4">Gotong royong memindahkan rumah di Motoling Dua , yang biasa disebut MAPALUS...</p>
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
              <p class="text-gray-600">Jl. Sam Ratulangi Jaga IV Desa Motoling Dua, Kecamatan Motoling, Kabupaten Minahasa Selatan Provinsi Sulawesi Utara, 95356</p>
            </div>
          </div>

          <div class="flex items-start">
            <i class="fas fa-phone text-red-600 mt-1 mr-3"></i>
            <div>
              <p class="font-semibold text-gray-800">Telepon</p>
              <p class="text-gray-600">082115028912</p>
            </div>
          </div>

          <div class="flex items-start">
            <i class="fas fa-envelope text-red-600 mt-1 mr-3"></i>
            <div>
              <p class="font-semibold text-gray-800">Email</p>
              <p class="text-gray-600">motolingdua333@gmail.com</p>
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

{{-- SCRIPT SLIDER SWIPER.JS TELAH DIHAPUS --}}