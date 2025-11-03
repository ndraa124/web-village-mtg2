<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Nama Bantuan Sosial</span>
          <span class="fw-bold">{{ $socialAssistance->socialAssistance->social_assistance_name ?? 'N/A' }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total</span>
          <span class="fw-bold">{{ number_format($socialAssistance->total, 0, ',', '.') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $socialAssistance->created_at?->format('d M Y, H:i') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $socialAssistance->updated_at?->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>