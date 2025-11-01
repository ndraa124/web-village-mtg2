<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

  <link rel="stylesheet" href="{{ asset('admin/css/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

  <title>Desa Motoling Dua | {{ $title }}</title>
</head>

<body class="bg-body-bg">
  <div class="preloader" id="preloader">
    <div class="preloader">
      <div class="waviy position-relative">
        <span class="d-block mb-4">
          <img src="{{ asset('img/logo.png') }}" alt="" class="img" width="90px">
        </span>
        <span class="d-inline-block">DESA</span>
        <span class="d-inline-block">MOTOLING</span>
        <span class="d-inline-block">DUA</span>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="main-content d-flex flex-column p-0">
      @include($main)
    </div>
  </div>

  <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>
</body>

</html>