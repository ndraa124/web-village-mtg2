<style>
  .news-card {
    transition: all 0.3s ease;
  }

  .news-card:hover {
    transform: translateY(-5px);
  }

  .news-card:hover .news-image {
    transform: scale(1.05);
  }

  .news-image {
    transition: transform 0.3s ease;
  }

  .category-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 10;
  }

  .trending-badge {
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
    }

    70% {
      box-shadow: 0 0 0 10px rgba(239, 68, 68, 0);
    }

    100% {
      box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
    }
  }
</style>

<section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
  <div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-white mb-2">{{ $title }}</h1>
    <nav class="text-white/90">
      <a href="index.html" class="hover:text-white">Beranda</a>
      <span class="mx-2">/</span>
      <span>Berita dan Informasi</span>
    </nav>
  </div>
</section>

<section class="py-12">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-8">

      <div class="lg:w-2/3">

        @if($featuredNews)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
          <div class="relative">
            <img src="{{ $featuredNews->image_url }}" alt="{{ $featuredNews->title }}" class="w-full h-64 md:h-96 object-cover">
            <div class="absolute top-4 left-4">
              <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                <i class="fas fa-fire mr-1"></i> Berita Utama
              </span>
            </div>
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
              <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">
                {{ $featuredNews->title }}
              </h2>
              <div class="flex items-center text-white/90 text-sm">
                <i class="far fa-calendar mr-2"></i>
                <span>{{ $featuredNews->published_at->format('d F Y') }}</span>
                <i class="far fa-user ml-4 mr-2"></i>
                <span>{{ $featuredNews->user->name ?? 'Admin' }}</span>
                {{-- Jika Anda punya kategori, tambahkan di sini --}}
                {{-- <i class="far fa-folder ml-4 mr-2"></i> --}}
                {{-- <span>Pembangunan</span> --}}
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-700 mb-4">
              {{ Str::limit(strip_tags($featuredNews->content), 200) }}
            </p>
            <a href="{{ route('news.show', $featuredNews->slug) }}" class="inline-flex items-center text-red-600 font-semibold hover:text-red-700 transition">
              Baca Selengkapnya
              <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
        @endif

        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
          <div class="flex flex-wrap gap-2">
            <button class="px-4 py-2 bg-red-600 text-white rounded-full text-sm font-semibold hover:bg-red-700 transition">
              <i class="fas fa-list mr-1"></i> Semua
            </button>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
              <i class="fas fa-building mr-1"></i> Pemerintahan
            </button>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
              <i class="fas fa-hammer mr-1"></i> Pembangunan
            </button>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
              <i class="fas fa-users mr-1"></i> Kemasyarakatan
            </button>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
              <i class="fas fa-heartbeat mr-1"></i> Kesehatan
            </button>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
              <i class="fas fa-graduation-cap mr-1"></i> Pendidikan
            </button>
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-8">
          @forelse($news as $item)
          <article class="news-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl">
            <div class="relative overflow-hidden h-48">
              <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="news-image w-full h-full object-cover">
              {{-- <span class="category-badge bg-blue-600 text-white px-2 py-1 rounded text-xs font-semibold">
                Kesehatan
              </span> --}}
            </div>
            <div class="p-5">
              <div class="flex items-center text-sm text-gray-500 mb-2">
                <i class="far fa-calendar mr-2"></i>
                <span>{{ $item->published_at->format('d F Y') }}</span>
                {{-- <i class="far fa-eye ml-auto mr-2"></i> --}}
                {{-- <span>234 views</span> --}}
              </div>
              <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">
                {{ $item->title }}
              </h3>
              <p class="text-gray-600 text-sm mb-3 line-clamp-3">
                {{ Str::limit(strip_tags($item->content), 100) }}
              </p>
              <a href="{{ route('news.show', $item->slug) }}" class="text-red-600 font-semibold text-sm hover:text-red-700 transition">
                Selengkapnya →
              </a>
            </div>
          </article>
          @empty
          <div class="md:col-span-2 bg-white rounded-lg shadow-md p-8 text-center">
            <p class="text-gray-500">Belum ada berita untuk ditampilkan.</p>
          </div>
          @endforelse
        </div>

        {{ $news->links('pagination::tailwind') }}
      </div>

      <!-- Sidebar -->
      <aside class="lg:w-1/3">
        <!-- Search -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
          <h3 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-search text-red-600 mr-2"></i>
            Cari Berita
          </h3>
          <form action="{{ route('news.index') }}" method="GET" class="relative">
            <input type="text" name="search" placeholder="Ketik kata kunci..." value="{{ request('search') }}" class="w-full px-4 py-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-red-600 hover:text-red-700">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
          <h3 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-fire text-red-600 mr-2"></i>
            Berita Populer
          </h3>
          <div class="space-y-4">
            @forelse($popularNews as $index => $popular)
            <article class="flex gap-3">
              <div class="flex-shrink-0">
                <span class="flex items-center justify-center w-8 h-8 bg-red-600 text-white rounded-full font-bold text-sm">{{ $index + 1 }}</span>
              </div>
              <div>
                <a href="{{ route('news.show', $popular->slug) }}" class="text-sm font-semibold text-gray-800 hover:text-red-600 transition cursor-pointer line-clamp-2">
                  {{ $popular->title }}
                </a>
                <p class="text-xs text-gray-500 mt-1">
                  <i class="far fa-eye mr-1"></i> {{ number_format($popular->views_count) }} views
                </p>
              </div>
            </article>
            @empty
            <p class="text-sm text-gray-500">Belum ada berita populer.</p>
            @endforelse
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
          <h3 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-folder-open text-red-600 mr-2"></i>
            Kategori
          </h3>
          <ul class="space-y-2">
            @forelse($categories as $category)
            <li>
              {{-- TODO: Buat route untuk filter kategori --}}
              <a href="#" class="flex items-center justify-between text-gray-700 hover:text-red-600 transition">
                <span><i class="fas fa-chevron-right text-xs mr-2"></i> {{ $category->name }}</span>
                <span class="bg-gray-200 px-2 py-1 rounded text-xs">({{ $category->news_count }})</span>
              </a>
            </li>
            @empty
            <p class="text-sm text-gray-500">Belum ada kategori.</p>
            @endforelse
          </ul>
        </div>

        <!-- Archive -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
          <h3 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-archive text-red-600 mr-2"></i>
            Arsip Berita
          </h3>
          <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            <option value="">Pilih Bulan</option>
            @foreach($archives as $archive)
            {{-- TODO: Buat route untuk filter arsip --}}
            <option value="#">
              {{ $archive->month_name }} {{ $archive->year }} ({{ $archive->post_count }})
            </option>
            @endforeach
          </select>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
          <h3 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-tags text-red-600 mr-2"></i>
            Tag Populer
          </h3>
          <div class="flex flex-wrap gap-2">
            @forelse($popularTags as $tag)
            <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-sm hover:bg-red-600 hover:text-white transition">
              #{{ $tag->name }}
            </a>
            @empty
            <p class="text-sm text-gray-500">Belum ada tag.</p>
            @endforelse
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>