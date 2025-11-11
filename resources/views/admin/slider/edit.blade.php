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
      <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Judul Slider</label>
              <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{ old('title', $slider->title) }}"
                  placeholder="Tuliskan judul slider...">
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
                <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $slider->subtitle) }}"
                  placeholder="Tuliskan subtitle slider...">
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
              <label class="label fs-16 mb-2">Gambar Saat Ini</label>
              <div>
                <img src="{{ $slider->image_url }}" alt="{{ $slider->title }}"
                  style="width: 200px; height: auto; border-radius: 8px;">
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Unggah Gambar Baru (Opsional)</label>
              <div class="form-group">
                <input type="file" name="image" class="form-control" accept="image/jpeg,image/png,image/jpg,image/webp">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
              </div>
              @error('image')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_active" role="switch" id="isActiveSwitch"
                  value="1" {{ old('is_active', $slider->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="isActiveSwitch">Jadikan Slider Aktif</label>
              </div>
              @if ($errors->has('is_active'))
              <div class="text-danger small mt-2">
                {{ $errors->first('is_active') }}
              </div>
              @endif
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Ubah</button>
              <a href="{{ route('slider.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>