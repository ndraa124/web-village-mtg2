<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<div class="card bg-white rounded-10 border border-white mb-4">
  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
    <form action="{{ route('admin.services.index') }}" method="GET" class="table-src-form position-relative m-0">
      <input type="text" name="search" class="form-control w-350" value="{{ request('search') }}" placeholder="Cari judul layanan...">

      <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
        <span class="material-symbols-outlined">search</span>
      </button>
    </form>

    <a href="{{ route('admin.services.create') }}" class="btn btn-primary fw-normal text-white fs-16">+ Tambah Baru</a>
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
            <th scope="col" class="fw-medium text-center">Judul Layanan</th>
            <th scope="col" class="fw-medium text-center">Deskripsi Singkat</th>
            <th scope="col" class="fw-medium text-center">Ikon</th>
            <th scope="col" class="fw-medium text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($services as $service)
            <tr>
              <td class="text-body text-center">{{ $loop->iteration + ($services->currentPage() - 1) * $services->perPage() }}</td>
              <td>
                <a href="{{ url('/service/' . $service->slug) }}" target="_blank" class="text-primary text-decoration-none">
                  {{ $service->title }}
                </a>
              </td>
              <td class="text-body">{{ Str::limit($service->description, 80) }}</td>
              <td class="text-body text-center fs-5"><i class="{{ $service->icon_class }}"></i></td>
              <td class="text-body text-center">
                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline">
                  <div class="d-flex justify-content-center" style="gap: 18px;">
                    <a href="{{ route('admin.services.edit', $service) }}" class="bg-transparent p-0 border-0 hover-text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                      <i class="material-symbols-outlined fs-16 fw-normal text-warning">edit</i>
                    </a>

                    @csrf @method('DELETE')
                    <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus layanan ini? Semua pengajuan yang terkait juga akan terhapus.')">
                      <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                    </button>
                  </div>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center text-secondary p-20">
                Tidak ada data layanan yang ditemukan.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    {!! $services->links() !!}
  </div>
</div>
