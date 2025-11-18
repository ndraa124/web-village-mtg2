<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">NIK</span>
          <span class="fw-bold">{{ $user->nik }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Nama Lengkap</span>
          <span class="fw-bold">{{ $user->name }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Role</span>
          <span class="fw-bold">{{ $user->role }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $user->created_at->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>
</div>
