<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" href="#">Visi</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.vision-mission.mission.index') }}">Misi</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="vision-tab" tabindex="0">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
        <form action="{{ route('admin.content.profile.vision-mission.vision.index') }}" method="GET" class="table-src-form position-relative m-0">
          <input type="text" name="search" class="form-control w-350" value="{{ request('search') }}" placeholder="Cari deskripsi visi...">

          <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>

        <a href="{{ route('admin.content.profile.vision-mission.vision.create') }}" class="text-primary fs-16 text-decoration-none">+ Tambah Visi Baru</a>
      </div>

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
                <th scope="col" class="fw-medium">Deskripsi Visi</th>
                <th scope="col" class="fw-medium text-center">Status</th>
                <th scope="col" class="fw-medium text-center">Tanggal Dibuat</th>
                <th scope="col" class="fw-medium text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($visions as $row)
                <tr>
                  <td class="text-body text-center">{{ $loop->iteration }}</td>
                  <td class="text-body">{{ $row->description }}</td>
                  <td class="text-body text-center">
                    @if ($row->is_active)
                      <span class="badge bg-success">Aktif</span>
                    @else
                      <span class="badge bg-secondary">Tidak Aktif</span>
                    @endif
                  </td>
                  <td class="text-body text-center">{{ $row->created_at->format('d M Y, H:i') }}</td>
                  <td>
                    <form action="{{ route('admin.content.profile.vision-mission.vision.destroy', $row->id) }}" method="POST">
                      <div class="d-flex justify-content-center" style="gap: 18px;">

                        <a href="{{ route('admin.content.profile.vision-mission.vision.edit', $row->id) }}" class="bg-transparent p-0 border-0 hover-text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <i class="material-symbols-outlined fs-16 fw-normal text-warning">edit</i>
                        </a>

                        @csrf @method('DELETE')
                        <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                          <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                        </button>
                      </div>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center text-secondary p-20">
                    Tidak ada data yang ditemukan.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="pt-15 p-20">
          {!! $visions->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>
