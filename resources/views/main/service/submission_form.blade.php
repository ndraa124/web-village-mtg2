<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 max-w-4xl">

    <div class="text-center mb-10">
      <h1 class="text-3xl font-bold text-gray-800 mb-2">Form Pengajuan: {{ $service->title }}</h1>
      <p class="text-gray-600">Mohon isi data diri dan keperluan Anda dengan lengkap dan benar.</p>
    </div>

    @if ($message = Session::get('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        {{ $message }}
      </div>
    @endif

    <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200">
      <form action="{{ route('service.submission.store', $service->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h3 class="text-xl font-semibold text-red-600 mb-4 border-b pb-2">Data Pembuat Pengajuan</h3>
        <div class="grid md:grid-cols-2 gap-4 mb-6">

          <div class="form-group">
            <label for="name" class="block text-gray-700 font-medium mb-1">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
            @error('name')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="email" class="block text-gray-700 font-medium mb-1">Email <span class="text-danger">*</span></label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
            @error('email')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group col-span-1">
            <label for="phone" class="block text-gray-700 font-medium mb-1">Nomor Telepon (Opsional)</label>
            <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">
            @error('phone')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <h3 class="text-xl font-semibold text-red-600 mb-4 border-b pb-2 mt-6">Detail Keperluan</h3>

        <div class="form-group mb-6">
          <label for="user_description" class="block text-gray-700 font-medium mb-1">Keterangan / Keperluan Pengajuan <span class="text-danger">*</span></label>
          <textarea id="user_description" name="user_description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('user_description') border-red-500 @enderror" placeholder="Contoh: Pengajuan KTP baru karena hilang, melampirkan surat kehilangan dari kepolisian.">{{ old('user_description') }}</textarea>
          @error('user_description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <h3 class="text-xl font-semibold text-red-600 mb-4 border-b pb-2 mt-6">Berkas Pendukung</h3>

        <div class="alert alert-info text-sm mb-4">
          Upload file KTP, KK, dan berkas persyaratan lainnya (maksimal 5 file). Format yang diterima: PDF, JPG, JPEG, PNG (maks 2MB per file).
        </div>

        <div class="form-group mb-6">
          <label for="supporting_files" class="block text-gray-700 font-medium mb-1">Upload File Pendukung (Multiple)</label>
          <input type="file" id="supporting_files" name="supporting_files[]" multiple class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('supporting_files') border-red-500 @enderror">
          @error('supporting_files')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
          @error('supporting_files.*')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="text-center mt-8">
          <button type="submit" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10 transition duration-150">
            <i class="fas fa-check-circle mr-2"></i> Kirim Pengajuan
          </button>
        </div>
      </form>
    </div>

    <div class="mt-8 text-center">
      <a href="{{ route('service.show', $service->slug) }}" class="text-red-600 hover:text-red-800 font-medium">
        <i class="fas fa-arrow-left mr-1"></i> Kembali ke Persyaratan
      </a>
    </div>

  </div>
</section>
