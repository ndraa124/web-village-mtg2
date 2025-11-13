<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Desa Motoling Dua | Login" />
  <meta name="author" content="ID-124" />
  <meta name="description" content="Desa Motoling Dua." />
  <meta name="keywords" content="desa, motoling2, motoling dua, motoling, minahasa selatan, minsel" />
  <meta name="supported-color-schemes" content="light dark" />

  <title>Desa Motoling Dua | {{ $title }}</title>

  <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

  <link rel="stylesheet" href="{{ asset('admin/css/sidebar-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/simplebar.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/prism.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
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

  @include('admin.layout.sidebar')

  <div class="container-fluid">
    <div class="main-content d-flex flex-column">
      @include('admin.layout.navbar')

      <div class="main-content-container overflow-hidden">
        @if ($breadcrumbs)
          <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
            @if (count($breadcrumbs) > 2)
              <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <a href="{{ route($breadcrumbs[1]['route']) }}" class="d-inline text-decoration-none text-center fs-24" style="height: 30px; line-height: 30px;">
                  <i class="ri-arrow-left-long-line"></i>
                </a>
                <h3 class="d-inline mb-0">{{ $title }}</h3>
              </div>
            @else
              <h3 class="d-inline mb-0">{{ $title }}</h3>
            @endif

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb align-items-center mb-0 lh-1">
                @foreach ($breadcrumbs as $breadcrumb)
                  @if (!array_key_exists('route', $breadcrumb))
                    <li class="breadcrumb-item active" aria-current="page">
                      <span class="text-secondary">{{ $breadcrumb['title'] }}</span>
                    </li>
                  @else
                    <li class="breadcrumb-item">
                      <a href="{{ route($breadcrumb['route']) }}" class="d-flex align-items-center text-decoration-none">
                        <span class="text-body fs-14 hover">{{ $breadcrumb['title'] }}</span>
                      </a>
                    </li>
                  @endif
                @endforeach
              </ol>
            </nav>
          </div>
        @endif

        @include($main)
      </div>

      <div class="flex-grow-1"></div>

      @include('admin.layout.footer')
    </div>
  </div>

  <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/js/sidebar-menu.js') }}"></script>
  <script src="{{ asset('admin/js/quill.min.js') }}"></script>
  <script src="{{ asset('admin/js/data-table.js') }}"></script>
  <script src="{{ asset('admin/js/prism.js') }}"></script>
  <script src="{{ asset('admin/js/clipboard.min.js') }}"></script>
  <script src="{{ asset('admin/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('admin/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>
</body>

</html>
