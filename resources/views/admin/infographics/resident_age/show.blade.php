<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Kelompok Umur</span>
          <span class="fw-bold">{{ $age->age }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Jenis Kelamin</span>
          <span class="fw-bold">{{ $age->gender->gender_name ?? 'N/A' }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total</span>
          <span class="fw-bold">{{ $age->total }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $age->created_at->format('d M Y, H:i') }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $age->updated_at->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>