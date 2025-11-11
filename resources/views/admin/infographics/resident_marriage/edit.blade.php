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
      <form action="{{ route('infographics.resident.marriage.update', $residentMarriage->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Perkawinan</label>
              <div class="form-group">
                <select name="marriage_id" class="form-select form-control" id="marriage-id" aria-label="Marriage">
                  <option value="">-- Pilih Perkawinan --</option>
                  @foreach ($marriages as $marriage)
                  <option value="{{ $marriage->id }}" {{ old('marriage_id', $residentMarriage->marriage_id) == $marriage->id ? 'selected' : '' }}>
                    {{ $marriage->marriage_name }} {{-- Asumsi 'marriage_name' --}}
                  </option>
                  @endforeach
                </select>
              </div>

              @error('marriage_id')
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
                <input type="number" name="total" class="form-control" value="{{ old('total', $residentMarriage->total) }}" placeholder="0" min="0">
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
              <a href="{{ route('infographics.resident.marriage.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>