<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sejarah Desa - Desa Mekarjaya</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('main/css/styles.css') }}">
</head>

<body class="bg-gray-50">

  <!-- Navigation (Same as index.html) -->
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
          <a href="index.html" class="text-gray-700 hover:text-red-600 transition">Beranda</a>
          <div class="relative group">
            <button class="text-red-600 font-semibold flex items-center">
              Profil <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
              <a href="sejarah.html" class="block px-4 py-2 text-white bg-red-600">Sejarah Desa</a>
              <a href="visi-misi.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Visi & Misi</a>
              <a href="struktur.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Struktur Organisasi</a>
            </div>
          </div>
          <a href="index.html#layanan" class="text-gray-700 hover:text-red-600 transition">Layanan</a>
          <a href="index.html#berita" class="text-gray-700 hover:text-red-600 transition">Berita</a>
          <a href="index.html#potensi" class="text-gray-700 hover:text-red-600 transition">Potensi</a>
          <a href="index.html#kontak" class="text-gray-700 hover:text-red-600 transition">Kontak</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="lg:hidden text-gray-700">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t">
      <a href="index.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Beranda</a>
      <div class="px-4 py-2">
        <p class="font-semibold text-gray-700 mb-2">Profil</p>
        <a href="sejarah.html" class="block px-8 py-1 text-red-600 font-semibold">Sejarah Desa</a>
        <a href="visi-misi.html" class="block px-8 py-1 text-gray-600 hover:text-red-600">Visi & Misi</a>
        <a href="struktur.html" class="block px-8 py-1 text-gray-600 hover:text-red-600">Struktur Organisasi</a>
      </div>
      <a href="index.html#layanan" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Layanan</a>
      <a href="index.html#berita" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Berita</a>
      <a href="index.html#potensi" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Potensi</a>
      <a href="index.html#kontak" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Kontak</a>
    </div>
  </nav>

  <!-- Breadcrumb -->
  <section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-white mb-2">Sejarah Desa</h2>
      <nav class="text-white/90">
        <a href="index.html" class="hover:text-white">Beranda</a>
        <span class="mx-2">/</span>
        <a href="#" class="hover:text-white">Profil</a>
        <span class="mx-2">/</span>
        <span>Sejarah Desa</span>
      </nav>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">

        <!-- Hero Image -->
        <div class="mb-12">
          <img src="https://via.placeholder.com/1200x500" alt="Foto Historis Desa Mekarjaya"
            class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
          <p class="text-center text-sm text-gray-600 mt-2 italic">
            Foto Desa Mekarjaya pada tahun 1950-an
          </p>
        </div>

        <!-- Introduction -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
          <div class="flex items-center mb-6">
            <i class="fas fa-history text-3xl text-red-600 mr-4"></i>
            <h3 class="text-2xl font-bold text-gray-800">Asal Usul Nama Desa</h3>
          </div>
          <p class="text-gray-700 leading-relaxed mb-4">
            Desa Mekarjaya berasal dari dua kata dalam bahasa Sunda, yaitu "Mekar" yang berarti berkembang atau tumbuh subur,
            dan "Jaya" yang berarti kejayaan atau kemakmuran. Nama ini diberikan oleh para pendiri desa dengan harapan
            agar desa ini terus berkembang dan membawa kemakmuran bagi seluruh warganya.
          </p>
          <p class="text-gray-700 leading-relaxed">
            Pemilihan nama ini tidak lepas dari kondisi geografis desa yang subur dengan tanah yang cocok untuk pertanian,
            serta semangat gotong royong masyarakat yang kuat dalam membangun desa.
          </p>
        </div>

        <!-- Timeline Section -->
        <div class="mb-12">
          <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">
            <i class="fas fa-clock text-red-600 mr-2"></i>
            Perjalanan Sejarah Desa Mekarjaya
          </h3>

          <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-8 md:left-1/2 transform md:-translate-x-1/2 w-1 h-full bg-red-200"></div>

            <!-- Timeline Items -->
            <div class="space-y-8">
              <!-- 1920 -->
              <div class="relative flex items-center justify-start md:justify-between">
                <div class="w-full md:w-5/12 md:text-right md:pr-8">
                  <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-red-600 mb-2">1920</h4>
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Awal Terbentuknya Desa</h5>
                    <p class="text-gray-600">
                      Desa Mekarjaya mulai terbentuk dari pemukiman kecil yang didirikan oleh
                      sekelompok masyarakat yang membuka lahan pertanian di wilayah ini.
                    </p>
                  </div>
                </div>
                <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white"></div>
                <div class="hidden md:block w-5/12"></div>
              </div>

              <!-- 1945 -->
              <div class="relative flex items-center justify-start md:justify-between">
                <div class="hidden md:block w-5/12"></div>
                <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white"></div>
                <div class="w-full md:w-5/12 md:pl-8 ml-12 md:ml-0">
                  <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-red-600 mb-2">1945</h4>
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Era Kemerdekaan</h5>
                    <p class="text-gray-600">
                      Setelah Indonesia merdeka, Desa Mekarjaya resmi menjadi bagian dari
                      wilayah Republik Indonesia dengan kepala desa pertama yaitu Bapak Rd. Soeprapto.
                    </p>
                  </div>
                </div>
              </div>

              <!-- 1975 -->
              <div class="relative flex items-center justify-start md:justify-between">
                <div class="w-full md:w-5/12 md:text-right md:pr-8">
                  <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-red-600 mb-2">1975</h4>
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Pembangunan Infrastruktur</h5>
                    <p class="text-gray-600">
                      Dimulainya pembangunan infrastruktur besar-besaran seperti jalan desa,
                      irigasi, dan fasilitas umum lainnya yang mendukung kemajuan desa.
                    </p>
                  </div>
                </div>
                <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white"></div>
                <div class="hidden md:block w-5/12"></div>
              </div>

              <!-- 1998 -->
              <div class="relative flex items-center justify-start md:justify-between">
                <div class="hidden md:block w-5/12"></div>
                <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white"></div>
                <div class="w-full md:w-5/12 md:pl-8 ml-12 md:ml-0">
                  <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-red-600 mb-2">1998</h4>
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Era Reformasi</h5>
                    <p class="text-gray-600">
                      Memasuki era reformasi, sistem pemerintahan desa mengalami perubahan
                      dengan pemilihan kepala desa secara langsung oleh masyarakat.
                    </p>
                  </div>
                </div>
              </div>

              <!-- 2010 -->
              <div class="relative flex items-center justify-start md:justify-between">
                <div class="w-full md:w-5/12 md:text-right md:pr-8">
                  <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-red-600 mb-2">2010</h4>
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Modernisasi Desa</h5>
                    <p class="text-gray-600">
                      Desa Mekarjaya mulai menerapkan sistem administrasi digital dan
                      mengembangkan potensi wisata serta UMKM untuk meningkatkan ekonomi desa.
                    </p>
                  </div>
                </div>
                <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white"></div>
                <div class="hidden md:block w-5/12"></div>
              </div>

              <!-- Present -->
              <div class="relative flex items-center justify-start md:justify-between">
                <div class="hidden md:block w-5/12"></div>
                <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-green-600 rounded-full border-4 border-white animate-pulse"></div>
                <div class="w-full md:w-5/12 md:pl-8 ml-12 md:ml-0">
                  <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-lg shadow-lg border-2 border-red-300">
                    <h4 class="text-xl font-bold text-red-600 mb-2">Sekarang</h4>
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Desa Digital & Mandiri</h5>
                    <p class="text-gray-700">
                      Desa Mekarjaya terus berkembang menjadi desa digital yang mandiri dengan
                      berbagai inovasi dalam pelayanan publik dan pemberdayaan masyarakat.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Historical Leaders -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fas fa-user-tie text-red-600 mr-2"></i>
            Kepala Desa dari Masa ke Masa
          </h3>

          <div class="overflow-x-auto">
            <table class="w-full table-auto">
              <thead>
                <tr class="bg-red-600 text-white">
                  <th class="px-4 py-3 text-left">No</th>
                  <th class="px-4 py-3 text-left">Nama</th>
                  <th class="px-4 py-3 text-left">Periode</th>
                  <th class="px-4 py-3 text-left">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3">1</td>
                  <td class="px-4 py-3 font-semibold">Rd. Soeprapto</td>
                  <td class="px-4 py-3">1945 - 1960</td>
                  <td class="px-4 py-3">Kepala Desa Pertama</td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3">2</td>
                  <td class="px-4 py-3 font-semibold">H. Ahmad Dahlan</td>
                  <td class="px-4 py-3">1960 - 1975</td>
                  <td class="px-4 py-3">Masa Pembangunan Awal</td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3">3</td>
                  <td class="px-4 py-3 font-semibold">Drs. Bambang Sutrisno</td>
                  <td class="px-4 py-3">1975 - 1990</td>
                  <td class="px-4 py-3">Pembangunan Infrastruktur</td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3">4</td>
                  <td class="px-4 py-3 font-semibold">H. Mulyadi, S.Sos</td>
                  <td class="px-4 py-3">1990 - 2005</td>
                  <td class="px-4 py-3">Era Reformasi</td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3">5</td>
                  <td class="px-4 py-3 font-semibold">Ir. Siti Nurjanah</td>
                  <td class="px-4 py-3">2005 - 2015</td>
                  <td class="px-4 py-3">Modernisasi Desa</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">6</td>
                  <td class="px-4 py-3 font-semibold">Dr. H. Ahmad Fauzi, M.Si</td>
                  <td class="px-4 py-3">2015 - Sekarang</td>
                  <td class="px-4 py-3">Desa Digital</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Cultural Heritage -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
          <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">
              <i class="fas fa-landmark text-red-600 mr-2"></i>
              Warisan Budaya
            </h3>
            <ul class="space-y-3">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                <div>
                  <strong>Tari Topeng Betawi</strong> - Tarian tradisional yang masih dilestarikan
                </div>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                <div>
                  <strong>Pencak Silat</strong> - Seni bela diri tradisional
                </div>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                <div>
                  <strong>Wayang Golek</strong> - Pertunjukan wayang kulit tradisional
                </div>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                <div>
                  <strong>Gamelan</strong> - Musik tradisional Jawa
                </div>
              </li>
            </ul>
          </div>

          <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">
              <i class="fas fa-monument text-red-600 mr-2"></i>
              Situs Bersejarah
            </h3>
            <ul class="space-y-3">
              <li class="flex items-start">
                <i class="fas fa-map-marker-alt text-red-500 mt-1 mr-2"></i>
                <div>
                  <strong>Masjid Al-Ikhlas</strong> - Dibangun tahun 1925
                </div>
              </li>
              <li class="flex items-start">
                <i class="fas fa-map-marker-alt text-red-500 mt-1 mr-2"></i>
                <div>
                  <strong>Sumur Tua Desa</strong> - Sumber air sejak 1920
                </div>
              </li>
              <li class="flex items-start">
                <i class="fas fa-map-marker-alt text-red-500 mt-1 mr-2"></i>
                <div>
                  <strong>Pohon Beringin Tua</strong> - Usia lebih dari 200 tahun
                </div>
              </li>
              <li class="flex items-start">
                <i class="fas fa-map-marker-alt text-red-500 mt-1 mr-2"></i>
                <div>
                  <strong>Balai Desa Lama</strong> - Bangunan bersejarah tahun 1950
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- Gallery -->
        <div class="bg-gray-100 rounded-lg p-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <i class="fas fa-images text-red-600 mr-2"></i>
            Galeri Foto Bersejarah
          </h3>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="relative group cursor-pointer">
              <img src="https://via.placeholder.com/300x300" alt="Foto Sejarah 1"
                class="w-full h-full object-cover rounded-lg shadow hover:shadow-lg transition">
              <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 rounded-lg transition flex items-center justify-center">
                <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100"></i>
              </div>
            </div>
            <div class="relative group cursor-pointer">
              <img src="https://via.placeholder.com/300x300" alt="Foto Sejarah 2"
                class="w-full h-full object-cover rounded-lg shadow hover:shadow-lg transition">
              <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 rounded-lg transition flex items-center justify-center">
                <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100"></i>
              </div>
            </div>
            <div class="relative group cursor-pointer">
              <img src="https://via.placeholder.com/300x300" alt="Foto Sejarah 3"
                class="w-full h-full object-cover rounded-lg shadow hover:shadow-lg transition">
              <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 rounded-lg transition flex items-center justify-center">
                <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100"></i>
              </div>
            </div>
            <div class="relative group cursor-pointer">
              <img src="https://via.placeholder.com/300x300" alt="Foto Sejarah 4"
                class="w-full h-full object-cover rounded-lg shadow hover:shadow-lg transition">
              <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 rounded-lg transition flex items-center justify-center">
                <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100"></i>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer (Same as index.html) -->
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
            <li><a href="sejarah.html" class="text-gray-400 hover:text-white transition">Sejarah Desa</a></li>
            <li><a href="visi-misi.html" class="text-gray-400 hover:text-white transition">Visi & Misi</a></li>
            <li><a href="struktur.html" class="text-gray-400 hover:text-white transition">Struktur Organisasi</a></li>
            <li><a href="index.html#berita" class="text-gray-400 hover:text-white transition">Berita</a></li>
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
          <h4 class="text-lg font-semibold mb-4">Kontak</h4>
          <p class="text-gray-400 mb-2">
            <i class="fas fa-phone mr-2"></i> (021) 1234-5678
          </p>
          <p class="text-gray-400 mb-2">
            <i class="fas fa-envelope mr-2"></i> info@desamekarjaya.go.id
          </p>
          <div class="flex space-x-3 mt-4">
            <a href="#" class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="bg-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-700 transition">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-8 pt-8 text-center">
        <p class="text-gray-400">
          © 2024 Desa Mekarjaya. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="back-to-top" class="fixed bottom-8 right-8 bg-red-600 text-white w-12 h-12 rounded-full shadow-lg hidden hover:bg-red-700 transition">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- JavaScript -->
  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>