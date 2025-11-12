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
      <form action="{{ route('admin.infographics.stunting.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Tahun</label>
              <div class="form-group">
                <input type="number" name="year" class="form-control" value="{{ old('year', date('Y')) }}" placeholder="Contoh: 2024" min="1900" max="9999">
              </div>
              @error('year')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Kategori Stunting</label>
              <div class="form-group">
                <select name="stunting_id" class="form-select form-control" id="stunting-id" aria-label="Stunting">
                  <option value="">-- Pilih Kategori --</option>
                  @foreach ($stuntings as $stunting)
                  <option value="{{ $stunting->id }}" {{ old('stunting_id') == $stunting->id ? 'selected' : '' }}>
                    {{ $stunting->stunting_name }} {{-- Asumsi 'stunting_name' --}}
                  </option>
                  @endforeach
                </select>
              </div>
              @error('stunting_id')
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
                <input type="number" name="total" class="form-control" value="{{ old('total', 0) }}" placeholder="0" min="0">
              </div>
              @error('total')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Status</label>
              <div class="form-group">
                <select name="is_active" class="form-select form-control" aria-label="Status">
                  <option value="1" {{ old('is_active', 1) == 1 ? 'selected' : '' }}>Aktif</option>
                  <option value="0" {{ old('is_active', 1) == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
              </div>
              @error('is_active')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              <a href="{{ route('admin.infographics.stunting.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>