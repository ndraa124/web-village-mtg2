<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="mb-16">
      <div class="relative">
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-red-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-blue-200 rounded-full opacity-20 blur-3xl"></div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden relative">
          <div class="bg-gradient-to-r from-red-600 via-red-700 to-red-800 p-8 md:p-12 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
              <div class="absolute top-0 right-0 transform rotate-12">
                <i class="fas fa-eye text-[200px]"></i>
              </div>
              <div class="absolute bottom-0 left-0 transform -rotate-12">
                <i class="fas fa-star text-[150px]"></i>
              </div>
            </div>

            <div class="relative z-10">
              <div class="flex flex-col items-center mb-6">
                <div class="relative">
                  <div class="absolute inset-0 bg-white/30 rounded-full blur-xl animate-pulse"></div>
                  <div class="relative bg-white/20 backdrop-blur-sm rounded-full p-8 border-4 border-white/30">
                    <i class="fas fa-eye text-6xl"></i>
                  </div>
                </div>
              </div>
              <h3 class="text-4xl md:text-5xl font-extrabold text-center mb-4 tracking-wide">VISI</h3>
              <p class="text-center text-white/90 text-lg">Cita-cita Menuju Masa Depan Gemilang</p>
            </div>
          </div>

          <div class="p-8 md:p-12 bg-gradient-to-b from-white to-gray-50">
            <div class="relative">
              <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-red-600 rounded-full"></div>

              <div class="bg-gradient-to-br from-red-50 via-white to-red-50 rounded-3xl p-8 md:p-10 border-2 border-red-200 shadow-xl relative overflow-hidden mt-8">
                <div class="absolute top-0 left-0 w-20 h-20 bg-red-200 rounded-full -translate-x-10 -translate-y-10 opacity-30"></div>
                <div class="absolute bottom-0 right-0 w-32 h-32 bg-red-200 rounded-full translate-x-16 translate-y-16 opacity-30"></div>

                <div class="relative z-10">
                  <div class="text-red-600 text-6xl mb-4 text-center">
                    <i class="fas fa-quote-left"></i>
                  </div>
                  <blockquote class="text-2xl md:text-3xl font-bold text-center text-gray-800 leading-relaxed mb-4">
                    {{ $vision->description ?? 'Belum ada data visi' }}
                  </blockquote>
                  <div class="text-red-600 text-6xl text-center">
                    <i class="fas fa-quote-right"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mt-12">
              <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                <div class="relative bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-red-100 transform group-hover:-translate-y-2 group-hover:scale-105">
                  <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                    <div class="bg-gradient-to-br from-red-500 to-red-700 w-16 h-16 rounded-2xl flex items-center justify-center shadow-2xl rotate-45 group-hover:rotate-90 transition-transform duration-500">
                      <i class="fas fa-chart-line text-3xl text-white -rotate-45 group-hover:-rotate-90 transition-transform duration-500"></i>
                    </div>
                  </div>
                  <div class="mt-8 text-center">
                    <h4 class="font-bold text-2xl text-gray-800 mb-3">MAJU</h4>
                    <div class="w-12 h-1 bg-red-500 mx-auto mb-3"></div>
                    <p class="text-gray-600 leading-relaxed">Pembangunan yang berkelanjutan di semua sektor</p>
                  </div>
                </div>
              </div>

              <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                <div class="relative bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-green-100 transform group-hover:-translate-y-2 group-hover:scale-105">
                  <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                    <div class="bg-gradient-to-br from-green-500 to-green-700 w-16 h-16 rounded-2xl flex items-center justify-center shadow-2xl rotate-45 group-hover:rotate-90 transition-transform duration-500">
                      <i class="fas fa-hands-helping text-3xl text-white -rotate-45 group-hover:-rotate-90 transition-transform duration-500"></i>
                    </div>
                  </div>
                  <div class="mt-8 text-center">
                    <h4 class="font-bold text-2xl text-gray-800 mb-3">MANDIRI</h4>
                    <div class="w-12 h-1 bg-green-500 mx-auto mb-3"></div>
                    <p class="text-gray-600 leading-relaxed">Kemandirian ekonomi dan pemberdayaan masyarakat</p>
                  </div>
                </div>
              </div>

              <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                <div class="relative bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-blue-100 transform group-hover:-translate-y-2 group-hover:scale-105">
                  <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-700 w-16 h-16 rounded-2xl flex items-center justify-center shadow-2xl rotate-45 group-hover:rotate-90 transition-transform duration-500">
                      <i class="fas fa-heart text-3xl text-white -rotate-45 group-hover:-rotate-90 transition-transform duration-500"></i>
                    </div>
                  </div>
                  <div class="mt-8 text-center">
                    <h4 class="font-bold text-2xl text-gray-800 mb-3">SEJAHTERA</h4>
                    <div class="w-12 h-1 bg-blue-500 mx-auto mb-3"></div>
                    <p class="text-gray-600 leading-relaxed">Kesejahteraan lahir dan batin untuk seluruh warga</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-16">
      <div class="relative">

        <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-red-200 rounded-full opacity-20 blur-3xl"></div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden relative">

          <div class="bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 p-8 md:p-12 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
              <div class="absolute top-0 left-0 transform -rotate-12">
                <i class="fas fa-rocket text-[200px]"></i>
              </div>
              <div class="absolute bottom-0 right-0 transform rotate-12">
                <i class="fas fa-bullseye text-[150px]"></i>
              </div>
            </div>

            <div class="relative z-10">
              <div class="flex flex-col items-center mb-6">
                <div class="relative">
                  <div class="absolute inset-0 bg-white/30 rounded-full blur-xl animate-pulse"></div>
                  <div class="relative bg-white/20 backdrop-blur-sm rounded-full p-8 border-4 border-white/30">
                    <i class="fas fa-rocket text-6xl"></i>
                  </div>
                </div>
              </div>
              <h3 class="text-4xl md:text-5xl font-extrabold text-center mb-4 tracking-wide">MISI</h3>
              <p class="text-center text-white/90 text-lg mb-2">Langkah Strategis Mewujudkan Visi</p>
              <p class="text-center text-white/80">Menggali, memberdayakan serta memaksimalkan semua potensi yang ada di masyarakat</p>
            </div>
          </div>

          <div class="p-8 md:p-12 bg-gradient-to-b from-white to-gray-50">
            <div class="relative -top-4 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-full mb-8"></div>

            @forelse($missions as $mission)
              <div class="group relative mb-6">
                <div class="absolute inset-0 bg-gradient-to-r from-red-400 to-red-600 rounded-2xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                <div class="relative bg-gradient-to-r from-white via-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-200 hover:border-red-300">
                  <div class="flex items-stretch">

                    <div class="relative bg-gradient-to-br from-red-600 via-red-700 to-red-800 text-white flex-shrink-0 overflow-hidden">
                      <div class="absolute inset-0 opacity-20">
                        <i class="fas fa-check text-[100px] transform -rotate-12"></i>
                      </div>
                      <div class="relative z-10 p-8 flex items-center justify-center">
                        <div class="relative">
                          <div class="absolute inset-0 bg-white/30 rounded-2xl blur-lg"></div>
                          <div class="relative w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border-2 border-white/30 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <span class="text-3xl font-extrabold">{{ $loop->iteration }}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="p-6 md:p-8 flex-1 flex items-center">
                      <div class="w-full">
                        @if ($mission->description != null)
                          <h4 class="font-bold text-lg md:text-xl text-gray-800 mb-3 group-hover:text-red-600 transition-colors flex items-start">
                            <i class="fas fa-check-circle text-red-600 mr-3 mt-1 flex-shrink-0 group-hover:scale-125 transition-transform"></i>
                            <span>{{ $mission->title }}</span>
                          </h4>
                          <p class="text-gray-600 leading-relaxed pl-9">{{ $mission->description }}</p>
                        @else
                          <h4 class="font-bold text-lg md:text-xl text-gray-800 group-hover:text-red-600 transition-colors flex items-center">
                            <i class="fas fa-check-circle text-red-600 mr-3 flex-shrink-0 group-hover:scale-125 transition-transform"></i>
                            <span>{{ $mission->title }}</span>
                          </h4>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 border-2 border-yellow-300 rounded-2xl p-8 text-center shadow-lg">
                <div class="bg-yellow-200 text-yellow-700 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                  <i class="fas fa-info-circle text-3xl"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Data Misi</h4>
                <p class="text-gray-600">Belum ada misi yang dapat ditampilkan.</p>
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>

    <div class="mb-12">
      <div class="text-center mb-12">
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
          <i class="fas fa-gem text-red-600 mr-2"></i>
          Nilai-Nilai yang Kami Junjung
        </h3>
        <p class="text-gray-600">Prinsip dasar dalam melayani masyarakat</p>
        <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <div class="group relative">
          <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
          <div class="relative bg-white rounded-3xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border border-gray-100 hover:border-red-200">
            <div class="bg-gradient-to-br from-red-500 to-red-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
              <i class="fas fa-balance-scale text-2xl text-white"></i>
            </div>
            <h5 class="font-bold text-gray-800 text-center mb-2">Integritas</h5>
            <p class="text-xs text-gray-600 text-center">Jujur dan bertanggung jawab</p>
          </div>
        </div>

        <div class="group relative">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
          <div class="relative bg-white rounded-3xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border border-gray-100 hover:border-blue-200">
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
              <i class="fas fa-eye text-2xl text-white"></i>
            </div>
            <h5 class="font-bold text-gray-800 text-center mb-2">Transparansi</h5>
            <p class="text-xs text-gray-600 text-center">Terbuka dan akuntabel</p>
          </div>
        </div>

        <div class="group relative">
          <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
          <div class="relative bg-white rounded-3xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border border-gray-100 hover:border-yellow-200">
            <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
              <i class="fas fa-lightbulb text-2xl text-white"></i>
            </div>
            <h5 class="font-bold text-gray-800 text-center mb-2">Inovasi</h5>
            <p class="text-xs text-gray-600 text-center">Kreatif dan solutif</p>
          </div>
        </div>

        <div class="group relative">
          <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
          <div class="relative bg-white rounded-3xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border border-gray-100 hover:border-green-200">
            <div class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
              <i class="fas fa-hands-helping text-2xl text-white"></i>
            </div>
            <h5 class="font-bold text-gray-800 text-center mb-2">Gotong Royong</h5>
            <p class="text-xs text-gray-600 text-center">Bersatu dan bekerjasama</p>
          </div>
        </div>

        <div class="group relative">
          <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
          <div class="relative bg-white rounded-3xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border border-gray-100 hover:border-purple-200">
            <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
              <i class="fas fa-award text-2xl text-white"></i>
            </div>
            <h5 class="font-bold text-gray-800 text-center mb-2">Profesional</h5>
            <p class="text-xs text-gray-600 text-center">Kompeten dan berkualitas</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
