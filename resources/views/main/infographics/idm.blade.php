{{-- Menambahkan library Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
  /* Menambahkan style untuk text-shadow agar mirip dengan sumber */
  .text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  }
</style>

<section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-white mb-2">Infografis IDM</h2>
    <nav class="text-white/90">
      <a href="index.html" class="hover:text-white">Beranda</a>
      <span class="mx-2">/</span>
      <a href="#" class="hover:text-white">Infografis</a>
      <span class="mx-2">/</span>
      <span>IDM</span>
    </nav>
  </div>
</section>

<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="mb-12 text-center">
      <h3 class="text-3xl font-bold text-gray-800">Indeks Desa Membangun (IDM)</h3>
      <p class="text-gray-600 mt-2">
        Potret pencapaian pembangunan desa menuju desa mandiri di Desa Motoling Dua.
      </p>
    </div>

    {{-- Kartu Skor Utama --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="stat-card bg-white rounded-lg shadow-lg p-8 border-t-4 border-red-600 text-center">
        <i class="fas fa-star text-4xl text-red-600 mb-4"></i>
        <h3 class="text-5xl font-bold text-gray-800 text-shadow">0.7161</h3>
        <p class="text-gray-600 font-semibold mt-2 text-lg">SKOR IDM</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-8 border-t-4 border-blue-600 text-center">
        <i class="fas fa-trophy text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-5xl font-bold text-gray-800 text-shadow">Berkembang</h3>
        <p class="text-gray-600 font-semibold mt-2 text-lg">STATUS IDM</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-8 border-t-4 border-green-600 text-center">
        <i class="fas fa-bullseye text-4xl text-green-600 mb-4"></i>
        <h3 class="text-5xl font-bold text-gray-800 text-shadow">Mandiri</h3>
        <p class="text-gray-600 font-semibold mt-2 text-lg">TARGET STATUS</p>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
      {{-- Grafik Radar Indeks --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-area text-red-600 mr-2"></i>
          Skor Indeks Komposit
        </h3>
        <p class="text-gray-700 mb-4">
          IDM dibentuk dari tiga indeks: Indeks Ketahanan Sosial (IKS), Indeks Ketahanan Ekonomi (IKE), dan Indeks Ketahanan Lingkungan (IKL).
        </p>
        <canvas id="idmRadarChart" class="w-full h-auto"></canvas>
      </div>

      {{-- Grafik Bar Indikator --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
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

    {{-- Penjelasan IDM --}}
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg shadow-md">
      <div class="flex items-start">
        <i class="fas fa-info-circle text-yellow-600 text-2xl mr-4 mt-1"></i>
        <div>
          <h3 class="font-bold text-gray-800 mb-2">Apa itu Indeks Desa Membangun (IDM)?</h3>
          <p class="text-gray-700">
            IDM adalah indeks komposit yang mengukur tingkat kemajuan dan kemandirian desa.
            Status desa diklasifikasikan menjadi: Sangat Tertinggal, Tertinggal, Berkembang, Maju, dan Mandiri.
            Skor 0.7161 menempatkan Desa Motoling Dua dalam status <strong>Berkembang</strong>, yang berarti desa ini memiliki potensi besar untuk ditingkatkan menjadi desa Maju.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- Script untuk inisialisasi Chart.js --}}
<script>
  document.addEventListener("DOMContentLoaded", function() {

    // Fungsi untuk format Tooltip
    const formatTooltip = (tooltipItem) => {
      return 'Skor: ' + (tooltipItem.raw || 0).toFixed(4);
    };

    // 1. Grafik Radar (Skor Indeks Komposit)
    const ctxRadar = document.getElementById('idmRadarChart');
    if (ctxRadar) {
      new Chart(ctxRadar.getContext('2d'), {
        type: 'radar',
        data: {
          labels: ['IKS (Sosial)', 'IKE (Ekonomi)', 'IKL (Lingkungan)'],
          datasets: [{
            label: 'Skor Indeks',
            data: [0.7500, 0.5000, 0.8983], // Data dari web
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
            r: { // 'r' adalah sumbu radial (skor)
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

    // 2. Grafik Bar (Rincian Indikator)
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
            data: [1.0000, 0.8167, 0.7083, 0.6000, 0.5000, 0.8983], // Data dari web
            backgroundColor: [
              'rgba(59, 130, 246, 0.8)', // Biru
              'rgba(236, 72, 153, 0.8)', // Pink
              'rgba(168, 85, 247, 0.8)', // Ungu
              'rgba(245, 158, 11, 0.8)', // Kuning
              'rgba(220, 38, 38, 0.8)', // Merah
              'rgba(34, 197, 94, 0.8)' // Hijau
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          indexAxis: 'y', // Membuat bar chart horizontal
          plugins: {
            legend: {
              display: false // Sembunyikan legenda
            },
            tooltip: {
              callbacks: {
                label: formatTooltip
              }
            }
          },
          scales: {
            x: { // Sumbu X (skor)
              beginAtZero: true,
              min: 0,
              max: 1.0,
              title: {
                display: true,
                text: 'Skor'
              }
            },
            y: { // Sumbu Y (indikator)
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