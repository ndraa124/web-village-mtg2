<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
      <div class="stat-card group bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border-t-4 border-red-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-users text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="1678">0</h3>
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
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="894">0</h3>
        <p class="text-gray-600 font-semibold">Laki-Laki</p>
        <div class="mt-3 text-xs text-blue-600 font-semibold">
          <i class="fas fa-chart-line mr-1"></i>
          <span class="counter-percentage" data-total="1678" data-value="894">0</span>%
        </div>
      </div>

      <div class="stat-card group bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border-t-4 border-pink-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-female text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="780">0</h3>
        <p class="text-gray-600 font-semibold">Perempuan</p>
        <div class="mt-3 text-xs text-pink-600 font-semibold">
          <i class="fas fa-chart-line mr-1"></i>
          <span class="counter-percentage" data-total="1678" data-value="780">0</span>%
        </div>
      </div>

      <div class="stat-card group bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border-t-4 border-green-600 hover:scale-110 hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-home text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 counter mb-2" data-target="522">0</h3>
        <p class="text-gray-600 font-semibold">Kepala Keluarga</p>
        <div class="mt-3 text-xs text-gray-500">
          <i class="fas fa-house-user mr-1"></i>
          <span>KK</span>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
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
              <span class="text-gray-600">Laki-Laki (894)</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-4 h-4 bg-pink-500 rounded"></div>
              <span class="text-gray-600">Perempuan (780)</span>
            </div>
          </div>
        </div>
      </div>

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
              <tr class="border-b border-gray-200 hover:bg-red-50 transition-colors">
                <td class="px-4 py-3 font-semibold text-gray-800">
                  <i class="fas fa-circle text-red-600 text-xs mr-2"></i>
                  Kristen
                </td>
                <td class="px-4 py-3 text-right text-gray-800 font-bold">1.656</td>
              </tr>
              <tr class="border-b border-gray-200 hover:bg-green-50 transition-colors">
                <td class="px-4 py-3 font-semibold text-gray-800">
                  <i class="fas fa-circle text-green-600 text-xs mr-2"></i>
                  Islam
                </td>
                <td class="px-4 py-3 text-right text-gray-800 font-bold">17</td>
              </tr>
              <tr class="hover:bg-blue-50 transition-colors">
                <td class="px-4 py-3 font-semibold text-gray-800">
                  <i class="fas fa-circle text-blue-600 text-xs mr-2"></i>
                  Katolik
                </td>
                <td class="px-4 py-3 text-right text-gray-800 font-bold">5</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="relative">
          <canvas id="religionChart" class="w-full" style="max-height: 300px;"></canvas>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <div class="mb-6">
          <div class="inline-flex items-center gap-2 bg-orange-50 text-orange-600 px-3 py-1 rounded-full mb-3 text-sm">
            <i class="fas fa-briefcase text-xs"></i>
            <span class="font-semibold">Ketenagakerjaan</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">Berdasarkan Pekerjaan</h3>
          <p class="text-gray-600 mt-2">5 pekerjaan teratas di Desa Motoling Dua</p>
        </div>
        <div class="overflow-x-auto" style="max-height: 400px;">
          <table class="w-full">
            <thead class="sticky top-0">
              <tr class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
                <th class="px-4 py-3 text-left rounded-tl-xl">Jenis Pekerjaan</th>
                <th class="px-4 py-3 text-right rounded-tr-xl">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-gray-200 hover:bg-orange-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-home text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Mengurus Rumah Tangga</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-orange-100 text-orange-800 px-3 py-1 rounded-full font-bold text-sm">
                    383
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
              <tr class="border-b border-gray-200 hover:bg-blue-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-graduation-cap text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Pelajar/Mahasiswa</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-blue-100 text-blue-800 px-3 py-1 rounded-full font-bold text-sm">
                    344
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
              <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-gray-500 to-gray-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-user-clock text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Belum/Tidak Bekerja</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-gray-100 text-gray-800 px-3 py-1 rounded-full font-bold text-sm">
                    318
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
              <tr class="border-b border-gray-200 hover:bg-purple-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-store text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Wiraswasta</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-purple-100 text-purple-800 px-3 py-1 rounded-full font-bold text-sm">
                    255
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
              <tr class="hover:bg-green-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-seedling text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Petani/Pekebun</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-3 py-1 rounded-full font-bold text-sm">
                    208
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
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
              <tr class="border-b border-gray-200 hover:bg-rose-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-rose-500 to-rose-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-user text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Belum Kawin</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-rose-100 text-rose-800 px-3 py-1 rounded-full font-bold text-sm">
                    712
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
              <tr class="border-b border-gray-200 hover:bg-green-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-heart text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Kawin</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-3 py-1 rounded-full font-bold text-sm">
                    625
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
              <tr class="border-b border-gray-200 hover:bg-blue-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-file-contract text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Kawin Tercatat</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-blue-100 text-blue-800 px-3 py-1 rounded-full font-bold text-sm">
                    231
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
              <tr class="hover:bg-gray-50 transition-colors group">
                <td class="px-4 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-gray-500 to-gray-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                      <i class="fas fa-ribbon text-white text-sm"></i>
                    </div>
                    <span class="font-semibold text-gray-800">Cerai Mati</span>
                  </div>
                </td>
                <td class="px-4 py-3 text-right">
                  <span class="inline-flex items-center gap-2 bg-gray-100 text-gray-800 px-3 py-1 rounded-full font-bold text-sm">
                    72
                    <i class="fas fa-users text-xs"></i>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-200">
          <canvas id="marriageChart" class="w-full" style="max-height: 250px;"></canvas>
        </div>
      </div>
    </div>

    <div class="bg-gradient-to-br from-yellow-50 to-orange-50 border-l-4 border-yellow-500 p-8 rounded-2xl shadow-lg">
      <div class="flex items-start gap-4">
        <div class="flex-shrink-0">
          <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center">
            <i class="fas fa-info-circle text-white text-xl"></i>
          </div>
        </div>
        <div>
          <h4 class="text-xl font-bold text-yellow-800 mb-2">Catatan Penting</h4>
          <p class="text-yellow-700 leading-relaxed">
            Data berdasarkan <strong>Pendidikan</strong> dan <strong>Wajib Pilih</strong> saat ini sedang dalam proses pemutakhiran dan akan diperbarui secepatnya. Untuk informasi lebih lanjut, silakan hubungi kantor desa.
          </p>
        </div>
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
          counter.innerText = target.toLocaleString('id-ID');
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

    const percentages = document.querySelectorAll('.counter-percentage');
    percentages.forEach(pct => {
      const total = +pct.getAttribute('data-total');
      const value = +pct.getAttribute('data-value');
      const percentage = ((value / total) * 100).toFixed(1);

      const animatePercentage = () => {
        let current = 0;
        const increment = percentage / 100;
        const timer = setInterval(() => {
          current += increment;
          if (current >= percentage) {
            pct.innerText = percentage;
            clearInterval(timer);
          } else {
            pct.innerText = current.toFixed(1);
          }
        }, 10);
      };

      const pctObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animatePercentage();
            pctObserver.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.5
      });

      pctObserver.observe(pct);
    });

    // ========================================
    // 2. CHART - KELOMPOK UMUR (Bar Chart)
    // ========================================
    const ctxAge = document.getElementById('ageGroupChart');
    if (ctxAge) {
      new Chart(ctxAge.getContext('2d'), {
        type: 'bar',
        data: {
          labels: ['0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65+'],
          datasets: [{
            label: 'Laki-Laki',
            data: [60, 65, 70, 72, 75, 70, 65, 60, 55, 50, 45, 40, 30, 37],
            backgroundColor: 'rgba(59, 130, 246, 0.8)',
            borderColor: 'rgb(59, 130, 246)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          }, {
            label: 'Perempuan',
            data: [55, 60, 65, 70, 79, 75, 70, 65, 55, 50, 45, 40, 30, 46],
            backgroundColor: 'rgba(236, 72, 153, 0.8)',
            borderColor: 'rgb(236, 72, 153)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: false,
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
                  return context.dataset.label + ': ' + context.parsed.y + ' jiwa';
                }
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Jumlah Jiwa',
                font: {
                  size: 13,
                  weight: 'bold'
                }
              },
              grid: {
                color: 'rgba(0, 0, 0, 0.05)',
              },
              ticks: {
                font: {
                  size: 12
                }
              }
            },
            x: {
              title: {
                display: true,
                text: 'Kelompok Umur (Tahun)',
                font: {
                  size: 13,
                  weight: 'bold'
                }
              },
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
          interaction: {
            intersect: false,
            mode: 'index'
          },
          animation: {
            duration: 2000,
            easing: 'easeInOutQuart'
          }
        }
      });
    }

    // ========================================
    // 3. CHART - AGAMA (Doughnut Chart)
    // ========================================
    const ctxReligion = document.getElementById('religionChart');
    if (ctxReligion) {
      new Chart(ctxReligion.getContext('2d'), {
        type: 'doughnut',
        data: {
          labels: ['Kristen', 'Islam', 'Katolik'],
          datasets: [{
            data: [1656, 17, 5],
            backgroundColor: [
              'rgba(220, 38, 38, 0.8)',
              'rgba(34, 197, 94, 0.8)',
              'rgba(59, 130, 246, 0.8)'
            ],
            borderColor: [
              'rgb(220, 38, 38)',
              'rgb(34, 197, 94)',
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
              position: 'bottom',
              labels: {
                padding: 20,
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
              },
              callbacks: {
                label: function(context) {
                  const label = context.label || '';
                  const value = context.parsed;
                  const total = context.dataset.data.reduce((a, b) => a + b, 0);
                  const percentage = ((value / total) * 100).toFixed(1);
                  return label + ': ' + value + ' jiwa (' + percentage + '%)';
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
    // 4. CHART - STATUS PERKAWINAN (Horizontal Bar)
    // ========================================
    const ctxMarriage = document.getElementById('marriageChart');
    if (ctxMarriage) {
      new Chart(ctxMarriage.getContext('2d'), {
        type: 'bar',
        data: {
          labels: ['Belum Kawin', 'Kawin', 'Kawin Tercatat', 'Cerai Mati'],
          datasets: [{
            label: 'Jumlah Jiwa',
            data: [712, 625, 231, 72],
            backgroundColor: [
              'rgba(244, 63, 94, 0.8)',
              'rgba(34, 197, 94, 0.8)',
              'rgba(59, 130, 246, 0.8)',
              'rgba(107, 114, 128, 0.8)'
            ],
            borderColor: [
              'rgb(244, 63, 94)',
              'rgb(34, 197, 94)',
              'rgb(59, 130, 246)',
              'rgb(107, 114, 128)'
            ],
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          }]
        },
        options: {
          indexAxis: 'y',
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
                  return 'Jumlah: ' + context.parsed.x + ' jiwa';
                }
              }
            }
          },
          scales: {
            x: {
              beginAtZero: true,
              grid: {
                color: 'rgba(0, 0, 0, 0.05)',
              },
              ticks: {
                font: {
                  size: 12
                }
              }
            },
            y: {
              grid: {
                display: false
              },
              ticks: {
                font: {
                  size: 12,
                  weight: 'bold'
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
