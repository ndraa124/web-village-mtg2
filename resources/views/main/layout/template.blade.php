<!DOCTYPE html>
<html lang="id">

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

  <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('main/css/styles.css') }}">

  <title>Desa Motoling Dua | {{ $title }}</title>

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body class="bg-gray-50">
  @include('main.layout.navbar')
  @include($main)
  @include('main.layout.footer')

  <button id="back-to-top" class="fixed bottom-8 right-8 bg-red-600 text-white w-12 h-12 rounded-full shadow-lg hidden hover:bg-red-700 transition">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>