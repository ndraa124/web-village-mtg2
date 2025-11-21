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
  <div class="col-lg-6 col-xxl-3 col-xxxl-6">
    <div class="row">

      <div class="col-md-6 col-lg-12">
        <div class="card bg-white p-20 rounded-10 border border-white mb-4">
          <div class="d-flex">
            <div class="flex-grow-1">
              <h3 class="mb-10">Total Penduduk</h3>
              <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $resident->t_resident }}</h2>
            </div>
            <div class="flex-shrink-0 ms-3">
              <div class="bg-primary text-white text-center rounded-circle d-block" style="width: 75px; height: 75px; line-height: 105px;">
                <i class="material-symbols-outlined fs-40">groups</i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-12">
        <div class="card bg-white p-20 rounded-10 border border-white mb-4">
          <div class="d-flex">
            <div class="flex-grow-1">
              <h3 class="mb-10">Total Penduduk Sementara</h3>
              <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $resident->t_temporary }}7</h2>
            </div>
            <div class="flex-shrink-0 ms-3">
              <div class="bg-warning text-white text-center rounded-circle d-block" style="width: 75px; height: 75px; line-height: 105px;">
                <i class="material-symbols-outlined fs-40">pace</i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-lg-6 col-xxl-3 col-xxxl-6">
    <div class="row">

      <div class="col-md-6 col-lg-12">
        <div class="card bg-white p-20 rounded-10 border border-white mb-4">
          <div class="d-flex">
            <div class="flex-grow-1">
              <h3 class="mb-10">Total Laki-laki</h3>
              <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $resident->t_man }}</h2>
            </div>
            <div class="flex-shrink-0 ms-3">
              <div class="bg-info text-white text-center rounded-circle d-block" style="width: 75px; height: 75px; line-height: 105px;">
                <i class="material-symbols-outlined fs-40">face</i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-12">
        <div class="card bg-white p-20 rounded-10 border border-white mb-4">
          <div class="d-flex">
            <div class="flex-grow-1">
              <h3 class="mb-10">Total Mutasi Penduduk</h3>
              <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $resident->t_mutation }}</h2>
            </div>
            <div class="flex-shrink-0 ms-3">
              <div class="bg-secondary text-white text-center rounded-circle d-block" style="width: 75px; height: 75px; line-height: 105px;">
                <i class="material-symbols-outlined fs-40">swap_horiz</i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-lg-6 col-xxl-3 col-xxxl-6">
    <div class="row">

      <div class="col-md-6 col-lg-12">
        <div class="card bg-white p-20 rounded-10 border border-white mb-4">
          <div class="d-flex">
            <div class="flex-grow-1">
              <h3 class="mb-10">Total Perempuan</h3>
              <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $resident->t_woman }}</h2>
            </div>
            <div class="flex-shrink-0 ms-3">
              <div class="bg-success text-white text-center rounded-circle d-block" style="width: 75px; height: 75px; line-height: 105px;">
                <i class="material-symbols-outlined fs-40">face_3</i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-lg-6 col-xxl-3 col-xxxl-6">
    <div class="row">

      <div class="col-md-6 col-lg-12">
        <div class="card bg-white p-20 rounded-10 border border-white mb-4">
          <div class="d-flex">
            <div class="flex-grow-1">
              <h3 class="mb-10">Total Kepala Keluarga</h3>
              <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $resident->t_head_of_family }}</h2>
            </div>
            <div class="flex-shrink-0 ms-3">
              <div class="bg-danger text-white text-center rounded-circle d-block" style="width: 75px; height: 75px; line-height: 105px;">
                <i class="material-symbols-outlined fs-40">home</i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-lg-12">
    <div class="d-flex gap-2">
      <a href="{{ route('admin.infographics.resident.edit', $resident->id) }}" class="btn btn-warning fw-normal text-white">Edit</a>
    </div>
  </div>
</div>
