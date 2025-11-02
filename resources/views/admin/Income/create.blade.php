<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white p-20 rounded-10 border border-white mb-4">
      <form action="{{ route('master.income.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Pendapatan</label>
              <div class="form-groupo">
                <input type="text" name="income_name" class="form-control" id="income-name" value="{{ old('income_name') }}" placeholder="Nama Pendapatan">
              </div>
              @error('income_name')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              <a href="{{ route('master.income.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>