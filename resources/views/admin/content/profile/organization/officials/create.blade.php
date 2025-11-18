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
      <form action="{{ route('admin.content.profile.organization.officials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Lengkap</label>
              <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Masukkan nama...">
              </div>
              @error('name')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Jabatan</label>
              <div class="form-group">
                <select name="officials_position_id" class="form-select form-control" aria-label="Jabatan">
                  <option value="" selected>Pilih Jabatan...</option>
                  @foreach ($positions as $position)
                    <option value="{{ $position->id }}" {{ old('officials_position_id') == $position->id ? 'selected' : '' }}>
                      {{ $position->position_name }}
                    </option>
                  @endforeach
                </select>
              </div>
              @error('officials_position_id')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Foto</label>
              <div class="form-group">
                <input type="file" name="image" class="form-control" onchange="previewImage(event)">
              </div>
              @error('image')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
              <img id="image-preview" src="https://placehold.co/600x600/e2e8f0/e2e8f0?text=Preview" alt="Image Preview" class="img-thumbnail mt-3" style="max-height: 200px;">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Urutan Tampil</label>
              <div class="form-group">
                <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}" placeholder="Nomor urutan (e.g., 1, 2)">
              </div>
              @error('order')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              <a href="{{ route('admin.content.profile.organization.officials.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
