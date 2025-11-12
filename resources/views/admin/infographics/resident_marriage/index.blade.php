<div class="card bg-white rounded-10 border border-white mb-4">
  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
    <form action="{{ route('admin.infographics.resident.marriage.index') }}" method="GET" class="table-src-form position-relative m-0">
      <input type="text" name="search" class="form-control w-350" value="{{ request('search') }}" placeholder="Cari nama perkawinan...">

      <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
        <span class="material-symbols-outlined">search</span>
      </button>
    </form>

    <a href="{{ route('admin.infographics.resident.marriage.create') }}" class="text-primary fs-16 text-decoration-none">+ Tambah Baru</a>
  </div>

  @if ($message = Session::get('success'))
  <div class="col-12 p-20 pb-0">
    <div class="alert fs-16 alert-success alert-dismissible" role="alert">
      {{ $message }}
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  @endif

  @if ($message = Session::get('error'))
  <div class="col-12 p-20 pb-0">
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
            <th scope="col" class="fw-medium">Nama Perkawinan</th>
            <th scope="col" class="fw-medium text-center">Total Penduduk</th>
            <th scope="col" class="fw-medium text-center">Tanggal Dibuat</th>
            <th scope="col" class="fw-medium text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($residentMarriages as $row)
          <tr>
            <td class="text-body text-center">{{ $loop->iteration + $residentMarriages->firstItem() - 1 }}</td>
            <td class="text-body">{{ $row->marriage->marriage_name ?? 'N/A' }}</td>
            <td class="text-body text-center">{{ $row->total }}</td>
            <td class="text-body text-center">{{ $row->created_at->format('d M Y, H:i') }}</td>
            <td>
              <form action="{{ route('admin.infographics.resident.marriage.destroy', $row->id) }}" method="POST">
                <div class="d-flex justify-content-center" style="gap: 18px;">

                  <a href="{{ route('admin.infographics.resident.marriage.edit', $row->id) }}" class="bg-transparent p-0 border-0 hover-text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
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

    {!! $residentMarriages->links() !!}
  </div>
</div>