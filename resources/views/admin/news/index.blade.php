<div class="card bg-white rounded-10 border border-white mb-4">
  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
    <form action="{{ route('manage-news.index') }}" method="GET" class="table-src-form position-relative m-0">
      <input type="text" name="search" class="form-control w-350" value="{{ request('search') }}" placeholder="Cari judul berita...">

      <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
        <span class="material-symbols-outlined">search</span>
      </button>
    </form>

    <a href="{{ route('manage-news.create') }}" class="text-primary fs-16 text-decoration-none">+ Tambah Baru</a>
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
            <th scope="col" class="fw-medium">Judul Berita/Informasi</th>
            <th scope="col" class="fw-medium">Author</th>
            <th scope="col" class="fw-medium">Kategori</th>
            <th scope="col" class="fw-medium text-center">Status</th>
            <th scope="col" class="fw-medium text-center">Tgl Publikasi</th>
            <th scope="col" class="fw-medium text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($news as $row)
          <tr>
            <td class="text-body text-center">{{ $loop->iteration + $news->firstItem() - 1 }}</td>
            <td class="text-body">
              {{ \Illuminate\Support\Str::limit($row->title, 70) }}
            </td>
            <td class="text-body">{{ $row->user->name ?? 'N/A' }}</td>
            <td class="text-body">{{ $row->category->name ?? '-' }}</td>
            <td class="text-body text-center">
              @if ($row->status == 'published')
              <span class="badge bg-success">Published</span>
              @else
              <span class="badge bg-warning text-dark">Draft</span>
              @endif
            </td>
            <td class="text-body text-center">{{ $row->published_at?->format('d M Y, H:i') ?? '-' }}</td>
            <td>
              <form action="{{ route('manage-news.destroy', $row->id) }}" method="POST">
                <div class="d-flex justify-content-center" style="gap: 18px;">

                  <a href="{{ route('manage-news.show', $row->id) }}" class="bg-transparent p-0 border-0 hover-text-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Detail">
                    <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                  </a>

                  <a href="{{ route('manage-news.edit', $row->id) }}" class="bg-transparent p-0 border-0 hover-text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
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
            <td colspan="7" class="text-center text-secondary p-20">
              Tidak ada data berita atau informasi yang ditemukan.
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    {!! $news->links() !!}
  </div>
</div>