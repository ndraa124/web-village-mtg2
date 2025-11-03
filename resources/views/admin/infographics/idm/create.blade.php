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
      <form action="{{ route('infographics.idm.store') }}" method="POST">
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
              <label class="label fs-16 mb-2">Status IDM</label>
              <div class="form-group">
                <select name="idm_status_id" class="form-select form-control" id="idm-status-id" aria-label="IdmStatus">
                  <option value="">-- Pilih Status --</option>
                  @foreach ($idmStatuses as $status)
                  <option value="{{ $status->id }}" {{ old('idm_status_id') == $status->id ? 'selected' : '' }}>
                    {{ $status->status_desc }}
                  </option>
                  @endforeach
                </select>
              </div>
              @error('idm_status_id')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Skor Minimal</label>
              <div class="form-groupo">
                <input type="number" name="min_score" class="form-control" value="{{ old('min_score', '0.0000') }}" placeholder="0.0000" step="0.0001">
              </div>
              @error('min_score')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Skor IKS</label>
              <div class="form-groupo">
                <input type="number" name="iks_score" class="form-control" value="{{ old('iks_score', '0.0000') }}" placeholder="0.0000" step="0.0001">
              </div>
              @error('iks_score')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Skor IKE</label>
              <div class="form-groupo">
                <input type="number" name="ike_score" class="form-control" value="{{ old('ike_score', '0.0000') }}" placeholder="0.0000" step="0.0001">
              </div>
              @error('ike_score')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Skor IKL</label>
              <div class="form-groupo">
                <input type="number" name="ikl_score" class="form-control" value="{{ old('ikl_score', '0.0000') }}" placeholder="0.0000" step="0.0001">
              </div>
              @error('ikl_score')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Skor Tambahan</label>
              <div class="form-groupo">
                <input type="number" name="addition_score" class="form-control" value="{{ old('addition_score', '0.0000') }}" placeholder="0.0000" step="0.0001">
              </div>
              @error('addition_score')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Skor</label>
              <div class="form-groupo">
                <input type="number" name="total_score" class="form-control" value="{{ old('total_score', '0.0000') }}" placeholder="0.0000" step="0.0001">
              </div>
              @error('total_score')
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
              <a href="{{ route('infographics.idm.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>