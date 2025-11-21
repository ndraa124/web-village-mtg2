@php
  $colors = ['red', 'blue', 'green', 'purple', 'orange', 'teal', 'pink'];
  $icons = ['building', 'hammer', 'users', 'hands-helping', 'exclamation-triangle', 'tree', 'road'];
@endphp

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-red-600 hover:scale-105 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-arrow-down text-2xl text-white"></i>
          </div>
        </div>
        <div class="mb-3">
          <p class="text-sm text-gray-500 font-semibold mb-1">Total Pendapatan</p>
          <h3 class="text-3xl font-bold text-gray-800">
            Rp <span class="counter" data-target="{{ round($apbdStats->income / 1000000) }}">0</span> Jt
          </h3>
          <p class="text-xs text-red-600 font-semibold mt-1">
            <span class="counter-small" data-target="{{ $apbdStats->income }}">0</span>
          </p>
        </div>
        <div class="pt-3 border-t border-gray-200">
          <p class="text-xs text-gray-500">
            <i class="fas fa-info-circle mr-1"></i>
            Sumber pendapatan desa
          </p>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-blue-600 hover:scale-105 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-arrow-up text-2xl text-white"></i>
          </div>
        </div>
        <div class="mb-3">
          <p class="text-sm text-gray-500 font-semibold mb-1">Total Belanja</p>
          <h3 class="text-3xl font-bold text-gray-800">
            Rp <span class="counter" data-target="{{ round($apbdStats->shopping / 1000000) }}">0</span> Jt
          </h3>
          <p class="text-xs text-blue-600 font-semibold mt-1">
            <span class="counter-small" data-target="{{ $apbdStats->shopping }}">0</span>
          </p>
        </div>
        <div class="pt-3 border-t border-gray-200">
          <p class="text-xs text-gray-500">
            <i class="fas fa-info-circle mr-1"></i>
            Alokasi belanja desa
          </p>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-yellow-600 hover:scale-105 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-plus text-2xl text-white"></i>
          </div>
        </div>
        <div class="mb-3">
          <p class="text-sm text-gray-500 font-semibold mb-1">Penerimaan Pembiayaan</p>
          <h3 class="text-3xl font-bold text-gray-800">
            Rp <span class="counter" data-target="{{ round($apbdStats->financing / 1000000) }}">0</span> Jt
          </h3>
          <p class="text-xs text-yellow-600 font-semibold mt-1">
            <span class="counter-small" data-target="{{ $apbdStats->financing }}">0</span>
          </p>
        </div>
        <div class="pt-3 border-t border-gray-200">
          <p class="text-xs text-gray-500">
            <i class="fas fa-info-circle mr-1"></i>
            Contoh: SILPA
          </p>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-green-600 hover:scale-105 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-minus text-2xl text-white"></i>
          </div>
        </div>
        <div class="mb-3">
          <p class="text-sm text-gray-500 font-semibold mb-1">Pengeluaran Pembiayaan</p>
          <h3 class="text-3xl font-bold text-gray-800">
            Rp <span class="counter" data-target="{{ round($apbdStats->expenditure / 1000000) }}">0</span> Jt
          </h3>
          <p class="text-xs text-green-600 font-semibold mt-1">
            <span class="counter-small" data-target="{{ $apbdStats->expenditure }}">0</span>
          </p>
        </div>
        <div class="pt-3 border-t border-gray-200">
          <p class="text-xs text-gray-500">
            <i class="fas fa-info-circle mr-1"></i>
            Penyertaan modal
          </p>
        </div>
      </div>
    </div>

    <div class="mb-16">
      <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-3xl p-8 shadow-xl border-l-4 border-purple-600">
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0">
            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
              <i class="fas fa-calculator text-white text-2xl"></i>
            </div>
          </div>
          <div class="flex-1">
            <h4 class="text-2xl font-bold text-purple-800 mb-2">Selisih Anggaran</h4>
            <div class="grid md:grid-cols-3 gap-4 mt-4">
              <div class="bg-white rounded-xl p-4 shadow-md">
                <p class="text-sm text-gray-600 mb-1">Pendapatan + Penerimaan</p>
                <p class="text-2xl font-bold text-green-600">
                  Rp <span class="counter" data-target="{{ $totalPenerimaan }}">0</span>
                </p>
              </div>
              <div class="bg-white rounded-xl p-4 shadow-md">
                <p class="text-sm text-gray-600 mb-1">Belanja + Pengeluaran</p>
                <p class="text-2xl font-bold text-red-600">
                  Rp <span class="counter" data-target="{{ $totalPengeluaran }}">0</span>
                </p>
              </div>
              <div class="bg-white rounded-xl p-4 shadow-md">
                <p class="text-sm text-gray-600 mb-1">Selisih (Surplus/Defisit)</p>
                <p class="text-2xl font-bold {{ $selisih >= 0 ? 'text-purple-600' : 'text-red-600' }}">
                  Rp <span class="counter" data-target="{{ abs($selisih) }}">0</span>
                </p>
                <p class="text-xs text-gray-500 mt-1">
                  @if ($selisih == 0)
                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Anggaran Berimbang
                  @elseif($selisih > 0)
                    <i class="fas fa-arrow-up text-green-500 mr-1"></i> Surplus Anggaran
                  @else
                    <i class="fas fa-arrow-down text-red-500 mr-1"></i> Defisit Anggaran
                  @endif
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="flex items-start justify-between mb-6">
          <div>
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 px-3 py-1 rounded-full mb-3 text-sm">
              <i class="fas fa-chart-pie text-xs"></i>
              <span class="font-semibold">Sumber Dana</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Rincian Pendapatan Desa</h3>
            <p class="text-gray-600 mt-2">Komposisi sumber pendapatan desa tahun {{ $year }}</p>
          </div>
        </div>
        <div class="relative">
          <canvas id="pendapatanChart" class="w-full" style="max-height: 350px;"></canvas>
        </div>

        <div class="mt-6 pt-6 border-t border-gray-200 space-y-3">
          @foreach ($incomes as $idx => $inc)
            @php $color = $colors[$idx % count($colors)]; @endphp

            <div class="flex items-center justify-between text-sm">
              <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-gray-200 income-legend-dot" data-index="{{ $idx }}"></div>
                <span class="text-gray-700 font-semibold">{{ $inc->income->income_name ?? 'Lainnya' }}</span>
              </div>
              <span class="text-gray-800 font-bold">Rp {{ number_format($inc->budget, 0, ',', '.') }}</span>
            </div>
          @endforeach
        </div>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="flex items-start justify-between mb-6">
          <div>
            <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 px-3 py-1 rounded-full mb-3 text-sm">
              <i class="fas fa-chart-bar text-xs"></i>
              <span class="font-semibold">Alokasi Anggaran</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Rincian Belanja Desa</h3>
            <p class="text-gray-600 mt-2">Distribusi belanja berdasarkan bidang</p>
          </div>
        </div>
        <div class="relative">
          <canvas id="belanjaChart" class="w-full" style="max-height: 350px;"></canvas>
        </div>

        <div class="mt-6 pt-6 border-t border-gray-200">
          <div class="grid grid-cols-2 gap-4">
            <div class="bg-blue-50 rounded-xl p-3 text-center">
              <p class="text-xs text-gray-600 mb-1">Terbesar</p>
              <p class="text-sm font-bold text-blue-600">
                {{ $shoppings->first()->shopping->shopping_name ?? '-' }}
              </p>
              <p class="text-xs text-gray-500">
                Rp {{ number_format(($shoppings->first()->budget ?? 0) / 1000000, 0, ',', '.') }} Jt
              </p>
            </div>
            <div class="bg-green-50 rounded-xl p-3 text-center">
              <p class="text-xs text-gray-600 mb-1">Total Bidang</p>
              <p class="text-2xl font-bold text-green-600">{{ $shoppings->count() }}</p>
              <p class="text-xs text-gray-500">Bidang</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-list-ul text-xs"></i>
            <span class="font-semibold">Detail Anggaran</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Rincian Per Bidang</h3>
          <p class="text-gray-600 mt-2">Breakdown belanja per kategori kegiatan</p>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white">
                <th class="px-4 py-3 text-left rounded-tl-xl text-sm">Bidang Belanja</th>
                <th class="px-4 py-3 text-right rounded-tr-xl text-sm">Anggaran</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($shoppings as $index => $shop)
                @php
                  $color = $colors[$index % count($colors)];
                  $icon = $icons[$index % count($icons)];
                @endphp
                <tr class="border-b border-gray-200 hover:bg-{{ $color }}-50 transition-colors group">
                  <td class="px-4 py-4">
                    <div class="flex items-center gap-3">
                      <div class="w-10 h-10 bg-gradient-to-br from-{{ $color }}-500 to-{{ $color }}-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i class="fas fa-{{ $icon }} text-white text-sm"></i>
                      </div>
                      <div>
                        <p class="font-semibold text-gray-800 text-sm">{{ $shop->shopping->shopping_name ?? 'Belanja Lainnya' }}</p>
                        <p class="text-xs text-gray-500">{{ number_format($shop->percent, 1) }}% dari total belanja</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-4 text-right">
                    <span class="inline-flex items-center gap-2 bg-{{ $color }}-100 text-{{ $color }}-800 px-3 py-1 rounded-full font-bold text-sm whitespace-nowrap">
                      {{ number_format($shop->budget / 1000000, 0, ',', '.') }} Jt
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="space-y-8">
        <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
          <div class="mb-6">
            <div class="inline-flex items-center gap-2 bg-green-50 text-green-600 px-3 py-1 rounded-full mb-3 text-sm">
              <i class="fas fa-wallet text-xs"></i>
              <span class="font-semibold">Pembiayaan</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Rincian Pembiayaan Desa</h3>
            <p class="text-gray-600 mt-2">Sumber pembiayaan tambahan (Penerimaan)</p>
          </div>
          <div class="relative">
            <canvas id="pembiayaanChart" class="w-full" style="max-height: 250px;"></canvas>
          </div>

          @foreach ($financings as $fin)
            <div class="mt-4 bg-green-50 rounded-xl p-4 mb-2">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-piggy-bank text-white"></i>
                  </div>
                  <div>
                    <p class="text-sm text-gray-600">{{ $fin->financing->financing_name ?? 'Pembiayaan' }}</p>
                    <p class="text-xs text-gray-500">Sumber penerimaan</p>
                  </div>
                </div>
                <p class="text-lg font-bold text-green-600 whitespace-nowrap">
                  Rp {{ number_format($fin->budget / 1000000, 0, ',', '.') }} Jt
                </p>
              </div>
            </div>
          @endforeach
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8">
          <div class="mb-6">
            <div class="inline-flex items-center gap-2 bg-yellow-50 text-yellow-600 px-3 py-1 rounded-full mb-3 text-sm">
              <i class="fas fa-check-circle text-xs"></i>
              <span class="font-semibold">Status Realisasi</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Realisasi APBDes</h3>
          </div>

          @if ($realizations->count() > 0)
            <div class="relative mb-6">
              <canvas id="realisasiChart" class="w-full" style="max-height: 300px;"></canvas>
            </div>
          @else
            <div class="bg-gradient-to-br from-yellow-50 to-orange-50 border-l-4 border-yellow-500 p-6 rounded-2xl text-center">
              <div class="w-16 h-16 bg-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-clock text-white text-2xl"></i>
              </div>
              <p class="text-yellow-800 font-bold text-lg mb-2">Data Belum Tersedia</p>
              <p class="text-yellow-700 text-sm leading-relaxed">
                Data realisasi pembangunan fisik untuk tahun {{ $year }} belum diinput atau kegiatan belum dimulai.
              </p>
            </div>
          @endif

        </div>
      </div>
    </div>

    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 border-l-4 border-blue-500 p-8 rounded-3xl shadow-xl">
      <div class="flex items-start gap-6">
        <div class="flex-shrink-0">
          <div class="w-14 h-14 bg-blue-500 rounded-2xl flex items-center justify-center">
            <i class="fas fa-lightbulb text-white text-2xl"></i>
          </div>
        </div>
        <div>
          <h4 class="text-2xl font-bold text-blue-800 mb-3">Informasi Penting</h4>
          <div class="space-y-2 text-blue-700">
            <p class="flex items-start gap-2">
              <i class="fas fa-check-circle text-blue-500 mt-1"></i>
              <span>Data APBDes ini merupakan anggaran yang telah ditetapkan untuk tahun anggaran {{ $year }}</span>
            </p>
            <p class="flex items-start gap-2">
              <i class="fas fa-check-circle text-blue-500 mt-1"></i>
              <span>Realisasi anggaran akan dipublikasikan secara berkala setiap triwulan</span>
            </p>
            <p class="flex items-start gap-2">
              <i class="fas fa-check-circle text-blue-500 mt-1"></i>
              <span>Untuk informasi lebih detail, silakan kunjungi kantor desa atau hubungi perangkat desa</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  window.ApbdData = {
    incomeLabels: {!! json_encode($incomeLabels) !!},
    incomeTotals: {!! json_encode($incomeTotals) !!},

    shoppingLabels: {!! json_encode($shoppingLabels) !!},
    shoppingTotals: {!! json_encode($shoppingTotals) !!},

    financingLabels: {!! json_encode($financingLabels) !!},
    financingTotals: {!! json_encode($financingTotals) !!},

    realizationLabels: {!! json_encode($realizationLabels) !!},
    realizationValues: {!! json_encode($realizationValues) !!}
  };
</script>

<script src="{{ asset('main/js/script-infographics-apbd.js') }}"></script>
