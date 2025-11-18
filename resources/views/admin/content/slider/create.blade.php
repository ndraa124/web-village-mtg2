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
      <form action="{{ route('admin.content.slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Judul Slider</label>
              <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Tuliskan judul slider...">
              </div>
              @error('title')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Sub Judul (Opsional)</label>
              <div class="form-group">
                <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}" placeholder="Tuliskan subtitle slider...">
              </div>
              @error('subtitle')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Unggah Gambar (Max: 2MB)</label>
              <div class="form-group">
                <input type="file" name="image" class="form-control" accept="image/jpeg,image/png,image/jpg,image/webp">
              </div>
              @error('image')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              <a href="{{ route('admin.content.slider.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
