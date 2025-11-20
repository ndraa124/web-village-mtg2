@if (isset($summaries) && count($summaries) > 0)
  <div class="card bg-white rounded-10 border border-white mb-4">
    <div class="p-20">
      <h5 class="mb-3 fw-medium">Ringkasan Statistik</h5>

      <div class="d-flex flex-column gap-2">
        @foreach ($summaries as $summary)
          <div class="alert alert-light-primary border-0 text-body mb-0 fs-16" role="alert">
            <span class="material-symbols-outlined fs-20 align-middle me-2 text-primary">analytics</span>
            {!! $summary !!}
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endif

<div class="card bg-white rounded-10 border border-white mb-4">
  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
    <form action="{{ route('admin.infographics.resident.age.index') }}" method="GET" class="d-flex align-items-stretch gap-2">

      <select name="filter_age" class="form-select form-control w-auto" style="min-width: 150px;">
        <option value="">Semua Umur</option>
        @foreach ($agesList as $ageItem)
          <option value="{{ $ageItem }}" {{ request('filter_age') == $ageItem ? 'selected' : '' }}>
            {{ $ageItem }}
          </option>
        @endforeach
      </select>

      <select name="filter_gender" class="form-select form-control w-auto" style="min-width: 160px;">
        <option value="">Semua Gender</option>
        @foreach ($genders as $gender)
          <option value="{{ $gender->id }}" {{ request('filter_gender') == $gender->id ? 'selected' : '' }}>
            {{ $gender->gender_name }}
          </option>
        @endforeach
      </select>

      <button type="submit" class="btn btn-outline-primary d-flex align-items-center px-4 hover-white" data-bs-toggle="tooltip" title="Cari">
        <span class="material-symbols-outlined fs-22">search</span>
      </button>

      @if (request('filter_age') || request('filter_gender'))
        <a href="{{ route('admin.infographics.resident.age.index') }}" class="btn btn-outline-secondary d-flex align-items-center px-4 hover-white" data-bs-toggle="tooltip" title="Reset Filter">
          <span class="material-symbols-outlined fs-22">refresh</span>
        </a>
      @endif

    </form>

    <a href="{{ route('admin.infographics.resident.age.create') }}" class="text-primary fs-16 text-decoration-none">+ Tambah Baru</a>
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
            <th scope="col" class="fw-medium">Kelompok Umur</th>
            <th scope="col" class="fw-medium">Jenis Kelamin</th>
            <th scope="col" class="fw-medium text-center">Total</th>
            <th scope="col" class="fw-medium text-center">Tanggal Dibuat</th>
            <th scope="col" class="fw-medium text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($ages as $row)
            <tr>
              <td class="text-body text-center">{{ $loop->iteration }}</td>
              <td class="text-body">{{ $row->age }}</td>
              <td class="text-body">{{ $row->gender->gender_name ?? 'N/A' }}</td>
              <td class="text-body text-center">{{ $row->total }}</td>
              <td class="text-body text-center">{{ $row->created_at->format('d M Y, H:i') }}</td>
              <td>
                <form action="{{ route('admin.infographics.resident.age.destroy', $row->id) }}" method="POST">
                  <div class="d-flex justify-content-center" style="gap: 18px;">

                    <a href="{{ route('admin.infographics.resident.age.edit', $row->id) }}" class="bg-transparent p-0 border-0 hover-text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
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
              <td colspan="6" class="text-center text-secondary p-20">
                Tidak ada data yang ditemukan.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="pt-15 p-20">
      {!! $ages->links() !!}
    </div>
  </div>
</div>
