<!DOCTYPE html>
<html>

<head>
  <title>Pengajuan Layanan Anda Telah Selesai</title>
</head>

<body>
  <p>Yth. Bapak/Ibu <strong>{{ $submission->name }}</strong>,</p>

  <p>Kami informasikan bahwa pengajuan layanan Anda telah **SELESAI DIPROSES**.</p>

  <p>
    <strong>Detail Pengajuan:</strong><br>
    Layanan: {{ $submission->service->title ?? 'N/A' }}<br>
    Tanggal Pengajuan: {{ $submission->created_at->format('d F Y H:i') }}
  </p>

  <p>
    Dokumen hasil akhir layanan Anda (format PDF) telah kami lampirkan pada email ini.
  </p>

  @if ($submission->admin_notes)
    <p>
      <strong>Keterangan Tambahan dari Admin:</strong><br>
      {{ $submission->admin_notes }}
    </p>
  @endif

  <p>Terima kasih telah menggunakan layanan kami.</p>

  <p>Hormat kami,<br>
    Tim Administrasi Desa</p>
</body>

</html>
