<style>
  .card-hover {
    transition: all 0.3s ease;
  }

  .card-hover:hover {
    transform: translateY(-8px) scale(1.02);
  }

  details>summary {
    list-style: none;
    cursor: pointer;
  }

  details>summary::-webkit-details-marker {
    display: none;
  }

  details>summary::before {
    content: '+';
    font-size: 1.8rem;
    font-weight: 300;
    margin-right: 1rem;
    color: #dc2626;
    transition: transform 0.3s ease;
    display: inline-block;
  }

  details[open]>summary::before {
    content: '−';
    transform: rotate(180deg);
  }

  details[open] {
    background: linear-gradient(to bottom right, #fef2f2, #fee2e2);
    border-color: #fca5a5;
  }
</style>

<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="mb-20">
      <div class="text-center mb-12">
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
          <i class="fas fa-clipboard-list text-red-600 mr-2"></i>
          Jenis Layanan
        </h3>
        <p class="text-gray-600">Pilih layanan yang Anda butuhkan</p>
        <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 hover:border-red-300 hover:shadow-2xl">
          <div class="bg-gradient-to-br from-red-50 to-white p-6">
            <div class="relative">
              <div class="absolute inset-0 bg-red-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
              <div class="relative w-20 h-20 bg-gradient-to-br from-red-500 to-red-700 text-white rounded-2xl flex items-center justify-center mx-auto shadow-xl transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="fas fa-id-card text-4xl"></i>
              </div>
            </div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-red-600 transition-colors">Layanan E-KTP</h4>
            <p class="text-gray-600 mb-4 leading-relaxed">Pengajuan KTP baru, perpanjangan, atau penggantian KTP yang rusak/hilang.</p>
            <a href="#" class="inline-flex items-center text-red-600 font-semibold hover:text-red-700 transition-colors group/link">
              Ajukan Sekarang →
              <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 hover:border-blue-300 hover:shadow-2xl">
          <div class="bg-gradient-to-br from-blue-50 to-white p-6">
            <div class="relative">
              <div class="absolute inset-0 bg-blue-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
              <div class="relative w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-2xl flex items-center justify-center mx-auto shadow-xl transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="fas fa-file-alt text-4xl"></i>
              </div>
            </div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">Surat Keterangan</h4>
            <p class="text-gray-600 mb-4 leading-relaxed">Pengajuan Surat Keterangan Usaha (SKU), Domisili, Tidak Mampu (SKTM), dll.</p>
            <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors group/link">
              Ajukan Sekarang →
              <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 hover:border-green-300 hover:shadow-2xl">
          <div class="bg-gradient-to-br from-green-50 to-white p-6">
            <div class="relative">
              <div class="absolute inset-0 bg-green-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
              <div class="relative w-20 h-20 bg-gradient-to-br from-green-500 to-green-700 text-white rounded-2xl flex items-center justify-center mx-auto shadow-xl transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="fas fa-baby text-4xl"></i>
              </div>
            </div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">Akta Kelahiran</h4>
            <p class="text-gray-600 mb-4 leading-relaxed">Pengajuan pembuatan Akta Kelahiran baru bagi warga yang baru melahirkan.</p>
            <a href="#" class="inline-flex items-center text-green-600 font-semibold hover:text-green-700 transition-colors group/link">
              Ajukan Sekarang →
              <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 hover:border-gray-400 hover:shadow-2xl">
          <div class="bg-gradient-to-br from-gray-50 to-white p-6">
            <div class="relative">
              <div class="absolute inset-0 bg-gray-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
              <div class="relative w-20 h-20 bg-gradient-to-br from-gray-600 to-gray-800 text-white rounded-2xl flex items-center justify-center mx-auto shadow-xl transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="fas fa-cross text-4xl"></i>
              </div>
            </div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-gray-700 transition-colors">Akta Kematian</h4>
            <p class="text-gray-600 mb-4 leading-relaxed">Pengajuan Akta Kematian sebagai dokumen resmi pencatatan kependudukan.</p>
            <a href="#" class="inline-flex items-center text-gray-700 font-semibold hover:text-gray-800 transition-colors group/link">
              Ajukan Sekarang →
              <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 hover:border-purple-300 hover:shadow-2xl">
          <div class="bg-gradient-to-br from-purple-50 to-white p-6">
            <div class="relative">
              <div class="absolute inset-0 bg-purple-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
              <div class="relative w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-700 text-white rounded-2xl flex items-center justify-center mx-auto shadow-xl transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="fas fa-truck-moving text-4xl"></i>
              </div>
            </div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors">Surat Pindah</h4>
            <p class="text-gray-600 mb-4 leading-relaxed">Layanan pengurusan surat pindah domisili (datang atau keluar) desa.</p>
            <a href="#" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700 transition-colors group/link">
              Ajukan Sekarang →
              <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 hover:border-yellow-300 hover:shadow-2xl">
          <div class="bg-gradient-to-br from-yellow-50 to-white p-6">
            <div class="relative">
              <div class="absolute inset-0 bg-yellow-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
              <div class="relative w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-700 text-white rounded-2xl flex items-center justify-center mx-auto shadow-xl transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="fas fa-store text-4xl"></i>
              </div>
            </div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-yellow-600 transition-colors">Izin UMKM</h4>
            <p class="text-gray-600 mb-4 leading-relaxed">Bantuan pengajuan perizinan usaha mikro, kecil, dan menengah (NIB, P-IRT).</p>
            <a href="#" class="inline-flex items-center text-yellow-600 font-semibold hover:text-yellow-700 transition-colors group/link">
              Ajukan Sekarang →
              <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-20">
      <div class="text-center mb-12">
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
          <i class="fas fa-route text-red-600 mr-2"></i>
          Alur Pelayanan
        </h3>
        <p class="text-gray-600">Langkah mudah mendapatkan layanan</p>
        <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
      </div>

      <div class="relative">
        <div class="hidden md:block absolute top-1/2 left-0 right-0 h-1 bg-red-200 transform -translate-y-1/2 z-0"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10">
          <div class="group text-center">
            <div class="relative inline-block mb-6">
              <div class="absolute inset-0 bg-red-400 rounded-full blur-2xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
              <div class="relative w-28 h-28 bg-gradient-to-br from-red-600 to-red-700 text-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-all duration-300 border-4 border-white">
                <span class="text-5xl font-extrabold">1</span>
              </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-shadow border border-gray-100">
              <h4 class="text-xl font-bold text-gray-800 mb-3">Datang ke Kantor Desa</h4>
              <p class="text-gray-600 leading-relaxed">Bawa dokumen persyaratan yang diperlukan sesuai layanan yang dituju</p>
            </div>
          </div>

          <div class="group text-center">
            <div class="relative inline-block mb-6">
              <div class="absolute inset-0 bg-red-400 rounded-full blur-2xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
              <div class="relative w-28 h-28 bg-gradient-to-br from-red-600 to-red-700 text-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-all duration-300 border-4 border-white">
                <span class="text-5xl font-extrabold">2</span>
              </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-shadow border border-gray-100">
              <h4 class="text-xl font-bold text-gray-800 mb-3">Ambil Nomor Antrian</h4>
              <p class="text-gray-600 leading-relaxed">Menuju loket pelayanan dan sampaikan keperluan Anda kepada petugas</p>
            </div>
          </div>

          <div class="group text-center">
            <div class="relative inline-block mb-6">
              <div class="absolute inset-0 bg-red-400 rounded-full blur-2xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
              <div class="relative w-28 h-28 bg-gradient-to-br from-red-600 to-red-700 text-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-all duration-300 border-4 border-white">
                <span class="text-5xl font-extrabold">3</span>
              </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-shadow border border-gray-100">
              <h4 class="text-xl font-bold text-gray-800 mb-3">Proses & Verifikasi</h4>
              <p class="text-gray-600 leading-relaxed">Petugas akan memverifikasi data. Dokumen diproses dalam 1-3 hari kerja</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-4xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
          <i class="fas fa-question-circle text-red-600 mr-2"></i>
          Pertanyaan yang Sering Diajukan
        </h3>
        <p class="text-gray-600">Jawaban untuk pertanyaan umum seputar layanan</p>
        <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
      </div>

      <div class="space-y-4">
        <details class="group bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 border-2 border-gray-200 hover:border-red-300">
          <summary class="flex justify-between items-center font-bold text-lg text-gray-800 cursor-pointer">
            <span>Apa jam operasional kantor desa?</span>
          </summary>
          <div class="mt-4 pt-4 border-t border-gray-200">
            <p class="text-gray-600 leading-relaxed">
              Jam pelayanan Kantor Desa Motoling Dua adalah:
            </p>
            <ul class="mt-3 space-y-2 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-clock text-red-600 mr-3 mt-1"></i>
                <span><strong>Senin - Kamis:</strong> 08.00 - 16.00 WITA</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-clock text-red-600 mr-3 mt-1"></i>
                <span><strong>Jumat:</strong> 08.00 - 15.00 WITA</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-utensils text-red-600 mr-3 mt-1"></i>
                <span><strong>Istirahat:</strong> 12.00 - 13.00 WITA</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-calendar-times text-red-600 mr-3 mt-1"></i>
                <span><em>Sabtu, Minggu, dan Hari Libur Nasional: Tutup</em></span>
              </li>
            </ul>
          </div>
        </details>

        <details class="group bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 border-2 border-gray-200 hover:border-red-300">
          <summary class="flex justify-between items-center font-bold text-lg text-gray-800 cursor-pointer">
            <span>Dokumen apa saja yang harus saya bawa?</span>
          </summary>
          <div class="mt-4 pt-4 border-t border-gray-200">
            <p class="text-gray-600 leading-relaxed mb-3">
              Persyaratan dokumen bervariasi tergantung layanan. Namun, dokumen umum yang sebaiknya selalu Anda bawa:
            </p>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                <span>Kartu Tanda Penduduk (E-KTP)</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                <span>Kartu Keluarga (KK)</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                <span>Surat Pengantar dari Kepala Jaga/Lingkungan (jika diperlukan)</span>
              </li>
            </ul>
          </div>
        </details>

        <details class="group bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 border-2 border-gray-200 hover:border-red-300">
          <summary class="flex justify-between items-center font-bold text-lg text-gray-800 cursor-pointer">
            <span>Apakah pengurusan surat bisa diwakilkan?</span>
          </summary>
          <div class="mt-4 pt-4 border-t border-gray-200">
            <p class="text-gray-600 leading-relaxed">
              Pada prinsipnya, untuk layanan yang menyangkut data kependudukan (seperti E-KTP) diwajibkan yang bersangkutan untuk hadir.
              Namun, untuk layanan administrasi umum, pengurusan dapat diwakilkan oleh anggota keluarga yang terdaftar dalam satu Kartu Keluarga (KK) dengan membawa surat kuasa sederhana dan KTP asli pemohon.
            </p>
          </div>
        </details>
      </div>
    </div>
  </div>
</section>
