<style>
  .service-requirements h1,
  .service-requirements h2,
  .service-requirements h3 {
    margin-top: 1.5em;
    margin-bottom: 0.5em;
    font-weight: 700;
    color: #1f2937;
  }

  .service-requirements ul,
  .service-requirements ol {
    padding-left: 2em;
    margin-bottom: 1em;
  }

  .service-requirements li {
    margin-bottom: 0.5em;
  }

  .service-requirements p {
    margin-bottom: 1em;
  }
</style>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4 max-w-6xl">

    <div class="flex items-center text-red-600 mb-6">
      <i class="{{ $service->icon_class }} text-5xl mr-4"></i>
      <h1 class="text-4xl font-bold text-gray-800">{{ $service->title }}</h1>
    </div>

    <div class="bg-gray-50 p-8 rounded-2xl shadow-lg mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Deskripsi Layanan</h2>
      <p class="text-gray-600 text-lg leading-relaxed">{{ $service->description }}</p>
    </div>

    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
      <h2 class="text-2xl font-bold text-red-600 mb-4 border-b pb-2">Persyaratan Pengajuan</h2>

      <div class="text-gray-700 leading-relaxed service-requirements">
        {!! $service->requirements_content !!}
      </div>

      <hr class="my-6">

      <div class="text-center">
        <a href="{{ route('service.submission.create', $service->slug) }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10 transition duration-150">
          <i class="fas fa-paper-plane mr-2"></i> Ajukan Layanan Sekarang
        </a>
        <p class="text-sm text-gray-500 mt-3">Anda akan diarahkan ke halaman pengisian formulir.</p>
      </div>

    </div>

    <div class="mt-8 text-center">
      <a href="{{ route('service.index') }}" class="text-red-600 hover:text-red-800 font-medium">
        <i class="fas fa-arrow-left mr-1"></i> Kembali ke Daftar Layanan
      </a>
    </div>

  </div>
</section>
