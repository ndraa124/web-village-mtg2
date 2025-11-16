<x-mail::message>
  # Notifikasi Pesan Baru dari Website

  Halo Admin,
  <br>
  Anda baru saja menerima pesan baru dari formulir kontak website.

  ---

  ### Detail Pengirim

  <x-mail::panel>
    <strong>Nama:</strong> {{ $formData['name'] }}<br>
    <strong>Email:</strong> {{ $formData['email'] }}<br>
    <strong>Subjek:</strong> {{ $formData['subject'] }}
  </x-mail::panel>

  ---

  ### Isi Pesan

  <x-mail::panel>
    {!! nl2br(e($formData['message'])) !!}
  </x-mail::panel>

  <br>
  <p>Terima kasih.</p>
  <p>Sistem Otomatis Desa Motoling Dua</p>
</x-mail::message>
