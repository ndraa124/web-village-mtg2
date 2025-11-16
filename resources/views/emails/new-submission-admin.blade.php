<!DOCTYPE html>
<html>
<head>
  <title>Notifikasi Pengajuan Layanan Baru</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
  <p>Halo Admin,</p>

  <p>Telah masuk pengajuan layanan baru yang perlu ditinjau segera:</p>

  <div style="background-color: #f4f4f4; padding: 20px; border-radius: 8px;">
    <h3 style="margin-top: 0;">Detail Pengajuan:</h3>
    <p><strong>Layanan:</strong> {{ $submission->service->title ?? 'N/A' }}</p>
    <p><strong>Nomor Tracking:</strong> {{ $submission->tracking_number ?? 'N/A' }}</p>
    <p><strong>Pengaju:</strong> {{ $submission->name }}</p>
    <p><strong>NIK:</strong> {{ $submission->nik ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $submission->email }}</p>
    <p><strong>Telepon:</strong> {{ $submission->phone ?? '-' }}</p>
    <p><strong>Tanggal:</strong> {{ $submission->created_at->format('d F Y H:i') }}</p>
    <hr>
    <p><strong>Keterangan dari Pengaju:</strong><br>
      {{ $submission->purpose }}
    </p>
  </div>

  <p style="margin-top: 20px;">
    Mohon segera cek dan proses pengajuan ini melalui halaman admin:
  </p>

  <a href="{{ route('admin.services.submissions.show', $submission->id) }}" style="display: inline-block; padding: 10px 20px; background-color: #dc2626; color: white; text-decoration: none; border-radius: 5px;">
    Tinjau Pengajuan Sekarang
  </a>

  <p>Terima kasih.</p>
  <p>Sistem Otomatis Desa Motoling Dua</p>
</body>
</html>