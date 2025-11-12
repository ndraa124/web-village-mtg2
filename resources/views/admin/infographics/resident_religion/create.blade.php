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
      <form action="{{ route('admin.infographics.resident.religion.store') }}" method="POST">
        @csrf

        <div class="row">
          @if ($religions->isEmpty())
          <div class="col-12">
            <div class="alert alert-warning fs-16" role="alert">
              Semua data agama sudah ditambahkan.
            </div>
          </div>
          @else
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Agama</label>
              <div class="form-group">
                <select name="religion_id" class="form-select form-control" id="religion-id" aria-label="Religion">
                  <option value="">-- Pilih Agama --</option>
                  @foreach ($religions as $religion)
                  <option value="{{ $religion->id }}" {{ old('religion_id') == $religion->id ? 'selected' : '' }}>
                    {{ $religion->religion_name }}
                  </option>
                  @endforeach
                </select>
              </div>
              @error('religion_id')
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
                <input type="number" name="total" class="form-control" value="{{ old('total', 0) }}" placeholder="0" min="0">
              </div>
              @error('total')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          @endif
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex gap-2">
              @if ($religions->isNotEmpty())
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              @endif
              <a href="{{ route('admin.infographics.resident.religion.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>