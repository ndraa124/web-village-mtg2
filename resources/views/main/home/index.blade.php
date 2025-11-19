<section class="relative h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden">
  <div class="absolute inset-0 swiper hero-background-slider">
    <div class="swiper-wrapper">
      @forelse ($sliders as $slider)
        <div class="swiper-slide" style="background-image: url('{{ $slider->image_url }}'); background-size: cover; background-position: center;">
          <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        </div>
      @empty
        <div class="swiper-slide" style="background-image: url('https://placehold.co/1920x1080'); background-size: cover; background-position: center;">
          <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        </div>
      @endforelse
    </div>
  </div>

  <div class="relative z-20 container mx-auto px-4 h-full flex items-center">
    <div class="text-center text-white w-full">
      <div class="inline-block mb-6 px-6 py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
        <span class="text-white font-semibold">
          <i class="fas fa-home mr-2"></i>Website Resmi
        </span>
      </div>

      <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold mb-4 drop-shadow-2xl">
        DESA MOTOLING DUA
      </h1>

      <p class="text-lg md:text-xl lg:text-2xl mb-2 font-semibold">
        Kecamatan Motoling, Kabupaten Minahasa Selatan
      </p>

      <p class="text-base md:text-lg mb-10 max-w-3xl mx-auto text-gray-200">
        Menjelajahi segala hal yang terkait dengan Desa, mulai dari pemerintahan, penduduk, demografi, potensi desa, hingga berita terkini
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="#layanan" class="group relative w-full sm:w-auto bg-white text-red-600 px-8 py-4 rounded-2xl font-bold hover:bg-red-50 transition-all duration-300 shadow-2xl hover:shadow-xl hover:-translate-y-1">
          <span class="relative z-10">
            <i class="fas fa-hand-holding-heart mr-2"></i> Layanan Publik
          </span>
        </a>
        <a href="#berita" class="group relative w-full sm:w-auto bg-red-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-red-700 transition-all duration-300 border-2 border-white shadow-2xl hover:shadow-xl hover:-translate-y-1">
          <span class="relative z-10">
            <i class="fas fa-newspaper mr-2"></i> Berita Terkini
          </span>
        </a>
      </div>
    </div>
  </div>

  <div class="hidden sm:flex absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
    <div class="w-8 h-12 border-2 border-white rounded-full flex items-start justify-center p-2">
      <div class="w-1.5 h-3 bg-white rounded-full"></div>
    </div>
  </div>
</section>

<section id="informasi" class="py-4 bg-gradient-to-r from-gray-800 via-gray-900 to-gray-800 text-white border-b-4 border-red-600">
  <div class="container mx-auto px-4">
    <div class="flex items-center">
      <div class="flex-shrink-0 pr-4">
        <span class="bg-red-600 text-white text-sm font-bold py-2 px-4 rounded-lg shadow-lg animate-pulse">
          <i class="fas fa-bullhorn mr-2"></i> INFORMASI
        </span>
      </div>

      <div class="flex-1 min-w-0 ticker-wrap">
        <div class="ticker-tape">
          @forelse($informationNews as $info)
            <div class="ticker-item">
              <a href="{{ route('news.show', $info->slug) }}" class="hover:text-red-400 transition-colors">
                <span class="text-gray-400 mr-2">[{{ $info->published_at->format('d/m/Y') }}]</span>
                <span class="font-medium">{{ $info->title }}</span>
              </a>
            </div>
          @empty
            <div class="ticker-item">
              <p>Belum ada informasi terbaru saat ini.</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-chart-pie mr-2"></i>Data & Statistik
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Infografis Unggulan
      </h2>
      <p class="text-gray-600 text-lg">Transparansi data dan informasi desa</p>
      <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <a href="{{ route('public.infographics.index') }}" class="group relative block rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800"></div>
        <i class="fas fa-users absolute right-8 bottom-8 text-[150px] text-white opacity-10 transform -rotate-12 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-0"></i>
        <div class="relative h-64 flex flex-col justify-end p-8 text-white">
          <div class="mb-4">
            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4">
              <i class="fas fa-users text-3xl"></i>
            </div>
          </div>
          <h3 class="text-2xl font-bold mb-2">Infografis Kependudukan</h3>
          <p class="text-sm mb-4 text-blue-100">Lihat data demografi, kelompok umur, dan pekerjaan warga</p>
          <span class="inline-flex items-center font-semibold text-blue-200 group-hover:text-white transition-colors">
            Lihat Data <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
          </span>
        </div>
      </a>

      <a href="{{ route('public.infographics.apbdes') }}" class="group relative block rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-green-600 to-green-800"></div>
        <i class="fas fa-balance-scale absolute right-8 bottom-8 text-[150px] text-white opacity-10 transform -rotate-12 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-0"></i>
        <div class="relative h-64 flex flex-col justify-end p-8 text-white">
          <div class="mb-4">
            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4">
              <i class="fas fa-balance-scale text-3xl"></i>
            </div>
          </div>
          <h3 class="text-2xl font-bold mb-2">Transparansi Anggaran</h3>
          <p class="text-sm mb-4 text-green-100">Akses rincian Anggaran Pendapatan dan Belanja Desa (APBDes)</p>
          <span class="inline-flex items-center font-semibold text-green-200 group-hover:text-white transition-colors">
            Lihat APBDes <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
          </span>
        </div>
      </a>

      <a href="{{ route('public.infographics.idm') }}" class="group relative block rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-red-600 to-red-800"></div>
        <i class="fas fa-chart-line absolute right-8 bottom-8 text-[150px] text-white opacity-10 transform -rotate-12 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-0"></i>
        <div class="relative h-64 flex flex-col justify-end p-8 text-white">
          <div class="mb-4">
            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4">
              <i class="fas fa-chart-line text-3xl"></i>
            </div>
          </div>
          <h3 class="text-2xl font-bold mb-2">Status Pembangunan</h3>
          <p class="text-sm mb-4 text-red-100">Lihat pencapaian Indeks Desa Membangun (IDM) & SDGs Desa</p>
          <span class="inline-flex items-center font-semibold text-red-200 group-hover:text-white transition-colors">
            Lihat IDM & SDGs <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
          </span>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-chart-bar mr-2"></i>Statistik Real-time
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Data Kependudukan
      </h2>
      <p class="text-gray-600 text-lg">Informasi terkini jumlah penduduk Desa Motoling Dua</p>
      <div class="w-24 h-1 bg-blue-600 mx-auto mt-4"></div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
      <div class="group bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 text-center hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-red-200">
        <div class="w-14 h-14 bg-red-600 rounded-2xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
          <i class="fas fa-users text-2xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_resident ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2 font-medium">Total Penduduk</p>
      </div>

      <div class="group bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 text-center hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-blue-200">
        <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
          <i class="fas fa-male text-2xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_man ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2 font-medium">Laki-Laki</p>
      </div>

      <div class="group bg-gradient-to-br from-pink-50 to-pink-100 rounded-2xl p-6 text-center hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-pink-200">
        <div class="w-14 h-14 bg-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
          <i class="fas fa-female text-2xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_woman ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2 font-medium">Perempuan</p>
      </div>

      <div class="group bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 text-center hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-green-200">
        <div class="w-14 h-14 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
          <i class="fas fa-home text-2xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_head_of_family ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2 font-medium">Kepala Keluarga</p>
      </div>

      <div class="group bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 text-center hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-yellow-200">
        <div class="w-14 h-14 bg-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
          <i class="fas fa-user-clock text-2xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_temporary ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2 font-medium">Penduduk Sementara</p>
      </div>

      <div class="group bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 text-center hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-purple-200">
        <div class="w-14 h-14 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
          <i class="fas fa-exchange-alt text-2xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 counter" data-target="{{ $residentStats->t_mutation ?? 0 }}">0</h3>
        <p class="text-gray-600 mt-2 font-medium">Mutasi Penduduk</p>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-money-bill-wave mr-2"></i>Transparansi Keuangan
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        APB Desa {{ $apbdStats->year ?? date('Y') }}
      </h2>
      <p class="text-gray-600 text-lg">Anggaran Pendapatan dan Belanja Desa</p>
      <div class="w-24 h-1 bg-green-600 mx-auto mt-4"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-shadow border border-gray-100">
        <div class="flex items-center mb-6 pb-4 border-b-2 border-green-100">
          <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center mr-4">
            <i class="fas fa-wallet text-green-600 text-xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Anggaran Desa</h3>
        </div>
        <div class="space-y-4">
          <div class="flex justify-between items-center p-4 bg-green-50 rounded-xl">
            <div class="flex items-center">
              <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center mr-3">
                <i class="fas fa-arrow-down text-white"></i>
              </div>
              <span class="text-gray-700 font-medium">Pendapatan</span>
            </div>
            <span class="font-bold text-green-600 text-lg">Rp {{ number_format($apbdStats->income ?? 0, 0, ',', '.') }}</span>
          </div>
          <div class="flex justify-between items-center p-4 bg-red-50 rounded-xl">
            <div class="flex items-center">
              <div class="w-10 h-10 bg-red-500 rounded-xl flex items-center justify-center mr-3">
                <i class="fas fa-arrow-up text-white"></i>
              </div>
              <span class="text-gray-700 font-medium">Belanja</span>
            </div>
            <span class="font-bold text-red-600 text-lg">Rp {{ number_format($apbdStats->shopping ?? 0, 0, ',', '.') }}</span>
          </div>
          <div class="flex justify-between items-center p-4 bg-blue-50 rounded-xl">
            <div class="flex items-center">
              <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center mr-3">
                <i class="fas fa-balance-scale text-white"></i>
              </div>
              <span class="text-gray-700 font-medium">Surplus/Defisit</span>
            </div>
            <span class="font-bold text-blue-600 text-lg">Rp {{ number_format($apbdStats->surplus_deficit ?? 0, 0, ',', '.') }}</span>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-shadow border border-gray-100">
        <div class="flex items-center mb-6 pb-4 border-b-2 border-red-100">
          <div class="w-12 h-12 bg-red-100 rounded-2xl flex items-center justify-center mr-4">
            <i class="fas fa-chart-pie text-red-600 text-xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Realisasi Pembangunan</h3>
        </div>
        <div class="space-y-6">
          @forelse($realizationStats as $realize)
            <div>
              <div class="flex justify-between mb-2">
                <span class="text-gray-700 font-medium">{{ $realize->category_name ?? '-' }}</span>
                <span class="text-gray-800 font-bold">{{ $realize->percent ?? 0 }}%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                <div class="bg-gradient-to-r from-red-500 to-red-600 h-3 rounded-full transition-all duration-1000 ease-out" style="width: {{ $realize->percent ?? 0 }}%;"></div>
              </div>
            </div>
          @empty
            <p class="text-gray-500 text-center py-8">Belum ada data realisasi</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>

<section id="layanan" class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-hands-helping mr-2"></i>Pelayanan Masyarakat
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Layanan Publik
      </h2>
      <p class="text-gray-600 text-lg">Kemudahan akses layanan untuk warga desa</p>
      <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      @forelse($services as $service)
        <div class="group relative bg-gradient-to-br {{ $loop->iteration == 1 ? 'from-red-500 to-red-700' : ($loop->iteration == 2 ? 'from-blue-500 to-blue-700' : ($loop->iteration == 3 ? 'from-green-500 to-green-700' : 'from-purple-500 to-purple-700')) }} rounded-3xl p-6 text-white hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
          <div class="absolute top-0 right-0 opacity-10 transform rotate-12">
            <i class="{{ $service->icon_class }} text-[120px]"></i>
          </div>
          <div class="relative z-10">
            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4">
              <i class="{{ $service->icon_class }} text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">{{ $service->title }}</h3>
            <p class="text-sm mb-6 text-white/90">{{ $service->description }}</p>
            <a href="{{ route('service.show', $service->slug) }}" class="inline-flex items-center bg-white {{ $loop->iteration == 1 ? 'text-red-600' : ($loop->iteration == 2 ? 'text-blue-600' : ($loop->iteration == 3 ? 'text-green-600' : 'text-purple-600')) }} px-5 py-2.5 rounded-xl text-sm font-bold hover:shadow-lg transition-all">
              Lihat Persyaratan <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
      @empty
        <p class="text-center text-gray-500 col-span-4">Layanan belum tersedia.</p>
      @endforelse
    </div>

    <div class="text-center mt-12">
      <a href="{{ route('service.index') }}" class="inline-flex items-center bg-red-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-red-700 transition-all shadow-xl hover:shadow-2xl hover:-translate-y-1">
        Lihat Semua Layanan <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
</section>

<section id="berita" class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-newspaper mr-2"></i>Informasi Terkini
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Berita Desa
      </h2>
      <p class="text-gray-600 text-lg">Update terbaru kegiatan dan informasi desa</p>
      <div class="w-24 h-1 bg-blue-600 mx-auto mt-4"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($latestNews as $news)
        <article class="group bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
          <a href="{{ route('news.show', $news->slug) }}" class="block relative overflow-hidden">
            <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500">
            <div class="absolute top-4 left-4">
              <span class="bg-red-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                {{ $news->category->name ?? 'Berita' }}
              </span>
            </div>
          </a>
          <div class="p-6">
            <div class="flex items-center text-sm text-gray-500 mb-3">
              <i class="fas fa-calendar mr-2 text-red-600"></i>
              <span>{{ $news->published_at->format('d F Y') }}</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-red-600 transition-colors">
              <a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a>
            </h3>
            <p class="text-gray-600 mb-4 line-clamp-3 leading-relaxed">{{ \Illuminate\Support\Str::limit(strip_tags($news->content), 120) }}</p>
            <a href="{{ route('news.show', $news->slug) }}" class="inline-flex items-center text-red-600 font-bold hover:text-red-700 transition-colors group/link">
              Baca Selengkapnya <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </article>
      @empty
        <p class="text-center text-gray-500 col-span-3">Belum ada berita untuk ditampilkan.</p>
      @endforelse
    </div>

    <div class="text-center mt-12">
      <a href="{{ route('news.index') }}" class="inline-flex items-center bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 transition-all shadow-xl hover:shadow-2xl hover:-translate-y-1">
        Lihat Semua Berita <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
</section>

<section id="potensi" class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-gem mr-2"></i>Kekayaan Desa
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Potensi Desa
      </h2>
      <p class="text-gray-600 text-lg">Keunggulan dan kekayaan Desa Motoling Dua</p>
      <div class="w-24 h-1 bg-green-600 mx-auto mt-4"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($potentials as $potential)
        <div class="group text-center bg-gradient-to-b from-white to-gray-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
          <div class="relative inline-block mb-6">
            <div class="absolute inset-0 {{ $loop->iteration == 1 ? 'bg-red-400' : ($loop->iteration == 2 ? 'bg-green-400' : 'bg-blue-400') }} rounded-2xl blur-2xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative {{ $loop->iteration == 1 ? 'bg-gradient-to-br from-red-500 to-red-700' : ($loop->iteration == 2 ? 'bg-gradient-to-br from-green-500 to-green-700' : 'bg-gradient-to-br from-blue-500 to-blue-700') }} w-20 h-20 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-xl">
              <i class="{{ $potential->icon_class }} text-4xl text-white"></i>
            </div>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $potential->title }}</h3>
          <p class="text-gray-600 leading-relaxed">{{ $potential->description }}</p>
        </div>
      @empty
        <p class="text-center text-gray-500 col-span-3">Potensi desa belum ditambahkan.</p>
      @endforelse
    </div>
  </div>
</section>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-map-marked-alt mr-2"></i>Lokasi
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Peta Desa
      </h2>
      <p class="text-gray-600 text-lg">Lokasi geografis Desa Motoling Dua</p>
      <div class="w-24 h-1 bg-purple-600 mx-auto mt-4"></div>
    </div>

    <div class="bg-white rounded-3xl shadow-2xl p-6 max-w-5xl mx-auto border border-gray-100">
      <div id="map" class="h-96 rounded-2xl overflow-hidden z-10" data-latitude="{{ $village['map_latitude'] ?? '-0.0' }}" data-longitude="{{ $village['map_longitude'] ?? '0.0' }}" data-zoom="{{ $village['map_zoom'] ?? '14' }}">
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-pink-100 text-pink-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-images mr-2"></i>Dokumentasi
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Galeri Kegiatan
      </h2>
      <p class="text-gray-600 text-lg">Dokumentasi kegiatan dan momen di Desa Motoling Dua</p>
      <div class="w-24 h-1 bg-pink-600 mx-auto mt-4"></div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      @forelse($galleryImages as $image)
        <div class="gallery-item group relative overflow-hidden rounded-2xl cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300">
          <img src="{{ $image->image_url }}" alt="{{ $image->caption ?? 'Galeri' }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <p class="text-white font-semibold text-sm">{{ $image->caption ?? 'Galeri Desa' }}</p>
          </div>
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <div class="bg-white/90 backdrop-blur-sm rounded-full p-4">
              <i class="fas fa-search-plus text-red-600 text-2xl"></i>
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-gray-500 col-span-4">Belum ada galeri untuk ditampilkan.</p>
      @endforelse
    </div>
  </div>
</section>

<section id="kontak" class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold">
          <i class="fas fa-phone-alt mr-2"></i>Kontak
        </span>
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Hubungi Kami
      </h2>
      <p class="text-gray-600 text-lg">Jangan ragu untuk menghubungi kami</p>
      <div class="w-24 h-1 bg-blue-600 mx-auto mt-4"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-shadow border border-gray-100">
        <div class="flex items-center mb-6 pb-4 border-b-2 border-blue-100">
          <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4">
            <i class="fas fa-info-circle text-blue-600 text-xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Informasi Kontak</h3>
        </div>

        <div class="space-y-6">
          <div class="flex items-start p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors">
            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-map-marker-alt text-red-600 text-xl"></i>
            </div>
            <div>
              <p class="font-bold text-gray-800 mb-1">Alamat</p>
              <p class="text-gray-600">{{ $village['address'] ?? 'Alamat belum diatur.' }}</p>
            </div>
          </div>

          <div class="flex items-start p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-phone text-green-600 text-xl"></i>
            </div>
            <div>
              <p class="font-bold text-gray-800 mb-1">Telepon</p>
              <p class="text-gray-600">{{ $village['phone'] ?? 'Telepon belum diatur.' }}</p>
            </div>
          </div>

          <div class="flex items-start p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors">
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-envelope text-blue-600 text-xl"></i>
            </div>
            <div>
              <p class="font-bold text-gray-800 mb-1">Email</p>
              <p class="text-gray-600">{{ $village->email ?? 'Email belum diatur.' }}</p>
            </div>
          </div>

          <div class="flex items-start p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors">
            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-clock text-purple-600 text-xl"></i>
            </div>
            <div>
              <p class="font-bold text-gray-800 mb-1">Jam Operasional</p>
              <p class="text-gray-600">{{ $village->operational_hours_weekdays ?? 'Senin - Jumat: Belum diatur' }}</p>
              <p class="text-gray-600">{{ $village->operational_hours_weekends ?? 'Sabtu: Belum diatur' }}</p>
            </div>
          </div>
        </div>

        <div class="mt-8 pt-6 border-t-2 border-gray-100">
          <p class="font-bold text-gray-800 mb-4">Media Sosial</p>
          <div class="flex space-x-3">
            @if ($village->facebook)
              <a href="{{ $village->facebook }}" class="group w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
                <i class="fab fa-facebook-f group-hover:scale-110 transition-transform"></i>
              </a>
            @endif
            @if ($village->instagram)
              <a href="{{ $village->instagram }}" class="group w-12 h-12 bg-pink-600 text-white rounded-xl flex items-center justify-center hover:bg-pink-700 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
                <i class="fab fa-instagram group-hover:scale-110 transition-transform"></i>
              </a>
            @endif
            @if ($village->twitter)
              <a href="{{ $village->twitter }}" class="group w-12 h-12 bg-blue-400 text-white rounded-xl flex items-center justify-center hover:bg-blue-500 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
                <i class="fab fa-twitter group-hover:scale-110 transition-transform"></i>
              </a>
            @endif
            @if ($village->youtube)
              <a href="{{ $village->youtube }}" class="group w-12 h-12 bg-red-600 text-white rounded-xl flex items-center justify-center hover:bg-red-700 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
                <i class="fab fa-youtube group-hover:scale-110 transition-transform"></i>
              </a>
            @endif
          </div>
        </div>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-shadow border border-gray-100">
        <div class="flex items-center mb-6 pb-4 border-b-2 border-red-100">
          <div class="w-12 h-12 bg-red-100 rounded-2xl flex items-center justify-center mr-4">
            <i class="fas fa-paper-plane text-red-600 text-xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Kirim Pesan</h3>
        </div>

        @if ($message = Session::get('success'))
          @include('main.layout.components.alert-success', [
              'title' => 'Kirim Pesan Berhasil!',
              'message' => $message,
              'showEmailInfo' => false,
          ])
        @endif

        @if ($message = Session::get('error'))
          @include('main.layout.components.alert-error', [
              'title' => 'Kirim Pesan Gagal!',
              'message' => $message,
              'showContactInfo' => false,
          ])
        @endif

        <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
          @csrf

          <div class="mb-5">
            <label class="block text-gray-700 font-bold mb-2" for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('name') border-red-500 @enderror" value="{{ old('name') }}" placeholder="Masukkan nama lengkap">
            @error('name')
              <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-5">
            <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('email') border-red-500 @enderror" value="{{ old('email') }}" placeholder="contoh@email.com">
            @error('email')
              <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-5">
            <label class="block text-gray-700 font-bold mb-2" for="subject">Subjek</label>
            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('subject') border-red-500 @enderror" value="{{ old('subject') }}" placeholder="Subjek pesan">
            @error('subject')
              <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-5">
            <label class="block text-gray-700 font-bold mb-2" for="message">Pesan</label>
            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('message') border-red-500 @enderror" placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea>
            @error('message')
              <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white py-4 rounded-2xl font-bold hover:from-red-700 hover:to-red-800 transition-all shadow-xl hover:shadow-2xl hover:-translate-y-1 flex items-center justify-center">
            <i class="fas fa-paper-plane mr-2"></i>
            Kirim Pesan
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
