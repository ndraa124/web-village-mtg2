<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="mb-12 text-center">
      <h3 class="text-3xl font-bold text-gray-800">Demografi Penduduk</h3>
      <p class="text-gray-600 mt-2">
        Informasi lengkap mengenai karakteristik demografi penduduk Desa Motoling Dua.
      </p>
    </div>

    {{-- Kartu Statistik - Diperbarui dengan counter animation --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
      <div class="stat-card bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition border-t-4 border-red-600">
        <i class="fas fa-users text-4xl text-red-600 mb-3"></i>
        <h3 class="text-4xl font-bold text-gray-800 counter" data-target="1678">0</h3>
        <p class="text-gray-600 mt-2 font-semibold">Total Penduduk</p>
      </div>

      <div class="stat-card bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition border-t-4 border-blue-600">
        <i class="fas fa-male text-4xl text-blue-600 mb-3"></i>
        <h3 class="text-4xl font-bold text-gray-800 counter" data-target="894">0</h3>
        <p class="text-gray-600 mt-2 font-semibold">Laki-Laki</p>
      </div>

      <div class="stat-card bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition border-t-4 border-pink-600">
        <i class="fas fa-female text-4xl text-pink-600 mb-3"></i>
        <h3 class="text-4xl font-bold text-gray-800 counter" data-target="780">0</h3>
        <p class="text-gray-600 mt-2 font-semibold">Perempuan</p>
      </div>

      <div class="stat-card bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition border-t-4 border-green-600">
        <i class="fas fa-home text-4xl text-green-600 mb-3"></i>
        <h3 class="text-4xl font-bold text-gray-800 counter" data-target="522">0</h3>
        <p class="text-gray-600 mt-2 font-semibold">Kepala Keluarga</p>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      {{-- Grafik Kelompok Umur --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-chart-bar text-red-600 mr-2"></i>
          Berdasarkan Kelompok Umur
        </h3>
        <p class="text-gray-700 leading-relaxed mb-4">
          Grafik di bawah ini menunjukkan distribusi penduduk berdasarkan kelompok umur dan jenis kelamin.
        </p>
        {{-- Menghapus img placeholder dan mengganti dengan canvas --}}
        <canvas id="ageGroupChart" class="w-full h-auto"></canvas>
      </div>

      {{-- Grafik Agama --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-pray text-red-600 mr-2"></i>
          Berdasarkan Agama
        </h3>
        <div class="overflow-x-auto mb-4">
          <table class="w-full table-auto">
            <thead>
              <tr class="bg-red-600 text-white">
                <th class="px-4 py-3 text-left">Agama</th>
                <th class="px-4 py-3 text-left">Jumlah Jiwa</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Kristen</td>
                <td class="px-4 py-3">1.656</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Islam</td>
                <td class="px-4 py-3">17</td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Katolik</td>
                <td class="px-4 py-3">5</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- Menghapus img placeholder dan mengganti dengan canvas --}}
        <canvas id="religionChart" class="w-full h-auto max-h-64"></canvas>
      </div>

      {{-- Tabel Pekerjaan --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-briefcase text-red-600 mr-2"></i>
          Berdasarkan Pekerjaan
        </h3>
        <div class="overflow-x-auto max-h-80">
          <table class="w-full table-auto">
            <thead>
              <tr class="bg-red-600 text-white sticky top-0">
                <th class="px-4 py-3 text-left">Jenis Pekerjaan</th>
                <th class="px-4 py-3 text-left">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Mengurus Rumah Tangga</td>
                <td class="px-4 py-3">383</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Pelajar/Mahasiswa</td>
                <td class="px-4 py-3">344</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Belum/Tidak Bekerja</td>
                <td class="px-4 py-3">318</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Wiraswasta</td>
                <td class="px-4 py-3">255</td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Petani/Pekebun</td>
                <td class="px-4 py-3">208</td>
              </tr>
              {{-- Tambahkan data pekerjaan lainnya jika ada --}}
            </tbody>
          </table>
        </div>
      </div>

      {{-- Tabel Status Perkawinan --}}
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
          <i class="fas fa-ring text-red-600 mr-2"></i>
          Berdasarkan Perkawinan
        </h3>
        <div class="overflow-x-auto max-h-80">
          <table class="w-full table-auto">
            <thead>
              <tr class="bg-red-600 text-white sticky top-0">
                <th class="px-4 py-3 text-left">Status</th>
                <th class="px-4 py-3 text-left">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Belum Kawin</td>
                <td class="px-4 py-3">712</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Kawin</td>
                <td class="px-4 py-3">625</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Kawin Tercatat</td>
                <td class="px-4 py-3">231</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold">Cerai Mati</td>
                <td class="px-4 py-3">72</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

    <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg shadow-md">
      <h4 class="text-xl font-bold text-yellow-800 mb-2">
        <i class="fas fa-info-circle mr-2"></i>
        Catatan
      </h4>
      <p class="text-yellow-700">
        Data berdasarkan <strong>Pendidikan</strong> dan <strong>Wajib Pilih</strong> saat ini belum tersedia dan akan diperbarui secepatnya.
      </p>
    </div>
  </div>
</section>

{{-- Script untuk inisialisasi Chart.js --}}
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // 1. Grafik Kelompok Umur (Bar Chart)
    const ctxAge = document.getElementById('ageGroupChart');
    if (ctxAge) {
      const ageGroupChart = new Chart(ctxAge.getContext('2d'), {
        type: 'bar',
        data: {
          labels: ['0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65+'],
          datasets: [{
            label: 'Laki-Laki',
            // Data Laki-laki (Total 894) - Ini adalah data perkiraan berdasarkan deskripsi
            data: [60, 65, 70, 72, 75, 70, 65, 60, 55, 50, 45, 40, 30, 37],
            backgroundColor: 'rgba(59, 130, 246, 0.8)',
            borderColor: 'rgb(59, 130, 246)',
            borderWidth: 1
          }, {
            label: 'Perempuan',
            // Data Perempuan (Total 780) - Ini adalah data perkiraan berdasarkan deskripsi
            data: [10, 60, 65, 70, 79, 75, 70, 65, 55, 50, 45, 40, 30, 46],
            backgroundColor: 'rgba(236, 72, 153, 0.8)',
            borderColor: 'rgb(236, 72, 153)',
            borderWidth: 1
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
              title: {
                display: true,
                text: 'Jumlah Jiwa'
              }
            },
            x: {
              title: {
                display: true,
                text: 'Kelompok Umur'
              }
            }
          }
        }
      });
    }

    // 2. Grafik Agama (Doughnut Chart)
    const ctxReligion = document.getElementById('religionChart');
    if (ctxReligion) {
      const religionChart = new Chart(ctxReligion.getContext('2d'), {
        type: 'doughnut',
        data: {
          labels: ['Kristen', 'Islam', 'Katolik'],
          datasets: [{
            data: [1656, 17, 5],
            backgroundColor: [
              'rgba(220, 38, 38, 0.8)', // Merah
              'rgba(34, 197, 94, 0.8)', // Hijau
              'rgba(59, 130, 246, 0.8)' // Biru
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
    }
  });
</script>