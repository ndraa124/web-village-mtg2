<style>
  .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .potensi-card .overlay {
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .potensi-card:hover .overlay {
    opacity: 1;
  }

  .potensi-card:hover img {
    transform: scale(1.05);
  }
</style>

<section class="py-16">
  <div class="container mx-auto px-4 text-center max-w-3xl">
    <i class="fas fa-gem text-5xl text-red-600 mb-4"></i>
    <h3 class="text-3xl font-bold text-gray-800 mb-4">Temukan Kekayaan Desa Motoling Dua</h3>
    <p class="text-gray-600 text-lg">
      Desa kami diberkahi dengan sumber daya alam yang melimpah, tanah yang subur, serta semangat gotong royong warga yang kuat.
      Jelajahi berbagai potensi yang kami miliki, dari wisata alam hingga kreativitas usaha lokal.
    </p>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <div class="potensi-card bg-white rounded-lg shadow-lg overflow-hidden card-hover">
        <div class="relative h-56">
          <img src="https://via.placeholder.com/400x250.png?text=Wisata+Alam" alt="Wisata Alam" class="w-full h-full object-cover transition-transform duration-300">
          <div class="overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <a href="#" class="bg-white text-red-600 px-5 py-2 rounded-lg font-semibold text-sm hover:bg-red-50 transition">
              Jelajahi Wisata
            </a>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <i class="fas fa-mountain text-2xl"></i>
            </div>
            <h4 class="text-xl font-bold text-gray-800 ml-4">Wisata Alam</h4>
          </div>
          <p class="text-gray-600">
            Dikelilingi perbukitan hijau, desa kami menyimpan potensi wisata alam yang menakjubkan.
            Mulai dari air terjun tersembunyi, pemandian alami, hingga jalur trekking dengan pemandangan memukau.
          </p>
        </div>
      </div>

      <div class="potensi-card bg-white rounded-lg shadow-lg overflow-hidden card-hover">
        <div class="relative h-56">
          <img src="https://via.placeholder.com/400x250.png?text=Pertanian" alt="Pertanian" class="w-full h-full object-cover transition-transform duration-300">
          <div class="overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <a href="#" class="bg-white text-red-600 px-5 py-2 rounded-lg font-semibold text-sm hover:bg-red-50 transition">
              Lihat Komoditas
            </a>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <i class="fas fa-seedling text-2xl"></i>
            </div>
            <h4 class="text-xl font-bold text-gray-800 ml-4">Pertanian & Perkebunan</h4>
          </div>
          <p class="text-gray-600">
            Tanah subur Motoling Dua ideal untuk berbagai komoditas. Kami adalah penghasil cengkeh, kopra,
            dan berbagai tanaman pangan. Kami terbuka untuk kemitraan dalam pengembangan pertanian modern.
          </p>
        </div>
      </div>

      <div class="potensi-card bg-white rounded-lg shadow-lg overflow-hidden card-hover">
        <div class="relative h-56">
          <img src="https://via.placeholder.com/400x250.png?text=UMKM" alt="UMKM" class="w-full h-full object-cover transition-transform duration-300">
          <div class="overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <a href="#" class="bg-white text-red-600 px-5 py-2 rounded-lg font-semibold text-sm hover:bg-red-50 transition">
              Lihat Produk
            </a>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <i class="fas fa-store text-2xl"></i>
            </div>
            <h4 class="text-xl font-bold text-gray-800 ml-4">UMKM & Kerajinan</h4>
          </div>
          <p class="text-gray-600">
            Warga kami memiliki kreativitas tinggi dalam mengolah hasil bumi. Dari kuliner khas seperti
            kue-kue tradisional, hingga kerajinan tangan dari tempurung kelapa yang unik dan bernilai jual.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-lg p-12 text-white text-center shadow-2xl">
      <i class="fas fa-handshake text-5xl mb-4 opacity-70"></i>
      <h3 class="text-3xl font-bold mb-4">Mari Berkolaborasi!</h3>
      <p class="mb-8 text-white/90 max-w-2xl mx-auto">
        Kami percaya pembangunan desa akan lebih cepat dengan kemitraan.
        Pemerintah Desa Motoling Dua membuka peluang bagi investor, akademisi, dan siapa saja yang ingin
        berkolaborasi memajukan potensi desa.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="index.html#kontak" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-50 transition">
          <i class="fas fa-phone-alt mr-2"></i>
          Hubungi Kami
        </a>
        <a href="/infografis/apbdes" class="bg-red-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-800 transition border-2 border-white">
          <i class="fas fa-chart-pie mr-2"></i>
          Lihat Data APBDes
        </a>
      </div>
    </div>
  </div>
</section>