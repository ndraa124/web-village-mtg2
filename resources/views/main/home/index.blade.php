<section class="relative h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden">
  <div class="absolute inset-0 swiper hero-background-slider">
    <div class="swiper-wrapper">

      {{-- Slide 1: Pemandangan Desa Asri --}}
      <div class="swiper-slide" style="background-image: url('/images/illustrations/pemandangan.svg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 z-10 bg-black opacity-30"></div>
      </div>

      {{-- Slide 2: Aktivitas Pertanian --}}
      <div class="swiper-slide" style="background-image: url('/images/illustrations/pertanian.svg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 z-10 bg-black opacity-30"></div>
      </div>

      {{-- Slide 3: Bangunan Publik Desa --}}
      <div class="swiper-slide" style="background-image: url('/images/illustrations/gedung.svg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 z-10 bg-black opacity-30"></div>
      </div>

    </div>
  </div>

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

      <a href="{{ route('public.infographics.index') }}" class="group relative block rounded-lg overflow-hidden shadow-lg h-42 transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">
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

      <a href="{{ route('public.infographics.apbdes') }}" class="group relative block rounded-lg overflow-hidden shadow-lg h-42 transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">
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

      <a href="{{ route('public.infographics.idm') }}" class="group relative block rounded-lg overflow-hidden shadow-lg h-42 transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">
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
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_resident ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2">Total Penduduk</p>
      </div>

      <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-male text-3xl text-blue-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_man ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2">Laki-Laki</p>
      </div>

      <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-female text-3xl text-pink-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_woman ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2">Perempuan</p>
      </div>

      <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-home text-3xl text-green-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_head_of_family ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2">Kepala Keluarga</p>
      </div>

      <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-user-clock text-3xl text-yellow-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_temporary ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2">Penduduk Sementara</p>
      </div>

      <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6 text-center hover:shadow-lg transition">
        <i class="fas fa-exchange-alt text-3xl text-purple-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_mutation ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2">Mutasi Penduduk</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
      <i class="fas fa-money-bill-wave text-red-600 mr-2"></i>
      Transparansi APB Desa {{ $apbdStats->year ?? date('Y') }}
    </h2>

    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-xl font-bold text-gray-800 mb-6">Anggaran Desa</h3>
        <div class="space-y-4">
          <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600"><i class="fas fa-arrow-down text-green-500 mr-2"></i>Pendapatan</span>
            <span class="font-bold text-green-600">Rp {{ number_format($apbdStats->income ?? 0, 0, ',', '.') }}</span>
          </div>
          <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600"><i class="fas fa-arrow-up text-red-500 mr-2"></i>Belanja</span>
            <span class="font-bold text-red-600">Rp {{ number_format($apbdStats->shopping ?? 0, 0, ',', '.') }}</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-gray-600"><i class="fas fa-balance-scale text-blue-500 mr-2"></i>Surplus/Defisit</span>
            <span class="font-bold text-blue-600">Rp {{ number_format($apbdStats->surplus_deficit ?? 0, 0, ',', '.') }}</span>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-xl font-bold text-gray-800 mb-6">Realisasi Pembangunan</h3>
        <div class="space-y-4">
          <div>
            <div class="flex justify-between mb-1">
              <span class="text-gray-600">Infrastruktur</span>
              <span class="text-gray-800 font-semibold">{{ $realizationStats['infrastructure'] ?? 0 }}%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div
                class="bg-red-600 h-2 rounded-full"
                style="--progress: {{ $realizationStats['infrastructure'] ?? 0 }}%; width: var(--progress);">
              </div>
            </div>
          </div>
          <div>
            <div class="flex justify-between mb-1">
              <span class="text-gray-600">Pendidikan</span>
              <span class="text-gray-800 font-semibold">{{ $realizationStats['education'] ?? 0 }}%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div
                class="bg-red-600 h-2 rounded-full"
                style="--progress: {{ $realizationStats['education'] ?? 0 }}%; width: var(--progress);">
              </div>
            </div>
          </div>
          <div>
            <div class="flex justify-between mb-1">
              <span class="text-gray-600">Kesehatan</span>
              <span class="text-gray-800 font-semibold">{{ $realizationStats['health'] ?? 0 }}%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div
                class="bg-red-600 h-2 rounded-full"
                style="--progress: {{ $realizationStats['health'] ?? 0 }}%; width: var(--progress);">
              </div>
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
      @forelse($services as $service)
      <div class="bg-gradient-to-br {{ $loop->iteration == 1 ? 'from-red-500 to-red-600' : ($loop->iteration == 2 ? 'from-blue-500 to-blue-600' : ($loop->iteration == 3 ? 'from-green-500 to-green-600' : 'from-purple-500 to-purple-600')) }} rounded-lg p-6 text-white hover:shadow-2xl transition transform hover:-translate-y-1">
        <i class="{{ $service->icon_class }} text-4xl mb-4"></i>
        <h3 class="text-xl font-bold mb-2">{{ $service->title }}</h3>
        <p class="text-sm mb-4">{{ $service->description }}</p>
        <a href="{{ $service->link ?? '#' }}" class="inline-block bg-white {{ $loop->iteration == 1 ? 'text-red-600 hover:bg-red-50' : ($loop->iteration == 2 ? 'text-blue-600 hover:bg-blue-50' : ($loop->iteration == 3 ? 'text-green-600 hover:bg-green-50' : 'text-purple-600 hover:bg-purple-50')) }} px-4 py-2 rounded-md text-sm font-semibold transition">
          Ajukan Sekarang →
        </a>
      </div>
      @empty
      <p class="text-center text-gray-500 col-span-4">Layanan belum tersedia.</p>
      @endforelse
    </div>

    <div class="text-center mt-8">
      <a href="{{ route('service.index') }}" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
        <i class="fas fa-arrow-right mr-2"></i>
        Lihat Semua Layanan
      </a>
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
      @forelse($latestNews as $news)
      <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
        <a href="{{ route('news.show', $news->slug) }}">
          <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
        </a>
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-2">
            <i class="fas fa-calendar mr-2"></i>
            <span>{{ $news->published_at->format('d F Y') }}</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2">
            <a href="{{ route('news.show', $news->slug) }}" class="hover:text-red-600 transition">{{ $news->title }}</a>
          </h3>
          <p class="text-gray-600 mb-4 line-clamp-3">{{ \Illuminate\Support\Str::limit(strip_tags($news->content), 100) }}</p>
          <a href="{{ route('news.show', $news->slug) }}" class="text-red-600 font-semibold hover:text-red-700 transition">
            Baca Selengkapnya →
          </a>
        </div>
      </article>
      @empty
      <p class="text-center text-gray-500 col-span-3">Belum ada berita untuk ditampilkan.</p>
      @endforelse
    </div>

    <div class="text-center mt-8">
      <a href="{{ route('news.index') }}" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
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
      @forelse($potentials as $potential)
      <div class="text-center">
        <div class="{{ $loop->iteration == 1 ? 'bg-red-100' : ($loop->iteration == 2 ? 'bg-green-100' : 'bg-blue-100') }} w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="{{ $potential->icon_class }} text-3xl {{ $loop->iteration == 1 ? 'text-red-600' : ($loop->iteration == 2 ? 'text-green-600' : 'text-blue-600') }}"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $potential->title }}</h3>
        <p class="text-gray-600">{{ $potential->description }}</p>
      </div>
      @empty
      <p class="text-center text-gray-500 col-span-3">Potensi desa belum ditambahkan.</p>
      @endforelse
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
      <div id="map" class="h-96 rounded-lg"
        data-latitude="{{ $village['map_latitude'] ?? '-0.0' }}"
        data-longitude="{{ $village['map_longitude'] ?? '0.0' }}"
        data-zoom="{{ $village['map_zoom'] ?? '14' }}">
      </div>
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
      @forelse($galleryImages as $image)
      <div class="gallery-item relative overflow-hidden rounded-lg cursor-pointer">
        <img src="{{ $image->image_url }}" alt="{{ $image->caption ?? 'Galeri' }}" class="w-full h-full object-cover hover:scale-110 transition duration-300">
        <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
          <i class="fas fa-search-plus text-white text-2xl opacity-0 hover:opacity-100"></i>
        </div>
      </div>
      @empty
      <p class="text-center text-gray-500 col-span-4">Belum ada galeri untuk ditampilkan.</p>
      @endforelse
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
              <p class="text-gray-600">{{ $village['address'] ?? 'Alamat belum diatur.' }}</p>
            </div>
          </div>

          <div class="flex items-start">
            <i class="fas fa-phone text-red-600 mt-1 mr-3"></i>
            <div>
              <p class="font-semibold text-gray-800">Telepon</p>
              <p class="text-gray-600">{{ $village['phone'] ?? 'Telepon belum diatur.' }}</p>
            </div>
          </div>

          <div class="flex items-start">
            <i class="fas fa-envelope text-red-600 mt-1 mr-3"></i>
            <div>
              <p class="font-semibold text-gray-800">Email</p>
              <p class="text-gray-600">{{ $village->email ?? 'Email belum diatur.' }}</p>
            </div>
          </div>

          <div class="flex items-start">
            <i class="fas fa-clock text-red-600 mt-1 mr-3"></i>
            <div>
              <p class="font-semibold text-gray-800">Jam Operasional</p>
              <p class="text-gray-600">{{ $village->operational_hours_weekdays ?? 'Senin - Jumat: Belum diatur' }}</p>
              <p class="text-gray-600">{{ $village->operational_hours_weekends ?? 'Sabtu: Belum diatur' }}</p>
            </div>
          </div>
        </div>

        <div class="mt-6">
          <p class="font-semibold text-gray-800 mb-3">Media Sosial</p>
          <div class="flex space-x-3">
            @if($village->facebook)
            <a href="{{ $village->facebook }}" class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            @endif
            @if($village->instagram)
            <a href="{{ $village->instagram }}" class="bg-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-700 transition">
              <i class="fab fa-instagram"></i>
            </a>
            @endif
            @if($village->twitter)
            <a href="{{ $village->twitter }}" class="bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
              <i class="fab fa-twitter"></i>
            </a>
            @endif
            @if($village->youtube)
            <a href="{{ $village->youtube }}" class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-700 transition">
              <i class="fab fa-youtube"></i>
            </a>
            @endif
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