<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="mb-12 text-center">
      <h3 class="text-3xl font-bold text-gray-800">SDGs Desa</h3>
      <p class="text-gray-600 mt-2">
        Pencapaian Tujuan Pembangunan Berkelanjutan (Sustainable Development Goals) Desa Motoling Dua.
      </p>
    </div>

    {{-- Kartu Skor Utama --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-600 text-center">
        <i class="fas fa-star-half-alt text-4xl text-red-600 mb-4"></i>
        <h3 class="text-5xl font-bold text-gray-800">56.41</h3>
        <p class="text-gray-600 font-semibold mt-2 text-lg">SKOR TOTAL SDGs</p>
        <p class="text-sm text-gray-500 mt-1">Tahun 2023</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-600 text-center">
        <i class="fas fa-arrow-circle-up text-4xl text-green-600 mb-4"></i>
        <h3 class="text-5xl font-bold text-gray-800">100.00</h3>
        <p class="text-gray-600 font-semibold mt-2 text-lg">SKOR TERTINGGI</p>
        <p class="text-sm text-gray-500 mt-1">SDGs 13, 14, 15</p>
      </div>

      <div class="stat-card bg-white rounded-lg shadow-lg p-6 border-t-4 border-yellow-600 text-center">
        <i class="fas fa-arrow-circle-down text-4xl text-yellow-600 mb-4"></i>
        <h3 class="text-5xl font-bold text-gray-800">0.00</h3>
        <p class="text-gray-600 font-semibold mt-2 text-lg">SKOR TERENDAH</p>
        <p class="text-sm text-gray-500 mt-1">SDGs 5</p>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
      {{-- Grafik SDGs 1-9 --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-bar text-red-600 mr-2"></i>
          Skor SDGs Desa (Tujuan 1-9)
        </h3>
        <canvas id="sdgsChart1" class="w-full h-auto"></canvas>
      </div>

      {{-- Grafik SDGs 10-18 --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-bar text-red-600 mr-2"></i>
          Skor SDGs Desa (Tujuan 10-18)
        </h3>
        <canvas id="sdgsChart2" class="w-full h-auto"></canvas>
      </div>
    </div>

    {{-- Penjelasan SDGs --}}
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg shadow-md">
      <div class="flex items-start">
        <i class="fas fa-info-circle text-yellow-600 text-2xl mr-4 mt-1"></i>
        <div>
          <h3 class="font-bold text-gray-800 mb-2">Apa itu SDGs Desa?</h3>
          <p class="text-gray-700">
            SDGs Desa adalah upaya terpadu untuk mewujudkan pembangunan berkelanjutan yang dimulai dari desa.
            Terdapat 18 tujuan yang mencakup pengentasan kemiskinan, peningkatan kesehatan dan pendidikan,
            kesetaraan gender, pengelolaan lingkungan, hingga kelembagaan desa yang dinamis.
            Skor diukur dari 0 hingga 100, di mana 100 adalah pencapaian tertinggi.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- Script untuk inisialisasi Chart.js --}}
<script>
  document.addEventListener("DOMContentLoaded", function() {

    // Palet warna untuk grafik
    const colors = [
      'rgba(220, 38, 38, 0.8)',
      'rgba(59, 130, 246, 0.8)',
      'rgba(34, 197, 94, 0.8)',
      'rgba(245, 158, 11, 0.8)',
      'rgba(168, 85, 247, 0.8)',
      'rgba(236, 72, 153, 0.8)',
      'rgba(14, 165, 233, 0.8)',
      'rgba(132, 204, 22, 0.8)',
      'rgba(79, 70, 231, 0.8)'
    ];

    // Fungsi untuk format Tooltip
    const formatTooltip = (tooltipItem) => {
      return 'Skor: ' + (tooltipItem.raw || 0).toFixed(2);
    };

    // Opsi umum untuk skala X (0-100)
    const options = {
      indexAxis: 'y',
      responsive: true,
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
          max: 100, // Skala maks 100
          title: {
            display: true,
            text: 'Skor'
          }
        },
        y: {
          ticks: {
            font: {
              size: 11 // Ukuran font label
            }
          }
        }
      }
    };

    // 1. Grafik SDGs 1-9
    const ctx1 = document.getElementById('sdgsChart1');
    if (ctx1) {
      new Chart(ctx1.getContext('2d'), {
        type: 'bar',
        data: {
          labels: [
            '1. Desa Tanpa Kemiskinan',
            '2. Desa Tanpa Kelaparan',
            '3. Desa Sehat dan Sejahtera',
            '4. Pendidikan Desa Berkualitas',
            '5. Keterlibatan Perempuan Desa',
            '6. Desa Layak Air Bersih',
            '7. Desa Berenergi Bersih',
            '8. Pertumbuhan Ekonomi Merata',
            '9. Infrastruktur & Inovasi'
          ],
          datasets: [{
            label: 'Skor SDGs',
            data: [79.51, 67.24, 71.91, 48.64, 0.00, 58.11, 58.33, 44.44, 26.67],
            backgroundColor: colors
          }]
        },
        options: options
      });
    }

    // 2. Grafik SDGs 10-18
    const ctx2 = document.getElementById('sdgsChart2');
    if (ctx2) {
      new Chart(ctx2.getContext('2d'), {
        type: 'bar',
        data: {
          labels: [
            '10. Desa Tanpa Kesenjangan',
            '11. Kawasan Permukiman Desa',
            '12. Konsumsi & Produksi Desa',
            '13. Desa Tanggap Perubahan Iklim',
            '14. Desa Peduli Lingkungan Laut',
            '15. Desa Peduli Lingkungan Darat',
            '16. Desa Damai Berkeadilan',
            '17. Kemitraan Pembangunan Desa',
            '18. Kelembagaan Desa Dinamis'
          ],
          datasets: [{
            label: 'Skor SDGs',
            data: [60.10, 54.34, 33.33, 100.00, 100.00, 100.00, 80.00, 93.33, 40.00],
            backgroundColor: colors
          }]
        },
        options: options
      });
    }

  });
</script>