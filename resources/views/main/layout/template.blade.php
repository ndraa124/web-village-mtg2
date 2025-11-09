<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Desa Motoling Dua | Login" />
  <meta name="author" content="ID-124" />
  <meta
    name="description"
    content="Desa Motoling Dua." />
  <meta
    name="keywords"
    content="desa, motoling2, motoling dua, motoling, minahasa selatan, minsel" />
  <meta name="supported-color-schemes" content="light dark" />

  <title>Desa Motoling Dua | {{ $title }}</title>

  <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
</head>

<body class="flex flex-col min-h-screen bg-gray-50 overflow-x-hidden">
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v19.0&appId=1466563291076472&autoLogAppEvents=1"
    nonce="BuatNonceAcakDiSiniJikaBisa">
  </script>

  @include('main.layout.navbar')

  <main class="flex-grow w-full">
    @if(!empty($breadcrumbs))
    <section class="bg-gradient-to-r from-red-600 to-red-800 py-8">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-white mb-2">{{ $title }}</h2>
        <nav class="text-white/90">
          <?php foreach ($breadcrumbs as $breadcrumb) { ?>
            <?php if (!array_key_exists('route', $breadcrumb)) { ?>
              <span class="mx-2">/</span>
              <span>{{ $breadcrumb['title'] }}</span>
            <?php } else { ?>
              @if($breadcrumb['title'] == 'Beranda')
              <a href="{{ route($breadcrumb['route']) }}" class="hover:text-white">{{ $breadcrumb['title'] }}</a>
              @else
              <span class="mx-2">/</span>
              <a href="{{ route($breadcrumb['route']) }}" class="hover:text-white">{{ $breadcrumb['title'] }}</a>
              @endif
            <?php }  ?>
          <?php } ?>
        </nav>
      </div>
    </section>
    @endif

    @include($main)
  </main>

  @include('main.layout.footer')

  <button id="back-to-top" class="fixed bottom-8 right-8 bg-red-600 text-white w-12 h-12 rounded-full shadow-lg hidden hover:bg-red-700 transition z-50">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>