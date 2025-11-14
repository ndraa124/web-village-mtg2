<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-red-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-child text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="452">0</h3>
        <p class="text-gray-600 font-semibold">Total Balita</p>
        <div class="mt-3 text-xs text-gray-500">
          <i class="fas fa-info-circle mr-1"></i>
          <span>Usia 0-59 bulan</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-yellow-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-exclamation-circle text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="68">0</h3>
        <p class="text-gray-600 font-semibold">Kasus Stunting</p>
        <div class="mt-3 text-xs text-yellow-600 font-semibold">
          <i class="fas fa-medkit mr-1"></i>
          <span>Perlu penanganan</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-green-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-check-circle text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="384">0</h3>
        <p class="text-gray-600 font-semibold">Gizi Normal</p>
        <div class="mt-3 text-xs text-green-600 font-semibold">
          <i class="fas fa-heart mr-1"></i>
          <span>Status baik</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-blue-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-percentage text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 mb-2">
          <span class="counter" data-target="15">0</span>%
        </h3>
        <p class="text-gray-600 font-semibold">Prevalensi Stunting</p>
        <div class="mt-3 text-xs text-gray-500">
          <i class="fas fa-bullseye mr-1"></i>
          <span>Target: < 14%</span>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl p-8 mb-16 hover:shadow-2xl transition-all duration-500">
      <div class="mb-6">
        <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 px-3 py-1 rounded-full mb-3 text-sm">
          <i class="fas fa-chart-line text-xs"></i>
          <span class="font-semibold">Monitoring Bulanan</span>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">Tren Penurunan Stunting 2024</h3>
        <p class="text-gray-600 mt-2">Grafik perkembangan prevalensi stunting sepanjang tahun</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <canvas id="stuntingTrendChart" style="max-height: 350px;"></canvas>
        </div>
        <div class="flex items-center">
          <div class="w-full space-y-6">
            <div>
              <h4 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                Progress Pencapaian Target
              </h4>
              <div class="space-y-4">
                <div class="bg-gray-50 rounded-2xl p-4">
                  <div class="flex justify-between mb-2">
                    <span class="text-gray-600 font-semibold">Target 2024</span>
                    <span class="text-2xl font-bold text-green-600">14%</span>
                  </div>
                  <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 h-4 rounded-full flex items-center justify-end pr-2" style="width: 85%">
                      <span class="text-xs text-white font-bold">85%</span>
                    </div>
                  </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-4">
                  <div class="flex justify-between mb-2">
                    <span class="text-gray-600 font-semibold">Capaian Saat Ini</span>
                    <span class="text-2xl font-bold text-orange-600">15%</span>
                  </div>
                  <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 h-4 rounded-full flex items-center justify-end pr-2" style="width: 78%">
                      <span class="text-xs text-white font-bold">78%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 border-l-4 border-blue-500 p-4 rounded-2xl">
              <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-blue-500 text-xl mt-1"></i>
                <p class="text-sm text-blue-800 leading-relaxed">
                  Desa Motoling Dua berkomitmen menurunkan angka stunting sesuai target nasional melalui program intervensi gizi dan kesehatan berkelanjutan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-16">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-purple-50 text-purple-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-chart-pie text-xs"></i>
            <span class="font-semibold">Distribusi Status</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Status Gizi Balita</h3>
          <p class="text-gray-600 mt-2">Komposisi status gizi di seluruh balita</p>
        </div>
        <div class="relative">
          <canvas id="nutritionStatusChart" style="max-height: 350px;"></canvas>
        </div>

        <div class="mt-6 pt-6 border-t border-gray-200 grid grid-cols-2 gap-3">
          <div class="flex items-center justify-between bg-green-50 rounded-xl p-3">
            <div class="flex items-center gap-2">
              <div class="w-4 h-4 bg-green-500 rounded"></div>
              <span class="text-sm text-gray-700 font-semibold">Gizi Baik</span>
            </div>
            <span class="text-lg font-bold text-green-600">326</span>
          </div>
          <div class="flex items-center justify-between bg-red-50 rounded-xl p-3">
            <div class="flex items-center gap-2">
              <div class="w-4 h-4 bg-red-500 rounded"></div>
              <span class="text-sm text-gray-700 font-semibold">Stunting</span>
            </div>
            <span class="text-lg font-bold text-red-600">68</span>
          </div>
          <div class="flex items-center justify-between bg-yellow-50 rounded-xl p-3">
            <div class="flex items-center gap-2">
              <div class="w-4 h-4 bg-yellow-500 rounded"></div>
              <span class="text-sm text-gray-700 font-semibold">Gizi Kurang</span>
            </div>
            <span class="text-lg font-bold text-yellow-600">45</span>
          </div>
          <div class="flex items-center justify-between bg-blue-50 rounded-xl p-3">
            <div class="flex items-center gap-2">
              <div class="w-4 h-4 bg-blue-500 rounded"></div>
              <span class="text-sm text-gray-700 font-semibold">Gizi Lebih</span>
            </div>
            <span class="text-lg font-bold text-blue-600">13</span>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-orange-50 text-orange-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-users text-xs"></i>
            <span class="font-semibold">Per Kelompok Umur</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Stunting Berdasarkan Usia</h3>
          <p class="text-gray-600 mt-2">Distribusi kasus stunting per kelompok usia</p>
        </div>
        <div class="relative">
          <canvas id="ageGroupChart" style="max-height: 350px;"></canvas>
        </div>

        <div class="mt-6 pt-6 border-t border-gray-200">
          <div class="grid grid-cols-2 gap-4">
            <div class="bg-red-50 rounded-xl p-3 text-center">
              <p class="text-xs text-gray-600 mb-1">Usia Tertinggi</p>
              <p class="text-lg font-bold text-red-600">13-24 bulan</p>
              <p class="text-xs text-gray-500">23 kasus</p>
            </div>
            <div class="bg-green-50 rounded-xl p-3 text-center">
              <p class="text-xs text-gray-600 mb-1">Total Kasus</p>
              <p class="text-3xl font-bold text-green-600">68</p>
              <p class="text-xs text-gray-500">balita</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl p-8 mb-16 hover:shadow-2xl transition-all duration-500">
      <div class="mb-8">
        <div class="inline-flex items-center gap-2 bg-yellow-50 text-yellow-600 px-3 py-1 rounded-full mb-3 text-sm">
          <i class="fas fa-exclamation-triangle text-xs"></i>
          <span class="font-semibold">Indikator Kesehatan</span>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">Faktor Risiko Stunting</h3>
        <p class="text-gray-600 mt-2">Monitoring faktor-faktor yang mempengaruhi stunting</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center group">
          <div class="relative mx-auto w-40 h-40 mb-6">
            <svg class="w-40 h-40 transform -rotate-90">
              <circle cx="80" cy="80" r="70" stroke="#e5e7eb" stroke-width="14" fill="none"></circle>
              <circle cx="80" cy="80" r="70" stroke="url(#gradient-red)" stroke-width="14" fill="none" stroke-dasharray="440" stroke-dashoffset="132" class="transition-all duration-1000 ease-out" stroke-linecap="round"></circle>
              <defs>
                <linearGradient id="gradient-red" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#ef4444;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#dc2626;stop-opacity:1" />
                </linearGradient>
              </defs>
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
              <span class="text-4xl font-bold text-gray-800 counter-percentage" data-target="70">0</span>
              <span class="text-2xl font-bold text-gray-800">%</span>
            </div>
          </div>
          <div class="bg-red-50 rounded-2xl p-4">
            <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-3">
              <i class="fas fa-baby-carriage text-white text-xl"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-2">ASI Eksklusif</h4>
            <p class="text-sm text-gray-600">Pemberian ASI eksklusif 6 bulan pertama</p>
          </div>
        </div>

        <div class="text-center group">
          <div class="relative mx-auto w-40 h-40 mb-6">
            <svg class="w-40 h-40 transform -rotate-90">
              <circle cx="80" cy="80" r="70" stroke="#e5e7eb" stroke-width="14" fill="none"></circle>
              <circle cx="80" cy="80" r="70" stroke="url(#gradient-green)" stroke-width="14" fill="none" stroke-dasharray="440" stroke-dashoffset="88" class="transition-all duration-1000 ease-out" stroke-linecap="round"></circle>
              <defs>
                <linearGradient id="gradient-green" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#22c55e;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#16a34a;stop-opacity:1" />
                </linearGradient>
              </defs>
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
              <span class="text-4xl font-bold text-gray-800 counter-percentage" data-target="80">0</span>
              <span class="text-2xl font-bold text-gray-800">%</span>
            </div>
          </div>
          <div class="bg-green-50 rounded-2xl p-4">
            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-3">
              <i class="fas fa-syringe text-white text-xl"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-2">Imunisasi Lengkap</h4>
            <p class="text-sm text-gray-600">Balita dengan imunisasi dasar lengkap</p>
          </div>
        </div>

        <div class="text-center group">
          <div class="relative mx-auto w-40 h-40 mb-6">
            <svg class="w-40 h-40 transform -rotate-90">
              <circle cx="80" cy="80" r="70" stroke="#e5e7eb" stroke-width="14" fill="none"></circle>
              <circle cx="80" cy="80" r="70" stroke="url(#gradient-blue)" stroke-width="14" fill="none" stroke-dasharray="440" stroke-dashoffset="220" class="transition-all duration-1000 ease-out" stroke-linecap="round"></circle>
              <defs>
                <linearGradient id="gradient-blue" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#2563eb;stop-opacity:1" />
                </linearGradient>
              </defs>
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
              <span class="text-4xl font-bold text-gray-800 counter-percentage" data-target="50">0</span>
              <span class="text-2xl font-bold text-gray-800">%</span>
            </div>
          </div>
          <div class="bg-blue-50 rounded-2xl p-4">
            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-3">
              <i class="fas fa-hands-wash text-white text-xl"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-2">Sanitasi Layak</h4>
            <p class="text-sm text-gray-600">Rumah tangga dengan sanitasi memadai</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl p-8 mb-16 hover:shadow-2xl transition-all duration-500">
      <div class="mb-6">
        <div class="inline-flex items-center gap-2 bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full mb-3 text-sm">
          <i class="fas fa-map-marked-alt text-xs"></i>
          <span class="font-semibold">Data Wilayah</span>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">Rincian Data Per Dusun</h3>
        <p class="text-gray-600 mt-2">Distribusi kasus stunting berdasarkan wilayah dusun</p>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white">
              <th class="px-4 py-4 text-left rounded-tl-xl text-sm">Dusun</th>
              <th class="px-4 py-4 text-center text-sm">Total Balita</th>
              <th class="px-4 py-4 text-center text-sm">Stunting</th>
              <th class="px-4 py-4 text-center text-sm">Gizi Kurang</th>
              <th class="px-4 py-4 text-center text-sm">Gizi Baik</th>
              <th class="px-4 py-4 text-center text-sm">Gizi Lebih</th>
              <th class="px-4 py-4 text-center text-sm">Prevalensi</th>
              <th class="px-4 py-4 text-center rounded-tr-xl text-sm">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-gray-200 hover:bg-yellow-50 transition-colors">
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-white"></i>
                  </div>
                  <span class="font-semibold text-gray-800">Dusun I</span>
                </div>
              </td>
              <td class="px-4 py-4 text-center font-semibold text-gray-800">156</td>
              <td class="px-4 py-4 text-center">
                <span class="inline-flex items-center gap-2 bg-red-100 text-red-800 px-3 py-1 rounded-full font-bold text-sm">
                  28
                </span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-yellow-600 font-semibold">15</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-green-600 font-semibold">108</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-blue-600 font-semibold">5</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full font-semibold text-sm">17.9%</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-semibold">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  Waspada
                </span>
              </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-green-50 transition-colors">
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-white"></i>
                  </div>
                  <span class="font-semibold text-gray-800">Dusun II</span>
                </div>
              </td>
              <td class="px-4 py-4 text-center font-semibold text-gray-800">148</td>
              <td class="px-4 py-4 text-center">
                <span class="inline-flex items-center gap-2 bg-red-100 text-red-800 px-3 py-1 rounded-full font-bold text-sm">
                  20
                </span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-yellow-600 font-semibold">12</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-green-600 font-semibold">112</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-blue-600 font-semibold">4</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold text-sm">13.5%</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                  <i class="fas fa-check-circle mr-1"></i>
                  Baik
                </span>
              </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-green-50 transition-colors">
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-white"></i>
                  </div>
                  <span class="font-semibold text-gray-800">Dusun III</span>
                </div>
              </td>
              <td class="px-4 py-4 text-center font-semibold text-gray-800">148</td>
              <td class="px-4 py-4 text-center">
                <span class="inline-flex items-center gap-2 bg-red-100 text-red-800 px-3 py-1 rounded-full font-bold text-sm">
                  20
                </span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-yellow-600 font-semibold">18</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-green-600 font-semibold">106</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="text-blue-600 font-semibold">4</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold text-sm">13.5%</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                  <i class="fas fa-check-circle mr-1"></i>
                  Baik
                </span>
              </td>
            </tr>
            <tr class="bg-gradient-to-r from-gray-100 to-gray-200 font-bold">
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-gradient-to-br from-gray-700 to-gray-800 rounded-xl flex items-center justify-center">
                    <i class="fas fa-calculator text-white"></i>
                  </div>
                  <span class="text-gray-800">TOTAL</span>
                </div>
              </td>
              <td class="px-4 py-4 text-center text-gray-800">452</td>
              <td class="px-4 py-4 text-center">
                <span class="inline-flex items-center gap-2 bg-red-600 text-white px-4 py-2 rounded-full font-bold">
                  68
                </span>
              </td>
              <td class="px-4 py-4 text-center text-yellow-600">45</td>
              <td class="px-4 py-4 text-center text-green-600">326</td>
              <td class="px-4 py-4 text-center text-blue-600">13</td>
              <td class="px-4 py-4 text-center">
                <span class="bg-yellow-500 text-white px-4 py-2 rounded-full font-bold">15.0%</span>
              </td>
              <td class="px-4 py-4 text-center">
                <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-bold">
                  Target 14%
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="bg-gradient-to-br from-red-600 via-red-700 to-orange-700 rounded-3xl p-12 text-white text-center mb-16 shadow-2xl relative overflow-hidden">
      <div class="absolute inset-0 bg-black/10"></div>
      <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
      <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>

      <div class="relative z-10">
        <div class="w-20 h-20 bg-white/20 rounded-3xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
          <i class="fas fa-hands-helping text-5xl text-white"></i>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold mb-4">Bersama Cegah Stunting</h3>
        <p class="mb-8 text-white/90 max-w-2xl mx-auto text-lg">
          Mari bersama-sama mewujudkan generasi sehat dan cerdas. Stunting dapat dicegah dengan pola asuh yang baik, makanan bergizi, dan lingkungan yang bersih.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="#" class="inline-flex items-center gap-2 bg-white text-red-600 px-8 py-4 rounded-2xl font-bold hover:bg-red-50 transition-all hover:scale-105 shadow-xl">
            <i class="fas fa-download"></i>
            Download Data Lengkap
          </a>
          <a href="#" class="inline-flex items-center gap-2 bg-red-700 text-white px-8 py-4 rounded-2xl font-bold hover:bg-red-800 transition-all hover:scale-105 border-2 border-white shadow-xl">
            <i class="fas fa-phone-alt"></i>
            Hubungi Posyandu
          </a>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-3xl shadow-xl p-8 border-l-4 border-green-600 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6">
          <i class="fas fa-lightbulb text-white text-3xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-4">Tips Pencegahan</h4>
        <ul class="space-y-3">
          <li class="flex items-start gap-3">
            <i class="fas fa-check-circle text-green-500 mt-1"></i>
            <span class="text-gray-700">ASI eksklusif 6 bulan pertama</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-check-circle text-green-500 mt-1"></i>
            <span class="text-gray-700">MPASI bergizi seimbang</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-check-circle text-green-500 mt-1"></i>
            <span class="text-gray-700">Imunisasi dasar lengkap</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-check-circle text-green-500 mt-1"></i>
            <span class="text-gray-700">Pola hidup bersih dan sehat</span>
          </li>
        </ul>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 border-l-4 border-blue-600 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
          <i class="fas fa-stethoscope text-white text-3xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-4">Layanan Kesehatan</h4>
        <ul class="space-y-3">
          <li class="flex items-start gap-3">
            <i class="fas fa-calendar-check text-blue-500 mt-1"></i>
            <span class="text-gray-700">Posyandu rutin setiap bulan</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-child text-blue-500 mt-1"></i>
            <span class="text-gray-700">Pemeriksaan tumbuh kembang</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-utensils text-blue-500 mt-1"></i>
            <span class="text-gray-700">Konsultasi gizi gratis</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-hospital text-blue-500 mt-1"></i>
            <span class="text-gray-700">Rujukan ke Puskesmas</span>
          </li>
        </ul>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 border-l-4 border-purple-600 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
          <i class="fas fa-phone-volume text-white text-3xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-4">Kontak Darurat</h4>
        <ul class="space-y-3">
          <li class="flex items-start gap-3">
            <i class="fas fa-phone text-purple-500 mt-1"></i>
            <span class="text-gray-700">Posyandu: 0812-3456-7890</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-hospital-alt text-purple-500 mt-1"></i>
            <span class="text-gray-700">Puskesmas: (021) 1234-5678</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-ambulance text-purple-500 mt-1"></i>
            <span class="text-gray-700">Ambulance: 119</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fab fa-whatsapp text-purple-500 mt-1"></i>
            <span class="text-gray-700">WhatsApp: 0812-3456-7890</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    // ========================================
    // 1. COUNTER ANIMATION
    // ========================================
    const counters = document.querySelectorAll('.counter');
    const counterSpeed = 200;

    const animateCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const increment = target / counterSpeed;

      const updateCounter = () => {
        const current = +counter.innerText;
        if (current < target) {
          counter.innerText = Math.ceil(current + increment);
          setTimeout(updateCounter, 10);
        } else {
          counter.innerText = target;
        }
      };
      updateCounter();
    };

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.5
    });

    counters.forEach(counter => counterObserver.observe(counter));

    const percentageCounters = document.querySelectorAll('.counter-percentage');
    percentageCounters.forEach(counter => {
      const pctObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const target = +counter.getAttribute('data-target');
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
              current += increment;
              if (current >= target) {
                counter.innerText = target;
                clearInterval(timer);
              } else {
                counter.innerText = Math.ceil(current);
              }
            }, 15);
            pctObserver.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.5
      });
      pctObserver.observe(counter);
    });

    // ========================================
    // 2. CHART - TREN STUNTING (Line Chart)
    // ========================================
    const ctx1 = document.getElementById('stuntingTrendChart');
    if (ctx1) {
      new Chart(ctx1.getContext('2d'), {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'],
          datasets: [{
            label: 'Prevalensi Stunting (%)',
            data: [22, 21.5, 20.8, 19.5, 18.7, 18.2, 17.5, 16.8, 16.2, 15.7, 15.3, 15.0],
            borderColor: 'rgb(220, 38, 38)',
            backgroundColor: 'rgba(220, 38, 38, 0.1)',
            tension: 0.4,
            fill: true,
            borderWidth: 3,
            pointRadius: 5,
            pointHoverRadius: 7,
            pointBackgroundColor: 'rgb(220, 38, 38)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2
          }, {
            label: 'Target (%)',
            data: [14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14],
            borderColor: 'rgb(34, 197, 94)',
            borderDash: [8, 4],
            tension: 0,
            fill: false,
            borderWidth: 3,
            pointRadius: 0
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              position: 'bottom',
              labels: {
                padding: 15,
                font: {
                  size: 13,
                  weight: 'bold'
                },
                usePointStyle: true,
                pointStyle: 'circle'
              }
            },
            tooltip: {
              backgroundColor: 'rgba(0, 0, 0, 0.8)',
              padding: 12,
              cornerRadius: 8,
              titleFont: {
                size: 14,
                weight: 'bold'
              },
              bodyFont: {
                size: 13
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              max: 25,
              grid: {
                color: 'rgba(0, 0, 0, 0.05)'
              },
              ticks: {
                callback: function(value) {
                  return value + '%';
                },
                font: {
                  size: 12
                }
              }
            },
            x: {
              grid: {
                display: false
              },
              ticks: {
                font: {
                  size: 12
                }
              }
            }
          },
          animation: {
            duration: 2000,
            easing: 'easeInOutQuart'
          }
        }
      });
    }

    // ========================================
    // 3. CHART - STATUS GIZI (Doughnut)
    // ========================================
    const ctx2 = document.getElementById('nutritionStatusChart');
    if (ctx2) {
      new Chart(ctx2.getContext('2d'), {
        type: 'doughnut',
        data: {
          labels: ['Gizi Baik', 'Stunting', 'Gizi Kurang', 'Gizi Lebih'],
          datasets: [{
            data: [326, 68, 45, 13],
            backgroundColor: [
              'rgba(34, 197, 94, 0.8)',
              'rgba(239, 68, 68, 0.8)',
              'rgba(245, 158, 11, 0.8)',
              'rgba(59, 130, 246, 0.8)'
            ],
            borderColor: [
              'rgb(34, 197, 94)',
              'rgb(239, 68, 68)',
              'rgb(245, 158, 11)',
              'rgb(59, 130, 246)'
            ],
            borderWidth: 3,
            hoverOffset: 20
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              backgroundColor: 'rgba(0, 0, 0, 0.8)',
              padding: 12,
              cornerRadius: 8,
              titleFont: {
                size: 14,
                weight: 'bold'
              },
              bodyFont: {
                size: 13
              },
              callbacks: {
                label: function(context) {
                  const label = context.label || '';
                  const value = context.parsed;
                  const total = context.dataset.data.reduce((a, b) => a + b, 0);
                  const percentage = ((value / total) * 100).toFixed(1);
                  return label + ': ' + value + ' balita (' + percentage + '%)';
                }
              }
            }
          },
          animation: {
            duration: 2000,
            easing: 'easeInOutQuart'
          }
        }
      });
    }

    // ========================================
    // 4. CHART - KELOMPOK USIA (Bar)
    // ========================================
    const ctx3 = document.getElementById('ageGroupChart');
    if (ctx3) {
      new Chart(ctx3.getContext('2d'), {
        type: 'bar',
        data: {
          labels: ['0-6 bulan', '7-12 bulan', '13-24 bulan', '25-36 bulan', '37-59 bulan'],
          datasets: [{
            label: 'Jumlah Kasus Stunting',
            data: [5, 12, 23, 18, 10],
            backgroundColor: [
              'rgba(220, 38, 38, 0.8)',
              'rgba(239, 68, 68, 0.8)',
              'rgba(249, 115, 22, 0.8)',
              'rgba(245, 158, 11, 0.8)',
              'rgba(251, 191, 36, 0.8)'
            ],
            borderColor: [
              'rgb(220, 38, 38)',
              'rgb(239, 68, 68)',
              'rgb(249, 115, 22)',
              'rgb(245, 158, 11)',
              'rgb(251, 191, 36)'
            ],
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              backgroundColor: 'rgba(0, 0, 0, 0.8)',
              padding: 12,
              cornerRadius: 8,
              titleFont: {
                size: 14,
                weight: 'bold'
              },
              bodyFont: {
                size: 13
              },
              callbacks: {
                label: function(context) {
                  return 'Kasus: ' + context.parsed.y + ' balita';
                }
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              grid: {
                color: 'rgba(0, 0, 0, 0.05)'
              },
              ticks: {
                font: {
                  size: 12
                }
              }
            },
            x: {
              grid: {
                display: false
              },
              ticks: {
                font: {
                  size: 11
                }
              }
            }
          },
          animation: {
            duration: 2000,
            easing: 'easeInOutQuart'
          }
        }
      });
    }

  });
</script>
