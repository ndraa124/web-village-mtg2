<!DOCTYPE html>
<html>

<head>
  <title>Pemberitahuan Penolakan Pengajuan Layanan</title>
</head>

<body>
  <p>Yth. Bapak/Ibu <strong>{{ $submission->name }}</strong>,</p>

  <p>Kami informasikan dengan menyesal bahwa pengajuan layanan Anda telah **DITOLAK**.</p>

  <p>
    <strong>Detail Pengajuan:</strong><br>
    Layanan: {{ $submission->service->title ?? 'N/A' }}<br>
    Tanggal Pengajuan: {{ $submission->created_at->format('d F Y H:i') }}
  </p>

  <p style="color: red; font-weight: bold;">
    Alasan Penolakan:
  </p>
  <div style="border: 1px solid #ccc; padding: 10px; background-color: #f8d7da; color: #721c24;">
    {{ $submission->rejection_reason }}
  </div>

  <p>Mohon segera perbaiki/lengkapi kekurangan yang disebutkan di atas dan ajukan kembali layanan Anda. Jika Anda memiliki pertanyaan, silakan hubungi kantor kami.</p>

  <p>Hormat kami,<br>
    Tim Administrasi Desa</p>
</body>

</html>
