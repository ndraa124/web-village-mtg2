<style>
  .service-requirements h1,
  .service-requirements h2,
  .service-requirements h3 {
    margin-top: 1.5em;
    margin-bottom: 0.75em;
    font-weight: 700;
    color: #1f2937;
  }

  .service-requirements h1 {
    font-size: 1.875rem;
    color: #dc2626;
  }

  .service-requirements h2 {
    font-size: 1.5rem;
    color: #991b1b;
  }

  .service-requirements h3 {
    font-size: 1.25rem;
    color: #7f1d1d;
  }

  .service-requirements ul,
  .service-requirements ol {
    padding-left: 2em;
    margin-bottom: 1.5em;
  }

  .service-requirements ul {
    list-style-type: none;
  }

  .service-requirements ul li {
    position: relative;
    padding-left: 2em;
    margin-bottom: 0.75em;
    color: #374151;
    line-height: 1.75;
  }

  .service-requirements ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 0;
    color: #dc2626;
    font-weight: bold;
    font-size: 1.2em;
  }

  .service-requirements ol li {
    margin-bottom: 0.75em;
    color: #374151;
    line-height: 1.75;
  }

  .service-requirements p {
    margin-bottom: 1.25em;
    color: #4b5563;
    line-height: 1.75;
  }

  .service-requirements strong {
    color: #1f2937;
    font-weight: 600;
  }
</style>

<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="mb-16">

      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <div class="bg-gradient-to-r from-red-600 to-red-700 px-5 py-3">
            <h4 class="text-lg font-bold text-white flex items-center">
              <i class="fas fa-network-wired mr-2 text-sm"></i>
              Pemerintahan Desa
            </h4>
          </div>
          <div class="p-4">
            @if ($structure && $structure->image)
              <div class="bg-gray-50 rounded-lg p-3 flex items-center justify-center min-h-[300px] relative group cursor-pointer" onclick="openImageModal('{{ $structure->image_url }}', '{{ $structure->caption ?? 'Struktur Organisasi Pemerintahan Desa' }}')">
                <img src="{{ $structure->image_url }}" alt="Bagan Struktur Organisasi" class="max-w-full h-auto max-h-[400px] object-contain rounded-lg transition-transform duration-300 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300 flex items-center justify-center rounded-lg">
                  <div class="bg-white rounded-full p-3 opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 shadow-lg">
                    <i class="fas fa-search-plus text-red-600 text-xl"></i>
                  </div>
                </div>
              </div>
              <p class="text-center text-xs text-gray-500 mt-3 italic">
                <i class="fas fa-info-circle mr-1"></i>
                {{ $structure->caption ?? '-' }}
              </p>
            @else
              <div class="flex items-center justify-center min-h-[300px] bg-gray-50 rounded-lg text-gray-400">
                <p>Struktur organisasi belum diunggah</p>
              </div>
            @endif
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <div class="bg-gradient-to-r from-red-600 to-red-700 px-5 py-3">
            <h4 class="text-lg font-bold text-white flex items-center">
              <i class="fas fa-users mr-2 text-sm"></i>
              Badan Permusyawaratan Desa
            </h4>
          </div>
          <div class="p-4">
            @if ($deliberation && $deliberation->image)
              <div class="bg-gray-50 rounded-lg p-3 flex items-center justify-center min-h-[300px] relative group cursor-pointer" onclick="openImageModal('{{ $deliberation->image_url }}', '{{ $deliberation->caption ?? 'Struktur Organisasi Pemerintahan Desa' }}')">
                <img src="{{ $deliberation->image_url }}" alt="Bagan Struktur Organisasi" class="max-w-full h-auto max-h-[400px] object-contain rounded-lg transition-transform duration-300 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300 flex items-center justify-center rounded-lg">
                  <div class="bg-white rounded-full p-3 opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 shadow-lg">
                    <i class="fas fa-search-plus text-red-600 text-xl"></i>
                  </div>
                </div>
              </div>
              <p class="text-center text-xs text-gray-500 mt-3 italic">
                <i class="fas fa-info-circle mr-1"></i>
                {{ $deliberation->caption ?? '-' }}
              </p>
            @else
              <div class="flex items-center justify-center min-h-[300px] bg-gray-50 rounded-lg text-gray-400">
                <p>Struktur organisasi BPD belum diunggah</p>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div id="imageModal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4" onclick="closeImageModal()">
      <button class="absolute top-4 right-4 text-white hover:text-red-500 transition-colors z-10" onclick="closeImageModal()">
        <i class="fas fa-times text-3xl"></i>
      </button>
      <div class="max-w-7xl max-h-full" onclick="event.stopPropagation()">
        <img id="modalImage" src="" alt="" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl">
        <p id="modalCaption" class="text-white text-center mt-4 text-lg font-semibold"></p>
      </div>
    </div>

    <div class="mb-16">
      <div class="text-center mb-10">
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
          <i class="fas fa-users-cog text-red-600 mr-2"></i>
          Aparatur Desa
        </h3>
        <p class="text-gray-600">Tim yang melayani masyarakat Desa Motoling Dua</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @if ($headOfficial)
          <div class="sm:col-span-2 lg:col-span-3 xl:col-span-4">
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-2xl shadow-lg border-2 border-red-200 hover:shadow-2xl transition-all duration-300">
              <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="relative">
                  <div class="absolute -inset-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full blur opacity-25"></div>
                  <img src="{{ $headOfficial->image_url }}" alt="Foto {{ $headOfficial->name }}" class="relative w-32 h-32 md:w-40 md:h-40 rounded-full object-cover border-4 border-white shadow-xl" loading="lazy">
                  <div class="absolute -bottom-2 -right-2 bg-red-600 text-white rounded-full p-3 shadow-lg">
                    <i class="fas fa-crown text-xl"></i>
                  </div>
                </div>
                <div class="text-center md:text-left flex-1">
                  <span class="inline-block bg-red-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-2">
                    {{ $headOfficial->position->position_name ?? '-' }}
                  </span>
                  <h4 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">{{ $headOfficial->name }}</h4>
                  <p class="text-gray-600">Pemimpin Pemerintahan Desa Motoling Dua</p>
                </div>
              </div>
            </div>
          </div>
        @endif

        @foreach ($staffOfficials as $staff)
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
            <div class="relative mb-4">
              <img src="{{ $staff->image_url }}" alt="Foto {{ $staff->name }}" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-red-100 shadow-md" loading="lazy">
              <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-red-600 text-white rounded-full px-4 py-1 text-xs font-semibold shadow-lg whitespace-nowrap">
                {{ $staff->position->name ?? 'Aparatur' }}
              </div>
            </div>
            <div class="text-center mt-6">
              <h4 class="text-lg font-bold text-gray-800 mb-1">{{ $staff->name }}</h4>
              <p class="text-red-600 font-semibold text-sm">{{ $staff->position->position_name ?? '-' }}</p>
            </div>
          </div>
        @endforeach

      </div>
    </div>

    @if ($functions->isNotEmpty())
      <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-xl p-8 md:p-10">
        <div class="text-center mb-10">
          <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
            <i class="fas fa-tasks text-red-600 mr-2"></i>
            Tugas Pokok dan Fungsi
          </h3>
          <p class="text-gray-600">Tupoksi Aparatur Pemerintahan Desa</p>
          <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">

          @foreach ($functions as $function)
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300 border-l-4 border-red-600">
              <div class="flex items-start gap-4">
                <div class="bg-red-100 text-red-600 rounded-full p-3 flex-shrink-0">
                  <i class="fas {{ $function->icon_class ?? 'fa-user-tie' }} text-2xl"></i>
                </div>
                <div>
                  <h4 class="text-xl font-bold text-gray-800 mb-3">{{ $function->position_name }}</h4>
                  <div class="text-gray-700 leading-relaxed prose-sm service-requirements">
                    {!! $function->description !!}
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    @endif
  </div>
</section>

<script>
  function openImageModal(imageSrc, caption) {
    document.getElementById('imageModal').classList.remove('hidden');
    document.getElementById('imageModal').classList.add('flex');
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('modalCaption').textContent = caption;
    document.body.style.overflow = 'hidden';
  }

  function closeImageModal() {
    document.getElementById('imageModal').classList.add('hidden');
    document.getElementById('imageModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
  }

  document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      closeImageModal();
    }
  });
</script>
