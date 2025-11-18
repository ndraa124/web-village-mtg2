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
      <form action="{{ route('admin.infographics.social-assistance.store') }}" method="POST">
        @csrf

        <div class="row">
          @if ($socialAssistances->isEmpty())
            <div class="col-12">
              <div class="alert alert-warning fs-16" role="alert">
                Semua data bantuan sosial sudah ditambahkan.
              </div>
            </div>
          @else
            <div class="col-lg-6">
              <div class="mb-20">
                <label class="label fs-16 mb-2">Nama Bantuan Sosial</label>
                <div class="form-group">
                  <select name="social_assistance_id" class="form-select form-control" id="social-assistance-id" aria-label="SocialAssistance">
                    <option value="">-- Pilih Bantuan Sosial --</option>
                    @foreach ($socialAssistances as $social)
                      <option value="{{ $social->id }}" {{ old('social_assistance_id') == $social->id ? 'selected' : '' }}>
                        {{ $social->social_assistance_name }}
                      </option>
                    @endforeach
                  </select>
                </div>
                @error('social_assistance_id')
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
          @endif
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex gap-2">
              @if ($socialAssistances->isNotEmpty())
                <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              @endif
              <a href="{{ route('admin.infographics.social-assistance.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
