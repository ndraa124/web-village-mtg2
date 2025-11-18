<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Nama Indikator</span>
          <span class="fw-bold">{{ $idmIke->indicator_name }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Skor</span>
          <span class="fw-bold">{{ $idmIke->score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Keterangan</span>
          <span class="fw-bold">{{ $idmIke->description }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Nilai</span>
          <span class="fw-bold">{{ $idmIke->value }}</span>
        </li>
        <li class="list-group-item d-flex flex-column justify-content-between align-items-start p-20">
          <span class="text-secondary fw-medium mb-2">Aktivitas</span>
          <span class="fw-bold">{{ $idmIke->activities ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Pusat</span>
          <span class="fw-bold">{{ $idmIke->center ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Provinsi</span>
          <span class="fw-bold">{{ $idmIke->province ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Kab/Kota</span>
          <span class="fw-bold">{{ $idmIke->regency ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Desa</span>
          <span class="fw-bold">{{ $idmIke->village ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">CSR</span>
          <span class="fw-bold">{{ $idmIke->csr ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Lainnya</span>
          <span class="fw-bold">{{ $idmIke->other ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $idmIke->created_at?->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>
