<!DOCTYPE html>
<html>
<head>
  <title>Pengajuan Layanan Anda Telah Selesai</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
  <p>Yth. Bapak/Ibu <strong>{{ $submission->name }}</strong>,</p>

  <p>Kami informasikan bahwa pengajuan layanan Anda telah <strong style="color: #16a34a;">SELESAI DIPROSES</strong>.</p>

  <div style="background-color: #f4f4f4; padding: 20px; border-radius: 8px;">
    <h3 style="margin-top: 0;">Detail Pengajuan Anda:</h3>
    <p><strong>Jenis Layanan:</strong> {{ $submission->service->title ?? 'N/A' }}</p>
    <p><strong>Nomor Tracking:</strong> {{ $submission->tracking_number ?? 'N/A' }}</p>
    <p><strong>Tanggal Pengajuan:</strong> {{ $submission->created_at->format('d F Y H:i') }}</p>
    <p><strong>Status:</strong> Selesai (Completed)</p>
  </div>

  <p style="margin-top: 20px;">
    Dokumen hasil akhir layanan Anda (format PDF) telah kami lampirkan pada email ini.
  </p>

  @if ($submission->admin_notes)
    <div style="background-color: #eef2ff; border-left: 5px solid #4f46e5; padding: 15px; border-radius: 8px; margin-top: 20px;">
      <strong style="color: #312e81;">Keterangan Tambahan dari Admin:</strong><br>
      <p style="margin: 5px 0 0 0;">{{ $submission->admin_notes }}</p>
    </div>
  @endif

  <p style="margin-top: 20px;">
    Anda dapat melihat riwayat pengajuan Anda kapan saja melalui tautan berikut:
    <br>
    <a href="{{ route('service.submission.tracking') }}" style="display: inline-block; padding: 10px 15px; background-color: #4f46e5; color: white; text-decoration: none; border-radius: 5px; margin-top: 10px;">
      Lacak Riwayat Pengajuan
    </a>
  </p>

  <p>Terima kasih telah menggunakan layanan kami.</p>

  <p>Hormat kami,<br>
    Pemerintah Desa Motoling Dua</p>
</body>
</html>