<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="mb-12">
      <img src="{{ $historyVillage->history_image_url }}" alt="Foto Historis Desa Motoling Dua" class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
      <p class="text-center text-sm text-gray-600 mt-2 italic">
        Foto Desa Motoling Dua
      </p>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-8 mb-16">
      <div class="flex items-center mb-6">
        <i class="fas fa-history text-3xl text-red-600 mr-4"></i>
        <h3 class="text-2xl font-bold text-gray-800">Asal Usul Nama Desa</h3>
      </div>
      <div class="text-gray-700 leading-relaxed mb-4">
        {!! nl2br(e($historyVillage->origin_description ?? 'Belum ada deskripsi asal usul desa.')) !!}
      </div>
    </div>

    @if ($timelineItems->isNotEmpty())
      <div class="mb-12">
        <h3 class="text-2xl font-bold text-gray-800 mb-12 text-center">
          <i class="fas fa-clock text-red-600 mr-2"></i>
          Perjalanan Sejarah Desa Motoling Dua
        </h3>

        <div class="relative">
          <div class="absolute left-2 md:left-1/2 transform md:-translate-x-1/2 w-1 h-full bg-red-200"></div>

          <div class="space-y-8">
            @foreach ($timelineItems as $item)
              @if (!$loop->last)
                @if ($loop->iteration % 2 == 1)
                  <div class="relative flex items-center justify-start md:justify-between">
                    <div class="w-full md:w-6/12 md:text-right md:px-6 ml-6 md:ml-0">
                      <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold text-red-600 mb-2">{{ $item->title }}</h4>
                        <p class="text-gray-600">
                          {{ $item->description }}
                        </p>
                      </div>
                    </div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white"></div>
                    <div class="hidden md:block w-4/12"></div>
                  </div>
                @else
                  <div class="relative flex items-center justify-start md:justify-between">
                    <div class="hidden md:block w-4/12"></div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white"></div>
                    <div class="w-full md:w-6/12 md:px-6 ml-6 md:ml-0">
                      <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold text-red-600 mb-2">{{ $item->title }}</h4>
                        <p class="text-gray-600">
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
                      <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-lg shadow-lg border-2 border-red-300">
                        <h4 class="text-xl font-bold text-red-600 mb-2">Sekarang</h4>
                        <h5 class="text-lg font-semibold text-gray-800 mb-2">{{ $item->title }}</h5>
                        <p class="text-gray-700">
                          {{ $item->description }}
                        </p>
                      </div>
                    </div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-green-600 rounded-full border-4 border-white animate-pulse"></div>
                    <div class="hidden md:block w-4/12"></div>
                  @else
                    <div class="hidden md:block w-4/12"></div>
                    <div class="absolute left-0.5 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-green-600 rounded-full border-4 border-white animate-pulse"></div>
                    <div class="w-full md:w-6/12 md:px-6 ml-6 md:ml-0">
                      <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-lg shadow-lg border-2 border-red-300">
                        <h4 class="text-xl font-bold text-red-600 mb-2">Sekarang</h4>
                        <h5 class="text-lg font-semibold text-gray-800 mb-2">{{ $item->title }}</h5>
                        <p class="text-gray-700">
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
      <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 text-center">
        <i class="fas fa-info-circle text-yellow-600 text-3xl mb-3"></i>
        <p class="text-gray-700">Belum ada data timeline sejarah desa.</p>
      </div>
    @endif
  </div>
</section>
