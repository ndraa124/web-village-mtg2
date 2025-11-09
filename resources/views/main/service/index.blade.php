<style>
  .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  details>summary {
    list-style: none;
    cursor: pointer;
  }

  details>summary::-webkit-details-marker {
    display: none;
  }

  details>summary::after {
    content: '+';
    font-size: 1.5rem;
    font-weight: 300;
    transition: transform 0.2s ease;
  }

  details[open]>summary::after {
    content: '−';
    transform: rotate(180deg);
  }

  details[open] {
    background-color: #fef2f2;
  }
</style>

{{-- 2. Bagian Pengantar --}}
<section class="py-16">
  <div class="container mx-auto px-4 text-center max-w-3xl">
    <i class="fas fa-hands-helping text-5xl text-red-600 mb-4"></i>
    <h3 class="text-3xl font-bold text-gray-800 mb-4">Pelayanan Terbaik untuk Warga</h3>
    <p class="text-gray-600 text-lg">
      Kami berkomitmen untuk menyediakan layanan administrasi dan kemasyarakatan yang cepat, transparan, dan efisien
      bagi seluruh warga Desa Motoling Dua. Temukan layanan yang Anda butuhkan di bawah ini.
    </p>
  </div>
</section>

{{-- 3. Daftar Layanan (Grid) --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      {{-- Kartu Layanan 1: E-KTP --}}
      <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover">
        <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-id-card text-4xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Layanan E-KTP</h4>
        <p class="text-gray-600 mb-4">Pengajuan KTP baru, perpanjangan, atau penggantian KTP yang rusak/hilang.</p>
        <a href="#" class="text-red-600 font-semibold hover:underline">Lihat Persyaratan →</a>
      </div>

      {{-- Kartu Layanan 2: Surat Keterangan --}}
      <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover">
        <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-file-alt text-4xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Surat Keterangan</h4>
        <p class="text-gray-600 mb-4">Pengajuan Surat Keterangan Usaha (SKU), Domisili, Tidak Mampu (SKTM), dll.</p>
        <a href="#" class="text-red-600 font-semibold hover:underline">Lihat Persyaratan →</a>
      </div>

      {{-- Kartu Layanan 3: Akta Kelahiran --}}
      <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover">
        <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-baby text-4xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Akta Kelahiran</h4>
        <p class="text-gray-600 mb-4">Pengajuan pembuatan Akta Kelahiran baru bagi warga yang baru melahirkan.</p>
        <a href="#" class="text-red-600 font-semibold hover:underline">Lihat Persyaratan →</a>
      </div>

      {{-- Kartu Layanan 4: Akta Kematian --}}
      <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover">
        <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-cross text-4xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Akta Kematian</h4>
        <p class="text-gray-600 mb-4">Pengajuan Akta Kematian sebagai dokumen resmi pencatatan kependudukan.</p>
        <a href="#" class="text-red-600 font-semibold hover:underline">Lihat Persyaratan →</a>
      </div>

      {{-- Kartu Layanan 5: Surat Pindah --}}
      <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover">
        <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-truck-moving text-4xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Surat Pindah</h4>
        <p class="text-gray-600 mb-4">Layanan pengurusan surat pindah domisili (datang atau keluar) desa.</p>
        <a href="#" class="text-red-600 font-semibold hover:underline">Lihat Persyaratan →</a>
      </div>

      {{-- Kartu Layanan 6: Perizinan UMKM --}}
      <div class="bg-white rounded-lg shadow-lg p-8 text-center card-hover">
        <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-store text-4xl"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Izin UMKM</h4>
        <p class="text-gray-600 mb-4">Bantuan pengajuan perizinan usaha mikro, kecil, dan menengah (NIB, P-IRT).</p>
        <a href="#" class="text-red-600 font-semibold hover:underline">Lihat Persyaratan →</a>
      </div>

    </div>
  </div>
</section>

{{-- 4. Alur Pelayanan (How-to) --}}
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
      <i class="fas fa-stream text-red-600 mr-2"></i>
      Alur Pelayanan
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

      <div class="p-6">
        <div class="w-24 h-24 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
          <span class="text-4xl font-bold">1</span>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Datang ke Kantor Desa</h4>
        <p class="text-gray-600">Bawa dokumen persyaratan yang diperlukan sesuai layanan yang dituju.</p>
      </div>

      <div class="p-6">
        <div class="w-24 h-24 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
          <span class="text-4xl font-bold">2</span>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Ambil Nomor Antrian</h4>
        <p class="text-gray-600">Menuju loket pelayanan dan sampaikan keperluan Anda kepada petugas.</p>
      </div>

      <div class="p-6">
        <div class="w-24 h-24 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
          <span class="text-4xl font-bold">3</span>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Proses & Verifikasi</h4>
        <p class="text-gray-600">Petugas akan memverifikasi data Anda. Dokumen akan diproses (SOP 1-3 hari kerja).</p>
      </div>

    </div>
  </div>
</section>

{{-- 5. FAQ (Tanya Jawab) --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 max-w-3xl">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
      <i class="fas fa-question-circle text-red-600 mr-2"></i>
      Pertanyaan yang Sering Diajukan
    </h2>

    <div class="space-y-4">

      <details class="bg-white rounded-lg shadow p-6 transition-all duration-300">
        <summary class="flex justify-between items-center font-semibold text-lg text-gray-800">
          Apa jam operasional kantor desa?
        </summary>
        <p class="text-gray-600 mt-4">
          Jam pelayanan Kantor Desa Motoling Dua adalah:
          <br><strong>Senin - Kamis:</strong> 08.00 - 16.00 WITA
          <br><strong>Jumat:</strong> 08.00 - 15.00 WITA
          <br><strong>Istirahat:</strong> 12.00 - 13.00 WITA
          <br><em>Sabtu, Minggu, dan Hari Libur Nasional: Tutup</em>
        </p>
      </details>

      <details class="bg-white rounded-lg shadow p-6 transition-all duration-300">
        <summary class="flex justify-between items-center font-semibold text-lg text-gray-800">
          Dokumen apa saja yang harus saya bawa?
        </summary>
        <p class="text-gray-600 mt-4">
          Persyaratan dokumen bervariasi tergantung layanan. Namun, dokumen umum yang sebaiknya selalu Anda bawa (atau siapkan fotokopinya) adalah:
          <br>• Kartu Tanda Penduduk (E-KTP)
          <br>• Kartu Keluarga (KK)
          <br>• Surat Pengantar dari Kepala Jaga/Lingkungan (jika diperlukan)
        </p>
      </details>

      <details class="bg-white rounded-lg shadow p-6 transition-all duration-300">
        <summary class="flex justify-between items-center font-semibold text-lg text-gray-800">
          Apakah pengurusan surat bisa diwakilkan?
        </summary>
        <p class="text-gray-600 mt-4">
          Pada prinsipnya, untuk layanan yang menyangkut data kependudukan (seperti E-KTP) diwajibkan yang bersangkutan untuk hadir.
          Namun, untuk layanan administrasi umum, pengurusan dapat diwakilkan oleh anggota keluarga yang terdaftar dalam satu Kartu Keluarga (KK) dengan membawa surat kuasa sederhana dan KTP asli pemohon.
        </p>
      </details>

    </div>
  </div>
</section>