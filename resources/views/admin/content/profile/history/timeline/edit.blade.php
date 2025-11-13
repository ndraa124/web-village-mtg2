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
      <h5 class="text-primary fw-bold mb-3">Edit Timeline</h5>
      <form action="{{ route('admin.content.profile.history.timeline.update', $timeline->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Judul Timeline</label>
              <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{ old('title', $timeline->title) }}" placeholder="Tuliskan judul singkat item timeline...">
              </div>
              @error('title')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Deskripsi</label>
              <div class="form-group">
                <textarea name="description" class="form-control" rows="5" placeholder="Tuliskan detail kejadian...">{{ old('description', $timeline->description) }}</textarea>
              </div>
              @error('description')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Urutan Tampil</label>
              <div class="form-group">
                <input type="number" name="order" class="form-control" value="{{ old('order', $timeline->order) }}" placeholder="Nomor urutan (e.g., 1, 2)">
              </div>
              @error('order')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_active" role="switch" id="isActiveSwitch" value="1" {{ old('is_active', $timeline->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="isActiveSwitch">Aktifkan Item Timeline</label>
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
              <a href="{{ route('admin.content.profile.history.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
