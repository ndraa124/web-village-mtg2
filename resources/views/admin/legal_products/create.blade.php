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
      <form action="{{ route('manage-legal-product.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Judul Produk Hukum</label>
              <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Masukkan judul...">
              </div>
              @error('title')
              <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Kategori</label>
              <div class="form-group">
                <select name="category_id" class="form-control">
                  <option value="">-- Pilih Kategori --</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                  </option>
                  @endforeach
                </select>
              </div>
              @error('category_id')
              <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Tahun</label>
              <div class="form-group">
                <input type="number" name="year" class="form-control" value="{{ old('year', date('Y')) }}" placeholder="Contoh: 2024">
              </div>
              @error('year')
              <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Link (Opsional)</label>
              <div class="form-group">
                <input type="url" name="link" class="form-control" value="{{ old('link') }}" placeholder="https://example.com/file.pdf">
              </div>
              @error('link')
              <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              <a href="{{ route('manage-legal-product.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>