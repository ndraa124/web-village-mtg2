<div class="m-lg-auto my-auto w-720 py-4">
  <div class="card bg-white border rounded-10 border-white py-100 px-130">
    <div class="p-md-5 p-4 p-lg-0">
      <div class="text-center mb-4">
        <img src="{{ asset('img/logo.png') }}" alt="logo minsel" class="img mb-3" width="90px">
        <h3 class="fs-26 fw-medium" style="margin-bottom: 6px;">Desa Motoling Dua</h3>
        <p class="fs-16 text-secondary lh-1-8">Login Administrator</p>
      </div>

      @error('error')
      <div class="alert fs-16 alert-danger alert-dismissible" role="alert">
        {{ $message }}
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @enderror

      <form action="{{ route('auth.login.attempt') }}" method="POST">
        @csrf

        <div class="mb-20">
          <label class="label fs-16 mb-2">NIK</label>
          <div class="form-group">
            <input type="text" name="nik" class="form-control" id="floatingInput1" value="{{ old('nik') }}" placeholder="Masukkan NIK *">
          </div>
          @error('nik')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-20">
          <label class="label fs-16 mb-2">Password</label>
          <div class="form-group" id="password-show-hide">
            <div class="password-wrapper position-relative password-container">
              <input type="password" name="password" class="form-control text-secondary password" value="{{ old('password') }}" placeholder="Masukkan password *">
              <i style="color: #A9A9C8; font-size: 22px; right: 15px;" class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 position-absolute cursor text-secondary" aria-hidden="true"></i>
            </div>
          </div>
          @error('password')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-20">
          <div class="d-flex justify-content-between align-items-center flex-wrap gap-1">
            <div class="form-check">
              <input type="checkbox" name="remember" class="form-check-input" id="flexCheckDefault">
              <label class="form-check-label fs-16" for="flexCheckDefault">
                Ingat saya
              </label>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <button type="submit" class="btn btn-primary fw-normal text-white w-100" style="padding-top: 18px; padding-bottom: 18px;">
            Login
          </button>
        </div>

        <div class="position-relative text-center z-1 mb-12">
          <span class="fs-16 bg-white px-4 text-secondary card d-inline-block border-0"></span>
          <span class="d-block border-bottom border-2 position-absolute w-100 z-n1" style="top: 13px;"></span>
        </div>

        <ul class="p-0 mb-0 list-unstyled d-flex justify-content-center" style="gap: 10px;">
          <li>
            <a href="{{ route('home') }}" class="d-inline-block text-decoration-none text-center transition-y fs-16" style="height: 30px; line-height: 30px;">
              <i class="ri-arrow-left-long-line"></i> Kembali
            </a>
          </li>
        </ul>
      </form>
    </div>
  </div>
</div>