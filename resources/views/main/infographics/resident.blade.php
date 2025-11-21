@php
  $colors = ['blue', 'red', 'green', 'indigo', 'purple', 'yellow', 'pink'];
@endphp

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-16">
      <div class="stat-card group bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border-t-4 border-red-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-users text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="{{ $residentStats->t_resident }}">0</h3>
        <p class="text-gray-600 font-semibold">Total Penduduk</p>
        <div class="mt-3 text-xs text-gray-500">
          <i class="fas fa-info-circle mr-1"></i>
          <span>Jiwa</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border-t-4 border-blue-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-male text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="{{ $residentStats->t_man }}">0</h3>
        <p class="text-gray-600 font-semibold">Laki-Laki</p>
        <div class="mt-3 text-xs text-blue-600 font-semibold">
          <i class="fas fa-chart-line mr-1"></i>
          <span class="counter-percentage" data-total="{{ $residentStats->t_resident }}" data-value="{{ $residentStats->t_man }}">0</span>%
        </div>
      </div>

      <div class="stat-card group bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border-t-4 border-pink-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-female text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="{{ $residentStats->t_woman }}">0</h3>
        <p class="text-gray-600 font-semibold">Perempuan</p>
        <div class="mt-3 text-xs text-pink-600 font-semibold">
          <i class="fas fa-chart-line mr-1"></i>
          <span class="counter-percentage" data-total="{{ $residentStats->t_resident }}" data-value="{{ $residentStats->t_woman }}">0</span>%
        </div>
      </div>

      <div class="stat-card group bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border-t-4 border-green-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-home text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="{{ $residentStats->t_head_of_family }}">0</h3>
        <p class="text-gray-600 font-semibold">Kepala Keluarga</p>
        <div class="mt-3 text-xs text-gray-500">
          <i class="fas fa-house-user mr-1"></i>
          <span>KK</span>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-8 mb-12">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="flex items-start justify-between mb-6">
          <div>
            <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 px-3 py-1 rounded-full mb-3 text-sm">
              <i class="fas fa-chart-bar text-xs"></i>
              <span class="font-semibold">Distribusi Umur</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Kelompok Umur</h3>
            <p class="text-gray-600 mt-2">Distribusi penduduk berdasarkan kelompok umur dan jenis kelamin</p>
          </div>
        </div>
        <div class="relative">
          <canvas id="ageGroupChart" class="w-full" style="max-height: 400px;"></canvas>
        </div>
        <div class="mt-6 pt-6 border-t border-gray-200">
          <div class="flex items-center justify-center gap-6 text-sm">
            <div class="flex items-center gap-2">
              <div class="w-4 h-4 bg-blue-500 rounded"></div>
              <span class="text-gray-600">Laki-Laki ({{ number_format(array_sum($ageMale), 0, ',', '.') }})</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-4 h-4 bg-pink-500 rounded"></div>
              <span class="text-gray-600">Perempuan ({{ number_format(array_sum($ageFemale), 0, ',', '.') }})</span>
            </div>
          </div>
        </div>

        <div class="bg-blue-50 border-l-4 border-blue-500 p-8 rounded-3xl shadow-xl mb-4 mt-12">
          <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 text-2xl mr-4 mt-1"></i>
            <div>
              <h3 class="font-bold text-lg text-gray-800 mb-2">Ringkasan Statistik</h3>
              @foreach ($ageSummaries as $ageSummary)
                @php
                  $color = $colors[($loop->iteration - 1) % count($colors)];
                @endphp

                <div class="text-gray-700 leading-relaxed mt-4">
                  <i class="fas fa-circle text-xs mr-2 text-{{ $color }}-600"></i>
                  {!! $ageSummary !!}
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="flex items-start justify-between mb-6">
          <div>
            <div class="inline-flex items-center gap-2 bg-purple-50 text-purple-600 px-3 py-1 rounded-full mb-3 text-sm">
              <i class="fas fa-pray text-xs"></i>
              <span class="font-semibold">Keagamaan</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Berdasarkan Agama</h3>
            <p class="text-gray-600 mt-2">Komposisi penduduk berdasarkan agama yang dianut</p>
          </div>
        </div>

        <div class="overflow-x-auto mb-6">
          <table class="w-full">
            <thead>
              <tr class="bg-gradient-to-r from-red-600 to-red-700 text-white">
                <th class="px-4 py-3 text-left rounded-tl-xl">Agama</th>
                <th class="px-4 py-3 text-right rounded-tr-xl">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($religions as $religion)
                @php
                  $color = $colors[($loop->iteration - 1) % count($colors)];
                @endphp

                <tr class="border-b border-gray-200 hover:bg-{{ $color }}-50 transition-colors">
                  <td class="px-4 py-3 font-semibold text-gray-800">
                    <i class="fas fa-circle text-xs mr-2 text-{{ $color }}-600"></i>
                    {{ $religion->religion->religion_name ?? '-' }}
                  </td>
                  <td class="px-4 py-3 text-right text-gray-800 font-bold">{{ number_format($religion->total, 0, ',', '.') }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="relative">
          <canvas id="religionChart" class="w-full" style="max-height: 300px;"></canvas>
        </div>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-orange-50 text-orange-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-briefcase text-xs"></i>
            <span class="font-semibold">Ketenagakerjaan</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Berdasarkan Pekerjaan</h3>
          <p class="text-gray-600 mt-2">10 pekerjaan teratas di Desa Motoling Dua</p>
        </div>
        <div class="overflow-x-auto" style="max-height: 600px;">
          <table class="w-full">
            <thead class="sticky top-0">
              <tr class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
                <th class="px-4 py-3 text-left rounded-tl-xl">Jenis Pekerjaan</th>
                <th class="px-4 py-3 text-right rounded-tr-xl">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($jobs as $job)
                @php
                  $color = $colors[($loop->iteration - 1) % count($colors)];
                @endphp

                <tr class="border-b border-gray-200 hover:bg-orange-50 transition-colors group">
                  <td class="px-4 py-3">
                    <div class="flex items-center gap-3">
                      <i class="fas fa-circle text-xs mr-2 text-{{ $color }}-600"></i>
                      <span class="font-semibold text-gray-800">{{ $job->job->job_name ?? 'Lainnya' }}</span>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-right">
                    <span class="inline-flex items-center gap-2 bg-{{ $color }}-100 text-{{ $color }}-800 px-3 py-1 rounded-full font-bold text-sm">
                      {{ number_format($job->total, 0, ',', '.') }}
                      <i class="fas fa-users text-xs"></i>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="flex items-start justify-between mb-6">
          <div>
            <div class="inline-flex items-center gap-2 bg-purple-50 text-purple-600 px-3 py-1 rounded-full mb-3 text-sm">
              <i class="fas fa-tree text-xs"></i>
              <span class="font-semibold">Lingkungan</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Berdasarkan Jaga</h3>
            <p class="text-gray-600 mt-2">Jumlah penduduk berdasarkan lingkungan jaga</p>
          </div>
        </div>

        <div class="overflow-x-auto mb-6">
          <table class="w-full">
            <thead>
              <tr class="bg-gradient-to-r from-red-600 to-red-700 text-white">
                <th class="px-4 py-3 text-left rounded-tl-xl">Jaga</th>
                <th class="px-4 py-3 text-right rounded-tr-xl">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($hamlets as $hamlet)
                @php
                  $color = $colors[($loop->iteration - 1) % count($colors)];
                @endphp

                <tr class="border-b border-gray-200 hover:bg-{{ $color }}-50 transition-colors">
                  <td class="px-4 py-3 font-semibold text-gray-800">
                    <i class="fas fa-circle text-xs mr-2 text-{{ $color }}-600"></i>
                    {{ $hamlet->hamlet->hamlet_name ?? '-' }}
                  </td>
                  <td class="px-4 py-3 text-right text-gray-800 font-bold">{{ number_format($hamlet->total, 0, ',', '.') }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="relative">
          <canvas id="hamletChart" class="w-full" style="max-height: 300px;"></canvas>
        </div>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-rose-50 text-rose-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-ring text-xs"></i>
            <span class="font-semibold">Status Nikah</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Berdasarkan Perkawinan</h3>
          <p class="text-gray-600 mt-2">Distribusi status perkawinan penduduk</p>
        </div>
        <div class="overflow-x-auto" style="max-height: 400px;">
          <table class="w-full">
            <thead class="sticky top-0">
              <tr class="bg-gradient-to-r from-rose-600 to-rose-700 text-white">
                <th class="px-4 py-3 text-left rounded-tl-xl">Status</th>
                <th class="px-4 py-3 text-right rounded-tr-xl">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($marriages as $marriage)
                @php
                  $color = $colors[($loop->iteration - 1) % count($colors)];
                @endphp

                <tr class="border-b border-gray-200 hover:bg-rose-50 transition-colors group">
                  <td class="px-4 py-3">
                    <div class="flex items-center gap-3">
                      <i class="fas fa-circle text-xs mr-2 text-{{ $color }}-600"></i>
                      <span class="font-semibold text-gray-800">{{ $marriage->marriage->marriage_name ?? 'Status' }}</span>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-right">
                    <span class="inline-flex items-center gap-2 bg-rose-100 text-rose-800 px-3 py-1 rounded-full font-bold text-sm">
                      {{ number_format($marriage->total, 0, ',', '.') }}
                      <i class="fas fa-users text-xs"></i>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-200">
          <canvas id="marriageChart" class="w-full" style="max-height: 250px;"></canvas>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-2 gap-8 mb-12">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-orange-50 text-orange-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-school text-xs"></i>
            <span class="font-semibold">Pendidikan</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Berdasarkan Pendidikan</h3>
          <p class="text-gray-600 mt-2">Jumlah berdasarkan pendidikan penduduk</p>
        </div>
        <div class="relative">
          <canvas id="educationChart" style="max-height: 350px;"></canvas>
        </div>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-teal-50 text-teal-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-vote-yea text-xs"></i>
            <span class="font-semibold">Demokrasi</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Data Wajib Pilih</h3>
          <p class="text-gray-600 mt-2">Tren jumlah wajib pilih per tahun</p>
        </div>

        <div class="mb-4 overflow-x-auto">
          <table class="w-full text-sm text-left">
            <thead class="text-xs text-gray-700 uppercase bg-teal-50">
              <tr>
                <th class="px-4 py-2 rounded-l-lg">Tahun</th>
                <th class="px-4 py-2 rounded-r-lg text-right">Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mustSelects as $ms)
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-2 font-medium">{{ $ms->year }}</td>
                  <td class="px-4 py-2 text-right font-bold text-teal-600">{{ number_format($ms->total, 0, ',', '.') }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="relative">
          <canvas id="mustSelectChart" style="max-height: 250px;"></canvas>
        </div>
      </div>
    </div>

  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  window.ResidentData = {
    ageLabels: {!! json_encode($ageLabels) !!},
    ageMale: {!! json_encode($ageMale) !!},
    ageFemale: {!! json_encode($ageFemale) !!},

    religionLabels: {!! json_encode($religionLabels) !!},
    religionTotals: {!! json_encode($religionTotals) !!},

    marriageLabels: {!! json_encode($marriageLabels) !!},
    marriageTotals: {!! json_encode($marriageTotals) !!},

    hamletLabels: {!! json_encode($hamletLabels) !!},
    hamletTotals: {!! json_encode($hamletTotals) !!},

    educationLabels: {!! json_encode($educationLabels) !!},
    educationTotals: {!! json_encode($educationTotals) !!},

    mustSelectLabels: {!! json_encode($mustSelectLabels) !!},
    mustSelectTotals: {!! json_encode($mustSelectTotals) !!},
  };
</script>

<script src="{{ asset('main/js/script-infographics-resident.js') }}"></script>
