<style>
  .article-content {
    line-height: 1.8;
  }

  .article-content p {
    margin-bottom: 1.5rem;
  }

  .article-content h2 {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 2rem;
    margin-bottom: 1rem;
  }

  .article-content h3 {
    font-size: 1.25rem;
    font-weight: bold;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
  }

  .article-content ul {
    list-style-type: disc;
    margin-left: 2rem;
    margin-bottom: 1.5rem;
  }

  .article-content ol {
    list-style-type: decimal;
    margin-left: 2rem;
    margin-bottom: 1.5rem;
  }

  .article-content img {
    border-radius: 0.5rem;
    margin: 2rem auto;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  }

  .article-content blockquote {
    border-left: 4px solid #dc2626;
    padding-left: 1rem;
    font-style: italic;
    margin: 1.5rem 0;
    color: #6b7280;
  }

  .share-button {
    transition: all 0.3s ease;
  }

  .share-button:hover {
    transform: translateY(-2px);
  }
</style>

<section class="py-12">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-8">

      <article class="lg:w-2/3">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-8">
            <div class="flex items-center gap-3 mb-4">
              @if($news->category)
              <a href="{{ route('news.category', $news->category->slug) }}" class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold hover:bg-red-700 transition">
                <i class="fas fa-folder mr-1"></i> {{ $news->category->name }}
              </a>
              @endif

              @if($news->status == 'published')
              <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                <i class="fas fa-check-circle mr-1"></i> Dipublikasi
              </span>
              @else
              <span class="bg-yellow-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                <i class="fas fa-edit mr-1"></i> Draft
              </span>
              @endif
            </div>

            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
              {{ $news->title }}
            </h1>

            <div class="flex flex-wrap items-center text-gray-600 text-sm gap-4 mb-6">
              <span>
                <i class="far fa-user mr-2"></i>
                {{ $news->user->name ?? 'Admin' }}
              </span>
              <span>
                <i class="far fa-calendar mr-2"></i>
                {{ $news->published_at->format('d F Y') }}
              </span>
              <span>
                <i class="far fa-clock mr-2"></i>
                {{ $news->published_at->format('H:i') }} WIB
              </span>
              <span>
                <i class="far fa-eye mr-2"></i>
                {{ $news->views_count }} views
              </span>
            </div>

            <div class="flex items-center gap-3 mb-6">
              <span class="text-gray-700 font-semibold">Bagikan:</span>
              <button class="share-button bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button class="share-button bg-green-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700">
                <i class="fab fa-whatsapp"></i>
              </button>
              <button class="share-button bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500">
                <i class="fab fa-twitter"></i>
              </button>
              <button class="share-button bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-700">
                <i class="fas fa-link"></i>
              </button>
            </div>

            <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-full rounded-lg mb-6">
            <p class="text-center text-sm text-gray-600 italic mb-6"></p>

            <div class="article-content text-gray-700">
              {!! $news->content !!}
            </div>

            @if($news->tags->isNotEmpty())
            <div class="mt-8 pt-6 border-t">
              <div class="flex flex-wrap items-center gap-2">
                <span class="font-semibold text-gray-700">Tags:</span>
                @foreach($news->tags as $tag)
                <a href="{{ route('news.tag', $tag->slug) }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-sm hover:bg-red-600 hover:text-white transition">
                  #{{ $tag->name }}
                </a>
                @endforeach
              </div>
            </div>
            @endif

            <div class="mt-8 p-6 bg-gray-50 rounded-lg">
              <div class="flex items-center gap-4">
                <img src="{{ asset('admin/images/admin.png') }}" alt="Author" class="w-20 h-20 rounded-full">
                <div>
                  <h4 class="font-bold text-gray-800">{{ $news->user->name ?? 'Admin Desa' }}</h4>
                  <p class="text-gray-600 text-sm">Pengelola Website Desa Motoling Dua</p>
                  <div class="flex gap-3 mt-2">
                    <a href="#" class="text-gray-500 hover:text-red-600">
                      <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-red-600">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-red-600">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @if($relatedNews->count() > 0)
        <div class="bg-white rounded-lg shadow-lg p-6 mt-8">
          <h3 class="text-xl font-bold text-gray-800 mb-4">
            <i class="fas fa-newspaper text-red-600 mr-2"></i>
            Berita Terkait
          </h3>
          <div class="grid md:grid-cols-2 gap-4">

            @foreach($relatedNews as $related)
            <article class="flex gap-3">
              <img src="{{ $related->image_url }}" alt="{{ $related->title }}" class="w-24 h-24 object-cover rounded">
              <div>
                <a href="{{ route('news.show', $related->slug) }}" class="font-semibold text-gray-800 hover:text-red-600 transition cursor-pointer line-clamp-2">
                  {{ $related->title }}
                </a>
                <p class="text-sm text-gray-500 mt-1">
                  <i class="far fa-calendar mr-1"></i> {{ $related->published_at->format('d F Y') }}
                </p>
              </div>
            </article>
            @endforeach

          </div>
        </div>
        @endif

        <div class="bg-white rounded-lg shadow-lg p-6 mt-8">
          <h3 class="text-xl font-bold text-gray-800 mb-6">
            <i class="fas fa-comments text-red-600 mr-2"></i>
            Komentar
          </h3>

          <div class="fb-comments"
            data-href="{{ Request::url() }}"
            data-width="100%"
            data-numposts="5">
          </div>
        </div>
      </article>

      <aside class="lg:w-1/3">
        <div class="bg-white rounded-lg shadow-md p-6 mb-6 sticky top-24">
          <h3 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-clock text-red-600 mr-2"></i>
            Berita Terbaru
          </h3>
          <div class="space-y-4">
            @forelse($latestNewsSidebar as $latest)
            <article class="pb-4 border-b">
              <a href="{{ route('news.show', $latest->slug) }}" class="font-semibold text-gray-800 hover:text-red-600 transition cursor-pointer mb-1 line-clamp-2">
                {{ $latest->title }}
              </a>
              <p class="text-xs text-gray-500 mt-1">
                <i class="far fa-calendar mr-1"></i> {{ $latest->published_at->format('d F Y') }}
              </p>
            </article>
            @empty
            <p class="text-sm text-gray-500">Tidak ada berita terbaru.</p>
            @endforelse
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>