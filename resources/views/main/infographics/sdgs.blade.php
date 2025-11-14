<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-8 rounded-3xl shadow-xl mb-16">
      <div class="flex items-start">
        <i class="fas fa-info-circle text-yellow-600 text-2xl mr-4 mt-1"></i>
        <div>
          <h3 class="font-bold text-lg text-gray-800 mb-2">Apa itu SDGs Desa?</h3>
          <p class="text-gray-700 leading-relaxed">
            SDGs Desa adalah upaya terpadu untuk mewujudkan pembangunan berkelanjutan yang dimulai dari desa.
            Terdapat 18 tujuan yang mencakup pengentasan kemiskinan, peningkatan kesehatan dan pendidikan,
            kesetaraan gender, pengelolaan lingkungan, hingga kelembagaan desa yang dinamis.
            Skor diukur dari 0 hingga 100, di mana 100 adalah pencapaian tertinggi.
          </p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-red-600 hover:scale-[1.03] hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-star-half-alt text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 mb-2">56.41</h3>
        <p class="text-gray-600 font-semibold">SKOR TOTAL SDGs</p>
        <div class="mt-3 text-xs text-gray-500">
          <i class="fas fa-calendar-alt mr-1"></i>
          <span>Data Tahun 2023</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-green-600 hover:scale-[1.03] hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-arrow-circle-up text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 mb-2">100.00</h3>
        <p class="text-gray-600 font-semibold">SKOR TERTINGGI</p>
        <div class="mt-3 text-xs text-green-600 font-semibold">
          <i class="fas fa-check-circle mr-1"></i>
          <span>SDGs 13, 14, 15 (Lingkungan)</span>
        </div>
      </div>

      <div class="stat-card group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-t-4 border-yellow-600 hover:scale-[1.03] hover:-translate-y-2">
        <div class="relative inline-flex items-center justify-center w-16 h-16 mb-4">
          <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity blur-xl"></div>
          <div class="relative bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl p-4 group-hover:rotate-6 transition-transform duration-500">
            <i class="fas fa-arrow-circle-down text-2xl text-white"></i>
          </div>
        </div>
        <h3 class="text-4xl font-bold text-gray-800 mb-2">0.00</h3>
        <p class="text-gray-600 font-semibold">SKOR TERENDAH</Fp>
        <div class="mt-3 text-xs text-yellow-600 font-semibold">
          <i class="fas fa-exclamation-circle mr-1"></i>
          <span>SDGs 5 (Keterlibatan Perempuan)</span>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-16">
      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-bar text-red-600 mr-2"></i>
          Skor SDGs Desa (Tujuan 1-9)
        </h3>
        <canvas id="sdgsChart1" class="w-full h-auto"></canvas>
      </div>

      <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-bar text-red-600 mr-2"></i>
          Skor SDGs Desa (Tujuan 10-18)
        </h3>
        <canvas id="sdgsChart2" class="w-full h-auto"></canvas>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
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

    const formatTooltip = (tooltipItem) => {
      return 'Skor: ' + (tooltipItem.raw || 0).toFixed(2);
    };

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
          max: 100,
          title: {
            display: true,
            text: 'Skor'
          }
        },
        y: {
          ticks: {
            font: {
              size: 11
            }
          }
        }
      }
    };

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
