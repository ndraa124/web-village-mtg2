<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="bg-white rounded-lg shadow-xl mb-12 overflow-hidden">
      <div class="bg-gradient-to-r from-red-600 to-red-700 p-8 text-white">
        <div class="flex items-center justify-center mb-4">
          <i class="fas fa-eye text-5xl"></i>
        </div>
        <h3 class="text-3xl font-bold text-center mb-2">VISI</h3>
      </div>
      <div class="p-8">
        <blockquote class="text-2xl md:text-3xl font-bold text-center text-gray-800 leading-relaxed italic">
          "{{ $vision->description ?? 'Belum ada data visi' }}"
        </blockquote>

        <div class="mt-8 grid md:grid-cols-3 gap-6">
          <div class="text-center">
            <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-chart-line text-3xl text-red-600"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-2">MAJU</h4>
            <p class="text-gray-600 text-sm">Pembangunan yang berkelanjutan di semua sektor</p>
          </div>
          <div class="text-center">
            <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-hands-helping text-3xl text-green-600"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-2">MANDIRI</h4>
            <p class="text-gray-600 text-sm">Kemandirian ekonomi dan pemberdayaan masyarakat</p>
          </div>
          <div class="text-center">
            <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-heart text-3xl text-blue-600"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-2">SEJAHTERA</h4>
            <p class="text-gray-600 text-sm">Kesejahteraan lahir dan batin untuk seluruh warga</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-lg shadow-xl mb-12 overflow-hidden">
      <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8 text-white">
        <div class="flex items-center justify-center mb-4">
          <i class="fas fa-rocket text-5xl"></i>
        </div>
        <h3 class="text-3xl font-bold text-center mb-2">MISI</h3>
        <p class="text-center text-white/90">Langkah Strategis Mewujudkan Visi</p>
        <p class="text-center text-white/90">Menggali, memberdayakan serta memaksimalkan semua potensi yang ada di masyarakat, meliputi</p>
      </div>
      <div class="p-8">
        <div class="space-y-6">

          @forelse($missions as $mission)
          <div class="flex items-start border-l-4 border-red-600 pl-6 hover:bg-gray-50 py-4 transition">
            <div class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
              <span class="font-bold">{{ $loop->iteration }}</span>
            </div>
            <div>
              @if($mission->description != null)
              <h4 class="font-bold text-gray-800 mb-2">{{ $mission->title }}</h4>
              <p class="text-gray-600">{{ $mission->description }}</p>
              @else
              <h4 class="font-bold text-gray-800 mt-2">{{ $mission->title }}</h4>
              @endif
            </div>
          </div>
          @empty
          <p class="text-center text-gray-500 col-span-4">Belum ada misi untuk ditampilkan.</p>
          @endforelse

        </div>
      </div>
    </div>

    <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-8 mb-12">
      <h3 class="text-2xl font-bold text-gray-800 mb-10 text-center">
        <i class="fas fa-handshake text-red-600 mr-2"></i>
        Nilai-Nilai yang Kami Junjung
      </h3>

      <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-4">
        <div class="text-center">
          <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
            <i class="fas fa-balance-scale text-2xl text-red-600"></i>
          </div>
          <h5 class="font-bold text-gray-800">Integritas</h5>
          <p class="text-xs text-gray-600 mt-1">Jujur dan bertanggung jawab</p>
        </div>

        <div class="text-center">
          <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
            <i class="fas fa-eye text-2xl text-blue-600"></i>
          </div>
          <h5 class="font-bold text-gray-800">Transparansi</h5>
          <p class="text-xs text-gray-600 mt-1">Terbuka dan akuntabel</p>
        </div>

        <div class="text-center">
          <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
            <i class="fas fa-lightbulb text-2xl text-yellow-600"></i>
          </div>
          <h5 class="font-bold text-gray-800">Inovasi</h5>
          <p class="text-xs text-gray-600 mt-1">Kreatif dan solutif</p>
        </div>

        <div class="text-center">
          <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
            <i class="fas fa-hands-helping text-2xl text-green-600"></i>
          </div>
          <h5 class="font-bold text-gray-800">Gotong Royong</h5>
          <p class="text-xs text-gray-600 mt-1">Bersatu dan bekerjasama</p>
        </div>

        <div class="text-center">
          <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
            <i class="fas fa-award text-2xl text-purple-600"></i>
          </div>
          <h5 class="font-bold text-gray-800">Profesional</h5>
          <p class="text-xs text-gray-600 mt-1">Kompeten dan berkualitas</p>
        </div>
      </div>
    </div>
  </div>
</section>