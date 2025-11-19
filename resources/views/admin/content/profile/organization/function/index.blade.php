<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.structure.index') }}">Struktur Organisasi Pemerintah Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.deliberation.index') }}">Struktur Organisasi Badan Permusrawaratan Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.officials.index') }}">Aparatur Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" href="#">Tupoksi Aparatur Desa</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="vision-tab" tabindex="0">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
        <form action="{{ route('admin.content.profile.organization.function-officials.index') }}" method="GET" class="table-src-form position-relative m-0">
          <input type="text" name="search" class="form-control w-350" value="{{ request('search') }}" placeholder="Cari nama jabatan...">
          <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>

        <a href="{{ route('admin.content.profile.organization.function-officials.create') }}" class="text-primary fs-16 text-decoration-none">+ Tambah Baru</a>
      </div>

      @if ($message = Session::get('success'))
        <div class="col-12 p-20 pb-0">
          <div class="alert fs-16 alert-success alert-dismissible" role="alert">
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
                <th scope="col" class="fw-medium">Nama Jabatan</th>
                <th scope="col" class="fw-medium">Deskripsi Singkat</th>
                <th scope="col" class="fw-medium text-center">Ikon</th>
                <th scope="col" class="fw-medium text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($functions as $row)
                <tr>
                  <td class="text-body text-center">{{ $loop->iteration + $functions->firstItem() - 1 }}</td>
                  <td class="text-body fw-bold">{{ $row->position_name }}</td>
                  <td class="text-body">{{ $row->shortDescription }}</td>
                  <td class="text-center">
                    @if ($row->icon_class)
                      <i class="{{ $row->icon_class }}"></i>
                    @else
                      -
                    @endif
                  </td>
                  <td>
                    <div class="d-flex justify-content-center" style="gap: 18px;">
                      <a href="{{ route('admin.content.profile.organization.function-officials.show', $row->id) }}" class="bg-transparent p-0 border-0 hover-text-success" data-bs-toggle="tooltip" data-bs-title="Detail">
                        <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                      </a>

                      <a href="{{ route('admin.content.profile.organization.function-officials.edit', $row->id) }}" class="bg-transparent p-0 border-0 hover-text-warning" data-bs-toggle="tooltip" data-bs-title="Edit">
                        <i class="material-symbols-outlined fs-16 fw-normal text-warning">edit</i>
                      </a>

                      <form action="{{ route('admin.content.profile.organization.function-officials.destroy', $row->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus tupoksi ini?')">
                          <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center text-secondary p-20">
                    Tidak ada data tupoksi yang ditemukan.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="pt-15 p-20">
          {!! $functions->appends(request()->query())->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>
