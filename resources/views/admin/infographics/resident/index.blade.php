<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" href="#">Penduduk</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.infographics.resident.age.index') }}">Umur</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.infographics.resident.hamlet.index') }}">Jaga</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.infographics.resident.education.index') }}">Pendidikan</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.infographics.resident.job.index') }}">Pekerjaan</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.infographics.resident.must-select.index') }}">Wajib Pilih</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.infographics.resident.marriage.index') }}">Perkawinan</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.infographics.resident.religion.index') }}">Agama</a>
  </li>
</ul>

<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total Penduduk</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $resident->t_resident }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total Kepala Keluarga (KK)</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $resident->t_head_of_family }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total Laki-laki</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $resident->t_man }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total Perempuan</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $resident->t_woman }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total Penduduk Sementara</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $resident->t_temporary }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Total Mutasi</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $resident->t_mutation }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $resident->created_at->format('d M Y, H:i') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $resident->updated_at->format('d M Y, H:i') }}</span>
        </li>
      </ul>
    </div>
  </div>

  <div class="col-lg-12">
    <div class="d-flex gap-2">
      <a href="{{ route('admin.infographics.resident.edit', $resident->id) }}" class="btn btn-warning fw-normal text-white">Edit</a>
    </div>
  </div>
</div>
