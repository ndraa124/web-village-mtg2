<section class="py-8 bg-white border-b border-gray-200">
  <div class="container mx-auto px-4 max-w-4xl">
    <div class="hidden md:flex items-center justify-center gap-4">
      <div class="flex items-center">
        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="ml-2 text-sm font-semibold text-gray-500">Lihat Persyaratan</span>
      </div>
      <div class="w-12 h-1 bg-red-600"></div>
      <div class="flex items-center">
        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
          2
        </div>
        <span class="ml-2 text-sm font-semibold text-red-600">Isi Formulir</span>
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
        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg mb-2">
          <i class="fas fa-check text-sm"></i>
        </div>
        <span class="text-xs font-semibold text-gray-500 text-center">Persyaratan</span>
      </div>
      <div class="w-8 h-1 bg-red-600 -mt-6"></div>
      <div class="flex flex-col items-center flex-1">
        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg mb-2">
          2
        </div>
        <span class="text-xs font-semibold text-red-600 text-center">Formulir</span>
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
  <div class="container mx-auto px-4 max-w-4xl">

    @if ($message = Session::get('error'))
      @include('main.layout.components.alert-error', [
          'title' => 'Pengajuan Gagal!',
          'message' => $message,
          'showContactInfo' => false,
      ])
    @endif

    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
      <div class="bg-gradient-to-r from-red-600 to-red-700 p-8 text-white">
        <div class="flex items-center gap-4">
          <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center">
            <i class="fas fa-edit text-3xl"></i>
          </div>
          <div>
            <h2 class="text-2xl font-bold">Formulir Pengajuan</h2>
            <p class="text-red-100">Lengkapi semua field yang bertanda (*) wajib</p>
          </div>
        </div>
      </div>

      <div class="p-8">
        <form action="{{ route('service.submission.store', $service->slug) }}" method="POST" enctype="multipart/form-data" id="submissionForm">
          @csrf

          <div class="mb-10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-user text-white text-xl"></i>
              </div>
              <div>
                <h3 class="text-xl font-bold text-gray-800">Data Pembuat Pengajuan</h3>
                <p class="text-sm text-gray-500">Informasi pribadi Anda</p>
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <div class="form-group">
                <label for="nik" class="block text-gray-700 font-semibold mb-2">
                  NIK <span class="text-red-600">*</span>
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-id-card text-gray-400"></i>
                  </div>
                  <input type="text" id="nik" name="nik" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition @error('nik') border-red-500 @enderror" value="{{ old('nik') }}" placeholder="Masukkan 16 digit NIK" maxlength="16">
                </div>
                @error('nik')
                  <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $message }}
                  </p>
                @enderror
              </div>

              <div class="form-group">
                <label for="name" class="block text-gray-700 font-semibold mb-2">
                  Nama Lengkap <span class="text-red-600">*</span>
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-user text-gray-400"></i>
                  </div>
                  <input type="text" id="name" name="name" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition @error('name') border-red-500 @enderror" value="{{ old('name') }}" placeholder="Masukkan nama lengkap">
                </div>
                @error('name')
                  <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $message }}
                  </p>
                @enderror
              </div>

              <div class="form-group">
                <label for="email" class="block text-gray-700 font-semibold mb-2">
                  Email <span class="text-red-600">*</span>
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-envelope text-gray-400"></i>
                  </div>
                  <input type="email" id="email" name="email" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition @error('email') border-red-500 @enderror" value="{{ old('email') }}" placeholder="contoh@email.com">
                </div>
                @error('email')
                  <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $message }}
                  </p>
                @enderror
              </div>

              <div class="form-group">
                <label for="phone" class="block text-gray-700 font-semibold mb-2">
                  Nomor Telepon <span class="text-gray-400 text-sm">(Opsional)</span>
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-phone text-gray-400"></i>
                  </div>
                  <input type="text" id="phone" name="phone" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition @error('phone') border-red-500 @enderror" value="{{ old('phone') }}" placeholder="08123456789">
                </div>
                @error('phone')
                  <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $message }}
                  </p>
                @enderror
              </div>
            </div>
          </div>

          <div class="border-t-2 border-gray-100 my-8"></div>

          <div class="mb-10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-file-alt text-white text-xl"></i>
              </div>
              <div>
                <h3 class="text-xl font-bold text-gray-800">Detail Keperluan</h3>
                <p class="text-sm text-gray-500">Jelaskan tujuan pengajuan Anda</p>
              </div>
            </div>

            <div class="form-group">
              <label for="purpose" class="block text-gray-700 font-semibold mb-2">
                Keterangan / Keperluan Pengajuan <span class="text-red-600">*</span>
              </label>
              <textarea id="purpose" name="purpose" rows="6" class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition @error('purpose') border-red-500 @enderror" placeholder="Contoh: Pengajuan KTP baru karena hilang, melampirkan surat kehilangan dari kepolisian.">{{ old('purpose') }}</textarea>
              @error('purpose')
                <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                  <i class="fas fa-exclamation-circle"></i>
                  {{ $message }}
                </p>
              @enderror
            </div>
          </div>

          <div class="border-t-2 border-gray-100 my-8"></div>

          <div class="mb-10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-paperclip text-white text-xl"></i>
              </div>
              <div>
                <h3 class="text-xl font-bold text-gray-800">Berkas Pendukung</h3>
                <p class="text-sm text-gray-500">Upload dokumen persyaratan</p>
              </div>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 border-l-4 border-blue-500 p-6 rounded-2xl mb-6">
              <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-blue-500 text-xl mt-1"></i>
                <div>
                  <p class="text-blue-800 font-semibold mb-2">Petunjuk Upload File:</p>
                  <ul class="text-sm text-blue-700 space-y-1">
                    <li class="flex items-center gap-2">
                      <i class="fas fa-check text-blue-500 text-xs"></i>
                      Upload file KTP, KK, dan berkas persyaratan lainnya (maksimal 5 file)
                    </li>
                    <li class="flex items-center gap-2">
                      <i class="fas fa-check text-blue-500 text-xs"></i>
                      Format yang diterima: PDF, JPG, JPEG, PNG
                    </li>
                    <li class="flex items-center gap-2">
                      <i class="fas fa-check text-blue-500 text-xs"></i>
                      Ukuran maksimal 2MB per file
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="supporting_files" class="block text-gray-700 font-semibold mb-2">
                Upload File Pendukung (Multiple)
              </label>
              <div class="relative border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-purple-500 transition-colors cursor-pointer bg-gray-50 hover:bg-red-50">
                <input type="file" id="supporting_files" name="supporting_files[]" multiple class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.jpg,.jpeg,.png">
                <div class="pointer-events-none">
                  <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-cloud-upload-alt text-red-600 text-3xl"></i>
                  </div>
                  <p class="text-gray-700 font-semibold mb-1">Klik atau seret file ke sini</p>
                  <p class="text-sm text-gray-500">PDF, JPG, JPEG, PNG (Max. 2MB per file)</p>
                </div>
              </div>

              <div id="filePreview" class="mt-4 space-y-2"></div>

              @error('supporting_files')
                <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                  <i class="fas fa-exclamation-circle"></i>
                  {{ $message }}
                </p>
              @enderror
              @error('supporting_files.*')
                <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                  <i class="fas fa-exclamation-circle"></i>
                  {{ $message }}
                </p>
              @enderror
            </div>
          </div>

          <div class="mt-10 pt-8 border-t-2 border-gray-100">
            <div class="bg-gradient-to-br from-red-50 to-red-50 rounded-2xl p-8 text-center">
              <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-purple-600 rounded-3xl flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check-double text-white text-3xl"></i>
              </div>
              <h3 class="text-2xl font-bold text-gray-800 mb-3">Siap Mengirim Pengajuan?</h3>
              <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                Pastikan semua data yang Anda isi sudah benar sebelum mengirim pengajuan.
              </p>
              <button type="submit" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-2xl font-bold hover:from-red-700 hover:to-red-800 transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-1">
                <i class="fas fa-paper-plane"></i>
                <span>Kirim Pengajuan</span>
                <i class="fas fa-arrow-right ml-2"></i>
              </button>
              <p class="text-sm text-gray-500 mt-4">
                <i class="fas fa-shield-alt mr-1"></i>
                Data Anda aman dan akan diproses sesuai prosedur
              </p>
            </div>
          </div>

        </form>
      </div>
    </div>

    <div class="text-center mt-8">
      <a href="{{ route('service.show', $service->slug) }}" onclick="window.location.replace(this.href); return false;" class="inline-flex items-center gap-2 text-red-600 hover:text-red-800 font-semibold transition-colors hover:gap-3 duration-300">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali ke Persyaratan</span>
      </a>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('supporting_files');
    const filePreview = document.getElementById('filePreview');

    if (fileInput && filePreview) {
      fileInput.addEventListener('change', function(e) {
        filePreview.innerHTML = '';
        const files = Array.from(e.target.files);

        if (files.length > 0) {
          files.forEach((file, index) => {
            const fileSize = (file.size / 1024 / 1024).toFixed(2);
            const fileExtension = file.name.split('.').pop().toUpperCase();

            let iconClass = 'fa-file';
            let colorClass = 'bg-gray-100 text-gray-600';

            if (fileExtension === 'PDF') {
              iconClass = 'fa-file-pdf';
              colorClass = 'bg-red-100 text-red-600';
            } else if (['JPG', 'JPEG', 'PNG'].includes(fileExtension)) {
              iconClass = 'fa-file-image';
              colorClass = 'bg-blue-100 text-blue-600';
            }

            const fileItem = document.createElement('div');
            fileItem.className = 'flex items-center justify-between p-4 bg-white border-2 border-gray-200 rounded-xl hover:border-purple-300 transition-colors';
            fileItem.innerHTML = `
              <div class="flex items-center gap-3">
                <div class="w-12 h-12 ${colorClass} rounded-xl flex items-center justify-center">
                  <i class="fas ${iconClass} text-xl"></i>
                </div>
                <div>
                  <p class="font-semibold text-gray-800 text-sm">${file.name}</p>
                    <p class="text-xs text-gray-500">${fileSize} MB • ${fileExtension}</p>
                </div>
              </div>
              <div class="flex items-center gap-2">
                <span class="text-xs font-semibold ${fileSize > 2 ? 'text-red-600' : 'text-green-600'}">
                  ${fileSize > 2 ? '<i class="fas fa-exclamation-triangle"></i> Terlalu besar' : '<i class="fas fa-check-circle"></i> OK'}
                </span>
              </div>
            `;
            filePreview.appendChild(fileItem);
          });
        }
      });
    }
  });
</script>
