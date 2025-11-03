<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi & Misi - Desa Mekarjaya</title>

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
              <a href="sejarah.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Sejarah Desa</a>
              <a href="visi-misi.html" class="block px-4 py-2 text-white bg-red-600">Visi & Misi</a>
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
        <a href="sejarah.html" class="block px-8 py-1 text-gray-600 hover:text-red-600">Sejarah Desa</a>
        <a href="visi-misi.html" class="block px-8 py-1 text-red-600 font-semibold">Visi & Misi</a>
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
      <h2 class="text-3xl font-bold text-white mb-2">Visi & Misi</h2>
      <nav class="text-white/90">
        <a href="index.html" class="hover:text-white">Beranda</a>
        <span class="mx-2">/</span>
        <a href="#" class="hover:text-white">Profil</a>
        <span class="mx-2">/</span>
        <span>Visi & Misi</span>
      </nav>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">

        <!-- Vision Section -->
        <div class="bg-white rounded-lg shadow-xl mb-12 overflow-hidden">
          <div class="bg-gradient-to-r from-red-600 to-red-700 p-8 text-white">
            <div class="flex items-center justify-center mb-4">
              <i class="fas fa-eye text-5xl"></i>
            </div>
            <h3 class="text-3xl font-bold text-center mb-2">VISI</h3>
            <p class="text-center text-white/90">Desa Mekarjaya Tahun 2020-2026</p>
          </div>
          <div class="p-8">
            <blockquote class="text-2xl md:text-3xl font-bold text-center text-gray-800 leading-relaxed italic">
              "Terwujudnya Desa Mekarjaya yang Maju, Mandiri, dan Sejahtera Berbasis Teknologi Digital
              dengan Tetap Menjaga Kelestarian Lingkungan dan Nilai-Nilai Budaya Lokal"
            </blockquote>

            <div class="mt-8 grid md:grid-cols-3 gap-6">
              <div class="text-center">
                <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                  <i class="fas fa-chart-line text-3xl text-red-600"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">MAJU</h4>
                <p class="text-gray-600 text-sm">Pembangunan yang berkelanjutan di semua sektor</p>
              </div>
              <div class="text-center">
                <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                  <i class="fas fa-hands-helping text-3xl text-green-600"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">MANDIRI</h4>
                <p class="text-gray-600 text-sm">Kemandirian ekonomi dan pemberdayaan masyarakat</p>
              </div>
              <div class="text-center">
                <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                  <i class="fas fa-heart text-3xl text-blue-600"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">SEJAHTERA</h4>
                <p class="text-gray-600 text-sm">Kesejahteraan lahir dan batin untuk seluruh warga</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Mission Section -->
        <div class="bg-white rounded-lg shadow-xl mb-12 overflow-hidden">
          <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8 text-white">
            <div class="flex items-center justify-center mb-4">
              <i class="fas fa-rocket text-5xl"></i>
            </div>
            <h3 class="text-3xl font-bold text-center mb-2">MISI</h3>
            <p class="text-center text-white/90">Langkah Strategis Mewujudkan Visi</p>
          </div>
          <div class="p-8">
            <div class="space-y-6">
              <div class="flex items-start border-l-4 border-red-600 pl-6 hover:bg-gray-50 py-4 transition">
                <div class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                  <span class="font-bold">1</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-800 mb-2">Meningkatkan Kualitas Pelayanan Publik</h4>
                  <p class="text-gray-600">
                    Mengoptimalkan pelayanan administrasi kependudukan berbasis digital yang cepat,
                    transparan, dan akuntabel untuk memberikan kemudahan kepada seluruh warga desa.
                  </p>
                </div>
              </div>

              <div class="flex items-start border-l-4 border-blue-600 pl-6 hover:bg-gray-50 py-4 transition">
                <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                  <span class="font-bold">2</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-800 mb-2">Membangun Infrastruktur yang Berkualitas</h4>
                  <p class="text-gray-600">
                    Melaksanakan pembangunan infrastruktur dasar seperti jalan, jembatan, irigasi,
                    dan fasilitas umum lainnya yang mendukung aktivitas ekonomi dan sosial masyarakat.
                  </p>
                </div>
              </div>

              <div class="flex items-start border-l-4 border-green-600 pl-6 hover:bg-gray-50 py-4 transition">
                <div class="bg-green-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                  <span class="font-bold">3</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-800 mb-2">Mengembangkan Ekonomi Kerakyatan</h4>
                  <p class="text-gray-600">
                    Mendorong pertumbuhan UMKM, koperasi, dan industri kreatif lokal melalui
                    pelatihan, pendampingan, dan akses permodalan untuk meningkatkan pendapatan masyarakat.
                  </p>
                </div>
              </div>

              <div class="flex items-start border-l-4 border-yellow-600 pl-6 hover:bg-gray-50 py-4 transition">
                <div class="bg-yellow-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                  <span class="font-bold">4</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-800 mb-2">Meningkatkan Kualitas Pendidikan dan Kesehatan</h4>
                  <p class="text-gray-600">
                    Menyediakan akses pendidikan berkualitas dan layanan kesehatan yang terjangkau
                    untuk semua warga, serta mengembangkan program beasiswa dan jaminan kesehatan desa.
                  </p>
                </div>
              </div>

              <div class="flex items-start border-l-4 border-purple-600 pl-6 hover:bg-gray-50 py-4 transition">
                <div class="bg-purple-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                  <span class="font-bold">5</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-800 mb-2">Melestarikan Lingkungan dan Budaya</h4>
                  <p class="text-gray-600">
                    Menjaga kelestarian lingkungan hidup melalui program penghijauan, pengelolaan sampah,
                    dan pelestarian nilai-nilai budaya lokal sebagai identitas desa.
                  </p>
                </div>
              </div>

              <div class="flex items-start border-l-4 border-pink-600 pl-6 hover:bg-gray-50 py-4 transition">
                <div class="bg-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                  <span class="font-bold">6</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-800 mb-2">Mewujudkan Tata Kelola Pemerintahan yang Baik</h4>
                  <p class="text-gray-600">
                    Menerapkan prinsip-prinsip good governance dengan transparansi, akuntabilitas,
                    partisipasi, dan supremasi hukum dalam penyelenggaraan pemerintahan desa.
                  </p>
                </div>
              </div>

              <div class="flex items-start border-l-4 border-indigo-600 pl-6 hover:bg-gray-50 py-4 transition">
                <div class="bg-indigo-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                  <span class="font-bold">7</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-800 mb-2">Mengembangkan Potensi Wisata Desa</h4>
                  <p class="text-gray-600">
                    Menggali dan mengembangkan potensi wisata alam, wisata budaya, dan agrowisata
                    sebagai sumber pendapatan alternatif desa dan masyarakat.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Strategic Programs -->
        <div class="bg-white rounded-lg shadow-xl mb-12 p-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <i class="fas fa-tasks text-red-600 mr-2"></i>
            Program Strategis
          </h3>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6 hover:shadow-lg transition">
              <i class="fas fa-laptop text-3xl text-red-600 mb-3"></i>
              <h4 class="font-bold text-gray-800 mb-2">Desa Digital</h4>
              <ul class="text-gray-600 text-sm space-y-1">
                <li>• Sistem informasi desa online</li>
                <li>• E-government services</li>
                <li>• WiFi gratis di area publik</li>
              </ul>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 hover:shadow-lg transition">
              <i class="fas fa-seedling text-3xl text-green-600 mb-3"></i>
              <h4 class="font-bold text-gray-800 mb-2">Desa Hijau</h4>
              <ul class="text-gray-600 text-sm space-y-1">
                <li>• Bank sampah desa</li>
                <li>• Urban farming</li>
                <li>• Energi terbarukan</li>
              </ul>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 hover:shadow-lg transition">
              <i class="fas fa-graduation-cap text-3xl text-blue-600 mb-3"></i>
              <h4 class="font-bold text-gray-800 mb-2">Desa Cerdas</h4>
              <ul class="text-gray-600 text-sm space-y-1">
                <li>• Perpustakaan digital</li>
                <li>• Beasiswa pendidikan</li>
                <li>• Pelatihan keterampilan</li>
              </ul>
            </div>

            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-6 hover:shadow-lg transition">
              <i class="fas fa-heartbeat text-3xl text-yellow-600 mb-3"></i>
              <h4 class="font-bold text-gray-800 mb-2">Desa Sehat</h4>
              <ul class="text-gray-600 text-sm space-y-1">
                <li>• Posyandu terintegrasi</li>
                <li>• Ambulance desa</li>
                <li>• Program gizi keluarga</li>
              </ul>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6 hover:shadow-lg transition">
              <i class="fas fa-store text-3xl text-purple-600 mb-3"></i>
              <h4 class="font-bold text-gray-800 mb-2">Desa Produktif</h4>
              <ul class="text-gray-600 text-sm space-y-1">
                <li>• BUMDes aktif</li>
                <li>• Pasar digital desa</li>
                <li>• Inkubator UMKM</li>
              </ul>
            </div>

            <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6 hover:shadow-lg transition">
              <i class="fas fa-users text-3xl text-pink-600 mb-3"></i>
              <h4 class="font-bold text-gray-800 mb-2">Desa Berbudaya</h4>
              <ul class="text-gray-600 text-sm space-y-1">
                <li>• Festival budaya tahunan</li>
                <li>• Sanggar seni desa</li>
                <li>• Pelestarian tradisi lokal</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Values -->
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-8 mb-12">
          <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <i class="fas fa-handshake text-red-600 mr-2"></i>
            Nilai-Nilai yang Kami Junjung
          </h3>

          <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="text-center">
              <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                <i class="fas fa-balance-scale text-2xl text-red-600"></i>
              </div>
              <h5 class="font-bold text-gray-800">Integritas</h5>
              <p class="text-xs text-gray-600 mt-1">Jujur dan bertanggung jawab</p>
            </div>

            <div class="text-center">
              <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                <i class="fas fa-eye text-2xl text-blue-600"></i>
              </div>
              <h5 class="font-bold text-gray-800">Transparansi</h5>
              <p class="text-xs text-gray-600 mt-1">Terbuka dan akuntabel</p>
            </div>

            <div class="text-center">
              <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                <i class="fas fa-lightbulb text-2xl text-yellow-600"></i>
              </div>
              <h5 class="font-bold text-gray-800">Inovasi</h5>
              <p class="text-xs text-gray-600 mt-1">Kreatif dan solutif</p>
            </div>

            <div class="text-center">
              <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                <i class="fas fa-hands-helping text-2xl text-green-600"></i>
              </div>
              <h5 class="font-bold text-gray-800">Gotong Royong</h5>
              <p class="text-xs text-gray-600 mt-1">Bersatu dan bekerjasama</p>
            </div>

            <div class="text-center">
              <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                <i class="fas fa-award text-2xl text-purple-600"></i>
              </div>
              <h5 class="font-bold text-gray-800">Profesional</h5>
              <p class="text-xs text-gray-600 mt-1">Kompeten dan berkualitas</p>
            </div>
          </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-lg p-8 text-white text-center">
          <h3 class="text-2xl font-bold mb-4">Mari Bersama Membangun Desa</h3>
          <p class="mb-6 text-white/90">
            Visi dan misi ini hanya dapat terwujud dengan partisipasi aktif seluruh warga desa.
            Mari bergotong royong membangun Desa Mekarjaya yang lebih baik.
          </p>
          <div class="flex flex-wrap justify-center gap-4">
            <a href="index.html#layanan" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-50 transition">
              <i class="fas fa-hand-holding-heart mr-2"></i>
              Ikut Berpartisipasi
            </a>
            <a href="index.html#kontak" class="bg-red-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-800 transition border-2 border-white">
              <i class="fas fa-comments mr-2"></i>
              Berikan Masukan
            </a>
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