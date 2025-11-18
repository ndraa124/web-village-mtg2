<div class="row">
  <div class="col-lg-12">
    @if ($message = Session::get('error'))
      <div class="col-12">
        <div class="alert fs-16 alert-danger alert-dismissible" role="alert">
          {{ $message }}
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    @endif

    <div class="card bg-white p-20 rounded-10 border border-white mb-4">
      <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">NIK</label>
              <div class="form-group">
                <input type="text" name="nik" class="form-control" id="nik" value="{{ old('nik') }}" placeholder="NIK">
              </div>
              @error('nik')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Lengkap</label>
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Nama">
              </div>
              @error('name')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Password</label>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              @error('password')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Konfirmasi Password</label>
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Konfirmasi Password">
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              <a href="{{ route('admin.users.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
