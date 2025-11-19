<style>
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

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
      <div class="potensi-card bg-white rounded-3xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
        <div class="relative h-56">
          <img src="https://placehold.co/400x250.png?text=Wisata+Alam" alt="Wisata Alam" class="w-full h-full object-cover transition-transform duration-300">
          <div class="overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <a href="#" class="bg-white text-red-600 px-5 py-2 rounded-2xl font-semibold text-sm hover:bg-red-50 transition">
              Jelajahi Wisata
            </a>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0">
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

      <div class="potensi-card bg-white rounded-3xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
        <div class="relative h-56">
          <img src="https://placehold.co/400x250.png?text=Pertanian" alt="Pertanian" class="w-full h-full object-cover transition-transform duration-300">
          <div class="overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <a href="#" class="bg-white text-red-600 px-5 py-2 rounded-2xl font-semibold text-sm hover:bg-red-50 transition">
              Lihat Komoditas
            </a>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0">
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

      <div class="potensi-card bg-white rounded-3xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
        <div class="relative h-56">
          <img src="https://placehold.co/400x250.png?text=UMKM" alt="UMKM" class="w-full h-full object-cover transition-transform duration-300">
          <div class="overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <a href="#" class="bg-white text-red-600 px-5 py-2 rounded-2xl font-semibold text-sm hover:bg-red-50 transition">
              Lihat Produk
            </a>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0">
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

    <div class="bg-gradient-to-br from-red-600 via-red-700 to-orange-700 rounded-3xl p-12 text-white text-center shadow-2xl relative overflow-hidden">
      <div class="absolute inset-0 bg-black/10"></div>
      <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
      <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
      <div class="relative z-10">
        <div class="w-20 h-20 bg-white/20 rounded-3xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
          <i class="fas fa-handshake text-5xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold mb-4">Mari Berkolaborasi!</h3>
        <p class="mb-8 text-white/90 max-w-2xl mx-auto text-lg">
          Kami percaya pembangunan desa akan lebih cepat dengan kemitraan.
          Pemerintah Desa Motoling Dua membuka peluang bagi investor, akademisi, dan siapa saja yang ingin
          berkolaborasi memajukan potensi desa.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ route('home') }}#kontak" class="inline-flex items-center gap-2 bg-white text-red-600 px-8 py-4 rounded-2xl font-bold hover:bg-red-50 transition-all hover:scale-105 shadow-xl">
            <i class="fas fa-phone-alt mr-2"></i>
            Hubungi Kami
          </a>
          <a href="/infografis/apbdes" class="inline-flex items-center gap-2 bg-red-700 text-white px-8 py-4 rounded-2xl font-bold hover:bg-red-800 transition-all hover:scale-105 border-2 border-white shadow-xl">
            <i class="fas fa-chart-pie mr-2"></i>
            Lihat Data APBDes
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
