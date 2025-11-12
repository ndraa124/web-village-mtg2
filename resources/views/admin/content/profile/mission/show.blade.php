<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Status</span>
          <span class="fw-bold">
            @if ($mission->is_active)
            <span class="badge bg-success fs-14">Aktif</span>
            @else
            <span class="badge bg-secondary fs-14">Tidak Aktif</span>
            @endif
          </span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Judul Misi</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $mission->title }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Deskripsi Misi</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $mission->description }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $mission->created_at->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>