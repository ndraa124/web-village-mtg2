<div class="row">
  <div class="col-lg-12">
    @if ($message = Session::get('success'))
      <div class="col-12">
        <div class="alert fs-16 alert-success alert-dismissible" role="alert">
          {{ $message }}
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    @endif

    @if ($message = Session::get('error'))
      <div class="col-12">
        <div class="alert fs-16 alert-danger alert-dismissible" role="alert">
          {{ $message }}
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    @endif

    <div class="card bg-white p-20 rounded-10 border border-white mb-4">
      <form action="{{ route('admin.infographics.resident.update', $resident->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Laki-laki</label>
              <div class="form-group">
                <input type="number" name="t_man" class="form-control" placeholder="0" value="{{ old('t_man', $resident->t_man) }}">
              </div>
              @error('t_man')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Perempuan</label>
              <div class="form-group">
                <input type="number" name="t_woman" class="form-control" placeholder="0" value="{{ old('t_woman', $resident->t_woman) }}">
              </div>
              @error('t_woman')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Kepala Keluarga (KK)</label>
              <div class="form-group">
                <input type="number" name="t_head_of_family" class="form-control" placeholder="0" value="{{ old('t_head_of_family', $resident->t_head_of_family) }}">
              </div>
              @error('t_head_of_family')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Penduduk Sementara</label>
              <div class="form-group">
                <input type="number" name="t_temporary" class="form-control" placeholder="0" value="{{ old('t_temporary', $resident->t_temporary) }}">
              </div>
              @error('t_temporary')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Mutasi</label>
              <div class="form-group">
                <input type="number" name="t_mutation" class="form-control" placeholder="0" value="{{ old('t_mutation', $resident->t_mutation) }}">
              </div>
              @error('t_mutation')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Ubah</button>
              <a href="{{ route('admin.infographics.resident.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
