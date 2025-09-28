<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="library app" />
  <meta name="author" content="idprogramming" />

  <title>Library App - {{ $title }}</title>

  <link rel="icon" type="image/x-icon" href="{{ asset('main/assets/favicon.ico') }}" />
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="{{ asset('main/css/styles.css') }}" rel="stylesheet" />

  @if (request()->is('/'))
  <style>
    body {
      overflow: hidden;
    }
  </style>
  @endif
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    @include('main/layout/topbar')
    @include($main)
  </main>

  @if (!request()->is('/'))
  @include('main/layout/footer')
  @endif

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('main/js/scripts.js') }}"></script>
</body>

</html>