<style>
  .stat-card {
    transition: all 0.3s ease;
  }

  .stat-card:hover {
    transform: translateY(-5px);
  }

  .progress-ring {
    transform: rotate(-90deg);
  }

  @keyframes fillProgress {
    from {
      stroke-dashoffset: 314;
    }
  }

  .animate-count {
    animation: countUp 2s ease-out;
  }

  @keyframes countUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="py-8">
  <div class="container mx-auto px-4">
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg shadow-md">
      <div class="flex items-start">
        <i class="fas fa-exclamation-triangle text-yellow-600 text-2xl mr-4 mt-1"></i>
        <div>
          <h3 class="font-bold text-gray-800 mb-2">Apa itu Stunting?</h3>
          <p class="text-gray-700">
            Stunting adalah kondisi gagal tumbuh pada anak balita akibat kekurangan gizi kronis,
            terutama pada 1.000 hari pertama kehidupan. Hal ini menyebabkan anak terlalu pendek untuk usianya
            dan dapat berdampak pada perkembangan otak serta kemampuan belajar anak.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-12">
  <div class="container mx-auto px-4">
    <!-- Primary Stats -->
    <div class="grid md:grid-cols-4 gap-6 mb-12">
      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-child text-4xl text-red-600"></i>
          <span class="text-3xl font-bold text-gray-800 counter" data-target="452">0</span>
        </div>
        <h3 class="text-gray-600 font-semibold">Total Balita</h3>
        <p class="text-sm text-gray-500 mt-1">Usia 0-59 bulan</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-yellow-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-exclamation-circle text-4xl text-yellow-600"></i>
          <span class="text-3xl font-bold text-gray-800 counter" data-target="68">0</span>
        </div>
        <h3 class="text-gray-600 font-semibold">Kasus Stunting</h3>
        <p class="text-sm text-gray-500 mt-1">Perlu penanganan</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-check-circle text-4xl text-green-600"></i>
          <span class="text-3xl font-bold text-gray-800 counter" data-target="384">0</span>
        </div>
        <h3 class="text-gray-600 font-semibold">Gizi Normal</h3>
        <p class="text-sm text-gray-500 mt-1">Status baik</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-blue-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-percentage text-4xl text-blue-600"></i>
          <span class="text-3xl font-bold text-gray-800"><span class="counter" data-target="15">0</span>%</span>
        </div>
        <h3 class="text-gray-600 font-semibold">Prevalensi Stunting</h3>
        <p class="text-sm text-gray-500 mt-1">Target: < 14%</p>
      </div>
    </div>

    <!-- Progress Overview -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-chart-line text-red-600 mr-2"></i>
        Tren Penurunan Stunting
      </h2>

      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <canvas id="stuntingTrendChart"></canvas>
        </div>
        <div class="flex items-center">
          <div class="w-full">
            <h3 class="font-bold text-gray-800 mb-4">Progress Pencapaian Target</h3>
            <div class="space-y-4">
              <div>
                <div class="flex justify-between mb-1">
                  <span class="text-gray-600">Target 2024</span>
                  <span class="font-semibold">14%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3">
                  <div class="bg-gradient-to-r from-green-500 to-green-600 h-3 rounded-full" style="width: 85%"></div>
                </div>
              </div>
              <div>
                <div class="flex justify-between mb-1">
                  <span class="text-gray-600">Capaian Saat Ini</span>
                  <span class="font-semibold text-red-600">15%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3">
                  <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 h-3 rounded-full" style="width: 78%"></div>
                </div>
              </div>
            </div>

            <div class="mt-6 p-4 bg-blue-50 rounded-lg">
              <p class="text-sm text-blue-800">
                <i class="fas fa-info-circle mr-2"></i>
                Desa Motoling Dua berkomitmen menurunkan angka stunting sesuai target nasional
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Detailed Statistics -->
    <div class="grid md:grid-cols-2 gap-8 mb-12">
      <!-- Status Gizi by Category -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">
          <i class="fas fa-chart-pie text-red-600 mr-2"></i>
          Distribusi Status Gizi Balita
        </h3>
        <canvas id="nutritionStatusChart"></canvas>
      </div>

      <!-- By Age Group -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">
          <i class="fas fa-users text-red-600 mr-2"></i>
          Stunting Berdasarkan Kelompok Usia
        </h3>
        <canvas id="ageGroupChart"></canvas>
      </div>
    </div>

    <!-- Risk Factors -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-exclamation-triangle text-yellow-600 mr-2"></i>
        Faktor Risiko Stunting
      </h3>

      <div class="grid md:grid-cols-3 gap-6">
        <div class="text-center">
          <div class="relative mx-auto w-32 h-32 mb-4">
            <svg class="w-32 h-32">
              <circle cx="64" cy="64" r="50" stroke="#e5e7eb" stroke-width="12" fill="none"></circle>
              <circle cx="64" cy="64" r="50" stroke="#ef4444" stroke-width="12" fill="none"
                stroke-dasharray="314" stroke-dashoffset="94" class="progress-ring"></circle>
            </svg>
            <div class="absolute inset-0 flex items-center justify-center">
              <span class="text-2xl font-bold text-gray-800">70%</span>
            </div>
          </div>
          <h4 class="font-bold text-gray-800 mb-2">ASI Eksklusif</h4>
          <p class="text-sm text-gray-600">Pemberian ASI eksklusif 6 bulan pertama</p>
        </div>

        <div class="text-center">
          <div class="relative mx-auto w-32 h-32 mb-4">
            <svg class="w-32 h-32">
              <circle cx="64" cy="64" r="50" stroke="#e5e7eb" stroke-width="12" fill="none"></circle>
              <circle cx="64" cy="64" r="50" stroke="#10b981" stroke-width="12" fill="none"
                stroke-dasharray="314" stroke-dashoffset="63" class="progress-ring"></circle>
            </svg>
            <div class="absolute inset-0 flex items-center justify-center">
              <span class="text-2xl font-bold text-gray-800">80%</span>
            </div>
          </div>
          <h4 class="font-bold text-gray-800 mb-2">Imunisasi Lengkap</h4>
          <p class="text-sm text-gray-600">Balita dengan imunisasi dasar lengkap</p>
        </div>

        <div class="text-center">
          <div class="relative mx-auto w-32 h-32 mb-4">
            <svg class="w-32 h-32">
              <circle cx="64" cy="64" r="50" stroke="#e5e7eb" stroke-width="12" fill="none"></circle>
              <circle cx="64" cy="64" r="50" stroke="#3b82f6" stroke-width="12" fill="none"
                stroke-dasharray="314" stroke-dashoffset="157" class="progress-ring"></circle>
            </svg>
            <div class="absolute inset-0 flex items-center justify-center">
              <span class="text-2xl font-bold text-gray-800">50%</span>
            </div>
          </div>
          <h4 class="font-bold text-gray-800 mb-2">Sanitasi Layak</h4>
          <p class="text-sm text-gray-600">Akses sanitasi dan air bersih yang memadai</p>
        </div>
      </div>
    </div>

    <!-- Intervention Programs -->
    <div class="bg-gradient-to-br from-red-50 to-white rounded-lg shadow-lg p-8 mb-12">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-hands-helping text-red-600 mr-2"></i>
        Program Intervensi Stunting
      </h3>

      <div class="grid md:grid-cols-2 gap-6">
        <!-- Specific Interventions -->
        <div class="bg-white rounded-lg p-6">
          <h4 class="font-bold text-gray-800 mb-4 text-lg">
            <i class="fas fa-bullseye text-red-600 mr-2"></i>
            Intervensi Spesifik
          </h4>
          <ul class="space-y-3">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Pemberian Makanan Tambahan (PMT)</p>
                <p class="text-sm text-gray-600">Untuk balita gizi kurang dan ibu hamil KEK</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Suplementasi Gizi</p>
                <p class="text-sm text-gray-600">Vitamin A, tablet tambah darah, dan zinc</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Tatalaksana Gizi Buruk</p>
                <p class="text-sm text-gray-600">Penanganan balita dengan gizi buruk</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Promosi ASI Eksklusif</p>
                <p class="text-sm text-gray-600">Edukasi dan pendampingan ibu menyusui</p>
              </div>
            </li>
          </ul>
        </div>

        <!-- Sensitive Interventions -->
        <div class="bg-white rounded-lg p-6">
          <h4 class="font-bold text-gray-800 mb-4 text-lg">
            <i class="fas fa-shield-alt text-blue-600 mr-2"></i>
            Intervensi Sensitif
          </h4>
          <ul class="space-y-3">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Akses Air Bersih & Sanitasi</p>
                <p class="text-sm text-gray-600">Program PAMSIMAS dan sanitasi total</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Bantuan Pangan Non Tunai</p>
                <p class="text-sm text-gray-600">Untuk keluarga berisiko stunting</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Jaminan Kesehatan</p>
                <p class="text-sm text-gray-600">Akses layanan kesehatan gratis</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
              <div>
                <p class="font-semibold text-gray-700">Pendidikan Gizi Keluarga</p>
                <p class="text-sm text-gray-600">Pelatihan pengolahan makanan bergizi</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Data by Location -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-map-marked-alt text-red-600 mr-2"></i>
        Data Stunting per Dusun
      </h3>

      <div class="overflow-x-auto">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-red-600 text-white">
              <th class="px-4 py-3 text-left">Dusun</th>
              <th class="px-4 py-3 text-center">Total Balita</th>
              <th class="px-4 py-3 text-center">Stunting</th>
              <th class="px-4 py-3 text-center">Gizi Kurang</th>
              <th class="px-4 py-3 text-center">Gizi Baik</th>
              <th class="px-4 py-3 text-center">Gizi Lebih</th>
              <th class="px-4 py-3 text-center">Prevalensi</th>
              <th class="px-4 py-3 text-center">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-semibold">Dusun I</td>
              <td class="px-4 py-3 text-center">156</td>
              <td class="px-4 py-3 text-center text-red-600 font-semibold">28</td>
              <td class="px-4 py-3 text-center text-yellow-600">15</td>
              <td class="px-4 py-3 text-center text-green-600">108</td>
              <td class="px-4 py-3 text-center text-blue-600">5</td>
              <td class="px-4 py-3 text-center">
                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded font-semibold">17.9%</span>
              </td>
              <td class="px-4 py-3 text-center">
                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Waspada</span>
              </td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-semibold">Dusun II</td>
              <td class="px-4 py-3 text-center">148</td>
              <td class="px-4 py-3 text-center text-red-600 font-semibold">20</td>
              <td class="px-4 py-3 text-center text-yellow-600">12</td>
              <td class="px-4 py-3 text-center text-green-600">112</td>
              <td class="px-4 py-3 text-center text-blue-600">4</td>
              <td class="px-4 py-3 text-center">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded font-semibold">13.5%</span>
              </td>
              <td class="px-4 py-3 text-center">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Baik</span>
              </td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-semibold">Dusun III</td>
              <td class="px-4 py-3 text-center">148</td>
              <td class="px-4 py-3 text-center text-red-600 font-semibold">20</td>
              <td class="px-4 py-3 text-center text-yellow-600">18</td>
              <td class="px-4 py-3 text-center text-green-600">106</td>
              <td class="px-4 py-3 text-center text-blue-600">4</td>
              <td class="px-4 py-3 text-center">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded font-semibold">13.5%</span>
              </td>
              <td class="px-4 py-3 text-center">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Baik</span>
              </td>
            </tr>
            <tr class="bg-gray-100 font-bold">
              <td class="px-4 py-3">TOTAL</td>
              <td class="px-4 py-3 text-center">452</td>
              <td class="px-4 py-3 text-center text-red-600">68</td>
              <td class="px-4 py-3 text-center text-yellow-600">45</td>
              <td class="px-4 py-3 text-center text-green-600">326</td>
              <td class="px-4 py-3 text-center text-blue-600">13</td>
              <td class="px-4 py-3 text-center">
                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">15.0%</span>
              </td>
              <td class="px-4 py-3 text-center">
                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Target 14%</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-lg p-8 text-white text-center mb-12">
      <i class="fas fa-hands-helping text-5xl mb-4 opacity-50"></i>
      <h3 class="text-2xl font-bold mb-4">Bersama Cegah Stunting</h3>
      <p class="mb-6 text-white/90 max-w-2xl mx-auto">
        Mari bersama-sama mewujudkan generasi sehat dan cerdas.
        Stunting dapat dicegah dengan pola asuh yang baik, makanan bergizi, dan lingkungan yang bersih.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-50 transition">
          <i class="fas fa-download mr-2"></i>
          Download Data Lengkap
        </a>
        <a href="index.html#kontak" class="bg-red-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-800 transition border-2 border-white">
          <i class="fas fa-phone-alt mr-2"></i>
          Hubungi Posyandu
        </a>
      </div>
    </div>

    <!-- Tips Section -->
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-600">
        <i class="fas fa-lightbulb text-3xl text-green-600 mb-3"></i>
        <h4 class="font-bold text-gray-800 mb-2">Tips Pencegahan</h4>
        <ul class="text-sm text-gray-600 space-y-1">
          <li>• ASI eksklusif 6 bulan</li>
          <li>• MPASI bergizi seimbang</li>
          <li>• Imunisasi lengkap</li>
          <li>• Pola hidup bersih sehat</li>
        </ul>
      </div>

      <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-600">
        <i class="fas fa-stethoscope text-3xl text-blue-600 mb-3"></i>
        <h4 class="font-bold text-gray-800 mb-2">Layanan Kesehatan</h4>
        <ul class="text-sm text-gray-600 space-y-1">
          <li>• Posyandu setiap bulan</li>
          <li>• Pemeriksaan tumbuh kembang</li>
          <li>• Konsultasi gizi gratis</li>
          <li>• Rujukan ke Puskesmas</li>
        </ul>
      </div>

      <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-600">
        <i class="fas fa-phone-volume text-3xl text-purple-600 mb-3"></i>
        <h4 class="font-bold text-gray-800 mb-2">Kontak Darurat</h4>
        <ul class="text-sm text-gray-600 space-y-1">
          <li>• Posyandu: 0812-3456-7890</li>
          <li>• Puskesmas: (021) 1234-5678</li>
          <li>• Ambulance: 119</li>
          <li>• WhatsApp: 0812-3456-7890</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<script>
  const ctx1 = document.getElementById('stuntingTrendChart').getContext('2d');
  new Chart(ctx1, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'],
      datasets: [{
        label: 'Prevalensi Stunting (%)',
        data: [22, 21.5, 20.8, 19.5, 18.7, 18.2, 17.5, 16.8, 16.2, 15.7, 15.3, 15.0],
        borderColor: 'rgb(220, 38, 38)',
        backgroundColor: 'rgba(220, 38, 38, 0.1)',
        tension: 0.4,
        fill: true
      }, {
        label: 'Target (%)',
        data: [14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14],
        borderColor: 'rgb(34, 197, 94)',
        borderDash: [5, 5],
        tension: 0,
        fill: false
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom',
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 25
        }
      }
    }
  });

  // Nutrition Status Chart
  const ctx2 = document.getElementById('nutritionStatusChart').getContext('2d');
  new Chart(ctx2, {
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
        borderWidth: 2,
        borderColor: '#fff'
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom',
        }
      }
    }
  });

  // Age Group Chart
  const ctx3 = document.getElementById('ageGroupChart').getContext('2d');
  new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: ['0-6 bulan', '7-12 bulan', '13-24 bulan', '25-36 bulan', '37-59 bulan'],
      datasets: [{
        label: 'Jumlah Kasus Stunting',
        data: [5, 12, 23, 18, 10],
        backgroundColor: 'rgba(220, 38, 38, 0.8)',
        borderColor: 'rgb(220, 38, 38)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>