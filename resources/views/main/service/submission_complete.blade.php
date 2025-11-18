<section class="py-8 bg-white border-b border-gray-200">
  <div class="container mx-auto px-4 max-w-4xl">
    <div class="hidden md:flex items-center justify-center gap-4">
      <div class="flex items-center">
        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="ml-2 text-sm font-semibold text-gray-500">Lihat Persyaratan</span>
      </div>
      <div class="w-12 h-1 bg-green-500"></div>
      <div class="flex items-center">
        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="ml-2 text-sm font-semibold text-gray-500">Isi Formulir</span>
      </div>
      <div class="w-12 h-1 bg-green-500"></div>
      <div class="flex items-center">
        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg animate-pulse">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="ml-2 text-sm font-semibold text-green-600">Selesai</span>
      </div>
    </div>

    <div class="flex md:hidden items-center justify-between">
      <div class="flex flex-col items-center flex-1">
        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg mb-2">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="text-xs font-semibold text-gray-500 text-center">Persyaratan</span>
      </div>
      <div class="w-8 h-1 bg-green-500 -mt-6"></div>
      <div class="flex flex-col items-center flex-1">
        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg mb-2">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="text-xs font-semibold text-gray-500 text-center">Formulir</span>
      </div>
      <div class="w-8 h-1 bg-green-500 -mt-6"></div>
      <div class="flex flex-col items-center flex-1">
        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg mb-2 animate-pulse">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="text-xs font-semibold text-green-600 text-center">Selesai</span>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4 max-w-4xl">

    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden mb-8">
      <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-12 text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>

        <div class="relative z-10">
          <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 animate-bounce">
            <i class="fas fa-check-circle text-6xl text-white"></i>
          </div>
          <h2 class="text-3xl md:text-4xl font-bold mb-3">Pengajuan Berhasil Dikirim!</h2>
          <p class="text-lg text-white/90 max-w-2xl mx-auto">
            Terima kasih telah mengajukan layanan <strong>{{ $service->title }}</strong>
          </p>
        </div>
      </div>

      <div class="p-8 md:p-12">
        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 border-l-4 border-blue-500 rounded-2xl p-8 mb-8">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0">
              <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center">
                <i class="fas fa-barcode text-white text-2xl"></i>
              </div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-blue-800 mb-3">Informasi Pengajuan</h3>
              <div class="grid md:grid-cols-2 gap-4">
                <div>
                  <p class="text-sm text-blue-600 mb-1">Nomor Pengajuan</p>
                  <p class="text-lg font-bold text-blue-900">{{ session('submission_tracking_number', '-') }}</p>
                </div>
                <div>
                  <p class="text-sm text-blue-600 mb-1">Tanggal Pengajuan</p>
                  <p class="text-lg font-bold text-blue-900">{{ now()->format('d F Y, H:i') }} WIB</p>
                </div>
                <div>
                  <p class="text-sm text-blue-600 mb-1">Status</p>
                  <span class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-bold">
                    <i class="fas fa-clock"></i>
                    Menunggu Verifikasi
                  </span>
                </div>
                <div>
                  <p class="text-sm text-blue-600 mb-1">Estimasi Proses</p>
                  <p class="text-lg font-bold text-blue-900">30 menit - 1 jam setelah berkas/dokumen diverifikasi</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 border-l-4 border-purple-500 rounded-2xl p-6 mb-8">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center">
                <i class="fas fa-envelope text-white text-xl"></i>
              </div>
            </div>
            <div>
              <h4 class="text-lg font-bold text-purple-800 mb-2">
                <i class="fas fa-check-circle text-purple-600 mr-2"></i>
                Email Konfirmasi Terkirim
              </h4>
              <p class="text-purple-700 leading-relaxed">
                Kami telah mengirimkan email konfirmasi ke <strong>{{ session('submission_email', '-') }}</strong> dengan detail pengajuan dan nomor tracking. Silakan cek kotak masuk atau folder spam Anda.
              </p>
            </div>
          </div>
        </div>

        <div class="mb-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
              <i class="fas fa-list-ol text-white"></i>
            </div>
            Langkah Selanjutnya
          </h3>

          <div class="space-y-4">
            <div class="flex gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
              <div class="flex-shrink-0">
                <div class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold">
                  1
                </div>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 mb-1">Verifikasi Administrasi</h4>
                <p class="text-gray-600 text-sm">
                  Petugas akan memverifikasi kelengkapan berkas dan data yang Anda kirimkan (15 menit)
                </p>
              </div>
            </div>

            <div class="flex gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
              <div class="flex-shrink-0">
                <div class="w-10 h-10 bg-purple-500 text-white rounded-full flex items-center justify-center font-bold">
                  2
                </div>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 mb-1">Proses Pengajuan</h4>
                <p class="text-gray-600 text-sm">
                  Setelah diverifikasi, pengajuan akan diproses oleh pihak berwenang (15 menit)
                </p>
              </div>
            </div>

            <div class="flex gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
              <div class="flex-shrink-0">
                <div class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">
                  3
                </div>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 mb-1">Notifikasi Selesai</h4>
                <p class="text-gray-600 text-sm">
                  Anda akan menerima notifikasi via email ketika pengajuan selesai diproses
                </p>
              </div>
            </div>

            <div class="flex gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
              <div class="flex-shrink-0">
                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold">
                  4
                </div>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 mb-1">Pengambilan Dokumen</h4>
                <p class="text-gray-600 text-sm">
                  Datang ke kantor desa dengan membawa nomor tracking untuk mengambil dokumen hasil pengajuan
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 border-l-4 border-yellow-500 rounded-2xl p-6 mb-8">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center">
                <i class="fas fa-exclamation-triangle text-white text-xl"></i>
              </div>
            </div>
            <div>
              <h4 class="text-lg font-bold text-yellow-800 mb-2">Catatan Penting</h4>
              <ul class="text-yellow-700 space-y-2 text-sm">
                <li class="flex items-start gap-2">
                  <i class="fas fa-check-circle text-yellow-600 mt-1"></i>
                  <span>Simpan nomor tracking Anda untuk keperluan pengecekan status pengajuan</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check-circle text-yellow-600 mt-1"></i>
                  <span>Pastikan nomor telepon dan email yang Anda berikan aktif untuk menerima notifikasi</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check-circle text-yellow-600 mt-1"></i>
                  <span>Jika dalam 1 hari kerja tidak ada konfirmasi, silakan hubungi kantor desa</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
          <a href="{{ route('service.submission.tracking') }}" onclick="window.location.replace(this.href); return false;" class="flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl font-bold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-1">
            <i class="fas fa-search"></i>
            <span>Lacak Status Pengajuan</span>
          </a>

          <a href="{{ route('service.index') }}" onclick="window.location.replace(this.href); return false;" class="flex items-center justify-center gap-3 px-8 py-4 bg-white border-2 border-gray-300 text-gray-700 rounded-2xl font-bold hover:bg-gray-50 hover:border-gray-400 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
            <i class="fas fa-home"></i>
            <span>Kembali ke Daftar Layanan</span>
          </a>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl p-8">
      <div class="text-center">
        <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-headset text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-3">Butuh Bantuan?</h3>
        <p class="text-gray-600 mb-6">
          Tim kami siap membantu Anda jika ada pertanyaan atau kendala
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="tel:{{ $village->phone ?? '#' }}" class="inline-flex items-center gap-2 px-6 py-3 bg-green-500 text-white rounded-xl font-semibold hover:bg-green-600 transition-colors">
            <i class="fas fa-phone"></i>
            <span>{{ $village->phone ?? 'Telepon belum diatur.' }}</span>
          </a>
          <a href="mailto:{{ $village->email ?? '#' }}" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-500 text-white rounded-xl font-semibold hover:bg-blue-600 transition-colors">
            <i class="fas fa-envelope"></i>
            <span>{{ $village->email ?? 'Email belum diatur.' }}</span>
          </a>
          <a href="https://wa.me/{{ $village->phone ?? '#' }}" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-500 text-white rounded-xl font-semibold hover:bg-emerald-600 transition-colors">
            <i class="fab fa-whatsapp"></i>
            <span>WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
