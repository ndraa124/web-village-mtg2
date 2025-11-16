<div class="card bg-white rounded-10 border border-white mb-4">
  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
    <h5 class="m-0 fw-bold">Filter Status:</h5>
    <div class="d-flex gap-2">
      <a href="{{ route('admin.services.submissions.index', ['status' => 'all']) }}" class="btn btn-sm {{ request('status') == 'all' || !request('status') ? 'btn-primary' : 'btn-outline-primary' }}">Semua</a>
      <a href="{{ route('admin.services.submissions.index', ['status' => 'pending']) }}" class="btn btn-sm {{ request('status') == 'pending' ? 'btn-danger' : 'btn-outline-danger' }}">Baru {{ $stats['newSubmission'] }}</a>
      <a href="{{ route('admin.services.submissions.index', ['status' => 'verified']) }}" class="btn btn-sm {{ request('status') == 'verified' ? 'btn-info' : 'btn-outline-info' }}">Terverifikasi</a>
      <a href="{{ route('admin.services.submissions.index', ['status' => 'processing']) }}" class="btn btn-sm {{ request('status') == 'processing' ? 'btn-warning' : 'btn-outline-warning' }}">Diproses</a>
      <a href="{{ route('admin.services.submissions.index', ['status' => 'completed']) }}" class="btn btn-sm {{ request('status') == 'completed' ? 'btn-success' : 'btn-outline-success' }}">Selesai</a>
      <a href="{{ route('admin.services.submissions.index', ['status' => 'rejected']) }}" class="btn btn-sm {{ request('status') == 'rejected' ? 'btn-secondary' : 'btn-outline-secondary' }}">Ditolak</a>
    </div>
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
      <table class="table table-hover align-middle table-borderless table-striped">
        <thead>
          <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col">Layanan</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama Pengaju</th>
            <th scope="col">Nomor Tracking</th>
            <th scope="col">Tgl. Pengajuan</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($submissions as $submission)
            <tr>
              <td class="text-center">{{ $loop->iteration + ($submissions->currentPage() - 1) * $submissions->perPage() }}</td>
              <td>{{ $submission->service->title ?? 'Layanan Dihapus' }}</td>
              <td>{{ $submission->nik }}</td>
              <td>{{ $submission->name }}</td>
              <td>{{ $submission->tracking_number }}</td>
              <td>{{ \Carbon\Carbon::parse($submission->created_at)->format('d M Y H:i') }}</td>
              <td class="text-center">
                @php
                  $badgeClass = match ($submission->status) {
                      'pending' => 'bg-danger text-danger',
                      'verified' => 'bg-info text-info',
                      'processing' => 'bg-warning text-warning',
                      'rejected' => 'bg-secondary text-secondary',
                      default => 'bg-info text-info',
                  };
                @endphp
                <span class="badge {{ $badgeClass }} bg-opacity-25">{{ ucfirst(str_replace('_', ' ', $submission->status)) }}</span>
              </td>
              <td class="text-center">
                <form action="{{ route('admin.services.submissions.destroy', $submission) }}" method="POST" class="d-inline">
                  <div class="d-flex justify-content-center" style="gap: 18px;">
                    <a href="{{ route('admin.services.submissions.show', $submission) }}" class="bg-transparent p-0 border-0 hover-text-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Verifikasi">
                      <i class="material-symbols-outlined fs-16 fw-normal text-primary">verified</i>
                    </a>

                    @csrf @method('DELETE')
                    <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?')">
                      <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                    </button>
                  </div>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="text-center text-secondary p-20">
                Tidak ada pengajuan layanan yang ditemukan.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    {!! $submissions->appends(['status' => request('status')])->links() !!}
  </div>
</div>
