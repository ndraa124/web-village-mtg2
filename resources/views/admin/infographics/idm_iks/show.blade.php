<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Nama Indikator</span>
          <span class="fw-bold">{{ $idmIks->indicator_name }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Skor</span>
          <span class="fw-bold">{{ $idmIks->score }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Keterangan</span>
          <span class="fw-bold">{{ $idmIks->description }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Nilai</span>
          <span class="fw-bold">{{ $idmIks->value }}</span>
        </li>
        <li class="list-group-item d-flex flex-column justify-content-between align-items-start p-20">
          <span class="text-secondary fw-medium mb-2">Aktivitas</span>
          <span class="fw-bold">{{ $idmIks->activities ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Pusat</span>
          <span class="fw-bold">{{ $idmIks->center ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Provinsi</span>
          <span class="fw-bold">{{ $idmIks->province ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Kab/Kota</span>
          <span class="fw-bold">{{ $idmIks->regency ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Desa</span>
          <span class="fw-bold">{{ $idmIks->village ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">CSR</span>
          <span class="fw-bold">{{ $idmIks->csr ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Lainnya</span>
          <span class="fw-bold">{{ $idmIks->other ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $idmIks->created_at?->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>
