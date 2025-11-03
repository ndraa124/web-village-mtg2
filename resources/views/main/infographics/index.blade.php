<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infografis Penduduk - Desa Mekarjaya</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('main/css/styles.css') }}">
</head>

<body class="bg-gray-50">

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

        <div class="hidden lg:flex items-center space-x-6">
          <a href="index.html" class="text-gray-700 hover:text-red-600 transition">Beranda</a>
          <div class="relative group">
            <button class="text-gray-700 hover:text-red-600 transition flex items-center">
              Profil <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
              <a href="sejarah.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Sejarah Desa</a>
              <a href="visi-misi.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Visi & Misi</a>
              <a href="struktur.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Struktur Organisasi</a>
            </div>
          </div>
          <a href="index.html#layanan" class="text-gray-700 hover:text-red-600 transition">Layanan</a>
          <a href="index.html#berita" class="text-gray-700 hover:text-red-600 transition">Berita</a>
          <a href="index.html#potensi" class="text-gray-700 hover:text-red-600 transition">Potensi</a>
          <a href="infografis.html" class="text-red-600 font-semibold transition">Infografis</a>
          <a href="index.html#kontak" class="text-gray-700 hover:text-red-600 transition">Kontak</a>
        </div>

        <button id="mobile-menu-btn" class="lg:hidden text-gray-700">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </div>
    </div>

    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t">
      <a href="index.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Beranda</a>
      <div class="px-4 py-2">
        <p class="font-semibold text-gray-700 mb-2">Profil</p>
        <a href="sejarah.html" class="block px-8 py-1 text-gray-600 hover:text-red-600">Sejarah Desa</a>
        <a href="visi-misi.html" class="block px-8 py-1 text-gray-600 hover:text-red-600">Visi & Misi</a>
        <a href="struktur.html" class="block px-8 py-1 text-gray-600 hover:text-red-600">Struktur Organisasi</a>
      </div>
      <a href="index.html#layanan" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Layanan</a>
      <a href="index.html#berita" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Berita</a>
      <a href="index.html#potensi" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Potensi</a>
      <a href="infografis.html" class="block px-4 py-2 text-red-600 font-semibold bg-red-50">Infografis</a>
      <a href="index.html#kontak" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Kontak</a>
    </div>
  </nav>

  <section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-white mb-2">Infografis Penduduk</h2>
      <nav class="text-white/90">
        <a href="index.html" class="hover:text-white">Beranda</a>
        <span class="mx-2">/</span>
        <span>Infografis</span>
      </nav>
    </div>
  </section>

  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">

        <div class="mb-12 text-center">
          <h3 class="text-3xl font-bold text-gray-800">Demografi Penduduk</h3>
          <p class="text-gray-600 mt-2">
            Informasi lengkap mengenai karakteristik demografi penduduk Desa Mekarjaya.
          </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
          <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6 text-center hover:shadow-lg transition">
            <i class="fas fa-users text-3xl text-red-600 mb-3"></i>
            <h3 class="text-3xl font-bold text-gray-800">1.678</h3>
            <p class="text-gray-600 mt-2">Total Penduduk</p>
          </div>

          <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 text-center hover:shadow-lg transition">
            <i class="fas fa-male text-3xl text-blue-600 mb-3"></i>
            <h3 class="text-3xl font-bold text-gray-800">894</h3>
            <p class="text-gray-600 mt-2">Laki-Laki</p>
          </div>

          <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6 text-center hover:shadow-lg transition">
            <i class="fas fa-female text-3xl text-pink-600 mb-3"></i>
            <h3 class="text-3xl font-bold text-gray-800">780</h3>
            <p class="text-gray-600 mt-2">Perempuan</p>
          </div>

          <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 text-center hover:shadow-lg transition">
            <i class="fas fa-home text-3xl text-green-600 mb-3"></i>
            <h3 class="text-3xl font-bold text-gray-800">522</h3>
            <p class="text-gray-600 mt-2">Kepala Keluarga</p>
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              <i class="fas fa-chart-bar text-red-600 mr-2"></i>
              Berdasarkan Kelompok Umur
            </h3>
            <p class="text-gray-700 leading-relaxed mb-4">
              Untuk jenis kelamin laki-laki, kelompok umur 20-24 adalah kelompok umur tertinggi (75 orang).
              Sedangkan, kelompok umur 80-84 adalah yang terendah (6 orang).
            </p>
            <p class="text-gray-700 leading-relaxed mb-4">
              Untuk jenis kelamin perempuan, kelompok umur 20-24 adalah kelompok umur tertinggi (79 orang).
              Sedangkan, kelompok umur 0-4 adalah yang terendah (10 orang).
            </p>
            <img src="https://via.placeholder.com/400x250" alt="Grafik Kelompok Umur" class="w-full h-auto rounded-md mt-4">
          </div>

          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              <i class="fas fa-pray text-red-600 mr-2"></i>
              Berdasarkan Agama
            </h3>
            <div class="overflow-x-auto">
              <table class="w-full table-auto">
                <thead>
                  <tr class="bg-red-600 text-white">
                    <th class="px-4 py-3 text-left">Agama</th>
                    <th class="px-4 py-3 text-left">Jumlah Jiwa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Kristen</td>
                    <td class="px-4 py-3">1.656</td>
                  </tr>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Islam</td>
                    <td class="px-4 py-3">17</td>
                  </tr>
                  <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Katolik</td>
                    <td class="px-4 py-3">5</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <img src="https://via.placeholder.com/400x200" alt="Grafik Agama" class="w-full h-auto rounded-md mt-4">
          </div>

          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              <i class="fas fa-briefcase text-red-600 mr-2"></i>
              Berdasarkan Pekerjaan
            </h3>
            <div class="overflow-x-auto">
              <table class="w-full table-auto">
                <thead>
                  <tr class="bg-red-600 text-white">
                    <th class="px-4 py-3 text-left">Jenis Pekerjaan</th>
                    <th class="px-4 py-3 text-left">Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Mengurus Rumah Tangga</td>
                    <td class="px-4 py-3">383</td>
                  </tr>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Pelajar/Mahasiswa</td>
                    <td class="px-4 py-3">344</td>
                  </tr>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Belum/Tidak Bekerja</td>
                    <td class="px-4 py-3">318</td>
                  </tr>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Wiraswasta</td>
                    <td class="px-4 py-3">255</td>
                  </tr>
                  <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Petani/Pekebun</td>
                    <td class="px-4 py-3">208</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              <i class="fas fa-ring text-red-600 mr-2"></i>
              Berdasarkan Perkawinan
            </h3>
            <div class="overflow-x-auto">
              <table class="w-full table-auto">
                <thead>
                  <tr class="bg-red-600 text-white">
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-left">Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Belum Kawin</td>
                    <td class="px-4 py-3">712</td>
                  </tr>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Kawin</td>
                    <td class="px-4 py-3">625</td>
                  </tr>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Kawin Tercatat</td>
                    <td class="px-4 py-3">231</td>
                  </tr>
                  <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-semibold">Cerai Mati</td>
                    <td class="px-4 py-3">72</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
          <h4 class="text-xl font-bold text-yellow-800 mb-2">
            <i class="fas fa-info-circle mr-2"></i>
            Catatan
          </h4>
          <p class="text-yellow-700">
            Data berdasarkan <strong>Pendidikan</strong> dan <strong>Wajib Pilih</strong> saat ini belum tersedia dan akan diperbarui secepatnya.
          </p>
        </div>

      </div>
    </div>
  </section>

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
            <a href="#"
              class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#"
              class="bg-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-700 transition">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#"
              class="bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
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

  <button id="back-to-top"
    class="fixed bottom-8 right-8 bg-red-600 text-white w-12 h-12 rounded-full shadow-lg hidden hover:bg-red-700 transition">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>