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
      <form action="{{ route('admin.content.profile.vision-mission.mission.update', $mission->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Judul</label>
              <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{ old('title', $mission->title) }}" placeholder="Tuliskan judul...">
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
              <label class="label fs-16 mb-2">Deskripsi (Optional)</label>
              <div class="form-group">
                <textarea name="description" class="form-control" id="mission-description" rows="5" placeholder="Tuliskan deskripsi di sini...">{{ old('description', $mission->description) }}</textarea>
              </div>
              @error('description')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_active" role="switch" id="isActiveSwitch" value="1" {{ old('is_active', $mission->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="isActiveSwitch">Jadikan Misi Aktif</label>
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
              <a href="{{ route('admin.content.profile.vision-mission.mission.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
