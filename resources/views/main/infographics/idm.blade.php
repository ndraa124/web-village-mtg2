<style>
  .text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  }
</style>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-8 rounded-3xl shadow-xl mb-16">
      <div class="flex items-start">
        <i class="fas fa-info-circle text-yellow-600 text-2xl mr-4 mt-1"></i>
        <div>
          <h3 class="font-bold text-lg text-gray-800 mb-2">Apa itu Indeks Desa Membangun (IDM)?</h3>
          <p class="text-gray-700 leading-relaxed">
            IDM adalah indeks komposit yang mengukur tingkat kemajuan dan kemandirian desa.
            Status desa diklasifikasikan menjadi: Sangat Tertinggal, Tertinggal, Berkembang, Maju, dan Mandiri.
            Skor 0.8583 menempatkan Desa Motoling Dua dalam status <strong>Mandiri</strong>.
          </p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-red-600 hover:scale-[1.03] hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-star text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-3xl font-bold text-gray-800 text-shadow mb-2">0.8583</h3>
        <p class="text-gray-600 font-semibold">SKOR IDM</p>
        <div class="mt-3 text-xs text-gray-500">
          <i class="fas fa-info-circle mr-1"></i>
          <span>Nilai total komposit</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-blue-600 hover:scale-[1.03] hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-trophy text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-3xl font-bold text-gray-800 text-shadow mb-2">MANDIRI</h3>
        <p class="text-gray-600 font-semibold">STATUS IDM</p>
        <div class="mt-3 text-xs text-blue-600 font-semibold">
          <i class="fas fa-check-circle mr-1"></i>
          <span>Klasifikasi pencapaian</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-green-600 hover:scale-[1.03] hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-bullseye text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-3xl font-bold text-gray-800 text-shadow mb-2">MANDIRI</h3>
        <p class="text-gray-600 font-semibold">TARGET STATUS</p>
        <div class="mt-3 text-xs text-green-600 font-semibold">
          <i class="fas fa-flag-checkered mr-1"></i>
          <span>Target pencapaian 2024</span>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-16">

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-area text-red-600 mr-2"></i>
          Skor Indeks Komposit
        </h3>
        <p class="text-gray-700 mb-4">
          IDM dibentuk dari tiga indeks: Indeks Ketahanan Sosial (IKS), Indeks Ketahanan Ekonomi (IKE), dan Indeks Ketahanan Lingkungan (IKL).
        </p>
        <canvas id="idmRadarChart" class="w-full h-auto"></canvas>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-bar text-red-600 mr-2"></i>
          Rincian Indikator Pembangun
        </h3>
        <p class="text-gray-700 mb-4">
          Skor detil untuk setiap indikator pembangun Desa Motoling Dua.
        </p>
        <canvas id="idmBarChart" class="w-full h-auto"></canvas>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    const formatTooltip = (tooltipItem) => {
      return 'Skor: ' + (tooltipItem.raw || 0).toFixed(4);
    };

    const ctxRadar = document.getElementById('idmRadarChart');
    if (ctxRadar) {
      new Chart(ctxRadar.getContext('2d'), {
        type: 'radar',
        data: {
          labels: ['IKS (Sosial)', 'IKE (Ekonomi)', 'IKL (Lingkungan)'],
          datasets: [{
            label: 'Skor Indeks',
            data: [0.8914, 0.8833, 0.8000],
            backgroundColor: 'rgba(220, 38, 38, 0.2)',
            borderColor: 'rgba(220, 38, 38, 1)',
            pointBackgroundColor: 'rgba(220, 38, 38, 1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(220, 38, 38, 1)',
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          scales: {
            r: {
              min: 0,
              max: 1,
              beginAtZero: true,
              ticks: {
                stepSize: 0.25
              },
              pointLabels: {
                font: {
                  size: 14,
                  weight: 'bold'
                }
              }
            }
          },
          plugins: {
            legend: {
              position: 'bottom',
            },
            tooltip: {
              callbacks: {
                label: formatTooltip
              }
            }
          }
        }
      });
    }


    const ctxBar = document.getElementById('idmBarChart');
    if (ctxBar) {
      new Chart(ctxBar.getContext('2d'), {
        type: 'bar',
        data: {
          labels: [
            'Modal Sosial',
            'Kesehatan',
            'Permukiman',
            'Pendidikan',
            'Ekonomi',
            'Lingkungan'
          ],
          datasets: [{
            label: 'Skor Indikator',
            data: [1.0000, 0.8167, 0.7083, 0.6000, 0.5000, 0.8983],
            backgroundColor: [
              'rgba(59, 130, 246, 0.8)',
              'rgba(236, 72, 153, 0.8)',
              'rgba(168, 85, 247, 0.8)',
              'rgba(245, 158, 11, 0.8)',
              'rgba(220, 38, 38, 0.8)',
              'rgba(34, 197, 94, 0.8)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          indexAxis: 'y',
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              callbacks: {
                label: formatTooltip
              }
            }
          },
          scales: {
            x: {
              beginAtZero: true,
              min: 0,
              max: 1.0,
              title: {
                display: true,
                text: 'Skor'
              }
            },
            y: {
              ticks: {
                font: {
                  size: 12
                }
              }
            }
          }
        }
      });
    }

  });
</script>
