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
      <form action="{{ route('admin.infographics.resident.education.update', $residentEducation->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Pendidikan</label>
              <div class="form-group">
                <select name="education_id" class="form-select form-control" id="education-id" aria-label="Education">
                  <option value="">-- Pilih Pendidikan --</option>
                  @foreach ($educations as $education)
                  <option value="{{ $education->id }}" {{ old('education_id', $residentEducation->education_id) == $education->id ? 'selected' : '' }}>
                    {{ $education->education_name }}
                  </option>
                  @endforeach
                </select>
              </div>

              @error('education_id')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Penduduk</label>
              <div class="form-group">
                <input type="number" name="total" class="form-control" value="{{ old('total', $residentEducation->total) }}" placeholder="0">
              </div>
              @error('total')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Ubah</button>
              <a href="{{ route('admin.infographics.resident.education.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>