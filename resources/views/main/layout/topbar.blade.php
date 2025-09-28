<nav class="navbar navbar-expand-lg navbar-light bg-white pt-3">
  <div class="container px-5">
    <a class="navbar-brand" href="{{ url('/') }}"><span class="fw-bolder text-primary">Library App</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
        @if (!request()->is('/'))
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-arrow-left"></i> &nbsp; Back to home
          </a>
        </li>
        &nbsp;
        &nbsp;
        &nbsp;
        @else
        @if (!Auth::check())
        <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('login') }}">
            Login &nbsp; <i class="fas fa-arrow-right text-secondary"></i>
          </a>
        </li>
        @endif
        @endif
      </ul>
    </div>
  </div>
</nav>