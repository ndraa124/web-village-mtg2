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
      <form action="{{ route('admin.infographics.sdgs.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Tujuan SDGs</label>
              <div class="form-group">
                <input type="text" name="purpose" class="form-control" value="{{ old('purpose') }}" placeholder="Contoh: Tanpa Kemiskinan">
              </div>
              @error('purpose')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Value</label>
              <div class="form-group">
                <input type="number" name="value" class="form-control" value="{{ old('value', '0') }}" placeholder="0" min="0" max="99">
              </div>
              @error('value')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Ikon (Opsional)</label>
              <div class="form-group">
                <textarea name="icon" class="form-control" rows="4" placeholder="Masukkan kode SVG ikon atau teks lainnya">{{ old('icon') }}</textarea>
              </div>
              @error('icon')
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
              <a href="{{ route('admin.infographics.sdgs.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>