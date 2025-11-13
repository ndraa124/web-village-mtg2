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
      <form action="{{ route('admin.content.profile.history.update', $history) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Deskripsi Asal Usul Desa</label>
              <div class="form-group">
                <textarea name="origin_description" class="form-control" id="origin-description" rows="5" placeholder="Tuliskan deskripsi di sini...">{{ old('origin_description', $history->origin_description) }}</textarea>
              </div>
              @error('origin_description')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Ganti Foto</label>
              <div class="form-group">
                <input type="file" name="history_image" class="form-control" onchange="previewImage(event)">
                <small class="d-block mt-2">Kosongkan jika tidak ingin mengganti foto.</small>
              </div>
              @error('history_image')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
              <label class="mt-3">Foto Saat Ini:</label>
              <img id="image-preview" src="{{ $history->history_image_url }}" alt="Image Preview" class="img-thumbnail mt-1" style="max-height: 200px;">
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Ubah</button>
              <a href="{{ route('admin.content.profile.history.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
