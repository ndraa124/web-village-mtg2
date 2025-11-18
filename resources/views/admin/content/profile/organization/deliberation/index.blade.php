<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.structure.index') }}">Struktur Organisasi Pemerintah Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" href="#">Struktur Organisasi Badan Permusrawaratan Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.officials.index') }}">Aparatur Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.function-officials.index') }}">Tupoksi Aparatur Desa</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="vision-tab" tabindex="0">
    <div class="card bg-white rounded-10 border border-white mb-4">
      @if ($message = Session::get('success'))
        <div class="col-12 p-20">
          <div class="alert fs-16 alert-success alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      @endif

      @if ($message = Session::get('error'))
        <div class="col-12">
          <div class="alert fs-16 alert-danger alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      @endif

      <div class="default-table-area mx-minus-1 mb-2">
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col" class="fw-medium text-center">#</th>
                <th scope="col" class="fw-medium">Gambar</th>
                <th scope="col" class="fw-medium">Keterangan</th>
                <th scope="col" class="fw-medium text-center">Tanggal Dibuat</th>
                <th scope="col" class="fw-medium text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-body text-center">1</td>
                <td>
                  <img src="{{ $deliberation->image_url }}" alt="{{ $deliberation->caption ?? 'Deliberation Image' }}" style="width: 100px; height: 70px; object-fit: cover; border-radius: 8px;">
                </td>
                <td class="text-body">{{ $deliberation->caption ?? '-' }}</td>
                <td class="text-body text-center">{{ $deliberation->created_at->format('d M Y, H:i') }}</td>
                <td>
                  <div class="d-flex justify-content-center" style="gap: 18px;">
                    <a href="{{ route('admin.content.profile.organization.deliberation.edit', $deliberation->id) }}" class="bg-transparent p-0 border-0 hover-text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                      <i class="material-symbols-outlined fs-16 fw-normal text-warning">edit</i>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
