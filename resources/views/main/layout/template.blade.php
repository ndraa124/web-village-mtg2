<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Desa Motoling Dua" />
  <meta name="author" content="ID-124" />
  <meta name="description" content="Desa Motoling Dua." />
  <meta name="keywords" content="desa, motoling2, motoling dua, motoling, minahasa selatan, minsel" />
  <meta name="supported-color-schemes" content="light dark" />

  <title>Desa Motoling Dua | {{ $title }}</title>

  <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen bg-gray-50 overflow-x-hidden">
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v19.0&appId=1466563291076472&autoLogAppEvents=1" nonce="BuatNonceAcakDiSiniJikaBisa"></script>

  @include('main.layout.navbar')

  <main class="flex-grow w-full">
    @if (!empty($breadcrumbs))
      <section class="relative bg-gradient-to-br from-red-600 via-red-700 to-red-800 py-20">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 overflow-hidden">
          <div class="absolute -top-4 -right-4 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
          <div class="absolute -bottom-8 -left-8 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
          <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $header['title'] }}</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">{{ $header['description'] }}</p>

            <nav class="mt-6 flex items-center justify-center gap-2" aria-label="Breadcrumb">
              @foreach ($breadcrumbs as $breadcrumb)
                @if (array_key_exists('route', $breadcrumb) && !empty($breadcrumb['route']))
                  <a href="{{ route($breadcrumb['route']) }}" class="bg-white/10 backdrop-blur-sm rounded-md px-3 py-1 text-sm text-white/90 hover:bg-white/20 transition-colors">
                    @if ($loop->first)
                      <i class="fas fa-home mr-1"></i>
                    @endif
                    {{ $breadcrumb['title'] }}
                  </a>
                @else
                  <span class="backdrop-blur-sm rounded-md px-3 py-1 text-sm {{ !$loop->last ? 'bg-white/10 text-white/90 hover:bg-white/20 transition-colors' : 'bg-white/30 font-semibold text-white' }}">
                    {{ $breadcrumb['title'] }}
                  </span>
                @endif

                @if (!$loop->last)
                  <span class="text-white/50">
                    <i class="fas fa-chevron-right text-xs"></i>
                  </span>
                @endif
              @endforeach
            </nav>

          </div>
        </div>
      </section>
    @endif

    @include($main)
  </main>

  @include('main.layout.footer')

  <button id="back-to-top" class="fixed bottom-6 right-6 bg-gradient-to-br from-red-500 to-red-700 text-white w-16 h-16 rounded-full shadow-lg hidden hover:shadow-red-500/50 hover:scale-110 duration-300 z-50">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>
