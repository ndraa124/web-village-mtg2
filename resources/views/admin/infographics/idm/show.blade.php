<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Tahun</span>
          <span class="fw-bold">{{ $idm->year }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Status IDM</span>
          <span class="fw-bold">{{ $idm->idmStatus->status_desc ?? 'N/A' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Skor Minimal</span>
          <span class="fw-bold">{{ $idm->min_score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Skor IKS</span>
          <span class="fw-bold">{{ $idm->iks_score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Skor IKE</span>
          <span class="fw-bold">{{ $idm->ike_score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Skor IKL</span>
          <span class="fw-bold">{{ $idm->ikl_score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Skor Tambahan</span>
          <span class="fw-bold">{{ $idm->addition_score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total Skor</span>
          <span class="fw-bold">{{ $idm->total_score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $idm->created_at?->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>
