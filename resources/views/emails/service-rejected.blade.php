<!DOCTYPE html>
<html>
<head>
  <title>Pemberitahuan Penolakan Pengajuan Layanan</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
  <p>Yth. Bapak/Ibu <strong>{{ $submission->name }}</strong>,</p>

  <p>Kami informasikan dengan menyesal bahwa pengajuan layanan Anda telah <strong style="color: #dc2626;">DITOLAK</strong>.</p>

  <div style="background-color: #f4f4f4; padding: 20px; border-radius: 8px;">
    <h3 style="margin-top: 0;">Detail Pengajuan Anda:</h3>
    <p><strong>Jenis Layanan:</strong> {{ $submission->service->title ?? 'N/A' }}</p>
    <p><strong>Nomor Tracking:</strong> {{ $submission->tracking_number ?? 'N/A' }}</p>
    <p><strong>Tanggal Pengajuan:</strong> {{ $submission->created_at->format('d F Y H:i') }}</p>
    <p><strong>Status:</strong> Ditolak (Rejected)</p>
  </div>

  <div style="background-color: #fef2f2; border-left: 5px solid #dc2626; padding: 15px; border-radius: 8px; margin-top: 20px;">
    <strong style="color: #b91c1c;">Alasan Penolakan:</strong>
    <p style="margin: 5px 0 0 0;">{{ $submission->rejection_reason }}</p>
  </div>

  <p style="margin-top: 20px;">
    Mohon segera perbaiki/lengkapi kekurangan yang disebutkan di atas dan ajukan kembali layanan Anda. Jika Anda memiliki pertanyaan, silakan hubungi kantor kami.
  </p>

  <p style="margin-top: 20px;">
    Anda dapat melihat detail penolakan melalui tautan pelacakan:
    <br>
    <a href="{{ route('service.submission.tracking') }}" style="display: inline-block; padding: 10px 15px; background-color: #dc2626; color: white; text-decoration: none; border-radius: 5px; margin-top: 10px;">
      Lacak Status Pengajuan
    </a>
  </p>

  <p>Hormat kami,<br>
    Pemerintah Desa Motoling Dua</p>
</body>
</html>