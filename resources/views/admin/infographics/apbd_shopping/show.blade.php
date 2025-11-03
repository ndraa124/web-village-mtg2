<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Tahun</span>
          <span class="fw-bold">{{ $apbdShopping->year }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Nama Belanja</span>
          <span class="fw-bold">{{ $apbdShopping->shopping->shopping_name ?? 'N/A' }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Anggaran (Budget)</span>
          <span class="fw-bold">Rp {{ number_format($apbdShopping->budget, 0, ',', '.') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Persen (%)</span>
          <span class="fw-bold">{{ $apbdShopping->percent }}%</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $apbdShopping->created_at?->format('d M Y, H:i') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $apbdShopping->updated_at?->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>