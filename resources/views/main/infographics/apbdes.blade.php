<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="mb-12 text-center">
      <h3 class="text-3xl font-bold text-gray-800">Anggaran Pendapatan dan Belanja Desa</h3>
      {{-- Mengganti "Mekarjaya" dengan "Motoling Dua" agar konsisten --}}
      <p class="text-gray-600 mt-2">
        Informasi mengenai Anggaran Pendapatan dan Belanja Desa (APBDes) Desa Motoling Dua Tahun 2024.
      </p>
    </div>

    {{-- Kartu Statistik - Diperbarui dengan data, counter, dan style --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-arrow-down text-4xl text-red-600"></i>
          <span class="text-2xl font-bold text-gray-800">Rp <span class="counter" data-target="999636000">0</span></span>
        </div>
        <h3 class="text-gray-600 font-semibold">Total Pendapatan</h3>
        <p class="text-sm text-gray-500 mt-1">Sumber pendapatan desa</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-blue-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-arrow-up text-4xl text-blue-600"></i>
          <span class="text-2xl font-bold text-gray-800">Rp <span class="counter" data-target="1029636000">0</span></span>
        </div>
        <h3 class="text-gray-600 font-semibold">Total Belanja</h3>
        <p class="text-sm text-gray-500 mt-1">Alokasi belanja desa</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-yellow-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-plus text-4xl text-yellow-600"></i>
          <span class="text-2xl font-bold text-gray-800">Rp <span class="counter" data-target="30000000">0</span></span>
        </div>
        <h3 class="text-gray-600 font-semibold">Penerimaan Pembiayaan</h3>
        <p class="text-sm text-gray-500 mt-1">Contoh: SILPA</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-600">
        <div class="flex items-center justify-between mb-4">
          <i class="fas fa-minus text-4xl text-green-600"></i>
          <span class="text-2xl font-bold text-gray-800">Rp <span class="counter" data-target="0">0</span></span>
        </div>
        <h3 class="text-gray-600 font-semibold">Pengeluaran Pembiayaan</h3>
        <p class="text-sm text-gray-500 mt-1">Contoh: Penyertaan modal</p>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8">

      {{-- Rincian Pendapatan Desa --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-pie text-red-600 mr-2"></i>
          Rincian Pendapatan Desa
        </h3>
        <canvas id="pendapatanChart" class="w-full h-auto"></canvas>
      </div>

      {{-- Rincian Belanja Desa --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-bar text-red-600 mr-2"></i>
          Rincian Belanja Desa
        </h3>
        <canvas id="belanjaChart" class="w-full h-auto"></canvas>
      </div>

      {{-- Rincian Pembiayaan Desa --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-tasks text-red-600 mr-2"></i>
          Rincian Pembiayaan Desa
        </h3>
        <canvas id="pembiayaanChart" class="w-full h-auto"></canvas>
      </div>

      {{-- Realisasi APBDes (Sesuai sumber, data ini masih kosong) --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-check-circle text-red-600 mr-2"></i>
          Realisasi APBDes
        </h3>
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg shadow-md text-center">
          <i class="fas fa-exclamation-triangle text-yellow-600 text-3xl mb-3"></i>
          <p class="text-yellow-700 font-semibold text-lg">Belum ada data realisasi APBDes.</p>
          <p class="text-yellow-600">Data akan diperbarui setelah proses realisasi berjalan.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- Script untuk inisialisasi Chart.js --}}
<script>
  document.addEventListener("DOMContentLoaded", function() {

    // Fungsi untuk format Rupiah di tooltips Chart.js
    const rupiahTooltip = (tooltipItem) => {
      let value = tooltipItem.raw || 0;
      return 'Rp ' + value.toLocaleString('id-ID');
    };

    // 1. Grafik Rincian Pendapatan (Doughnut Chart)
    const ctxPendapatan = document.getElementById('pendapatanChart');
    if (ctxPendapatan) {
      new Chart(ctxPendapatan.getContext('2d'), {
        type: 'doughnut',
        data: {
          labels: ['Dana Desa (DD)', 'Alokasi Dana Desa (ADD)', 'Pendapatan Asli Desa (PAD)'],
          datasets: [{
            data: [712924000, 279712000, 7000000], // Data dari web
            backgroundColor: [
              'rgba(220, 38, 38, 0.8)', // Merah
              'rgba(59, 130, 246, 0.8)', // Biru
              'rgba(245, 158, 11, 0.8)' // Kuning
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
            },
            tooltip: {
              callbacks: {
                label: function(context) {
                  let label = context.label || '';
                  if (label) {
                    label += ': ';
                  }
                  if (context.parsed !== null) {
                    label += new Intl.NumberFormat('id-ID', {
                      style: 'currency',
                      currency: 'IDR'
                    }).format(context.raw);
                  }
                  return label;
                }
              }
            }
          }
        }
      });
    }

    // 2. Grafik Rincian Belanja (Bar Chart)
    const ctxBelanja = document.getElementById('belanjaChart');
    if (ctxBelanja) {
      new Chart(ctxBelanja.getContext('2d'), {
        type: 'bar',
        data: {
          labels: [
            'Penyelenggaraan Pemerintahan',
            'Pelaksanaan Pembangunan',
            'Pemberdayaan Masyarakat',
            'Pembinaan Kemasyarakatan',
            'Penanggulangan Bencana'
          ],
          datasets: [{
            label: 'Anggaran Belanja',
            data: [433090800, 326839200, 170180000, 65526000, 34000000], // Data dari web
            backgroundColor: 'rgba(220, 38, 38, 0.8)',
            borderColor: 'rgb(220, 38, 38)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          indexAxis: 'y', // Membuat bar chart horizontal agar label mudah dibaca
          plugins: {
            legend: {
              display: false // Sembunyikan legenda karena hanya 1 dataset
            },
            tooltip: {
              callbacks: {
                label: rupiahTooltip
              }
            }
          },
          scales: {
            x: {
              beginAtZero: true,
              ticks: {
                callback: function(value) {
                  return 'Rp ' + (value / 1000000) + ' Jt'; // Format sumbu X (jutaan)
                }
              }
            }
          }
        }
      });
    }

    // 3. Grafik Rincian Pembiayaan (Pie Chart)
    const ctxPembiayaan = document.getElementById('pembiayaanChart');
    if (ctxPembiayaan) {
      new Chart(ctxPembiayaan.getContext('2d'), {
        type: 'pie',
        data: {
          labels: ['SILPA Tahun Sebelumnya'],
          datasets: [{
            data: [30000000], // Data dari web
            backgroundColor: [
              'rgba(22, 163, 74, 0.8)' // Hijau
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
            },
            tooltip: {
              callbacks: {
                label: rupiahTooltip
              }
            }
          }
        }
      });
    }

  });
</script>