<footer class="bg-gray-900 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-4 gap-8">
      <div>
        <h3 class="text-xl font-bold mb-4">{{ $village->name }}</h3>
        <p class="text-gray-400">{{ $village->description }}</p>
      </div>

      <div>
        <h4 class="text-lg font-semibold mb-4">Link Cepat</h4>
        <ul class="space-y-2">
          <li><a href="{{ route('profile.history') }}" class="text-gray-400 hover:text-white transition">Sejarah Desa</a></li>
          <li><a href="{{ route('news.index') }}" class="text-gray-400 hover:text-white transition">Berita & Informasi</a></li>
          <li><a href="{{ route('service.index') }}" class="text-gray-400 hover:text-white transition">Layanan Publik</a></li>
          <li><a href="https://forms.gle/PUBxooALDLNdUkS67" class="text-gray-400 hover:text-white transition">Pengaduan Masyarakat</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-lg font-semibold mb-4">Layanan Online</h4>
        <ul class="space-y-2">
          @forelse($servicesFooter as $service)
            <li><a href="{{ route('service.show', $service->slug) }}" class="text-gray-400 hover:text-white transition">{{ $service->title }}</a></li>
          @empty
            <p class="text-gray-500">Layanan belum tersedia</p>
          @endforelse
        </ul>
      </div>

      <div>
        <h4 class="text-lg font-semibold mb-4">Statistik Pengunjung</h4>
        <div class="bg-gray-800 rounded-lg p-4">
          <div class="grid grid-cols-2 gap-x-4 gap-y-3">

            <div>
              <p class="flex items-center text-gray-400 text-sm mb-0">
                <i class="fas fa-users mr-2 w-4 text-center"></i>
                Total
              </p>
              <p class="text-white font-semibold text-lg">
                {{ number_format($totalVisitors ?? 0) }}
              </p>
            </div>

            <div>
              <p class="flex items-center text-gray-400 text-sm mb-0">
                <i class="fas fa-calendar-alt mr-2 w-4 text-center"></i>
                Bulan Ini
              </p>
              <p class="text-white font-semibold text-lg">
                {{ number_format($monthVisitors ?? 0) }}
              </p>
            </div>

            <div>
              <p class="flex items-center text-gray-400 text-sm mb-0">
                <i class="fas fa-calendar-day mr-2 w-4 text-center"></i>
                Kemarin
              </p>
              <p class="text-white font-semibold text-lg">
                {{ number_format($yesterdayVisitors ?? 0) }}
              </p>
            </div>

            <div>
              <p class="flex items-center text-gray-400 text-sm mb-0">
                <i class="fas fa-user mr-2 w-4 text-center"></i>
                Hari Ini
              </p>
              <p class="text-white font-semibold text-lg">
                {{ number_format($todayVisitors ?? 0) }}
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="border-t border-gray-800 mt-8 pt-8 text-center">
      <p class="text-gray-400">
        © 2025 {{ $village->name }}. All rights reserved. | Developed by ID-124
      </p>
    </div>
  </div>
</footer>
