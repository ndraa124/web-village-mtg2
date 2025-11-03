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
      <form action="{{ route('infographics.apbd.update', $apbd->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Tahun</label>
              <div class="form-group">
                <input type="number" name="year" class="form-control" value="{{ old('year', $apbd->year) }}" placeholder="Contoh: 2024" min="1900" max="9999">
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
              <label class="label fs-16 mb-2">Pendapatan (Income)</label>
              <div class="form-groupo">
                <input type="number" name="income" class="form-control" value="{{ old('income', $apbd->income) }}" placeholder="0" min="0">
              </div>
              @error('income')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Belanja (Shopping)</label>
              <div class="form-groupo">
                <input type="number" name="shopping" class="form-control" value="{{ old('shopping', $apbd->shopping) }}" placeholder="0" min="0">
              </div>
              @error('shopping')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Pengeluaran (Expenditure)</label>
              <div class="form-groupo">
                <input type="number" name="expenditure" class="form-control" value="{{ old('expenditure', $apbd->expenditure) }}" placeholder="0" min="0">
              </div>
              @error('expenditure')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Pembiayaan (Financing)</label>
              <div class="form-groupo">
                <input type="number" name="financing" class="form-control" value="{{ old('financing', $apbd->financing) }}" placeholder="0" min="0">
              </div>
              @error('financing')
              <div class="text-danger small mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Surplus / Defisit</label>
              <div class="form-groupo">
                <input type="number" name="surplus_deficit" class="form-control" value="{{ old('surplus_deficit', $apbd->surplus_deficit) }}" placeholder="0">
              </div>
              @error('surplus_deficit')
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
              <a href="{{ route('infographics.apbd.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>