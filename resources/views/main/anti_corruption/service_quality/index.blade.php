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
        <div class="flex items-center gap-3 mb-4">
          <div class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold hover:bg-red-700 transition">
            <i class="fas fa-folder mr-1"></i> Pemerintahan
          </div>
        </div>

        <div class="flex flex-wrap items-center text-gray-600 text-sm gap-4 mb-6">
          <span>
            <i class="far fa-user mr-2"></i>
            {{ $antiCorrupt->user->name ?? 'Admin' }}
          </span>
          <span>
            <i class="far fa-calendar mr-2"></i>
            {{ $antiCorrupt->created_at->format('d F Y') }}
          </span>
          <span>
            <i class="far fa-clock mr-2"></i>
            {{ $antiCorrupt->created_at->format('H:i') }} WITA
          </span>
        </div>

        <div class="flex items-center gap-3 mb-6">
          @php
            $shareUrl = Request::url();
            $shareTitle = urlencode('Kualitas Pelayanan Publik - Desa Ati Korupsi Motoling Dua');
            $shareUrlEncoded = urlencode($shareUrl);
          @endphp

          <span class="text-gray-700 font-semibold">Bagikan:</span>
          <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrlEncoded }}" target="_blank" rel="noopener noreferrer" class="share-button bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $shareUrlEncoded }}" target="_blank" rel="noopener noreferrer" class="share-button bg-green-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="https://twitter.com/intent/tweet?url={{ $shareUrlEncoded }}&text={{ $shareTitle }}" target="_blank" rel="noopener noreferrer" class="share-button bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500">
            <i class="fab fa-twitter"></i>
          </a>
          <button id="copy-link-btn" data-url="{{ $shareUrl }}" class="share-button bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-700">
            <i id="copy-link-icon" class="fas fa-link"></i>
          </button>
        </div>

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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const copyButton = document.getElementById('copy-link-btn');
    const copyIcon = document.getElementById('copy-link-icon');

    if (copyButton) {
      copyButton.addEventListener('click', function() {
        const urlToCopy = this.dataset.url;

        navigator.clipboard.writeText(urlToCopy).then(function() {
          copyIcon.classList.remove('fa-link');
          copyIcon.classList.add('fa-check');

          setTimeout(function() {
            copyIcon.classList.remove('fa-check');
            copyIcon.classList.add('fa-link');
          }, 2000);

        }).catch(function(err) {
          console.error('Gagal menyalin link: ', err);
          alert('Gagal menyalin link.');
        });
      });
    }
  });
</script>
