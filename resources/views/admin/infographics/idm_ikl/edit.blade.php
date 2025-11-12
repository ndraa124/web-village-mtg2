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
      <form action="{{ route('admin.infographics.idm.ikl.update', $idmIkl->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Indikator</label>
              <div class="form-group">
                <input type="text" name="indicator_name" class="form-control" value="{{ old('indicator_name', $idmIkl->indicator_name) }}" placeholder="Masukkan nama indikator">
              </div>
              @error('indicator_name')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Skor</label>
              <div class="form-group">
                <input type="number" name="score" class="form-control" value="{{ old('score', $idmIkl->score) }}" placeholder="0" min="0" max="99">
              </div>
              @error('score')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Deskripsi</label>
              <div class="form-group">
                <input type="text" name="description" class="form-control" value="{{ old('description', $idmIkl->description) }}" placeholder="Masukkan deskripsi singkat">
              </div>
              @error('description')
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
                <input type="number" name="value" class="form-control" value="{{ old('value', $idmIkl->value) }}" placeholder="0.0000" step="0.0001">
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
              <label class="label fs-16 mb-2">Aktivitas (Opsional)</label>
              <div class="form-group">
                <textarea name="activities" class="form-control" rows="3" placeholder="Masukkan aktivitas">{{ old('activities', $idmIkl->activities) }}</textarea>
              </div>
              @error('activities')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Pusat (Opsional)</label>
              <div class="form-group">
                <input type="text" name="center" class="form-control" value="{{ old('center', $idmIkl->center) }}" placeholder="Masukkan sumber pusat">
              </div>
              @error('center')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Provinsi (Opsional)</label>
              <div class="form-group">
                <input type="text" name="province" class="form-control" value="{{ old('province', $idmIkl->province) }}" placeholder="Masukkan sumber provinsi">
              </div>
              @error('province')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Kab/Kota (Opsional)</label>
              <div class="form-group">
                <input type="text" name="regency" class="form-control" value="{{ old('regency', $idmIkl->regency) }}" placeholder="Masukkan sumber kab/kota">
              </div>
              @error('regency')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Desa (Opsional)</label>
              <div class="form-group">
                <input type="text" name="village" class="form-control" value="{{ old('village', $idmIkl->village) }}" placeholder="Masukkan sumber desa">
              </div>
              @error('village')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @endError
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">CSR (Opsional)</label>
              <div class="form-group">
                <input type="text" name="csr" class="form-control" value="{{ old('csr', $idmIkl->csr) }}" placeholder="Masukkan sumber CSR">
              </div>
              @error('csr')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Lainnya (Opsional)</label>
              <div class="form-group">
                <input type="text" name="other" class="form-control" value="{{ old('other', $idmIkl->other) }}" placeholder="Masukkan sumber lainnya">
              </div>
              @error('other')
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
              <button type="submit" class="btn btn-primary fw-normal text-white">Ubah</button>
              <a href="{{ route('admin.infographics.idm.ikl.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>