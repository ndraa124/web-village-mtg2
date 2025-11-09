<style>
  .bansos-card {
    transition: all 0.3s ease;
  }

  .bansos-card:hover {
    transform: translateY(-5px);
  }

  .progress-circle {
    transform: rotate(-90deg);
  }

  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .slide-in-left {
    animation: slideInLeft 0.5s ease-out;
  }

  .status-badge {
    display: inline-flex;
    align-items: center;
    padding: 4px 12px;
    border-radius: 9999px;
    font-size: 12px;
    font-weight: 600;
  }

  .status-active {
    background-color: #dcfce7;
    color: #166534;
  }

  .status-pending {
    background-color: #fef3c7;
    color: #92400e;
  }

  .status-inactive {
    background-color: #fee2e2;
    color: #991b1b;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Quick Stats -->
<section class="pt-8 ">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <div class="bansos-card bg-white rounded-lg shadow-lg p-6 text-center border-t-4 border-green-600">
        <i class="fas fa-users text-3xl text-green-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="1247">0</h3>
        <p class="text-gray-600 font-semibold">Total Penerima</p>
        <p class="text-xs text-gray-500 mt-1">Keluarga Penerima Manfaat</p>
      </div>

      <div class="bansos-card bg-white rounded-lg shadow-lg p-6 text-center border-t-4 border-blue-600">
        <i class="fas fa-box-open text-3xl text-blue-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="8">0</h3>
        <p class="text-gray-600 font-semibold">Jenis Bantuan</p>
        <p class="text-xs text-gray-500 mt-1">Program Aktif</p>
      </div>

      <div class="bansos-card bg-white rounded-lg shadow-lg p-6 text-center border-t-4 border-yellow-600">
        <i class="fas fa-calendar-check text-3xl text-yellow-600 mb-3"></i>
        <h3 class="text-3xl font-bold text-gray-800 counter" data-target="95">0</h3>
        <p class="text-gray-600 font-semibold">Tersalurkan (%)</p>
        <p class="text-xs text-gray-500 mt-1">Realisasi Penyaluran</p>
      </div>

      <div class="bansos-card bg-white rounded-lg shadow-lg p-6 text-center border-t-4 border-red-600">
        <i class="fas fa-money-bill-wave text-3xl text-red-600 mb-3"></i>
        <h3 class="text-2xl font-bold text-gray-800">2.8 M</h3>
        <p class="text-gray-600 font-semibold">Total Anggaran</p>
        <p class="text-xs text-gray-500 mt-1">Tahun 2024</p>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="py-12">
  <div class="container mx-auto px-4">

    <!-- Program Details -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-list-alt text-red-600 mr-2"></i>
        Jenis Program Bantuan Sosial
      </h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- PKH -->
        <div class="border rounded-lg hover:shadow-lg transition">
          <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-4 rounded-t-lg">
            <h3 class="font-bold text-lg">Program Keluarga Harapan (PKH)</h3>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <span class="text-gray-600">Penerima:</span>
              <span class="font-bold text-2xl text-gray-800">325 KK</span>
            </div>
            <div class="mb-4">
              <div class="flex justify-between text-sm mb-1">
                <span class="text-gray-600">Realisasi</span>
                <span class="font-semibold">98%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full" style="width: 98%"></div>
              </div>
            </div>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-600">Bantuan/KK:</span>
                <span class="font-semibold">Rp 3.000.000/tahun</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Periode:</span>
                <span class="font-semibold">4x setahun</span>
              </div>
            </div>
            <div class="mt-4">
              <span class="status-badge status-active">
                <i class="fas fa-check-circle mr-1"></i> Aktif
              </span>
            </div>
          </div>
        </div>

        <!-- BPNT -->
        <div class="border rounded-lg hover:shadow-lg transition">
          <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-4 rounded-t-lg">
            <h3 class="font-bold text-lg">Bantuan Pangan Non Tunai (BPNT)</h3>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <span class="text-gray-600">Penerima:</span>
              <span class="font-bold text-2xl text-gray-800">450 KK</span>
            </div>
            <div class="mb-4">
              <div class="flex justify-between text-sm mb-1">
                <span class="text-gray-600">Realisasi</span>
                <span class="font-semibold">100%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
              </div>
            </div>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-600">Bantuan/KK:</span>
                <span class="font-semibold">Rp 200.000/bulan</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Periode:</span>
                <span class="font-semibold">Setiap bulan</span>
              </div>
            </div>
            <div class="mt-4">
              <span class="status-badge status-active">
                <i class="fas fa-check-circle mr-1"></i> Aktif
              </span>
            </div>
          </div>
        </div>

        <!-- BLT -->
        <div class="border rounded-lg hover:shadow-lg transition">
          <div class="bg-gradient-to-r from-red-500 to-red-600 text-white p-4 rounded-t-lg">
            <h3 class="font-bold text-lg">BLT Dana Desa</h3>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <span class="text-gray-600">Penerima:</span>
              <span class="font-bold text-2xl text-gray-800">275 KK</span>
            </div>
            <div class="mb-4">
              <div class="flex justify-between text-sm mb-1">
                <span class="text-gray-600">Realisasi</span>
                <span class="font-semibold">95%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-red-600 h-2 rounded-full" style="width: 95%"></div>
              </div>
            </div>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-600">Bantuan/KK:</span>
                <span class="font-semibold">Rp 300.000/bulan</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Periode:</span>
                <span class="font-semibold">3 bulan</span>
              </div>
            </div>
            <div class="mt-4">
              <span class="status-badge status-active">
                <i class="fas fa-check-circle mr-1"></i> Aktif
              </span>
            </div>
          </div>
        </div>

        <!-- PBI JKN -->
        <div class="border rounded-lg hover:shadow-lg transition">
          <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-4 rounded-t-lg">
            <h3 class="font-bold text-lg">PBI JKN (BPJS Kesehatan)</h3>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <span class="text-gray-600">Penerima:</span>
              <span class="font-bold text-2xl text-gray-800">892 Jiwa</span>
            </div>
            <div class="mb-4">
              <div class="flex justify-between text-sm mb-1">
                <span class="text-gray-600">Realisasi</span>
                <span class="font-semibold">100%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-purple-600 h-2 rounded-full" style="width: 100%"></div>
              </div>
            </div>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-600">Iuran/jiwa:</span>
                <span class="font-semibold">Rp 42.000/bulan</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Periode:</span>
                <span class="font-semibold">Setiap bulan</span>
              </div>
            </div>
            <div class="mt-4">
              <span class="status-badge status-active">
                <i class="fas fa-check-circle mr-1"></i> Aktif
              </span>
            </div>
          </div>
        </div>

        <!-- PIP -->
        <div class="border rounded-lg hover:shadow-lg transition">
          <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white p-4 rounded-t-lg">
            <h3 class="font-bold text-lg">Program Indonesia Pintar (PIP)</h3>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <span class="text-gray-600">Penerima:</span>
              <span class="font-bold text-2xl text-gray-800">186 Siswa</span>
            </div>
            <div class="mb-4">
              <div class="flex justify-between text-sm mb-1">
                <span class="text-gray-600">Realisasi</span>
                <span class="font-semibold">90%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-yellow-600 h-2 rounded-full" style="width: 90%"></div>
              </div>
            </div>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-600">Bantuan:</span>
                <span class="font-semibold">Rp 450K-1jt/tahun</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Periode:</span>
                <span class="font-semibold">2x setahun</span>
              </div>
            </div>
            <div class="mt-4">
              <span class="status-badge status-active">
                <i class="fas fa-check-circle mr-1"></i> Aktif
              </span>
            </div>
          </div>
        </div>

        <!-- Bansos Lainnya -->
        <div class="border rounded-lg hover:shadow-lg transition">
          <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 text-white p-4 rounded-t-lg">
            <h3 class="font-bold text-lg">Bantuan Sosial Lainnya</h3>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <span class="text-gray-600">Penerima:</span>
              <span class="font-bold text-2xl text-gray-800">125 KK</span>
            </div>
            <div class="mb-4">
              <div class="flex justify-between text-sm mb-1">
                <span class="text-gray-600">Realisasi</span>
                <span class="font-semibold">85%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-indigo-600 h-2 rounded-full" style="width: 85%"></div>
              </div>
            </div>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-600">Jenis:</span>
                <span class="font-semibold">Beragam</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Periode:</span>
                <span class="font-semibold">Insidental</span>
              </div>
            </div>
            <div class="mt-4">
              <span class="status-badge status-pending">
                <i class="fas fa-clock mr-1"></i> Berjalan
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Distribution Chart -->
    <div class="grid md:grid-cols-2 gap-8 mb-12">
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">
          <i class="fas fa-chart-pie text-red-600 mr-2"></i>
          Distribusi Penerima Bantuan
        </h3>
        <canvas id="distributionChart"></canvas>
      </div>

      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">
          <i class="fas fa-chart-line text-blue-600 mr-2"></i>
          Tren Penyaluran Bulanan
        </h3>
        <canvas id="trendChart"></canvas>
      </div>
    </div>

    <!-- Data by Dusun -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-map-marked-alt text-red-600 mr-2"></i>
        Sebaran Penerima Bantuan per Dusun
      </h3>

      <div class="overflow-x-auto">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-gradient-to-r from-red-600 to-red-700 text-white">
              <th class="px-4 py-3 text-left">Wilayah</th>
              <th class="px-4 py-3 text-center">PKH</th>
              <th class="px-4 py-3 text-center">BPNT</th>
              <th class="px-4 py-3 text-center">BLT DD</th>
              <th class="px-4 py-3 text-center">PBI JKN</th>
              <th class="px-4 py-3 text-center">PIP</th>
              <th class="px-4 py-3 text-center">Lainnya</th>
              <th class="px-4 py-3 text-center">Total KK</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-semibold">Dusun I</td>
              <td class="px-4 py-3 text-center">112</td>
              <td class="px-4 py-3 text-center">156</td>
              <td class="px-4 py-3 text-center">95</td>
              <td class="px-4 py-3 text-center">298</td>
              <td class="px-4 py-3 text-center">65</td>
              <td class="px-4 py-3 text-center">42</td>
              <td class="px-4 py-3 text-center font-bold text-red-600">415</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-semibold">Dusun II</td>
              <td class="px-4 py-3 text-center">108</td>
              <td class="px-4 py-3 text-center">148</td>
              <td class="px-4 py-3 text-center">92</td>
              <td class="px-4 py-3 text-center">310</td>
              <td class="px-4 py-3 text-center">62</td>
              <td class="px-4 py-3 text-center">45</td>
              <td class="px-4 py-3 text-center font-bold text-red-600">408</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-semibold">Dusun III</td>
              <td class="px-4 py-3 text-center">105</td>
              <td class="px-4 py-3 text-center">146</td>
              <td class="px-4 py-3 text-center">88</td>
              <td class="px-4 py-3 text-center">284</td>
              <td class="px-4 py-3 text-center">59</td>
              <td class="px-4 py-3 text-center">38</td>
              <td class="px-4 py-3 text-center font-bold text-red-600">424</td>
            </tr>
            <tr class="bg-gray-100 font-bold">
              <td class="px-4 py-3">TOTAL</td>
              <td class="px-4 py-3 text-center text-blue-600">325</td>
              <td class="px-4 py-3 text-center text-green-600">450</td>
              <td class="px-4 py-3 text-center text-red-600">275</td>
              <td class="px-4 py-3 text-center text-purple-600">892</td>
              <td class="px-4 py-3 text-center text-yellow-600">186</td>
              <td class="px-4 py-3 text-center text-indigo-600">125</td>
              <td class="px-4 py-3 text-center text-red-700 text-lg">1,247</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="mt-6 grid md:grid-cols-3 gap-4">
        <div class="bg-blue-50 border-l-4 border-blue-600 p-4">
          <p class="text-blue-800 font-semibold">
            <i class="fas fa-info-circle mr-2"></i>
            Catatan:
          </p>
          <p class="text-sm text-blue-700 mt-1">
            Satu KK dapat menerima lebih dari satu jenis bantuan sosial
          </p>
        </div>
        <div class="bg-green-50 border-l-4 border-green-600 p-4">
          <p class="text-green-800 font-semibold">
            <i class="fas fa-check-circle mr-2"></i>
            Verifikasi:
          </p>
          <p class="text-sm text-green-700 mt-1">
            Data telah diverifikasi per 1 Desember 2024
          </p>
        </div>
        <div class="bg-yellow-50 border-l-4 border-yellow-600 p-4">
          <p class="text-yellow-800 font-semibold">
            <i class="fas fa-sync-alt mr-2"></i>
            Update:
          </p>
          <p class="text-sm text-yellow-700 mt-1">
            Data diperbaharui setiap awal bulan
          </p>
        </div>
      </div>
    </div>

    <!-- Kriteria Penerima -->
    <div class="bg-gradient-to-br from-gray-50 to-white rounded-lg shadow-lg p-8 mb-12">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-clipboard-list text-red-600 mr-2"></i>
        Kriteria Penerima Bantuan Sosial
      </h3>

      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <h4 class="font-bold text-gray-800 mb-4">
            <i class="fas fa-check text-green-600 mr-2"></i>
            Kriteria Umum Penerima
          </h4>
          <ul class="space-y-2 text-gray-700">
            <li class="flex items-start">
              <i class="fas fa-chevron-right text-red-500 mt-1 mr-2"></i>
              <span>Warga Negara Indonesia dengan KTP/KK Desa Motoling Dua</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-chevron-right text-red-500 mt-1 mr-2"></i>
              <span>Terdaftar dalam Data Terpadu Kesejahteraan Sosial (DTKS)</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-chevron-right text-red-500 mt-1 mr-2"></i>
              <span>Pendapatan di bawah garis kemiskinan regional</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-chevron-right text-red-500 mt-1 mr-2"></i>
              <span>Tidak memiliki aset produktif yang memadai</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-chevron-right text-red-500 mt-1 mr-2"></i>
              <span>Kondisi rumah tidak layak huni</span>
            </li>
          </ul>
        </div>

        <div>
          <h4 class="font-bold text-gray-800 mb-4">
            <i class="fas fa-users text-blue-600 mr-2"></i>
            Prioritas Penerima
          </h4>
          <ul class="space-y-2 text-gray-700">
            <li class="flex items-start">
              <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-semibold mr-2">1</span>
              <span>Keluarga dengan ibu hamil/menyusui</span>
            </li>
            <li class="flex items-start">
              <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs font-semibold mr-2">2</span>
              <span>Keluarga dengan balita/anak usia sekolah</span>
            </li>
            <li class="flex items-start">
              <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-semibold mr-2">3</span>
              <span>Lansia sebatang kara/terlantar</span>
            </li>
            <li class="flex items-start">
              <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-semibold mr-2">4</span>
              <span>Penyandang disabilitas</span>
            </li>
            <li class="flex items-start">
              <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs font-semibold mr-2">5</span>
              <span>Kepala keluarga perempuan (janda)</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Pengaduan Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-lg p-8 text-white mb-12">
      <div class="text-center">
        <i class="fas fa-bullhorn text-5xl mb-4 opacity-50"></i>
        <h3 class="text-2xl font-bold mb-4">Layanan Pengaduan Bantuan Sosial</h3>
        <p class="mb-6 text-white/90 max-w-2xl mx-auto">
          Laporkan jika Anda merasa berhak menerima bantuan namun belum terdaftar,
          atau jika menemukan penyimpangan dalam penyaluran bantuan sosial.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="#" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-50 transition">
            <i class="fas fa-edit mr-2"></i>
            Form Pengaduan Online
          </a>
          <a href="https://wa.me/6281234567890" class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition border-2 border-white">
            <i class="fab fa-whatsapp mr-2"></i>
            WhatsApp Pengaduan
          </a>
        </div>
      </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white rounded-lg shadow-lg p-8">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-question-circle text-red-600 mr-2"></i>
        Pertanyaan yang Sering Diajukan (FAQ)
      </h3>

      <div class="space-y-4">
        <details class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
          <summary class="font-semibold text-gray-800 flex items-center justify-between">
            Bagaimana cara mendaftar bantuan sosial?
            <i class="fas fa-chevron-down text-gray-500"></i>
          </summary>
          <p class="mt-3 text-gray-600">
            Pendaftaran dilakukan melalui RT/RW setempat dengan membawa KTP, KK, dan surat keterangan tidak mampu.
            Data akan diverifikasi oleh tim verifikasi desa sebelum diusulkan ke sistem DTKS.
          </p>
        </details>

        <details class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
          <summary class="font-semibold text-gray-800 flex items-center justify-between">
            Kapan bantuan sosial disalurkan?
            <i class="fas fa-chevron-down text-gray-500"></i>
          </summary>
          <p class="mt-3 text-gray-600">
            Jadwal penyaluran berbeda untuk setiap program. PKH disalurkan 4x setahun, BPNT setiap bulan,
            BLT Dana Desa per 3 bulan, dan PIP 2x setahun. Informasi detail dapat ditanyakan ke Kantor Desa.
          </p>
        </details>

        <details class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
          <summary class="font-semibold text-gray-800 flex items-center justify-between">
            Apakah bisa menerima lebih dari satu jenis bantuan?
            <i class="fas fa-chevron-down text-gray-500"></i>
          </summary>
          <p class="mt-3 text-gray-600">
            Ya, satu keluarga dapat menerima lebih dari satu jenis bantuan sosial selama memenuhi kriteria
            masing-masing program dan terdaftar dalam DTKS.
          </p>
        </details>

        <details class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
          <summary class="font-semibold text-gray-800 flex items-center justify-between">
            Bagaimana jika data penerima tidak sesuai?
            <i class="fas fa-chevron-down text-gray-500"></i>
          </summary>
          <p class="mt-3 text-gray-600">
            Segera laporkan ke Kantor Desa atau melalui layanan pengaduan online. Tim verifikasi akan melakukan
            pengecekan ulang dan update data jika diperlukan.
          </p>
        </details>
      </div>
    </div>

  </div>
</section>

<!-- Chart Scripts -->
<script>
  // Distribution Chart
  const ctx1 = document.getElementById('distributionChart').getContext('2d');
  new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: ['PKH', 'BPNT', 'BLT DD', 'PBI JKN', 'PIP', 'Lainnya'],
      datasets: [{
        data: [325, 450, 275, 892, 186, 125],
        backgroundColor: [
          'rgba(59, 130, 246, 0.8)',
          'rgba(34, 197, 94, 0.8)',
          'rgba(239, 68, 68, 0.8)',
          'rgba(147, 51, 234, 0.8)',
          'rgba(245, 158, 11, 0.8)',
          'rgba(99, 102, 241, 0.8)'
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
              label += context.parsed + ' penerima';
              return label;
            }
          }
        }
      }
    }
  });

  // Trend Chart
  const ctx2 = document.getElementById('trendChart').getContext('2d');
  new Chart(ctx2, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'],
      datasets: [{
        label: 'Realisasi Penyaluran (%)',
        data: [85, 88, 90, 92, 93, 94, 95, 95, 96, 96, 97, 95],
        borderColor: 'rgb(59, 130, 246)',
        backgroundColor: 'rgba(59, 130, 246, 0.1)',
        tension: 0.4,
        fill: true
      }, {
        label: 'Target (%)',
        data: [100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100],
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
          max: 105
        }
      }
    }
  });
</script>