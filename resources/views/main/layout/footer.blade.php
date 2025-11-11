<footer class="bg-gray-900 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-4 gap-8">
      <div>
        <h3 class="text-xl font-bold mb-4">Desa Motoling Dua</h3>
        <p class="text-gray-400">Membangun desa yang maju, mandiri, dan sejahtera untuk kesejahteraan bersama.</p>
      </div>

      <div>
        <h4 class="text-lg font-semibold mb-4">Link Cepat</h4>
        <ul class="space-y-2">
          <li><a href="{{ route('profile.history') }}" class="text-gray-400 hover:text-white transition">Profil Desa</a></li>
          <li><a href="{{ route('news.index') }}" class="text-gray-400 hover:text-white transition">Berita & Informasi</a></li>
          <li><a href="{{ route('service.index') }}" class="text-gray-400 hover:text-white transition">Layanan Masyarakat</a></li>
          <li><a href="https://forms.gle/PUBxooALDLNdUkS67" class="text-gray-400 hover:text-white transition">Pengaduan Masyarakat</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-lg font-semibold mb-4">Layanan Online</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-gray-400 hover:text-white transition">E-KTP</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition">Surat Keterangan</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition">Perizinan</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition">UMKM</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-lg font-semibold mb-4">Statistik Pengunjung</h4>
        <div class="bg-gray-800 rounded-lg p-4">
          <p class="text-gray-400 mb-2">
            <i class="fas fa-users mr-2"></i>
            Total: <span class="text-white font-semibold">
              {{ number_format($totalVisitors ?? 0) }}
            </span>
          </p>
          <p class="text-gray-400 mb-2">
            <i class="fas fa-user mr-2"></i>
            Hari Ini: <span class="text-white font-semibold">
              {{ number_format($todayVisitors ?? 0) }}
            </span>
          </p>
          <p class="text-gray-400">
            <i class="fas fa-chart-line mr-2"></i>
            Online: <span class="text-white font-semibold">
              {{ number_format($onlineVisitors ?? 0) }}
            </span>
          </p>
        </div>
      </div>
    </div>

    <div class="border-t border-gray-800 mt-8 pt-8 text-center">
      <p class="text-gray-400">
        © 2025 Desa Motoling Dua. All rights reserved. | Developed by ID-124
      </p>
    </div>
  </div>
</footer>