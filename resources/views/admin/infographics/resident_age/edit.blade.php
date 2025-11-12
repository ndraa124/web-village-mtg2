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
      <form action="{{ route('admin.infographics.resident.age.update', $age->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Jenis Kelamin</label>

              <div class="form-group">
                <select name="gender_id" class="form-select form-control" id="gender-id" aria-label="Gender">
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  @foreach ($genders as $gender)
                  <option value="{{ $gender->id }}" {{ old('gender_id', $age->gender_id) == $gender->id ? 'selected' : '' }}>
                    {{ $gender->gender_name }}
                  </option>
                  @endforeach
                </select>
              </div>
              @error('gender_id')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Kelompok Umur</label>
              <div class="form-group">
                <input type="text" name="age" class="form-control" value="{{ old('age', $age->age) }}" placeholder="Contoh: 0-5 Tahun">
              </div>
              @error('age')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total</label>
              <div class="form-group">
                <input type="number" name="total" class="form-control" value="{{ old('total', $age->total) }}" placeholder="0">
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
              <a href="{{ route('admin.infographics.resident.age.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>