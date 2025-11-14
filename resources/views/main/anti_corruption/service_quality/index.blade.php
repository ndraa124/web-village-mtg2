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

  .news-content p {
    margin-bottom: 1.5rem;
    line-height: 1.7;
  }

  .news-content h2 {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 2rem;
    margin-bottom: 1rem;
  }

  .news-content h3 {
    font-size: 1.25rem;
    font-weight: bold;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
  }

  .news-content ul {
    list-style-type: disc;
    margin-left: 2rem;
    margin-bottom: 1.5rem;
  }

  .news-content ol {
    list-style-type: decimal;
    margin-left: 2rem;
    margin-bottom: 1.5rem;
  }
</style>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4 max-w-5xl">
    <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
      <article class="max-w-none text-gray-700">
        <div class="fs-16 text-body news-content">

          @if (empty($antiCorrupt) || $antiCorrupt->content == '')
            <p class="text-center italic text-gray-500">
              Tidak ada konten untuk ditampilkan.
            </p>
          @else
            {!! $antiCorrupt->content !!}
          @endif

        </div>
      </article>
    </div>
  </div>
</section>
