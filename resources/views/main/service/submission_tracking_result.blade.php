<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2 space-y-8">
          <div class="bg-white rounded-2xl shadow-xl border-2 border-gray-100 overflow-hidden">
            <div class="bg-gray-50 border-b-2 border-gray-200 px-6 py-4">
              <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                    <i class="fas fa-barcode text-white text-xl"></i>
                  </div>
                  <div>
                    <div class="text-xs text-gray-500 font-medium uppercase tracking-wide mb-1">Nomor Tracking</div>
                    <div class="text-xl md:text-2xl font-bold text-gray-800 tracking-wider">{{ $submission->tracking_number }}</div>
                  </div>
                </div>
                <button onclick="copyTrackingNumber('{{ $submission->tracking_number }}')" class="flex items-center px-4 py-2 bg-white border-2 border-gray-300 hover:border-indigo-500 hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 rounded-lg transition-all group">
                  <i class="fas fa-copy mr-2 group-hover:scale-110 transition-transform"></i>
                  <span class="font-semibold text-sm">Salin</span>
                </button>
              </div>
            </div>

            <div class="bg-gradient-to-r {{ getStatusGradient($submission->status) }} p-6 text-white">
              <div class="flex items-center justify-between">
                <div>
                  <div class="text-sm font-medium opacity-90 mb-1">Status Saat Ini</div>
                  <div class="text-3xl font-bold flex items-center">
                    <i class="{{ getStatusIcon($submission->status) }} mr-3"></i>
                    {{ getStatusLabel($submission->status) }}
                  </div>
                </div>
                <div class="hidden md:block">
                  <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <i class="{{ getStatusIcon($submission->status) }} text-5xl"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="p-6">
              <p class="text-gray-600 leading-relaxed">
                {{ getStatusDescription($submission->status) }}
              </p>

              @if ($submission->admin_notes)
                <div class="mt-4 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-xl">
                  <div class="flex items-start">
                    <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                    <div>
                      <div class="font-semibold text-gray-800 mb-1">Catatan Admin:</div>
                      <p class="text-gray-700 text-sm">{{ $submission->admin_notes }}</p>
                    </div>
                  </div>
                </div>
              @endif
            </div>
          </div>

          <div class="bg-white rounded-2xl shadow-xl border-2 border-gray-100 p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
              <i class="fas fa-history text-purple-600 mr-3"></i>
              Timeline Proses
            </h2>

            <div class="relative">
              <div class="absolute left-6 top-0 bottom-0 w-1 bg-gray-200"></div>

              <div class="space-y-8">
                <div class="relative flex items-start group">
                  <div class="absolute left-6 top-6 w-1 h-full bg-gradient-to-b from-orange-500 to-blue-500"></div>

                  <div class="relative z-10 flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-orange-500 to-orange-600 shadow-lg shadow-purple-500/50 border-4 border-white">
                    <i class="fas fa-check text-white"></i>
                  </div>

                  <div class="ml-6 flex-1">
                    <div class="bg-gray-50 rounded-xl p-4">
                      <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-gray-800">Pengajuan Diterima</h3>
                        @if ($submission->created_at)
                          <span class="text-sm text-gray-500">
                            {{ $submission->created_at->format('d M Y, H:i') }}
                          </span>
                        @endif
                      </div>
                      <p class="text-sm text-gray-600">Pengajuan Anda telah berhasil diterima oleh sistem.</p>
                    </div>
                  </div>
                </div>

                <div class="relative flex items-start group">
                  <div class="absolute left-6 top-6 w-1 h-full {{ in_array($submission->status, ['processing', 'completed']) ? 'bg-gradient-to-b from-blue-500 to-indigo-500' : 'bg-gray-200' }}"></div>

                  @php
                    $step2Icon = 'fa-clock';
                    $step2Color = 'bg-gray-300';
                    if ($submission->status === 'pending') {
                        $step2Icon = 'fa-clock';
                        $step2Color = 'bg-yellow-500 animate-pulse';
                    } elseif (in_array($submission->status, ['verified', 'processing', 'completed', 'rejected'])) {
                        $step2Icon = 'fa-check';
                        $step2Color = 'bg-gradient-to-br from-blue-500 to-blue-600 shadow-lg shadow-blue-500/50';
                    }
                  @endphp

                  <div class="relative z-10 flex items-center justify-center w-12 h-12 rounded-full {{ $step2Color }} border-4 border-white">
                    <i class="fas {{ $step2Icon }} text-white"></i>
                  </div>

                  <div class="ml-6 flex-1 {{ $submission->status === 'rejected' ? 'opacity-50' : '' }}">
                    <div class="bg-gray-50 rounded-xl p-4 group-hover:bg-gray-100 transition-colors">
                      <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-gray-800">Verifikasi Data</h3>
                        @if ($submission->verified_at)
                          <span class="text-sm text-gray-500">
                            {{ $submission->verified_at->format('d M Y, H:i') }}
                          </span>
                        @endif
                      </div>
                      <p class="text-sm text-gray-600">
                        @if ($submission->status === 'pending')
                          Menunggu verifikasi dari petugas.
                        @elseif(in_array($submission->status, ['verified', 'processing', 'completed']))
                          Data Anda telah diverifikasi oleh petugas.
                        @elseif($submission->status === 'rejected')
                          Data diverifikasi (sebelum ditolak).
                        @endif
                      </p>
                    </div>
                  </div>
                </div>

                <div class="relative flex items-start group">
                  <div class="absolute left-6 top-6 w-1 h-full {{ $submission->status === 'completed' ? 'bg-gradient-to-b from-indigo-500 to-purple-500' : 'bg-gray-200' }}"></div>

                  @php
                    $step3Icon = 'fa-clock';
                    $step3Color = 'bg-gray-300';
                    if (in_array($submission->status, ['pending', 'verified'])) {
                        $step3Icon = 'fa-clock';
                        $step3Color = 'bg-gray-300';
                    } elseif ($submission->status === 'processing') {
                        $step3Icon = 'fa-spinner fa-spin';
                        $step3Color = 'bg-indigo-500 animate-pulse';
                    } elseif ($submission->status === 'completed') {
                        $step3Icon = 'fa-check';
                        $step3Color = 'bg-gradient-to-br from-indigo-500 to-indigo-600 shadow-lg shadow-indigo-500/50';
                    } elseif ($submission->status === 'rejected') {
                        $step3Icon = 'fa-times';
                        $step3Color = 'bg-gray-300';
                    }
                  @endphp

                  <div class="relative z-10 flex items-center justify-center w-12 h-12 rounded-full {{ $step3Color }} border-4 border-white">
                    <i class="fas {{ $step3Icon }} text-white"></i>
                  </div>

                  <div class="ml-6 flex-1 {{ in_array($submission->status, ['processing', 'completed']) ? '' : 'opacity-50' }}">
                    <div class="bg-gray-50 rounded-xl p-4 group-hover:bg-gray-100 transition-colors">
                      <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-gray-800">Sedang Diproses</h3>
                        @if ($submission->processing_at)
                          <span class="text-sm text-gray-500">
                            {{ $submission->processing_at->format('d M Y, H:i') }}
                          </span>
                        @endif
                      </div>
                      <p class="text-sm text-gray-600">
                        @if ($submission->status === 'processing')
                          Dokumen Anda sedang dalam proses penyelesaian.
                        @elseif($submission->status === 'completed')
                          Dokumen telah selesai diproses.
                        @elseif($submission->status === 'rejected')
                          Proses dihentikan karena pengajuan ditolak.
                        @else
                          Menunggu verifikasi selesai.
                        @endif
                      </p>
                    </div>
                  </div>
                </div>

                <div class="relative flex items-start group">
                  @php
                    $step4Icon = 'fa-flag';
                    $step4Color = 'bg-gray-300';
                    if ($submission->status === 'completed') {
                        $step4Icon = 'fa-check';
                        $step4Color = 'bg-gradient-to-br from-green-500 to-green-600 shadow-lg shadow-green-500/50';
                    } elseif ($submission->status === 'rejected') {
                        $step4Icon = 'fa-times';
                        $step4Color = 'bg-gradient-to-br from-red-500 to-red-600 shadow-lg shadow-red-500/50';
                    }
                  @endphp

                  <div class="relative z-10 flex items-center justify-center w-12 h-12 rounded-full {{ $step4Color }} border-4 border-white">
                    <i class="fas {{ $step4Icon }} text-white"></i>
                  </div>

                  <div class="ml-6 flex-1 {{ in_array($submission->status, ['completed', 'rejected']) ? '' : 'opacity-50' }}">
                    <div class="bg-gray-50 rounded-xl p-4 group-hover:bg-gray-100 transition-colors">
                      <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-gray-800">
                          @if ($submission->status === 'completed')
                            Selesai
                          @elseif($submission->status === 'rejected')
                            Ditolak
                          @else
                            Menunggu Penyelesaian
                          @endif
                        </h3>
                        @if ($submission->completed_at)
                          <span class="text-sm text-gray-500">
                            {{ $submission->completed_at->format('d M Y, H:i') }}
                          </span>
                        @elseif ($submission->rejected_at)
                          <span class="text-sm text-gray-500">
                            {{ $submission->rejected_at->format('d M Y, H:i') }}
                          </span>
                        @endif
                      </div>
                      <p class="text-sm text-gray-600">
                        @if ($submission->status === 'completed')
                          Dokumen siap diambil di Kantor Desa.
                        @elseif($submission->status === 'rejected')
                          {{ $submission->rejection_reason ?? 'Pengajuan ditolak. Silakan hubungi kantor desa.' }}
                        @else
                          Menunggu proses selesai.
                        @endif
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-2xl shadow-xl border-2 border-gray-100 p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
              <i class="fas fa-file-alt text-indigo-600 mr-3"></i>
              Detail Pengajuan
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 border border-blue-200">
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-clipboard-list text-white text-xl"></i>
                  </div>
                  <div>
                    <div class="text-sm text-blue-700 font-medium mb-1">Jenis Layanan</div>
                    <div class="font-bold text-gray-800">{{ $submission->service->title ?? '-' }}</div>
                  </div>
                </div>
              </div>

              <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4 border border-green-200">
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-user text-white text-xl"></i>
                  </div>
                  <div>
                    <div class="text-sm text-green-700 font-medium mb-1">Nama Pemohon</div>
                    <div class="font-bold text-gray-800">{{ $submission->name ?? '-' }}</div>
                  </div>
                </div>
              </div>

              <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4 border border-purple-200">
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-id-card text-white text-xl"></i>
                  </div>
                  <div>
                    <div class="text-sm text-purple-700 font-medium mb-1">NIK</div>
                    <div class="font-bold text-gray-800">{{ $submission->nik ?? '-' }}</div>
                  </div>
                </div>
              </div>

              <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-4 border border-orange-200">
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-calendar-alt text-white text-xl"></i>
                  </div>
                  <div>
                    <div class="text-sm text-orange-700 font-medium mb-1">Tanggal Pengajuan</div>
                    <div class="font-bold text-gray-800">
                      {{ $submission->created_at->format('d F Y') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @if ($submission->purpose)
              <div class="mt-6 bg-gray-50 rounded-xl p-4 border border-gray-200">
                <div class="flex items-start">
                  <i class="fas fa-comment-dots text-gray-500 mt-1 mr-3"></i>
                  <div class="flex-1">
                    <div class="text-sm text-gray-600 font-medium mb-1">Keperluan:</div>
                    <p class="text-gray-800">{{ $submission->purpose }}</p>
                  </div>
                </div>
              </div>
            @endif

            @if ($submission->supporting_files && count($submission->supporting_files) > 0)
              <div class="mt-6">
                <div class="font-semibold text-gray-800 mb-3 flex items-center">
                  <i class="fas fa-paperclip text-gray-600 mr-2"></i>
                  Dokumen Terlampir ({{ count($submission->supporting_files) }})
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                  @foreach ($submission->supporting_files as $file_path)
                    @php
                      $file_name = basename($file_path);
                      $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                      $is_pdf = strtolower($file_ext) === 'pdf';
                    @endphp

                    <a href="{{ Storage::url($file_path) }}" target="_blank" class="flex items-center bg-gray-50 hover:bg-gray-100 border border-gray-200 rounded-lg p-3 transition-colors group">
                      <div class="w-10 h-10 {{ $is_pdf ? 'bg-red-100' : 'bg-blue-100' }} rounded-lg flex items-center justify-center mr-3 group-hover:{{ $is_pdf ? 'bg-red-200' : 'bg-blue-200' }} transition-colors">
                        <i class="fas {{ $is_pdf ? 'fa-file-pdf text-red-600' : 'fa-file-image text-blue-600' }}"></i>
                      </div>
                      <div class="flex-1 min-w-0">
                        <div class="font-medium text-gray-800 truncate">{{ $file_name }}</div>
                        <div class="text-xs text-gray-500">{{ $file_ext }}</div>
                      </div>
                      <i class="fas fa-external-link-alt text-gray-400 group-hover:text-gray-600"></i>
                    </a>
                  @endforeach
                </div>
              </div>
            @endif
          </div>
        </div>

        <div class="lg:col-span-1 space-y-6">
          <div class="bg-white rounded-3xl shadow-xl p-6 mb-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
              <i class="fas fa-chart-line text-purple-600"></i>
              Panduan Status
            </h3>
            <div class="space-y-4">
              <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-xl">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clock text-white"></i>
                  </div>
                  <div>
                    <p class="text-xs text-yellow-600">Pending</p>
                    <p class="text-md font-bold text-yellow-800">Menunggu verifikasi</p>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-between p-3 bg-blue-50 rounded-xl">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check text-white"></i>
                  </div>
                  <div>
                    <p class="text-xs text-blue-600">Verified</p>
                    <p class="text-md font-bold text-blue-800">Data terverifikasi</p>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-between p-3 bg-indigo-50 rounded-xl">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-cog text-white"></i>
                  </div>
                  <div>
                    <p class="text-xs text-indigo-600">Processing</p>
                    <p class="text-md font-bold text-indigo-800">Sedang diproses</p>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-between p-3 bg-green-50 rounded-xl">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-white"></i>
                  </div>
                  <div>
                    <p class="text-xs text-green-600">Completed</p>
                    <p class="text-md font-bold text-green-800">Siap diambil</p>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-between p-3 bg-red-50 rounded-xl">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-red-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-times-circle text-white"></i>
                  </div>
                  <div>
                    <p class="text-xs text-red-600">Rejected</p>
                    <p class="text-md font-bold text-red-800">Ditolak</p>
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

          <div class="space-y-3">
            <a href="{{ route('service.submission.tracking') }}" onclick="window.location.replace(this.href); return false;" class="flex items-center justify-center w-full px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-purple-800 transition-all shadow-lg hover:shadow-xl">
              <i class="fas fa-search mr-2"></i>
              Lacak Pengajuan Lain
            </a>

            <a href="{{ route('service.index') }}" onclick="window.location.replace(this.href); return false;" class="flex items-center justify-center w-full px-6 py-3 bg-white text-gray-700 font-semibold rounded-xl border-2 border-gray-300 hover:border-gray-400 hover:bg-gray-50 transition-all">
              <i class="fas fa-home mr-2"></i>
              Kembali ke Daftar Layanan
            </a>

            <button onclick="window.print()" class="flex items-center justify-center w-full px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all">
              <i class="fas fa-print mr-2"></i>
              Cetak Halaman
            </button>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

@php
  function getStatusGradient($status)
  {
      return match ($status) {
          'pending' => 'from-yellow-500 to-yellow-600',
          'verified' => 'from-blue-500 to-blue-600',
          'processing' => 'from-indigo-500 to-indigo-600',
          'completed' => 'from-green-500 to-green-600',
          'rejected' => 'from-red-500 to-red-600',
          default => 'from-gray-500 to-gray-600',
      };
  }

  function getStatusIcon($status)
  {
      return match ($status) {
          'pending' => 'fas fa-clock',
          'verified' => 'fas fa-check-circle',
          'processing' => 'fas fa-cog fa-spin',
          'completed' => 'fas fa-check-double',
          'rejected' => 'fas fa-times-circle',
          default => 'fas fa-question-circle',
      };
  }

  function getStatusLabel($status)
  {
      return match ($status) {
          'pending' => 'Menunggu Verifikasi',
          'verified' => 'Terverifikasi',
          'processing' => 'Sedang Diproses',
          'completed' => 'Selesai',
          'rejected' => 'Ditolak',
          default => 'Unknown',
      };
  }

  function getStatusDescription($status)
  {
      return match ($status) {
          'pending' => 'Pengajuan Anda sedang menunggu verifikasi dari petugas. Kami akan segera memeriksa kelengkapan dokumen Anda.',
          'verified' => 'Data Anda telah diverifikasi dan dinyatakan lengkap. Pengajuan akan segera diproses oleh petugas terkait.',
          'processing' => 'Dokumen Anda sedang dalam proses penyelesaian. Mohon bersabar menunggu hingga proses selesai.',
          'completed' => 'Dokumen Anda telah selesai diproses dan siap untuk diambil di Kantor Desa. Jangan lupa membawa identitas diri saat pengambilan.',
          'rejected' => 'Mohon maaf, pengajuan Anda ditolak. Silakan hubungi kantor desa untuk informasi lebih lanjut atau untuk pengajuan ulang.',
          default => 'Status tidak diketahui.',
      };
  }
@endphp

<script>
  function copyTrackingNumber(trackingNumber) {
    navigator.clipboard.writeText(trackingNumber).then(function() {
      showToast('Nomor tracking berhasil disalin!');
    }).catch(function(err) {
      const textArea = document.createElement('textarea');

      textArea.value = trackingNumber;
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand('copy');
      document.body.removeChild(textArea);
      showToast('Nomor tracking berhasil disalin!');
    });
  }

  function showToast(message) {
    const toast = document.createElement('div');
    toast.className = 'fixed top-6 right-6 z-50 bg-green-600 text-white px-6 py-4 rounded-xl shadow-2xl flex items-center animate-slide-in';
    toast.innerHTML = `
      <i class="fas fa-check-circle text-xl mr-3"></i>
      <span class="font-semibold">${message}</span>
    `;

    document.body.appendChild(toast);

    setTimeout(() => {
      toast.classList.add('animate-slide-out');
      setTimeout(() => {
        document.body.removeChild(toast);
      }, 300);
    }, 3000);
  }
</script>
