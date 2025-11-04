<style>
  .news-content table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1em;
    border: 1px solid #dee2e6;
  }

  .news-content th,
  .news-content td {
    border: 1px solid #dee2e6;
    padding: 0.75rem;
    vertical-align: top;
    text-align: left;
  }

  .news-content th {
    background-color: #f8f9fa;
    font-weight: 600;
  }
</style>

<section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-white mb-2">Partisipasi Masyarakat</h2>
    <nav class="text-white/90">
      <a href="index.html" class="hover:text-white">Beranda</a>
      <span class="mx-2">/</span>
      <a href="#" class="hover:text-white">Desa Anti Korupsi</a>
      <span class="mx-2">/</span>
      <span>Partisipasi Masyarakat</span>
    </nav>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4 max-w-5xl">

    <div class="text-center mb-12">
      <i class="fas fa-landmark text-5xl text-red-600 mb-4"></i>
      <h3 class="text-3xl font-bold text-gray-800 mb-4">Partisipasi Masyarakat</h3>
    </div>

    <article class="prose prose-lg max-w-none text-gray-700 space-y-6">
      <div class="fs-16 text-body news-content" style="line-height: 1.7;">
        @if ($antiCorrupt->content == "")
        Tidak ada konten
        @else
        {!! $antiCorrupt->content !!}
        @endif
      </div>
    </article>

  </div>
</section>