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
      <form action="{{ route('infographics.resident.job.update', $residentJob->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Pekerjaan</label>
              <div class="form-group">
                <select name="job_id" class="form-select form-control" id="job-id" aria-label="Job">
                  <option value="">-- Pilih Pekerjaan --</option>
                  @foreach ($jobs as $job)
                  <option value="{{ $job->id }}" {{ old('job_id', $residentJob->job_id) == $job->id ? 'selected' : '' }}>
                    {{ $job->job_name }} {{-- Asumsi 'job_name' --}}
                  </option>
                  @endforeach
                </select>
              </div>

              @error('job_id')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Total Penduduk</label>
              <div class="form-groupo">
                <input type="number" name="total" class="form-control" value="{{ old('total', $residentJob->total) }}" placeholder="0">
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
              <a href="{{ route('infographics.resident.job.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>