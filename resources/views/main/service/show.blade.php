<style>
  .service-requirements h1,
  .service-requirements h2,
  .service-requirements h3 {
    margin-top: 1.5em;
    margin-bottom: 0.75em;
    font-weight: 700;
    color: #1f2937;
  }

  .service-requirements h1 {
    font-size: 1.875rem;
    color: #dc2626;
  }

  .service-requirements h2 {
    font-size: 1.5rem;
    color: #991b1b;
  }

  .service-requirements h3 {
    font-size: 1.25rem;
    color: #7f1d1d;
  }

  .service-requirements ul,
  .service-requirements ol {
    padding-left: 2em;
    margin-bottom: 1.5em;
  }

  .service-requirements ul {
    list-style-type: none;
  }

  .service-requirements ul li {
    position: relative;
    padding-left: 2em;
    margin-bottom: 0.75em;
    color: #374151;
    line-height: 1.75;
  }

  .service-requirements ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 0;
    color: #dc2626;
    font-weight: bold;
    font-size: 1.2em;
  }

  .service-requirements ol li {
    margin-bottom: 0.75em;
    color: #374151;
    line-height: 1.75;
  }

  .service-requirements p {
    margin-bottom: 1.25em;
    color: #4b5563;
    line-height: 1.75;
  }

  .service-requirements strong {
    color: #1f2937;
    font-weight: 600;
  }
</style>

<section class="py-8 bg-white border-b border-gray-200">
  <div class="container mx-auto px-4 max-w-4xl">
    <div class="hidden md:flex items-center justify-center gap-4">
      <div class="flex items-center">
        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
          1
        </div>
        <span class="ml-2 text-sm font-semibold text-blue-600">Lihat Persyaratan</span>
      </div>
      <div class="w-12 h-1 bg-gray-300"></div>
      <div class="flex items-center">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-bold">
          2
        </div>
        <span class="ml-2 text-sm font-semibold text-gray-400">Isi Formulir</span>
      </div>
      <div class="w-12 h-1 bg-gray-300"></div>
      <div class="flex items-center">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-bold">
          3
        </div>
        <span class="ml-2 text-sm font-semibold text-gray-400">Selesai</span>
      </div>
    </div>

    <div class="flex md:hidden items-center justify-between">
      <div class="flex flex-col items-center flex-1">
        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg mb-2">
          1
        </div>
        <span class="text-xs font-semibold text-blue-600 text-center">Persyaratan</span>
      </div>
      <div class="w-8 h-1 bg-gray-300 -mt-6"></div>
      <div class="flex flex-col items-center flex-1">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-bold mb-2">
          2
        </div>
        <span class="text-xs font-semibold text-gray-400 text-center">Formulir</span>
      </div>
      <div class="w-8 h-1 bg-gray-300 -mt-6"></div>
      <div class="flex flex-col items-center flex-1">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-bold mb-2">
          3
        </div>
        <span class="text-xs font-semibold text-gray-400 text-center">Selesai</span>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4 max-w-6xl">

    @if ($message = Session::get('success'))
      @include('main.layout.components.alert-success', [
          'title' => 'Pengajuan Berhasil!',
          'message' => $message,
          'showEmailInfo' => true,
      ])
    @endif

    @if ($message = Session::get('error'))
      @include('main.layout.components.alert-error', [
          'title' => 'Pengajuan Gagal!',
          'message' => $message,
      ])
    @endif

    <div class="bg-white rounded-3xl shadow-xl p-8 mb-8 hover:shadow-2xl transition-all duration-500">
      <div class="flex items-center gap-4 mb-6 pb-6 border-b-2 border-gray-100">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
          <i class="{{ $service->icon_class }} text-white text-2xl"></i>
        </div>
        <div>
          <h2 class="text-2xl font-bold text-gray-800">{{ $service->title }}</h2>
          <p class="text-gray-500 text-sm">Informasi umum tentang layanan ini</p>
        </div>
      </div>
      <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-2xl p-6">
        <p class="text-gray-700 text-lg leading-relaxed">{{ $service->description }}</p>
      </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl p-8 mb-8 hover:shadow-2xl transition-all duration-500">
      <div class="flex items-center gap-4 mb-6 pb-6 border-b-2 border-red-100">
        <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center">
          <i class="fas fa-clipboard-list text-white text-2xl"></i>
        </div>
        <div>
          <h2 class="text-2xl font-bold text-red-600">Persyaratan Pengajuan</h2>
          <p class="text-gray-500 text-sm">Dokumen yang diperlukan untuk pengajuan</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none service-requirements">
        <div class="text-gray-700 leading-relaxed">
          {!! $service->requirements_content ?? '<div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-2xl"><div class="flex items-center gap-3"><i class="fas fa-exclamation-triangle text-yellow-600 text-2xl"></i><p class="text-yellow-800 font-semibold">Persyaratan belum dimasukkan. Silahkan hubungi admin desa untuk informasi lebih lanjut!</p></div></div>' !!}
        </div>
      </div>

      <div class="mt-8 pt-8 border-t-2 border-gray-100">
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 text-center">
          <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-paper-plane text-white text-3xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-3">Siap Mengajukan?</h3>
          <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
            Pastikan Anda telah menyiapkan semua persyaratan yang dibutuhkan sebelum melanjutkan pengajuan.
          </p>
          <a href="{{ route('service.submission.create', $service->slug) }}" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-2xl font-bold hover:from-red-700 hover:to-red-800 transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-1">
            <i class="fas fa-paper-plane"></i>
            <span>Ajukan Layanan Sekarang</span>
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
          <p class="text-sm text-gray-500 mt-4">
            <i class="fas fa-info-circle mr-1"></i>
            Anda akan diarahkan ke halaman pengisian formulir
          </p>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mb-8">
      <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-blue-500 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
          <i class="fas fa-clock text-blue-600 text-xl"></i>
        </div>
        <h4 class="font-bold text-gray-800 mb-2">Waktu Proses</h4>
        <p class="text-sm text-gray-600">Estimasi 3-7 hari kerja setelah pengajuan diverifikasi</p>
      </div>

      <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-green-500 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
          <i class="fas fa-money-bill-wave text-green-600 text-xl"></i>
        </div>
        <h4 class="font-bold text-gray-800 mb-2">Biaya</h4>
        <p class="text-sm text-gray-600">Gratis untuk warga Desa Motoling Dua</p>
      </div>

      <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-purple-500 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
          <i class="fas fa-headset text-purple-600 text-xl"></i>
        </div>
        <h4 class="font-bold text-gray-800 mb-2">Bantuan</h4>
        <p class="text-sm text-gray-600">Hubungi kantor desa jika ada kendala</p>
      </div>
    </div>

    <div class="text-center">
      <a href="{{ route('service.index') }}" onclick="window.location.replace(this.href); return false;" class="inline-flex items-center gap-2 text-red-600 hover:text-red-800 font-semibold transition-colors hover:gap-3 duration-300">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali ke Daftar Layanan</span>
      </a>
    </div>

  </div>
</section>
