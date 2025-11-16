<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4 max-w-6xl">

    <div class="grid lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2">

        @if ($message = Session::get('error'))
          @include('main.layout.components.alert-error', [
              'title' => 'Cek Pengajuan Gagal!',
              'message' => $message,
              'showContactInfo' => false,
          ])
        @endif

        <div class="bg-white rounded-3xl shadow-2xl p-8 mb-8">
          <div class="flex items-center gap-4 mb-6 pb-6 border-b-2 border-gray-100">
            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
              <i class="fas fa-search text-white text-2xl"></i>
            </div>
            <div>
              <h2 class="text-2xl font-bold text-gray-800">Cari Nomor Pengajuan</h2>
              <p class="text-gray-500 text-sm">Masukkan nomor tracking Anda</p>
            </div>
          </div>

          <form action="{{ route('service.submission.tracking.check') }}" method="POST" id="trackingForm">
            @csrf

            <div class="mb-6">
              <label for="tracking_number" class="block text-gray-700 font-semibold mb-3">
                Nomor Tracking <span class="text-red-600">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-barcode text-gray-400 text-xl"></i>
                </div>
                <input type="text" id="tracking_number" name="tracking_number" class="w-full pl-14 pr-4 py-4 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition text-lg font-mono uppercase @error('tracking_number') border-red-500 @enderror" placeholder="MTGPJ-{{ date('Y') }}0101-1234" value="{{ old('tracking_number', request('tracking_number')) }}">
              </div>
              <p class="text-sm text-gray-500 mt-2 flex items-center gap-2">
                <i class="fas fa-info-circle"></i>
                <span>Format: MTGPJ-YYYYMMDD-XXXX</span>
              </p>
              @error('tracking_number')
                <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                  <i class="fas fa-exclamation-circle"></i>
                  {{ $message }}
                </p>
              @enderror
            </div>

            <button type="submit" class="w-full flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-purple-600 to-indigo-700 text-white rounded-2xl font-bold hover:from-purple-700 hover:to-indigo-800 transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-1">
              <i class="fas fa-search"></i>
              <span>Lacak Sekarang</span>
              <i class="fas fa-arrow-right ml-2"></i>
            </button>
          </form>
        </div>

        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl shadow-xl p-8 mb-8 border-l-4 border-blue-500">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                <i class="fas fa-question-circle text-white text-xl"></i>
              </div>
            </div>
            <div>
              <h3 class="text-xl font-bold text-blue-800 mb-3">Dimana Saya Menemukan Nomor Tracking?</h3>
              <div class="space-y-3 text-blue-700">
                <div class="flex items-start gap-3">
                  <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold mt-0.5">
                    1
                  </div>
                  <div>
                    <p class="font-semibold mb-1">Email Konfirmasi</p>
                    <p class="text-sm">Cek email yang kami kirimkan setelah Anda mengirim pengajuan. Nomor tracking ada di bagian atas email.</p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold mt-0.5">
                    2
                  </div>
                  <div>
                    <p class="font-semibold mb-1">Simpan Screenshot</p>
                    <p class="text-sm">Saat pengajuan berhasil, halaman konfirmasi menampilkan nomor tracking. Simpan screenshot halaman tersebut.</p>
                  </div>
                </div>
              </div>
              <div class="mt-4 pt-4 border-t border-blue-200">
                <p class="text-sm text-blue-600 flex items-center gap-2">
                  <i class="fas fa-envelope"></i>
                  <span>Tidak menerima email? Cek folder spam/junk Anda</span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
              <i class="fas fa-info-circle text-white text-xl"></i>
            </div>
            Panduan Status Pengajuan
          </h3>

          <div class="space-y-4">
            <div class="flex gap-4 p-4 bg-yellow-50 rounded-xl border-l-4 border-yellow-500">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center">
                  <i class="fas fa-clock text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="font-bold text-yellow-800 mb-1 flex items-center gap-2">
                  Menunggu Verifikasi
                  <span class="text-xs bg-yellow-200 px-2 py-1 rounded-full">PENDING</span>
                </h4>
                <p class="text-yellow-700 text-sm mb-2">
                  Pengajuan Anda telah diterima dan menunggu verifikasi kelengkapan berkas oleh petugas.
                </p>
                <p class="text-xs text-yellow-600">
                  <i class="fas fa-stopwatch mr-1"></i>
                  Estimasi: 1-2 hari kerja
                </p>
              </div>
            </div>

            <div class="flex gap-4 p-4 bg-blue-50 rounded-xl border-l-4 border-blue-500">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                  <i class="fas fa-check-circle text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="font-bold text-blue-800 mb-1 flex items-center gap-2">
                  Terverifikasi
                  <span class="text-xs bg-blue-200 px-2 py-1 rounded-full">VERIFIED</span>
                </h4>
                <p class="text-blue-700 text-sm mb-2">
                  Berkas Anda telah diverifikasi dan dinyatakan lengkap. Pengajuan siap diproses.
                </p>
                <p class="text-xs text-blue-600">
                  <i class="fas fa-arrow-right mr-1"></i>
                  Tahap selanjutnya: Proses pengajuan
                </p>
              </div>
            </div>

            <div class="flex gap-4 p-4 bg-purple-50 rounded-xl border-l-4 border-purple-500">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center">
                  <i class="fas fa-cog fa-spin text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="font-bold text-purple-800 mb-1 flex items-center gap-2">
                  Sedang Diproses
                  <span class="text-xs bg-purple-200 px-2 py-1 rounded-full">PROCESSING</span>
                </h4>
                <p class="text-purple-700 text-sm mb-2">
                  Pengajuan Anda sedang dalam proses penerbitan oleh pihak berwenang.
                </p>
                <p class="text-xs text-purple-600">
                  <i class="fas fa-stopwatch mr-1"></i>
                  Estimasi: 2-5 hari kerja
                </p>
              </div>
            </div>

            <div class="flex gap-4 p-4 bg-green-50 rounded-xl border-l-4 border-green-500">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center">
                  <i class="fas fa-check-double text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="font-bold text-green-800 mb-1 flex items-center gap-2">
                  Selesai
                  <span class="text-xs bg-green-200 px-2 py-1 rounded-full">COMPLETED</span>
                </h4>
                <p class="text-green-700 text-sm mb-2">
                  Pengajuan selesai diproses. Dokumen siap diambil di kantor desa.
                </p>
                <p class="text-xs text-green-600">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Bawa nomor tracking dan KTP asli
                </p>
              </div>
            </div>

            <div class="flex gap-4 p-4 bg-red-50 rounded-xl border-l-4 border-red-500">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-red-500 rounded-xl flex items-center justify-center">
                  <i class="fas fa-times-circle text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="font-bold text-red-800 mb-1 flex items-center gap-2">
                  Ditolak
                  <span class="text-xs bg-red-200 px-2 py-1 rounded-full">REJECTED</span>
                </h4>
                <p class="text-red-700 text-sm mb-2">
                  Pengajuan ditolak karena berkas tidak lengkap atau tidak memenuhi syarat.
                </p>
                <p class="text-xs text-red-600">
                  <i class="fas fa-phone mr-1"></i>
                  Hubungi kantor desa untuk informasi lebih lanjut
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="lg:col-span-1">
        <div class="bg-white rounded-3xl shadow-xl p-6 mb-6">
          <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
            <i class="fas fa-chart-line text-purple-600"></i>
            Statistik Hari Ini
          </h3>
          <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-blue-50 rounded-xl">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
                <div>
                  <p class="text-xs text-blue-600">Total Pengajuan</p>
                  <p class="text-xl font-bold text-blue-800">{{ $stats['total'] ?? '0' }}</p>
                </div>
              </div>
            </div>

            <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-xl">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center">
                  <i class="fas fa-clock text-white"></i>
                </div>
                <div>
                  <p class="text-xs text-yellow-600">Menunggu</p>
                  <p class="text-xl font-bold text-yellow-800">{{ $stats['pending'] ?? '0' }}</p>
                </div>
              </div>
            </div>

            <div class="flex items-center justify-between p-3 bg-green-50 rounded-xl">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                  <i class="fas fa-check text-white"></i>
                </div>
                <div>
                  <p class="text-xs text-green-600">Selesai</p>
                  <p class="text-xl font-bold text-green-800">{{ $stats['completed'] ?? '0' }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-gradient-to-br from-red-50 to-rose-50 rounded-3xl shadow-xl p-6 mb-6 border-l-4 border-red-500">
          <div class="text-center mb-4">
            <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mx-auto mb-3">
              <i class="fas fa-headset text-white text-2xl"></i>
            </div>
            <h3 class="text-lg font-bold text-red-800">Butuh Bantuan?</h3>
            <p class="text-sm text-red-600 mt-1">Tim kami siap membantu Anda</p>
          </div>
          <div class="space-y-3">
            <a href="tel:{{ $village->phone ?? '#' }}" class="flex items-center gap-3 p-3 bg-white rounded-xl hover:shadow-md transition-all">
              <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                <i class="fas fa-phone text-white"></i>
              </div>
              <div>
                <p class="text-xs text-gray-500">Telepon</p>
                <p class="font-semibold text-gray-800">{{ $village->phone ?? 'Telepon belum diatur.' }}</p>
              </div>
            </a>

            <a href="mailto:{{ $village->email ?? '#' }}" class="flex items-center gap-3 p-3 bg-white rounded-xl hover:shadow-md transition-all">
              <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                <i class="fas fa-envelope text-white"></i>
              </div>
              <div>
                <p class="text-xs text-gray-500">Email</p>
                <p class="font-semibold text-gray-800 text-sm">{{ $village->email ?? 'Email belum diatur.' }}</p>
              </div>
            </a>

            <a href="https://wa.me/{{ $village->phone ?? '#' }}" target="_blank" class="flex items-center gap-3 p-3 bg-white rounded-xl hover:shadow-md transition-all">
              <div class="w-10 h-10 bg-emerald-500 rounded-lg flex items-center justify-center">
                <i class="fab fa-whatsapp text-white"></i>
              </div>
              <div>
                <p class="text-xs text-gray-500">WhatsApp</p>
                <p class="font-semibold text-gray-800">Chat Langsung</p>
              </div>
            </a>
          </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-6">
          <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
            <i class="fas fa-clock text-indigo-600"></i>
            Jam Operasional
          </h3>
          <div class="space-y-3 text-sm">
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
              <span class="text-gray-600 font-medium">{{ explode(':', $village->operational_hours_weekdays)[0] }}</span>
              <span class="text-gray-800 font-bold">{{ explode(':', $village->operational_hours_weekdays)[1] }}</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
              <span class="text-gray-600 font-medium">Istirahat</span>
              <span class="text-gray-800 font-bold">12:00 - 13:00 WITA</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-red-50 rounded-xl">
              <span class="text-red-600 font-medium">{{ explode(':', $village->operational_hours_weekends)[0] }}</span>
              <span class="text-red-800 font-bold">{{ explode(':', $village->operational_hours_weekends)[1] }}</span>
            </div>
          </div>
          <p class="text-xs text-gray-500 mt-4 flex items-center gap-2">
            <i class="fas fa-info-circle"></i>
            <span>Hari Libur Nasional: <strong>Tutup</strong></span>
          </p>
        </div>
      </div>
    </div>

    <div class="mt-12 bg-white rounded-3xl shadow-xl p-8">
      <div class="text-center mb-8">
        <div class="inline-flex items-center gap-2 bg-purple-50 text-purple-600 px-4 py-2 rounded-full mb-4 border border-purple-200">
          <i class="fas fa-question-circle text-sm"></i>
          <span class="text-sm font-semibold">Pertanyaan Umum</span>
        </div>
        <h2 class="text-3xl font-bold text-gray-800">Pertanyaan yang Sering Diajukan</h2>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <div class="p-6 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center text-white font-bold">
              ?
            </div>
            <div>
              <h4 class="font-bold text-blue-900 mb-2">Berapa lama proses pengajuan?</h4>
              <p class="text-sm text-blue-700">Estimasi 3-7 hari kerja sejak pengajuan diterima, tergantung jenis layanan dan kelengkapan berkas.</p>
            </div>
          </div>
        </div>

        <div class="p-6 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center text-white font-bold">
              ?
            </div>
            <div>
              <h4 class="font-bold text-green-900 mb-2">Apakah ada biaya pengajuan?</h4>
              <p class="text-sm text-green-700">Semua layanan administrasi desa GRATIS untuk warga Desa Motoling Dua. Tidak ada pungutan biaya.</p>
            </div>
          </div>
        </div>

        <div class="p-6 bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-xl flex items-center justify-center text-white font-bold">
              ?
            </div>
            <div>
              <h4 class="font-bold text-purple-900 mb-2">Bagaimana cara mengambil dokumen?</h4>
              <p class="text-sm text-purple-700">Datang ke kantor desa dengan membawa nomor tracking dan KTP asli setelah status berubah menjadi "Selesai".</p>
            </div>
          </div>
        </div>

        <div class="p-6 bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0 w-10 h-10 bg-orange-500 rounded-xl flex items-center justify-center text-white font-bold">
              ?
            </div>
            <div>
              <h4 class="font-bold text-orange-900 mb-2">Apa yang harus dilakukan jika ditolak?</h4>
              <p class="text-sm text-orange-700">Hubungi kantor desa untuk mengetahui alasan penolakan dan persyaratan yang perlu dilengkapi untuk mengajukan kembali.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const trackingInput = document.getElementById('tracking_number');

    if (trackingInput) {
      trackingInput.addEventListener('input', function(e) {
        this.value = this.value.toUpperCase();
      });
    }
  });
</script>
