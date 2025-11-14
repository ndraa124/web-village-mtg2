<!DOCTYPE html>
<html>

<head>
  <title>Notifikasi Pengajuan Layanan Baru</title>
</head>

<body>
  <p>Halo Admin,</p>

  <p>Telah masuk pengajuan layanan baru yang perlu ditinjau segera:</p>

  <p>
    <strong>Detail Pengajuan:</strong><br>
    Layanan: <strong>{{ $submission->service->title ?? 'N/A' }}</strong><br>
    Pengaju: <strong>{{ $submission->name }}</strong><br>
    Email: {{ $submission->email }}<br>
    Telepon: {{ $submission->phone ?? '-' }}<br>
    Tanggal: {{ $submission->created_at->format('d F Y H:i') }}
  </p>

  <p>
    <strong>Keterangan dari Pengaju:</strong><br>
    {{ $submission->user_description }}
  </p>

  <p>
    Mohon segera cek dan proses pengajuan ini melalui halaman admin:
  </p>

  <a href="{{ route('admin.services.submissions.show', $submission->id) }}" style="display: inline-block; padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 5px;">
    Tinjau Pengajuan Sekarang
  </a>

  <p>Terima kasih.</p>
  <p>Sistem Otomatis Desa Motoling Dua</p>
</body>

</html>
