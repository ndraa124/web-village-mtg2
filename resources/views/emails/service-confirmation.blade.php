<!DOCTYPE html>
<html>

  <head>
    <title>Konfirmasi Pengajuan Layanan</title>
  </head>

  <body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <p>Yth. Bapak/Ibu <strong>{{ $submission->name }}</strong>,</p>

    <p>Terima kasih telah mengajukan layanan di Desa Motoling Dua. Pengajuan Anda telah berhasil kami terima dan akan segera diproses.</p>

    <div style="background-color: #f4f4f4; padding: 15px; border-radius: 8px;">
      <h3 style="margin-top: 0;">Detail Pengajuan Anda:</h3>
      <p><strong>Jenis Layanan:</strong> {{ $submission->service->title ?? 'N/A' }}</p>
      <p><strong>Nama Pengaju:</strong> {{ $submission->name }}</p>
      <p><strong>Tanggal:</strong> {{ $submission->created_at->format('d F Y, H:i') }}</p>
      <hr>
      <p style="font-size: 18px; font-weight: bold; color: #dc2626;">
        Nomor Tracking Anda:
      </p>
      <p style="font-size: 24px; font-weight: bold; color: #333; letter-spacing: 1px; margin: 0; padding: 10px; background-color: #fff; border: 1px dashed #ccc; text-align: center;">
        {{ $submission->tracking_number }}
      </p>
      <p style="font-size: 14px; margin-top: 10px;">
        Simpan nomor ini untuk melacak status pengajuan Anda.
      </p>
    </div>

    <p style="margin-top: 20px;">
      Anda dapat melacak status pengajuan Anda kapan saja melalui tautan berikut:
      <br>
      <a href="{{ route('service.submission.tracking') }}" style="display: inline-block; padding: 10px 15px; background-color: #dc2626; color: white; text-decoration: none; border-radius: 5px; margin-top: 10px;">
        Lacak Status Pengajuan
      </a>
    </p>

    <p>Hormat kami,<br>
      Pemerintah Desa Motoling Dua</p>
  </body>

</html>
