<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="mb-16">
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
        <div class="relative group cursor-pointer" onclick="openImageModal('{{ $historyVillage->history_image_url }}', 'Foto Desa Motoling Dua')">
          <img src="{{ $historyVillage->history_image_url }}" alt="Foto Historis Desa Motoling Dua" class="w-full h-64 md:h-96 object-cover transition-transform duration-300 group-hover:scale-105" loading="lazy">
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
            <p class="text-white text-center font-semibold">
              <i class="fas fa-camera mr-2"></i>
              Foto Desa Motoling Dua
            </p>
          </div>
          <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
            <div class="bg-white/90 rounded-full p-4 opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300">
              <i class="fas fa-search-plus text-red-600 text-2xl"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="imageModal" class="fixed inset-0 bg-black/90 z-50 hidden flex items-center justify-center p-4" onclick="closeImageModal()">
      <button class="absolute top-4 right-4 text-white hover:text-red-500 transition-colors" onclick="closeImageModal()">
        <i class="fas fa-times text-3xl"></i>
      </button>
      <div class="max-w-7xl max-h-full" onclick="event.stopPropagation()">
        <img id="modalImage" src="" alt="" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl">
        <p id="modalCaption" class="text-white text-center mt-4 text-lg font-semibold"></p>
      </div>
    </div>

    <div class="mb-16">
      <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 hover:shadow-2xl transition-shadow duration-300">
        <div class="flex items-center mb-6 pb-4 border-b-2 border-red-100">
          <div class="bg-red-100 text-red-600 rounded-full p-4 mr-4">
            <i class="fas fa-book-open text-2xl"></i>
          </div>
          <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Asal Usul Nama Desa</h3>
        </div>
        <div class="text-gray-700 leading-relaxed text-lg">
          {!! nl2br(e($historyVillage->origin_description ?? 'Belum ada deskripsi asal usul desa.')) !!}
        </div>
      </div>
    </div>

    @if ($timelineItems->isNotEmpty())
      <div class="mb-12">
        <div class="text-center mb-12">
          <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
            <i class="fas fa-clock text-red-600 mr-2"></i>
            Perjalanan Sejarah Desa
          </h3>
          <p class="text-gray-600">Kronologi perkembangan Desa Motoling Dua</p>
          <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>

        <div class="relative">
          <div class="absolute left-2 md:left-1/2 transform md:-translate-x-1/2 w-1 h-full bg-red-200"></div>

          <div class="space-y-8">
            @foreach ($timelineItems as $item)
              @if (!$loop->last)
                @if ($loop->iteration % 2 == 1)
                  <div class="relative flex items-center justify-start md:justify-between">
                    <div class="w-full md:w-6/12 md:text-right md:px-6 ml-6 md:ml-0">
                      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100">
                        <h4 class="text-xl font-bold text-red-600 mb-2">{{ $item->title }}</h4>
                        <p class="text-gray-600 leading-relaxed">
                          {{ $item->description }}
                        </p>
                      </div>
                    </div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white shadow-md"></div>
                    <div class="hidden md:block w-4/12"></div>
                  </div>
                @else
                  <div class="relative flex items-center justify-start md:justify-between">
                    <div class="hidden md:block w-4/12"></div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white shadow-md"></div>
                    <div class="w-full md:w-6/12 md:px-6 ml-6 md:ml-0">
                      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100">
                        <h4 class="text-xl font-bold text-red-600 mb-2">{{ $item->title }}</h4>
                        <p class="text-gray-600 leading-relaxed">
                          {{ $item->description }}
                        </p>
                      </div>
                    </div>
                  </div>
                @endif
              @endif

              @if ($loop->last)
                <div class="relative flex items-center justify-start md:justify-between">
                  @if ($loop->iteration % 2 == 1)
                    <div class="w-full md:w-6/12 md:text-right md:px-6 ml-6 md:ml-0">
                      <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 md:p-8 rounded-xl shadow-xl border-2 border-red-300 hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-center justify-center md:justify-end mb-3">
                          <span class="bg-green-600 text-white px-4 py-1 rounded-full text-sm font-semibold flex items-center">
                            <i class="fas fa-circle animate-pulse mr-2 text-xs"></i>
                            Sekarang
                          </span>
                        </div>
                        <h5 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">{{ $item->title }}</h5>
                        <p class="text-gray-700 leading-relaxed">
                          {{ $item->description }}
                        </p>
                      </div>
                    </div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-5 h-5 bg-green-600 rounded-full border-4 border-white animate-pulse shadow-lg"></div>
                    <div class="hidden md:block w-4/12"></div>
                  @else
                    <div class="hidden md:block w-4/12"></div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-5 h-5 bg-green-600 rounded-full border-4 border-white animate-pulse shadow-lg"></div>
                    <div class="w-full md:w-6/12 md:px-6 ml-6 md:ml-0">
                      <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 md:p-8 rounded-xl shadow-xl border-2 border-red-300 hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-center justify-center md:justify-start mb-3">
                          <span class="bg-green-600 text-white px-4 py-1 rounded-full text-sm font-semibold flex items-center">
                            <i class="fas fa-circle animate-pulse mr-2 text-xs"></i>
                            Sekarang
                          </span>
                        </div>
                        <h5 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">{{ $item->title }}</h5>
                        <p class="text-gray-700 leading-relaxed">
                          {{ $item->description }}
                        </p>
                      </div>
                    </div>
                  @endif
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    @else
      <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 border-2 border-yellow-300 rounded-2xl p-8 text-center shadow-lg">
        <div class="bg-yellow-200 text-yellow-700 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-info-circle text-3xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Data</h4>
        <p class="text-gray-600">Belum ada data timeline sejarah desa yang dapat ditampilkan.</p>
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
