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
      <form action="{{ route('admin.infographics.apbd.shopping.store') }}" method="POST">
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
              <label class="label fs-16 mb-2">Nama Belanja</label>
              <div class="form-group">
                <select name="shopping_id" class="form-select form-control" id="shopping-id" aria-label="Shopping">
                  <option value="">-- Pilih Belanja --</option>
                  @foreach ($shoppings as $shopping)
                    <option value="{{ $shopping->id }}" {{ old('shopping_id') == $shopping->id ? 'selected' : '' }}>
                      {{ $shopping->shopping_name }}
                    </option>
                  @endforeach
                </select>
              </div>
              @error('shopping_id')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Anggaran (Budget)</label>
              <div class="form-group">
                <input type="number" name="budget" class="form-control" value="{{ old('budget', 0) }}" placeholder="0" min="0">
              </div>
              @error('budget')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Persen (%)</label>
              <div class="form-group">
                <input type="number" name="percent" class="form-control" value="{{ old('percent', 0) }}" placeholder="0" min="0" max="100">
              </div>
              @error('percent')
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
              <a href="{{ route('admin.infographics.apbd.shopping.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
