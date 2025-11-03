<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Tahun</span>
          <span class="fw-bold">{{ $apbd->year }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Pendapatan (Income)</span>
          <span class="fw-bold">Rp {{ number_format($apbd->income, 0, ',', '.') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Belanja (Shopping)</span>
          <span class="fw-bold">Rp {{ number_format($apbd->shopping, 0, ',', '.') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Pengeluaran (Expenditure)</span>
          <span class="fw-bold">Rp {{ number_format($apbd->expenditure, 0, ',', '.') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Pembiayaan (Financing)</span>
          <span class="fw-bold">Rp {{ number_format($apbd->financing, 0, ',', '.') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Surplus / Defisit</span>
          <span class="fw-bold">Rp {{ number_format($apbd->surplus_deficit, 0, ',', '.') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $apbd->created_at?->format('d M Y, H:i') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $apbd->updated_at?->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>