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
      <form action="{{ route('admin.content.profile.organization.deliberation.update', $deliberation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Gambar Saat Ini</label>
              <div>
                <img src="{{ $deliberation->image_url }}" alt="{{ $deliberation->caption ?? 'Current Image' }}" style="width: 200px; height: auto; object-fit: cover; border-radius: 8px;">
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Unggah Gambar Baru</label>
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

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Keterangan</label>
              <div class="form-group">
                <input type="text" name="caption" class="form-control" id="caption" value="{{ old('caption', $deliberation->caption) }}" placeholder="Keterangan singkat gambar...">
              </div>
              @error('caption')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Ubah</button>
              <a href="{{ route('admin.content.profile.organization.deliberation.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
