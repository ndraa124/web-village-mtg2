<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struktur Organisasi - Desa Mekarjaya</title>

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
            <button class="text-red-600 font-semibold flex items-center">
              Profil <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
              <a href="sejarah.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Sejarah Desa</a>
              <a href="visi-misi.html" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600">Visi & Misi</a>
              <a href="struktur.html" class="block px-4 py-2 text-white bg-red-600">Struktur Organisasi</a>
            </div>
          </div>
          <a href="index.html#layanan" class="text-gray-700 hover:text-red-600 transition">Layanan</a>
          <a href="index.html#berita" class="text-gray-700 hover:text-red-600 transition">Berita</a>
          <a href="index.html#potensi" class="text-gray-700 hover:text-red-600 transition">Potensi</a>
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
        <a href="struktur.html" class="block px-8 py-1 text-red-600 font-semibold">Struktur Organisasi</a>
      </div>
      <a href="index.html#layanan" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Layanan</a>
      <a href="index.html#berita" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Berita</a>
      <a href="index.html#potensi" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Potensi</a>
      <a href="index.html#kontak" class="block px-4 py-2 text-gray-700 hover:bg-red-50">Kontak</a>
    </div>
  </nav>

  <section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-white mb-2">Struktur Organisasi</h2>
      <nav class="text-white/90">
        <a href="index.html" class="hover:text-white">Beranda</a>
        <span class="mx-2">/</span>
        <a href="#" class="hover:text-white">Profil</a>
        <span class="mx-2">/</span>
        <span>Struktur Organisasi</span>
      </nav>
    </div>
  </section>

  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">

        <div class="mb-12 text-center">
          <h3 class="text-3xl font-bold text-gray-800">Struktur Organisasi</h3>
          <p class="text-gray-600 mt-2">Pemerintahan Desa Mekarjaya</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-12">
          <img src="https://via.placeholder.com/1000x700" alt="Bagan Struktur Organisasi Desa Mekarjaya"
            class="w-full h-auto object-cover rounded-md">
          <p class="text-center text-sm text-gray-600 mt-2 italic">
            Bagan Struktur Organisasi Pemerintahan Desa Mekarjaya
          </p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
          <h3 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fas fa-users-cog text-red-600 mr-2"></i>
            Aparatur Desa
          </h3>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition">
              <img src="https://via.placeholder.com/150" alt="Foto Kepala Desa"
                class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-red-200">
              <h4 class="text-xl font-bold text-gray-800">Dr. H. Ahmad Fauzi, M.Si</h4>
              <p class="text-red-600 font-semibold">Kepala Desa</p>
            </div>

            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition">
              <img src="https://via.placeholder.com/150" alt="Foto Sekretaris Desa"
                class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-red-200">
              <h4 class="text-xl font-bold text-gray-800">Budi Santoso, S.Kom</h4>
              <p class="text-red-600 font-semibold">Sekretaris Desa</p>
            </div>

            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition">
              <img src="https://via.placeholder.com/150" alt="Foto Kaur Keuangan"
                class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-red-200">
              <h4 class="text-xl font-bold text-gray-800">Siti Aminah, S.E</h4>
              <p class="text-red-600 font-semibold">Kaur Keuangan</p>
            </div>

            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition">
              <img src="https://via.placeholder.com/150" alt="Foto Kaur Perencanaan"
                class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-red-200">
              <h4 class="text-xl font-bold text-gray-800">Agus Wijaya, S.T</h4>
              <p class="text-red-600 font-semibold">Kaur Perencanaan</p>
            </div>

            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition">
              <img src="https://via.placeholder.com/150" alt="Foto Kasi Pemerintahan"
                class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-red-200">
              <h4 class="text-xl font-bold text-gray-800">Rahmat Hidayat</h4>
              <p class="text-red-600 font-semibold">Kasi Pemerintahan</p>
            </div>

            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition">
              <img src="https://via.placeholder.com/150" alt="Foto Kasi Kesejahteraan"
                class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-red-200">
              <h4 class="text-xl font-bold text-gray-800">Dewi Lestari</h4>
              <p class="text-red-600 font-semibold">Kasi Kesejahteraan</p>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fas fa-tasks text-red-600 mr-2"></i>
            Tugas Pokok dan Fungsi (Tupoksi)
          </h3>

          <div class="space-y-6">
            <div class="border-b pb-4">
              <h4 class="text-xl font-semibold text-gray-800 mb-2">1. Kepala Desa</h4>
              <p class="text-gray-700 leading-relaxed">
                Memimpin penyelenggaraan pemerintahan desa, melaksanakan pembangunan desa,
                pembinaan kemasyarakatan desa, dan pemberdayaan masyarakat desa.
              </p>
            </div>

            <div class="border-b pb-4">
              <h4 class="text-xl font-semibold text-gray-800 mb-2">2. Sekretaris Desa</h4>
              <p class="text-gray-700 leading-relaxed">
                Membantu Kepala Desa dalam bidang administrasi pemerintahan. Meliputi tata usaha dan
                arsip, keuangan desa, dan perencanaan program.
              </p>
            </div>

            <div class="border-b pb-4">
              <h4 class="text-xl font-semibold text-gray-800 mb-2">3. Kepala Urusan (KAUR)</h4>
              <ul class="list-disc list-inside text-gray-700 leading-relaxed ml-4 space-y-2">
                <li><strong>Kaur Tata Usaha dan Umum:</strong> Melaksanakan urusan ketatausahaan, administrasi umum, dan
                  kearsipan.</li>
                <li><strong>Kaur Keuangan:</strong> Melaksanakan urusan administrasi keuangan, verifikasi, dan pelaporan
                  keuangan desa.</li>
                <li><strong>Kaur Perencanaan:</strong> Mengkoordinasikan urusan perencanaan pembangunan desa dan
                  program-program desa.</li>
              </ul>
            </div>

            <div>
              <h4 class="text-xl font-semibold text-gray-800 mb-2">4. Kepala Seksi (KASI)</h4>
              <ul class="list-disc list-inside text-gray-700 leading-relaxed ml-4 space-y-2">
                <li><strong>Kasi Pemerintahan:</strong> Melaksanakan tugas di bidang pemerintahan desa, pertanahan, dan
                  ketertiban umum.</li>
                <li><strong>Kasi Kesejahteraan:</strong> Melaksanakan tugas di bidang pembangunan, kesejahteraan sosial,
                  dan pemberdayaan masyarakat.</li>
                <li><strong>Kasi Pelayanan:</strong> Melaksanakan tugas di bidang pelayanan publik dan administrasi
                  kependudukan.</li>
              </ul>
            </div>
          </div>
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