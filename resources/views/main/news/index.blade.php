<style>
  /* Menggunakan kembali style hover dari style.css Anda */
  .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }
</style>

{{-- 1. Bagian Header Halaman --}}
<section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-white mb-2">Berita Desa</h2>
    <nav class="text-white/90">
      <a href="index.html" class="hover:text-white">Beranda</a>
      <span class="mx-2">/</span>
      <span>Berita</span>
    </nav>
  </div>
</section>

{{-- 2. Bagian Konten Utama (Grid 2 Kolom) --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

      {{-- Kolom Utama (Daftar Berita) --}}
      <div class="md:col-span-8">
        <div class="space-y-8">

          {{-- Artikel Berita 1 --}}
          <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row card-hover">
            <div class="md:w-1/3">
              <img src="https://via.placeholder.com/400x300.png?text=Berita+1" alt="Gambar Berita 1" class="h-48 w-full md:h-full object-cover">
            </div>
            <div class="md:w-2/3 p-6">
              <div class="flex items-center text-sm text-gray-500 mb-3 space-x-4">
                <span class="flex items-center">
                  <i class="fas fa-calendar-alt mr-2 text-red-600"></i>
                  5 November 2025
                </span>
                <span class="flex items-center">
                  <i class="fas fa-folder-open mr-2 text-red-600"></i>
                  Pemerintahan
                </span>
              </div>
              <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-red-600 transition">
                <a href="#">TUPOKSI HUKUM TUA</a>
              </h3>
              <p class="text-gray-600 mb-4">
                TUGAS POKOK DAN FUNGSI HUKUM TUA. Menyelenggarakan urusan pemerintahan, pembangunan, dan kemasyarakatan...
                </TUGAS>
                <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">
                  Baca Selengkapnya →
                </a>
            </div>
          </article>

          {{-- Artikel Berita 2 --}}
          <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row card-hover">
            <div class="md:w-1/3">
              <img src="https://via.placeholder.com/400x300.png?text=Berita+2" alt="Gambar Berita 2" class="h-48 w-full md:h-full object-cover">
            </div>
            <div class="md:w-2/3 p-6">
              <div class="flex items-center text-sm text-gray-500 mb-3 space-x-4">
                <span class="flex items-center">
                  <i class="fas fa-calendar-alt mr-2 text-red-600"></i>
                  27 Oktober 2025
                </span>
                <span class="flex items-center">
                  <i class="fas fa-folder-open mr-2 text-red-600"></i>
                  Layanan
                </span>
              </div>
              <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-red-600 transition">
                <a href="#">SURVEI PRILAKU MASYARAKAT TENTANG GRATIFIKASI</a>
              </h3>
              <p class="text-gray-600 mb-4">
                Survei kepuasan masyarakat (SKM) desa adalah pengukuran tingkat kepuasan warga terhadap kualitas pelayanan publik...
              </p>
              <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">
                Baca Selengkapnya →
              </a>
            </div>
          </article>

          {{-- Artikel Berita 3 --}}
          <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row card-hover">
            <div class="md:w-1/3">
              <img src="https://via.placeholder.com/400x300.png?text=Berita+3" alt="Gambar Berita 3" class="h-48 w-full md:h-full object-cover">
            </div>
            <div class="md:w-2/3 p-6">
              <div class="flex items-center text-sm text-gray-500 mb-3 space-x-4">
                <span class="flex items-center">
                  <i class="fas fa-calendar-alt mr-2 text-red-600"></i>
                  3 September 2025
                </span>
                <span class="flex items-center">
                  <i class="fas fa-folder-open mr-2 text-red-600"></i>
                  Kemasyarakatan
                </span>
              </div>
              <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-red-600 transition">
                <a href="#">GOTONG ROYONG MEMINDAHKAN RUMAH</a>
              </h3>
              <p class="text-gray-600 mb-4">
                Gotong royong memindahkan rumah di Motoling Dua , yang biasa disebut MAPALUS, adalah tradisi luhur...
              </p>
              <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">
                Baca Selengkapnya →
              </a>
            </div>
          </article>

          {{-- 3. Bagian Paginasi --}}
          <div class="mt-8 flex justify-between items-center">
            <a href="#" class="bg-red-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-700 transition opacity-50 cursor-not-allowed">
              <i class="fas fa-arrow-left mr-2"></i>
              Berita Baru
            </a>
            <span class="text-gray-600">
              Halaman 1 dari 5
            </span>
            <a href="#" class="bg-red-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
              Berita Lama
              <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>

        </div>
      </div>

      {{-- Kolom Sidebar --}}
      <div class="md:col-span-4">
        <div class="space-y-6 sticky top-24"> {{-- 'sticky top-24' agar sidebar tetap terlihat saat scroll --}}

          {{-- Widget: Pencarian --}}
          <div class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="text-lg font-bold text-gray-800 mb-4">
              <i class="fas fa-search text-red-600 mr-2"></i>
              Cari Berita
            </h4>
            <form class="flex">
              <input type="text" placeholder="Ketik kata kunci..." class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-red-500">
              <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-r-lg hover:bg-red-700 transition">
                <i class="fas fa-search"></i>
              </button>
            </form>
          </div>

          {{-- Widget: Kategori --}}
          <div class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="text-lg font-bold text-gray-800 mb-4">
              <i class="fas fa-folder-open text-red-600 mr-2"></i>
              Kategori
            </h4>
            <ul class="space-y-2">
              <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600 transition"><span class="hover:underline">Pemerintahan</span> <span class="bg-gray-100 px-2 rounded-full text-sm">5</span></a></li>
              <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600 transition"><span class="hover:underline">Kemasyarakatan</span> <span class="bg-gray-100 px-2 rounded-full text-sm">8</span></a></li>
              <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600 transition"><span class="hover:underline">Layanan</span> <span class="bg-gray-100 px-2 rounded-full text-sm">3</span></a></li>
              <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600 transition"><span class="hover:underline">Pembangunan</span> <span class="bg-gray-100 px-2 rounded-full text-sm">2</span></a></li>
              <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600 transition"><span class="hover:underline">Stunting</span> <span class="bg-gray-100 px-2 rounded-full text-sm">4</span></a></li>
            </ul>
          </div>

          {{-- Widget: Berita Terbaru --}}
          <div class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="text-lg font-bold text-gray-800 mb-4">
              <i class="fas fa-clock text-red-600 mr-2"></i>
              Berita Terbaru
            </h4>
            <ul class="space-y-4">
              <li class="flex items-center space-x-3">
                <img src="https://via.placeholder.com/100x100.png?text=Berita+1" alt="Gambar" class="w-16 h-16 object-cover rounded-lg">
                <div>
                  <a href="#" class="font-semibold text-gray-700 hover:text-red-600 transition text-sm">TUPOKSI HUKUM TUA</a>
                  <p class="text-xs text-gray-500">5 November 2025</p>
                </div>
              </li>
              <li class="flex items-center space-x-3">
                <img src="https://via.placeholder.com/100x100.png?text=Berita+2" alt="Gambar" class="w-16 h-16 object-cover rounded-lg">
                <div>
                  <a href="#" class="font-semibold text-gray-700 hover:text-red-600 transition text-sm">SURVEI PRILAKU MASYARAKAT</a>
                  <p class="text-xs text-gray-500">27 Oktober 2025</p>
                </div>
              </li>
              <li class="flex items-center space-x-3">
                <img src="https://via.placeholder.com/100x100.png?text=Berita+3" alt="Gambar" class="w-16 h-16 object-cover rounded-lg">
                <div>
                  <a href="#" class="font-semibold text-gray-700 hover:text-red-600 transition text-sm">GOTONG ROYONG MEMINDAHKAN RUMAH</a>
                  <p class="text-xs text-gray-500">3 September 2025</p>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>