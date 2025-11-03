<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Tujuan SDGs</span>
          <span class="fw-bold">{{ $sdg->purpose }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Value</span>
          <span class="fw-bold">{{ $sdg->value }}</span>
        </li>
        <li class="list-group-item d-flex flex-column justify-content-between align-items-start p-20">
          <span class="text-secondary fw-medium mb-2">Ikon</span>
          <span class="fw-bold" style="white-space: pre-wrap; word-break: break-all;">{{ $sdg->icon ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $sdg->created_at?->format('d M Y, H:i') }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $sdg->updated_at?->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>