<div class="row">
  <div class="col-lg-12">
    @if ($message = Session::get('success'))
      <div class="col-12 mb-4">
        <div class="alert fs-16 alert-success alert-dismissible" role="alert">
          {{ $message }}
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    @endif

    <div class="card bg-white rounded-10 border border-white mb-4">
      <div class="p-20">
        <h3 class="fw-bold mb-3">Detail Pengajuan: {{ $submission->service->title ?? 'Layanan Tidak Ditemukan' }}</h3>

        <div class="d-flex gap-4 fs-14 text-secondary mb-3 border-bottom pb-3">
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">person</i>
            Pengaju: <strong>{{ $submission->name }}</strong>
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">mail</i>
            Email: <strong>{{ $submission->email }}</strong>
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">call</i>
            Telepon: <strong>{{ $submission->phone ?? '-' }}</strong>
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">calendar_month</i>
            Tanggal: <strong>{{ \Carbon\Carbon::parse($submission->created_at)->format('d F Y H:i') }}</strong>
          </span>
        </div>

        <div class="mb-4">
          <h5 class="fw-bold text-primary">Status Saat Ini:</h5>
          @php
            $badgeClass = match ($submission->status) {
                'pending' => 'bg-danger-light text-danger',
                'in_process' => 'bg-warning-light text-warning',
                'completed' => 'bg-success-light text-success',
                'rejected' => 'bg-secondary-light text-secondary',
                default => 'bg-info-light text-info',
            };
          @endphp
          <span class="badge {{ $badgeClass }} fs-6 p-2">{{ ucfirst(str_replace('_', ' ', $submission->status)) }}</span>

          @if ($submission->status === 'in_process')
            <p class="mt-2 text-warning">Pengajuan ini sedang dalam peninjauan Anda (otomatis berubah dari pending).</p>
          @elseif($submission->status === 'completed')
            <p class="mt-2 text-success">Selesai pada: {{ \Carbon\Carbon::parse($submission->completed_at)->format('d F Y') }}</p>
          @elseif($submission->status === 'rejected')
            <p class="mt-2 text-secondary">Ditolak pada: {{ \Carbon\Carbon::parse($submission->completed_at)->format('d F Y') }}</p>
          @endif
        </div>

        <hr>

        <div class="mb-4">
          <h5 class="fw-bold text-dark">Keterangan / Keperluan Pengajuan:</h5>
          <p class="p-3 border rounded bg-light">{{ $submission->user_description }}</p>
        </div>

        <div class="mb-4">
          <h5 class="fw-bold text-dark">Berkas Pendukung Pengaju:</h5>
          @if ($submission->supporting_files && count($submission->supporting_files) > 0)
            <ul class="list-group">
              @foreach ($submission->supporting_files as $file_path)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ basename($file_path) }}
                  <a href="{{ Storage::url($file_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">Lihat Berkas</a>
                </li>
              @endforeach
            </ul>
          @else
            <p class="text-muted">Tidak ada berkas pendukung diunggah.</p>
          @endif
        </div>

        <hr>

        @if ($submission->status === 'completed' || $submission->status === 'rejected')
          <h5 class="fw-bold text-dark mb-3">Riwayat Pemrosesan Admin:</h5>
          @if ($submission->status === 'completed')
            <div class="alert alert-success">
              <h6 class="fw-bold">Dokumen Hasil Akhir:</h6>
              @if ($submission->final_document_path)
                <p class="mb-2">File: {{ basename($submission->final_document_path) }}</p>
                <a href="{{ Storage::url($submission->final_document_path) }}" target="_blank" class="btn btn-sm btn-success">Download Dokumen Final</a>
              @else
                <p>Dokumen final tidak ditemukan.</p>
              @endif
              <h6 class="fw-bold mt-3">Keterangan untuk Pengguna:</h6>
              <p>{{ $submission->admin_notes ?? 'Tidak ada keterangan tambahan.' }}</p>
            </div>
          @elseif ($submission->status === 'rejected')
            <div class="alert alert-danger">
              <h6 class="fw-bold">Alasan Penolakan:</h6>
              <p>{{ $submission->rejection_reason }}</p>
            </div>
          @endif
          <hr>
        @endif

        @if ($submission->status === 'pending' || $submission->status === 'in_process')
          <div class="d-flex gap-3">
            <button type="button" class="btn btn-success fw-normal text-white" data-bs-toggle="modal" data-bs-target="#completeModal">
              <i class="material-symbols-outlined fs-16" style="vertical-align: sub;">done</i> Selesai (Completed)
            </button>

            <button type="button" class="btn btn-danger fw-normal text-white" data-bs-toggle="modal" data-bs-target="#rejectModal">
              <i class="material-symbols-outlined fs-16" style="vertical-align: sub;">close</i> Tolak (Rejected)
            </button>
          </div>
        @endif
      </div>

      <div class="border-top p-20">
        <a href="{{ route('admin.services.submissions.index') }}" class="btn btn-secondary fw-normal text-white">Kembali ke Daftar Pengajuan</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="completeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('admin.services.submissions.complete', $submission) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="completeModalLabel">Selesaikan Pengajuan Layanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-warning">
            Pastikan **File Hasil Akhir (PDF)** sudah valid. File ini akan dikirimkan ke email pengguna.
          </div>
          <div class="form-group mb-3">
            <label for="final_document" class="form-label">Upload File Hasil Akhir (PDF) <span class="text-danger">*</span></label>
            <input type="file" name="final_document" id="final_document" class="form-control @error('final_document') is-invalid @enderror" accept=".pdf">
            @error('final_document')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group mb-3">
            <label for="admin_notes" class="form-label">Keterangan Tambahan untuk Pengguna</label>
            <textarea name="admin_notes" id="admin_notes" rows="4" class="form-control @error('admin_notes') is-invalid @enderror" placeholder="Contoh: Dokumen fisik dapat diambil di Kantor Desa pada jam kerja.">{{ old('admin_notes') }}</textarea>
            @error('admin_notes')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Selesaikan & Kirim Email</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('admin.services.submissions.reject', $submission) }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="rejectModalLabel">Tolak Pengajuan Layanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger">
            **Alasan Penolakan** wajib diisi dan akan dikirimkan ke email pengguna.
          </div>
          <div class="form-group mb-3">
            <label for="rejection_reason" class="form-label">Alasan Penolakan <span class="text-danger">*</span></label>
            <textarea name="rejection_reason" id="rejection_reason" rows="4" class="form-control @error('rejection_reason') is-invalid @enderror" placeholder="Contoh: Berkas KK yang diunggah buram dan tidak terbaca. Harap ajukan ulang dengan berkas yang jelas.">{{ old('rejection_reason') }}</textarea>
            @error('rejection_reason')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Tolak & Kirim Email</button>
        </div>
      </form>
    </div>
  </div>
</div>
